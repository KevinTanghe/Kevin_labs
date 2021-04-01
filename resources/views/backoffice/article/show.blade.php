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
                <a href="/article/{{$articles->id}}/edit " class="aNav text-white p-3">Editez votre article</a>

                
                <form action="/article/{{$articles->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn text-white aNav p-3">Supprimer votre article</button>
                </form>
            </div>
            <div class="col-9 bg-secondary p-5 text-white">
                <div class="container">
                    <table class="table text-white">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Titre de l'article</th>
                                <th>Photo de l'article</th>
                                <th>Message de l'article</th>
                                <th>Tags de l'article</th>
                                <th>Categorie de l'article</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">{{ $articles->id }}</th>
                                <td>{{ $articles->title }}</td>
                                <td><img height="100px" width="200px" src="{{asset('storage/'.$articles->img)}}" alt=""></td>
                                <td>{{Str::limit($articles->content, 30)}}</td>
                                <td>
                                    @foreach ($articles->tags as $tag)
                                        {{ $tag->tag }}
                                    @endforeach
                                </td>
                                <td>{{$articles->categories->categorie}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
