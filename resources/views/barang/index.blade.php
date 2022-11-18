@extends('layout.master')

@section('title')
    Data Barang
@endsection

@section('content')
    <div class="container mt-4">
        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">{{ $message }}</div>
        @endif

        <div class="card">
            <div class="card-header d-md-flex flex-row justify-content-between">
                <h5 class="card-title">Data Barang</h5>
                <div>
                    <a class="btn btn-success" href="{{ route('barang.create') }}"> Tambah Barang</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Stok</th>
                            <th>Satuan</th>
                            <th width="280px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($barangs as $barang)
                            <tr>
                                <td>{{ $barang->kode }}</td>
                                <td>{{ $barang->nama }}</td>
                                <td class="text-right">{{ $barang->stok }}</td>
                                <td>
                                    @if ($barang->satuan)
                                        <a class="text-decoration-none"
                                            href="{{ route('satuan.show', $barang->satuan->id) }}">
                                            {{ $barang->satuan->nama }}
                                        </a>
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ route('barang.destroy', $barang->id) }}" method="Post">
                                        <a class="btn btn-secondary btn-sm"
                                            href="{{ route('barang.show', $barang->id) }}">Lihat</a>
                                        <a class="btn btn-primary btn-sm"
                                            href="{{ route('barang.edit', $barang->id) }}">Ubah</a>
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
                {!! $barangs->links('pagination::bootstrap-5') !!}
            </div>
        </div>
    </div>
@endsection
