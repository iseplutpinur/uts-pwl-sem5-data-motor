@extends('layout.master')

@section('title')
    Lihat Barang
@endsection

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header d-md-flex flex-row justify-content-between">
                <h5 class="card-title">Lihat Barang</h5>
                <div>
                    <a class="btn btn-secondary" href="{{ URL::previous() }}"> Kembali</a>
                </div>
            </div>
            <div class="card-body">
                <p><strong>Kode Barang:</strong> {{ $barang->kode }}</p>
                <p><strong>Nama Barang:</strong> {{ $barang->nama }}</p>
                <p><strong>Satuan:</strong>
                    @if ($barang->satuan)
                        <a class="text-decoration-none" href="{{ route('satuan.show', $barang->satuan->id) }}">
                            {{ $barang->satuan->nama }}
                        </a>
                    @endif
                </p>
                <p><strong>Stok:</strong> {{ $barang->stok }}
                    @if ($barang->satuan)
                        <a class="text-decoration-none" href="{{ route('satuan.show', $barang->satuan->id) }}">
                            {{ $barang->satuan->nama }}
                        </a>
                    @endif
                </p>
            </div>
        </div>
    </div>
@endsection
