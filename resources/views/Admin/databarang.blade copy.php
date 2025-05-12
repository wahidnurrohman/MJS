@extends('layouts.sidebar.index')

@section('content')

<div class="container">
    <h2>Data Barang</h2>
    <a href="{{ route('databarang.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
    <div class="card w-100"></div>
    {{-- <table class="table table-bordered table-hover"> --}}
        <table class="table table-bordered table-striped data-table" style="min-width: 100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Sub Nama</th>
                    <th>Image</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                    <th>Dibuat Pada</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($databarang as $index => $databarang)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $databarang->title }}</td>
                    <td>{{ $databarang->subtitle }}</td>
                    {{-- <td><img src="{{ asset('storage/' . $portofolio->image) }}" alt="Gambar"></td> --}}
                    <td>
                        @if($databarang->image)
                            <img src="{{ asset('storage/' . $databarang->image) }}" width="50">
                        @else
                            <span class="text-muted">Tidak ada gambar</span>
                        @endif
                    </td>
                    <td>{{ $databarang->price }}</td>
                    <td>{{ $databarang->description }}</td>
                    
                    <td>{{ $databarang->created_at->format('d-m-Y H:i') }}</td>
                    <td>
                        {{-- Tombol Edit --}}
                        <a href="{{ route('databarang.edit', $databarang->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        {{-- Tombol Hapus --}}
                        <form action="{{ route('databarang.destroy', $databarang->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
