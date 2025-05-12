@extends('layouts.sidebar.index')

@section('content')

<!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Optional: Font Awesome untuk ikon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <!-- Optional: Custom CSS kamu sendiri -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        .card {
            border-radius: 1rem;
        }

        .form-label {
            font-weight: 600;
        }

        .btn-success {
            background-color: #198754;
        }

        .btn-success:hover {
            background-color: #157347;
        }
    </style>

<div class="container">

<main class="py-4">
        @yield('content')
    </main>
    <h2>Tambah Data Barang</h2>
    <form action="{{ route('databarang.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Nama</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="mb-3">
            <label for="subtitle" class="form-label">Sub Nama</label>
            <input type="text" class="form-control" id="subtitle" name="subtitle" required>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Gambar</label>
            <input type="file" class="form-control" id="image" name="image" required>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Harga</label>
            <input type="text" class="form-control" id="price" name="price" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi (Optional)</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('databarang') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>

<!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

@endsection
