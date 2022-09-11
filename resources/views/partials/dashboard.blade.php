<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Dashboard | Samalogi</title>
    <link href="{{ asset('img/icon.png') }}" rel="icon">
  <link href="{{ asset('img/apple.png') }}" rel="apple-touch-icon">
    <!-- GOOGLE FONTS-->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme-assets/css/vendors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme-assets/vendors/css/charts/chartist.css') }}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme-assets/css/app-lite.css') }}">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme-assets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme-assets/css/pages/dashboard-ecommerce.css') }}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/trix.css') }}">
    <!-- END Custom CSS-->
  </head>
  
  
  <style>
    trix-toolbar [data-trix-button-group="file-tools"]{
      display:none;
    }
    .content-wrapper-before {
    height: 100px !important;
}
    </style>
</head>

<!-- ====Content Dashboard==== --->
<body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">  
  @yield('content')
  
<!-- ====END Content Dashboard==== --->


<!-- Template Main JS File -->

<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="{{ asset('js/trix.js') }}" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<script src="{{ asset('theme-assets/vendors/js/vendors.min.js') }}" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="{{ asset('theme-assets/vendors/js/charts/chartist.min.js') }}" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN CHAMELEON  JS-->
<script src="{{ asset('theme-assets/js/core/app-menu-lite.js') }}" type="text/javascript"></script>
<script src="{{ asset('theme-assets/js/core/app-lite.js') }}" type="text/javascript"></script>
<!-- END CHAMELEON  JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{ asset('theme-assets/js/scripts/pages/dashboard-lite.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->
</body>

</html>