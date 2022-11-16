@extends('layout.master')

@section('title')
    Lihat Divisi
@endsection

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header d-md-flex flex-row justify-content-between">
                <h5 class="card-title">Lihat Divisi</h5>
                <div>
                    <a class="btn btn-secondary" href="{{ URL::previous() }}"> Kembali</a>
                </div>
            </div>
            <div class="card-body">
                <p><strong>Nama Divisi:</strong> {{ $divisi->nama }}</p>
                <p><strong>Jumlah Pegawai:</strong> {{ $divisi->jml_pgw }}</p>
            </div>
        </div>
        <br>
        <div class="row">
            @if ($pegawais)
                <div class="col-lg-6">
                    <div class="card mb-1">
                        <div class="card-header fw-bold">
                            Pegawai Divisi {{ $divisi->nama }}
                        </div>
                        <ul class="list-group list-group-flush">
                            @foreach ($pegawais as $pegawai)
                                <a href="{{ route('pegawai.show', $pegawai->id) }}" class="text-decoration-none">
                                    <li class="list-group-item">{{ $pegawai->nama }}
                                        <br>
                                        <small>{{ $pegawai->nip }} | {{ $pegawai->jabatan->nama }}</small>
                                    </li>
                                </a>
                            @endforeach
                        </ul>
                    </div>
                    {!! $pegawais->appends(array_except(Request::query(), 'pegawai'))->links('pagination::bootstrap-5') !!}
                </div>
            @endif
            @if ($jabatans)
                <div class="col-lg-6">
                    <div class="card mb-1">
                        <div class="card-header fw-bold">
                            Jabatan Divisi {{ $divisi->nama }}
                        </div>
                        <ul class="list-group list-group-flush">
                            @foreach ($jabatans as $jabatan)
                                <a href="{{ route('jabatan.show', $jabatan->id) }}" class="text-decoration-none">
                                    <li class="list-group-item">{{ $jabatan->nama }} <br>
                                        <small>{{ $jabatan->jml_pgw }} Pegawai</small>
                                    </li>
                                </a>
                            @endforeach
                        </ul>
                    </div>
                    {!! $jabatans->appends(array_except(Request::query(), 'jabatan'))->links('pagination::bootstrap-5') !!}
                </div>
            @endif
            <div class="col-lg-6"></div>
        </div>
    </div>
@endsection
