@extends('layoutadmin')
@section('content')
    <h4 class="mt-5">Data Siswa</h4>
    <a href="{{ route('siswa.create') }}" type="button" class="btn btn-success rounded-3">Tambah Data</a>
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
                            <th>Nomor HP</th>
                            <th>NIS</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Foto</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($siswa as $s)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $s->nama_depan }}</td>
                                <td>{{ $s->nama_belakang }}</td>
                                <td>{{ $s->no_hp }}</td>
                                <td>{{ $s->nis }}</td>
                                <td>{{ $s->alamat }}</td>
                                <td>{{ $s->jenis_kelamin }}</td>
                                <td>
                                    @if ($s->foto)
                                        <img src="{{ asset('storage/foto/' . $s->foto) }}" alt="Foto Siswa"
                                            width="150">
                                    @else
                                        Tidak Ada Gambar
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('siswa.edit', $s->id) }}" type="button"
                                        class="btn btn-warning rounded-3">Ubah</a>
                                    <form method="POST" action="{{ route('siswa.destroy', $s->id) }}">
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
