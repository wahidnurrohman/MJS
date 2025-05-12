<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Toko Elegan - Tempat Belanja Premium</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    {{-- <title>Bootstrap Example</title> --}}
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    :root {
      --primary-color: #6a11cb;
      --secondary-color: #2575fc;
      --accent-color: #ff9800;
    }
    
    body {
      font-family: 'Poppins', 'Segoe UI', sans-serif;
      background-color: #f8f9fa;
    }
    
    /* Navbar styling */
    .navbar {
      background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
      padding: 1rem 0;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 1000;
    }

    .navbar-brand {
      font-weight: 800;
      font-size: 1.5rem;
      letter-spacing: 1px;
    }
    
    .nav-link {
      font-weight: 500;
      margin: 0 5px;
      position: relative;
    }
    
    .nav-link::after {
      content: '';
      position: absolute;
      width: 0;
      height: 2px;
      bottom: 0;
      left: 0;
      background-color: white;
      transition: width 0.3s ease;
    }
    
    .nav-link:hover::after {
      width: 100%;
    }
    
    /* Hero Section */
    .hero-section {
      background-color: #F0FFFF;
      padding-top: 100px; /* pastikan ini setara tinggi navbar */
      padding-bottom: 5rem;
      color: white;
      position: relative;
      z-index: 1;
    }

    .hero-section .carousel-inner {
      border-radius: 20px;
      overflow: hidden;
    }

    .hero-overlay {
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      background: rgba(0, 0, 0, 0.4);
      z-index: 2;
    }

    .carousel-item svg {
      height: 400px;
      object-fit: cover;
    }

    .carousel-caption {
      z-index: 3;
    }
    
    .hero-title {
      font-weight: 700;
      margin-bottom: 1.5rem;
    }
    
    .hero-subtitle {
      font-weight: 300;
      margin-bottom: 2rem;
      font-size: 1.25rem;
    }
    
    .hero-btn {
      padding: 0.75rem 2rem;
      font-weight: 600;
      border-radius: 30px;
      text-transform: uppercase;
      letter-spacing: 1px;
      background-color: var(--accent-color);
      border: none;
      box-shadow: 0 5px 15px rgba(255, 152, 0, 0.3);
      transition: all 0.3s ease;
    }
    
    .hero-btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 20px rgba(255, 152, 0, 0.4);
      background-color: #e68a00;
    }
    
    /* Kategori Section */
    .category-icon {
      font-size: 2.5rem;
      margin-bottom: 1rem;
      color: var(--primary-color);
    }
    
    .category-item {
      transition: all 0.3s ease;
      padding: 1.5rem;
      border-radius: 10px;
      background-color: white;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }
    
    .category-item:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }
    
    /* Produk Section */
    .section-title {
      position: relative;
      display: inline-block;
      font-weight: 700;
      margin-bottom: 3rem;
    }
    
    .section-title::after {
      content: '';
      position: absolute;
      width: 50%;
      height: 4px;
      bottom: -10px;
      left: 25%;
      background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
      border-radius: 2px;
    }
    
    .product-card {
      border: none;
      border-radius: 15px;
      overflow: hidden;
      transition: all 0.4s ease;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
    }
    
    .product-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
    }
    
    .product-img-container {
      overflow: hidden;
      position: relative;
    }
    
    .card-img-top {
      transition: transform 0.8s ease;
      height: 220px;
      object-fit: cover;
    }
    
    .product-card:hover .card-img-top {
      transform: scale(1.1);
    }
    
    .product-badge {
      position: absolute;
      top: 10px;
      right: 10px;
      background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
      color: white;
      padding: 5px 15px;
      border-radius: 20px;
      font-weight: 600;
      font-size: 0.8rem;
    }
    
    .product-title {
      font-weight: 600;
      font-size: 1.25rem;
    }
    
    .product-price {
      font-size: 1.3rem;
      font-weight: 700;
      color: var(--primary-color);
    }
    
    .product-rating {
      color: #ffc107;
      font-size: 0.9rem;
      margin-bottom: 0.5rem;
    }
    
    .btn-primary {
      background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
      border: none;
      border-radius: 30px;
      padding: 10px 20px;
      font-weight: 600;
      transition: all 0.3s ease;
    }
    
    .btn-primary:hover {
      background: linear-gradient(45deg, var(--secondary-color), var(--primary-color));
      transform: translateY(-3px);
      box-shadow: 0 5px 15px rgba(106, 17, 203, 0.4);
    }
    
    .btn-wishlist {
      background-color: rgba(255, 255, 255, 0.9);
      border: none;
      border-radius: 50%;
      width: 40px;
      height: 40px;
      position: absolute;
      top: 10px;
      left: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all 0.3s ease;
      opacity: 0;
    }
    
    .product-card:hover .btn-wishlist {
      opacity: 1;
    }
  </style>
