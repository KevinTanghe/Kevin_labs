@extends('home')
@section('back')
    <div class="row mt-5">
        <div class="col-3 bg-dark text-center d-flex flex-column">
            <a class="text-white aNav p-3" href="/home">Home</a>
            <a class="text-white aNav p-3" href="/tagBack">Vos Tags</a>
            <a class="text-white aNav p-3" href="/tagBack/create">Créer un tag</a>
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
                <form action="/tagBack" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">tag</label>
                        <input class="form-control" name="tag" value="{{ old('tag') }}" type="text">
                    </div>
                    <button class="btn btn-primary" type="submit">Summit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
