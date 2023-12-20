<section class="category_section layout_padding" id="fitur">
    <div class="container">
      <div class="heading_container">
        <h2>
          Fitur-fitur
        </h2>
      </div>
      <div class="category_container">
      @foreach ($fitur as $row )
        
        <div class="box">
          <div class="img-box">
            <img src="{{ asset('storage/fitur/'.$row->image) }}" alt="">
          </div>
          <div class="detail-box">
            <h5>
            {{ $row->teks }}
            </h5>
          </div>
        </div>
       @endforeach




      </div>
    </div>
  </section>