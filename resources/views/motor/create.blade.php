@extends('layout.master')

@section('title')
    Tambah Motor
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
                <h5 class="card-title">Tambah Motor</h5>
                <div>
                    <a class="btn btn-secondary" href="{{ URL::previous() }}"> Kembali</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('motor.store') }}" method="POST" enctype="multipart/form-data" id="mainform">
                    @csrf
                    <div class="row mb-3">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Motor</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{ old('nama') }}"name="nama"
                                id="nama" required placeholder="Silahkan masukan nama motor">
                        </div>
                    </div>
                    @error('nama')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <div class="row mb-3">
                        <label for="merek_id" class="col-sm-2 col-form-label">Merek</label>
                        <div class="col-sm-10">
                            <select class="form-control"name="merek_id" id="merek_id" required>
                                <option value="">Pilih Merek</option>
                                @foreach ($mereks as $merek)
                                    <option value="{{ $merek->id }}"
                                        {{ $merek->id == old('merek_id') ? 'selected' : '' }}>
                                        {{ $merek->nama }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    @error('merek_id')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <div class="row mb-3">
                        <label for="harga" class="col-sm-2 col-form-label">Harga Motor</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" value="{{ old('harga') }}"name="harga"
                                id="harga" required placeholder="Silahkan masukan harga motor">
                        </div>
                    </div>
                    @error('harga')
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
