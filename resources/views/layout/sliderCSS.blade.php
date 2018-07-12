@section('slider')
    <link href="{{ asset ('css/sliderCSS'. env('IMG_SIZE') .'.css') }}" rel="stylesheet" type="text/css"/>
    <script src="http://thecodeplayer.com/uploads/js/prefixfree.js" type="text/javascript"></script>

    <div class="container">
        <div class="container-fluid">
            <div class="slider">
                <!--Lets show the first image by default on page load-->
                <input type="radio" name="slide_switch" id="id1" checked="checked"/>
                <label for="id1">
                    <img src="{{ asset('/images/sliderCSS/'. env('IMG_SIZE') .'/01.jpg') }}" width="{{ env('IMG_SMALL') }}"/>
                </label>
                <img src="{{ asset('/images/sliderCSS/'. env('IMG_SIZE') .'/01.jpg') }}"/>

                <input type="radio" name="slide_switch" id="id2"/>
                <label for="id2">
                    <img src="{{ asset('/images/sliderCSS/'. env('IMG_SIZE') .'/02.jpg') }}" width="{{ env('IMG_SMALL') }}"/>
                </label>
                <img src="{{ asset('/images/sliderCSS/'. env('IMG_SIZE') .'/02.jpg') }}"/>

                <input type="radio" name="slide_switch" id="id3"/>
                <label for="id3">
                    <img src="{{ asset('/images/sliderCSS/'. env('IMG_SIZE') .'/03.jpg') }}" width="{{ env('IMG_SMALL') }}"/>
                </label>
                <img src="{{ asset('/images/sliderCSS/'. env('IMG_SIZE') .'/03.jpg') }}"/>

                <input type="radio" name="slide_switch" id="id4"/>
                <label for="id4">
                    <img src="{{ asset('/images/sliderCSS/'. env('IMG_SIZE') .'/04.jpg') }}" width="{{ env('IMG_SMALL') }}"/>
                </label>
                <img src="{{ asset('/images/sliderCSS/'. env('IMG_SIZE') .'/04.jpg') }}"/>

                <input type="radio" name="slide_switch" id="id5"/>
                <label for="id5">
                    <img src="{{ asset('/images/sliderCSS/'. env('IMG_SIZE') .'/05.jpg') }}" width="{{ env('IMG_SMALL') }}"/>
                </label>
                <img src="{{ asset('/images/sliderCSS/'. env('IMG_SIZE') .'/05.jpg') }}"/>

                <!--Lets show the image by default on page load-->
                <input type="radio" name="slide_switch" id="id6" checked="checked"/>
                <label for="id6">
                    <img src="{{ asset('/images/sliderCSS/'. env('IMG_SIZE') .'/06.jpg') }}" width="{{ env('IMG_SMALL') }}"/>
                </label>
                <img src="{{ asset('/images/sliderCSS/'. env('IMG_SIZE') .'/06.jpg') }}"/>

                <input type="radio" name="slide_switch" id="id7"/>
                <label for="id7">
                    <img src="{{ asset('/images/sliderCSS/'. env('IMG_SIZE') .'/07.jpg') }}" width="{{ env('IMG_SMALL') }}"/>
                </label>
                <img src="{{ asset('/images/sliderCSS/'. env('IMG_SIZE') .'/07.jpg') }}"/>

                <input type="radio" name="slide_switch" id="id8"/>
                <label for="id8">
                    <img src="{{ asset('/images/sliderCSS/'. env('IMG_SIZE') .'/08.jpg') }}" width="{{ env('IMG_SMALL') }}"/>
                </label>
                <img src="{{ asset('/images/sliderCSS/'. env('IMG_SIZE') .'/08.jpg') }}"/>

                <input type="radio" name="slide_switch" id="id9"/>
                <label for="id9">
                    <img src="{{ asset('/images/sliderCSS/'. env('IMG_SIZE') .'/09.jpg') }}" width="{{ env('IMG_SMALL') }}"/>
                </label>
                <img src="{{ asset('/images/sliderCSS/'. env('IMG_SIZE') .'/09.jpg') }}"/>

                <input type="radio" name="slide_switch" id="id10"/>
                <label for="id10">
                    <img src="{{ asset('/images/sliderCSS/'. env('IMG_SIZE') .'/10.jpg') }}" width="{{ env('IMG_SMALL') }}"/>
                </label>
                <img src="{{ asset('/images/sliderCSS/'. env('IMG_SIZE') .'/10.jpg') }}"/>

                <input type="radio" name="slide_switch" id="id11"/>
                <label for="id11">
                    <img src="{{ asset('/images/sliderCSS/'. env('IMG_SIZE') .'/11.jpg') }}" width="{{ env('IMG_SMALL') }}"/>
                </label>
                <img src="{{ asset('/images/sliderCSS/'. env('IMG_SIZE') .'/11.jpg') }}"/>

                <input type="radio" name="slide_switch" id="id12"/>
                <label for="id12">
                    <img src="{{ asset('/images/sliderCSS/'. env('IMG_SIZE') .'/12.jpg') }}" width="{{ env('IMG_SMALL') }}"/>
                </label>
                <img src="{{ asset('/images/sliderCSS/'. env('IMG_SIZE') .'/12.jpg') }}"/>

                <input type="radio" name="slide_switch" id="id13"/>
                <label for="id13">
                    <img src="{{ asset('/images/sliderCSS/'. env('IMG_SIZE') .'/13.jpg') }}" width="{{ env('IMG_SMALL') }}"/>
                </label>
                <img src="{{ asset('/images/sliderCSS/'. env('IMG_SIZE') .'/13.jpg') }}"/>

                <input type="radio" name="slide_switch" id="id14"/>
                <label for="id14">
                    <img src="{{ asset('/images/sliderCSS/'. env('IMG_SIZE') .'/14.jpg') }}" width="{{ env('IMG_SMALL') }}"/>
                </label>
                <img src="{{ asset('/images/sliderCSS/'. env('IMG_SIZE') .'/14.jpg') }}"/>

                <input type="radio" name="slide_switch" id="id15"/>
                <label for="id15">
                    <img src="{{ asset('/images/sliderCSS/'. env('IMG_SIZE') .'/15.jpg') }}" width="{{ env('IMG_SMALL') }}"/>
                </label>
                <img src="{{ asset('/images/sliderCSS/'. env('IMG_SIZE') .'/15.jpg') }}"/>

                <input type="radio" name="slide_switch" id="id16"/>
                <label for="id16">
                    <img src="{{ asset('/images/sliderCSS/'. env('IMG_SIZE') .'/16.jpg') }}" width="{{ env('IMG_SMALL') }}"/>
                </label>
                <img src="{{ asset('/images/sliderCSS/'. env('IMG_SIZE') .'/16.jpg') }}"/>

                <input type="radio" name="slide_switch" id="id17"/>
                <label for="id17">
                    <img src="{{ asset('/images/sliderCSS/'. env('IMG_SIZE') .'/17.jpg') }}" width="{{ env('IMG_SMALL') }}"/>
                </label>
                <img src="{{ asset('/images/sliderCSS/'. env('IMG_SIZE') .'/17.jpg') }}"/>

                <input type="radio" name="slide_switch" id="id18"/>
                <label for="id18">
                    <img src="{{ asset('/images/sliderCSS/'. env('IMG_SIZE') .'/18.jpg') }}" width="{{ env('IMG_SMALL') }}"/>
                </label>
                <img src="{{ asset('/images/sliderCSS/'. env('IMG_SIZE') .'/18.jpg') }}"/>

                <input type="radio" name="slide_switch" id="id19"/>
                <label for="id19">
                    <img src="{{ asset('/images/sliderCSS/'. env('IMG_SIZE') .'/19.jpg') }}" width="{{ env('IMG_SMALL') }}"/>
                </label>
                <img src="{{ asset('/images/sliderCSS/'. env('IMG_SIZE') .'/19.jpg') }}"/>

                <input type="radio" name="slide_switch" id="id20"/>
                <label for="id20">
                    <img src="{{ asset('/images/sliderCSS/'. env('IMG_SIZE') .'/20.jpg') }}" width="{{ env('IMG_SMALL') }}"/>
                </label>
                <img src="{{ asset('/images/sliderCSS/'. env('IMG_SIZE') .'/20.jpg') }}"/>
            </div>
        </div>
    </div>
    <br/>

    <!-- We will use PrefixFree - a script that takes care of CSS3 vendor prefixes
    You can download it from http://leaverou.github.com/prefixfree/ -->
    <script src="http://thecodeplayer.com/uploads/js/prefixfree.js" type="text/javascript"></script>

@endsection