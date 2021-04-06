@extends('home')
@section('back')
    <div class="row mt-5">
        <div class="col-3 bg-dark text-center d-flex flex-column">
            <a class="text-white aNav p-3" href="/role">Gestion des roles</a>
        </div>
        <div class="col-9 bg-secondary p-5 text-white">
            <div class="container">
                <h2 class="text-center mt-2 mb-5">Gestions des roles</h2>
                <div>
                    <table class="table text-white">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nom et prénom</th>
                                <th scope="col">Function</th>
                                <th scope="col">Role</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $item)
                                <tr>
                                    <th scope="row">{{ $item->id }}</th>
                                    <td>{{ $item->lastname }} {{ $item->firstname }}</td>
                                    <td>{{ $item->fonction->fonction }}</td>
                                    <td>{{ $item->role->role }}</td>
                                    <td>
                                        <a class="btn btn-success" href="/role/{{ $item->id }}/edit">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
