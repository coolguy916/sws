<div class="container-xxl py-6" id="keunggulan">
    <div class="container">
        <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Keunggulan Kami</div>
            <h2 class="mb-5">Dirancang khusus untuk memberikan solusi terbaik bagi kebutuhan Anda</h2>
        </div>
        <div class="row g-4">
            @if($keunggulan->isEmpty())
            <div class="container-xxl py-6" id="keunggulan">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item rounded h-100">
                                <div class="d-flex justify-content-between">
                                    <div class="service-icon">
                                        <i class="fas fa-exclamation-circle fa-2x"></i>
                                    </div>
                                </div>
                                <div class="p-5">
                                    <h5 class="mb-3">Data Kosong</h5>
                                    <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="service-item rounded h-100">
                                <div class="d-flex justify-content-between">
                                    <div class="service-icon">
                                        <i class="fas fa-exclamation-circle fa-2x"></i>
                                    </div>
                                </div>
                                <div class="p-5">
                                    <h5 class="mb-3">Data Kosong</h5>
                                    <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="service-item rounded h-100">
                                <div class="d-flex justify-content-between">
                                    <div class="service-icon">
                                        <i class="fas fa-exclamation-circle fa-2x"></i>
                                    </div>
                                </div>
                                <div class="p-5">
                                    <h5 class="mb-3">Data Kosong</h5>
                                    <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item rounded h-100">
                                <div class="d-flex justify-content-between">
                                    <div class="service-icon">
                                        <i class="fas fa-exclamation-circle fa-2x"></i>
                                    </div>
                                </div>
                                <div class="p-5">
                                    <h5 class="mb-3">Data Kosong</h5>
                                    <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="service-item rounded h-100">
                                <div class="d-flex justify-content-between">
                                    <div class="service-icon">
                                        <i class="fas fa-exclamation-circle fa-2x"></i>
                                    </div>
                                   
                                </div>
                                <div class="p-5">
                                    <h5 class="mb-3">Data Kosong</h5>
                                    <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="service-item rounded h-100">
                                <div class="d-flex justify-content-between">
                                    <div class="service-icon">
                                        <i class="fas fa-exclamation-circle fa-2x"></i>
                                    </div>
                                   
                                </div>
                                <div class="p-5">
                                    <h5 class="mb-3">Data Kosong</h5>
                                    <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
                @php
                    $delay = 0.1;
                @endphp
                @foreach($keunggulan as $row)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{ $delay }}s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="{{ $row->icon }}"></i>
                                </div>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">{{ $row->judul }}</h5>
                                <span>{{ $row->teks }}</span>
                            </div>
                        </div>
                    </div>
                    @php
                        $delay += 0.2; 
                    @endphp
                @endforeach
            @endif
        </div>
    </div>
</div>
