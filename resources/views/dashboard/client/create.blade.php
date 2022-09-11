@extends('dashboard.layouts.main')

@section('container')
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-wrapper-before"></div>
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title">Create New Client</h3>
      </div>
      <div class="content-header-right col-md-6 col-12">
        <div class="breadcrumbs-top float-md-right">
          <div class="breadcrumb-wrapper mr-1">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/dashboard/our-client">Our Client</a>
              </li>
              <li class="breadcrumb-item active">Create
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
            <form method="POST" action="/dashboard/our-client" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row">
                  <label for="client" class="col-md-2 col-form-label text-center">Client</label>
                  <div class="col-md-10">
                    <input type="text" class="form-control @error('client') is-invalid @enderror" id="client" name="client" value="{{ old('client') }}">
                      @error('client')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                  </div>
                  </div>
                <div class="mb-3 row">
                  <label for="logo" class="col-md-2 col-form-label text-center mt-4">Logo Client</label>
                  <div class="col-md-10">
                    <img class="img-preview img-fluid mb-3 col-sm-3">
                    <input class="form-control @error('logo') is-invalid @enderror" type="file" id="logo" name="logo" onchange="previewImage()">
                    @error('logo')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                </div>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
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