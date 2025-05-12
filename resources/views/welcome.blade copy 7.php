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
      background: linear-gradient(135deg, rgba(106, 17, 203, 0.9), rgba(37, 117, 252, 0.9)), url('/api/placeholder/1200/500') center/cover no-repeat;
      padding: 6rem 0;
      color: white;
      border-radius: 0 0 20% 20% / 15rem;
      height: 80vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
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
    
    /* Testimonial Section */
    .testimonial-section {
      background-color: #f1f5fe;
      padding: 5rem 0;
    }
    
    .testimonial-card {
      background-color: white;
      border-radius: 15px;
      padding: 2rem;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
      position: relative;
    }
    
    .testimonial-card::before {
      content: '\201C';
      font-family: serif;
      position: absolute;
      top: 10px;
      left: 20px;
      font-size: 5rem;
      color: rgba(106, 17, 203, 0.1);
    }
    
    .testimonial-img {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      object-fit: cover;
      border: 5px solid rgba(106, 17, 203, 0.1);
    }
    
    /* Footer */
    .footer {
      background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
      color: white;
      padding: 4rem 0 2rem;
      border-radius: 20% 20% 0 0 / 15rem;
    }
    
    .footer-title {
      font-weight: 700;
      margin-bottom: 1.5rem;
      font-size: 1.3rem;
    }
    
    .footer-links {
      list-style: none;
      padding: 0;
    }
    
    .footer-links li {
      margin-bottom: 10px;
    }
    
    .footer-links a {
      color: rgba(255, 255, 255, 0.8);
      text-decoration: none;
      transition: all 0.3s ease;
    }
    
    .footer-links a:hover {
      color: white;
      padding-left: 5px;
    }
    
    .social-icon {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background-color: rgba(255, 255, 255, 0.1);
      margin: 0 5px;
      transition: all 0.3s ease;
    }
    
    .social-icon:hover {
      background-color: white;
      color: var(--primary-color);
      transform: translateY(-3px);
    }
    
    .footer-bottom {
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      padding-top: 20px;
      margin-top: 50px;
    }
    
    /* Utility */
    .text-gradient {
      background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
      -webkit-background-clip: text;
      background-clip: text;
      -webkit-text-fill-color: transparent;
      font-weight: 700;
    }
    
    /* Shopping cart button */
    .cart-btn {
      position: relative;
      margin-right: 10px;
    }
    
    .cart-badge {
      position: absolute;
      top: -8px;
      right: -8px;
      background-color: var(--accent-color);
      border-radius: 50%;
      padding: 0.1rem 0.45rem;
      font-size: 0.75rem;
      font-weight: bold;
    }
  </style>
</head>
<body>



<!-- Navbar -->
<nav class="navbar navbar-expand-sm navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MJS<span class="text-warning">Solusiont</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      {{-- <form class="d-flex me-3">
        <div class="input-group">
          <input class="form-control" type="search" placeholder="Cari produk..." aria-label="Search" />
          <button class="btn btn-light" type="submit"><i class="fas fa-search"></i></button>
        </div>
      </form> --}}
      <ul class="navbar-nav align-items-center">
        <li class="nav-item"><a class="nav-link active" href="#">Beranda</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Produk</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Tentang</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Kontak</a></li>
        {{-- <li class="nav-item ms-2">
          <a class="btn btn-light cart-btn" href="#">
            <i class="fas fa-shopping-cart"></i>
            <span class="cart-badge">3</span>
          </a>
        </li> --}}
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
<section class="hero-section text-center">
  <div class="container">
    <h1 class="display-4 hero-title">Temukan Gaya Elegan Anda</h1>
    <p class="hero-subtitle">Koleksi produk berkualitas premium dengan harga terjangkau</p>
    <div class="d-flex justify-content-center gap-3">
      <a href="#produk" class="btn btn-warning hero-btn">Belanja Sekarang</a>
      <a href="#kategori" class="btn btn-outline-light hero-btn">Lihat Kategori</a>
    </div>
  </div>
</section>

