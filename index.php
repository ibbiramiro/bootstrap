<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Belajar Bootstrap CSS</title>

  <!-- Link Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">MyBootstrap</a>
    </div>
  </nav>

  <!-- Header / Hero Section -->
  <header class="bg-light text-center py-5">
    <div class="container">
      <h1 class="fw-bold">Selamat Datang di Kelas Bootstrap</h1>
      <p class="lead">Belajar membuat website responsif dengan cepat dan mudah.</p>
      <a href="#contoh" class="btn btn-primary">Mulai Belajar</a>
    </div>
  </header>

  <!-- Grid Layout Section -->
  <section class="container my-5" id="contoh">
    <h2 class="text-center mb-4">Sistem Grid Bootstrap</h2>
    <div class="row text-center">
      <div class="col-md-4 mb-3">
        <div class="card p-3 shadow-sm">
          <h4 class="text-primary">Kolom 1</h4>
          <p>Bagian ini akan otomatis menyesuaikan ukuran layar.</p>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card p-3 shadow-sm">
          <h4 class="text-success">Kolom 2</h4>
          <p>Gunakan class <code>.col-md-4</code> untuk grid 3 kolom.</p>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card p-3 shadow-sm">
          <h4 class="text-danger">Kolom 3</h4>
          <p>Pada HP, semua kolom ini otomatis menjadi satu kolom.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Button and Alert Section -->
  <section class="container my-5 text-center">
    <h2>Contoh Komponen Bootstrap</h2>
    <button class="btn btn-success m-2">Tombol Hijau</button>
    <button class="btn btn-warning m-2">Tombol Kuning</button>
    <button class="btn btn-danger m-2">Tombol Merah</button>

    <div class="alert alert-info mt-4" role="alert">
      <strong>Info:</strong> Ini contoh penggunaan komponen Alert!
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-dark text-light text-center py-3">
    <p>© 2025 Belajar Bootstrap. Dibuat untuk pembelajaran pemula.</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
