@extends('layout')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title fw-bolder mb-3">Ubah Data Siswa</h5>
            <form method="post" action="{{ route('siswa.update', $siswa->id) }}">
                @csrf
                <div class="mb-3">
                    <label for="nama_depan" class="form-label">Nama Depan</label>
                    <input type="text" class="form-control" id="nama_depan" name="nama_depan"
                        value="{{ $siswa->nama_depan }}">
                </div>
                <div class="mb-3">
                    <label for="nama_belakang" class="form-label">Nama Belakang</label>
                    <input type="text" class="form-control" id="nama_belakang" name="nama_belakang"
                        value="{{ $siswa->nama_belakang }}">
                </div>
                <div class="mb-3">
                    <label for="no_hp" class="form-label">Nomor HP</label>
                    <input type="number" class="form-control" id="no_hp" name="no_hp" value="{{ $siswa->no_hp }}">
                </div>
                <div class="mb-3">
                    <label for="nis" class="form-label">NIS</label>
                    <input type="text" class="form-control" id="nis" name="nis" value="{{ $siswa->nis }}">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $siswa->alamat }}">
                </div>
                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <div>
                        <select id="jenis_kelamin" name="jenis_kelamin" required>
                            <option value="" disabled>Pilih Jenis Kelamin</option>
                            <option value="Laki-laki" {{ $siswa->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="Perempuan" {{ $siswa->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>
                </div>                
                <div class="mb-3">
                    <label for="foto" class="form-label">Foto</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control" id="foto" name="foto" value="{{ $siswa->foto }}"
                            accept="image/jpeg, image/png, image/jpg, image/svg">
                        <small class="form-text text-muted">Foto harus bertipe: jpeg, png, jpg, atau svg</small>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Ubah</button>
                </div>
            </form>
        </div>
    </div>
@stop
