<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

{{--    <title>{{ config('app.name', 'Laravel') }}</title>--}}
    <title>No layout page prova</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
        <!-- HEADER STATICO -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="/">Header statico (clicca per tornare alla home)</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        <!-- CONTENT BODY DINAMICO IN VUE -->
        <div id="app" class=" py-5">
            <div class="container py-5">
                <p>Questa pagina <u>non estende nessun layout</u></p>
                <p>Il body è formato da Header e Footer statici, con in mezzo il "content" dinamico div#app</p>
                <p>La app.vue è solo nella parte centrale e solo qui vedrò i componenti</p>
                <example-component></example-component>
            </div>
        </div>

        <!-- FOOTER STATICO -->
        <footer class="footer py-5 bg-dark fixed-bottom">
            <div class="container">
                <p class="m-0 text-center text-white">Footer statico - Copyright &copy; Your Website {{ date('Y') }}</p>
            </div>
        </footer>

    <!-- CUSTOM SCRIPT -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
