<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow " data-scroll-to-active="true" data-img="{{ asset('theme-assets/images/backgrounds/02.jpg') }}">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">       
          <li class="nav-item-center"><a class="app-brand-link" href="/dashboard">
            <span class="app-brand-logo demo">
                <img alt="samalogi logo" src="{{ asset('img/logo_samalogi.png') }}" width="200px"/>
              </span>
          </a></li>
        </ul>
      </div>
      
      <div class="main-menu-content pt-2">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class="{{ Request::is('/dashboard') ? 'active' : 'nav-item' }}"><a href="/dashboard"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
        </li>
        <li class="{{ Request::is('/dashboard/about-us') ? 'active' : 'nav-item' }} "><a href="/dashboard/about-us"><i class="ft-pie-chart"></i><span class="menu-title" data-i18n="">About Us</span></a>
        </li>
        <li class="{{ Request::is('/dashboard/budayakerja') ? 'active' : 'nav-item' }}"><a href="/dashboard/budayakerja"><i class="ft-droplet"></i><span class="menu-title" data-i18n="">Budaya Kerja</span></a>
        </li>
        <li class="{{ Request::is('/dashboard/our-client') ? 'active' : 'nav-item' }}"><a href="/dashboard/our-client"><i class="ft-layers"></i><span class="menu-title" data-i18n="">Our Client</span></a>
        </li>
        <li class="{{ Request::is('/dashboard/portfolio') ? 'active' : 'nav-item' }}"><a href="/dashboard/portfolio"><i class="ft-box"></i><span class="menu-title" data-i18n="">Portfolio</span></a>
        </li>
        <li class="{{ Request::is('/dashboard/blog') ? 'active' : 'nav-item' }}"><a href="/dashboard/blog"><i class="ft-bold"></i><span class="menu-title" data-i18n="">Blog</span></a>
        </li>
        <li class="{{ Request::is('/dashboard/contact') ? 'active' : 'nav-item' }}"><a href="/dashboard/contact"><i class="ft-credit-card"></i><span class="menu-title" data-i18n="">Contact</span></a>
        </li>
    </ul>
    </div>
    <div class="navigation-background"></div>
  </div>