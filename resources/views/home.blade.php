@extends('layouts.app')

@section('content')
    <div>
        <div class="row">
            <div class="col-3 bg-dark text-center d-flex flex-column">
                {{-- Profil user --}}
                <div>
                    <h3 class="text-white p-2 m-3 cateBorder">Votre Profil</h3 class="text-white border">
                </div>
                <a class="text-white aNav p-3" href="/user">Profil</a>
                @can('home')
                    <a class="text-white aNav p-3" href="/member">Tous les membres</a>
                    <a class="text-white aNav p-3" href="/role">Gestions des roles</a>
                @endcan
                {{-- info Entreprise --}}
                <div>
                    <h3 class="text-white p-2 m-3 cateBorder">Info de l'entreprise</h3 class="text-white border">
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
                    <h3 class="text-white  p-2 m-3 cateBorder">Page Welcome</h3 class="text-white border">
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
                    <h3 class="text-white  p-2 m-3 cateBorder">Page Service</h3 class="text-white border">
                </div>
                @can('home')
                    <a class="text-white aNav p-3" href="/serviceBack">Vos services</a>
                @endcan
                {{-- page blog --}}

                <div>
                    <h3 class="text-white p-2 m-3 cateBorder">Page Blog</h3 class="text-white border">
                </div>
                @can('article')
                    <a class="text-white aNav p-3" href="/article">Article du blog</a>
                    <a class="text-white aNav p-3" href="/tagBack">Tags des articles</a>
                    <a class="text-white aNav p-3" href="/categorieBack">Catégories des articles</a>
                @endcan
                {{-- page Contact --}}
                <div>
                    <h3 class="text-white cateBorder p-2 m-3">Page Contact</h3 class="text-white border">
                </div>
                @can('home')
                    <a class="text-white aNav p-3" href="/map">Map Google</a>
                @endcan
            </div>
            <div class="col-9 bleu">
                @if (Route::getCurrentRoute()->uri() == "home")
                    <h1 class="text-center text-white p-4">Bienvenue dans votre panel admin</h1>
                @endif
                
                @if (session('status'))
                    <div class="d-flex justify-content-center">
                        <div class="container">
                            <div class="alert alert-success p-3">
                                <h5>Dashboard</h5>
                                <p class="text-success mt-3">{{ session('status') }}</p>
                            </div>
                        </div>
                    </div>
                @endif
                @if (session('stop'))
                    <div class="d-flex justify-content-center">
                        <div class="container">
                            <div class="alert alert-danger p-3">
                                <h5>Dashboard</h5>
                                <p class="text-danger mt-3">{{ session('stop') }}</p>
                            </div>
                        </div>
                    </div>
                @endif
                @if (session('errors'))
                    <div class="d-flex justify-content-center">
                        <div class="container">
                            <div class="alert alert-danger p-3">
                                <h5>Dashboard</h5>
                                @foreach ($errors->all() as $item)
                                    <p class="text-danger mt-3">{{$item}}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif
                

                <div class="container">
                    @yield('back')
                </div>
            </div>
        </div>
    </div>
    <footer class="noir">
        <div class="d-flex justify-content-center">
            <h5 class="text-white p-4"><a class="text-white" href="">Copyright © créer par Tanghe Kevin</a></h5>
        </div>
    </footer>
@endsection
