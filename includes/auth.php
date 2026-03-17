<!-- ═══════════════════════════════════════
     PAGE 2: AUTH
═══════════════════════════════════════ -->
<div id="page-auth" class="page">
  <div class="auth-bg-left">🍔</div>
  <div class="auth-bg-right">🥤</div>
  <div class="auth-card">
    <div class="auth-tabs">
      <button class="auth-tab-btn active" id="tab-login" onclick="switchAuthTab('login')">↩ Login</button>
      <button class="auth-tab-btn" id="tab-signup" onclick="switchAuthTab('signup')">📋 Sign Up</button>
    </div>

    <!-- LOGIN -->
    <div class="auth-form-section active" id="auth-login">
      <div style="margin-bottom:16px;">
        <div class="auth-label">Email Address</div>
        <div class="auth-input-wrap">
          <input class="auth-input" type="email" id="login-email" placeholder="Enter your email address">
        </div>
      </div>
      <div style="margin-bottom:20px;">
        <div class="auth-label">
          Password
          <button class="forgot-link" onclick="showForgot()">Forgot Password?</button>
        </div>
        <div class="auth-input-wrap">
          <input class="auth-input" type="password" id="login-pass" placeholder="Enter your password">
          <button class="eye-toggle" onclick="togglePass('login-pass',this)">👁</button>
        </div>
      </div>
      <button class="btn-login-main" onclick="doLogin()">Log In</button>
      <div class="auth-divider"><span>OR</span></div>
      <button class="btn-social" onclick="doSocialLogin('Google')">
        <span style="font-size:18px;">G</span> Continue with Google
      </button>
      <button class="btn-social" onclick="doSocialLogin('Phone')">
        <span>📞</span> Continue with Phone
      </button>
      <div style="text-align:center;margin-top:14px;font-size:12px;color:rgba(255,255,255,0.5);">
        Admin? <button style="color:var(--lime);font-weight:800;font-size:12px;" onclick="doAdminLogin()">Admin Login →</button>
      </div>
    </div>

    <!-- SIGNUP -->
    <div class="auth-form-section" id="auth-signup">
      <div style="margin-bottom:14px;">
        <div class="auth-label">Full Name</div>
        <input class="auth-input" type="text" id="su-name" placeholder="e.g. Saurabh Sharma">
      </div>
      <div style="margin-bottom:14px;">
        <div class="auth-label">Email Address</div>
        <input class="auth-input" type="email" id="su-email" placeholder="2305076@kiit.ac.in">
      </div>
      <div style="margin-bottom:14px;">
        <div class="auth-label">Phone Number</div>
        <input class="auth-input" type="tel" id="su-phone" placeholder="+91 8809989XXX">
      </div>
      <div style="margin-bottom:20px;">
        <div class="auth-label">Password</div>
        <input class="auth-input" type="password" id="su-pass" placeholder="Create a password">
      </div>
      <button class="btn-login-main" onclick="doSignup()">Create Account →</button>
      <div class="auth-divider"><span>OR</span></div>
      <button class="btn-social" onclick="doSocialLogin('Google')"><span>G</span> Continue with Google</button>
    </div>

    <!-- FORGOT -->
    <div class="auth-form-section" id="auth-forgot">
      <button class="back-auth" onclick="showLogin()">← Back to Login</button>
      <h3 style="font-family:'Syne',sans-serif;font-size:20px;font-weight:900;color:white;margin-bottom:8px;">Reset Password</h3>
      <p style="font-size:13px;color:rgba(255,255,255,0.6);margin-bottom:20px;">Enter your registered email to receive a reset link.</p>
      <div style="margin-bottom:20px;">
        <div class="auth-label">Email Address</div>
        <input class="auth-input" type="email" id="forgot-email" placeholder="you@kiit.ac.in">
      </div>
      <button class="btn-login-main" onclick="doForgot()">Send Reset Link</button>
    </div>
  </div>
</div>