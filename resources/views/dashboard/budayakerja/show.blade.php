@extends('dashboard.layouts.main')

@section('container')
<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-wrapper-before"></div>
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title">Detail Budaya Kerja</h3>
        </div>
        <div class="content-header-right col-md-6 col-12">
          <div class="breadcrumbs-top float-md-right">
            <div class="breadcrumb-wrapper mr-1">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard/budayakerja">Budaya Kerja</a>
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
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    @if ($budayakerja->icon)
                    <div style="width:60%">
                        <img src="{{asset('storage/'. $budayakerja->icon)}}" alt="icon" class="img-fluid">
                    </div>
                    @else
                         <p class="fs-4">Icon Not Found!</p>
                    @endif   
                    <div class="card-body">
                        <h2 class="mb-2">{{$budayakerja->judul_budaya}}</h2>
                        <p class="text-justify">{!! $budayakerja->penjelasan !!}</p>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>
@endsection