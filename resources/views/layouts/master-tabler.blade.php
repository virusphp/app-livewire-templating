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
    @livewireStyle
  </head>
  <body class="antialiased">
    <div class="wrapper">
      {{-- Header --}}
      @include('layouts.partials.header')

      @include('layouts.partials.navbar')

      <div class="page-wrapper mb-2">
        @include('layouts.partials.breadcrum')

        <div class="page-body">
          <div class="container-xl">
            @yield('content')
          </div>
        </div>

      </div>
      @include('layouts.partials.footer') 
    </div>

    <!-- Libs JS -->
    {{-- <script src="./dist/libs/apexcharts/dist/apexcharts.min.js"></script> --}}
    <!-- Tabler Core -->
    <script src="{{ mix('js/app.js') }}"></script>
    @livewireScripts
    @stack('scripts')
  </body>
</html>