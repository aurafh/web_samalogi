@extends('home.layouts.main')

@section('container')    
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Blog Details</h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li><a href="/#blog">Blog</a></li>
          <li>Blog Details</li>
        </ol>
      </div>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Blog Details Section ======= -->
  <section id="blog-detail" class="blog">
    <div class="container" data-aos="fade-up">

      <div class="row g-5">

        <div class="col-lg-10 offset-1">

          <article class="blog-details">

            <div class="post-img">
              <img src="{{asset('storage/'. $blog->gambar)}}" alt="" class="img-fluid" >
            </div>

            <h2 class="title">{!! $blog->judul_blog !!}</h2>

            <div class="meta-top">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="/blog-details/{{ $blog->id }}">Administrator</a></li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="/blog-details/{{ $blog->id }}"><time datetime="2020-01-01">{{ $blog->created_at }}</time></a></li>
              </ul>
            </div><!-- End meta top -->

            <div class="content">
              <p>{!! $blog->isi_blog !!}</p>

            </div><!-- End post content -->
          </article><!-- End blog post -->

        </div>
      </div>

    </div>
  </section><!-- End Blog Details Section -->

</main>
<!-- End #main -->
@endsection

