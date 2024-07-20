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
        <h5 class="card-title fw-bolder mb-3">Ubah Data Ekstrakulikuler Siswa</h5>
        <form method="post" action="{{ route('ekskul.update', $ekskul->id) }}">
            @csrf
            <div class="form-group row col-12 col-md-10">
                <label for="id_siswa" class="form-label">Nama Siswa</label>
                <div class="col-sm-10">
                    <select name="id_siswa" class="custom-select" required>
                        @foreach ($siswa as $item)
                            <option value="{{ $item->id }}" {{ $item->id == $ekskul->id_siswa ? 'selected' : '' }}>
                                {{ $item->nama_depan }} {{ $item->nama_belakang }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>            
            <div class="mb-3">
                <label for="nama_ekskul" class="form-label">Nama Ekstrakulikuler</label>
                <input type="text" class="form-control" id="nama_ekskul" name="nama_ekskul" value="{{ $ekskul->nama_ekskul }}">
            </div>
            <div class="mb-3">
                <label for="tahun_mulai" class="form-label">Tahun Mulai</label>
                <input type="year" class="form-control" id="tahun_mulai" name="tahun_mulai" value="{{ $ekskul->tahun_mulai }}">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Ubah</button>
            </div>
        </form>
    </div>
</div>
@stop