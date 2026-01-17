
<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KonserKu – Tiket Konser</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="{{asset('assets/styles.css')}}" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <a class="navbar-brand fw-semibold d-flex align-items-center gap-2" href="#"><i data-feather="music"></i><span>KonserKu</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMain" aria-controls="navMain" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navMain">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link active" href="#konser">Konser</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <main>
      <section class="hero">
        <div class="hero-bg"><div class="layer layer-a"></div><div class="layer layer-b"></div></div>
        <div class="container">
          <div class="row align-items-center g-4">
            <div class="col-lg-6">
              <h1 class="hero-title display-5">Pesan tiket konser dengan cepat dan mudah</h1>
              <p class="text-secondary">Nikmati pengalaman konser terbaik dengan mudah dan cepat. Pilih konser favoritmu dan pesan tiketnya di sini.</p>
              <div class="d-flex gap-2">
                <a href="#konser" class="btn btn-primary btn-lg">Jelajahi Konser</a>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="p-4 p-lg-5 bg-white rounded-4 shadow-sm">
                <div class="row g-2">
                  <div class="col-md-6">
                    <div class="input-group">
                      <span class="input-group-text"><i data-feather="search"></i></span>
                      <input class="form-control" type="text" placeholder="Cari konser atau artis">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group">
                      <span class="input-group-text"><i data-feather="map-pin"></i></span>
                      <select class="form-select">
                        <option selected>Semua Kota</option>
                        <option>Jakarta</option>
                        <option>Bandung</option>
                        <option>Surabaya</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="mt-3 d-grid">
                  <button class="btn btn-primary">Cari</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="konser" class="py-5">
        <div class="container">
          <div class="d-flex align-items-end justify-content-between mb-4">
            <h2 class="section-title h3 mb-0">Konser Pilihan</h2>
            <a href="#" class="btn btn-outline-primary btn-sm">Lihat Semua</a>
          </div>
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card h-100">
                <img src="https://images.unsplash.com/photo-1507874457470-272b3c8d8ee2?q=80&w=1200&auto=format&fit=crop" class="card-img-top" alt="Konser 1">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center mb-2">
                    <span class="badge badge-soft d-inline-flex align-items-center gap-1"><i data-feather="map-pin"></i><span>Jakarta</span></span>
                    <span class="text-secondary d-inline-flex align-items-center gap-1"><i data-feather="calendar"></i><span>12 Jan 2026</span></span>
                  </div>
                  <h5 class="card-title">Sounds of Jakarta</h5>
                  <p class="card-text text-secondary d-flex align-items-center gap-2"><i data-feather="clock"></i><span>Istora Senayan • 19:00 WIB</span></p>
                </div>
                <div class="card-footer bg-transparent border-0 p-3 pt-0">
                  <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-semibold">Mulai Rp350.000</span>
                    <a href="checkout.html" class="btn btn-primary">Beli Tiket</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="https://images.unsplash.com/photo-1506157786151-b8491531f063?q=80&w=1200&auto=format&fit=crop" class="card-img-top" alt="Konser 2">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center mb-2">
                    <span class="badge badge-soft d-inline-flex align-items-center gap-1"><i data-feather="map-pin"></i><span>Bandung</span></span>
                    <span class="text-secondary d-inline-flex align-items-center gap-1"><i data-feather="calendar"></i><span>28 Feb 2026</span></span>
                  </div>
                  <h5 class="card-title">Green Stage Fest</h5>
                  <p class="card-text text-secondary d-flex align-items-center gap-2"><i data-feather="clock"></i><span>Sabuga • 20:00 WIB</span></p>
                </div>
                <div class="card-footer bg-transparent border-0 p-3 pt-0">
                  <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-semibold">Mulai Rp280.000</span>
                    <a href="checkout.html" class="btn btn-primary">Beli Tiket</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="https://images.unsplash.com/photo-1507874457470-272b3c8d8ee2?q=80&w=1200&auto=format&fit=crop" class="card-img-top" alt="Konser 3">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center mb-2">
                    <span class="badge badge-soft d-inline-flex align-items-center gap-1"><i data-feather="map-pin"></i><span>Surabaya</span></span>
                    <span class="text-secondary d-inline-flex align-items-center gap-1"><i data-feather="calendar"></i><span>9 Mar 2026</span></span>
                  </div>
                  <h5 class="card-title">Indie Night</h5>
                  <p class="card-text text-secondary d-flex align-items-center gap-2"><i data-feather="clock"></i><span>Grand City • 18:30 WIB</span></p>
                </div>
                <div class="card-footer bg-transparent border-0 p-3 pt-0">
                  <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-semibold">Mulai Rp220.000</span>
                    <a href="checkout.html" class="btn btn-primary">Beli Tiket</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <footer class="footer py-4">
      <div class="container d-flex justify-content-between align-items-center">
        <span class="text-secondary">© 2026 KonserKu</span>
        <div class="d-flex gap-3">
          <a href="#" class="text-secondary text-decoration-none">Privasi</a>
          <a href="#" class="text-secondary text-decoration-none">Syarat</a>
        </div>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const layerA = document.querySelector('.hero-bg .layer-a');
        const layerB = document.querySelector('.hero-bg .layer-b');
        if (!layerA || !layerB) return;
        const images = [
          'https://images.unsplash.com/photo-1507874457470-272b3c8d8ee2?q=80&w=1600&auto=format&fit=crop',
          'https://images.unsplash.com/photo-1506157786151-b8491531f063?q=80&w=1600&auto=format&fit=crop',
          'https://images.unsplash.com/photo-1511379938547-9b0a9b4b51dc?q=80&w=1600&auto=format&fit=crop'
        ];
        let i = 0, show = 0;
        function setImage(el, url) { el.style.backgroundImage = `url('${url}')`; }
        setImage(layerA, images[0]);
        layerA.classList.add('active');
        setInterval(() => {
          const next = show === 0 ? 1 : 0;
          const elNext = next === 0 ? layerA : layerB;
          const elCurr = show === 0 ? layerA : layerB;
          i = (i + 1) % images.length;
          setImage(elNext, images[i]);
          elNext.classList.add('active');
          elCurr.classList.remove('active');
          show = next;
        }, 6000);
      });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script>feather.replace({ class: 'feather' })</script>
  </body>
</html>