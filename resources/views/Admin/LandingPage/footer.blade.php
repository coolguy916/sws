@extends('layouts.layAdmin')
@section('content')
@include('Admin.landingpage.footer.add_footer_modal')
@include('Admin.landingpage.footer.update_fitur_modal')
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
                        {{ __('Fitur-fitur ') }}
                    </h2>
                    <div class="card-tools">
                        <button type="button" class="btn btn-outline-dark btn-sm open_footer" data-bs-toggle="modal" data-bs-target="#footer">
                            <i class="fas fa-plus"></i> Add Footer
                        </button>

                    </div>
                </div>
                <div class="card-body overflow-auto">
               
                    <table class="table table-striped table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                 <th>judul</th>
                                <th>Keterangan</th>
                                <th>Alamat</th>
                                <th>Email</th>
                                <th>No. Hp</th>
                                <th>Instagram</th>
                                <th>Youtube</th>
                                <th>Status</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                    $no = 1;
                                    @endphp
                            @foreach ($footer as $row )
                            <td>{{ $row->id }}</td>
                            <td> <img src="{{ asset('storage/logo/'.$row->image) }}" class="rounded" style="width: 150px"></td>
                            <td>{{ $row->judul}}</td>
                            <td>{{ $row->deskripsi}}</td>
                            <td>{{ $row->alamat}}</td>
                            <td>{{ $row->email}}</td>
                            <td>{{ $row->phone}}</td>
                            <td>{{ $row->instagram}}</td>
                            <td>{{ $row->youtube}}</td>
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
                                <button type="button" class="btn btn-primary edit_footer" data-id="{{ $row->id }}" data-judul="{{ $row->judul }}" data-deskripsi="{{ $row->deskripsi }}" data-alamat="{{ $row->alamat }}" data-email="{{ $row->email }}" data-phone="{{ $row->phone }}" data-youtube="{{ $row->youtube }}" data-instagram="{{ $row->instagram }}" data-status="{{ $row->status }}">Edit</button>

                                <button type="button" class="btn btn-danger delete_footer" data-id="{{ $row->id }}">
                                    Delete
                                </button>                                
                            </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>

<div class="pagination justify-content-center">
                                       {!! $footer->links() !!}
            
</div>                </div>
            </div>
        </div>

       
        
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
@endsection