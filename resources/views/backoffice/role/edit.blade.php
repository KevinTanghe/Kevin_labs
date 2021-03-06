@extends('home')
@section('back')
    <div class="row mt-5">
        <div class="col-3 bg-dark text-center d-flex flex-column">
            <a class="text-white aNav p-3" href="/role">Gestion des roles</a>
        </div>
        <div class="col-9 bg-secondary p-5 text-white">
            <div class="container">
                <h2 class="text-center mt-2 mb-5">Modification de role</h2>
                <form action="/role/{{ $edit->id }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="">Choisissez le role</label>
                        <select class="form-control" name="role_id" id="">
                            @foreach ($role as $item)
                                <option value="{{ $item->id }}">{{ $item->role }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submit">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
@endsection
