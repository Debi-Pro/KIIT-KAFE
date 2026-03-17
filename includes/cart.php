<!-- ═══════════════════════════════════════
     PAGE 4: CART
═══════════════════════════════════════ -->
<div id="page-cart" class="page">
  <nav class="navbar" style="background:#1a3d28;">
    <div class="nav-logo">KIIT<span style="color:var(--orange);">KAFE</span></div>
    <div class="nav-actions">
      <button class="btn-login" onclick="nav('menu')" style="color:white;">← Menu</button>
    </div>
  </nav>

  <div id="cart-empty-state" style="display:none;" class="empty-cart">
    <div class="empty-icon">🛒</div>
    <h3>Your cart is empty</h3>
    <p>Add items from the menu to get started!</p>
    <button class="cta-primary" style="margin-top:16px;" onclick="nav('menu')">Browse Menu</button>
  </div>

  <div id="cart-filled-state">
    <div class="cart-layout">
      <!-- LEFT -->
      <div>
        <div class="cart-items-section" id="cart-items-list"></div>
        <div style="height:20px;"></div>
        <div class="delivery-address-card">
          <div class="da-title">Delivery Address</div>
          <div class="da-box">
            <div>
              <div class="home-label">Home</div>
              <div class="addr-text">KP-25 Block A, Workers Colony, KIIT University,<br>Bhubaneswar, 751024 (KIIT)</div>
            </div>
            <button class="change-btn">Change</button>
          </div>
        </div>
      </div>
      <!-- RIGHT: BILL -->
      <div>
        <div class="bill-card">
          <div class="bill-title">Bill Details</div>
          <div class="bill-row"><span>Item Total</span><span id="bill-item-total">₹0</span></div>
          <div class="bill-row"><span>Delivery Fee</span><span id="bill-delivery">₹20</span></div>
          <div class="bill-row"><span>Cancellation Charges</span><span>₹0</span></div>
          <div class="bill-row"><span>GST &amp; Other Taxes</span><span id="bill-gst">₹0</span></div>
          <button class="coupon-btn" onclick="showCouponModal()">
            <span>🏷</span> Apply Coupons!
          </button>
          <div class="discount-row"><span>Discount</span><span id="bill-discount">₹ -0</span></div>
          <div class="no-contact-opt">
            <span class="check-icon">✅</span>
            <div>
              <div class="nc-text">Opt in For no Contact Delivery?</div>
              <div class="nc-sub">Partner will safely place the order outside your door (not for COD)</div>
            </div>
          </div>
          <button class="total-charge-btn" onclick="nav('payment')">
            <span>Total Charge</span>
            <span class="amt" id="bill-total">₹0</span>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>