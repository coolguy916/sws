<div class="container-xxl py-6" id="tentang">
    <div class="container">
        <div class="row g-5 align-items-center">
            @if($deskripsi->isEmpty())
            <div class="container-xxl py-6" id="tentang">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
                            <div class="video-container">
                                <img class="img-fluid" src="{{ asset('landing_page/img/No-video.png') }}">
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Apa Itu?</div>
                            <h2 class="mb-4">Mohon Maaf data masih kosong</h2>
                            <p class="mb-4">Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor</p>
                            <div class="row g-3 mb-4">
                               
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
                @foreach ($deskripsi as $row)
                    <div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
                        <div class="video-container">
                            <iframe width="560" height="410" src="{{ $row->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Apa Itu?</div>
                        <h2 class="mb-4">{{ $row->Judul }}</h2>
                        <p class="mb-4">{{ $row->Deskripsi }}</p>
                        <div class="row g-3 mb-4"></div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
