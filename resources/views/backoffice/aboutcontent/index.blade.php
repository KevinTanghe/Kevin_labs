@extends('home')
@section('back')
<div>
    <div class="row mt-5">
        <div class="col-3 bg-dark text-center d-flex flex-column">
            <a class="text-white aNav p-3" href="/aboutContent">Mes Paragraphes</a>
        </div>
        <div class="col-9 bg-secondary p-5 text-white">
            <div class="container">
                <table class="table text-white">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Paragraphe de la section</th>
                            <th-></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($about as $item)
                            <tr>
                                <td scope="row">{{$item->id}}</td>
                                <td>{{$item->content}}</td>
                                <td><a class="btn btn-success" href="/aboutContent/{{$item->id}}/edit">Edit</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection