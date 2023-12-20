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
    

    <div class="carousel-inner">

      <!-- hal 1 -->
  

      <!-- hal 2 -->@foreach ($slider as $key => $row )
        
      <div class="carousel-item {{ $key == 0 ? 'active' : '' }} " style="background-image: url('{{ asset('storage/imageslider/'.$row->image) }}'); background-size: cover; background-position: center; width: 100%; height: 50vh; position: relative;">
        <div class="container-fluid">
        <div class="overlay" style="background-color: black; opacity: 0.2; position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></div>
          <div class="row">
            <div class="col-md-5 offset-md-1" style="align-items: center; position: relative; z-index: 1;">
              <div class="detail-box">
                <h1>
                  {{ $row->body }} 
                </h1>
                <p>
                  {{ $row->sub }}
                </p>
                <div class="btn-box">
                  <a href="/login" class="btn-1">Jelajahi Lebih Lanjut</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
            @endforeach


     
    </div>
  </div>
</section>
<!-- end slider section -->