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
                <a class="text-white aNav p-3" href="/article">Article</a>
                <a class="text-white aNav p-3" href="/article/create">Créer ton article</a>
            </div>
            <div class="col-9 bg-secondary p-5 text-white">
                <div class="container">
                    <table class="table text-white">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Titre de l'article</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($articles as $article)
                                <tr>
                                    <th scope="row">{{$article->id}}</th>
                                    <td>{{$article->title}}</td>
                                    @can('redacteur', $article)
                                        <td><a href="/article/{{$article->id}}" class="btn btn-primary">Show</a></td>
                                    @endcan
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
