@extends('dashboard.layouts.main')

@section('container')
<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-wrapper-before"></div>
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title">Detail Content About Us</h3>
        </div>
        <div class="content-header-right col-md-6 col-12">
          <div class="breadcrumbs-top float-md-right">
            <div class="breadcrumb-wrapper mr-1">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard/about-us">About Us</a>
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
  <div class="col-lg-12">
    <div class="card mb-4">
        <div class="card-body">
            <article class="my-3 fs-5 text-justify">
                {!! $aboutUs->isi !!}
            </article>
        </div>
    </div>
  </div>
  </div>
@endsection