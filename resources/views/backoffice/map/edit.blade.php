@extends('home')
@section('back')
    <div class="row mt-5">
        <div class="col-3 bg-dark text-center d-flex flex-column">
            <a class="text-white aNav p-3" href="/map">Map Google</a>
        </div>
        <div class="col-9 bg-secondary p-5 text-white">
            <div class="container">
                <form action="/map/{{ $edit->id }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="">Adresse de l'entreprise</label>
                        <input class="form-control" value="{{ old('street') ? old('street') : $edit->street }}"
                            type="text" name="street" id="">
                    </div>
                    <button class="btn btn-primary" type="submit">Summit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
