<!-- ═══════════════════════════════════════
     PAGE 5: PAYMENT
═══════════════════════════════════════ -->
<div id="page-payment" class="page">
  <div class="payment-header">
    <button onclick="nav('cart')" style="color:rgba(255,255,255,0.7);font-size:14px;margin-bottom:8px;">← Back to Cart</button>
    <h1>Select payment method</h1>
  </div>

  <div class="payment-body">
    <!-- LEFT: PAYMENT OPTIONS -->
    <div>
      <div class="order-id-bar">Order ID : <span id="payment-order-id">#1204D1</span></div>
      <div class="pay-method-list">
        <div class="pay-opt selected" id="pay-upi" onclick="selectPay('upi')">
          <span class="opt-icon">📱</span> UPI Payment
        </div>
        <div class="upi-sub" id="upi-sub">
        <div style="display:flex;gap:10px;margin-top:12px;flex-wrap:wrap">

<button onclick="payWithApp('gpay')" style="flex:1;padding:10px;background:#4285F4;color:white;border-radius:8px;font-weight:700">
GPay
</button>

<button onclick="payWithApp('phonepe')" style="flex:1;padding:10px;background:#5f259f;color:white;border-radius:8px;font-weight:700">
PhonePe
</button>

<button onclick="payWithApp('paytm')" style="flex:1;padding:10px;background:#00baf2;color:white;border-radius:8px;font-weight:700">
Paytm
</button>

</div>
          <p style="font-size:13px;font-weight:700;color:#444;margin-bottom:10px;">Enter UPI ID or Scan QR</p>
          <input class="upi-input" type="text" placeholder="yourname@upi or @phonepe" id="upi-id-input">
          <div class="qr-box" style="margin-top:14px;">
            <div class="qr-code">
  <img id="upi-qr" width="120">
</div>
            <p>Scan with any UPI app</p>
          </div>
        </div>
        <div class="pay-opt" id="pay-qr" onclick="selectPay('qr')">
          <span class="opt-icon">🔳</span> Scan with QR
        </div>
        <div class="pay-opt" id="pay-cash" onclick="selectPay('cash')">
          <span class="opt-icon">💵</span> Cash Payment
        </div>
      </div>
    </div>

    <!-- RIGHT: ORDER SUMMARY -->
    <div>
      <div class="order-summary-card">
        <div class="os-title">Order Summary</div>
        <div id="payment-items-list"></div>
        <div class="os-total-row">
          <span>Total</span>
          <span id="payment-total">₹0</span>
        </div>
        <button class="btn-place-order" onclick="placeOrder()">⚡ Confirm &amp; Pay</button>
      </div>
    </div>
  </div>
</div>