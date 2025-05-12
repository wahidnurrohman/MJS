@extends('layouts.sidebar.index')

@section('content')
<div class="container-fluid px-4">
    <div class="row align-items-center mb-4">
        <div class="col-md-6">
            <h2 class="font-weight-bold text-primary">
                <i class="fas fa-box-open me-2"></i>Data Barang
            </h2>
        </div>
        <div class="col-md-6 text-md-end">
            <a href="{{ route('databarang.create') }}" class="btn btn-primary">
                <i class="fas fa-plus-circle me-1"></i> Tambah Data
            </a>
        </div>
    </div>
    
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-header bg-light py-3">
            <h5 class="card-title mb-0 text-dark">
                <i class="fas fa-list me-2"></i>Daftar Barang
            </h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover data-table" id="dataBarangTable">
                    <thead class="table-primary">
                        <tr>
                            <th width="5%">No</th>
                            <th width="15%">Nama</th>
                            <th width="15%">Sub Nama</th>
                            <th width="10%">Image</th>
                            <th width="10%">Harga</th>
                            <th width="20%">Deskripsi</th>
                            <th width="10%">Dibuat Pada</th>
                            <th width="15%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($databarang as $index => $databarang)
                        <tr>
                            <td class="text-center">{{ $index + 1 }}</td>
                            <td class="fw-bold">{{ $databarang->title }}</td>
                            <td>{{ $databarang->subtitle }}</td>
                            <td class="text-center">
                                @if($databarang->image)
                                    <img src="{{ asset('storage/' . $databarang->image) }}" 
                                         class="img-thumbnail" width="60" height="60" 
                                         data-bs-toggle="popover" 
                                         data-bs-trigger="hover" 
                                         data-bs-html="true" 
                                         data-bs-content="<img src='{{ asset('storage/' . $databarang->image) }}' width='200'>">
                                @else
                                    <span class="badge bg-secondary">No Image</span>
                                @endif
                            </td>
                            <td class="text-end">Rp {{ number_format($databarang->price, 0, ',', '.') }}</td>
                            <td>
                                <div class="description-truncate">
                                    {{ \Illuminate\Support\Str::limit($databarang->description, 50) }}
                                    @if(strlen($databarang->description) > 50)
                                        <a href="#" class="text-primary show-more" data-bs-toggle="modal" data-bs-target="#descModal{{ $databarang->id }}">
                                            <small>Selengkapnya</small>
                                        </a>
                                    @endif
                                </div>
                                
                                <!-- Modal untuk deskripsi lengkap -->
                                <div class="modal fade" id="descModal{{ $databarang->id }}" tabindex="-1" aria-labelledby="descModalLabel{{ $databarang->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="descModalLabel{{ $databarang->id }}">{{ $databarang->title }} - Deskripsi</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>{{ $databarang->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-nowrap">
                                <i class="far fa-calendar-alt text-muted me-1"></i>
                                {{ $databarang->created_at->format('d-m-Y') }}
                                <br>
                                <small class="text-muted">
                                    <i class="far fa-clock me-1"></i>
                                    {{ $databarang->created_at->format('H:i') }}
                                </small>
                            </td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('databarang.edit', $databarang->id) }}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit me-1"></i> Edit
                                    </a>
                                    <form action="{{ route('databarang.destroy', $databarang->id) }}" method="POST" class="d-inline ms-1">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" 
                                                onclick="return confirm('Yakin ingin menghapus data {{ $databarang->title }}?')">
                                            <i class="fas fa-trash-alt me-1"></i> Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Script untuk mengaktifkan DataTables dan Popover -->
<script>
    $(document).ready(function() {
        // Inisialisasi DataTable
        $('#dataBarangTable').DataTable({
            language: {
                url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/id.json'
            },
            responsive: true,
            pageLength: 10,
            dom: '<"row mb-3"<"col-md-6"B><"col-md-6"f>>rtip',
            buttons: [
                {
                    extend: 'excel',
                    text: '<i class="fas fa-file-excel me-1"></i> Excel',
                    className: 'btn btn-success btn-sm me-1'
                },
                {
                    extend: 'pdf',
                    text: '<i class="fas fa-file-pdf me-1"></i> PDF',
                    className: 'btn btn-danger btn-sm me-1'
                },
                {
                    extend: 'print',
                    text: '<i class="fas fa-print me-1"></i> Print',
                    className: 'btn btn-info btn-sm me-1 text-white'
                }
            ]
        });
        
        // Aktifkan popover untuk preview gambar
        $('[data-bs-toggle="popover"]').popover({
            placement: 'right'
        });
        
        // Efek hover pada baris tabel
        $('tbody tr').hover(
            function() {
                $(this).addClass('bg-light');
            },
            function() {
                $(this).removeClass('bg-light');
            }
        );
    });
</script>

<style>
    .description-truncate {
        max-width: 250px;
        overflow: hidden;
    }
    
    .img-thumbnail {
        transition: transform 0.2s ease;
        cursor: pointer;
    }
    
    .img-thumbnail:hover {
        transform: scale(1.1);
    }
    
    .table th {
        font-weight: 600;
    }
    
    .btn-group .btn {
        border-radius: 4px !important;
    }
    
    .card {
        border-radius: 8px;
    }
    
    .table-responsive {
        border-radius: 6px;
        overflow: hidden;
    }
</style>
@endsection