/* ═══════════════════════════════════════════
   AUTH
═══════════════════════════════════════════ */
function switchAuthTab(tab) {
  ['login','signup','forgot'].forEach(t => {
    document.getElementById('auth-' + t)?.classList.remove('active');
  });
  document.getElementById('auth-' + tab)?.classList.add('active');
  document.getElementById('tab-login')?.classList.toggle('active', tab === 'login');
  document.getElementById('tab-signup')?.classList.toggle('active', tab === 'signup');
}

function showForgot() { switchAuthTab('forgot'); }
function showLogin() { switchAuthTab('login'); }

function togglePass(id, btn) {
  const inp = document.getElementById(id);
  if (inp.type === 'password') { inp.type = 'text'; btn.textContent = '🙈'; }
  else { inp.type = 'password'; btn.textContent = '👁'; }
}

function doLogin() {
  const email = document.getElementById("login-email").value.trim();
  const pass = document.getElementById("login-pass").value;

  if (!email || !pass) {
    toast("⚠ Please fill all fields");
    return;
  }

  fetch("api/login.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json"
    },
    body: JSON.stringify({
      email: email,
      password: pass
    })
  })
  .then(res => res.json())
  .then(data => {
    if (data.status === "success") {
      currentUser = data.user;
      afterLogin();
    } else {
      toast("❌ Invalid login");
    }
  });
}

function doSignup() {
  const name = document.getElementById('su-name').value.trim();
  const email = document.getElementById('su-email').value.trim();
  const phone = document.getElementById('su-phone').value.trim();
  const pass = document.getElementById('su-pass').value;
  if (!name || !email || !phone || !pass) { toast('⚠ Please fill all fields'); return; }
  currentUser = { name, email, phone };
  afterLogin();
}

function doSocialLogin(type) {
  currentUser = { name: 'Student', email: 'student@kiit.ac.in', phone: '8809989XXX' };
  toast('✅ Signed in with ' + type);
  afterLogin();
}

function doAdminLogin() {
  currentUser = { name: 'Admin', email: 'admin@kiitkafe.in', phone: '9999999999', isAdmin: true };
  toast('🔑 Admin access granted');
  nav('menu');
}

function doForgot() {
  const e = document.getElementById('forgot-email').value.trim();
  if (!e) { toast('⚠ Enter your email'); return; }
  toast('📧 Reset link sent to ' + e);
  showLogin();
}

function afterLogin() {
  document.getElementById('welcome-name').textContent = currentUser.name;
  toast('🎉 Welcome, ' + currentUser.name + '!');
  nav('menu');
}
