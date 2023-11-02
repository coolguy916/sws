@extends('layouts.layMain')
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
            <div class="row">
                @include('element.led-esp')
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
                @include('element.btn-esp')
            </div>
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">
                            {{ __('Schedule') }}
                        </h2>
                        <div class="card-tools">
                            <button type="button" class="btn btn-outline-dark btn-sm" data-bs-toggle="modal" data-bs-target="#addSchedule">
                                <i class="fas fa-plus"></i> Input Data
                            </a>
                        </div>
                    </div>
                    <div class="modal fade" id="addSchedule" tabindex="-1" aria-labelledby="addScheduleLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Schedule</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form class="form-horizontal" method="POST" action="{{route('data.store')}}" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group row">
                                    <label for="schedule"
                                        class="col-sm-3 text-end control-label col-form-label">Set Schedule</label>
                                    <div class="col-sm-9">
                                        <input type="time" class="form-control" id="schedule" name="schedule"
                                            style="padding: 10px; border: 2px solid #ccc;">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="moduleLocation"
                                        class="col-sm-3 text-end control-label col-form-label">Module Location</label>
                                    <div class="col-sm-9">
                                        <select name="modulelocation" id="modulelocation" style="width:100%; padding: 10px; border: 2px solid #ccc;">
                                            <option selected disabled>Select Location Module</option>
                                            <option value="">Module 1</option>
                                            <option value="">Module 2</option>
                                            <option value="">Module 3</option>
                                            <option value="">Module 4</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-danger text-center">
                            No Data To Be Read
                        </div>

                        <!-- Tabel -->

                        <table class="table table-striped table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Schedule</th>
                                    <th>Module Location</th>
                                    <th>Runtime</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($datas as $data)
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{ \Carbon\Carbon::parse($data->schedule)->format('g:i A') }}</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>
                                        @if ($data->status == 1)
                                            <p class="border border-primary d-inline-flex p-1 text-white bg-success rounded">
                                                ONLINE
                                            </p>
                                        @else
                                            <p class="border border-primary d-inline-flex p-1 text-white bg-success rounded">
                                                OFFLINE
                                            </p>
                                        @endif

                                    </td>
                                    <td>
                                        <a href="" class="btn btn-warning btn-sm">EDIT</a>
                                        <form action="{{route('data.delete', $data->id)}}" onsubmit="return confirm('Are you sure?')" method="POST">
                                            @csrf
                                            {{ method_field('delete') }}
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                @empty

                                @endforelse
                                {{-- <tr>
                                    <td>lorem</td>
                                    <td>lorem</td>
                                    <td>00.00</td>
                                    <td>
                                        <p class="border border-primary d-inline-flex p-1 text-white bg-success rounded">
                                            ONLINE
                                        </p>
                                    </td>
                                    <td>
                                        <form action="" onsubmit="" method="POST">
                                            <a href="/" class="btn btn-warning btn-sm">Edit</a>
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr> --}}
                            </tbody>
                        </table>
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
