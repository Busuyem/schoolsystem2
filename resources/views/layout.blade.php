<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/custom.css')}}">

        <!--Scripts-->
        <script src="{{asset('js/app.js')}}" defer></script>
        

    </head>
    <body>
        <div class="container col-md-6 mt-5">
            <div class="mb-3">
                @include('inc.message')
            
            </div>
            
            @yield('content')
        </div>
    </body>
</html>
