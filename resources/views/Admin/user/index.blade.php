@extends('layouts.layAdmin')
@section('content')
@include('Admin.user.update_user_modal')

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
                        <h2 class="card-title">
                            {{ __('Data User') }}
                        </h2>
                        <div class="card-tools">
                            <!-- <a href="#" class="btn btn-outline-dark btn-sm">
                                <i class="fas fa-plus"></i> Input Data User
                            </a> -->
                        </div>
                    </div>
                    <div class="card-body overflow-auto">
                        <!-- Tabel -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @foreach($users as $user)
                            <tbody>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->phone}}</td>
                                    <td>{{$user->role}}</td>
                                    <td>
                                        <a href="" class="btn btn-warning btn-sm update_user_form" data-bs-toggle="modal" data-bs-target="#updateModal" data-id="{{ $user->id }}" data-role="{{ $user->role }}"   >
                                Edit
                                </a>
                                                                <a href="" class="btn btn-danger btn-sm delete_user" data-id="{{ $user->id }}" data-role="{{ $user->role }}">Hapus</a>

                                    </td>
                            </tbody>
                            @endforeach()
                            </table>
                    </div>
                </div>
            </div>
          
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
@endsection

