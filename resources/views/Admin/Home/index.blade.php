@extends('layouts.layAdmin')
@section('content')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>
    <body>

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
                        <h2 class="card-title">
                            {{ __('Module') }}
                        </h2>
                        <div class="card-tools">
                          <a href="" class="btn btn-outline-dark btn-sm"  data-bs-toggle="modal" data-bs-target="#addModal" >
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
                                    <th>time</th>
                                    <th>status</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                               
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
                                </tr>
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
    @include('Admin.add_module_modal')

  @include('Admin.module_js')
     </body>
</html>
@endsection
