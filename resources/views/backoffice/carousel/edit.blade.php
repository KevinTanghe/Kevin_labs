@extends('home')
@section('back')
    <div class="row mt-5">
        <div class="col-3 bg-dark text-center d-flex flex-column">
            <a class="text-white aNav p-3" href="/carousel">Image du carousel</a>
            <a class="text-white aNav p-3" href="/carousel/create">Ajouter une image au carousel</a>
        </div>
        <div class="col-9 bg-secondary p-5 text-white">
            <div class="container">
                <h2 class="text-center mb-4">Modifier votre image</h2>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="/carousel/{{ $edit->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="exampleInputEmail1">Image du carousel</label>
                        <input type="file" name="img" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
