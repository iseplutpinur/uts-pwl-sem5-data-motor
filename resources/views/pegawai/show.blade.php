@extends('layout.master')

@section('title')
    Lihat Pegawai
@endsection

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header d-md-flex flex-row justify-content-between">
                <h5 class="card-title">Lihat Pegawai</h5>
                <div>
                    <a class="btn btn-secondary" href="{{ URL::previous() }}"> Kembali</a>
                </div>
            </div>
            <div class="card-body">
                <p><strong>Nomor Induk Pegawai:</strong> {{ $pegawai->nip }}</p>
                <p><strong>Pegawai Nama:</strong> {{ $pegawai->nama }}</p>
                @if ($pegawai->jabatan)
                    <p><strong>Jabatan:</strong>
                        <a class="text-decoration-none" href="{{ route('jabatan.show', $pegawai->jabatan->id) }}">
                            {{ $pegawai->jabatan->nama }}
                        </a>
                    </p>
                @endif
                @if ($pegawai->jabatan)
                    @if ($pegawai->jabatan->divisi)
                        <p><strong>Divisi:</strong>
                            <a class="text-decoration-none" href="{{ route('divisi.show', $pegawai->jabatan->divisi->id) }}">
                                {{ $pegawai->jabatan->divisi->nama }}
                            </a>
                        </p>
                    @endif
                @endif
                <p><strong>Tahun Masuk:</strong> {{ $pegawai->thn_masuk }}</p>
                <p><strong>Tahun Keluar/Lulus:</strong> {{ $pegawai->thn_keluar }}</p>
                <p><strong>Tanggal Lahir:</strong> {{ $pegawai->tanggal_lahir }}</p>
                <p><strong>Jensi Kelamin:</strong> {{ $pegawai->jenis_kelamin }}</p>
                <p><strong>Alamat Lengkap:</strong> {{ $pegawai->alamat }}</p>
            </div>
        </div>
    </div>
@endsection
