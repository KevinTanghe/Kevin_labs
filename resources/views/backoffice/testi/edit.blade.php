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
                <a class="text-white aNav p-3" href="/testi">Vos Testimoniaux</a>
                <a class="text-white aNav p-3" href="/testi/create">Créer un testimonial</a>
            </div>
            <div class="col-9 bg-secondary p-5 text-white">
                <div class="container">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $item)
                                    <li>{{$item}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="/testi" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Nom de la personne</label>
                            <input class="form-control" name="name" value="{{old('name')}}" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Fonction de la personne</label>
                            <input class="form-control" name="function" value="{{old('function')}}" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Message de la personne</label>
                            <input class="form-control" name="content" value="{{old('name')}}" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Photo de la personne</label>
                            <input class="form-control" name="img" type="file">
                        </div>
                        <button class="btn btn-primary" type="submit">Summit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
