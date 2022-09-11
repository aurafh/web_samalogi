@extends('dashboard.layouts.main')


@section('container')

<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-wrapper-before"></div>
    <div class="content-header row">
    </div>
    <div class="content-body">

        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Client Terbaru</h4>
                    </div>
                    <div class="card-content">
                        <div id="recent-buyers" class="media-list">
                            @foreach ($clients as $client)    
                            <div class="card">
                                @if ($client->logo)
                                <div style="width:60%" class="mt-2 mx-4">
                                    <img src="{{asset('storage/'. $client->logo)}}" alt="logo client" class="img-fluid">
                                </div>
                                @else
                                     <p class="fs-4">Logo Not Found!</p>
                                @endif   
                                <div class="card-body">
                                    <hr>
                                    <h4 class="mb-2">{{ $client->client }}</h4>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <h4 class="card-title">Portfolio Terbaru</h4>
                            @foreach ($portfolios as $portfolio)  
                            <h6 class="card-subtitle text-muted">{{ $portfolio->nama_portfolio }}</h6>
                        </div>
                        <div id="carousel-area" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-area" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-area" data-slide-to="1"></li>
                                <li data-target="#carousel-area" data-slide-to="2"></li>
                                <li data-target="#carousel-area" data-slide-to="3"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <img src="{{asset('storage/'. $portfolio->image1)}}" class="d-block w-100" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    @if ($portfolio->image2)
                                    <img src="{{asset('storage/'. $portfolio->image2)}}" class="d-block w-100" alt="Second slide">
                                    @else
                                    <img src="{{asset('storage/'. $portfolio->image1)}}" class="d-block w-100" alt="First slide">
                                    @endif  
                                </div>
                                <div class="carousel-item">
                                    @if ($portfolio->image3)
                                    <img src="{{asset('storage/'. $portfolio->image3)}}" class="d-block w-100" alt="Third slide">
                                    @else
                                    <img src="{{asset('storage/'. $portfolio->image1)}}" class="d-block w-100" alt="First slide">
                                    @endif  
                                </div>
                                <div class="carousel-item">
                                    @if ($portfolio->image4)
                                    <img src="{{asset('storage/'. $portfolio->image4)}}" class="d-block w-100" alt="Fourth slide">
                                    @else
                                    <img src="{{asset('storage/'. $portfolio->image1)}}" class="d-block w-100" alt="First slide">
                                    @endif  
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carousel-area" role="button" data-slide="prev">
                                    <span class="la la-angle-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            <a class="carousel-control-next" href="#carousel-area" role="button" data-slide="next">
                                    <span class="la la-angle-right icon-next" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                        </div>
                            @endforeach
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12">
                <div class="card">
                    <div class="card-header">
                            <h3 class="card-title" id="heading-multiple-thumbnails">Blog Terbaru</h3>
                        </div>
                        @foreach ($blogs as $blog)    
                        <div class="card-content">
                            <div class="card-body">
                                <img src="{{asset('storage/'. $blog->gambar)}}" class="img-fluid" alt="">
                                <hr>
                                <span class="post-date">{{ $blog->created_at }}</span>
                                <h4 class="card-title">{{ $blog->judul_blog }}</h4>
                                <p class="card-text">{!! Str::limit($blog->isi_blog, 200, '...') !!}</p>
                            </div>
                        </div>
                        @endforeach
                </div>
            </div>
        </div>
        

@endsection