<!-- Kategori Section -->
<section class="py-5" id="kategori">
  <div class="container">
    <h2 class="text-center mb-5">Kategori Unggulan</h2>
    <div class="row g-4">
      <div class="col-lg-3 col-md-6">
        <div class="category-item text-center">
          <div class="category-icon">
            <i class="fas fa-tshirt"></i>
          </div>
          <h4>Pakaian</h4>
          <p class="text-muted">Temukan koleksi pakaian terbaru</p>
          <a href="#" class="btn btn-sm btn-outline-primary mt-2">Lihat Semua</a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="category-item text-center">
          <div class="category-icon">
            <i class="fas fa-mobile-alt"></i>
          </div>
          <h4>Elektronik</h4>
          <p class="text-muted">Gadget dan elektronik terkini</p>
          <a href="#" class="btn btn-sm btn-outline-primary mt-2">Lihat Semua</a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="category-item text-center">
          <div class="category-icon">
            <i class="fas fa-gem"></i>
          </div>
          <h4>Aksesoris</h4>
          <p class="text-muted">Perhiasan dan aksesoris elegan</p>
          <a href="#" class="btn btn-sm btn-outline-primary mt-2">Lihat Semua</a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="category-item text-center">
          <div class="category-icon">
            <i class="fas fa-home"></i>
          </div>
          <h4>Rumah Tangga</h4>
          <p class="text-muted">Perlengkapan rumah modern</p>
          <a href="#" class="btn btn-sm btn-outline-primary mt-2">Lihat Semua</a>
        </div>
      </div>
    </div>
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
            {{-- <img src="/api/placeholder/400/300" class="card-img-top" alt="Kemeja Casual Premium" /> --}}
            {{-- <img src="{{ asset('storage/' . $row->image) }}" class="card-img-top" alt="{{ $row->title }}" /> --}}
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
            {{-- <a href="" class="btn btn-primary w-100 buy-btn" id="whatsapp-link" target="_blank"><i class="fas fa-shopping-cart me-2"></i>Beli Sekarang</a> --}}
            {{-- <a href="" class="buy-btn" id="whatsapp-link" target="_blank"><i class="fas fa-shopping-cart me-2"></i>Beli Sekarang</a> --}}

            {{-- <a href="#" class="btn btn-primary w-100 buy-btn"
   data-bs-toggle="modal"
   data-bs-target="#produkModal"
   data-title="{{ $row->title }}"
   data-subtitle="{{ $row->subtitle }}"
   data-price="{{ $row->price }}"
   data-image="{{ $row->image ? asset('storage/' . $row->image) : '' }}">
   <i class="fas fa-shopping-cart me-2"></i>Beli Sekarang
</a> --}}

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

{{-- <a href="#" class="btn btn-primary w-100 buy-btn"
   data-bs-toggle="modal"
   data-bs-target="#produkModal"
   data-title="{{ $row->title }}"
   data-subtitle="{{ $row->subtitle }}"
   data-price="{{ $row->price }}"
   data-image="{{ $row->image ? asset('storage/' . $row->image) : '' }}">
   <i class="fas fa-shopping-cart me-2"></i>Beli Sekarang
</a> --}}

{{-- <script>
  document.addEventListener('DOMContentLoaded', function () {
    const produkModal = document.getElementById('produkModal');
    produkModal.addEventListener('show.bs.modal', function (event) {
      const button = event.relatedTarget;

      const title = button.getAttribute('data-title');
      const subtitle = button.getAttribute('data-subtitle');
      const price = button.getAttribute('data-price');
      const image = button.getAttribute('data-image');

      // Set konten modal
      document.getElementById('modalTitle').textContent = title;
      document.getElementById('modalSubtitle').textContent = subtitle;
      document.getElementById('modalPrice').textContent = price;
      document.getElementById('modalImage').src = image;
      document.getElementById('modalDescription').textContent = "Deskripsi produk akan ditampilkan di sini.";

      // Buat pesan WhatsApp otomatis
      const pesan = `Halo, saya tertarik dengan produk berikut:\n\n` +
                    `*${image}*\n` +
                    `*${title}*\n` +
                    `${subtitle}\n` +
                    `Rp${price}\n\n` +
                    ` *Deskripsi:* ${description}\n\n ` +
                    `Saya ingin membeli produk ini. Silakan hubungi saya untuk informasi lebih lanjut.\n\n` +
                    `Apakah masih tersedia?`;

      // Encode pesan agar bisa digunakan di URL
      const encodedPesan = encodeURIComponent(pesan);

      // Ganti dengan nomor WhatsApp tujuanmu
      const nomorWa = '6281228077252';

      const waLink = `https://wa.me/${nomorWa}?text=${encodedPesan}`;

      // Set link di tombol
      document.getElementById('modalWhatsappLink').href = waLink;
    });
  });
</script> --}}


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



<!-- Promo Banner -->
<section class="py-5">
  <div class="container">
    <div class="row align-items-center bg-primary text-white p-4 rounded-4">
      <div class="col-lg-6 p-4">
        <h2 class="fw-bold mb-3">Dapatkan Diskon 20% untuk Pembelian Pertama!</h2>
        <p class="mb-4">Gunakan kode promo <span class="badge bg-warning px-3 py-2">ELEGANBARU</span> untuk mendapatkan diskon spesial.</p>
        <a href="#" class="btn btn-warning btn-lg">Belanja Sekarang</a>
      </div>
      <div class="col-lg-6 text-center">
        <img src="/api/placeholder/500/300" class="img-fluid rounded-3" alt="Promo Banner">
      </div>
    </div>
  </div>
</section>

