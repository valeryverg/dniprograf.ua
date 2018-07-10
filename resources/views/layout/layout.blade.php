@extends('layout.base')

@section('favicon')
    @include('layout.favicon')
@endsection

@section('css')
    @include('layout.css')
@endsection

@section('js')
    @include('layout.js')
@endsection

@section('navbar')
    @include('layout.menu')
@endsection

@section('slider')
    @include('layout.carousel')
@endsection

@section('social')
    @include(( 'layout.social' ))
@endsection

@section('footer')
    @include('layout.footer')
@endsection

@section('js_net')
    @include('layout.js_net')
@endsection

