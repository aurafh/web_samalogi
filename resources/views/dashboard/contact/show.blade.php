@extends('dashboard.layouts.main')

@section('container')
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-wrapper-before"></div>
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title">Detail Contact</h3>
      </div>
      <div class="content-header-right col-md-6 col-12">
        <div class="breadcrumbs-top float-md-right">
          <div class="breadcrumb-wrapper mr-1">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/dashboard/contact">Contact</a>
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
                    <div class="card-body text-justify">
                      <h3>Contact</h3>
                      <hr>
                      <p class="my-2 fs-5">{!! $contact->alamat !!}</p>
                      <p class="my-2 fs-5">Email : {{ $contact->email }}</p>
                    </div>
                  </div>
                </div>
                <div class="map position-relative">
                  <iframe src="{!! $contact->maps !!}" 
                  width="700" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
          </div>
      </div>
    </div>
  </div>
@endsection