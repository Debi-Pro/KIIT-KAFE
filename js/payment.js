/* ═══════════════════════════════════════════
   PAYMENT
═══════════════════════════════════════════ */
function selectPay(method) {
  selectedPayMethod = method;
  ['pay-upi','pay-qr','pay-cash'].forEach(id => document.getElementById(id).classList.remove('selected'));
  document.getElementById('pay-' + method).classList.add('selected');
  document.getElementById('upi-sub').classList.toggle('show', method === 'upi');
}

function renderPaymentPage() {
  const ts = Date.now().toString(36).toUpperCase();
  currentOrderId = '#' + ts.slice(-6) + 'D';
  document.getElementById('payment-order-id').textContent = currentOrderId;
  generateUPIQR();
  
  const t = getCartTotals();
  document.getElementById('payment-items-list').innerHTML = cart.map(item => `
    <div class="os-item">
      <div class="os-img">
        ${item.img ? `<img src="${item.img}" alt="${item.name}" onerror="this.parentNode.textContent='${item.emoji}'">` : item.emoji}
      </div>
      <div class="os-info">
        <div class="os-name">${item.name}</div>
        <div class="os-sub">${item.sub}</div>
      </div>
      <div class="os-qty">X${item.qty}<br><span style="font-weight:400;font-size:9px;">unit</span></div>
      <div class="os-price">₹${item.price * item.qty}</div>
    </div>
  `).join('');
  document.getElementById('payment-total').textContent = '₹' + t.grand;
}

function generateUPIQR() {
  const t = getCartTotals();
  const upiID = "kiitkafe@upi";
  const amount = t.grand;
  const upiURL = `upi://pay?pa=${upiID}&pn=KIIT%20KAFE&am=${amount}&cu=INR`;
  const qrAPI = `https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=${encodeURIComponent(upiURL)}`;
  document.getElementById("upi-qr").src = qrAPI;
}

function payWithApp(app){
  const t = getCartTotals();
  const upiID = "kiitkafe@upi";
  const amount = t.grand;
  const upiLink = `upi://pay?pa=${upiID}&pn=KIIT%20KAFE&am=${amount}&cu=INR`;
  window.location.href = upiLink;
}

function placeOrder() {
  if (cart.length === 0) { toast("⚠ Cart is empty!"); return; }
  if (!currentUser) { toast("⚠ Please login first"); nav("auth"); return; }

  if (selectedPayMethod === "upi") {
    const upi = document.getElementById("upi-id-input").value.trim();
    const upiPattern = /^[\w.-]+@[\w]+$/;
    if (!upiPattern.test(upi)) { toast("⚠ Enter valid UPI ID (example: name@upi)"); return; }
    toast("🔄 Processing UPI payment...");
    setTimeout(() => { completePayment(); }, 2000);
  } else if (selectedPayMethod === "qr") {
    toast("📲 Waiting for QR payment confirmation...");
  } else if (selectedPayMethod === "cash") {
    toast("💵 Cash payment selected");
  }

  const now = new Date();
  const dateStr = now.toLocaleDateString('en-IN',{day:'numeric',month:'short',year:'numeric'}) + ' at ' + now.toLocaleTimeString('en-IN',{hour:'2-digit',minute:'2-digit'});
  const payLabels = { upi:'UPI Payment', qr:'QR Scan', cash:'Cash Payment' };

  // Fill success page
  document.getElementById('suc-order-num').textContent = currentOrderId;
  document.getElementById('suc-date').textContent = dateStr;
  document.getElementById('suc-pay').textContent = payLabels[selectedPayMethod];
  document.getElementById('suc-name').textContent = currentUser.name;
  document.getElementById('suc-email').textContent = currentUser.email;
  document.getElementById('suc-phone').textContent = currentUser.phone || '8809989XXX';
  document.getElementById('suc-addr').textContent = 'KP-25 Block A, Workers Colony, KIIT University, Bhubaneswar';

  const t = getCartTotals();

  // Success items
  document.getElementById('success-items-list').innerHTML = cart.map(item => `
    <div class="os-inv-item">
      <div class="os-inv-emoji">
        ${item.img ? `<img src="${item.img}" alt="${item.name}" style="width:100%;height:100%;object-fit:cover;border-radius:8px;" onerror="this.parentNode.textContent='${item.emoji}'">` : item.emoji}
      </div>
      <div class="os-inv-info"><div class="os-inv-name">${item.name}</div><div class="os-inv-desc">${item.sub}</div></div>
      <div class="os-inv-qty">X${item.qty}<br><span style="font-weight:400;font-size:9px;">unit</span></div>
      <div class="os-inv-price">₹${item.price * item.qty}</div>
    </div>
  `).join('');
  document.getElementById('success-total').textContent = '₹' + t.grand;

  // Fill invoice modal
  document.getElementById('inv-modal-ref').textContent = 'Invoice ' + currentOrderId;
  document.getElementById('inv-m-customer').textContent = currentUser.name;
  document.getElementById('inv-m-orderid').textContent = currentOrderId;
  document.getElementById('inv-m-date').textContent = dateStr;
  document.getElementById('inv-m-pay').textContent = payLabels[selectedPayMethod] + ' ✓';
  document.getElementById('inv-m-items').innerHTML = cart.map(item => `
    <div class="inv-line-item"><span>${item.emoji} ${item.name} × ${item.qty}</span><span>₹${item.price * item.qty}</span></div>
  `).join('');
  document.getElementById('inv-m-subtotal').textContent = '₹' + t.itemTotal;
  document.getElementById('inv-m-gst').textContent = '₹' + t.gst;
  document.getElementById('inv-m-discount').textContent = '-₹' + t.discount;
  document.getElementById('inv-m-grand').textContent = '₹' + t.grand;

  fetch("api/create_order.php", {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({
      order_code: currentOrderId,
      user_id: currentUser.id,
      payment_method: selectedPayMethod,
      total: t.grand,
      items: cart
    })
  })
  .then(res => res.json())
  .then(data => { console.log("Order saved:", data); });

  cart = [];
  discount = 0;
  updateCartIndicators();
  nav('success');
}

function completePayment(){ toast("✅ Payment successful"); }
function openInvoice() { document.getElementById('invoice-modal').classList.add('show'); }
