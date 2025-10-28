<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bisnis.com Clone</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <meta name="robots" content="noindex">
  <style>/* small safety: keep logo inline to avoid FOIT */</style>
</head>
<body>

  <!-- Slim top bar -->
  <div class="top-slim">
    <div class="container py-1">
      <div>⭐ Bisnis Indonesia Premium • <a href="#">E-Paper</a> • <a href="#">Bisnismuda.id</a></div>
      <div>Login</div>
    </div>
  </div>

  <!-- Main navbar -->
  <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="#">Bisnis<span class="dotcom">.com</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" href="#">HOME</a></li>
          <li class="nav-item"><a class="nav-link" href="#">MARKET</a></li>
          <li class="nav-item"><a class="nav-link" href="#">FINANSIAL</a></li>
          <li class="nav-item"><a class="nav-link" href="#">EKONOMI</a></li>
          <li class="nav-item"><a class="nav-link" href="#">TEKNO</a></li>
          <li class="nav-item"><a class="nav-link" href="#">STYLE</a></li>
        </ul>
        <form class="d-flex ms-auto" role="search">
          <input class="form-control form-control-sm me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-secondary btn-sm" type="submit"><i class="fas fa-search"></i></button>
        </form>
      </div>
    </div>
  </nav>

  <!-- Breaking News -->
  <div class="breaking py-2">
    <div class="container d-flex align-items-center">
      <div class="label">BREAKING NEWS</div>
      <div class="flex-fill">
        <marquee behavior="scroll" direction="left" scrollamount="6">Saham Konglomerat Longsor Terseret Wacana Baru MSCI • Indonesia Pamerkan Peta Jalan Hilirisasi Mineral di IMARC Australia 2025</marquee>
      </div>
    </div>
  </div>

  <!-- Main container -->
  <div class="container-main">
    <div class="hero-row">
      <div class="hero-left">
        <div id="mainCarousel" class="carousel slide hero-card" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://images.bisnis.com/posts/2025/10/28/1923843/lahendong_1754628318.jpg" class="d-block w-100" alt="...">
              <div class="hero-caption">
                <div class="kicker">Energi Terbarukan</div>
                <h2>Posisi Strategis Asia Tenggara dalam Lanskap Energi Terbarukan Global</h2>
              </div>
            </div>
            <div class="carousel-item">
              <img src="https://images.bisnis.com/thumb/posts/2025/10/28/1923942/bank_ok_1_1761624858.jpg?w=1440&h=740&auto=format&compress=high" class="d-block w-100" alt="...">
              <div class="hero-caption">
                <div class="kicker">Premium</div>
                <h2>Adu Strategi Bank Cilik AGRO, BBYB, dan DNAR Raih Kinerja Positif 2025</h2>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
          </button>
        </div>
      </div>

      <div class="hero-right">
        <div class="ad-box side-ad">ADVERTISEMENT</div>
        <div class="ad-box side-ad">ADVERTISEMENT</div>
      </div>
    </div>

    <!-- two-column content: main list + right sidebar -->
    <div class="row mt-4 g-4">
      <div class="col-lg-8">
        <div class="row g-3">
          <div class="col-md-6">
            <div class="card card-news">
              <img src="https://images.bisnis.com/posts/2025/10/28/1923884/25092025-hil-bi-21-ihsg-20_1758934137.jpg" class="card-img-top" alt="...">
              <div class="card-body p-2">
                <h5 class="card-title card-title">Pasar Saham Bergerak Positif</h5>
                <p class="card-text small">IHSG naik 1.2% dipicu sektor perbankan.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card card-news">
              <img src="https://images.bisnis.com/posts/2025/10/28/1923987/28092025-bi-bio-24-bursa_3_1759141188.jpg" class="card-img-top" alt="...">
              <div class="card-body p-2">
                <h5 class="card-title">Startup Indonesia Tumbuh</h5>
                <p class="card-text small">Investasi teknologi meningkat signifikan.</p>
              </div>
            </div>
          </div>
          <div class="col-12">
            <hr>
          </div>
          <!-- list of headlines -->
          <div class="col-12">
            <ul class="list-unstyled">
              <li class="d-flex mb-3">
                <img src="https://images.bisnis.com/thumb/posts/2025/10/28/1923976/purbaya_istana_1_1757550945.jpg?w=368&h=208" class="me-3" style="width:120px;height:80px;object-fit:cover;border-radius:4px">
                <div>
                  <div class="small text-muted">Analisis</div>
                  <div class="fw-bold">Ekonomi domestik menunjukkan tanda-tanda pemulihan</div>
                </div>
              </li>
              <li class="d-flex mb-3">
                <img src="https://images.bisnis.com/thumb/posts/2025/10/28/1923988/aslc_caroline_1_1759737601.jpg?w=456&h=266" class="me-3" style="width:120px;height:80px;object-fit:cover;border-radius:4px">
                <div>
                  <div class="small text-muted">Tekno</div>
                  <div class="fw-bold">Perusahaan rintisan meluncurkan fitur baru</div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="ad-box mb-3">ADVERTISEMENT</div>
        <div class="card mb-3">
          <div class="card-body">
            <h6 class="card-title">Terpopuler</h6>
            <ol class="small">
              <li>IHSG naik 1.2% dipicu sektor perbankan.</li>
              <li>Investasi teknologi meningkat signifikan.</li>
              <li>Perusahaan rintisan meluncurkan fitur baru</li>
            </ol>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h6 class="card-title">Video</h6>
            <div class="ratio ratio-16x9">
              <iframe src="https://www.youtube.com/embed/qG-5t0NArqg" title="YouTube video" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="site-footer mt-5">
    <div class="container">
      <div class="row gy-4">
        <div class="col-md-3">
          <a class="footer-brand" href="#">Bisnis<span class="dotcom">.com</span></a>
          <div class="footer-sub">Member of Bisnis Indonesia Group</div>
          <div class="mt-3 footer-apps">
            <!-- placeholders for app badges -->
            <img src="https://via.placeholder.com/120x36?text=Google+Play" alt="playstore">
            <img src="https://via.placeholder.com/120x36?text=App+Store" alt="appstore">
          </div>
          <div class="mt-3">Connect With Us</div>
          <div class="social-icons mt-2">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </div>
        </div>

        <div class="col-md-3 footer-links">
          <h6>BIG MEDIA</h6>
          <ul>
            <li>Bisnis.com</li>
            <li>BisnisMuda.id</li>
            <li>HypeAbis.id</li>
            <li>Context.id</li>
            <li>DataIndonesia.id</li>
          </ul>
        </div>

        <div class="col-md-3 footer-links">
          <h6>BIG SERVICES</h6>
          <ul>
            <li>Epaper Bisnis Indonesia</li>
            <li>Konten Interaktif</li>
            <li>Bisnis Indonesia Premium</li>
            <li>Bisnis Plus</li>
            <li>Video</li>
          </ul>
        </div>

        <div class="col-md-3 footer-links">
          <h6>REGIONAL</h6>
          <ul>
            <li>Jakarta</li>
            <li>Bandung</li>
            <li>Semarang</li>
            <li>Surabaya</li>
            <li>Bali</li>
          </ul>
        </div>

      </div>

      <div class="row">
        <div class="col-12 footer-bottom d-flex justify-content-between">
          <div>Copyright © 2025 - Bisnis Indonesia - 228</div>
          <div>
            <small class="text-muted">Tentang Kami • Info Iklan • Kebijakan Privasi • Kode Etik • Karir</small>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // small enhancement: pause carousel on hover when not on mobile
    (function(){
      var carousel = document.querySelector('#mainCarousel');
      if(carousel && window.innerWidth>576){
        var b = bootstrap.Carousel.getOrCreateInstance(carousel,{interval:5000});
        carousel.addEventListener('mouseenter',function(){ b.pause(); });
        carousel.addEventListener('mouseleave',function(){ b.cycle(); });
      }
    })();
  </script>
</body>
</html>
