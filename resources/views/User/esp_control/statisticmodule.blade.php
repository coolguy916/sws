@extends('layouts.layMain')
@section('content')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h2 class="page-title">Statistic</h2>
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
        <div class="container-fluid">
            {{-- <h4 class="page-title">Module 1</h4>
            <div class="card h-full">
                <div class="card-body" style="height: 50vh; display: flex; flex-direction: column;">
                    <canvas id="myChart1" style="flex: 1;"></canvas>
                </div>
            </div> --}}

            <div id="dynamicChartsContainer" class="container mt-4"></div>
        </div>
    </div>
@endsection
