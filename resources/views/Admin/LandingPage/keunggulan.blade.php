@extends('layouts.layAdmin')
@section('content')
@include('Admin.landingpage.keunggulan.add_keunggulan_modal')
@include('Admin.landingpage.keunggulan.update_keunggulan_modal')
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
                        {{ __('Keunggulan ') }}
                    </h2>
                    <div class="card-tools">
                        <button type="button" class="btn btn-outline-dark btn-sm open_keunggulan" data-bs-toggle="modal" data-bs-target="#keunggulan">
                            <i class="fas fa-plus"></i> Add Keunggulan
                        </button>
                        

                    </div>
                </div>
                <div class="card-body overflow-auto">
               
                    <table class="table table-striped table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Icon</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Status</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                    $no = 1;
                                    @endphp
                            @foreach ($keunggulan as $row )
                            <tr class="keunggulan-row" data-id="{{ $row->id }}">

                            <td>{{ $row->id }}</td>
                            <td>{{ $row->icon }}</td>
                            <td>{{ $row->judul}}</td>
                            <td>{{ $row->teks}}</td>
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
                               
                                <button type="button" class="btn btn-primary edit_keunggulan" data-id="{{ $row->id }}" data-judul="{{ $row->judul }}" data-teks="{{ $row->teks }}" data-status="{{ $row->status }}" data-icon="{{ $row->icon }}">Edit</button>

                                <button type="button" class="btn btn-danger delete_keunggulan" data-id="{{ $row->id }}">
                                    Delete
                                </button>                            
                            </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>

<div class="pagination justify-content-center">
                                       {!! $keunggulan->links() !!}
            
</div>                </div>
            </div>
        </div>

       
       
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
@endsection