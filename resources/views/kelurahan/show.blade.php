@extends('layout.master')

@section('title')
    Lihat Kelurahan
@endsection

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header d-md-flex flex-row justify-content-between">
                <h5 class="card-title">Lihat Kelurahan</h5>
                <div>
                    <a class="btn btn-secondary" href="{{ URL::previous() }}"> Kembali</a>
                </div>
            </div>
            <div class="card-body">
                <p><strong>Nama Kelurahan:</strong> {{ $kelurahan->nama }}</p>
                <p><strong>Kecamatan:</strong>
                    @if ($kelurahan->kecamatan)
                        <a class="text-decoration-none" href="{{ route('kecamatan.show', $kelurahan->kecamatan->id) }}">
                            {{ $kelurahan->kecamatan->nama }}
                        </a>
                    @endif
                </p>
                <p><strong>Penduduk:</strong> {{ $kelurahan->jml_pend }}
                    @if ($kelurahan->kecamatan)
                        <a class="text-decoration-none" href="{{ route('kecamatan.show', $kelurahan->kecamatan->id) }}">
                            {{ $kelurahan->kecamatan->nama }}
                        </a>
                    @endif
                </p>
            </div>
        </div>
    </div>
@endsection
