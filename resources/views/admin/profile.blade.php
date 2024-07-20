@extends('layout')

@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title fw-bolder mb-3">Ubah Data Admin</h5>
            <form method="post" action="{{ route('admin.update', Auth::user()->id) }}">
                @csrf
                @method('POST')

                <div class="mb-3">
                    <label for="nama_depan" class="form-label">Nama Depan</label>
                    <input type="text" class="form-control" id="nama_depan" name="nama_depan" value="{{ Auth::user()->nama_depan }}">
                </div>

                <div class="mb-3">
                    <label for="nama_belakang" class="form-label">Nama Belakang</label>
                    <input type="text" class="form-control" id="nama_belakang" name="nama_belakang" value="{{ Auth::user()->nama_belakang }}">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}">
                </div>

                <div class="mb-3">
                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ Auth::user()->tanggal_lahir }}">
                </div>

                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select id="jenis_kelamin" name="jenis_kelamin" class="form-select" required>
                        <option value="" disabled>Pilih Jenis Kelamin</option>
                        <option value="Laki-laki" {{ Auth::user()->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="Perempuan" {{ Auth::user()->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password Baru</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Ubah</button>
                    <a href="/admin" class="btn btn-danger"><i class="fas fa-reply mr-2"></i>Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
