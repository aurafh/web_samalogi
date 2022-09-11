@extends('dashboard.layouts.main')


@section('container')
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-wrapper-before"></div>
    <div class="content-header row">
      <div class="content-header-left col-md-4 col-12 mb-2">
        <h3 class="content-header-title">Content Contact & Address</h3>
      </div>
      <div class="content-header-right col-md-8 col-12">
        <div class="breadcrumbs-top float-md-right">
          <div class="breadcrumb-wrapper mr-1">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/dashboard/contact">CRUD</a>
              </li>
              <li class="breadcrumb-item active">Contact
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

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <a href="/dashboard/contact/create" class="btn btn-primary">Tambah Contact</a>
              <div class="heading-elements">
                <ul class="list-inline mb-0">
                  <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                  <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                  <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                  <li><a data-action="close"><i class="ft-x"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="card-content collapse show">
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr class="text-center">
                      <th scope="col">Alamat</th>
                      <th scope="col">Email</th>
                      <th scope="col">Maps</th>
                      <th scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($contacts as $contact)
                    <tr>
                      <td scope="col">{{ $contact->alamat }}</td>
                      <td scope="col">{{ $contact->email }}</td>
                      <td scope="col">{{ Str::limit($contact->maps, 60, '...') }}</td>
                      <td class="text-center">
                        <div class="dropdown-right">
                          <a href="#" class="hide-arrow" role="button" data-toggle="dropdown" aria-expanded="false">
                            <i class="la la-ellipsis-v"></i>
                          </a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('contact.show', $contact->id) }}">
                              <i class="ft-eye"></i> Detail</a>
                            <a class="dropdown-item" href="{{ route('contact.edit', $contact->id) }}">
                              <i class="ft-edit"></i> Edit</a>
                            <a class="dropdown-item" href="/dashboard/contact/{{ $contact->id }}/confirm">
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
   <!-- Striped rows end -->
  

@endsection