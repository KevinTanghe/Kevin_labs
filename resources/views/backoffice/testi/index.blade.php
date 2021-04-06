@extends('home')
@section('back')
    <div class="row mt-5">
        <div class="col-3 bg-dark text-center d-flex flex-column">
            <a class="text-white aNav p-3" href="/testi">Vos Testimoniaux</a>
            <a class="text-white aNav p-3" href="/testi/create">Créer un testimonial</a>
        </div>
        <div class="col-9 bg-secondary p-5 text-white">
            <div class="container">
                <table class="table text-white">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom de la personne</th>
                            <th>function</th>
                            <th>Message</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($testi as $item)
                            <tr>
                                <td scope="row">{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->function }}</td>
                                <td>{{ Str::limit($item->content, 50) }}</td>
                                <td><img src="{{ asset('storage/' . $item->img) }}" alt=""></td>
                                <td><a class="btn btn-success" href="/testi/{{ $item->id }}/edit">Edit</a></td>
                                <td>
                                    <form action="/testi/{{ $item->id }}" method="POST">
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
