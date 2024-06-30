@extends('layouts.layAdmin')
@section('content')
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Deskripsi</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">{{ __('Deskripsi') }}</h2>
                </div>
                <div class="card-body overflow-auto">
                    <form id="myform" class="form-horizontal" method="POST" action="{{ route('deskripsi.update') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="judul" class="col-sm-3 text-right control-label col-form-label">Judul:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('judul') is-invalid @enderror" value="{{ $deskripsi->judul }}" id="judul" name="judul" placeholder="Tuliskan Judul Deskripsi" required>
                                    @error('judul')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="link" class="col-sm-3 text-right control-label col-form-label">Link:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('link') is-invalid @enderror" value="{{ old('link', $deskripsi->link) }}" id="link" name="link" placeholder="Tuliskan Link Youtube" required>
                                    @error('link')  
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="deskripsi" class="col-sm-3 text-right control-label col-form-label">Deskripsi Singkat:</label>
                                <div class="col-sm-9">
                                    <textarea name="deskripsi" id="deskripsi" class="form-control">{!! old('deskripsi', $deskripsi->deskripsi) !!}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" id="submitButton" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer class="footer text-center mt-4">
            All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://www.wrappixel.com">WrapPixel</a>.
        </footer>
    </div>
</div>
@endsection
