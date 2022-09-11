@extends('dashboard.layouts.main')

@section('container')
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-wrapper-before"></div>
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title">Update Portfolio</h3>
      </div>
      <div class="content-header-right col-md-6 col-12">
        <div class="breadcrumbs-top float-md-right">
          <div class="breadcrumb-wrapper mr-1">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/dashboard/portfolio">Portfolio</a>
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
            <form method="POST" action="{{ route('portfolio.update', $portfolio->id) }}" class="mb-5" enctype="multipart/form-data" >
              @csrf
              @method('put')
                <div class="mb-3 row">
                  <label for="nama_portfolio" class="col-md-2 col-form-label text-center">Nama Portfolio</label>
                  <div class="col-md-10">
                    <input type="text" class="form-control @error('nama_portfolio') is-invalid @enderror" id="nama_portfolio" name="nama_portfolio" value="{{ old('nama_portfolio', $portfolio->nama_portfolio) }}">
                    @error('nama_portfolio')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                  </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="deskripsi" class="col-md-2 col-form-label text-center">Deskripsi</label>
                    <div class="col-md-10"> 
                      <input type="hidden" id="deskripsi" name="deskripsi" value="{{ old('deskripsi', $portfolio->deskripsi) }}">
                      <trix-editor input="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror"></trix-editor>
                      @error('deskripsi')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
                  </div>
                    <div class="mb-3 row">
                      <label for="features" class="col-md-2 col-form-label text-center">Features</label>
                      <div class="col-md-10">
                      <input type="hidden" id="features" name="features" value="{{ old('features', $portfolio->features) }}">
                      <trix-editor input="features" class="form-control @error('features') is-invalid @enderror"></trix-editor>
                        @error('features')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="training" class="col-md-2 col-form-label text-center">Training</label>
                      <div class="col-md-10">
                      <input type="hidden" id="training" name="training" value="{{ old('training', $portfolio->training) }}">
                      <trix-editor input="training" class="form-control @error('training') is-invalid @enderror"></trix-editor>
                        @error('training')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                      </div>
                    </div>
                <div class="mb-3 row">
                  <label for="image1" class="col-md-2 col-form-label text-center mt-4">Image 1</label>
                  <div class="col-md-10">
                    <input type="hidden" name="oldImage" value="{{ $portfolio->image1 }}">
                    @if ($portfolio->image1)
                    <img src="{{ asset('storage/'. $portfolio->image1) }}" class="img-preview img-fluid mb-3 col-sm-3 d-block">
                    @else
                    <img class="img-preview img-fluid mb-3 col-sm-3">
                    @endif
                    <input class="form-control" type="file" id="image1" name="image1" onchange="previewImage()">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="image2" class="col-md-2 col-form-label text-center mt-4">Image 2</label>
                  <div class="col-md-10">
                    <input type="hidden" name="oldImage" value="{{ $portfolio->image2 }}">
                    @if ($portfolio->image2)
                    <img src="{{ asset('storage/'. $portfolio->image2) }}" class="img-preview2 img-fluid mb-3 col-sm-3 d-block">
                    @else
                    <img class="img-preview2 img-fluid mb-3 col-sm-3">
                    @endif
                    <input class="form-control" type="file" id="image2" name="image2" onchange="previewImage2()">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="image3" class="col-md-2 col-form-label text-center mt-4">Image 3</label>
                  <div class="col-md-10">
                    <input type="hidden" name="oldImage" value="{{ $portfolio->image3 }}">
                    @if ($portfolio->image3)
                    <img src="{{ asset('storage/'. $portfolio->image3) }}" class="img-preview3 img-fluid mb-3 col-sm-3 d-block">
                    @else
                    <img class="img-preview3 img-fluid mb-3 col-sm-3">
                    @endif
                    <input class="form-control" type="file" id="image3" name="image3" onchange="previewImage3()">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="image4" class="col-md-2 col-form-label text-center mt-4">Image 4</label>
                  <div class="col-md-10">
                    <input type="hidden" name="oldImage" value="{{ $portfolio->image4 }}">
                    @if ($portfolio->image4)
                    <img src="{{ asset('storage/'. $portfolio->image4) }}" class="img-preview4 img-fluid mb-3 col-sm-3 d-block">
                    @else
                    <img class="img-preview4 img-fluid mb-3 col-sm-3">
                    @endif
                    <input class="form-control" type="file" id="image4" name="image4" onchange="previewImage4()">
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
      const image1= document.querySelector('#image1');
      const imgPreview = document.querySelector('.img-preview');
  
      imgPreview.style.display='block';
  
      const oFReader = new FileReader();
      oFReader.readAsDataURL(image1.files[0]);
  
      oFReader.onload=function(oFREvent){
        imgPreview.src=oFREvent.target.result;
      }
    }

    function previewImage2(){
      const image1= document.querySelector('#image2');
      const imgPreview2 = document.querySelector('.img-preview2');
  
      imgPreview2.style.display='block';
  
      const oFReader = new FileReader();
      oFReader.readAsDataURL(image1.files[0]);
  
      oFReader.onload=function(oFREvent){
        imgPreview2.src=oFREvent.target.result;
      }
    }

    function previewImage3(){
      const image1= document.querySelector('#image3');
      const imgPreview3 = document.querySelector('.img-preview3');
  
      imgPreview3.style.display='block';
  
      const oFReader = new FileReader();
      oFReader.readAsDataURL(image1.files[0]);
  
      oFReader.onload=function(oFREvent){
        imgPreview3.src=oFREvent.target.result;
      }
    }

    function previewImage4(){
      const image1= document.querySelector('#image4');
      const imgPreview4 = document.querySelector('.img-preview4');
  
      imgPreview4.style.display='block';
  
      const oFReader = new FileReader();
      oFReader.readAsDataURL(image1.files[0]);
  
      oFReader.onload=function(oFREvent){
        imgPreview4.src=oFREvent.target.result;
      }
    }
  </script>
@endsection