<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Toko Elegan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f8f9fa;
    }
    .navbar-brand {
      font-weight: bold;
    }
    .product-card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .product-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    .footer {
      background-color: #343a40;
      color: #fff;
      padding: 30px 0;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">TokoElegan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <form class="d-flex me-3">
        <input class="form-control me-2" type="search" placeholder="Cari produk..." />
        <button class="btn btn-outline-light" type="submit">Cari</button>
      </form>
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link active" href="#">Beranda</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Produk</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Tentang</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Kontak</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section class="py-5 text-center bg-light">
  <div class="container">
    <h1 class="display-5 fw-bold">Selamat Datang di Toko Elegan</h1>
    <p class="lead text-muted">Temukan produk pilihan dengan kualitas terbaik dan harga bersaing.</p>
  </div>
</section>

<!-- Produk Section -->
<section class="py-5">
  <div class="container">
    <h2 class="mb-4 text-center">Produk Terbaru</h2>
    <div class="row g-4">
      <!-- Produk 1 -->
      <div class="col-md-4">
        <div class="card product-card h-100">
          <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Produk 1" />
          <div class="card-body">
            <h5 class="card-title">Nama Produk 1</h5>
            <p class="card-text">Deskripsi singkat produk ini sangat menarik untuk dibaca.</p>
            <p class="fw-bold text-primary">Rp150.000</p>
            <a href="#" class="btn btn-outline-primary w-100">Beli Sekarang</a>
          </div>
        </div>
      </div>

      <!-- Produk 2 -->
      <div class="col-md-4">
        <div class="card product-card h-100">
          <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Produk 2" />
          <div class="card-body">
            <h5 class="card-title">Nama Produk 2</h5>
            <p class="card-text">Produk ini sangat cocok untuk kebutuhan harian Anda.</p>
            <p class="fw-bold text-primary">Rp200.000</p>
            <a href="#" class="btn btn-outline-primary w-100">Beli Sekarang</a>
          </div>
        </div>
      </div>

      <!-- Produk 3 -->
      <div class="col-md-4">
        <div class="card product-card h-100">
          <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Produk 3" />
          <div class="card-body">
            <h5 class="card-title">Nama Produk 3</h5>
            <p class="card-text">Solusi terbaik untuk penampilan yang lebih menawan.</p>
            <p class="fw-bold text-primary">Rp250.000</p>
            <a href="#" class="btn btn-outline-primary w-100">Beli Sekarang</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Footer -->
<footer class="footer text-center">
  <div class="container">
    <p class="mb-1">© 2025 TokoElegan. All rights reserved.</p>
    <p class="mb-0">Email: support@tokoelegan.com | Telp: 0812-3456-7890</p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
