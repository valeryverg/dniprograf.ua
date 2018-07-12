@section('slider')
    <link href="{{ asset ('css/sliderCSS.css') }}" rel="stylesheet" type="text/css"/>
    <script src="http://thecodeplayer.com/uploads/js/prefixfree.js" type="text/javascript"></script>

    <div class="container">
        <div class="container-fluid">
            <div class="slider">
                <input type="radio" name="slide_switch" id="id1"/>
                <label for="id1">
                    <img src="{{ asset('/images/slider/01.jpg') }}" width="60"/>
                </label>
                <img src="{{ asset('/images/slider/01.jpg') }}"/>

                <!--Lets show the second image by default on page load-->
                <input type="radio" name="slide_switch" id="id2" checked="checked"/>
                <label for="id2">
                    <img src="{{ asset('/images/slider/02.jpg') }}" width="60"/>
                </label>
                <img src="{{ asset('/images/slider/02.jpg') }}"/>

                <input type="radio" name="slide_switch" id="id3"/>
                <label for="id3">
                    <img src="{{ asset('/images/slider/03.jpg') }}" width="60"/>
                </label>
                <img src="{{ asset('/images/slider/03.jpg') }}"/>

                <input type="radio" name="slide_switch" id="id4"/>
                <label for="id4">
                    <img src="{{ asset('/images/slider/04.jpg') }}" width="60"/>
                </label>
                <img src="{{ asset('/images/slider/04.jpg') }}"/>

                <input type="radio" name="slide_switch" id="id5" width="480" height="360"/>
                <label for="id5">
                    <img src="{{ asset('/images/slider/05.jpg') }}" width="60"/>
                </label>
                <img src="{{ asset('/images/slider/05.jpg') }}"/>

                <input type="radio" name="slide_switch" id="id6"/>
                <label for="id6">
                    <img src="{{ asset('/images/slider/06.jpg') }}" width="60"/>
                </label>
                <img src="{{ asset('/images/slider/06.jpg') }}"/>

                <input type="radio" name="slide_switch" id="id7"/>
                <label for="id7">
                    <img src="{{ asset('/images/slider/07.jpg') }}" width="60"/>
                </label>
                <img src="{{ asset('/images/slider/07.jpg') }}"/>

                <input type="radio" name="slide_switch" id="id8"/>
                <label for="id8">
                    <img src="{{ asset('/images/slider/08.jpg') }}" width="60"/>
                </label>
                <img src="{{ asset('/images/slider/08.jpg') }}"/>
            </div>
        </div>
    </div>
    <br/>

    <!-- We will use PrefixFree - a script that takes care of CSS3 vendor prefixes
    You can download it from http://leaverou.github.com/prefixfree/ -->
    <script src="http://thecodeplayer.com/uploads/js/prefixfree.js" type="text/javascript"></script>

@endsection