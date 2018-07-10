@section('slider')
    <script type="text/javascript" src="{{ asset('js/jquery-1-4-2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/showhide.js') }}"></script>
    <script type="text/JavaScript" src="{{ asset('js/jquery.mousewheel.js') }}"></script>
    <!-- Load the CloudCarousel JavaScript file -->
    <script type="text/JavaScript" src="{{ asset('js/cloud-carousel.1.0.5.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function () {

            // This initialises carousels on the container elements specified, in this case, carousel1.
            $("#carousel1").CloudCarousel(
                {
                    reflHeight: 40,
                    reflGap: 2,
                    titleBox: $('#da-vinci-title'),
                    altBox: $('#da-vinci-alt'),
                    buttonLeft: $('#slider-left-but'),
                    buttonRight: $('#slider-right-but'),
                    yRadius: 30,
                    xPos: 480,
                    yPos: 32,
                    speed: 0.15,
                    autoRotate: "yes",
                    autoRotateDelay: 1500
                }
            );
        });

    </script>

    <div id="templatemo_slider">
        <!-- This is the container for the carousel. -->
        <div id="carousel1" style="width:960px; height:280px;background:none;overflow:scroll; margin-top: 20px">
            <!-- All images with class of "cloudcarousel" will be turned into carousel items -->
            <!-- You can place links around these images -->
            <a href="#" rel="lightbox"><img class="cloudcarousel" src="{{ asset('/images/slider/01.jpg') }}"
                                            alt="CSS Templates 1" title="Website Templates 1"/></a>
            <a href="#" rel="lightbox"><img class="cloudcarousel" src="{{ asset('images/slider/02.jpg') }}"
                                            alt="CSS Templates 2" title="Website Templates 2"/></a>
            <a href="#" rel="lightbox"><img class="cloudcarousel" src="{{ asset('images/slider/03.jpg') }}"
                                            alt="CSS Templates 3" title="Website Templates 3"/></a>
            <a href="#" rel="lightbox"><img class="cloudcarousel" src="{{ asset('images/slider/04.jpg') }}"
                                            alt="CSS Templates 4" title="Website Templates 4"/></a>
            <a href="#" rel="lightbox"><img class="cloudcarousel" src="{{ asset('images/slider/05.jpg') }}"
                                            alt="Flash Templates 1" title="Flash Templates 1"/></a>
            <a href="#" rel="lightbox"><img class="cloudcarousel" src="{{ asset('images/slider/06.jpg') }}"
                                            alt="Flash Templates 2" title="Flash Templates 2"/></a>
            <a href="#" rel="lightbox"><img class="cloudcarousel" src="{{ asset('images/slider/07.jpg') }}"
                                            alt="Flash Templates 3" title="Flash Templates 3"/></a>
            <a href="#" rel="lightbox"><img class="cloudcarousel" src="{{ asset('images/slider/08.jpg') }}"
                                            alt="Flash Templates 4" title="Flash Templates 4"/></a>
            <a href="#" rel="lightbox"><img class="cloudcarousel" src="{{ asset('images/slider/09.jpg') }}"
                                            alt="Flash Templates 4" title="Flash Templates 4"/></a>
        </div>

        <!-- Define left and right buttons. -->
        <div class="text-center">
            <input id="slider-left-but" type="button" value=""/>
            <input id="slider-right-but" type="button" value=""/>
        </div>
    </div>
@endsection