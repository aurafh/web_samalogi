@extends('dashboard.layouts.main')

@section('container')
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-wrapper-before"></div>
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title">Informasi User</h3>
      </div>
      <div class="content-header-right col-md-6 col-12">
        <div class="breadcrumbs-top float-md-right">
          <div class="breadcrumb-wrapper mr-1">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Informasi User
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="content-body">
      <!-- Basic Inputs start -->
      @if (session()->has('success'))
          {{ session('success') }}
        @endif

      <div class="col-xl-12">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row mt-5">
              <div class="col-md-4 text-center">
                <img src="{{ asset('/img/user2.png') }}" alt="user" width="240px" class="rounded-circle">
                <h3 class="mt-2">{{ Auth()->user()->nama }}</h3>
              </div>

              <div class="col-md-8">
            <form method="POST" action="{{ route('user.update', $user->id) }}" class="mb-5" id="edit">
              @csrf
              @method('put')
                <div class="mb-3 row">
                  <label for="nama" class="col-md-2 col-form-label text-center">Nama</label>
                  <div class="col-md-10">
                  <input type="text" class="form-control form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama', $user->nama) }}" placeholder="Masukkan nama">
                  @error('nama')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                  </div>
                </div>
                  <div class="mb-3 row">
                    <label for="username" class="col-md-2 col-form-label text-center">Username</label>
                    <div class="col-md-10">
                      <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username',$user->username) }}" placeholder="Masukkan username">
                      @error('username')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="password" class="col-md-2 col-form-label text-center">Password</label>
                    <div class="input-group col-md-10">
                      <div class="input-group">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" value="{{ old('password', $user->password ) }}" placeholder="Masukan password baru" aria-describedby="show">
                        <input type="button" name="submit" value="Show" id="Show" onclick="ShowPassword()" class="btn btn-outline-primary">
						            <input type="button" style="display:none" id="Hide" value="Hide" onclick="HidePassword()" class="btn btn-primary">
                      @error('password')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
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
</div>
</div>

<script src="{{ asset('/js/script.js') }}"></script>
@endsection