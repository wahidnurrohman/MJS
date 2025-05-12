@extends('layouts.sidebar.index')

@section('content')

<div class="container">
    <h2>Tambah Data Barang</h2>
    <form action="{{ route('databarang.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="subname" class="form-label">Sub Nama</label>
            <input type="text" class="form-control" id="subname" name="subname" required>
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
            <label for="description" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('databarang') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>

@endsection
