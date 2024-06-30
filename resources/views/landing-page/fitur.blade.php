<div class="container-xxl py-6" id="features">
  <div class="container">
      <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
          <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Fitur-fitur</div>
          <h2 class="mb-5">meningkatkan efisiensi dalam pengelolaan tanaman Anda!</h2>
      </div>
      <section id="features" class="section-padding">
          <div class="container">
              <div class="row">
                  @if($fitur->isEmpty())
                      <section id="features" class="section-padding">
            <div class="container">
              <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                  <div class="content-left">
                    <div class="box-item wow fadeInLeft" data-wow-delay="0.3s">
                      <span class="icon">
                        <i class="fas fa-exclamation-circle fa-2x"></i>
                      </span>
                      
                      <div class="text">
                        <h4>Data Kosong</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                      </div>
                    </div>
                    <div class="box-item wow fadeInLeft" data-wow-delay="0.6s">
                      <span class="icon">
                        <i class="fas fa-exclamation-circle fa-2x"></i>
                      </span>
                      <div class="text">
                        <h4>Data Kosong</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                      </div>
                    </div>
                    <div class="box-item wow fadeInLeft" data-wow-delay="0.9s">
                      <span class="icon">
                        <i class="fas fa-exclamation-circle fa-2x"></i>
                      </span>
                      <div class="text">
                        <h4>Data Kosong</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                  <div class="show-box wow fadeInUp" data-wow-delay="0.3s">
                    <img src="{{ asset('landing_page/img/no-image.png') }}" alt="">
                  </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                  <div class="content-right">
                    <div class="box-item wow fadeInRight" data-wow-delay="0.3s">
                      <span class="icon">
                        <i class="fas fa-exclamation-circle fa-2x"></i>
                      </span>
                      <div class="text">
                        <h4>Data Kosong</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                      </div>
                    </div>
                    <div class="box-item wow fadeInRight" data-wow-delay="0.6s">
                      <span class="icon">
                        <i class="fas fa-exclamation-circle fa-2x"></i>
                      </span>
                      <div class="text">
                        <h4>Data Kosong</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                      </div>
                    </div>
                    <div class="box-item wow fadeInRight" data-wow-delay="0.9s">
                      <span class="icon">
                        <i class="fas fa-exclamation-circle fa-2x"></i>
                      </span>
                      <div class="text">
                        <h4>Data Kosong</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
                  @else
                      <!-- Left Features -->
                      <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                          <div class="content-left">
                              @foreach ($fitur as $item)
                                  @php
                                      $judul = json_decode($item->judul);
                                      $deskripsi = json_decode($item->deskripsi);
                                      $icon = json_decode($item->icon);
                                  @endphp
                                  @for ($i = 0; $i < min(count($judul), 3); $i++)
                                      <div class="box-item wow fadeInLeft" data-wow-delay="{{ 0.3 + $i * 0.3 }}s">
                                          <span class="icon">
                                              @if (strpos($icon[$i], 'fa') !== false)
                                                  <i class=" {{ $icon[$i] }} fa-2x"></i>
                                              @else
                                                  <img class="img-fluid animated zoomIn" src="{{ asset('storage/' . $icon[$i]) }}" alt="">
                                              @endif
                                          </span>
                                          <div class="text">
                                              <h4>{{ $judul[$i] }}</h4>
                                              <p>{{ $deskripsi[$i] }}</p>
                                          </div>
                                      </div>
                                  @endfor
                              @endforeach
                          </div>
                      </div>

                      <!-- Center Image -->
                      @if(isset($fitur[0]->image))
                          <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                              <div class="show-box wow fadeInUp" data-wow-delay="0.3s">
                                  <img src="{{ asset('storage/' . $fitur[0]->image) }}" alt="foto alat">
                              </div>
                          </div>
                      @endif

                      <!-- Right Features -->
                      <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                          <div class="content-right">
                              @foreach ($fitur as $item)
                                  @php
                                      $judul = json_decode($item->judul);
                                      $deskripsi = json_decode($item->deskripsi);
                                      $icon = json_decode($item->icon);
                                  @endphp
                                  @for ($i = 3; $i < count($judul); $i++)
                                      <div class="box-item wow fadeInRight" data-wow-delay="{{ 0.3 + ($i - 3) * 0.3 }}s">
                                          <span class="icon">
                                              @if (strpos($icon[$i], 'fa') !== false)
                                                  <i class=" {{ $icon[$i] }} fa-2x"></i>
                                              @else
                                                  <img class="img-fluid animated zoomIn" src="{{ asset('storage/' . $icon[$i]) }}" alt="">
                                              @endif
                                          </span>
                                          <div class="text">
                                              <h4>{{ $judul[$i] }}</h4>
                                              <p>{{ $deskripsi[$i] }}</p>
                                          </div>
                                      </div>
                                  @endfor
                              @endforeach
                          </div>
                      </div>
                  @endif
              </div>
          </div>
      </section>
  </div>
</div>
