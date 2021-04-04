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
                <a class="text-white aNav p-3" href="/user/{{$user->id}}/edit">Modifier votre profil</a>
            </div>
            <div class="col-9 bg-secondary p-5 text-white">
                <div class="container">
                    <h2 class="text-center mt-2 mb-5">Votre profil</h2>
                    <div class="row">
                        <div class="col-4 d-flex justify-content-center">
                            <img class="photo-profil" src="{{asset('storage/'.$user->photo)}}" alt="">
                        </div>
                        <div class="col-8">
                            <div class="d-flex mb-2">
                                <h5 class="mr-2">Nom :</h5>
                                <span> {{$user->lastname}}</span>
                            </div>
                            <div class="d-flex mb-2">
                                <h5 class="mr-2">Prénom :</h5>
                                <span> {{$user->firstname}}</span>
                            </div>
                            <div class="d-flex mb-2">
                                <h5 class="mr-2">Email :</h5>
                                <span> {{$user->email}}</span>
                            </div>
                            <div class="d-flex mb-2">
                                <h5 class="mr-2">Fonction :</h5>
                                <span> {{$user->fonction->fonction}}</span>
                            </div>
                            <div class="d-flex mb-2">
                                <h5 class="mr-2">Role :</h5>
                                <span> {{$user->role->role}}</span>
                            </div>
                            <div class="d-flex mb-2">
                                <h5 class="mr-2">Description :</h5>
                                <span> {{$user->description}}</span>
                            </div>
                            <div class="d-flex mb-2">
                                <h5 class="mr-2">Validé :</h5>
                                @if ($user->check == 0)
                                    <span>Non</span>
                                @else
                                    <span>Oui</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
