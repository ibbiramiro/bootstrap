<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Belajar Bootstrap 5 Dasar</title>
  
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-light">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">Bootstrap 5 Course</a>
      <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navmenu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div id="navmenu" class="collapse navbar-collapse">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a href="#intro" class="nav-link">Pendahuluan</a></li>
          <li class="nav-item"><a href="#grid" class="nav-link">Grid System</a></li>
          <li class="nav-item"><a href="#komponen" class="nav-link">Komponen</a></li>
          <li class="nav-item"><a href="#latihan" class="nav-link">Latihan</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="bg-white text-center py-5 shadow-sm">
    <div class="container">
      <h1 class="fw-bold">Belajar Bootstrap 5 Dasar</h1>
      <p class="lead text-muted">Framework CSS populer untuk membuat website responsif dan modern.</p>
      <a href="#intro" class="btn btn-primary btn-lg mt-3">Mulai Belajar</a>
    </div>
  </section>

  <!-- Pendahuluan -->
  <section id="intro" class="container my-5">
    <h2 class="fw-bold mb-3">Apa itu Bootstrap?</h2>
    <p>Bootstrap adalah framework CSS dan JavaScript untuk membangun tampilan web yang <strong>cepat, rapi, dan responsif</strong>. Dengan Bootstrap, kamu tidak perlu menulis CSS dari nol.</p>

    <div class="alert alert-info mt-3">
      <i class="fas fa-lightbulb me-2"></i> 
      Bootstrap digunakan oleh banyak website besar seperti <strong>Spotify, Newsweek, dan LinkedIn</strong>.
    </div>

    <h5 class="mt-4">Cara Menggunakan Bootstrap (via CDN):</h5>
<pre class="bg-dark text-white p-3 rounded"><code>&lt;link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"&gt;
&lt;script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"&gt;&lt;/script&gt;
</code></pre>
  </section>

  <!-- Grid System -->
  <section id="grid" class="bg-white py-5">
    <div class="container">
      <h2 class="fw-bold mb-3">Sistem Grid</h2>
      <p>Bootstrap menggunakan sistem <strong>grid 12 kolom</strong> untuk mengatur tata letak halaman. Contoh dasar:</p>

<pre class="bg-dark text-white p-3 rounded"><code>&lt;div class="container"&gt;
  &lt;div class="row"&gt;
    &lt;div class="col-8"&gt;Kolom Kiri&lt;/div&gt;
    &lt;div class="col-4"&gt;Kolom Kanan&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</code></pre>

      <div class="row text-center mt-4">
        <div class="col-md-8 bg-primary text-white py-3">Kolom 8</div>
        <div class="col-md-4 bg-success text-white py-3">Kolom 4</div>
      </div>
    </div>
  </section>

  <!-- Komponen Bootstrap -->
  <section id="komponen" class="container my-5">
    <h2 class="fw-bold mb-3">Komponen Populer Bootstrap</h2>
    <p>Berikut beberapa komponen Bootstrap yang sering digunakan di website modern:</p>

    <div class="row g-4 mt-4">
      <div class="col-md-4">
        <div class="card shadow-sm">
          <div class="card-body text-center">
            <i class="fas fa-bars fa-2x text-primary mb-3"></i>
            <h5>Navbar</h5>
            <p class="text-muted">Navigasi atas responsif, mendukung dropdown dan collapse di mobile.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow-sm">
          <div class="card-body text-center">
            <i class="fas fa-clone fa-2x text-primary mb-3"></i>
            <h5>Card</h5>
            <p class="text-muted">Menampilkan konten seperti berita, produk, atau artikel dengan rapi.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow-sm">
          <div class="card-body text-center">
            <i class="fas fa-images fa-2x text-primary mb-3"></i>
            <h5>Carousel</h5>
            <p class="text-muted">Membuat slideshow gambar dengan kontrol dan animasi otomatis.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Latihan -->
  <section id="latihan" class="bg-light py-5">
    <div class="container">
      <h2 class="fw-bold mb-4 text-center">Latihan Mahasiswa</h2>
      <ol class="list-group list-group-numbered">
        <li class="list-group-item">Ubah warna tema navbar menjadi <code>bg-dark</code>.</li>
        <li class="list-group-item">Tambahkan satu section baru berisi tiga card sejajar.</li>
        <li class="list-group-item">Gunakan grid 9:3 untuk membagi konten utama dan sidebar.</li>
        <li class="list-group-item">Tambahkan modal Bootstrap untuk menampilkan “Tentang Kami”.</li>
      </ol>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-primary text-white text-center py-3">
    <p class="mb-0">© 2025 Materi Pembelajaran Bootstrap 5 | Dibuat untuk Mahasiswa</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
