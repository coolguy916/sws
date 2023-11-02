@extends('layouts.layAdmin')
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Data User</h4>
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
                            {{ __('Schedule') }}
                        </h2>
                        <div class="card-tools">
                            <a href="{{ route('form_user') }}" class="btn btn-outline-dark btn-sm">
                                <i class="fas fa-plus"></i> Input Data User
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-danger text-center">
                            No Data To Be Read
                        </div>

                        <!-- Tabel -->

                        <table class="table">
                            <thead>
                                <tr>
                                <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Modul</td>
                                    <th>Role</th>

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <td>1</td>
                                    <td>Adji</td>
                                    <td>Siapa aja</td>
                                    <td>3</td>
                                    <td>Admin</td>
                                    <td>
                                        <form action="" onsubmit="" method="POST">
                                            <a href="/" class="btn btn-warning btn-sm">Edit</a>
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
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
