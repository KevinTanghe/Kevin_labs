@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="containerBack">
        <div class="row mt-5">
            <div class="col-3 bg-dark text-center d-flex flex-column">
                <a class="text-white aNav p-3" href="/home">Home</a>
                <a class="text-white aNav p-3" href="/user">Votre profil</a>
                <a class="text-white aNav p-3" href="/user/{{ $edit->id }}/edit">Modifier votre profil</a>
            </div>
            <div class="col-9 bg-secondary p-5 text-white">
                <div class="container">
                    <h2 class="text-center mt-2 mb-5">Votre profil</h2>
                    <form action="/user/{{ $edit->id }}" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-4 d-flex flex-column align-items-center">
                                <input class="form-control mb-3" type="file" name="photo" id="">
                                <img class="photo-profil" src="{{ asset('storage/' . $edit->photo) }}" alt="">
                            </div>
                            <div class="col-8">
                                @csrf
                                @method('PATCH')
                                <div class=" mb-2 form-group">
                                    <h5 class="mb-2">Nom :</h5>
                                    <input class="form-control" name="lastname"
                                        value="{{ old('lastname') ? old('lastname') : $edit->lastname }}" type="text">
                                </div>
                                <div class=" mb-2 form-group">
                                    <h5 class="mb-2">Prénom :</h5>
                                    <input class="form-control" name="firstname"
                                        value="{{ old('firstname') ? old('firstname') : $edit->firstname }}" type="text">
                                </div>
                                <div class=" mb-2 form-group">
                                    <h5 class="mb-2">Email :</h5>
                                    <input class="form-control" name="email"
                                        value="{{ old('email') ? old('email') : $edit->email }}" type="text">
                                </div>
                                <div class="form-group">
                                    <h5 class="mb-2">Fonction :</h5>
                                    <select class="form-control" name="fonction_id" id="">
                                        @foreach ($fonction as $item)
                                            <option value="{{ $item->id }}">{{ $item->fonction }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class=" mb-2 form-group">
                                    <h5 class="mb-2">Description :</h5>
                                    <input class="form-control" name="description"
                                        value="{{ old('description') ? old('description') : $edit->description }}"
                                        type="text">
                                </div>
                                <button class="btn btn-primary mt-3" type="submit">Modifier</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
