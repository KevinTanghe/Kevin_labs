@extends('home')
@section('back')
    <div class="row mt-5">
        <div class="col-3 bg-dark text-center d-flex flex-column">
            <a class="text-white aNav p-3" href="/carousel">Image du carousel</a>
            <a class="text-white aNav p-3" href="/carousel/create">Ajouter une image au carousel</a>
        </div>
        <div class="col-9 bg-secondary p-5 text-white">
            <div class="container">
                <table class="table text-white">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom de l'image</th>
                            <th class="text-center">Image</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($carousel as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <td>{{ $item->img }}</td>
                                <td><img height="400px" width="400px" src="{{ asset('storage/' . $item->img) }}" alt=""></td>
                                <td><a href="/carousel/{{ $item->id }}/edit" class="btn btn-success">Edit</a></td>
                                <td>
                                    <form action="/carousel/{{ $item->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
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
