<!-- ======= Header ======= -->
<header id="header" class="header fixed-top" data-scrollto-offset="0">
  <div class="container-fluid d-flex align-items-center justify-content-between">
      <a href="/" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <img src="{{ asset('img/logo_samalogi.png') }}" alt="" width="180px">
      </a>
      <nav id="navbar" class="navbar me-lg-7">
        <ul>
          @foreach ($menu as $item)    
          <li><a class="nav-link scrollto" href="{{ $item->link }}">{{ $item->nama }}</a></li>
          @endforeach
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav>
      <a href="#" class=" me-auto me-lg-5"></a>
    </div>
</header>
<!-- End Header -->
