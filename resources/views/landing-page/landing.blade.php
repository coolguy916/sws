<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SWIS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('landing\images\swis-logo.png') }}" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="{{ asset('landing_page/css/magnific-popup.css') }}">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('landing_page/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing_page/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('landing_page/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('landing_page/css/style.css') }}" rel="stylesheet">
</head>
<style>
    .video-container {
        position: relative;
        width: 100%;
        padding-bottom: 56.25%;
        height: 0;
        overflow: hidden;
    }

    .video-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
</style>
<style>
    .btn-disabled {
        pointer-events: none;
        opacity: 0.6;
        cursor: not-allowed;
    }
</style>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.html" class="navbar-brand p-0">
                    <h1 class="m-0">Swis</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="#tentang" class="nav-item nav-link">Tentang Kami</a>
                        <a href="#keunggulan" class="nav-item nav-link">Keunggulan</a>
                        <a href="#features" class="nav-item nav-link">Fitur-fitur</a>
                        <a href="#kontak" class="nav-item nav-link">kontak kita</a>
                        <a href="#pricing" class="nav-item nav-link">Harga</a>
                        <a href="#developer" class="nav-item nav-link">Developer</a>
                        @if (Auth::check())
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Dashboard</a>
                            <div class="dropdown-menu m-0">
                                <a href="dashboard" class="dropdown-item">Halaman Dashboard</a>

                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();" class="dropdown-item">Logout</a>
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </div>
                        </div>
                    @else
                        <a href="/login" class="nav-item nav-link">Login</a>
                    @endif
                        
                        
                    </div>
                    <a href="#" class="btn btn-light rounded-pill text-primary py-2 px-4 ms-lg-5 btn-disabled">Manual Book</a>
                </div>
            </nav>

            <div class="container-xxl bg-primary hero-header">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated zoomIn">Swis</h1>
                            <p class="text-white pb-3 animated zoomIn">Tempor rebum no at dolore lorem clita rebum rebum ipsum rebum stet dolor sed justo kasd. Ut dolor sed magna dolor sea diam. Sit diam sit justo amet ipsum vero ipsum clita lorem</p>
                            <a href="#tentang" class="btn btn-outline-light rounded-pill border-2 py-3 px-5 animated slideInRight">Pelajari Lebih lanjut</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid animated zoomIn" src="{{ asset('landing_page/img/alat_swis.png') }}" alt="" style="width: 485px; height: 417px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- About Start -->
        @include('landing-page/about')
        <!-- About End -->


        <!-- Service Start -->
        @include('landing-page/keungulan')

        <!-- Service End -->
        

        @include('landing-page/fitur')


        <!-- Features Start -->
        @include('landing-page.massage')
        <!-- Features End -->



        <div class="container-xxl py-6" id="pricing">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Harga Produk</div>
                    <h2 class="mb-5">Dapatkan harga terbaik dengan kualitas unggul</h2>
                </div>
        <section id="pricing" class="section-padding">
            <div class="container">
              <div class="row">
                <div class="col-lg-4 col-md-6 col-xs-12">
                  <div class="table wow fadeInLeft" data-wow-delay="1.2s">
                    <div class="icon-box">
                      <i class="fas fa-star-half"></i>
                    </div>
                    <div class="pricing-header">
                      <p class="price-value">Rp.1000<span> /mo</span></p>
                    </div>
                    <div class="title">
                      <h3>Reguler</h3>
                    </div>
                    <ul class="description">
                      <li>free source code</li>
                    </ul>
                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="">Beli Sekarang</a>
                </div> 
                </div>
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="table wow fadeInUp" data-wow-delay="1.2s">
                      <div class="icon-box">
                        <i class="fa fa-star"></i>
                      </div>
                      <div class="pricing-header">
                        <p class="price-value">Rp.5000<span> /mo</span></p>
                      </div>
                      <div class="title">
                        <h3>Premium</h3>
                      </div>
                      <ul class="description">
                        <li> Cuman dapet casing</li>
                        <li> Rakit Sendiri Alatnya</li>

                      </ul>
                      <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="">Beli Sekarang</a>
                  </div> 
                  </div>
                  <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="table wow fadeInRight" data-wow-delay="1.2s">
                      <div class="icon-box">
                        <i class="far fa-star"></i>                    
                    </div>
                      <div class="pricing-header">
                        <p class="price-value">Rp.8.000.000<span> /mo</span></p>
                      </div>
                      <div class="title">
                        <h3>Ekonomis</h3>
                      </div>
                      <ul class="description">
                        <li>dapet hikmahnya aja bang :( </li>
                        <li>Iuran Pengembangan Developer (IPD) #Butuh Uang</li>
                      </ul>
                      <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="">Beli Sekarang</a>
                  </div> 
                  </div>
              
              </div>
            </div>
          </section>
          </div>
          </div>

        <!-- Testimonial Start -->
       @include('landing-page.testimonial')
        <!-- Testimonial End -->


        <!-- Team Start -->
        <div class="container-xxl py-6" id="developer">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Team Kita</div>
                    <h2 class="mb-5">Kenali lebih dekat dengan para developer</h2>
                </div>
                <div class="row g-4">
                    @foreach ($pages as $page)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item">
                            <h5>{{ $page->nama }}</h5>
                            <p class="mb-4">{{ $page->role }}</p>
                            <img class="img-fluid rounded-circle w-100 mb-4" src="{{ asset('storage/' . $page->image) }}" alt="">
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-square text-primary bg-white m-1" href="{{ $page->instagram }}"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href="{{ route('pages.show', $page->id) }}"><i class="fas fa-newspaper"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Team End -->
        

        <footer>
            <div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: 6rem;">
                <div class="container py-5">
                    <div class="row g-5">
                        @if($footers->isEmpty())
                            <div class="col-12 text-center">
                                <p>Data belum tersedia.</p>
                            </div>
                        @else
                            @foreach($footers as $footer)
                                <div class="col-md-6 col-lg-3">
                                    <h5 class="text-white mb-4">Get In Touch</h5>
                                    <p><i class="{{ json_decode($footer->icon_tulisan)[0] }}"></i> {{ json_decode($footer->keterangan)[0] }}</p>
                                    <div class="d-flex pt-2">
                                        @foreach (json_decode($footer->link) as $key => $link)
                                            <a class="btn btn-outline-light btn-social" href="{{ $link }}"><i class="{{ json_decode($footer->icon_link)[$key] }}"></i></a>
                                        @endforeach
                                    </div>
                                </div>
                                @php
                                    $half = ceil(count(json_decode($footer->link_website)) / 2);
                                    $quickLinks = array_slice(json_decode($footer->link_website), 0, $half);
                                    $quickNames = array_slice(json_decode($footer->nama_link_website), 0, $half);
                                    $popularLinks = array_slice(json_decode($footer->link_website), $half);
                                    $popularNames = array_slice(json_decode($footer->nama_link_website), $half);
                                @endphp
                                <div class="col-md-6 col-lg-3">
                                    <h5 class="text-white mb-4">Quick Link</h5>
                                    @foreach ($quickLinks as $key => $link_website)
                                        <a class="btn btn-link" href="{{ $link_website }}">{{ $quickNames[$key] }}</a>
                                    @endforeach
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <h5 class="text-white mb-4">Quick Link</h5>
                                    @foreach ($popularLinks as $key => $link_website)
                                        <a class="btn btn-link" href="{{ $link_website }}">{{ $popularNames[$key] }}</a>
                                    @endforeach
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <a href="#" class="btn btn-light rounded-pill text-primary py-2 px-4 ms-lg-5 btn-disabled mb-5">Manual Book</a>
                                    <img class="img-fluid animated zoomIn" src="{{ asset('storage/' . $footer->image) }}" alt="Footer Image">
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="container">
                    <div class="copyright">
                        <div class="row">
                            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                                &copy; <a class="border-bottom" href="#">Swis</a>, All Right Reserved.
                                Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                                <br>Distributed By: <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        

        
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('landing_page/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('landing_page/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('landing_page/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('landing_page/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('landing_page/js/main.js') }}"></script>
</body>

</html>