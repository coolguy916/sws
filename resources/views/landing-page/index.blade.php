<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>SWIS</title>

  <!-- bootstrap core css -->

  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('landing\images\swis-logo.png') }}" />

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="{{asset ('landing/css/bootstrap.css') }}" />

  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="{{ asset ('landing/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset ('landing/css/kara.css') }}">
  <link rel="stylesheet" href="{{ asset ('landing/css/contact.css') }}">
  <link rel="stylesheet" href="{{ asset ('landing/css/styles.scss') }}">
  <link rel="stylesheet" href="{{ asset ('landing/css/style.scss') }}">
  <link href="{{ asset ('landing/css/style.css') }}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ asset ('landing/css/responsive.css') }}" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">

    <!-- Header -->
    @include('landing-page/header')

    <!-- conten -->

    <!-- slider -->
    @include('landing-page/slider')
  </div>

  <!-- About -->

  @include('landing-page/about')

  <!-- end about section -->

  <!-- fitur -->
  @include('landing-page/fitur')

  <!-- Keunggulan -->
  @include('landing-page/keungulan')

  <!-- Document -->
  @include('landing-page/document')


  <!-- Promotion Info -->
  @include('landing-page/promosi')

  <!-- end freelance section -->

  <!-- client section -->

  <!-- <section class="client_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-md-10 mx-auto">
          <div class="heading_container">
            <h2>
              Testimonial
            </h2>
          </div>
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="detail-box">
                  <h4>
                    John Hissona
                  </h4>
                  <p>
                    passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If youThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in s
                  </p>
                  <img src="images/quote.png" alt="">
                </div>
              </div>
              <div class="carousel-item">
                <div class="detail-box">
                  <h4>
                    John Hissona
                  </h4>
                  <p>
                    passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If youThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in s
                  </p>
                  <img src="images/quote.png" alt="">
                </div>
              </div>
              <div class="carousel-item">
                <div class="detail-box">
                  <h4>
                    John Hissona
                  </h4>
                  <p>
                    passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If youThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in s
                  </p>
                  <img src="images/quote.png" alt="">
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <!-- Massage -->
  @include('landing-page/massage')


  @include('landing-page/testimonial')

  <!-- info section -->

  <section class="info_section ">
    <div class="info_container layout_padding-top">
      <div class="container">

        <div class="info_top">
          <div class="info_logo">
          @foreach ($footer as $row )
                        <img src="{{ asset('storage/logo/'.$row->image) }}" alt="" />

          </div>
           <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                         <h5 class="text-uppercase">{{ $row->judul }}</h5>


            <p>
            {{ $row->deskripsi }}
            </p>
          </div>
           <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
            <h6 class="text-uppercase mb-4 font-weight-bold">Kontak Kami:</h6>
            <p>              <img src="{{ asset ('landing/images/ahome.png') }}" alt=""> {{ $row->alamat }}</p>
            <p>  <img src="{{ asset ('landing/images/amail.png') }}" alt=""> {{ $row->email }}</p>
            <p>  <img src="{{ asset ('landing/images/aphone.png') }}" alt="">  {{ $row->phone }}</p>
          </div>

          <div class="social_box">

            <a href="{{ $row->instagram }}">
              <img src="{{ asset ('landing/images/instagram.png') }}" alt="">
            </a>
            <a href="{{ $row->youtube }}">
              <img src="{{ asset ('landing/images/youtube.png') }}" alt="">
            </a>
          </div>
        </div>

        <div class="info_main">
          <div class="row">
            <h8 class="text-center">SWIS SMKN 8 MALANG</h8>
          </div>
        </div>
          @endforeach

      </div>
    </div>
  </section>
  <!-- end info section -->

  <!-- footer section -->
  <footer class="container-fluid footer_section ">
    <div class="container">
      <p>
        &copy; <span id="displayDate"></span> All Rights Reserved By
        <a href="#">SWIS</a>
      </p>
    </div>
  </footer>
  <!-- end  footer section -->


  <script src="{{ asset ('landing/js/jquery-3.4.1.min.js') }}"></script>
  <script src="{{ asset ('landing/js/bootstrap.js') }}"></script>
  <script src="{{ asset ('landing/js/custom.js') }}"></script>
  <script src="{{ asset ('landing/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset ('landing/js/main.js') }}"></script>
  <script src="{{ asset ('landing/js/app.js') }}"></script>

</body>
</body>

</html>
