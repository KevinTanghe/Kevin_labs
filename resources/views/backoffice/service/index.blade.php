@extends('home')
@section('back')
    <div class="row mt-5">
        <div class="col-3 bg-dark text-center d-flex flex-column">
            <a class="text-white aNav p-3" href="/serviceBack">Mes services</a>
            <a class="text-white aNav p-3" href="/service/create">Créer un nouveau service</a>
        </div>
        <div class="col-9 bg-secondary p-5 text-white">
            <div class="container">
                <table class="table text-white">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titre de l'article</th>
                            <th>Icone</th>
                            <th>Description</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($service as $item)
                            <tr>
                                <td scope="row">{{ $item->id }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->icon }}</td>
                                <td>{{ $item->content }}</td>
                                <td><a class="btn btn-success" href="/service/{{ $item->id }}/edit">Edit</a></td>
                                <td>
                                    <form action="/service/{{ $item->id }}" method="POST">
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
