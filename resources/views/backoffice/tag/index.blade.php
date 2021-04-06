@extends('home')
@section('back')
    <div class="row mt-5">
        <div class="col-3 bg-dark text-center d-flex flex-column">
            <a class="text-white aNav p-3" href="/tagBack">Vos Tags</a>
            <a class="text-white aNav p-3" href="/tagBack/create">Créer un tag</a>
        </div>
        <div class="col-9 bg-secondary p-5 text-white">
            <div class="container">
                <table class="table text-white">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tags des articles</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tag as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <td>{{ $item->tag }}</td>
                                <td><a href="/tagBack/{{ $item->id }}/edit" class="btn btn-success">Edit</a></td>
                                <td>
                                    <form action="/tagBack/{{ $item->id }}" method="POST">
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
