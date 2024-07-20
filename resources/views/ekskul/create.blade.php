@extends('layout')
@section('content')

    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title fw-bolder mb-3">Tambah Ekstrakulikuler yang diikuti Siswa</h5>
            <form method="post" action="{{ route('ekskul.store') }}">
                @csrf
                <div class="form-group row col-12 col-md-10">
                    <label for="id_siswa" class="form-label">Nama Siswa</label>
                    <div class="col-sm-10">
                        <select name="id_siswa" class="custom-select" Required>
                            <option value="" disabled selected>Pilih Siswa</option>
                            @foreach ($siswa as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_depan }} {{ $item->nama_belakang }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="nama_ekskul" class="form-label">Nama Ekstrakulikuler</label>
                    <input type="text" class="form-control" id="nama_ekskul" name="nama_ekskul">
                </div>
                <div class="mb-3">
                    <label for="tahun_mulai" class="form-label">Tahun mulai mengikuti</label>
                    <input type="number" class="form-control" id="tahun_mulai" name="tahun_mulai">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
@stop