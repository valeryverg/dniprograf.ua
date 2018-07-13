@extends('layout.layout')

@section('content')
    <div id="content-index" class="content group">
        <img class="error-404-image group" src="{{ 'images/features/404.png' }}" title="Error 404" alt="404"/>
        <div class="error-404-text group">
            <p>We are sorry but the page you are looking for does not exist.<br/>You could <a href="/">return to
                    the home page</a></p>
        </div>
    </div>
@endsection