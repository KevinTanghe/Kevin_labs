@extends('templates/main')
@section('content')
    @include('partials/currentPagePost')
    @include('partials/blogPost/post')
    @include('partials/mail/newsletter')
    @include('partials/footer')
@endsection
