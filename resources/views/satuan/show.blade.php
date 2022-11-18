@extends('layout.master')

@section('title')
    Lihat Satuan
@endsection

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header d-md-flex flex-row justify-content-between">
                <h5 class="card-title">Lihat Satuan</h5>
                <div>
                    <a class="btn btn-secondary" href="{{ URL::previous() }}"> Kembali</a>
                </div>
            </div>
            <div class="card-body">
                <p><strong>Nama Satuan:</strong> {{ $satuan->nama }}</p>
            </div>
        </div>
        <br>
        <div class="row">
            @if ($barangs)
                <div class="col-lg-6">
                    <div class="card mb-1">
                        <div class="card-header fw-bold">
                            Barang Satuan {{ $satuan->nama }}
                        </div>
                        <ul class="list-group list-group-flush">
                            @foreach ($barangs as $barang)
                                <a href="{{ route('barang.show', $barang->id) }}" class="text-decoration-none">
                                    <li class="list-group-item">{{ $barang->nama }} <br>
                                        <small>{{ $barang->stok }} {{ $satuan->nama }}</small>
                                    </li>
                                </a>
                            @endforeach
                        </ul>
                    </div>
                    {!! $barangs->appends(array_except(Request::query(), 'barang'))->links('pagination::bootstrap-5') !!}
                </div>
            @endif
            <div class="col-lg-6"></div>
        </div>
    </div>
@endsection
