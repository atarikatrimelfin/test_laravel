@extends('layoutadmin')
@section('content')
    <h4 class="mt-5">Data Ekstrakulikuler</h4>
    <a href="{{ route('ekskul.create') }}" type="button" class="btn btn-success rounded-3">Tambah Data</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success mt-3" role="alert">
            {{ $message }}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <div class="table-responsive mt-4">
                <table class="table table-hover mt-2">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Siswa</th>
                            <th>Nama Ekstrakulikuler</th>
                            <th>Tahun Mulai Mengikuti Ekstrakulikuler</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ekskul as $ex)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $ex->siswa->nama_depan }} {{ $ex->siswa->nama_belakang }}</td>
                                <td>{{ $ex->nama_ekskul }}</td>
                                <td>{{ $ex->tahun_mulai }}</td>
                                <td>
                                    <a href="{{ route('ekskul.edit', $ex->id) }}" type="button"
                                        class="btn btn-warning rounded-3">Ubah</a>
                                    <form action="{{ route('ekskul.destroy', $ex->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger rounded-3">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </table>
@stop
