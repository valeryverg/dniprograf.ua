@extends('layout.layout')

@section('content')
    <div id="templatemo_main">
        <h2>Welcome!</h2>
        <img src="{{ asset('images/templatemo_image_04.jpg') }}" alt="Image 04 " class="image_fl"/>
        <p>Carousel is free css template provided by templatemo.com for your personal or commercial websites.
            Quisque nec suscipit ipsum. Fusce vitae accumsan massa.</p>
        <ul class="templatemo_list">
            <li class="flow">Integer placerat dolor vel</li>
            <li class="flow nomr">Condimentum vulputate</li>
            <li class="flow">Itristique non suscipit id</li>
            <li class="flow nomr"> Donec eget lacus vitae leo</li>
        </ul>
    </div> <!-- END of templatemo_main -->
    <div class="cleaner"></div>
@endsection