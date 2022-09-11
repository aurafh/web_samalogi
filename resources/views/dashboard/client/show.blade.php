@extends('dashboard.layouts.main')

@section('container')
<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-wrapper-before"></div>
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title">Detail Client</h3>
        </div>
        <div class="content-header-right col-md-6 col-12">
          <div class="breadcrumbs-top float-md-right">
            <div class="breadcrumb-wrapper mr-1">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard/our-client">Our Client</a>
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
                    @if ($client->logo)
                    <div style="width:60%" class="mt-2 mx-4">
                        <img src="{{asset('storage/'. $client->logo)}}" alt="logo client" class="img-fluid">
                    </div>
                    @else
                         <p class="fs-4">Logo Not Found!</p>
                    @endif   
                    <div class="card-body">
                        <hr>
                        <h2 class="mb-2">{{ $client->client }}</h2>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>

@endsection