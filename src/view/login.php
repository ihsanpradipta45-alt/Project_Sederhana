<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Masuk – Invenio</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="login-page">
  <div class="login-card">

    <div class="login-logo">
      <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <rect x="3" y="4" width="18" height="4" rx="1"></rect>
        <rect x="4" y="10" width="16" height="10" rx="1"></rect>
        <line x1="9" y1="14" x2="15" y2="14"></line>
      </svg>
    </div>

    <h1 class="login-title">Selamat datang di Invenio</h1>
    <p class="login-subtitle">Masuk untuk mengelola inventaris Anda.</p>

    <form>
      <div class="field">
        <label for="email">Alamat Email</label>
        <div class="input-with-icon">
          <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <rect x="2" y="4" width="20" height="16" rx="2"></rect>
            <path d="m22 6-10 7L2 6"></path>
          </svg>
          <input type="email" id="email" placeholder="admin@invenio.com">
        </div>
      </div>

      <div class="field">
        <div class="field-label-row">
          <label for="password">Kata Sandi</label>
          <a class="field-link" href="#">Lupa kata sandi?</a>
        </div>
        <div class="input-with-icon">
          <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <rect x="4" y="11" width="16" height="9" rx="2"></rect>
            <path d="M8 11V7a4 4 0 0 1 8 0v4"></path>
          </svg>
          <input type="password" id="password" value="password">
          <svg class="icon icon-toggle" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8Z"></path>
            <circle cx="12" cy="12" r="3"></circle>
          </svg>
        </div>
      </div>

      <label class="checkbox-row">
        <input type="checkbox">
        Ingat saya selama 30 hari
      </label>

      <button type="submit" class="btn btn-primary">
        Masuk
        <svg class="icon" style="width:18px;height:18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <line x1="5" y1="12" x2="19" y2="12"></line>
          <polyline points="12 5 19 12 12 19"></polyline>
        </svg>
      </button>
    </form>

    <p class="login-footer">Belum punya akun? <a href="#">Minta Akses</a></p>
  </div>
</div>

</body>
</html>