<!DOCTYPE html>
<!-- START HEAD -->
<head>
        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <!-- this line will appear only if the website is visited with an iPad -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />
    <title>Дніпрограф</title>

@yield('favicon')
    
@yield('css')

@yield('js')

</head>
<body id="home">

@yield('navbar')

@yield('slider')

@yield('content')

@yield(('social'))

@yield(('footer'))

@yield('js_net')

</body>
</html>