</head>
<body>



<!-- Navbar -->
<nav class="navbar navbar-expand-sm navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MJS<span class="text-warning">Solutions</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav align-items-center">
        <li class="nav-item"><a class="nav-link active" href="#">Beranda</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Produk</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Tentang</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Kontak</a></li>
        <li class="nav-item ms-2">
          {{-- <a class="btn btn-warning"><i class="fas fa-user me-1"></i> Masuk</a> --}}
          <li>
              @if (Route::has('login'))
                <a href="{{ route('login') }}" class="btn btn-warning m-2">
                  <i class="fas fa-user me-1"></i>
                    Log in
                </a>
              @endif
            </li>
            <li>
            @if (Route::has('register'))
              <a href="{{ route('register') }}" class="btn btn-warning">
                <i class="fas fa-user me-1"></i>
                  Register
              </a>
            @endif
            </li>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section class="hero-section text-white text-center d-flex align-items-center justify-content-center">
  {{-- <div class="overlay"></div> --}}
  {{-- @foreach ($databarang as $row) --}}
  <div class="hero-img-container">
  
    <img src="assets/img/bg.jpg" class="d-block w-100" alt="...">
  <div class="hero-overlay"></div>
  <div class="carousel-caption mb-5">
    <h1 class="hero-title">Selamat Datang di MJS Solutions</h1>
    <p class="hero-subtitle">Pusat CCTV & Keamanan Terpercaya</p>
    <a href="#produk" class="btn btn-warning hero-btn">Beli Sekarang</a>
  </div>
</section>

<!-- CSS Tambahan -->
<style>
.hero-section {
  position: relative;
  height: 100vh;
  background-size: cover;
  background-image: url('img/bg.jpg'); /* Ganti dengan path gambar CCTV */
  background-position: center;
  background-repeat: no-repeat;
  overflow: hidden;
}

.overlay {
  position: absolute;
  inset: 0;
  background: rgba(0, 0, 0, 0.6); /* Overlay gelap agar teks menonjol */
  z-index: 1;
}

.hero-content {
  position: relative;
  z-index: 2;
  text-shadow: 0 4px 10px rgba(0, 0, 0, 0.6);
}
</style>


<!-- Kategori Section -->
<section class="py-5" id="kategori">
  <div class="container">
    <h2 class="text-center mb-5"><b>Semua Produk</b></h2>

  </div>
</section>

