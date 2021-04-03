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
                <a class="text-white aNav p-3" href="/contact/create">Information contact</a>
            </div>
            <div class="col-9 bg-secondary p-5 text-white">
                <div class="container">
                    <div class=" col-md-offset-1 contact-info col-push">
                        <div class="section-title left">
                            <h2>{{$contact[0]->mainTitle}}</h2>
                        </div>
                        <p>{{$contact[0]->mainText}}</p>
                        <h3 class="mt60">{{$contact[0]->streetTitle}}</h3>
                        <p class="con-item">{{$contact[0]->street}}</p>
                        <p class="con-item">{{$contact[0]->phone}}</p>
                        <p class="con-item">{{$contact[0]->mail}}</p>
                        <a class="btn btn-success" href="/contact/{{ $contact[0]->id }}/edit">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
