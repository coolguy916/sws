@extends('layouts.layMain')
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Form Basic</h4>
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
            <!-- Start Page Content -->
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <form class="form-horizontal" method="POST" action="#" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <h4 class="card-title">Laporan Info</h4>
                                {{-- <div class="form-group row">
                                    <label for="runtime"
                                        class="col-sm-3 text-end control-label col-form-label">Runtime</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="number" name="number"
                                            placeholder="Enter Here" required>
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">Minutes</div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="form-group row">
                                    <label for="schedule"
                                        class="col-sm-3 text-end control-label col-form-label">Set Schedule</label>
                                    <div class="col-sm-9">
                                        <input type="time" class="form-control" id="time" name="time" required
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
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- editor -->
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
@endsection
