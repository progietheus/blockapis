<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'BlockApis') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mystyle.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{{ asset('img/favicon.ico') }}}"> 
    @yield('styles')
</head>

<body>
    <div id="app">
        <section id="header-container"  class="hero is-primary">
        <canvas id="canvas"></canvas>
          <div class="hero-body">
            <div class="container">
              <h1 id="title" class="is-size-1">
               <i class="fa fa-chain-broken" aria-hidden="true"></i> BlockApis
              </h1>
              <h2 id="subtitle" class="subtitle">
              A simple utility to test common Cryptocurrency exchange API's
              </h2>
            </div>
            <canvas id="canvas"></canvas>
          </div>
        </section>
        @yield('content')
    </div>
    <hr>
    <footer class="footer">
        <div class="container">
            <div class="content has-text-centered">
                <p>
                    {{date('Y')}} <i class="fa fa-tint" aria-hidden="true"></i> <strong>Blocktrader</strong>.
                </p>
            </div>
        </div>
    </footer>
    <!-- Scripts -->
    <script src="{{ mix('js/manifest.js') }}"></script>
    <script src="{{ mix('js/vendor.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ mix('js/rAF.js') }}"></script>
    <script src="{{ mix('js/h.js') }}"></script>

</body>

</html>