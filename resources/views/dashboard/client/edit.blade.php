@extends('dashboard.layouts.main')

@section('container')
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-wrapper-before"></div>
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title">Update Client</h3>
      </div>
      <div class="content-header-right col-md-6 col-12">
        <div class="breadcrumbs-top float-md-right">
          <div class="breadcrumb-wrapper mr-1">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/dashboard/our-client">Our Client</a>
              </li>
              <li class="breadcrumb-item active">Update
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="content-body">
      <!-- Basic Inputs start -->
      <div class="col-xl-9">
        <div class="card mb-4">
          <div class="card-body">
            <form method="POST" action="{{ route('our-client.update', $client->id) }}" class="mb-5" enctype="multipart/form-data" >
              @csrf
              @method('put')
                <div class="mb-3 row">
                  <label for="client" class="col-md-2 col-form-label text-center">Client</label>
                  <div class="col-md-10">
                    <input type="text" class="form-control @error('client') is-invalid @enderror" id="client" name="client" value="{{ old('client', $client->client) }}">
                    @error('client')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                  </div>
                  </div>
                <div class="mb-3 row">
                  <label for="logo" class="col-md-2 col-form-label text-center mt-4">Logo Client</label>
                  <div class="col-md-10">
                    <input type="hidden" name="oldImage" value="{{ $client->logo }}">
                    @if ($client->logo)
                    <img src="{{ asset('storage/'. $client->logo) }}" class="img-preview img-fluid mb-3 col-sm-3 d-block">
                    @else
                    <img class="img-preview img-fluid mb-3 col-sm-3">
                    @endif
                    <input class="form-control" type="file" id="logo" name="logo" onchange="previewImage()">
                </div>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
              </form>
                </div>
          </div>
      </div>
    </div>
  </div>
</div>

  <script>
    function previewImage(){
      const logo= document.querySelector('#logo');
      const imgPreview = document.querySelector('.img-preview');
  
      imgPreview.style.display='block';
  
      const oFReader = new FileReader();
      oFReader.readAsDataURL(logo.files[0]);
  
      oFReader.onload=function(oFREvent){
        imgPreview.src=oFREvent.target.result;
      }
    }
  </script>
@endsection