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
                        @if (session('stop'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('stop') }}
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
                {{-- Profil user --}}
                <div>
                    <h3 class="text-white border rounded p-2 m-3 bg-profil">Votre Profil</h3 class="text-white border">
                </div>
                <a class="text-white aNav p-3" href="/user">Profil</a>
                <a class="text-white aNav p-3" href="/member">Tous les membres</a>
                @can('home')
                    <a class="text-white aNav p-3" href="/role">Gestions des roles</a>
                @endcan
                {{-- info Entreprise --}}
                <div>
                    <h3 class="text-white border rounded p-2 m-1 bg-primary">Info de l'entreprise</h3 class="text-white border">
                </div>
                @can('home')
                    <a class="text-white aNav p-3" href="/newsletter">Newsletter</a>
                    <a class="text-white aNav p-3" href="/mailPro">Email de l'entreprise</a>
                    <a class="text-white aNav p-3" href="/subject">Sujets pour les mails</a>
                    <a class="text-white aNav p-3" href="/footer">Le bas de page ( footer )</a>
                    <a class="text-white aNav p-3" href="/contact/create">Informations contact</a>
                @endcan
                {{-- page welcome --}}
                <div>
                    <h3 class="text-white border rounded p-2 m-1 bg-danger">Page Welcome</h3 class="text-white border">
                </div>
                @can('home')
                    <a class="text-white aNav p-3" href="/logo">Logo du site</a>
                    <a class="text-white aNav p-3" href="/carousel">Image du carousel</a>
                    <a class="text-white aNav p-3" href="/title">Titres du site</a>
                    <a class="text-white aNav p-3" href="/aboutContent">Contenu de la section about</a>
                    <a class="text-white aNav p-3" href="/video">Video de la page Welcome</a>
                    <a class="text-white aNav p-3" href="/testi">Testimonial</a>
                @endcan
                {{-- page service --}}

                <div>
                    <h3 class="text-white border rounded p-2 m-1 bg-success">Page Service</h3 class="text-white border">
                </div>
                @can('home')
                    <a class="text-white aNav p-3" href="/serviceBack">Vos services</a>
                @endcan
                {{-- page blog --}}

                <div>
                    <h3 class="text-white border rounded p-2 m-1 bg-jaune">Page Blog</h3 class="text-white border">
                </div>
                @can('article')
                    <a class="text-white aNav p-3" href="/article">Article du blog</a>
                    <a class="text-white aNav p-3" href="/tagBack">Tags des articles</a>
                    <a class="text-white aNav p-3" href="/categorieBack">Catégories des articles</a>
                @endcan
                {{-- page Contact --}}
                <div>
                    <h3 class="text-white border rounded p-2 m-1 bg-contact">Page Contact</h3 class="text-white border">
                </div>
                @can('home')
                    <a class="text-white aNav p-3" href="/map">Map Google</a>
                @endcan
            </div>
            <div class="col-8 bg-secondary">
                <h1 class="text-center text-white p-4">Bienvenue dans votre panel admin</h1>
            </div>
        </div>
    </div>
@endsection
