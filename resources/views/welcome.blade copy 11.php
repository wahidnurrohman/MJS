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

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
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
    
    .hero-section {
      position: relative;
      height: 100vh;
      width: 100%;
      overflow: hidden;
      color: white;
    }
    
    .hero-img-container {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }
    
    .hero-img-container img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      filter: blur(0px);
      transform: scale(1.1);
      transition: filter 0.5s ease;
    }
    
    .hero-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      z-index: 1;
    }
    
    .hero-content {
      position: relative;
      z-index: 2;
      max-width: 800px;
      padding: 20px;
      text-align: center;
      margin: 0 auto;
    }
    
    .hero-title {
      font-size: 3.5rem;
      font-weight: 700;
      margin-bottom: 1rem;
      text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.6);
      animation: fadeInDown 1s ease;
    }
    
    .hero-subtitle {
      font-size: 1.5rem;
      margin-bottom: 2rem;
      text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.6);
      animation: fadeInUp 1.2s ease;
    }
    
    .hero-btn {
      padding: 12px 30px;
      font-size: 1.1rem;
      font-weight: 600;
      text-transform: uppercase;
      border-radius: 50px;
      transition: all 0.3s ease;
      animation: fadeIn 1.5s ease;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }
    
    .hero-btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
    }
    
    @keyframes fadeInDown {
      from {
        opacity: 0;
        transform: translateY(-30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    
    @keyframes fadeIn {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }
    
    @media (max-width: 768px) {
      .hero-title {
        font-size: 2.5rem;
      }
      .hero-subtitle {
        font-size: 1.2rem;
      }
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

    :root {
      --primary-color: #3a86ff;
      --secondary-color: #8338ec;
      --accent-color: #ff006e;
      --light-color: #f8f9fa;
      --dark-color: #212529;
    }
    
    .footer {
      background-color: var(--light-color);
      font-family: 'Poppins', sans-serif;
      padding: 60px 0 0;
      color: var(--dark-color);
    }
    
    .social-section {
      background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
      padding: 20px;
      border-radius: 10px;
      margin-bottom: 30px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    .social-section span {
      font-size: 18px;
      font-weight: 500;
    }
    
    .social-icon {
      height: 40px;
      width: 40px;
      line-height: 40px;
      border-radius: 50%;
      background: rgba(255,255,255,0.2);
      display: inline-flex;
      align-items: center;
      justify-content: center;
      margin: 0 5px;
      transition: all 0.3s ease;
    }
    
    .social-icon:hover {
      transform: translateY(-5px);
      background: rgba(255,255,255,0.4);
    }
    
    .footer-heading {
      color: var(--primary-color);
      font-weight: 700;
      margin-bottom: 20px;
      position: relative;
      display: inline-block;
    }
    
    .footer-heading:after {
      content: "";
      position: absolute;
      left: 0;
      bottom: -10px;
      height: 3px;
      width: 50px;
      background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
      border-radius: 3px;
    }
    
    .footer-link {
      color: var(--dark-color);
      text-decoration: none;
      padding: 5px 0;
      display: block;
      transition: all 0.3s ease;
      position: relative;
    }
    
    .footer-link:before {
      content: "→";
      position: absolute;
      left: -15px;
      opacity: 0;
      transition: all 0.3s ease;
    }
    
    .footer-link:hover {
      color: var(--primary-color);
      transform: translateX(10px);
    }
    
    .footer-link:hover:before {
      opacity: 1;
      left: -20px;
    }
    
    .contact-info {
      display: flex;
      align-items: center;
      margin-bottom: 15px;
    }
    
    .contact-icon {
      height: 36px;
      width: 36px;
      background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      margin-right: 15px;
      flex-shrink: 0;
    }
    
    .copyright {
      background-color: #f1f5f9;
      padding: 20px 0;
      margin-top: 40px;
      border-top: 1px solid rgba(0,0,0,0.05);
    }
    
    .subscribe-form {
      position: relative;
      margin-top: 15px;
    }
    
    .subscribe-input {
      height: 50px;
      border-radius: 50px;
      padding: 0 20px;
      width: 100%;
      border: 1px solid #ddd;
      background: #f5f5f5;
      transition: all 0.3s ease;
    }
    
    .subscribe-input:focus {
      box-shadow: 0 0 15px rgba(58, 134, 255, 0.2);
      border-color: var(--primary-color);
      background: #fff;
    }
    
    .subscribe-btn {
      position: absolute;
      right: 5px;
      top: 5px;
      height: 40px;
      border-radius: 40px;
      background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
      border: none;
      color: white;
      padding: 0 25px;
      font-weight: 500;
      transition: all 0.3s ease;
    }
    
    .subscribe-btn:hover {
      transform: translateX(-3px);
      box-shadow: 3px 3px 10px rgba(0,0,0,0.2);
    }
    
    .logo-part {
      margin-bottom: 20px;
    }
    
    .logo {
      font-size: 24px;
      font-weight: 700;
      color: var(--primary-color);
    }
    
    @media (max-width: 768px) {
      .footer {
        text-align: center;
      }
      
      .footer-heading:after {
        left: 50%;
        transform: translateX(-50%);
      }
      
      .contact-info {
        justify-content: center;
      }
      
      .social-section {
        text-align: center;
      }
      
      .social-section div {
        margin-top: 15px;
      }
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
            {{-- <li>
            @if (Route::has('register'))
              <a href="{{ route('register') }}" class="btn btn-warning">
                <i class="fas fa-user me-1"></i>
                  Register
              </a>
            @endif
            </li> --}}
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
    <div class="hero-overlay">
      <div class="carousel-caption mb-5">
        <h1 class="hero-title">Selamat Datang di MJS Solutions</h1>
        <p class="hero-subtitle">Pusat CCTV & Keamanan Terpercaya</p>
        <a href="#produk" class="btn btn-warning hero-btn">Beli Sekarang</a>
      </div>
  </div>
  
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

<footer class="footer">
  <div class="container">
    <div class="social-section text-white">
      <div class="row d-flex align-items-center">
        <div class="col-md-6">
          <span>Terhubung dengan kami di media sosial:</span>
        </div>
        <div class="col-md-6 text-md-end mt-md-0">
          <a href="#" class="social-icon text-white me-2"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social-icon text-white me-2"><i class="fab fa-twitter"></i></a>
          <a href="#" class="social-icon text-white me-2"><i class="fab fa-instagram"></i></a>
          <a href="#" class="social-icon text-white me-2"><i class="fab fa-linkedin-in"></i></a>
          <a href="#" class="social-icon text-white me-2"><i class="fab fa-github"></i></a>
          <a href="#" class="social-icon text-white"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="logo-part">
          <div class="logo">Mandiri Jaya Solutions</div>
          <p class="mt-3">Kami menyediakan solusi terbaik untuk kebutuhan Anda. Dengan pengalaman lebih dari 10 tahun, kami berkomitmen untuk memberikan layanan berkualitas tinggi.</p>
        </div>
        
        <h5 class="footer-heading">Berlangganan Newsletter</h5>
        <form class="subscribe-form">
          <input type="email" class="subscribe-input" placeholder="Email Anda">
          <button type="submit" class="subscribe-btn">Langganan</button>
        </form>
      </div>

      <div class="col-md-2 mb-4 mb-md-0">
        <h5 class="footer-heading">Produk</h5>
        <ul class="list-unstyled">
          <li><a href="#" class="footer-link">Web Design</a></li>
          <li><a href="#" class="footer-link">Mobile App</a></li>
          <li><a href="#" class="footer-link">E-Commerce</a></li>
          <li><a href="#" class="footer-link">UI/UX Design</a></li>
          <li><a href="#" class="footer-link">Digital Marketing</a></li>
        </ul>
      </div>

      <div class="col-md-2 mb-4 mb-md-0">
        <h5 class="footer-heading">Link Berguna</h5>
        <ul class="list-unstyled">
          <li><a href="#" class="footer-link">Tentang Kami</a></li>
          <li><a href="#" class="footer-link">Layanan</a></li>
          <li><a href="#" class="footer-link">Testimoni</a></li>
          <li><a href="#" class="footer-link">Blog</a></li>
          <li><a href="#" class="footer-link">Karir</a></li>
        </ul>
      </div>

      <div class="col-md-4">
        <h5 class="footer-heading">Kontak</h5>
        <div class="contact-info">
          <div class="contact-icon">
            <i class="fas fa-map-marker-alt"></i>
          </div>
          <div>
            <p class="mb-0">Jl. Gatot Subroto No.123, Jakarta Selatan, Indonesia</p>
          </div>
        </div>
        <div class="contact-info">
          <div class="contact-icon">
            <i class="fas fa-envelope"></i>
          </div>
          <div>
            <p class="mb-0">info@brandname.com</p>
          </div>
        </div>
        <div class="contact-info">
          <div class="contact-icon">
            <i class="fas fa-phone-alt"></i>
          </div>
          <div>
            <p class="mb-0">+62 21 1234 5678</p>
          </div>
        </div>
        <div class="contact-info">
          <div class="contact-icon">
            <i class="fas fa-clock"></i>
          </div>
          <div>
            <p class="mb-0">Senin - Jumat: 09:00 - 17:00</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="copyright">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-center text-md-start">
          <p class="mb-md-0">© 2025 Mandiri Jaya Solutions. Seluruh hak cipta dilindungi.</p>
        </div>
        <div class="col-md-6 text-center text-md-end">
          <a href="#" class="text-dark me-3">Kebijakan Privasi</a>
          <a href="#" class="text-dark me-3">Syarat & Ketentuan</a>
          <a href="#" class="text-dark">Peta Situs</a>
        </div>
      </div>
    </div>
  </div>
</footer>

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

</body>
</html>