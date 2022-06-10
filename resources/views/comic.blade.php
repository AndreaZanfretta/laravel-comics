@extends('layouts.base')

@section('pageTitle')
    DC Comics - Comic
@endsection

@section('content')
    @include('partials.header')
    @include('partials.comicMain')
    @include('partials.footer')
@endsection