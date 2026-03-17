/* ═══════════════════════════════════════════
   CART LOGIC
═══════════════════════════════════════════ */
function addToCartById(id) {
  const item = MENU.find(m => m.id === id);
  if (!item) return;
  const ex = cart.find(c => c.id === id);
  if (ex) { ex.qty++; toast('🛒 ' + item.name + ' qty updated'); }
  else { cart.push({...item, qty:1}); toast('✅ ' + item.name + ' added!'); }
  updateCartIndicators();
  renderMenuGrid();
}

function changeQty(id, delta) {
  const item = cart.find(c => c.id === id);
  if (!item) return;
  item.qty += delta;
  if (item.qty <= 0) cart = cart.filter(c => c.id !== id);
  renderCart();
  updateCartIndicators();
}

function getCartTotals() {
  const itemTotal = cart.reduce((s,i) => s + i.price * i.qty, 0);
  const delivery = itemTotal > 0 ? 20 : 0;
  const gst = Math.round(itemTotal * 0.05);
  const grand = itemTotal + delivery + gst - discount;
  return { itemTotal, delivery, gst, discount, grand };
}

function renderCart() {
  const t = getCartTotals();
  const empty = document.getElementById('cart-empty-state');
  const filled = document.getElementById('cart-filled-state');

  if (cart.length === 0) {
    empty.style.display = 'flex';
    filled.style.display = 'none';
    return;
  }
  empty.style.display = 'none';
  filled.style.display = 'block';

  document.getElementById('cart-items-list').innerHTML = cart.map(item => `
    <div class="cart-item">
      <div class="ci-thumb">
        ${item.img ? `<img src="${item.img}" alt="${item.name}" onerror="this.parentNode.innerHTML='<span style=font-size:36px>${item.emoji}</span>'">` : `<span style="font-size:36px">${item.emoji}</span>`}
      </div>
      <div class="ci-details">
        <div class="ci-name">${item.name}</div>
        <div class="ci-sub">${item.sub}</div>
        <div class="qty-row">
          <div class="qty-pill">
            <button class="minus" onclick="changeQty(${item.id},-1)">−</button>
            <span class="qty-num">${item.qty}</span>
            <button class="plus" onclick="changeQty(${item.id},1)">+</button>
          </div>
        </div>
      </div>
      <div class="ci-price">₹${item.price * item.qty}</div>
    </div>
  `).join('');

  document.getElementById('bill-item-total').textContent = '₹' + t.itemTotal;
  document.getElementById('bill-delivery').textContent = '₹' + t.delivery;
  document.getElementById('bill-gst').textContent = '₹' + t.gst;
  document.getElementById('bill-discount').textContent = '₹ -' + t.discount;
  document.getElementById('bill-total').textContent = '₹' + t.grand;
}

function updateCartIndicators() {
  const count = cart.reduce((s,i) => s+i.qty, 0);
  const dot = document.getElementById('cart-dot');
  if (dot) dot.style.display = count > 0 ? 'block' : 'none';
}

function applyCoupon() {
  const code = document.getElementById('coupon-input').value.toUpperCase().trim();
  const t = getCartTotals();
  if (code === 'KIIT10') {
    discount = Math.round(t.itemTotal * 0.1);
    toast('🎉 KIIT10 applied — 10% off!');
  } else if (code === 'STUDENT') {
    discount = 50;
    toast('🎓 STUDENT applied — ₹50 off!');
  } else {
    toast('❌ Invalid coupon code');
    return;
  }
  closeModal('coupon-modal');
  renderCart();
}

function showCouponModal() { document.getElementById('coupon-modal').classList.add('show'); }

function validateCartAndCheckout() {
  if (cart.length === 0) {
    toast('🛒 Your cart is empty');
    return false;
  }
  
  return fetch("api/validate_cart.php", {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({ cart_items: cart })
  })
  .then(res => res.json())
  .then(data => {
    if (data.status === "success") {
      nav('payment');
      return true;
    } else {
      // Show specific error messages
      if (data.errors && data.errors.length > 0) {
        const errorMsg = data.errors.map(e => {
          const item = cart.find(c => c.id === e.id);
          return item ? `${item.name}: ${e.message}` : e.message;
        }).join('; ');
        toast('⚠️ ' + errorMsg);
      } else {
        toast('⚠️ ' + (data.message || 'Cart validation failed'));
      }
      return false;
    }
  })
  .catch(err => {
    console.error("Cart validation error:", err);
    toast('❌ Unable to validate cart');
    return false;
  });
}

function handleCheckout() {
  validateCartAndCheckout();
}
