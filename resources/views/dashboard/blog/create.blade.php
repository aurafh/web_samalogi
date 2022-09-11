@extends('dashboard.layouts.main')

@section('container')
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-wrapper-before"></div>
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title">Create New Blog</h3>
      </div>
      <div class="content-header-right col-md-6 col-12">
        <div class="breadcrumbs-top float-md-right">
          <div class="breadcrumb-wrapper mr-1">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/dashboard/blog">Blog</a>
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
              <form method="POST" action="/dashboard/blog" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row">
                  <label for="judul_blog" class="col-md-2 col-form-label text-center">Judul Blog</label>
                  <div class="col-md-10">
                  <input type="text" class="form-control @error('judul_blog') is-invalid @enderror" id="judul_blog" name="judul_blog" value="{{ old('judul_blog') }}">
                  @error('judul_blog')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                  </div>
                  </div>
                    <div class="mb-3 row">
                      <label for="isi_blog" class="col-md-2 col-form-label text-center">Isi Blog</label>
                      <div class="col-md-10">
                      <input type="hidden" id="isi_blog" name="isi_blog" value="{{ old('isi_blog') }}">
                      <trix-editor input="isi_blog" class="form-control @error('isi_blog') is-invalid @enderror"></trix-editor>
                      @error('isi_blog')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                      </div>
                    </div>
                <div class="mb-3 row">
                  <label for="gambar" class="col-md-2 col-form-label text-center mt-4">Gambar</label>
                  <div class="col-md-10">
                  <img class="img-preview img-fluid mb-3 col-sm-3">
                  <input class="form-control @error('gambar') is-invalid @enderror" type="file" id="gambar" name="gambar" onchange="previewImage()">
                  @error('gambar')
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
    const gambar= document.querySelector('#gambar');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display='block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(gambar.files[0]);

    oFReader.onload=function(oFREvent){
      imgPreview.src=oFREvent.target.result;
    }
  }
</script>
@endsection

