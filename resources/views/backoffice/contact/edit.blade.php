@extends('home')
@section('back')
    <div class="row mt-5">
        <div class="col-3 bg-dark text-center d-flex flex-column">
            <a class="text-white aNav p-3" href="/contact/create">Information contact</a>
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
                <form action="/contact/{{ $edit->id }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="">Titre Contact</label>
                        <input class="form-control" value="{{ old('mainTitle') ? old('mainTitle') : $edit->mainTitle }}"
                            name="mainTitle" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Texte du contact</label>
                        <input class="form-control" value="{{ old('mainText') ? old('mainText') : $edit->mainText }}"
                            name="mainText" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Titre de l'entreprise</label>
                        <input class="form-control"
                            value="{{ old('streetTitle') ? old('streetTitle') : $edit->streetTitle }}" name="streetTitle"
                            type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Addresse de l'entreprise</label>
                        <input class="form-control" value="{{ old('street') ? old('street') : $edit->street }}"
                            name="street" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Numéro de l'entreprise</label>
                        <input class="form-control" value="{{ old('phone') ? old('phone') : $edit->phone }}" name="phone"
                            type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Mail de l'entreprise</label>
                        <input class="form-control" value="{{ old('mail') ? old('mail') : $edit->mail }}" name="mail"
                            type="text">
                    </div>
                    <button class="btn btn-primary" type="submit">Summit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
