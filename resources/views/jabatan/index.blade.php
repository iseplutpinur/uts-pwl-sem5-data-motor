@extends('layout.master')

@section('title')
    Data Jabatan
@endsection

@section('content')
    <div class="container mt-4">
        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">{{ $message }}</div>
        @endif

        <div class="card">
            <div class="card-header d-md-flex flex-row justify-content-between">
                <h5 class="card-title">Data Jabatan</h5>
                <div>
                    <a class="btn btn-success" href="{{ route('jabatan.create') }}"> Tambah Jabatan</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Divisi</th>
                            <th>Jumlah Pegawai</th>
                            <th width="280px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jabatans as $jabatan)
                            <tr>
                                <td>{{ $jabatan->nama }}</td>
                                <td>
                                    @if ($jabatan->divisi)
                                        <a class="text-decoration-none"
                                            href="{{ route('divisi.show', $jabatan->divisi->id) }}">
                                            {{ $jabatan->divisi->nama }}
                                        </a>
                                    @endif
                                </td>
                                <td>{{ $jabatan->jml_pgw }}</td>
                                <td>
                                    <form action="{{ route('jabatan.destroy', $jabatan->id) }}" method="Post">
                                        <a class="btn btn-secondary btn-sm"
                                            href="{{ route('jabatan.show', $jabatan->id) }}">Lihat</a>
                                        <a class="btn btn-primary btn-sm"
                                            href="{{ route('jabatan.edit', $jabatan->id) }}">Ubah</a>
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
                {!! $jabatans->links('pagination::bootstrap-5') !!}
            </div>
        </div>
    </div>
@endsection
