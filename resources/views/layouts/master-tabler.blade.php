<!doctype html>
<!--
* @version 1.0.1-modified by Genzo
* @link https://tabler.io
* Modified 2021 Genzo
* Copyright 2018-2021 The Tabler Authors
* Copyright 2018-2021 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>System RSUD KRATON</title>
    <!-- CSS files -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet"/>
    @livewireStyles
  </head>
  <body class="antialiased">
    <div class="wrapper">
      {{-- Header --}}
      @include('layouts.partials.header')

      @include('layouts.partials.navbar')

      <div class="page-wrapper mb-2">
      
        @yield('content')

      </div>
      @include('layouts.partials.footer') 
    </div>

    <!-- Libs JS -->
    {{-- <script src="./dist/libs/apexcharts/dist/apexcharts.min.js"></script> --}}
    <!-- Tabler Core -->
    <script src="{{ mix('js/app.js') }}"></script>
    @livewireScripts
    <script>
      window.livewire.on('alert_remove',()=>{
          setTimeout(function(){ $(".bg-success").fadeOut('fast');
          }, 3000); // 3 secs
      });
    </script>
    @stack('scripts')
  </body>
</html>