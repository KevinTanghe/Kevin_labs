@extends('home')
@section('back')
    <div class="row mt-5">
        <div class="col-3 bg-dark text-center d-flex flex-column">
            <a class="text-white aNav p-3" href="/article">Article</a>
            <a class="text-white aNav p-3" href="/article/create">Créer ton article</a>
            <a href="/article/{{ $edit->id }}/edit " class="aNav text-white p-3">Editez votre article</a>
            <form action="/article/{{ $edit->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn text-white aNav p-3">Supprimer votre article</button>
            </form>
        </div>
        <div class="col-9 bg-secondary p-5 text-white">
            <div class="container">
                <h2 class="text-center">Editez votre article</h2>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="/article/{{ $edit->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="exampleInputEmail1">Image de l'article</label>
                        <input type="file" name="img" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Titre de l'article</label>
                        <input type="text" value="{{ old('title') ? old('title') : $edit->title }}" name="title"
                            class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="">Choisisez sa catégorie</label>
                        <select class="form-control" name="categorie_id" id="">
                            @foreach ($categorie as $item)
                                <option value="{{ $item->id }}">{{ $item->categorie }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">Choisisez vos tags</label>
                        <select multiple name="tag[]" class="form-control" id="exampleFormControlSelect2">
                            @foreach ($tag as $item)
                                <option value="{{ $item->id }}">{{ $item->tag }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Example textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="content"
                            rows="3">{{ old('content') ? old('content') : $edit->content }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
