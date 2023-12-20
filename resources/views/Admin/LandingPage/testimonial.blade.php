@extends('layouts.layAdmin')
@section('content')
@include('Admin.landingpage.testimonial.add_testimonial_modal')
@include('Admin.landingpage.testimonial.update_testimonial_modal')
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
                        {{ __('Testimonial') }}
                    </h2>
                    <div class="card-tools">
                        <a type="button" class="btn btn-outline-dark btn-sm" data-bs-toggle="modal" data-bs-target="#addtesti">
                            <i class="fas fa-plus"></i> Input Data
                        </a>

                    </div>
                </div>
                <div class="card-body overflow-auto">
               
                    <table class="table table-striped table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Tanggapan Alat</th>
                               
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                    $no = 1;
                                    @endphp
                            @foreach ($testimonial as $row )
                            <td>{{ $row->id }}</td>
                             <td>{{ $row->judul}}</td>
                            <td>{{ $row->teks}}</td>
                            <td>
                                <a href="" class="btn btn-warning btn-sm update_product_form" data-bs-toggle="modal" data-bs-target="#updateModal" data-id="{{ $row->id }}" data-lokasi="{{ $row->lokasi }}"  data-user-id="{{ auth()->user()->id }}" >
                                Edit
                                </a>
                                <a href="" class="btn btn-danger btn-sm delete_product " data-id="{{ $row->id }}" data-lokasi="{{ $row->lokasi }}">Hapus</a>
                            </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>

<div class="pagination justify-content-center">
                                       {!! $testimonial->links() !!}
            
</div>                </div>
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