@extends('layouts.layAdmin')
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Dashboard</h4>
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Library
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title mb-2">
                            {{ __('Module') }}
                        </h2>
                        <div class="card-tools">
                            <a type="button" class="btn btn-outline-dark btn-sm" data-bs-toggle="modal" data-bs-target="#addModal">
                                <i class="fas fa-plus"></i> Input Data
                            </a>

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-danger text-center">
                            No Data To Be Read
                        </div>
                        <table class="table table-striped table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th>no</th>
                                    <th>location</th>
                                    <th>status</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                             @php
                                $no = 1;
                                @endphp
                                @foreach ($module as $index=>$row )
                               
                                 <th scope="row">{{ $index +$module->firstitem()}}</th>
                                    <td>{{ $row->lokasi }}</td>
                                   <td>
                       @if ($row->status == 1)
                                            <p class="border border-primary d-inline-flex p-1 text-white bg-success rounded">
                                                ONLINE
                                            </p>
                                        @else
                                            <p class="border border-dark d-inline-flex p-1 text-white bg-dark rounded">
                                                OFFLINE
                                            </p>
                                        @endif
                </td>
                                    <td>
                                            <a href="/" class="btn btn-warning btn-sm">Edit</a>
<a href="" class="btn btn-danger btn-sm delete_product " data-id="{{ $row->id }}" data-lokasi="{{ $row->lokasi }}">Hapus</a>
                                    </td>
                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                         {!!$module->links()!!}
                    </div>
                </div>
            </div>

              <div class="modal fade" id="addlocation" tabindex="-1" aria-labelledby="addlocation" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Schedule</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form class="form-horizontal" method="POST" action="{{route('store.module')}}" enctype="multipart/form-data">
                            @csrf
                               <div class="form-group row">
                                    <label for="text"
                                        class="col-sm-3 text-end control-label col-form-label">Location </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('title') is-invalid @enderror"  value="{{ old('lokasi') }}" id="lokasi" name="lokasi"
                                            placeholder="Tuliskan tempat module" required>
                                              <!-- error message untuk title -->
                                @error('lokasi')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                                    </div>
                                </div>
                                 <div class="mb-3">
                                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                </div>

                            </div>
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                        </div>
                      </div>
                    </div>
            <footer class="footer text-center mt-4">
                All Rights Reserved by Matrix-admin. Designed and Developed by
                <a href="https://www.wrappixel.com">WrapPixel</a>.
            </footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    
@endsection
