@extends('home.layouts.main')

@section('container')    
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <form action="/blogs" class="mt-3">
            <div class="row">
                <div class="col-md-10">
                    <input type="text" name="search" id="search" class="form-control" value="{{ request('search') }}" placeholder="Search Blog..">
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </form>
        <ol>
          <li><a href="/">Home</a></li>
          <li>Blogs</li>
        </ol>
      </div>

    </div>
  </div><!-- End Breadcrumbs -->

  <section id="blog" class="recent-blog-posts">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Blog</h2>
        <p>Recent posts form our Blog</p>
      </div>
      <div class="container" data-aos="fade-up">

        <div class="row gy-5 posts-list">
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
  
    </div>
    
</section>
<div class="d-flex justify-content-center">
    {{ $blogs->links() }}
</div>
  <!-- End Recent Blog Posts Section -->
@endsection