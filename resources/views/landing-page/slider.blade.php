<!-- slider section -->
<section class="slider_section">
  <div class="carousel_btn-container">
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
    </ol>

    <div class="carousel-inner">

      <!-- hal 1 -->
      <div class="carousel-item active" style="background-image: url('{{ asset('landing/images/yazid.jpg') }}'); background-size: cover; background-position: center; width: 100%; height: 50vh; position: relative;">
        <div class="container-fluid">
        <div class="overlay" style="background-color: black; opacity: 0.2; position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></div>
          <div class="row">
            <div class="col-md-5 offset-md-1" style="align-items: center; position: relative; z-index: 1;">
              <div class="detail-box">
                <h1>
                  Smart <br>
                  Watering <br>
                  System
                </h1>
                <p>
                  Inovasi Yang Mengubah Dunia
                </p>
                <div class="btn-box">
                  <a href="/login" class="btn-1">Jelajahi Lebih Lanjut</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- hal 2 -->
      <div class="carousel-item " style="background-image: url('{{ asset('landing/images/yazid.jpg') }}'); background-size: cover; background-position: center; width: 100%; height: 50vh; position: relative;">
        <div class="container-fluid">
        <div class="overlay" style="background-color: black; opacity: 0.2; position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></div>
          <div class="row">
            <div class="col-md-5 offset-md-1" style="align-items: center; position: relative; z-index: 1;">
              <div class="detail-box">
                <h1>
                  Smart <br>
                  Watering <br>
                  System
                </h1>
                <p>
                  Inovasi Yang Mengubah Dunia
                </p>
                <div class="btn-box">
                  <a href="/login" class="btn-1">Jelajahi Lebih Lanjut</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- hal 2 -->
      <!-- <div class="carousel-item" style="background-image: url('{{ asset('landing/images/yazid.jpg') }}'); background-size: cover; background-position: center; width: 100%; height: 80vh;">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-5 offset-md-1">
              <div class="detail-box">
                <h1>
                  Smart <br>
                  Watering <br>
                  System
                </h1>
                <p>
                  Inovasi Yang Mengubah Dunia

                </p>
                <div class="btn-box">
                  <a href="" class="btn-1">
                    Jelajahi Lebih Lanjut </a>
                </div>
              </div>
            </div>
            <div class="offset-md-1 col-md-4 img-container">
              <div class="img-box">
                <img src="{{ asset ('landing/images/logo-swis.png') }}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div> -->

    </div>
  </div>
</section>
<!-- end slider section -->