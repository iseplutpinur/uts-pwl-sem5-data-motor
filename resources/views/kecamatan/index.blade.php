@extends('layout.master')

@section('title')
    Data Kecamatan
@endsection

@section('content')
    <div class="container mt-4">
        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">{{ $message }}</div>
        @endif

        <div class="card">
            <div class="card-header d-md-flex flex-row justify-content-between">
                <h5 class="card-title">Data Kecamatan</h5>
                <div>
                    <a class="btn btn-success" href="{{ route('kecamatan.create') }}"> Tambah Kecamatan</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Jumlah Kelurahan</th>
                            <th>Total Penduduk</th>
                            <th width="280px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kecamatans as $kecamatan)
                            <tr>
                                <td>{{ $kecamatan->nama }}</td>
                                <td>{{ $kecamatan->kelurahans_count }}</td>
                                <td>{{ $kecamatan->kelurahans_sum_jml_pend ?? 0 }}</td>
                                <td>
                                    <form action="{{ route('kecamatan.destroy', $kecamatan->id) }}" method="Post">
                                        <a class="btn btn-secondary btn-sm"
                                            href="{{ route('kecamatan.show', $kecamatan->id) }}">Lihat</a>
                                        <a class="btn btn-primary btn-sm"
                                            href="{{ route('kecamatan.edit', $kecamatan->id) }}">Ubah</a>
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
                {!! $kecamatans->links('pagination::bootstrap-5') !!}
            </div>
        </div>
    </div>
@endsection
