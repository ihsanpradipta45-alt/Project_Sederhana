<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Produk – Invenio Admin</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="app">

  <aside class="sidebar">
    <div class="brand">
      <div class="brand-mark">
        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <rect x="3" y="4" width="18" height="4" rx="1"></rect>
          <rect x="4" y="10" width="16" height="10" rx="1"></rect>
          <line x1="9" y1="14" x2="15" y2="14"></line>
        </svg>
      </div>
      <div>
        <div class="brand-text-name">Invenio Admin</div>
        <div class="brand-text-sub">Kontrol Inventaris</div>
      </div>
    </div>

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
    </nav>

    <div class="nav-footer">
      <a class="nav-item" href="#">
        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"></circle><path d="M4 21c0-4 3.5-7 8-7s8 3 8 7"></path></svg>
        Profil
      </a>
      <a class="nav-item" href="#">
        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.7 1.7 0 0 0 .3 1.9l.1.1a2 2 0 1 1-2.8 2.8l-.1-.1a1.7 1.7 0 0 0-1.9-.3 1.7 1.7 0 0 0-1 1.6V21a2 2 0 1 1-4 0v-.1a1.7 1.7 0 0 0-1-1.6 1.7 1.7 0 0 0-1.9.3l-.1.1a2 2 0 1 1-2.8-2.8l.1-.1a1.7 1.7 0 0 0 .3-1.9 1.7 1.7 0 0 0-1.6-1H3a2 2 0 1 1 0-4h.1a1.7 1.7 0 0 0 1.6-1 1.7 1.7 0 0 0-.3-1.9l-.1-.1a2 2 0 1 1 2.8-2.8l.1.1a1.7 1.7 0 0 0 1.9.3H9a1.7 1.7 0 0 0 1-1.6V3a2 2 0 1 1 4 0v.1a1.7 1.7 0 0 0 1 1.6 1.7 1.7 0 0 0 1.9-.3l.1-.1a2 2 0 1 1 2.8 2.8l-.1.1a1.7 1.7 0 0 0-.3 1.9V9a1.7 1.7 0 0 0 1.6 1H21a2 2 0 1 1 0 4h-.1a1.7 1.7 0 0 0-1.6 1Z"></path></svg>
        Pengaturan
      </a>
      <a class="nav-item danger" href="login.html">
        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
        Keluar
      </a>
    </div>
  </aside>

  <main class="main">

    <div class="page-head">
      <div>
        <h1>Produk</h1>
        <p>Kelola item inventaris dan level stok Anda.</p>
      </div>
      <div class="page-head-actions">
        <button class="btn btn-solid">
          <svg class="icon" style="width:16px;height:16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
          Tambah Produk
        </button>
      </div>
    </div>

    <div class="filters-bar">
      <div class="filters-search">
        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
        <input type="text" placeholder="Cari berdasarkan SKU atau Nama...">
      </div>
      <button class="chip-btn">
        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="22 3 2 3 10 12.5 10 19 14 21 14 12.5 22 3"></polygon></svg>
        Kategori
      </button>
      <button class="chip-btn">
        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 11 3 3L22 4"></path><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
        Status
      </button>
      <button class="chip-btn clear">
        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"></path><path d="M3 3v5h5"></path></svg>
        Hapus Filter
      </button>
    </div>

    <div class="products-table-wrap">
      <table>
        <thead>
          <tr>
            <th>SKU</th>
            <th>Nama Produk</th>
            <th>Kategori</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="sku-cell">PRD-001</td>
            <td>
              <div class="product-cell">
                <div class="thumb">
                  <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="10" rx="2"></rect><line x1="6" y1="18" x2="18" y2="18"></line></svg>
                </div>
                Ergo Pro Keyboard
              </div>
            </td>
            <td>Elektronik</td>
            <td>142</td>
            <td>$129.99</td>
            <td><span class="badge badge-success">Tersedia</span></td>
            <td></td>
          </tr>
          <tr>
            <td class="sku-cell">PRD-002</td>
            <td>
              <div class="product-cell">
                <div class="thumb">
                  <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="10" width="16" height="4" rx="1"></rect><path d="M12 14v6"></path></svg>
                </div>
                Alum Stand V2
              </div>
            </td>
            <td>Aksesori</td>
            <td>0</td>
            <td>$45.00</td>
            <td><span class="badge badge-danger">Habis</span></td>
            <td></td>
          </tr>
          <tr>
            <td class="sku-cell">PRD-003</td>
            <td>
              <div class="product-cell">
                <div class="thumb">
                  <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 14v-3a9 9 0 0 1 18 0v3"></path><path d="M21 14a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1a2 2 0 0 1 2-2h3Z"></path><path d="M3 14a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-1a2 2 0 0 0-2-2H3Z"></path></svg>
                </div>
                Silence X1 Headphones
              </div>
            </td>
            <td>Audio</td>
            <td>87</td>
            <td>$299.50</td>
            <td><span class="badge badge-success">Tersedia</span></td>
            <td></td>
          </tr>
          <tr>
            <td class="sku-cell">PRD-004</td>
            <td>
              <div class="product-cell">
                <div class="thumb">
                  <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="7" y="3" width="10" height="18" rx="5"></rect><line x1="12" y1="7" x2="12" y2="11"></line></svg>
                </div>
                VertiMouse Pro
              </div>
            </td>
            <td>Elektronik</td>
            <td>12</td>
            <td>$75.00</td>
            <td><span class="badge badge-warning">Stok Menipis</span></td>
            <td></td>
          </tr>
        </tbody>
      </table>

      <div class="pagination-bar">
        <span>Menampilkan 1 sampai 4 dari 24 hasil</span>
        <div class="pagination">
          <button class="page-btn nav">
            <svg class="icon" style="width:16px;height:16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
          </button>
          <button class="page-btn active">1</button>
          <button class="page-btn">2</button>
          <button class="page-btn">3</button>
          <span class="page-btn dots">…</span>
          <button class="page-btn">6</button>
          <button class="page-btn nav">
            <svg class="icon" style="width:16px;height:16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
          </button>
        </div>
      </div>
    </div>

  </main>
</div>

</body>
</html>