@extends('layout.master')

@section('title')
    Data Motor
@endsection

@section('content')
    <div class="container mt-4">
        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">{{ $message }}</div>
        @endif

        <div class="card">
            <div class="card-header d-md-flex flex-row justify-content-between">
                <h5 class="card-title">Data Motor</h5>
                <div>
                    <a class="btn btn-success" href="{{ route('motor.create') }}"> Tambah Motor</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Merek</th>
                            <th width="280px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($motors as $motor)
                            <tr>
                                <td>{{ $motor->nama }}</td>
                                <td class="text-right">{{ $motor->harga }}</td>
                                <td>
                                    @if ($motor->merek)
                                        <a class="text-decoration-none" href="{{ route('merek.show', $motor->merek->id) }}">
                                            {{ $motor->merek->nama }}
                                        </a>
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ route('motor.destroy', $motor->id) }}" method="Post">
                                        <a class="btn btn-secondary btn-sm"
                                            href="{{ route('motor.show', $motor->id) }}">Lihat</a>
                                        <a class="btn btn-primary btn-sm"
                                            href="{{ route('motor.edit', $motor->id) }}">Ubah</a>
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
                {!! $motors->links('pagination::bootstrap-5') !!}
            </div>
        </div>
    </div>
@endsection
