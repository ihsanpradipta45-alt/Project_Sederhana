<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard – Invenio Admin</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="app">

  <!-- Sidebar -->
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
      <a class="nav-item active" href="dashboard.html">
        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7" rx="1"></rect><rect x="14" y="3" width="7" height="7" rx="1"></rect><rect x="14" y="14" width="7" height="7" rx="1"></rect><rect x="3" y="14" width="7" height="7" rx="1"></rect></svg>
        Dashboard
      </a>
      <a class="nav-item" href="products.html">
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

  <!-- Main -->
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
        <h1>Ringkasan</h1>
        <p>Berikut yang sedang terjadi pada inventaris Anda hari ini.</p>
      </div>
      <div class="page-head-actions">
        <button class="btn btn-outline">
          <svg class="icon" style="width:16px;height:16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
          Ekspor Laporan
        </button>
        <button class="btn btn-solid">
          <svg class="icon" style="width:16px;height:16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
          Tambah Produk
        </button>
      </div>
    </div>

    <section class="stat-grid">
      <div class="stat-card">
        <div class="stat-card-top">
          <span class="stat-label">Total Produk</span>
          <div class="stat-icon blue">
            <svg class="icon" style="width:18px;height:18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="4" rx="1"></rect><rect x="4" y="10" width="16" height="10" rx="1"></rect><line x1="9" y1="14" x2="15" y2="14"></line></svg>
          </div>
        </div>
        <div class="stat-value">12.450</div>
        <div class="stat-foot positive">
          <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
          +12% dari bulan lalu
        </div>
      </div>

      <div class="stat-card">
        <div class="stat-card-top">
          <span class="stat-label">Stok Menipis</span>
          <div class="stat-icon red">
            <svg class="icon" style="width:18px;height:18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m21.7 18-8-14a2 2 0 0 0-3.4 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.7-3Z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
          </div>
        </div>
        <div class="stat-value">48</div>
        <div class="stat-foot">Perlu perhatian segera</div>
      </div>

      <div class="stat-card">
        <div class="stat-card-top">
          <span class="stat-label">Kategori</span>
          <div class="stat-icon blue">
            <svg class="icon" style="width:18px;height:18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2 3 7l9 5 9-5-9-5Z"></path><path d="m3 12 9 5 9-5"></path></svg>
          </div>
        </div>
        <div class="stat-value">124</div>
        <div class="stat-foot">Di 5 departemen</div>
      </div>

      <div class="stat-card">
        <div class="stat-card-top">
          <span class="stat-label">Nilai Total</span>
          <div class="stat-icon blue">
            <svg class="icon" style="width:18px;height:18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="6" width="20" height="12" rx="2"></rect><circle cx="12" cy="12" r="3"></circle></svg>
          </div>
        </div>
        <div class="stat-value">$1.2J</div>
        <div class="stat-foot positive">
          <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
          +5.4% dari bulan lalu
        </div>
      </div>
    </section>

    <section class="dash-grid">
      <div class="panel">
        <div class="panel-head">
          <h2>Produk Baru Ditambahkan</h2>
          <a class="panel-link" href="products.html">Lihat Semua</a>
        </div>
        <table>
          <thead>
            <tr>
              <th>Nama Produk</th>
              <th>SKU</th>
              <th>Kategori</th>
              <th>Stok</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="product-cell">
                  <div class="thumb">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="12" rx="2"></rect><line x1="8" y1="20" x2="16" y2="20"></line></svg>
                  </div>
                  Quantum XPS 13
                </div>
              </td>
              <td>LPT-4592</td>
              <td>Elektronik</td>
              <td>145</td>
              <td><span class="badge badge-success">Tersedia</span></td>
            </tr>
            <tr>
              <td>
                <div class="product-cell">
                  <div class="thumb">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="7" rx="1"></rect><path d="M6 11V8a6 6 0 0 1 12 0v3"></path></svg>
                  </div>
                  Ergo Task Chair V2
                </div>
              </td>
              <td>FUR-1029</td>
              <td>Furnitur</td>
              <td>12</td>
              <td><span class="badge badge-danger">Stok Menipis</span></td>
            </tr>
            <tr>
              <td>
                <div class="product-cell">
                  <div class="thumb">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="2" width="16" height="20" rx="2"></rect><line x1="8" y1="6" x2="16" y2="6"></line></svg>
                  </div>
                  Industrial Brew Pro
                </div>
              </td>
              <td>APP-8831</td>
              <td>Elektronik Rumah</td>
              <td>0</td>
              <td><span class="badge badge-neutral">Habis</span></td>
            </tr>
            <tr>
              <td>
                <div class="product-cell">
                  <div class="thumb">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="13" rx="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
                  </div>
                  UltraWide 34" Display
                </div>
              </td>
              <td>MON-3400</td>
              <td>Elektronik</td>
              <td>89</td>
              <td><span class="badge badge-success">Tersedia</span></td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="panel">
        <div class="panel-head">
          <h2>Level Stok per Departemen</h2>
          <span class="chart-menu">
            <svg class="icon" style="width:18px;height:18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
          </span>
        </div>
        <div class="bar-chart">
          <div class="bar-col"><div class="bar tall" style="height:88%"></div><span>Elek</span></div>
          <div class="bar-col"><div class="bar" style="height:36%"></div><span>Furn</span></div>
          <div class="bar-col"><div class="bar" style="height:60%"></div><span>App</span></div>
          <div class="bar-col"><div class="bar" style="height:20%"></div><span>Lain</span></div>
        </div>
      </div>
    </section>

  </main>
</div>

</body>
</html>