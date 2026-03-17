<!-- ═══════════════════════════════════════
     PAGE 1: LANDING
═══════════════════════════════════════ -->
<div id="page-landing" class="page active">
  <nav class="navbar">
    <div class="nav-logo">KIIT<span>KAFE</span></div>
    <div class="nav-links">
    </div>
    <div class="nav-actions">
      <button class="btn-login" onclick="nav('auth')">Log In</button>
      <button class="btn-signup" onclick="switchAuthTab('signup');nav('auth')">Sign Up</button>
    </div>
  </nav>

  <section class="hero">
    <!-- Slideshow Background -->
    <div class="hero-slideshow">
      <div class="slide active" style="background-image: url('https://images.unsplash.com/photo-1509042239860-f550ce710b93?w=1200&q=80');"></div>
      <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1554118811-1e0d58224f24?w=1200&q=80');"></div>
      <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1559339352-11d035aa65de?w=1200&q=80');"></div>
      <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=1200&q=80');"></div>
    </div>
    <div class="hero-overlay"></div>

    <!-- Floating food -->
    <div class="food-float">🍕</div>
    <div class="food-float">🍔</div>
    <div class="food-float">🍩</div>
    <div class="food-float">☕</div>
    <div class="food-float">🥤</div>
    <div class="food-float">🍟</div>
    <div class="food-float">🌮</div>
    <div class="food-float">🧁</div>

    <!-- Rotating Messages -->
    <div class="hero-messages">
      <div class="hero-message active">☕ Freshly Brewed Coffee Every Morning</div>
      <div class="hero-message">🥐 Hot & Crispy Snacks All Day</div>
      <div class="hero-message">🎓 Special Student Discounts Available</div>
      <div class="hero-message">🚀 Quick Service - Skip the Queue!</div>
    </div>

    <div class="hero-tag">KIIT University's Favourite Café</div>
    <div class="hero-title">
      <span class="line1">KIIT</span>
      <span class="line2">KAFE</span>
    </div>
    <p class="hero-sub">Where every sip tells a story. Fresh brews, wholesome bites, and good vibes — right in the heart of KIIT campus.</p>
    <div class="hero-cta">
      <button class="cta-primary" onclick="nav('menu')">Explore Menu</button>
      <button class="cta-secondary" onclick="nav('auth')">Order Now →</button>
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
      <div class="fan-card" onclick="nav('menu')">
        <div class="fan-img">☕</div>
        <div class="fan-body"><div class="fan-name">Signature Cold Brew</div><div class="fan-price">₹89</div></div>
      </div>
      <div class="fan-card" onclick="nav('menu')">
        <div class="fan-img">🥪</div>
        <div class="fan-body"><div class="fan-name">Classic Club Sandwich</div><div class="fan-price">₹120</div></div>
      </div>
      <div class="fan-card" onclick="nav('menu')">
        <div class="fan-img">🍰</div>
        <div class="fan-body"><div class="fan-name">Chocolate Truffle Cake</div><div class="fan-price">₹79</div></div>
      </div>
      <div class="fan-card" onclick="nav('menu')">
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
      </div>
      <div class="footer-col">
        <h4>Account</h4>
        <a onclick="nav('auth')">Login</a>
        <a onclick="switchAuthTab('signup');nav('auth')">Sign Up</a>
      </div>
      <div class="footer-col">
        <h4>Visit Us</h4>
        <a>Campus 25, KIIT University</a>
        <a>7AM – 10PM Daily</a>
        <a>kiit.kafe</a>
        <a>+91 8809989535</a>
      </div>
    </div>
    <div class="footer-bottom">
      <p>© 2026 KIIT Kafe.</p>
      <div class="dev-credit">Developed By: <strong>Saurabh Sharma, Chinmay Kar</strong><br><strong>Shirsh Mohan, Debi Prasad, Kush Singh, Parthiv Datta</strong></div>
    </div>
  </footer>
</div>