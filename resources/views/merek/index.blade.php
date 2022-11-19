@extends('layout.master')

@section('title')
    Data Merek
@endsection

@section('content')
    <div class="container mt-4">
        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">{{ $message }}</div>
        @endif

        <div class="card">
            <div class="card-header d-md-flex flex-row justify-content-between">
                <h5 class="card-title">Data Merek</h5>
                <div>
                    <a class="btn btn-success" href="{{ route('merek.create') }}"> Tambah Merek</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Jumlah Motor</th>
                            <th width="280px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mereks as $merek)
                            <tr>
                                <td>{{ $merek->nama }}</td>
                                <td>{{ $merek->motors_count }}</td>
                                <td>
                                    <form action="{{ route('merek.destroy', $merek->id) }}" method="Post">
                                        <a class="btn btn-secondary btn-sm"
                                            href="{{ route('merek.show', $merek->id) }}">Lihat</a>
                                        <a class="btn btn-primary btn-sm"
                                            href="{{ route('merek.edit', $merek->id) }}">Ubah</a>
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
                {!! $mereks->links('pagination::bootstrap-5') !!}
            </div>
        </div>
    </div>
@endsection
