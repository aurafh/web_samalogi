@extends('home.layouts.main')

@section('container')    
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <form action="/portfolio" class="mt-3">
            <div class="row">
                <div class="col-md-10">
                    <input type="text" name="search" id="search" class="form-control" value="{{ request('search') }}" placeholder="Search Portfolio..">
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </form>
        <ol>
          <li><a href="/">Home</a></li>
          <li>Portfolio</li>
        </ol>
      </div>

    </div>
  </div><!-- End Breadcrumbs -->

  <section id="portfolio" class="portfolio" data-aos="fade-up">
    <div class="container">

      <div class="section-header">
        <h2>Portfolio</h2>
        <p>Recent Post from Our Portfolio</p>
      </div>
    
    </div>
    
    <div class="container-fluid" data-aos="fade-up" data-aos-delay="200">
    
      <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">
    
        <div class="row g-0 portfolio-container">
          @foreach ($portfolio_all as $portfolio)
              
          <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item">
            <img src="{{asset('storage/'. $portfolio->image1)}}" class="d-block w-100" alt="" width="300px" height="300px">
            <div class="portfolio-info">
              <h4>{{ $portfolio->nama_portfolio }}</h4>
              <a href="{{asset('storage/'. $portfolio->image1)}}" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="/portfolio-detail/{{ $portfolio->id }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div><!-- End Portfolio Item -->
    
          @endforeach
    
        </div><!-- End Portfolio Container -->
    
      </div>
    
    </div>
    </section>
<div class="d-flex justify-content-center">
    {{ $portfolio_all->links() }}
</div>
  <!-- End Recent Blog Posts Section -->
@endsection