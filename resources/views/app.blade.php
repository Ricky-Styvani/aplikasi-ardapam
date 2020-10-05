<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <main id="app">
        <Navigation></Navigation>
        <div class="py-4">
        <router-view><router-view>
        </div>
       <!-- <div class="py-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2">
                    <sidebar><sidebar>
                    </div>
                    <div class="col-md-10 main-content p-5">
                    <router-view><router-view>
                    </div>
                </div>
            </div>
        </div>  -->

    </main>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>