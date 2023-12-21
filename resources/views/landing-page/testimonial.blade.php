  <section class="client_section layout_padding">
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
                        @foreach($testimoni as $key => $testimonial)

              <div class="carousel-item  {{ $key == 0 ? 'active' : '' }}">
                <div class="detail-box">
                  <h4>
                    {{ $testimonial->judul }}
                  </h4>
                  <p>
                    {{ $testimonial->teks }}
                  </p>
                  <img src="landing/images/quote.png" alt="">
                </div>
              </div>
             
            @endforeach

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
  </section>