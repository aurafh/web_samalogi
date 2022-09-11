@extends('dashboard.layouts.main')


@section('container')
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-wrapper-before"></div>
    <div class="content-header row">
      <div class="content-header-left col-md-4 col-12 mb-2">
        <h3 class="content-header-title">Content About Us</h3>
      </div>
      <div class="content-header-right col-md-8 col-12">
        <div class="breadcrumbs-top float-md-right">
          <div class="breadcrumb-wrapper mr-1">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/dashboard/about-us">CRUD</a>
              </li>
              <li class="breadcrumb-item active">About Us
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="content-body">
      <!-- Bar charts section start -->
        @if (session()->has('success'))
          {{ session('success') }}
        @endif

      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <a href="/dashboard/about-us/create" class="btn btn-primary">Tambah About Us</a>
            <div class="heading-elements">
              <ul class="list-inline mb-0">
                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                <li><a data-action="close"><i class="ft-x"></i></a></li>
              </ul>
            </div>
          </div>
            <div class="table-responsive text-nowrap">
              <table class="table table-striped">
                <thead>
                  <tr class="text-center">
                    <th>Isi About</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                  @foreach ($about as $aboutUs)
                    <tr>
                      <td>{{ Str::limit($aboutUs->isi, 120, '...') }}</td>
                      <td>
                      <div class="dropdown-right">
                        <a href="#" class="hide-arrow" role="button" data-toggle="dropdown" aria-expanded="false">
                          <i class="la la-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="{{ route('about-us.show', $aboutUs->id) }}">
                            <i class="ft-eye"></i> Detail</a>
                          <a class="dropdown-item" href="{{ route('about-us.edit', $aboutUs->id) }}">
                            <i class="ft-edit"></i> Edit</a> 
                          <a class="dropdown-item" href="/dashboard/about-us/{{ $aboutUs->id }}/confirm">
                            <i class="ft-trash"></i> Hapus</a>
                        </div>
                        </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Striped end -->

@endsection
