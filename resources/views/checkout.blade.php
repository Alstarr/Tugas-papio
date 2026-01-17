
<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KonserKu – Checkout</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="assets/styles.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <a class="navbar-brand fw-semibold d-flex align-items-center gap-2" href="index.html"><i data-feather="music"></i><span>KonserKu</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navCheckout" aria-controls="navCheckout" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navCheckout">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link" href="index.html#konser">Konser</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <main class="py-5">
      <div class="container">
        <div class="row g-4">
          <div class="col-lg-7">
            <div class="card p-4">
              <h2 class="h4 mb-3">Detail Pemesan</h2>
              <form>
                <div class="row g-3">
                  <div class="col-md-6">
                    <label class="form-label">Nama lengkap</label>
                    <input type="text" class="form-control" placeholder="Nama sesuai KTP">
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="nama@email.com">
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">No HP</label>
                    <input type="tel" class="form-control" placeholder="08xxxxxxxxxx">
                  </div>
                  <div class="col-md-3">
                    <label class="form-label">Jumlah tiket</label>
                    <input type="number" class="form-control" min="1" max="10" value="1">
                  </div>
                  <div class="col-md-3">
                    <label class="form-label">Kelas</label>
                    <select class="form-select">
                      <option selected>Festival</option>
                      <option>VIP</option>
                      <option>VVIP</option>
                    </select>
                  </div>
                </div>

                <div class="mt-4">
                  <h3 class="h5 mb-2">Metode Pembayaran</h3>
                  <div class="row g-2">
                    <div class="col-md-4">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="pay" id="pay-ewallet" checked>
                        <label class="form-check-label d-inline-flex align-items-center gap-2" for="pay-ewallet"><i data-feather="smartphone"></i><span>E-Wallet</span></label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="pay" id="pay-transfer">
                        <label class="form-check-label d-inline-flex align-items-center gap-2" for="pay-transfer"><i data-feather="repeat"></i><span>Transfer Bank</span></label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="pay" id="pay-card">
                        <label class="form-check-label d-inline-flex align-items-center gap-2" for="pay-card"><i data-feather="credit-card"></i><span>Kartu Kredit</span></label>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-check mt-4">
                  <input class="form-check-input" type="checkbox" id="terms">
                  <label class="form-check-label" for="terms">Saya setuju dengan Syarat & Ketentuan</label>
                </div>

                <div class="d-grid mt-3">
                  <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#paySuccessModal">Bayar Sekarang</button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="card p-4 summary">
              <h2 class="h4 mb-3">Ringkasan Pesanan</h2>
              <div class="d-flex gap-3 align-items-center mb-3">
                <img src="https://images.unsplash.com/photo-1507874457470-272b3c8d8ee2?q=80&w=1200&auto=format&fit=crop" alt="Event" class="rounded" style="width:96px;height:72px;object-fit:cover">
                <div>
                  <div class="fw-semibold">Sounds of Jakarta</div>
                  <div style="font-size: 12px;" class="text-secondary d-flex align-items-center gap-3"><span class="d-inline-flex align-items-center gap-1"><i data-feather="map-pin"></i><span>Istora Senayan</span></span><span class="d-inline-flex align-items-center gap-1"><i data-feather="calendar"></i><span>12 Jan 2026</span></span><span class="d-inline-flex align-items-center gap-1"><i data-feather="clock"></i><span>19:00</span></span></div>
                </div>
              </div>
              <div class="border rounded-3 p-3 mb-3">
                <div class="d-flex justify-content-between"><span>Harga per tiket</span><span>Rp350.000</span></div>
                <div class="d-flex justify-content-between"><span>Biaya layanan</span><span>Rp10.000</span></div>
                <div class="d-flex justify-content-between fw-semibold mt-2"><span>Total</span><span>Rp360.000</span></div>
              </div>
              <a href="index.html" class="btn btn-outline-primary w-100 d-flex align-items-center justify-content-center gap-2"><i data-feather="arrow-left"></i><span>Kembali ke Beranda</span></a>
            </div>
          </div>
        </div>
      </div>
    </main>

    <div class="modal fade" id="paySuccessModal" tabindex="-1" aria-labelledby="paySuccessLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4">
          <div class="modal-body p-4">
            <div class="text-center">
              <span class="modal-check-icon d-inline-flex align-items-center justify-content-center mb-3">
                <i data-feather="check-circle"></i>
              </span>
              <h5 id="paySuccessLabel" class="mb-1">Pembayaran Berhasil</h5>
              <p class="text-secondary mb-0">Informasi tiket akan dikirim ke email Anda. Silakan cek inbox atau folder spam.</p>
            </div>
            <div class="mt-3 d-flex gap-2 justify-content-center">
              <a href="#" class="btn btn-primary" data-bs-dismiss="modal">Oke</a>
            </div>
          </div>
        </div>
      </div>
    </div>

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
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script>feather.replace({ class: 'feather' })</script>
  </body>
</html>