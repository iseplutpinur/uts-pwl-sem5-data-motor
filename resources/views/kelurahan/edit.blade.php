@extends('layout.master')

@section('title')
    Ubah Kelurahan
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
                <h5 class="card-title">Ubah Kelurahan</h5>
                <div>
                    <a class="btn btn-secondary" href="{{ URL::previous() }}"> Kembali</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('kelurahan.update', $kelurahan->id) }}" method="POST" enctype="multipart/form-data"
                    id="mainform">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Kelurahan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"value="{{ old('nama') ?? $kelurahan->nama }}"
                                name="nama" id="nama" required placeholder="Silahkan masukan nama kelurahan">
                        </div>
                    </div>
                    @error('nama')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <div class="row mb-3">
                        <label for="kecamatan_id" class="col-sm-2 col-form-label">Kecamatan</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="kecamatan_id" id="kecamatan_id" required>
                                <option value="">Pilih Kecamatan</option>
                                @foreach ($kecamatans as $kecamatan)
                                    <option value="{{ $kecamatan->id }}"
                                        {{ $kecamatan->id == (old('kecamatan_id') ?? $kelurahan->kecamatan_id) ? 'selected' : '' }}>
                                        {{ $kecamatan->nama }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    @error('kecamatan_id')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror

                    <div class="row mb-3">
                        <label for="jml_pend" class="col-sm-2 col-form-label">Penduduk Kelurahan</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" value="{{ old('jml_pend') ?? $kelurahan->jml_pend }}"
                                name="jml_pend" id="jml_pend" required placeholder="Silahkan masukan jml_pend kelurahan">
                        </div>
                    </div>
                    @error('jml_pend')
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
