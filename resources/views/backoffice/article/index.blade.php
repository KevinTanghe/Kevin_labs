@extends('home')
@section('back')
    <div class="row mt-5">
        <div class="col-3 bg-dark text-center d-flex flex-column">
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
                                <th scope="row">{{ $article->id }}</th>
                                <td>{{ $article->title }}</td>
                                @can('redacteur', $article)
                                    <td><a href="/article/{{ $article->id }}" class="btn btn-primary">Show</a></td>
                                @endcan
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
