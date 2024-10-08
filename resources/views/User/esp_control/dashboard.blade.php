@extends('template2.layout.layout_user')
@section('content')
    @include('User.esp_control.schedulemodal')

    <!-- Content Modul Card -->
    <div class="container-fluid py-4">

        <!-- esp controller -->
        @include ('template2.user.esp-controller')

        <!-- end esp controller -->
        <div class="row">

            <!-- Table Schedule Dashboard -->
            <div class="col-lg-7 mb-lg-0 mb-4">
                <div class="card" style="height: 300px;">
                    <div class="card-header pb-0 p-3">
                        <div class="d-flex justify-content-between">
                            <h6 class="mb-2">Schedule</h6>
                            <p class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><a
                                    href="{{ route('schedule.index') }}">more...</a></p>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-striped">
                            <thead>
                                <tr>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        No</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Schedule</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Location</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Runtime</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($espControls->isEmpty())
                                    <tr>
                                        <td colspan="6" class="text-center p-5">Silahkan Isi data.</td>
                                    </tr>
                                @else
                                    @foreach ($espControls as $index => $control)
                                        <tr>
                                            <td class="text-center text-secondary text-xs font-weight-bold">
                                                {{ $index + 1 }}</td>

                                            <td class="text-center text-secondary text-xs font-weight-bold">
                                                {{ \Carbon\Carbon::parse($control->schedule)->format('h:i A') }}</td>

                                            <td class="text-center text-secondary text-xs font-weight-bold">
                                                {{ $control->lokasi }}</td>
                                            <td class="text-center text-secondary text-xs font-weight-bold">
                                                {{ $control->runtime }}</td>

                                            <td class="text-center text-secondary text-xs font-weight-bold">
                                                <p
                                                    class="border border-primary d-inline-flex p-1 text-white bg-success rounded">
                                                    ONLINE</p>
                                            </td>

                                        </tr>
                                    @endforeach
                                @endif

                            </tbody>

                            <!-- isi tabel -->
                        </table>

                        <!-- pagination -->
                        <!-- <nav aria-label="Page navigation example">
                                            <ul class="pagination d-flex justify-content-center">
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Previous">
                                                        <span aria-hidden="true">&laquo;</span>
                                                    </a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Next">
                                                        <span aria-hidden="true">&raquo;</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav> -->

                    </div>
                </div>
            </div>


            <!-- New Update Carausel Dashboard -->
            <div class="col-lg-5">
                <div class="card card-carousel overflow-hidden h-100 p-0">
                    <div id="carouselExampleCaptions" class="carousel slide h-100" data-bs-ride="carousel">
                        <div class="carousel-inner border-radius-lg h-100">
                            @foreach ($news as $index => $carousel)
                                <div class="carousel-item h-100 {{ $index == 0 ? 'active' : '' }}"
                                    style="background-image: url('{{ asset('storage/news/' . $carousel->image) }}'); background-size: cover;">
                                    <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                                        <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                            <img src="{{ asset('storage/icon/' . $carousel->icon) }}" class="icon-img" />

                                        </div>

                                        <h5 class="text-white mb-1">{{ $carousel->judul }}</h5>
                                        <p>{{ $carousel->teks }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev w-5 me-3" type="button"
                            data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next w-5 me-3" type="button"
                            data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>

        </div>
        <div class="row mt-4">
            <!-- statistic -->
            <div class="col-lg-7 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <h6 class="text-capitalize">Volt Meter</h6>
                        {{-- <p class="text-sm mb-0">
                            <i class="fa fa-arrow-up text-success"></i>
                            <span id="percentagePower-change" class="font-weight-bold"></span> than last week
                            <span id="percentageKwh-change" class="font-weight-bold"></span> than last week
                        </p> --}}
                    </div>
                    <div class="card-body p-3">
                        <div class="chart">
                            <canvas id="chart-power" class="chart-canvas" height="300" style="display: block;"></canvas>
                            <canvas id="chart-kwh" class="chart-canvas" height="300" style="display: none;"></canvas>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Categories Consumtion Meter  -->
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-header pb-0 p-3">
                        <h6 class="mb-0">Categories</h6>
                    </div>
                    <div class="card-body p-3">
                        <ul class="list-group">
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                <div class="d-flex align-items-center">
                                    <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                        <i class="fa fa-bolt text-white opacity-10" aria-hidden="true"></i>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-1 text-dark text-sm">Kwh</h6>
                                        <span class="text-xs last-data-text"></span>
                                        <span class="text-xs">
                                            <span id="kwh-categories" class="font-weight-bold"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <button id="kwh-toggle"
                                        class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                            class="ni ni-bold-right" aria-hidden="true"></i></button>
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                <div class="d-flex align-items-center">
                                    <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                        <i class="fa fa-bolt text-white opacity-10" aria-hidden="true"></i>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-1 text-dark text-sm">Watts</h6>
                                        <span class="text-xs last-data-text"></span>
                                        <span class="text-xs">
                                            <span id="watt-categories" class="font-weight-bold"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <button id="power-toggle"
                                        class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                            class="ni ni-bold-right" aria-hidden="true"></i></button>
                                </div>
                            </li>

                            <hr class="w-full text-bg-dark">

                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                <div class="d-flex align-items-center">
                                    <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                        <i class="fa fa-plug-circle-bolt text-white opacity-10" aria-hidden="true"></i>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-1 text-dark text-sm">Voltage</h6>
                                        <span class="text-xs last-data-text"></span>
                                        <span class="text-xs">
                                            <span id="volt-categories" class="font-weight-bold"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <button
                                        class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                            class="ni ni-bold-right" aria-hidden="true"></i></button>
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                                <div class="d-flex align-items-center">
                                    <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                        <i class="fa fa-plug-circle-bolt text-white opacity-10" aria-hidden="true"></i>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-1 text-dark text-sm">Ampere</h6>
                                        <span class="text-xs last-data-text"></span>
                                        <span class="text-xs">
                                            <span id="ampe-categories" class="font-weight-bold"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <button
                                        class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                            class="ni ni-bold-right" aria-hidden="true"></i></button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <!-- footer -->
            <footer class="footer pt-3  ">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-6 mb-lg-0 mb-4">
                            <div class="copyright text-center text-sm text-muted text-lg-start">
                                ©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>,
                                made with <i class="fa fa-heart"></i> by
                                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative
                                    Tim</a>
                                for a better web.
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com" class="nav-link text-muted"
                                        target="_blank">Creative Tim</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted"
                                        target="_blank">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/blog" class="nav-link text-muted"
                                        target="_blank">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted"
                                        target="_blank">License</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <style>
            .icon-img {
                width: 30px;
                /* Ubah ukuran ini sesuai dengan ukuran ikon */
                height: 30px;
                /* Ubah ukuran ini sesuai dengan ukuran ikon */
                object-fit: cover;
                /* Menjaga aspek gambar tetap sesuai proporsi */
                margin: auto;
                /* Posisikan gambar di tengah ikon */
                display: block;
                /* Agar gambar tetap berada dalam blok */
            }
        </style>
    @endsection
