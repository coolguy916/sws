@extends('layouts.layAdmin')
@section('content')
@include('Admin.landingpage.imageslider.add_image_modal')
@include('Admin.landingpage.imageslider.update_image_modal')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
           
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
                        {{ __('Image Slider ') }}
                    </h2>
                    <div class="card-tools">
                        <a type="button" class="btn btn-outline-dark btn-sm" data-bs-toggle="modal" data-bs-target="#addimages">
                            <i class="fas fa-plus"></i> Input Data
                        </a>

                    </div>
                </div>
                <div class="card-body overflow-auto">
               
                    <table class="table table-striped table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Keterangan</th>
                                                                <th>sub</th>
                                <th>Status</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                    $no = 1;
                                    @endphp
                            @foreach ($slider as $row )
                            <tr class="slider-row" data-id="{{ $row->id }}">
                                <td>{{ $row->id }}</td>
                                <td><img src="{{ asset('storage/imageslider/'.$row->image) }}" class="rounded" style="width: 150px"></td>
                                <td>{{ $row->body }}</td>
                                <td>{{ $row->sub }}</td>
                                <td>
                                    @if ($row->status == 1)
                                    <p class="border border-primary d-inline-flex p-1 text-white bg-success rounded">ONLINE</p>
                                    @else
                                    <p class="border border-dark d-inline-flex p-1 text-white bg-dark rounded">OFFLINE</p>
                                    @endif
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary edit_image" data-id="{{ $row->id }}" data-body="{{ $row->body }}" data-sub="{{ $row->sub }}" data-status="{{ $row->status }}">Edit</button>
                                    <a href="" class="btn btn-danger btn-sm delete_product" data-id="{{ $row->id }}" data-lokasi="{{ $row->lokasi }}">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

<div class="pagination justify-content-center">
                                       {!! $slider->links() !!}
            
</div>                </div>
            </div>
        </div>

       
      
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
@endsection