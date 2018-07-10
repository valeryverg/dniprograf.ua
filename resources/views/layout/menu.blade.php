@extends(env('THEME').'.layout.base')

@section('navbar')
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="icon-bar" href="{{ url('/') }}"><img
                        src="{{ asset(env('THEME').'/images/logo/logo_dniprograf.png') }}"
                        alt="Дніпрограф" height="50" width="160" /></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                @if (isset($menu))
                    <ul class="nav navbar-nav">
                        @foreach($menu as $item)
                            <li>
                                <a href="/{{ $item['link'] }}">{{ $item['name'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                @endif
                <form class="navbar-form navbar-right">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Введіть слово">
                    </div>
                    <button type="submit" class="btn btn-default">Пошук...</button>
                </form>
            {{--</div>--}}
            {{--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">--}}
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav">
                {{--<ul class="navbar-nav mr-auto">--}}
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                </ul>
            </div>
        </div><!-- /.container-fluid -->
    </nav>

{{--    <!-- START MAIN NAVIGATION -->
    <div class="menu classic">
        <ul id="nav" class="menu">

            <li>
                <a href="index.html">HOME</a>
                <ul class="sub-menu">
                    <li><a href="home-ii.html">Home II</a></li>
                    <li><a href="home-iii.html">Home III</a></li>
                    <li><a href="home-iv.html">Home IV</a></li>
                    <li><a href="home-v.html">Home V</a></li>
                    <li><a href="home-vi.html">Home VI</a></li>
                    <li><a href="home-vii.html">Home VII</a></li>
                    <li><a href="home-viii.html">Home VIII</a></li>
                    <li><a href="home-ix.html">Home IX</a></li>
                    <li><a href="home-x.html">Home X</a></li>
                    <li><a href="landing-page.html">Landing page</a></li>
                </ul>
            </li>

            <li>
                <a href="#">SLIDERS</a>
                <ul class="sub-menu">
                    <li><a href="slider-layerslider.html">LayerSlider</a></li>
                    <li><a href="slider-flexslider.html">FlexSlider</a></li>
                    <li><a href="slider-elastic-slider.html">Elastic</a></li>
                    <li><a href="slider-thumbnails.html">Thumbnails</a></li>
                    <li><a href="slider-cycle.html">Cycle</a></li>
                    <li><a href="slider-static-header.html">Static header</a></li>
                </ul>
            </li>

            <li>
                <a href="#">CORPORATE</a>
                <ul class="sub-menu">
                    <li><a href="corporate-about.html">About</a></li>
                    <li><a href="landing-page.html">Landing page</a></li>
                    <li><a href="corporate-videogallery.html">Videogallery</a></li>
                    <li><a href="corporate-testimonials.html">Testimonials</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </li>

            <li>
                <a href="#">PORTFOLIO</a>
                <ul class="sub-menu">
                    <li><a href="portfolio-filterable.html">Filterable</a></li>
                    <li><a href="portfolio-three-columns.html">Three columns</a></li>
                    <li><a href="project.html">Full description</a></li>
                    <li><a href="portfolio-big-image.html">Big Image</a></li>
                </ul>
            </li>

            <li>
                <a href="#">BLOG</a>
                <ul class="sub-menu">
                    <li><a href="blog-big-image.html">Big image</a></li>
                    <li><a href="blog-small-image.html">Small image</a></li>
                </ul>
            </li>

            <li>
                <a href="#">FEATURES</a>
                <ul class="sub-menu">
                    <li><a href="features-right-sidebar.html">Right sidebar</a></li>
                    <li><a href="features-left-sidebar.html">Left sidebar</a></li>
                    <li><a href="features-full-width.html">Full width</a></li>
                    <li><a href="error-404.html">404 error</a></li>
                </ul>
            </li>

            <li>
                <a href="#">SHORTCODES</a>
                <ul class="sub-menu">
                    <li><a href="shortcodes-typography.html">Typography</a></li>
                    <li><a href="shortcodes-icon-section.html">Icon section</a></li>
                    <li><a href="shortcodes-alert-box-buttons.html">Alert box &#038; Buttons</a></li>
                    <li><a href="shortcodes-tables-box-prices.html">Tables &#038; Box prices</a></li>
                    <li><a href="shortcodes-media-widgets.html">Media &#038; Widgets</a></li>
                    <li><a href="shortcodes-mix-various.html">Mix &#038; Various</a></li>
                </ul>
            </li>

            <li class="remove-under-1024">
                <a href="http://themeforest.net/item/pink-rio-responsive-multipurpose-theme/3091259">PURCHASE PINK RIO</a>
                <ul class="sub-menu">
                    <li><a href="http://www.yourinspirationweb.com/tf/support/forum/viewforum.php?f=27">Support forum</a></li>
                </ul>
            </li>

        </ul>
    </div>
    <!-- END MAIN NAVIGATION -->--}}
@endsection