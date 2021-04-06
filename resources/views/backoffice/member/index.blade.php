@extends('home')
@section('back')
    <div class="row mt-5">
        <div class="col-3 bg-dark text-center d-flex flex-column">
        </div>
        <div class="col-9 bg-secondary p-5 text-white">
            <div class="container">
                <h2 class="text-center mt-2 mb-5">Liste de tous les membres</h2>
                <div>
                    <table class="table text-white">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nom et prénom</th>
                                <th scope="col">Function</th>
                                <th scope="col">Role</th>
                                <th></th>
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
                                        @if ($item->check == 0)
                                            <form action="/member/{{ $item->id }}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <button class="btn btn-primary" type="submit">Valider</button>
                                            </form>
                                        @endif
                                    </td>
                                    <td>
                                        <form action="/member/{{ $item->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Supprimer</button>
                                        </form>
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
