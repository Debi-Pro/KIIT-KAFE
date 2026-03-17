<!-- ═══════════════════════════════════════
     PAGE 6: SUCCESS + INVOICE
═══════════════════════════════════════ -->
<div id="page-success" class="page">
  <div class="success-top">
    <button class="back-home-pill" onclick="nav('landing')">←</button>
    <div class="success-check">✓</div>
    <h1>Payment Done Successfully</h1>
    <p>We have received your order will be prepared in 10-15 min.<br>Your order number is <strong id="suc-order-num">#10204D</strong></p>
    <div class="success-meta-pill">
      <div class="smeta-item">Payment Status : <span>Successful</span></div>
      <div class="smeta-item">Order Status : <span>Preparing</span></div>
      <div class="smeta-item">Date : <span id="suc-date">—</span></div>
      <div class="smeta-item">Payment method : <span id="suc-pay">UPI Payment</span></div>
    </div>
  </div>

  <div class="success-body">
    <div class="success-grid">
      <!-- LEFT -->
      <div>
        <div class="track-card">
          <div class="track-title">Order Status : <span style="color:#f59e0b;">Preparing ...</span></div>
          <div class="preparing-badge">Preparing</div>
          <p class="track-desc">We have accepted your order, we're getting it ready. A confirmation details has been sent to your mobile.</p>
          <div class="progress-steps">
            <div class="ps-step"><div class="ps-dot done">✓</div><div class="ps-label">Placed</div></div>
            <div class="ps-line done"></div>
            <div class="ps-step"><div class="ps-dot done">✓</div><div class="ps-label">Confirmed</div></div>
            <div class="ps-line done"></div>
            <div class="ps-step"><div class="ps-dot active">🍳</div><div class="ps-label">Preparing</div></div>
            <div class="ps-line"></div>
            <div class="ps-step"><div class="ps-dot">🛵</div><div class="ps-label">On Way</div></div>
            <div class="ps-line"></div>
            <div class="ps-step"><div class="ps-dot">✓</div><div class="ps-label">Delivered</div></div>
          </div>
        </div>
        <div class="customer-card">
          <div class="cust-title">Customer Details</div>
          <div class="cust-grid">
            <div class="cust-field"><label>Email</label><p id="suc-email">2305076@kiit.ac.in</p></div>
            <div class="cust-field"><label>Phone no.</label><p id="suc-phone">8809989XXX</p></div>
            <div class="cust-field"><label>Customer Name</label><p id="suc-name">Saurabh Sharma</p></div>
            <div class="cust-field full"><label>Billing Address</label><p id="suc-addr">Jittu Mohapatra, Campus 25, KIIT Kafe, KIIT University...</p></div>
          </div>
        </div>
      </div>
      <!-- RIGHT: INVOICE -->
      <div class="invoice-side">
        <div class="inv-side-header">
          <div class="inv-side-title">Download Invoice</div>
          <button class="dl-btn-circle" onclick="openInvoice()">⬇</button>
        </div>
        <div class="os-sum-title">Order Summary</div>
        <div id="success-items-list"></div>
        <div class="os-inv-total">
          <span>Total</span>
          <span id="success-total">₹0</span>
        </div>
      </div>
    </div>
    <button class="back-to-home-btn" onclick="nav('landing')">Back to Home</button>
  </div>
</div>