@extends('layouts.template')

@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
        <div class="card-tools"></div>
    </div>

    <div class="card-body">
        @if (!$barang)
            <div class="alert alert-danger alert-dismissible">
                <h5><i class="icon fas fa-ban"></i> Kesalahan!</h5>
                Data yang Anda cari tidak ditemukan.
            </div>
            <a href="{{ url('barang') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
        @else
            <form method="POST" action="{{ url('/barang/'.$barang->barang_id) }}" class="form-horizontal">
                @csrf
                {!! method_field('PUT') !!}

                

                {{-- Kode Barang --}}
                <div class="form-group row">
                    <label class="col-md-3 col-form-label">Kode Barang</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="barang_kode" name="barang_kode" 
                            value="{{ old('barang_kode', $barang->barang_kode) }}" required>
                        @error('barang_kode')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                {{-- Nama Barang --}}
                <div class="form-group row">
                    <label class="col-md-3 col-form-label">Nama Barang</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="barang_nama" name="barang_nama" 
                            value="{{ old('barang_nama', $barang->barang_nama) }}" required>
                        @error('barang_nama')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                {{-- Harga Beli --}}
                <div class="form-group row">
                    <label class="col-md-3 col-form-label">Harga Beli</label>
                    <div class="col-md-9">
                        <input type="number" class="form-control" id="harga_beli" name="harga_beli" 
                            value="{{ old('harga_beli', $barang->harga_beli) }}" required>
                        @error('harga_beli')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                {{-- Harga Jual --}}
                <div class="form-group row">
                    <label class="col-md-3 col-form-label">Harga Jual</label>
                    <div class="col-md-9">
                        <input type="number" class="form-control" id="harga_jual" name="harga_jual" 
                            value="{{ old('harga_jual', $barang->harga_jual) }}" required>
                        @error('harga_jual')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                {{-- Tombol Simpan & Kembali --}}
                <div class="form-group row">
                    <div class="col-md-9 offset-md-3">
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        <a class="btn btn-sm btn-default ml-1" href="{{ url('barang') }}">Kembali</a>
                    </div>
                </div>
            </form>
        @endif
    </div>
</div>
@endsection

@push('css')
@endpush

@push('js')
@endpush
