@extends('layouts.layAdmin')
@section('content')
@include('Admin.landingpage.imageslider.add_image_modal')
@include('Admin.landingpage.imageslider.update_image_modal')
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title mb-2">
                        {{ __('Image Slider ') }}
                    </h2>
                </div>
                <div class="card-body overflow-auto">
                    <form action="{{ route('syarat-dan-ketentuan.update') }}" method="POST">
                        @csrf

                    <textarea name="teks" id="summernote">{!! $termsAndConditions->teks !!}</textarea>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
