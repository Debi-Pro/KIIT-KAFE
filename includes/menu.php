<!-- ═══════════════════════════════════════
     PAGE 3: MENU
═══════════════════════════════════════ -->
<div id="page-menu" class="page">
  <div class="menu-topbar">
    <div class="welcome">Welcome, <span id="welcome-name">Guest</span></div>
    <div class="topbar-icons">
      <button class="topbar-icon-btn" onclick="nav('cart')"><span class="icon">🛒</span>Cart<span class="badge-dot" id="cart-dot" style="display:none;"></span></button>
      <button class="topbar-icon-btn"><span class="icon">🔍</span>Search</button>
      <button class="topbar-icon-btn"><span class="icon">🏷</span>Offer</button>
      <button class="topbar-icon-btn"><span class="icon">💬</span>Contact Us</button>
      <button class="topbar-icon-btn" onclick="currentUser?nav('auth'):nav('auth')"><span class="icon">👤</span>Account</button>
    </div>
  </div>

  <div class="menu-hero-bar">
    <h1>ORDER AHEAD. SKIP THE QUEUE.<br><span>ENJOY AT KIIT KAFE...</span></h1>
    <div class="location-bar">
      <div class="location-info">
        <div class="loc-logo">🏫</div>
        <div class="loc-text">
          <div class="name">Campus 25, KIIT University</div>
          <div class="addr">Patia, Bhubaneswar</div>
        </div>
      </div>
      <div class="search-row">
        <div class="search-wrap">
          <span class="search-icon">🔍</span>
          <input class="menu-search" type="text" id="menu-search-input" placeholder="Search for food items 'Coke'" oninput="filterMenuItems()">
        </div>
        <button class="my-acc-btn" onclick="nav('auth')">My Accounts</button>
      </div>
    </div>
  </div>

  <div class="categories-strip">
    <div class="cat-scroll" id="cat-scroll"></div>
  </div>

  <div class="menu-body">
    <div class="menu-grid-title">
      <span id="menu-section-label">Top rated for you</span>
      <button class="sort-btn">Sort By ▼</button>
    </div>
    <div class="items-grid" id="items-grid"></div>
  </div>

  <!-- FOOTER -->
  <footer class="footer" style="margin-top:40px;">
    <div class="footer-grid">
      <div class="footer-brand">
        <div class="logo">Kiit <span>Kafe</span></div>
        <p>Since 2026</p>
      </div>
      <div class="footer-col">
        <h4>Company</h4>
        <a>About Us</a><a>Swiggy Corporate</a><a>Careers</a><a>Team</a>
      </div>
      <div class="footer-col">
        <h4>Help</h4>
        <a>Feedback</a><a>FAQ's</a>
      </div>
      <div class="footer-col">
        <h4>My Accounts</h4>
        <a>Campus 25, KIIT University</a><a>Patia, Bhubaneswar</a>
      </div>
    </div>
    <div class="footer-bottom">
      <p style="color:var(--muted);">Developed By: <strong style="color:var(--lime);">Saurabh Sharma, Chinmay Kar, Shirsh Mohan, Debi Prasad, Kush Singh, Parthiv Datta</strong></p>
    </div>
  </footer>
</div>