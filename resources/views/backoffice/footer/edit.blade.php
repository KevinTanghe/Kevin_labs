@extends('home')
@section('back')
    <div class="row mt-5">
        <div class="col-3 bg-dark text-center d-flex flex-column">
            <a class="text-white aNav p-3" href="/footer">Bas de page</a>
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
                <form action="/footer/{{ $edit->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="">Copyright</label>
                        <input class="form-control" name="content"
                            value="{{ old('content') ? old('content') : $edit->content }}" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Url</label>
                        <input class="form-control" name="url" value="{{ old('url') ? old('url') : $edit->url }}"
                            type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Nom de l'URL</label>
                        <input class="form-control" name="name" value="{{ old('name') ? old('name') : $edit->name }}"
                            type="text">
                    </div>
                    <button class="btn btn-primary" type="submit">Summit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
