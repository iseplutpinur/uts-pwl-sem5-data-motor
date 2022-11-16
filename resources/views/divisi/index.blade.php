@extends('layout.master')

@section('title')
    Data Divisi
@endsection

@section('content')
    <div class="container mt-4">
        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">{{ $message }}</div>
        @endif

        <div class="card">
            <div class="card-header d-md-flex flex-row justify-content-between">
                <h5 class="card-title">Data Divisi</h5>
                <div>
                    <a class="btn btn-success" href="{{ route('divisi.create') }}"> Tambah Divisi</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Jumlah Pegawai</th>
                            <th>Jumlah Jabatan</th>
                            <th width="280px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($divisis as $divisi)
                            <tr>
                                <td>{{ $divisi->nama }}</td>
                                <td>{{ $divisi->jml_pgw }}</td>
                                <td>{{ $divisi->jabatans->count() }}</td>
                                <td>
                                    <form action="{{ route('divisi.destroy', $divisi->id) }}" method="Post">
                                        <a class="btn btn-secondary btn-sm"
                                            href="{{ route('divisi.show', $divisi->id) }}">Lihat</a>
                                        <a class="btn btn-primary btn-sm"
                                            href="{{ route('divisi.edit', $divisi->id) }}">Ubah</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="btn btn-danger btn-sm"onclick="return confirm('Apakah anda yakin?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $divisis->links('pagination::bootstrap-5') !!}
            </div>
        </div>
    </div>
@endsection
