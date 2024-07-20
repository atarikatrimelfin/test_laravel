@extends('layoutadmin')
@section('content')
    <h4 class="mt-5">Data Admin</h4>
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
                            <th>Nama Depan</th>
                            <th>Nama Belakang</th>
                            <th>Email</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Password</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($admin as $adm)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $adm->nama_depan }}</td>
                                <td>{{ $adm->nama_belakang }}</td>
                                <td>{{ $adm->email }}</td>
                                <td>{{ $adm->tanggal_lahir }}</td>
                                <td>{{ $adm->jenis_kelamin }}</td>
                                <td>Password Terenkripsi</td>
                                <td>
                                    <a href="{{ route('admin.edit', $adm->id) }}" type="button"
                                        class="btn btn-warning rounded-3">Ubah</a>
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
