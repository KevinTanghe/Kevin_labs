@extends('home')
@section('back')
    <div class="row mt-5">
        <div class="col-3 bg-dark text-center d-flex flex-column">
            <a class="text-white aNav p-3" href="/testi">Vos Testimoniaux</a>
            <a class="text-white aNav p-3" href="/testi/create">Créer un testimonial</a>
        </div>
        <div class="col-9 bg-secondary p-5 text-white">
            <div class="container">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="/testi" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Nom de la personne</label>
                        <input class="form-control" name="name" value="{{ old('name') }}" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Fonction de la personne</label>
                        <input class="form-control" name="function" value="{{ old('function') }}" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Message de la personne</label>
                        <input class="form-control" name="content" value="{{ old('content') }}" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Photo de la personne</label>
                        <input class="form-control" name="img" type="file">
                    </div>
                    <button class="btn btn-primary" type="submit">Summit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
