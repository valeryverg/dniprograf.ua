@extends('layout.base')

@section('navbar')
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="icon-bar" href="{{ url('/') }}"><img
                            src="{{ asset('images/logo/logo_dniprograf.png') }}"
                            alt="Дніпрограф" height="50" width="160"/></a>
            </div>
            <div class="nav-fill"></div>

            {{--<div class="container">--}}
                {{--<nav class="navbar navbar-default" role="navigation">--}}
                    <ul class="nav navbar-nav navbar-left">
                        @foreach($menu as $item)
                            @if($item->submenu->count() > 0)
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        {{ $item->name }}
                                        <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        @foreach($item->submenu as $subitem)
                                            <li><a href="{{ $item->link .'/'. $subitem->sublink }}">{{ $subitem->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                <li><a href="{{ $item->link }}">{{ $item->name }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                {{--</nav>--}}
            {{--</div>--}}

            {{-- <nav class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                 @if (isset($menu))
                     <nav class="nav navbar-nav">
                         @foreach ($menu as $item)
                             @if ($item->submenu->count())
                                 <div class="dropdown">
                                     <button class="btn btn-secondary dropdown-toggle" type="button"
                                             id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                             aria-expanded="false">
                                         {{ $item->name }}
                                     </button>
                                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                         @foreach ($item->submenu as $subitem)
                                             <a class="dropdown-item"
                                                href="{{ $item->link .'/'. $subitem->sublink }}">{{ $subitem->name }}</a>
                                         @endforeach
                                     </div>
                                 </div>
                             @else
                                 <a href="{{ $item->link }}">{{ $item->name }}</a>
                             @endif
                         @endforeach
                     </nav>
                 @endif--}}

                {{--                @if (isset($menu))
                                    <nav class="menu">
                                        <ul>
                                            @foreach ($menu as $item)
                                                @if ($item->submenu->count())
                                                    <li class="option">
                                                        <div class="submenu">
                                                            <a data-toggle="dropdown" href="#">
                                                                <span>{{ $item->name }}</span>
                                                                <b class="caret"></b>
                                                            </a>
                                                            <ul>
                                                                @foreach ($item->submenu as $subitem)
                                                                    <li>
                                                                        <a href="{{ $item->link .'/'. $subitem->sublink }}">{{ $subitem->name }}</a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </li>
                                                @else
                                                    <li class="option">
                                                        <a href="{{ $item->link }}">{{ $item->name }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </nav>
                                @endif--}}

                <form class="navbar-form navbar-right">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Введіть слово">
                    </div>
                    <button type="submit" class="btn btn-default">Пошук...</button>
                </form>

            </nav>
            {{--</div>--}}
            {{--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">--}}
        </div><!-- /.container-fluid -->
    </nav>
@endsection