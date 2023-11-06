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
                        <form class="form-horizontal" method="POST" action="{{route('schedule.update', $data->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <h4 class="card-title">Edit Schedule</h4>
                                <div class="form-group row">
                                    <label for="schedule"
                                        class="col-sm-3 text-end control-label col-form-label">Set Schedule</label>
                                    <div class="col-sm-9">
                                        <input type="time" class="form-control @error('schedule') is-invalid @enderror" value="{{old('schedule', $data->schedule)}}" id="schedule" name="schedule"
                                            style="padding: 10px; border: 2px solid #ccc;">

                                        @error('schedule')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="runtime"
                                        class="col-sm-3 text-end control-label col-form-label">Runtime</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="number" class="form-control @error('runtime') is-invalid @enderror" value="{{old('runtime', $data->runtime)}}" id="runtime" name="runtime"
                                            placeholder="Enter Here"
                                            style="padding: 10px; border: 2px solid #ccc;">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">Seconds</div>
                                            </div>
                                        </div>
                                        @error('runtime')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="id_module"
                                        class="col-sm-3 text-end control-label col-form-label">Module Location</label>
                                    <div class="col-sm-9">
                                        <select name="id_module" id="id_module" style="width:100%; padding: 10px; border: 2px solid #ccc;">
                                            <option selected disabled>Select Location Module</option>
                                            @foreach ($modules as $module)
                                                <option value="{{$module->id}}" {{$module->id == $data->id_module ? 'selected' : ''}}>{{$module->lokasi}}</option>
                                            @endforeach
                                        </select>
                                    </div>
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
