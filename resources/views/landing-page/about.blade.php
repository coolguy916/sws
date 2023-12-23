 <style>
    .responsive-iframe-container {
      position: relative;
      overflow: hidden;
      padding-top: 56.25%; /* Untuk menjaga rasio aspek 16:9 (56.25% = 9/16 * 100) */
    }
    .responsive-iframe-container iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }
  </style>
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
<div class="responsive-iframe-container">
  <iframe src="{{ $row->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>        <h6>
        {{ $row->Deskripsi }}
        </h6>
          @endforeach

        <!-- <a href="">
          Read More
        </a> -->
      </div>
    </div>
  </section>