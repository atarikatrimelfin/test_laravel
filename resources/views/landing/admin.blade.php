@extends('landing.layout')

@section('content')
    <main id="main">

        <section id="admin" class="blog">
            <div class="container" data-aos="fade-up">
                <article class="blog-details">
                    <h3 class="title text-center">DATA ADMIN
                    </h3>
                    <div class="offset-2 mt-4">
                        <table class="table table-striped table-responsive" style="display: inline-block; max-width: 80%">
                            <thead class="thead-perhutani">
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama Depan</th>
                                    <th scope="col">Nama Belakang</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Tanggal Lahir</th>
                                    <th scope="col">Jenis Kelamin</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($admin as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}.</td>
                                        <td>{{ $item->nama_depan}}</td>
                                        <td>{{ $item->nama_belakang }}</td>
                                        <td>{{ $item->email}}</td>
                                        <td>{{ $item->tanggal_lahir }}</td>
                                        <td>{{ $item->jenis_kelamin}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center mt-4">
                        <a href="/admin/login" class="btn btn-primary">Login</a>
                    </div>
                </article>
            </div>
        </section>
    </main>
@endsection