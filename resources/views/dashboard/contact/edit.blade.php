@extends('dashboard.layouts.main')

@section('container')
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-wrapper-before"></div>
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title">Update Contact</h3>
      </div>
      <div class="content-header-right col-md-6 col-12">
        <div class="breadcrumbs-top float-md-right">
          <div class="breadcrumb-wrapper mr-1">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/dashboard/contact">Contact</a>
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
            <form method="POST" action="{{ route('contact.update', $contact->id) }}" class="mb-5" enctype="multipart/form-data" >
              @csrf
              @method('put')
                <div class="mb-3 row">
                  <label for="alamat" class="col-md-2 col-form-label text-center">Alamat</label>
                  <div class="col-md-10">
                  <input type="hidden" id="alamat" name="alamat" value="{{ old('alamat', $contact->alamat) }}">
                  <trix-editor input="alamat" class="form-control form-control @error('alamat') is-invalid @enderror"></trix-editor>
                  @error('alamat')
                  <p class="text-danger">{{ $message }}</p>
                  @enderror
                  </div>
                </div>
                  <div class="mb-3 row">
                    <label for="email" class="col-md-2 col-form-label text-center">Email</label>
                    <div class="col-md-10">
                      <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $contact->email) }}">
                      @error('email')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="maps" class="col-md-2 col-form-label text-center">Maps</label>
                    <div class="col-md-10">
                      <input type="url" class="form-control @error('maps') is-invalid @enderror" id="maps" name="maps" value="{{ old('maps', $contact->maps) }}">
                      @error('maps')
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