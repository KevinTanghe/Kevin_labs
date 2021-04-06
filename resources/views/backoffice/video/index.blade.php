@extends('home')
@section('back')
    <div class="row mt-5">
        <div class="col-3 bg-dark text-center d-flex flex-column">
            <a class="text-white aNav p-3" href="/video">Ma video</a>
        </div>
        <div class="col-9 bg-secondary p-5 text-white">
            <div class="container">
                <table class="table text-white">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Url de la video</th>
                            <th>Preview de la video</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($video as $item)
                            <tr>
                                <td scope="row">{{ $item->id }}</td>
                                <td>{{ $item->url }}</td>
                                <td><img src="{{ asset('storage/' . $item->img) }}" alt=""></td>
                                <td><a class="btn btn-success" href="/video/{{ $item->id }}/edit">Edit</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
