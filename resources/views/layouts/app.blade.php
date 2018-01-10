<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{{ asset('img/favicon.ico') }}}"> 
    @yield('styles')
</head>

<body>
    <div id="app">
        <section class="hero is-primary">
          <div class="hero-body">
            <div class="container">
              <h1 class="is-size-1">
               Blocktrader
              </h1>
              <h2 class="subtitle">
               By Googlɘ
              </h2>
            </div>
          </div>
        </section>
        @yield('content')
    </div>
    <hr>
    <footer class="footer">
        <div class="container">
            <div class="content has-text-centered">
                <p>
                    {{date('Y')}} <i class="fa fa-tint" aria-hidden="true"></i> <strong>Blocktrader</strong></a>.
                </p>
            </div>
        </div>
    </footer>
    <!-- Scripts -->
    <script src="{{ mix('js/manifest.js') }}"></script>
    <script src="{{ mix('js/vendor.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>