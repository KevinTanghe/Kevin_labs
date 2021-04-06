@extends('home')
@section('back')
    <div class="row mt-5">
        <div class="col-3 bg-dark text-center d-flex flex-column">
            <a class="text-white aNav p-3" href="/footer">Bas de page</a>
        </div>
        <div class="col-9 bg-secondary p-5 text-white">
            <div class="container">
                <table class="table text-white">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Copyright</th>
                            <th>L'url</th>
                            <th>Nom de l'url</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($footer as $item)
                            <tr>
                                <td scope="row">{{ $item->id }}</td>
                                <td>{{ $item->content }}</td>
                                <td>{{ $item->url }}</td>
                                <td>{{ $item->name }}</td>
                                <td><a class="btn btn-success" href="/footer/{{ $item->id }}/edit">Edit</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
