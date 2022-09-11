@extends('partials.dashboard')

@section('content')
<!-- Layout container -->
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
  <div class="layout-container">
    @include('dashboard.layouts.sidebar')
    <div class="layout-page">
      @include('dashboard.layouts.navbar')
    </div>
    </div>
  </div>

<!--==== Main Content ====-->
  
    @yield('container')

    @include('sweetalert::alert')

@endsection