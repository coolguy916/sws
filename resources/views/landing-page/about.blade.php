<section class="about_section layout_padding" id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-9 mx-auto">
          <div class="img-box">
            <img src="images/logo-swis.png" alt="">
          </div>
        </div>
      </div>
      <div class="detail-box">
  @foreach ($deskripsi as $row )
    
        <h2>
            {{ $row->Judul }}
        </h2>
        <h6>
        {{ $row->Deskripsi }}
        </h6>
          @endforeach

        <!-- <a href="">
          Read More
        </a> -->
      </div>
    </div>
  </section>