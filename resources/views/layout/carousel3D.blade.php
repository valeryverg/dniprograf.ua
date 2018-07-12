@section('slider')
    <link href="{{ asset ('css/carousel3D.css') }}" rel="stylesheet" type="text/css"/>

    <script type="text/javascript">
        var angle = 0;
        function galleryspin(sign) {
            spinner = document.querySelector("#spinner");
            if (!sign) { angle = angle + 45; } else { angle = angle - 45; }
            spinner.setAttribute("style","-webkit-transform: rotateY("+ angle +"deg); -moz-transform: rotateY("+ angle +"deg); transform: rotateY("+ angle +"deg);");
        }

    </script>

    <div id="carousel">
        <figure id="spinner">
            {{--<img src="wanaka-tree.jpg" alt>
            <img src="still-lake.jpg" alt>
            <img src="pink-milford-sound.jpg" alt>
            <img src="paradise.jpg" alt>
            <img src="morekai.jpg" alt>
            <img src="milky-blue-lagoon.jpg" alt>
            <img src="lake-tekapo.jpg" alt>
            <img src="milford-sound.jpg" alt>--}}
            <img src="{{ asset('/images/slider/01.jpg') }}" alt>
            <img src="{{ asset('/images/slider/02.jpg') }}" alt>
            <img src="{{ asset('/images/slider/03.jpg') }}" alt>
            <img src="{{ asset('/images/slider/04.jpg') }}" alt>
            <img src="{{ asset('/images/slider/05.jpg') }}" alt>
            <img src="{{ asset('/images/slider/06.jpg') }}" alt>
            <img src="{{ asset('/images/slider/07.jpg') }}" alt>
            <img src="{{ asset('/images/slider/08.jpg') }}" alt>
        </figure>
    </div>
    <span style="float:left" class="ss-icon" onclick="galleryspin('-')">&lt;</span>
    <span style="float:right" class="ss-icon" onclick="galleryspin('')">&gt;</span>
@endsection