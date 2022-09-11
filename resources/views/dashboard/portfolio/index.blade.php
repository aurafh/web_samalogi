@extends('dashboard.layouts.main')


@section('container')

<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-wrapper-before"></div>
    <div class="content-header row">
      <div class="content-header-left col-md-4 col-12 mb-2">
        <h3 class="content-header-title">Content Portfolio</h3>
      </div>
      <div class="content-header-right col-md-8 col-12">
        <div class="breadcrumbs-top float-md-right">
          <div class="breadcrumb-wrapper mr-1">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/dashboard/portfolio">CRUD</a>
              </li>
              <li class="breadcrumb-item active">Portfolio
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
              <a href="/dashboard/portfolio/create" class="btn btn-primary">Tambah Portfolio</a>
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
                      <th scope="col">Nama Portfolio</th>
                      <th scope="col">Deskripsi</th>
                      <th scope="col">Features</th>
                      <th scope="col">Training</th>
                      <th scope="col">Image 1</th>
                      <th scope="col">Image 2</th>
                      <th scope="col">Image 3</th>
                      <th scope="col">Image 4</th>
                      <th scope="col">Setting</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($portfolios as $portfolio)
                    <tr>
                      <td scope="col">{{ Str::limit($portfolio->nama_portfolio, 30, '...') }}</td>
                      <td scope="col">{{ Str::limit($portfolio->deskripsi, 30, '...') }}</td>
                      <td scope="col">{{ Str::limit($portfolio->features, 30, '...') }}</td>
                      <td scope="col">{{ Str::limit($portfolio->training, 30, '...') }}</td>
                      <td class="text-center">
                        @if ($portfolio->image1)
                            <img src="{{asset('storage/'. $portfolio->image1)}}" alt="logo portfolio"  class="rounded" style="width: 80px">
                        @else
                            <p class="fs-4">Tidak Ada Gambar!</p>
                        @endif   
                      </td>
                      <td class="text-center">
                        @if ($portfolio->image2)
                            <img src="{{asset('storage/'. $portfolio->image2)}}" alt="logo portfolio"  class="rounded" style="width: 80px">
                        @else
                            <p class="fs-4">Tidak Ada Gambar!</p>
                        @endif   
                      </td>
                      <td class="text-center">
                        @if ($portfolio->image3)
                            <img src="{{asset('storage/'. $portfolio->image3)}}" alt="logo portfolio"  class="rounded" style="width: 80px">
                        @else
                            <p class="fs-4">Tidak Ada Gambar!</p>
                        @endif   
                      </td>
                      <td class="text-center">
                        @if ($portfolio->image4)
                            <img src="{{asset('storage/'. $portfolio->image4)}}" alt="logo portfolio"  class="rounded" style="width: 80px">
                        @else
                            <p class="fs-4">Tidak Ada Gambar!</p>
                        @endif   
                      </td>
                        <td class="text-center">
                          <div class="dropdown-right">
                            <a href="#" class="hide-arrow" role="button" data-toggle="dropdown" aria-expanded="false">
                              <i class="la la-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="{{ route('portfolio.show', $portfolio->id) }}">
                                <i class="ft-eye"></i> Detail</a>
                              <a class="dropdown-item" href="{{ route('portfolio.edit', $portfolio->id) }}">
                                <i class="ft-edit"></i> Edit</a>
                              <a class="dropdown-item" href="/dashboard/portfolio/{{ $portfolio->id }}/confirm">
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