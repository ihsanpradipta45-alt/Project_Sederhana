<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tambah Produk Baru – Invenio Admin</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="app">

  <aside class="sidebar">
    <div class="brand-simple">Invenio</div>

    <nav class="nav">
      <a class="nav-item" href="dashboard.html">
        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7" rx="1"></rect><rect x="14" y="3" width="7" height="7" rx="1"></rect><rect x="14" y="14" width="7" height="7" rx="1"></rect><rect x="3" y="14" width="7" height="7" rx="1"></rect></svg>
        Dashboard
      </a>
      <a class="nav-item active" href="products.html">
        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="4" rx="1"></rect><rect x="4" y="10" width="16" height="10" rx="1"></rect><line x1="9" y1="14" x2="15" y2="14"></line></svg>
        Produk
      </a>
      <a class="nav-item" href="#">
        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2 3 7l9 5 9-5-9-5Z"></path><path d="m3 12 9 5 9-5"></path></svg>
        Kategori
      </a>
      <a class="nav-item" href="#">
        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"></circle><path d="M4 21c0-4 3.5-7 8-7s8 3 8 7"></path></svg>
        Profil
      </a>
      <a class="nav-item" href="#">
        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.7 1.7 0 0 0 .3 1.9l.1.1a2 2 0 1 1-2.8 2.8l-.1-.1a1.7 1.7 0 0 0-1.9-.3 1.7 1.7 0 0 0-1 1.6V21a2 2 0 1 1-4 0v-.1a1.7 1.7 0 0 0-1-1.6 1.7 1.7 0 0 0-1.9.3l-.1.1a2 2 0 1 1-2.8-2.8l.1-.1a1.7 1.7 0 0 0 .3-1.9 1.7 1.7 0 0 0-1.6-1H3a2 2 0 1 1 0-4h.1a1.7 1.7 0 0 0 1.6-1 1.7 1.7 0 0 0-.3-1.9l-.1-.1a2 2 0 1 1 2.8-2.8l.1.1a1.7 1.7 0 0 0 1.9.3H9a1.7 1.7 0 0 0 1-1.6V3a2 2 0 1 1 4 0v.1a1.7 1.7 0 0 0 1 1.6 1.7 1.7 0 0 0 1.9-.3l.1-.1a2 2 0 1 1 2.8 2.8l-.1.1a1.7 1.7 0 0 0-.3 1.9V9a1.7 1.7 0 0 0 1.6 1H21a2 2 0 1 1 0 4h-.1a1.7 1.7 0 0 0-1.6 1Z"></path></svg>
        Pengaturan
      </a>
    </nav>

    <div class="nav-footer">
      <a class="nav-item" href="login.html">
        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
        Keluar
      </a>
    </div>
  </aside>

  <main class="main">

    <div class="topbar">
      <div class="search-bar">
        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
        <input type="text" placeholder="Cari...">
      </div>
      <div class="topbar-actions">
        <button class="icon-btn" aria-label="Notifikasi">
          <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8a6 6 0 0 0-12 0c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.7 21a2 2 0 0 1-3.4 0"></path></svg>
        </button>
        <button class="icon-btn" aria-label="Tema gelap">
          <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.8A9 9 0 1 1 11.2 3a7 7 0 0 0 9.8 9.8Z"></path></svg>
        </button>
        <div class="profile-chip">
          <img class="avatar" src="https://i.pravatar.cc/64?img=47" alt="Foto profil">
          <span>Profil</span>
        </div>
      </div>
    </div>

    <div class="page-head">
      <div>
        <h1>Tambah Produk Baru</h1>
        <p>Masukkan detail untuk item inventaris baru.</p>
      </div>
    </div>

    <form class="form-panel">

      <div class="form-section">
        <h2>Informasi Dasar</h2>
        <hr class="form-divider">

        <div class="form-grid">
          <div class="form-field">
            <label for="pname">Nama Produk <span class="required">*</span></label>
            <input type="text" id="pname" placeholder="cth. Kursi Kantor Ergonomis">
          </div>
          <div class="form-field">
            <label for="sku">SKU (Stock Keeping Unit)</label>
            <input type="text" id="sku" placeholder="cth. FUR-CHR-001">
          </div>
          <div class="form-field">
            <label for="category">Kategori</label>
            <select id="category">
              <option>Pilih kategori</option>
              <option>Elektronik</option>
              <option>Furnitur</option>
              <option>Aksesori</option>
            </select>
          </div>
          <div class="form-field">
            <label for="supplier">Pemasok</label>
            <input type="text" id="supplier" placeholder="Nama Pemasok">
          </div>
        </div>
      </div>

      <div class="form-section">
        <h2>Harga &amp; Inventaris</h2>
        <hr class="form-divider">

        <div class="form-grid">
          <div class="form-field">
            <label for="buyprice">Harga Beli ($)</label>
            <input type="text" id="buyprice" placeholder="0.00">
          </div>
          <div class="form-field">
            <label for="sellprice">Harga Jual ($)</label>
            <input type="text" id="sellprice" placeholder="0.00">
          </div>
          <div class="form-field">
            <label for="qty">Jumlah Awal</label>
            <input type="text" id="qty" placeholder="0">
          </div>
          <div class="form-field full">
            <label for="desc">Deskripsi Produk</label>
            <textarea id="desc" placeholder="Deskripsi singkat produk..."></textarea>
          </div>
        </div>
      </div>

      <div class="form-actions">
        <button type="button" class="btn btn-outline">Batal</button>
        <button type="submit" class="btn btn-solid">Simpan Produk</button>
      </div>

    </form>

  </main>
</div>

</body>
</html>