@extends('home.layouts.main')
@section('container')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Portfolio Details</h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li><a href="/portfolio">Portfolio</a></li>
          <li>Portfolio Details</li>
        </ol>
      </div>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">
    <div class="container" data-aos="fade-up">

      <div class="row gy-4">

        <div class="col-lg-7">
          <div class="portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                <img src="{{asset('storage/'. $portfolio->image1)}}" class="d-block w-100" alt="First slide" width="700px" height="400px">
              </div>

              <div class="swiper-slide">
                @if ($portfolio->image2)
                <img src="{{asset('storage/'. $portfolio->image2)}}" class="d-block w-100" alt="Second slide" width="700px" height="400px">
                @else
                <img src="{{asset('storage/'. $portfolio->image1)}}" class="d-block w-100" alt="First slide" width="700px" height="400px">
                @endif 
              </div>

              <div class="swiper-slide">
                @if ($portfolio->image3)
                <img src="{{asset('storage/'. $portfolio->image3)}}" class="d-block w-100" alt="Third slide" width="700px" height="400px">
                @else
                <img src="{{asset('storage/'. $portfolio->image1)}}" class="d-block w-100" alt="First slide" width="700px" height="400px">
                @endif  
              </div>

              <div class="swiper-slide">
                @if ($portfolio->image4)
                <img src="{{asset('storage/'. $portfolio->image4)}}" class="d-block w-100" alt="Fourth slide" width="700px" height="400px">
                @else
                <img src="{{asset('storage/'. $portfolio->image1)}}" class="d-block w-100" alt="First slide" width="700px" height="400px">
                @endif 
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>

        <div class="col-lg-5">
          <div class="portfolio-info">
            <h3>{{ $portfolio->nama_portfolio }}</h3>
            <ul>
              <li><strong>Features</strong>: {!! $portfolio->features !!}</li>
              <li><strong>Onsite Training</strong>:
               <p>{!! $portfolio->training !!}</p></li>
            </ul>
          </div>
          <div class="portfolio-description">
            <h2>Deskripsi</h2>
            <p class="text-justify">
              {!! $portfolio->deskripsi !!}
            </p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->
@endsection

 