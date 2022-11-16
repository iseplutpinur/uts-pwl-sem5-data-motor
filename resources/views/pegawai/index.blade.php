@extends('layout.master')

@section('title')
    Data Pegawai
@endsection

@section('content')
    <div class="container mt-4">
        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">{{ $message }}</div>
        @endif

        <div class="card">
            <div class="card-header d-md-flex flex-row justify-content-between">
                <h5 class="card-title">Data Pegawai</h5>
                <div>
                    <a class="btn btn-success" href="{{ route('pegawai.create') }}"> Tambah Pegawai</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Nama<br><small>NIP</small></th>
                            <th>Jabatan<br><small>Divisi</small></th>
                            <th>Tahun Masuk <br> <small>Tahun Keluar</small></th>
                            <th>Jenis Kelamin <br><small>Tanggal Lahir</small></th>
                            <th>Alamat</th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pegawais as $pegawai)
                            <tr>
                                <td>{{ $pegawai->nama }} <br>
                                    <small><b>{{ $pegawai->nip }}</b></small>
                                </td>
                                <td>
                                    @if ($pegawai->jabatan)
                                        <a class="text-decoration-none"
                                            href="{{ route('jabatan.show', $pegawai->jabatan->id) }}">
                                            {{ $pegawai->jabatan->nama }}
                                        </a>
                                        @if ($pegawai->jabatan->divisi)
                                            <br>
                                            <small>
                                                <b>
                                                    <a class="text-decoration-none"
                                                        href="{{ route('divisi.show', $pegawai->jabatan->divisi->id) }}">
                                                        Divisi {{ $pegawai->jabatan->divisi->nama }}
                                                    </a>
                                                </b>
                                            </small>
                                        @endif
                                    @endif
                                </td>
                                <td>{{ $pegawai->thn_masuk }} <br>
                                    <small><b>{{ $pegawai->thn_keluar }}</b></small>
                                </td>
                                <td>{{ $pegawai->jenis_kelamin }} <br>
                                    <small><b>{{ $pegawai->tanggal_lahir }}</b></small>
                                </td>
                                <td>{{ $pegawai->alamat }}</td>
                                <td>
                                    <form action="{{ route('pegawai.destroy', $pegawai->id) }}" method="Post">
                                        <a class="btn btn-secondary btn-sm"
                                            href="{{ route('pegawai.show', $pegawai->id) }}">Lihat</a>
                                        <a class="btn btn-primary btn-sm"
                                            href="{{ route('pegawai.edit', $pegawai->id) }}">Ubah</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Apakah anda yakin?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $pegawais->links('pagination::bootstrap-5') !!}
            </div>
        </div>
    </div>
@endsection
