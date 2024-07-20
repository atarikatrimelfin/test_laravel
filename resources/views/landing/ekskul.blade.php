@extends('landing.layout')

@section('content')
    <main id="main">

        <section id="admin" class="blog">
            <div class="container" data-aos="fade-up">
                <article class="blog-details">
                    <h3 class="title text-center">DATA EKSTRAKULIKULER
                    </h3>
                    <div class="offset-2 mt-4">
                        <table class="table table-striped table-responsive" style="display: inline-block; max-width: 80%">
                            <thead class="thead-perhutani">
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama Siswa</th>
                                    <th scope="col">Nama Ekstrakulikuler</th>
                                    <th scope="col">Tahun Mulai</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ekskul as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}.</td>
                                        <td>{{ $item->siswa->nama_depan}} {{ $item->siswa->nama_belakang }}</td>
                                        <td>{{ $item->nama_ekskul}}</td>
                                        <td>{{ $item->tahun_mulai }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center">
                        <a href="/admin/login" class="btn btn-primary">Login</a>
                        <br>
                        <small>Login untuk mengedit Data Ekstrakulikuler</small>
                    </div>                    
                </article>
            </div>
        </section>
    </main>
@endsection