@extends('dashboard.layouts.main')

@section('container')
<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-wrapper-before"></div>
      <div class="content-header row">
        <div class="content-header-left col-md-4 col-12 mb-2">
          <h3 class="content-header-title">Detail Portfolio</h3>
        </div>
        <div class="content-header-right col-md-8 col-12">
          <div class="breadcrumbs-top float-md-right">
            <div class="breadcrumb-wrapper mr-1">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard/portfolio">Portfolio</a>
                </li>
                <li class="breadcrumb-item active">Detail
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="content-body">
        <!-- Bar charts section start -->
  <div class="col-xl-12 col-lg-12">
    <div class="card">
        <h3 class="card-header">{{ $portfolio->nama_portfolio }}</h3>
            <div class="card-body">
                <div class="mb-3 row">
                  <div class="col-md-6 col-md-offset-2">
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
                  </div>
                  <div class="col-md-5 text-justify">
                    <h5>Deskripsi : </h5>
                    <p class="my-2 fs-5">{!! $portfolio->deskripsi !!}</p>
                    <h5>Features : </h5>
                    <p class="my-2 fs-5">{!! $portfolio->features !!}</p>
                    <h5>Training : </h5>
                    <p class="my-2 fs-5">{!! $portfolio->training !!}</p>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection