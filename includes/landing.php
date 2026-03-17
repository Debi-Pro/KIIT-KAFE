<!-- ═══════════════════════════════════════
     PAGE 1: LANDING
═══════════════════════════════════════ -->
<div id="page-landing" class="page active">
  <nav class="navbar">
    <div class="nav-logo">KIIT<span>KAFE</span></div>
    <div class="nav-links">
      <button class="nav-link active" onclick="nav('menu')">MENU</button>
      <button class="nav-link">ABOUT</button>
      <button class="nav-link">EVENTS</button>
      <button class="nav-link">CONTACT</button>
    </div>
    <div class="nav-actions">
      <button class="btn-login" onclick="nav('auth')">Log In</button>
      <button class="btn-signup" onclick="switchAuthTab('signup');nav('auth')">Sign Up</button>
    </div>
  </nav>

  <section class="hero">
    <!-- Floating food -->
    <div class="food-float">🍕</div>
    <div class="food-float">🍔</div>
    <div class="food-float">🍩</div>
    <div class="food-float">☕</div>
    <div class="food-float">🥤</div>
    <div class="food-float">🍟</div>
    <div class="food-float">🌮</div>
    <div class="food-float">🧁</div>

    <div class="hero-tag">KIIT University's Favourite Café</div>
    <div class="hero-title">
      <span class="line1">KIIT</span>
      <span class="line2">KAFE</span>
    </div>
    <p class="hero-sub">Where every sip tells a story. Fresh brews, wholesome bites, and good vibes — right in the heart of KIIT campus.</p>
    <div class="hero-cta">
      <button class="cta-primary" onclick="nav('menu')">Explore Menu</button>
      <button class="cta-secondary" onclick="nav('menu')">Order Now →</button>
    </div>
  </section>

  <div class="wave-divider">
    <svg viewBox="0 0 1440 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 40L1440 40L1440 0C1200 30 960 0 720 15C480 30 240 0 0 15L0 40Z" fill="#122010"/></svg>
  </div>

  <!-- FEATURES -->
  <section class="features-section">
    <div class="features-grid">
      <div class="feature-card"><span class="feat-icon">🌿</span><h3>Fresh &amp; Organic</h3><p>Locally sourced ingredients prepared fresh every morning. No shortcuts, no compromises.</p></div>
      <div class="feature-card"><span class="feat-icon">⚡</span><h3>Quick Service</h3><p>Between classes? We've got you. Pre-order via the app and skip the queue entirely.</p></div>
      <div class="feature-card"><span class="feat-icon">🎓</span><h3>Student Deals</h3><p>Exclusive discounts with your KIIT ID. Loyalty points on every order you place.</p></div>
      <div class="feature-card"><span class="feat-icon">🎵</span><h3>Chill Vibes</h3><p>The perfect study spot with ambient music, fast WiFi, and comfy seating.</p></div>
      <div class="feature-card"><span class="feat-icon">☕</span><h3>Specialty Coffee</h3><p>Cold brews, pour-overs, classic espresso — crafted by our trained baristas.</p></div>
      <div class="feature-card"><span class="feat-icon">♻️</span><h3>Eco Friendly</h3><p>100% compostable packaging. Because we love the planet as much as our coffee.</p></div>
    </div>
  </section>

  <!-- FAN FAVOURITES -->
  <section class="fan-section">
    <div class="section-header">
      <div>
        <p class="section-eyebrow">TODAY'S PICKS</p>
        <h2 class="section-title">Fan Favourites</h2>
      </div>
      <button class="see-all-btn" onclick="nav('menu')">See All Menu →</button>
    </div>
    <div class="fan-grid">
      <div class="fan-card" onclick="addToCartById(4);nav('menu')">
        <div class="fan-img">☕</div>
        <div class="fan-body"><div class="fan-name">Signature Cold Brew</div><div class="fan-price">₹89</div></div>
      </div>
      <div class="fan-card" onclick="addToCartById(6);nav('menu')">
        <div class="fan-img">🥪</div>
        <div class="fan-body"><div class="fan-name">Classic Club Sandwich</div><div class="fan-price">₹120</div></div>
      </div>
      <div class="fan-card" onclick="addToCartById(12);nav('menu')">
        <div class="fan-img">🍰</div>
        <div class="fan-body"><div class="fan-name">Chocolate Truffle Cake</div><div class="fan-price">₹79</div></div>
      </div>
      <div class="fan-card" onclick="addToCartById(3);nav('menu')">
        <div class="fan-img">🧋</div>
        <div class="fan-body"><div class="fan-name">Matcha Latte</div><div class="fan-price">₹99</div></div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="footer">
    <div class="footer-grid">
      <div class="footer-brand">
        <div class="logo">KIIT<span>KAFE</span></div>
        <p>Your daily dose of caffeine and calm, served right on campus at KIIT University, Bhubaneswar.</p>
      </div>
      <div class="footer-col">
        <h4>Quick Links</h4>
        <a onclick="nav('menu')">Menu</a>
        <a>About Us</a>
        <a>Events</a>
        <a>Gallery</a>
      </div>
      <div class="footer-col">
        <h4>Account</h4>
        <a onclick="nav('auth')">Login</a>
        <a onclick="switchAuthTab('signup');nav('auth')">Sign Up</a>
        <a>Order History</a>
        <a>Loyalty Points</a>
      </div>
      <div class="footer-col">
        <h4>Visit Us</h4>
        <a>Campus 25, KIIT University</a>
        <a>7AM – 10PM Daily</a>
        <a>kiit.kafe</a>
        <a>+91 98XXXXXXXX</a>
      </div>
    </div>
    <div class="footer-bottom">
      <p>© 2026 KIIT Kafe. Since 2026.</p>
      <div class="dev-credit">Developed By: <strong>Saurabh Sharma, Chinmay Kar</strong><br>Shirsh Mohan, Debi Prasad, Kush Singh, Parthiv Datta</div>
    </div>
  </footer>
</div>