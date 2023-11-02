@extends('layouts.layAdmin')
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
                                <div class="form-group row">
                                    <label for="text"
                                        class="col-sm-3 text-end control-label col-form-label">Text</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="text" name="text"
                                            placeholder="Teks" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="number"
                                        class="col-sm-3 text-end control-label col-form-label">number</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" id="number" name="number"
                                            placeholder="Number" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="time"
                                        class="col-sm-3 text-end control-label col-form-label">Time</label>
                                    <div class="col-sm-9">
                                        <input type="time" class="form-control" id="time" name="time" required
                                            style="padding: 10px; border: 2px solid #ccc;">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="gambar"
                                        class="col-sm-3 text-end control-label col-form-label">Gambar</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control @error('gambar') is-invalid @enderror"
                                            name="gambar" required>
                                        {{-- @error('gambar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror --}}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="content" class="col-sm-3 text-end control-label col-form-label">Text
                                        Area</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="5"
                                            placeholder="Text Area" required>{{ old('content') }}</textarea>
                                        {{-- @error('content')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror --}}
                                    </div>
                                </div>

                                {{-- <input type="hidden" name="id_user" value="{{ auth()->user()->id }}"> --}}

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
