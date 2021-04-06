@extends('home')
@section('back')
    <div class="row mt-5">
        <div class="col-3 bg-dark text-center d-flex flex-column">
            <a class="text-white aNav p-3" href="/logo">Logo</a>
            <a class="text-white aNav p-3" href="/logo/{{ $logo[0]->id }}/edit">Changer le logo</a>
        </div>
        <div class="col-9 bg-secondary p-5 text-white">
            <div class="container">
                <h2 class="text-center mb-5">Logo du site</h2>
                <div class="d-flex justify-content-center">
                    <img id="logo" src="{{ asset('storage/' . $logo[0]->img) }}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
