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
            <div class="col-4 bg-dark text-center d-flex flex-column">
                                {{-- page welcome --}}
                <h3 class="text-white border rounded p-2 m-1">Page Welcome</h3 class="text-white border">
                <a class="text-white aNav p-3" href="/logo">Logo du site</a>
                <a class="text-white aNav p-3" href="/carousel">Image du carousel</a>
                <a class="text-white aNav p-3" href="/serviceBack">Vos services</a>
                <a class="text-white aNav p-3" href="/title">Titres du site</a>
                <a class="text-white aNav p-3" href="/aboutContent">Contenu de la section about</a>
                <a class="text-white aNav p-3" href="/video">Video de la page Welcome</a>
                <a class="text-white aNav p-3" href="/testi">Testimonial</a>
                                {{-- page service --}}
                <h3 class="text-white border rounded p-2">Page Service</h3 class="text-white border">
                <a class="text-white aNav p-3" href="/article">Article du blog</a>
            </div>
            <div class="col-8 bg-secondary">
                <h1 class="text-center text-white p-4">Bienvenue dans votre panel admin</h1>
            </div>
        </div>
    </div>
@endsection
