@extends('layout.base')

@section('navbar')
    @if (isset($menu))
        @foreach ($menu as $item)
            @if ($item->submenu->count())
                <a href="{{ $item->link }}">{{ $item->name }}</a>
                @foreach ($item->submenu as $subitem)
                    <a href="{{ $item->link .'/'. $subitem->sublink }}">{{ $subitem->name }}</a>
                @endforeach
            @else
                <a href="{{ $item->link }}">{{ $item->name }}</a>
            @endif
        @endforeach
    @endif

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="icon-bar" href="{{ url('/') }}"><img
                            src="{{ asset('images/logo/logo_dniprograf.png') }}"
                            alt="Дніпрограф" height="50" width="160"/></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                {{--@if (isset($menu))
                    <ul class="nav navbar-nav">
                        @foreach($menu as $item)
                            @if($item->parent_id == 0)
                            <li>
                                <a href="/{{ $item->link }}">{{ $item->name }}</a>
                            </li>
                            @endif
                        @endforeach
                    </ul>
                @endif--}}
                <form class="navbar-form navbar-right">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Введіть слово">
                    </div>
                    <button type="submit" class="btn btn-default">Пошук...</button>
                </form>
                {{--</div>--}}
                {{--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">--}}
            </div>

        </div><!-- /.container-fluid -->
    </nav>
@endsection