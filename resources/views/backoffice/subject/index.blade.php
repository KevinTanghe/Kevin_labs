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
                <a class="text-white aNav p-3" href="/subject">Sujets de l'entreprise</a>
                <a class="text-white aNav p-3" href="/subject/create">Créer un sujet</a>
            </div>
            <div class="col-9 bg-secondary p-5 text-white">
                <div class="container">
                    <table class="table text-white">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Sujets pour les mails</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subject as $item)
                                <tr>
                                    <td scope="row">{{ $item->id }}</td>
                                    <td>{{ $item->subject }}</td>
                                    <td><a class="btn btn-success" href="/subject/{{ $item->id }}/edit">Edit</a></td>
                                    <td>
                                        <form action="/subject/{{$item->id}}" method="POST">
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
    </div>
@endsection