<!-- Produk Section -->
<section class="py-5 bg-light" id="produk">
  <div class="container">
    <h2 class="section-title text-center">Produk Terbaru</h2>
    <div class="row g-4">
      <!-- Produk 1 -->
      @foreach ($databarang as $row)
      <div class="col-lg-3 col-md-6">
        <div class="card product-card h-100">
          <div class="product-img-container">
              @if($row->image)
                <img src="{{ asset('storage/' . $row->image) }}" class="img-fluid rounded" alt="{{ $row->title }}">
              @else
                <span class="text-muted">Tidak ada gambar</span>
              @endif
            <span class="product-badge">Baru</span>
            <button class="btn-wishlist" title="Tambahkan ke Wishlist">
              <i class="far fa-heart text-danger"></i>
            </button>
          </div>
          <div class="card-body">
             <h5 class="product-title">{{ $row->title }}</a></h5>
              <p>{{ $row->subtitle }}</p>
            <div class="d-flex justify-content-between align-items-center mt-3">
              <p class="product-price mb-0">Rp{{ $row->price }}</p>
            </div>
          </div>
          <div class="card-footer bg-white border-0 pt-0">
            <a href="#"
              class="btn btn-primary w-100 buy-btn"
              data-bs-toggle="modal"
              data-bs-target="#produkModal"
              data-title="{{ $row->title }}"
              data-subtitle="{{ $row->subtitle }}"
              data-price="{{ $row->price }}"
              data-description="{{ $row->description ?? '' }}"
              data-image="{{ $row->image ? asset('storage/' . $row->image) : '' }}">
              <i class="fas fa-shopping-cart me-2"></i> Beli Sekarang
            </a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<section class="bg-light" id="kategori">
  <!-- Remove the container if you want to extend the Footer to full width. -->
  <div class="container">
    <!-- Footer -->
    <footer
            class="text-center text-lg-start text-dark"
            style="background-color: #F0FFFF, padding: 100px"
            >
      <!-- Section: Social media -->
      <section
              class="d-flex justify-content-between p-4 text-white"
              style="background-color: #21D192"
              >
        <!-- Left -->
        <div class="me-5">
          <span>Get connected with us on social networks:</span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
          <a href="" class="text-white me-4">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-google"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-linkedin"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-github"></i>
          </a>
        </div>
        <!-- Right -->
      </section>
      <!-- Section: Social media -->

      <!-- Section: Links  -->
      <section class="">
        <div class="container text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <!-- Content -->
              <h6 class="text-uppercase fw-bold">Company name</h6>
              <hr
                  class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 60px; background-color: #7c4dff; height: 2px"
                  />
              <p>
                Here you can use rows and columns to organize your footer
                content. Lorem ipsum dolor sit amet, consectetur adipisicing
                elit.
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold">Products</h6>
              <hr
                  class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 60px; background-color: #7c4dff; height: 2px"
                  />
              <p>
                <a href="#!" class="text-dark">MDBootstrap</a>
              </p>
              <p>
                <a href="#!" class="text-dark">MDWordPress</a>
              </p>
              <p>
                <a href="#!" class="text-dark">BrandFlow</a>
              </p>
              <p>
                <a href="#!" class="text-dark">Bootstrap Angular</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold">Useful links</h6>
              <hr
                  class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 60px; background-color: #7c4dff; height: 2px"
                  />
              <p>
                <a href="#!" class="text-dark">Your Account</a>
              </p>
              <p>
                <a href="#!" class="text-dark">Become an Affiliate</a>
              </p>
              <p>
                <a href="#!" class="text-dark">Shipping Rates</a>
              </p>
              <p>
                <a href="#!" class="text-dark">Help</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold">Contact</h6>
              <hr
                  class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 60px; background-color: #7c4dff; height: 2px"
                  />
              <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
              <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
              <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
              <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links  -->

      <!-- Copyright -->
      <div
          class="text-center p-3"
          style="background-color: rgba(0, 0, 0, 0.2)"
          >
        © 2020 Copyright:
        <a class="text-dark" href="https://mdbootstrap.com/"
          >MDBootstrap.com</a
          >
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
  </div>
  <!-- End of .container -->
</section>

<!-- Modal Produk -->
<div class="modal fade" id="produkModal" tabindex="-1" aria-labelledby="produkModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="produkModalLabel">Detail Produk</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6">
            <img id="modalImage" src="" class="img-fluid" alt="Produk">
          </div>
          <div class="col-md-6">
            <h4 id="modalTitle"></h4>
            <p id="modalSubtitle"></p>
            <p class="fw-bold text-primary">Rp<span id="modalPrice"></span></p>
            <p id="modalDescription"></p>
            <a href="#" target="_blank" class="btn btn-success" id="modalWhatsappLink">
              <i class="fab fa-whatsapp"></i> Beli via WhatsApp
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const produkModal = document.getElementById('produkModal');
    produkModal.addEventListener('show.bs.modal', function (event) {
      const button = event.relatedTarget;

      const title = button.getAttribute('data-title');
      const subtitle = button.getAttribute('data-subtitle');
      const price = button.getAttribute('data-price');
      const description = button.getAttribute('data-description') || '-';
      const image = button.getAttribute('data-image');

      // Isi modal
      document.getElementById('modalTitle').textContent = title;
      document.getElementById('modalSubtitle').textContent = subtitle;
      document.getElementById('modalPrice').textContent = price;
      document.getElementById('modalDescription').textContent = description;
      document.getElementById('modalImage').src = image;

      // Susun pesan untuk WhatsApp
      const pesan = `Halo, saya tertarik dengan produk berikut:\n\n` +
                    ` *${title}*\n` +
                    ` *${subtitle}*\n` +
                    ` *${description}*\n` +
                    ` *Rp${price}*\n\n` +
                    ` Apakah masih tersedia?`;

      const encodedPesan = encodeURIComponent(pesan);

      const nomorWa = '6282284243138';
      const waLink = `https://wa.me/${nomorWa}?text=${encodedPesan}`;

      document.getElementById('modalWhatsappLink').href = waLink;
    });
  });
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>

</body>
</html>