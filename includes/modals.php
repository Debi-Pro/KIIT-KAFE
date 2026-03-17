<!-- ═══════════════════════════════════════
     INVOICE MODAL
═══════════════════════════════════════ -->
<div class="modal-overlay" id="invoice-modal">
  <div class="invoice-modal-box">
    <div class="inv-modal-top">
      <div>
        <h3>🍽 KIIT Kafe · Tax Invoice</h3>
        <div class="inv-ref" id="inv-modal-ref">Invoice #INV-10204D</div>
      </div>
      <button class="inv-close" onclick="closeModal('invoice-modal')">✕</button>
    </div>
    <div class="inv-modal-body">
      <div class="inv-meta-row"><span>Customer</span><span id="inv-m-customer">Saurabh Sharma</span></div>
      <div class="inv-meta-row"><span>Order ID</span><span id="inv-m-orderid">#10204D</span></div>
      <div class="inv-meta-row"><span>Date &amp; Time</span><span id="inv-m-date">—</span></div>
      <div class="inv-meta-row"><span>Payment Method</span><span id="inv-m-pay">UPI ✓</span></div>
      <div class="inv-meta-row"><span>Address</span><span>KP-25 Block A, KIIT University</span></div>
      <div class="inv-divider"></div>
      <div id="inv-m-items"></div>
      <div class="inv-divider"></div>
      <div class="inv-meta-row"><span>Item Total</span><span id="inv-m-subtotal">₹0</span></div>
      <div class="inv-meta-row"><span>Delivery</span><span>₹20</span></div>
      <div class="inv-meta-row"><span>GST (5%)</span><span id="inv-m-gst">₹0</span></div>
      <div class="inv-meta-row"><span>Discount</span><span id="inv-m-discount" style="color:#2d6a4f;">-₹0</span></div>
      <div class="inv-grand-row"><span>Grand Total</span><span id="inv-m-grand">₹0</span></div>
      <div class="inv-footer-note">Thank you for ordering with KIIT Kafe! 🙏<br><span>support@kiitkafe.in · Campus 25, KIIT University, Bhubaneswar</span><br><span style="font-size:10px;color:#ccc;">Developed by: Saurabh Sharma &amp; Team</span></div>
    </div>
    <div class="inv-modal-actions">
      <button class="inv-act print" onclick="window.print()">🖨 Print Invoice</button>
      <button class="inv-act close-inv" onclick="closeModal('invoice-modal')">Close</button>
    </div>
  </div>
</div>

<!-- COUPON MODAL -->
<div class="modal-overlay" id="coupon-modal">
  <div style="background:white;border-radius:20px;padding:32px;max-width:380px;width:100%;animation:popIn 0.3s ease both;">
    <h3 style="font-family:'Syne',sans-serif;font-size:18px;font-weight:900;color:#1a1a1a;margin-bottom:16px;">🏷 Apply Coupon</h3>
    <div style="display:flex;gap:10px;margin-bottom:12px;">
      <input id="coupon-input" type="text" placeholder="Enter coupon code" style="flex:1;padding:12px;border:1.5px solid #ddd;border-radius:8px;font-size:14px;outline:none;">
      <button onclick="applyCoupon()" style="padding:12px 20px;background:#2d6a4f;color:white;border-radius:8px;font-weight:800;font-size:14px;">Apply</button>
    </div>
    <div style="font-size:12px;color:#888;margin-bottom:20px;">Try: <strong>KIIT10</strong> (10% off) or <strong>STUDENT</strong> (₹50 off)</div>
    <button onclick="closeModal('coupon-modal')" style="width:100%;padding:12px;background:#f0f0f0;border-radius:8px;font-weight:700;color:#444;">Close</button>
  </div>
</div>

<div class="toast" id="toast-el"></div>