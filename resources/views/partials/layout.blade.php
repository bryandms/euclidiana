<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Exploration of basic classification algorithms"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Euclidiana - @yield('title')</title>

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>
    </head>
    <body>
        @include('/partials/nav')
        <div class="container animated fadeIn mt-4 py-5">
            @yield('content')
        </div>
        @include('/partials/footer')

        <div id="loader" class="loader-wrapper">
            <div class="loader"></div>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/application.js') }}"></script>
        <script>
            $('#loader').hide();
            $('#result').hide();
        </script>
        @yield('js')
    </body>
</html>
