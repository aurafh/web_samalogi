@extends('home.layouts.main')

@section('container')

<section id="home" class="hero-fullscreen d-flex align-items-center">
  <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
    <h2>Welcome to <span>Samalogi</span></h2>
    <p>Create Your Laboratory and Simulator Equipment with The Latest Technology Innovation</p>
    <div class="d-flex">
      <a href="#budaya-kerja" class="btn-get-started scrollto">Get Started</a>
    </div>
  </div>
</section>

<main id="main">

  <!-- ======= Budaya Kerja Section ======= -->
  <section id="budaya-kerja" class="featured-services">
    <div class="container">
      <div class="row align-items-center justify-content-between text-center" >
  @foreach ($budaya as $kerja)
  <div class="col-md-2" data-aos="zoom-out">
    <div class="service-item">
      <div class="icon"><img src="{{asset('storage/'. $kerja->icon)}}" alt="icon" height="60px"></div>
      <h4><a class="stretched-link">{{ $kerja->judul_budaya }}</a></h4>
      <p>{{ $kerja->penjelasan }}</p>
    </div>
  </div><!-- End Service Item -->
  @endforeach
    </div>
    </div>
 
  
  </section><!-- End Featured Services Section -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>About Us</h2></div> 
      <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-6">
          <div class="about-img">
            <img src="{{ asset('img/hero-carousel/Starting a business project-amico.svg') }}" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-6 text-justify">
          
          <p>{!! $abouts->isi !!}</p>

         </div>

        </div>

      </div>
    </div>
  </section><!-- End About Section -->

  <!-- ======= Clients Section ======= -->
  <section id="clients" class="clients">
    <div class="container" data-aos="zoom-out">

      <div class="section-header">
        <h2>Our Client</h2></div> 
      <div class="clients-slider swiper">
        <div class="swiper-wrapper align-items-center">
          @foreach ($clients as $client)
          <div class="swiper-slide" style="text-align: center;">
            <img src="{{asset('storage/'. $client->logo)}}" alt="" width="110px">
          </div>
          @endforeach
        </div>
      </div>
  
    </div>
  
  </section><!-- End Clients Sec-->

  @if (!$portfolios->isEmpty())
  <section id="cta" class="cta">
    <div class="d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
      <img src="{{ asset('img/hero-carousel/girl-doing-yoga-light.png') }}" alt="" class="img-fluid" width="450px">
    </div>
  </section><!-- End Call To Action Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio" data-aos="fade-up">
    <div class="container">

      <div class="section-header">
        <h2>Portfolio</h2>
        <p>Recent Post from Our Portfolio</p>
      </div>
    
    </div>
    
    <div class="container-fluid" data-aos="fade-up" data-aos-delay="200">
    
      <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">
    
        <div class="row gy-4">
          @foreach ($portfolios as $portfolio)
              
          <div class="col-lg-4 portfolio-item">
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
  @endif
  <!-- End Portfolio Section -->
  

  <!-- ======= Recent Blog Posts Section ======= -->
  @if (!$blogs->isEmpty())
    <section id="recent-blog-posts" class="recent-blog-posts">

      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Blog</h2>
          <p>Recent posts form our Blog</p>
        </div>
        <div class="row gy-4 posts-list">
          @foreach ($blogs as $blog)  
          <div class="col-lg-4">
            <article class="post-box">

              <div class="post-img">
                <img src="{{asset('storage/'. $blog->gambar)}}" alt="" class="img-fluid">
              </div>

              <h3 class="post-title">{{ $blog->judul_blog }}</h3>

              <div class="meta">
                <span class="post-date"><time datetime="2022-01-01">{{ $blog->created_at }}</time></a></span>
                <span class="post-author"> / {{$user->nama}}</a></span>
              </div>

              <div class="content">
                <p>
                  {!! Str::limit($blog->isi_blog, 200, '...') !!}
                </p>
              </div>

                <a href="/blog-detail/{{ $blog->id }}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </article>
          </div><!-- End post list item -->
          @endforeach
        </div><!-- End blog posts list -->

      </div>

    </section>
  @endif
  <!-- End Recent Blog Posts Section -->

  <!-- ======= Contact Section ======= -->
  
  <section id="contact" class="contact">
    <div class="container">
      
      <div class="section-header">
        <h2>Contact Us</h2>
      </div>
      
    </div>
    
    @foreach ($contacts as $contact)
<div class="map">
<iframe src="{!! $contact->maps !!}" 
  width="700" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div><!-- End Google Maps -->

<div class="container">

<div class="row gy-5 gx-lg-5">
  
  <div class="col-lg-4">

    <div class="info">
      <h3>Get in touch</h3>
      <p>You can try to contact us.</p>
      <div class="info-item d-flex">
        <i class="bi bi-geo-alt flex-shrink-0"></i>
        <div>
          <h4>Location:</h4>
          <p>{!! $contact->alamat !!}</p>
        </div>
      </div><!-- End Info Item -->

      <div class="info-item d-flex">
        <i class="bi bi-envelope flex-shrink-0"></i>
        <div>
          <h4>Email:</h4>
          <p class="fs-6" style="color: black !important">{!! $contact->email !!}</p>
        </div>
      </div><!-- End Info Item -->

    </div>

  </div>

  
  <div class="col-lg-8">
    @if (session()->has('success')) 
    <div class="alert alert-success" role="alert">
      {{session('success')}}
    </div>
    @endif

    @if (session()->has('error'))
    <div class="alert alert-danger" role="alert">
      {{session('error')}}
    </div>
    @endif

    <form action="{{ route('send.email') }}" method="post" role="form" class="php-email-form" >
      @csrf
      <div class="row">
        <div class="col-md-6 form-group">
          <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
        </div>
        <div class="col-md-6 form-group mt-3 mt-md-0">
          <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
        </div>
      </div>
      <div class="form-group mt-3">
        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
      </div>
      <div class="form-group mt-3">
        <textarea class="form-control" name="message" placeholder="Message" required></textarea>
      </div>
      <div class="my-3">
        <div class="loading">Loading</div>
        <div class="error-message"></div>
        <div class="sent-message"></div>
      </div>
      <div class="text-center"><button type="submit">Send Message</button></div>
    </form>
  </div>
  
<!-- End Contact Form -->

</div>

</div>
@endforeach

    </section>

  <!-- End Contact Section -->

</main>
<!-- End #main -->

@endsection

@push('append-script')
  @php
    $showClient = 6;
    if ($clients->count() < 6) {
      $showClient = $clients->count();
    }
  @endphp
  <script>
    new Swiper('.clients-slider', {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    breakpoints: {
      320: {
        slidesPerView: {{$showClient}},
        spaceBetween: 40
      },
      480: {
        slidesPerView: {{$showClient}},
        spaceBetween: 60
      },
      640: {
        slidesPerView: {{$showClient}},
        spaceBetween: 80
      },
      992: {
        slidesPerView: {{$showClient}},
        spaceBetween: 120
      }
    }
  });
  </script>
@endpush