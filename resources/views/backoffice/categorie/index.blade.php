@extends('home')
@section('back')
    <div class="row mt-5">
        <div class="col-3 bg-dark text-center d-flex flex-column">
            <a class="text-white aNav p-3" href="/categorieBack">Vos Catégories</a>
            <a class="text-white aNav p-3" href="/categorieBack/create">Créer une catégorie</a>
        </div>
        <div class="col-9 bg-secondary p-5 text-white">
            <div class="container">
                <table class="table text-white">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Categorie des articles</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categorie as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <td>{{ $item->categorie }}</td>
                                <td><a href="/categorieBack/{{ $item->id }}/edit" class="btn btn-success">Edit</a></td>
                                <td>
                                    <form action="/categorieBack/{{ $item->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
