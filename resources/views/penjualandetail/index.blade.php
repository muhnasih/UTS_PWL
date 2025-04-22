@extends('layouts.template')

@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
        <div class="card-tools">
            <a class="btn btn-sm btn-primary mt-1" href="{{ url('penjualan-detail/create') }}">Tambah</a>
        </div>
    </div>
    <div class="card-body">
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered table-striped table-hover table-sm" id="table_penjualan_detail">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kode Penjualan</th>
                    <th>Barang</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@endsection

@push('js')
<script>
    $(document).ready(function () {
        $('#table_penjualan_detail').DataTable({
            serverside: true,
            ajax: "{{ url('penjualan-detail/list') }}",
            columns: [
                { data: 'DT_RowIndex', className: 'text-center', orderable: false, searchable: false },
                { data: 'penjualan.penjualan_kode', orderable: true, searchable: true },
                { data: 'barang.barang_nama', orderable: true, searchable: true },
                { data: 'jumlah', orderable: true, searchable: true },
                { data: 'harga', orderable: true, searchable: true },
                { data: 'aksi', orderable: false, searchable: false },
            ]
        });
    });
</script>
@endpush
