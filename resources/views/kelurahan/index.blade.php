@extends('layout.master')

@section('title')
    Data Kelurahan
@endsection

@section('content')
    <div class="container mt-4">
        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">{{ $message }}</div>
        @endif

        <div class="card">
            <div class="card-header d-md-flex flex-row justify-content-between">
                <h5 class="card-title">Data Kelurahan</h5>
                <div>
                    <a class="btn btn-success" href="{{ route('kelurahan.create') }}"> Tambah Kelurahan</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Penduduk</th>
                            <th>Kecamatan</th>
                            <th width="280px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kelurahans as $kelurahan)
                            <tr>
                                <td>{{ $kelurahan->nama }}</td>
                                <td class="text-right">{{ $kelurahan->jml_pend }}</td>
                                <td>
                                    @if ($kelurahan->kecamatan)
                                        <a class="text-decoration-none"
                                            href="{{ route('kecamatan.show', $kelurahan->kecamatan->id) }}">
                                            {{ $kelurahan->kecamatan->nama }}
                                        </a>
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ route('kelurahan.destroy', $kelurahan->id) }}" method="Post">
                                        <a class="btn btn-secondary btn-sm"
                                            href="{{ route('kelurahan.show', $kelurahan->id) }}">Lihat</a>
                                        <a class="btn btn-primary btn-sm"
                                            href="{{ route('kelurahan.edit', $kelurahan->id) }}">Ubah</a>
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
                {!! $kelurahans->links('pagination::bootstrap-5') !!}
            </div>
        </div>
    </div>
@endsection