<!-- Testimonial Section -->
<section class="testimonial-section py-5">
  <div class="container">
    <h2 class="section-title text-center">Apa Kata Pelanggan Kami</h2>
    <div class="row g-4">
      <div class="col-lg-4">
        <div class="testimonial-card">
          <div class="mb-4">
            <div class="product-rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>
          <p class="mb-4">"Kualitas produk luar biasa dan pengiriman sangat cepat. Saya sangat puas dengan pembelian saya dan pasti akan kembali berbelanja di sini!"</p>
          <div class="d-flex align-items-center">
            <img src="/api/placeholder/80/80" class="testimonial-img me-3" alt="Customer 1">
            <div>
              <h5 class="mb-0">Dewi Susanti</h5>
              <small class="text-muted">Pelanggan Setia</small>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4">
        <div class="testimonial-card">
          <div class="mb-4">
            <div class="product-rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
          </div>
          <p class="mb-4">"Sangat senang dengan pelayanan customer service yang ramah dan responsif. Produk juga sesuai dengan deskripsi yang diberikan."</p>
          <div class="d-flex align-items-center">
            <img src="/api/placeholder/80/80" class="testimonial-img me-3" alt="Customer 2">
            <div>
              <h5 class="mb-0">Budi Santoso</h5>
              <small class="text-muted">Pelanggan Baru</small>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4">
        <div class="testimonial-card">
          <div class="mb-4">
            <div class="product-rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>
          <p class="mb-4">"Toko online terbaik! Produk berkualitas premium dengan harga yang sangat bersaing. Proses checkout juga sangat mudah."</p>
          <div class="d-flex align-items-center">
            <img src="/api/placeholder/80/80" class="testimonial-img me-3" alt="Customer 3">
            <div>
              <h5 class="mb-0">Rina Wijaya</h5>
              <small class="text-muted">Pelanggan VIP</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Newsletter Section -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 text-center">
        <h3 class="fw-bold mb-4">Dapatkan Info Terbaru & Promo Eksklusif</h3>
        <p class="text-muted mb-4">Daftarkan email Anda untuk mendapatkan informasi produk terbaru dan penawaran spesial.</p>
        <form class="d-flex">
          <input type="email" class="form-control form-control-lg me-2" placeholder="Alamat Email Anda">
          <button type="submit" class="btn btn-primary btn-lg">Daftar</button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 mb-4 mb-lg-0">
        <h4 class="footer-title">Toko<span class="text-warning">Elegan</span></h4>
        <p class="mb-4">Toko online terpercaya dengan produk berkualitas premium dan harga terbaik. Kepuasan pelanggan adalah prioritas utama kami.</p>
        <div class="d-flex mb-4">
          <a href="#" class="social-icon me-2"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social-icon me-2"><i class="fab fa-instagram"></i></a>
          <a href="#" class="social-icon me-2"><i class="fab fa-twitter"></i></a>
          <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
      
      <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
        <h5 class="footer-title">Tautan Cepat</h5>
        <ul class="footer-links">
          <li><a href="#">Beranda</a></li>
          <li><a href="#">Produk</a></li>
          <li><a href="#">Tentang Kami</a></li>
          <li><a href="#">Kontak</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">FAQ</a></li>
        </ul>
      </div>
      
      <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
        <h5 class="footer-title">Kategori</h5>
        <ul class="footer-links">
          <li><a href="#">Pakaian</a></li>
          <li><a href="#">Elektronik</a></li>
          <li><a href="#">Aksesoris</a></li>
          <li><a href="#">Rumah Tangga</a></li>
          <li><a href="#">Kosmetik</a></li>
          <li><a href="#">Olahraga</a></li>
        </ul>
      </div>
      
      <div class="col-lg-4 col-md-4">
        <h5 class="footer-title">Kontak Kami</h5>
        <ul class="footer-links">
          <li><i class="fas fa-map-marker-alt me-2"></i> Jl. Elegan No. 123, Jakarta Selatan</li>
          <li><i class="fas fa-phone-alt me-2"></i> 0812-3456-7890</li>
          <li><i class="fas fa-envelope me-2"></i> support@tokoelegan.com</li>
          <li><i class="fas fa-clock me-2"></i> Senin - Jumat, 08.00 - 17.00</li>
        </ul>
      </div>
    </div>
    
    <div class="footer-bottom text-center">
      <div class="row">
        <div class="col-md-6 text-md-start mb-2 mb-md-0">
          <p class="mb-0">© 2025 TokoElegan. Seluruh hak cipta dilindungi.</p>
        </div>
        <div class="col-md-6 text-md-end">
          <a href="#" class="text-white me-3">Syarat & Ketentuan</a>
          <a href="#" class="text-white">Kebijakan Privasi</a>
        </div>
      </div>
    </div>
  </div>
</footer>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>

<!-- Vendor JS Files -->
  {{-- <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script> --}}

  <!-- Main JS File -->
  {{-- <script src="assets/js/main.js"></script> --}}
</body>
</html>