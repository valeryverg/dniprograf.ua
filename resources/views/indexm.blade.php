@extends('layout.layout')

@section('favicon')
    @include('layout.favicon')
@endsection

@section('css')
    <!-- CSSs -->
    {{--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>--}}
    {{--<link href="{{ asset ('vendor/twbs/bootstrap/assets/css/docs.min.css') }}" rel="stylesheet" type="text/css"/>--}}
    {{--<link href="{{ asset ('css/templatemo_style.css') }}" rel="stylesheet" type="text/css"/>--}}
    {{--<link rel="stylesheet" type="text/css" media="all" href="{{ asset ('css/reset.css') }}"/> <!-- RESET STYLESHEET -->--}}
    {{--<link rel="stylesheet" id="custom-css" href="{{ asset ('css/custom.css" type="text/css') }}" media="all"/>--}}

    <!-- FONTs -->
    {{--<link rel="stylesheet" id="google-fonts-css"--}}
    {{--href="http://fonts.googleapis.com/css?family=Oswald%7CDroid+Sans%7CPlayfair+Display%7COpen+Sans+Condensed%3A300%7CRokkitt%7CShadows+Into+Light%7CAbel%7CDamion%7CMontez&amp;ver=3.4.2"--}}
    {{--type="text/css" media="all"/>--}}
    {{--<link rel='stylesheet' href='{{ asset ('css/font-awesome.css') }}' type='text/css' media='all'/>--}}
@endsection

@section('js')
    @include('layout.js')
@endsection

@section('navbar')

@endsection

@section('slider')

@endsection

@section('content')
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
            Dropdown button
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
        </div>
    </div>
@endsection

@section('social')

@endsection

@section('footer')

@endsection

@section('js_net')
    {{--@include('layout.js_net')--}}
@endsection

