@extends('layout.master')

@section('title')
    Lihat Motor
@endsection

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header d-md-flex flex-row justify-content-between">
                <h5 class="card-title">Lihat Motor</h5>
                <div>
                    <a class="btn btn-secondary" href="{{ URL::previous() }}"> Kembali</a>
                </div>
            </div>
            <div class="card-body">
                <p><strong>Nama Motor:</strong> {{ $motor->nama }}</p>
                <p><strong>Merek:</strong>
                    @if ($motor->merek)
                        <a class="text-decoration-none" href="{{ route('merek.show', $motor->merek->id) }}">
                            {{ $motor->merek->nama }}
                        </a>
                    @endif
                </p>
                <p><strong>Harga:</strong> {{ $motor->harga }}
                    @if ($motor->merek)
                        <a class="text-decoration-none" href="{{ route('merek.show', $motor->merek->id) }}">
                            {{ $motor->merek->nama }}
                        </a>
                    @endif
                </p>
            </div>
        </div>
    </div>
@endsection
