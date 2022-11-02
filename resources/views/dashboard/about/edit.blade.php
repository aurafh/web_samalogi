@extends('dashboard.layouts.main')

@section('container')
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-wrapper-before"></div>
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title">Edit Content About Us</h3>
      </div>
      <div class="content-header-right col-md-6 col-12">
        <div class="breadcrumbs-top float-md-right">
          <div class="breadcrumb-wrapper mr-1">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/dashboard/about-us">About Us</a>
              </li>
              <li class="breadcrumb-item active">Edit
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
              <form method="POST" action="{{ route('about-us.update', $aboutUs->id) }}">
                @csrf
                @method('put')
              <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-center">Isi Content</label>
                <div class="col-md-10">
                  <input class="@error('isi') is-invalid @enderror" type="hidden" value="{{ old('isi', $aboutUs->isi) }}" id="isi" name="isi" />
                  <trix-editor input="isi" class="form-control"></trix-editor>
                  @error('isi')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
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

@endsection