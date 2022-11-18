@extends('layout.master')

@section('title')
    Data Satuan
@endsection

@section('content')
    <div class="container mt-4">
        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">{{ $message }}</div>
        @endif

        <div class="card">
            <div class="card-header d-md-flex flex-row justify-content-between">
                <h5 class="card-title">Data Satuan</h5>
                <div>
                    <a class="btn btn-success" href="{{ route('satuan.create') }}"> Tambah Satuan</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Jumlah Barang</th>
                            <th>Total Stok</th>
                            <th width="280px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($satuans as $satuan)
                            <tr>
                                <td>{{ $satuan->nama }}</td>
                                <td>{{ $satuan->barangs_count }}</td>
                                <td>{{ $satuan->barangs_sum_stok ?? 0 }}</td>
                                <td>
                                    <form action="{{ route('satuan.destroy', $satuan->id) }}" method="Post">
                                        <a class="btn btn-secondary btn-sm"
                                            href="{{ route('satuan.show', $satuan->id) }}">Lihat</a>
                                        <a class="btn btn-primary btn-sm"
                                            href="{{ route('satuan.edit', $satuan->id) }}">Ubah</a>
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
                {!! $satuans->links('pagination::bootstrap-5') !!}
            </div>
        </div>
    </div>
@endsection
