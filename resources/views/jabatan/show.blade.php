@extends('layout.master')

@section('title')
    Lihat Jabatan
@endsection

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header d-md-flex flex-row justify-content-between">
                <h5 class="card-title">Lihat Jabatan</h5>
                <div>
                    <a class="btn btn-secondary" href="{{ URL::previous() }}"> Kembali</a>
                </div>
            </div>
            <div class="card-body">
                <p><strong>Nama Jabatan:</strong> {{ $jabatan->nama }}</p>
                <p><strong>Divisi:</strong>
                    @if ($jabatan->divisi)
                        <a class="text-decoration-none" href="{{ route('divisi.show', $jabatan->divisi->id) }}">
                            {{ $jabatan->divisi->nama }}
                        </a>
                    @endif
                </p>
                <p><strong>Jumlah Pegawai:</strong> {{ $jabatan->jml_pgw }}</p>
            </div>
        </div>
        <br>
        <div class="row">
            @if ($pegawais)
                <div class="col-lg-6">
                    <div class="card mb-1">
                        <div class="card-header fw-bold">
                            Pegawai Jabatan {{ $jabatan->nama }}
                        </div>
                        <ul class="list-group list-group-flush">
                            @foreach ($pegawais as $pegawai)
                                <a href="{{ route('pegawai.show', $pegawai->id) }}" class="text-decoration-none">
                                    <li class="list-group-item">{{ $pegawai->nama }}
                                        <br>
                                        <small>{{ $pegawai->nip }}</small>
                                    </li>
                                </a>
                            @endforeach
                        </ul>
                    </div>
                    {!! $pegawais->links('pagination::bootstrap-5') !!}
                </div>
            @endif
            <div class="col-lg-6"></div>
        </div>
    </div>
@endsection
