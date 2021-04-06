@extends('home')
@section('back')
    <div class="row mt-5">
        <div class="col-3 bg-dark text-center d-flex flex-column">
            <a class="text-white aNav p-3" href="/categorieBack">Vos Catégories</a>
            <a class="text-white aNav p-3" href="/categorieBack/create">Créer une catégorie</a>
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
                <form action="/categorieBack" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Catégorie</label>
                        <input class="form-control" name="categorie" value="{{ old('categorie') }}" type="text">
                    </div>
                    <button class="btn btn-primary" type="submit">Summit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
