<section class="freelance_section layout_padding">
    <div id="accordion">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5 offset-md-1">
            <div class="detail-box">
              <div class="heading_container">
                <h2>
                  Keunggulan Kami:
                </h2>
              </div>
              <div class="tab_container">
                          @foreach($keunggulan as $key => $row)

              <div class="t-link-box {{ $key === 0 ? '' : 'collapsed' }}" data-toggle="collapse" data-target="#collapse{{ $key + 1 }}" aria-expanded="{{ $key === 0 ? 'true' : 'false' }}" aria-controls="collapse{{ $key + 1 }}">
                  <div class="img-box">
                    <img src="{{ asset('storage/icon/'.$row->icon) }}" alt="">
                  </div>
                  <div class="detail-box">
                    <h5>
                    {{ $row->judul }}
                    </h5>
                    <h3>
                    {{ $row->teks }}
                      </h3>
                  </div>
                </div>
                            @endforeach



        
              </div>
            </div>
          </div>
          
          <div class="col-md-6">
           
             @foreach($keunggulan as $key => $item)
          <div class="collapse {{ $key === 0 ? 'show' : '' }}" id="collapse{{ $key + 1 }}" aria-labelledby="heading{{ $key + 1 }}" data-parent="#accordion">
            <div class="img-box">
              <img src="{{ asset('storage/keunggulan/'.$item->image) }}" alt="">
            </div>
          </div>
        @endforeach
           
            
            
          </div>
        </div>
      </div>
    </div>
  </section>