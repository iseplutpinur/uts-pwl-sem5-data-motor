@extends('layout.master')

@section('title')
    Ubah Barang
@endsection

@section('content')
    <div class="container mt-4">
        @if (session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif
        <div class="card">
            <div class="card-header d-md-flex flex-row justify-content-between">
                <h5 class="card-title">Ubah Barang</h5>
                <div>
                    <a class="btn btn-secondary" href="{{ URL::previous() }}"> Kembali</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('barang.update', $barang->id) }}" method="POST" enctype="multipart/form-data"
                    id="mainform">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <label for="kode" class="col-sm-2 col-form-label">Kode Barang</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{ old('kode') ?? $barang->kode }}"
                                name="kode" id="kode" required placeholder="Silahkan masukan kode barang">
                        </div>
                    </div>
                    @error('kode')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <div class="row mb-3">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Barang</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"value="{{ old('nama') ?? $barang->nama }}"
                                name="nama" id="nama" required placeholder="Silahkan masukan nama barang">
                        </div>
                    </div>
                    @error('nama')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <div class="row mb-3">
                        <label for="satuan_id" class="col-sm-2 col-form-label">Satuan</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="satuan_id" id="satuan_id" required>
                                <option value="">Pilih Satuan</option>
                                @foreach ($satuans as $satuan)
                                    <option value="{{ $satuan->id }}"
                                        {{ $satuan->id == (old('satuan_id') ?? $barang->satuan_id) ? 'selected' : '' }}>
                                        {{ $satuan->nama }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    @error('satuan_id')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror

                    <div class="row mb-3">
                        <label for="stok" class="col-sm-2 col-form-label">Stok Barang</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" value="{{ old('stok') ?? $barang->stok }}"
                                name="stok" id="stok" required placeholder="Silahkan masukan stok barang">
                        </div>
                    </div>
                    @error('stok')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror

                </form>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary ml-3" form="mainform">Simpan</button>
            </div>
        </div>
    </div>
@endsection
