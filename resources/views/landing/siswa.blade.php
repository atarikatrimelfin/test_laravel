@extends('landing.layout')

@section('content')
    <main id="main">

        <section id="admin" class="blog">
            <div class="container" data-aos="fade-up">
                <article class="blog-details">
                    <h3 class="title text-center">DATA SISWA
                    </h3>
                    <div class="offset-2 mt-4">
                        <table class="table table-striped table-responsive" style="display: inline-block; max-width: 80%">
                            <thead class="thead-perhutani">
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama Depan</th>
                                    <th scope="col">Nama Belakang</th>
                                    <th scope="col">Nomor HP</th>
                                    <th scope="col">NIS</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Foto</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($siswa as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}.</td>
                                        <td>{{ $item->nama_depan }}</td>
                                        <td>{{ $item->nama_belakang }}</td>
                                        <td>{{ $item->no_hp }}</td>
                                        <td>{{ $item->nis }}</td>
                                        <td>{{ $item->alamat }}</td>
                                        <td>{{ $item->jenis_kelamin }}</td>
                                        <td>
                                            @if ($item->foto)
                                                <img src="{{ asset('storage/foto/' . $item->foto) }}"
                                                    alt="Foto Siswa" width="150">
                                            @else
                                                Tidak Ada Foto
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center">
                        <a href="/admin/login" class="btn btn-primary">Login</a>
                        <br>
                        <small>Login untuk mengedit Data Siswa</small>
                    </div>  
                </article>
            </div>
        </section>
    </main>
@endsection
