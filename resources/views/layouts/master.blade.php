<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Farmasi Warehouse</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="{{ asset('template_admin/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('template_admin/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="{{ asset('template_admin/css/font-awesome.css') }}" rel="stylesheet">
<link href="{{ asset('template_admin/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('template_admin/css/pages/dashboard.css') }}" rel="stylesheet">
@livewireStyles
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
 {{-- navbar --}}
 @include('layouts.partials.navbar')
<!-- /navbar -->
{{-- subnavbar --}}
 @include('layouts.partials.subnavbar')
<!-- /subnavbar -->
<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        @yield('content')
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
<!-- /main -->

{{-- footer --}}
@include('layouts.partials.footer')
<!-- /footer --> 
<!-- Le javascript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="{{ asset('template_admin/js/jquery-1.7.2.min.js') }}"></script> 
<script src="{{ asset('template_admin/js/excanvas.min.js') }}"></script> 
<script src="{{ asset('template_admin/js/chart.min.js') }}" type="text/javascript"></script> 
<script src="{{ asset('template_admin/js/bootstrap.js') }}"></script>
<script language="javascript" type="text/javascript" src="{{ asset('template_admin/js/full-calendar/fullcalendar.min.js') }}"></script>
@livewireScripts
<script src="{{ asset('template_admin/js/base.js') }}"></script> 
@stack('scripts')
</body>
</html>
