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
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <div class="d-flex flex-row">
                <div class="row">
                    @include('element.btn-esp')
                </div>
            </div>
            <div class="row">
                <div class="card">
                    <div class="card-header">

                            <h2>
                                {{ __('Schedule') }}
                            </h2>
                            <div class="time">
                            </div>
                        <h2>
                            {{ __('Schedule') }}
                        </h2>
                        <div class="time">


                        <div class="card-tools">
                            <button type="button" id="addSchedule" class="btn btn-outline-dark btn-md"
                                data-bs-toggle="modal" data-bs-target="#AddScheduleModal">
                                <i class="fas fa-plus"></i> Input Data
                                </a>
                        </div>
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
                        </tbody>
                    </table>
                    <div class="pagination-container">
                    </div>
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

    {{-- @forelse ($datas as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ \Carbon\Carbon::parse($data->schedule)->format('g:i A') }}</td>
                                    <td>{{ $data->lokasi }}</td>
                                    <td>{{ $data->runtime }} Menit</td>
                                    <td>
                                        @if ($data->status == 1)
                                            <p
                                                class="border border-primary d-inline-flex p-1 text-white bg-success rounded">
                                                ONLINE
                                            </p>
                                        @else
                                            <p
                                                class="border border-primary d-inline-flex p-1 text-white bg-secondary rounded">
                                                OFFLINE
                                            </p>
                                        @endif

                                    </td>
                                    <td>
                                        <form action="{{ route('schedule.destroy', $data->id) }}"
                                            onsubmit="return confirm('Are you sure?')" method="POST">
                                            <a href="{{ route('schedule.edit', $data->id) }}"
                                                class="btn btn-warning btn-sm">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <div class="card-body">
                                    <div class="alert alert-danger text-center">
                                        No Data To Be Read
                                    </div>
                            @endforelse --}}
@endsection
