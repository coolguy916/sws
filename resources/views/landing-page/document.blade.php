<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{asset ('landing/slider/fonts/icomoon/style.css') }}">

<link rel="stylesheet" href="{{ asset ('landing/slider/owl.carousel.min.css') }}">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ asset ('landing/slider/bootstrap.min.css') }}">

<link rel="stylesheet" href="{{asset ('landing/slider/slider.css') }}">
 
 
    <div class="container">

 <div style="text-align: center; margin-bottom: 20px;">
  <h2>Dokumentasi</h2>
</div>
      <div class="owl-carousel slide-one-item">
      @foreach($dokumentasi as $row)

        <div class="d-md-flex testimony-29101 align-items-stretch">
          <div class="image" style="background-image: url('{{ asset('storage/dokumentasi/'.$row->image) }}');"></div>
          <div class="text">
            <blockquote>
            <h6 style="color: white;">{{ $row->teks }}</h6>

            </blockquote>
          </div>
        </div>  <!-- .item -->
              @endforeach

          

      </div>


    </div>
</div>


        <script src="{{ asset ('landing/slider/js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{ asset ('landing/slider/js/popper.min.js')}}"></script>
        <script src="{{ asset ('landing/slider/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset ('landing/slider/js/owl.carousel.min.js')}}"></script>
        <script src="{{ asset ('landing/slider/js/main.js')}}"></script>
   