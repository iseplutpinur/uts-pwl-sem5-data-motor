@extends('layout.master')

@section('title')
    Lihat Kecamatan
@endsection

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header d-md-flex flex-row justify-content-between">
                <h5 class="card-title">Lihat Kecamatan</h5>
                <div>
                    <a class="btn btn-secondary" href="{{ URL::previous() }}"> Kembali</a>
                </div>
            </div>
            <div class="card-body">
                <p><strong>Nama Kecamatan:</strong> {{ $kecamatan->nama }}</p>
            </div>
        </div>
        <br>
        <div class="row">
            @if ($kelurahans)
                <div class="col-lg-6">
                    <div class="card mb-1">
                        <div class="card-header fw-bold">
                            Kelurahan Kecamatan {{ $kecamatan->nama }}
                        </div>
                        <ul class="list-group list-group-flush">
                            @foreach ($kelurahans as $kelurahan)
                                <a href="{{ route('kelurahan.show', $kelurahan->id) }}" class="text-decoration-none">
                                    <li class="list-group-item">{{ $kelurahan->nama }} <br>
                                        <small>{{ $kelurahan->jml_pend }} {{ $kecamatan->nama }}</small>
                                    </li>
                                </a>
                            @endforeach
                        </ul>
                    </div>
                    {!! $kelurahans->appends(array_except(Request::query(), 'kelurahan'))->links('pagination::bootstrap-5') !!}
                </div>
            @endif
            <div class="col-lg-6"></div>
        </div>
    </div>
@endsection
