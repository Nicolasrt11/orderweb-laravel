<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{  asset('css/custom.css') }}"  rel="stylesheet">
    <title>@yield('title')</title>
 
</head>
<body>
    <div id="container">
        @include('templates2/banner')

    <div>
         <aside> 
             @include('templates2/menu')
            </aside>
            <section>
                <!-- aqui se inserta las paginas que hereden de este template-->
                @yield('content')
            </section>
            <br>
            @include('templates2/footer')
        </div>
    </div>

    <script src="{{ asset('js/test.js') }}"> </script>
    @yield('scripts')
</body>
</html>
   
   
