@extends('dashboard.layouts.main')

@section('container')
<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-wrapper-before"></div>
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title">Detail Blog</h3>
        </div>
        <div class="content-header-right col-md-6 col-12">
          <div class="breadcrumbs-top float-md-right">
            <div class="breadcrumb-wrapper mr-1">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard/blog">Blog</a>
                </li>
                <li class="breadcrumb-item active">Detail
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="content-body">
        <!-- Basic Inputs start -->

  <div class="row match-height">
    <div class="col-lg-6 col-md-6">
        <div class="card">
            @if ($blog->gambar)
            <img src="{{asset('storage/'. $blog->gambar)}}" alt="gambar blog" class="img-fluid">
            @else
            <p class="fs-4">Gambar Not Found!</p>
            @endif  
            <div class="card-body text-justify">
                <div class="card-title">
                  <h3>{!! $blog->judul_blog !!}</h3>
                </div>
                <i class="fs-6 text-muted">{{ $blog->created_at }}</i>
                <hr>
                <p class="card-text">{!! $blog->isi_blog !!}</p>
            </div>
        </div>
    </div>
  </div>
      </div>
    </div>
</div>



@endsection