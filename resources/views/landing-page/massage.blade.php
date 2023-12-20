 <section class="experience_section layout_padding">
    <div class="container" id="contact">
      <div class="row">
        <div class="col-md-5">
          <div class="img-box">
          @foreach ($kontak as$row )
                        <img src="{{ asset('storage/kontak/'.$row->image) }}" alt="">
          @endforeach
          </div>
        </div>
        <div class="col-md-7">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Kontak Kami:
              </h2>
            </div>
            @foreach($kontak as $contact)
      <p>{{ $contact->teks }}</p>
      <div class="btn-box">
        <a href="{{ $contact->link }}" class="btn-1">Chat dengan {{ $contact->name }}</a>
      </div>
    @endforeach
        </div>

      </div>
    </div>
  </section>


{{-- <div class="containeru" id="contact">
    <img src="img/shape.png" class="square" alt="" />
    <div class="form">
      <div class="contact-info">
        <h3 class="title"></h3>
        <p class="text">
          Kami siap membantu! Silakan hubungi kami jika Anda memiliki pertanyaan atau butuh bantuan dengan layanan kami.
        </p>

        <div class="info">
          <div class="information">
            <img src="images/lq.png" class="icon" alt="" />
            <p>Jl. Teluk Pacitan, Arjosari, Kec. Blimbing, Kota Malang, Jawa Timur </p>
          </div>
          <div class="information">
            <img src="images/e.png" class="icon" alt="" />
            <p>swis@gmail.com</p>
          </div>
          <div class="information">
            <img src="images/ph.png" class="icon" alt="" />
            <p>0821-3373-2981</p>
          </div>
        </div>

        <!-- <div class="social-media">
          <p>Connect with us :</p>
          <div class="social-icons">
            <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </div> -->
      </div>

      <div class="contact-form">
        <span class="circle one"></span>
        <span class="circle two"></span>

        <form action="index.html" autocomplete="off">
          <h3 class="title">Contact us</h3>
          <div class="input-container textarea">
            <textarea name="message" class="input"></textarea>
            <label for="">Message</label>
            <span>Message</span>
          </div>
          <input type="submit" value="Send" class="btn" />
        </form>
      </div>
    </div>
  </div> --}}