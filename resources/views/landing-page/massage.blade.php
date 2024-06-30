<div class="container-xxl py-6" id="kontak">
  <div class="container">
      <div class="row g-5">
          @if(is_object($kontak) && isset($kontak->text, $kontak->keterangan, $kontak->link))
              <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Kontak Kami</div>
                  <h2 class="mb-4">{{ $kontak->text }}</h2>
                  <p>{{ $kontak->keterangan }}</p>
                  <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="{{ $kontak->link }}">
                      <i class="fab fa-whatsapp"></i> Chat Kami
                  </a>
              </div>
              <div class="col-lg-7">
                  <div class="row g-5">
                      @php
                          $judulList = json_decode($kontak->judul);
                          $iconList = json_decode($kontak->icon);
                          $deskripsiList = json_decode($kontak->deskripsi);
                      @endphp

                      @if (is_array($judulList) && is_array($iconList) && is_array($deskripsiList))
                          @foreach ($judulList as $key => $judul)
                              @php
                                  $delay = 0.1 + ($key * 0.1);
                              @endphp
                              <div class="col-sm-6 wow fadeIn" data-wow-delay="{{ $delay }}s">
                                  <div class="d-flex align-items-center mb-3">
                                      <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                          @if (strpos($iconList[$key], 'fa') !== false)
                                              <i class="{{ $iconList[$key] }}"></i>
                                          @else
                                              <img class="img-fluid" src="{{ asset('storage/' . $iconList[$key]) }}" alt="">
                                          @endif
                                      </div>
                                      <h6 class="mb-0">{{ $judul }}</h6>
                                  </div>
                                  <span>{{ $deskripsiList[$key] }}</span>
                              </div>
                          @endforeach
                      @endif
                  </div>
              </div>
          @else
          <div class="container-xxl py-6" id="kontak">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Kontak Kami</div>
                        <h2 class="mb-4">Mohon maaf data masih kosong </h2>
                        <p>Bergabunglah dengan banyak pengguna lainnya yang telah mempercayai produk kami untuk solusi penyiraman otomatis. Dapatkan kemudahan dan efisiensi dalam merawat tanaman Anda.</p>
                                 </div>
                    <div class="col-lg-7">
                        <div class="row g-5">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="d-flex align-items-center mb-3">
                                  <div class="flex-shrink-0 btn-square bg-danger rounded-circle me-3">
                                    <i class="fas fa-exclamation-circle text-white"></i>
                                    </div>
                                    <h6 class="mb-0">Belum Diisi</h6>
                                </div>
                                <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor</span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                                <div class="d-flex align-items-center mb-3">
                                  <div class="flex-shrink-0 btn-square bg-danger rounded-circle me-3">
                                    <i class="fas fa-exclamation-circle text-white"></i>
                                    </div>
                                    <h6 class="mb-0">Belum Diisi</h6>
                                </div>
                                <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor</span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex align-items-center mb-3">
                                  <div class="flex-shrink-0 btn-square bg-danger rounded-circle me-3">
                                    <i class="fas fa-exclamation-circle text-white"></i>
                                    </div>
                                    <h6 class="mb-0">Belum Diisi</h6>
                                </div>
                                <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor</span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-danger rounded-circle me-3">
                                        <i class="fas fa-exclamation-circle text-white"></i>
                                    </div>
                                    <h6 class="mb-0">Belum Diisi</h6>
                                </div>
                                <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor</span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="d-flex align-items-center mb-3">
                                  <div class="flex-shrink-0 btn-square bg-danger rounded-circle me-3">
                                    <i class="fas fa-exclamation-circle text-white"></i>
                                    </div>
                                    <h6 class="mb-0">Belum Diisi</h6>
                                </div>
                                <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor</span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.6s">
                                <div class="d-flex align-items-center mb-3">
                                  <div class="flex-shrink-0 btn-square bg-danger rounded-circle me-3">
                                    <i class="fas fa-exclamation-circle text-white"></i>
                                    </div>
                                    <h6 class="mb-0">Belum Diisi</h6>
                                </div>
                                <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          @endif
      </div>
  </div>
</div>
