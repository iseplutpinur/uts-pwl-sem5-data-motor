@extends('layout.master')

@section('title')
    Lihat Merek
@endsection

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header d-md-flex flex-row justify-content-between">
                <h5 class="card-title">Lihat Merek</h5>
                <div>
                    <a class="btn btn-secondary" href="{{ URL::previous() }}"> Kembali</a>
                </div>
            </div>
            <div class="card-body">
                <p><strong>Nama Merek:</strong> {{ $merek->nama }}</p>
            </div>
        </div>
        <br>
        <div class="row">
            @if ($motors)
                <div class="col-lg-6">
                    <div class="card mb-1">
                        <div class="card-header fw-bold">
                            Motor Merek {{ $merek->nama }}
                        </div>
                        <ul class="list-group list-group-flush">
                            @foreach ($motors as $motor)
                                <a href="{{ route('motor.show', $motor->id) }}" class="text-decoration-none">
                                    <li class="list-group-item">{{ $motor->nama }} <br>
                                        <small>{{ $motor->harga }} {{ $merek->nama }}</small>
                                    </li>
                                </a>
                            @endforeach
                        </ul>
                    </div>
                    {!! $motors->appends(array_except(Request::query(), 'motor'))->links('pagination::bootstrap-5') !!}
                </div>
            @endif
            <div class="col-lg-6"></div>
        </div>
    </div>
@endsection
