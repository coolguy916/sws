@extends('template2.layout.layout_user')
@section('profile')

<!-- card Profile -->
<div class="card shadow-lg mx-4 card-profile">
  <div class="card-body p-3">
    <div class="row gx-4">
      <div class="col-auto">
        <div class="avatar avatar-xl position-relative">
          <img src="{{ asset('template2/assets/img/team-1.jpg') }}" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
        </div>
      </div>
      <div class="col-auto my-auto">
        <div class="h-100">
          <h5 class="mb-1">
            Satria Naruto
          </h5>
          <p class="mb-0 font-weight-bold text-sm">
            SatriaBajaH1tam@gmail.com
          </p>
          <p class="mb-0 font-weight-bold text-sm">
            Members
          </p>
        </div>
      </div>
      <div class="col-lg-2 col-md-2 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
        <div class="nav-wrapper position-relative end-0">
          <ul class="nav nav-pills nav-fill p-1" role="tablist">
            <li class="nav-item">
              <a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                <i class="ni ni-settings-gear-65"></i>
                <span class="ms-2">Edit Profile</span>
              </a>
            </li>

            <!-- <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                    <i class="ni ni-settings-gear-65"></i>
                    <span class="ms-2">Settings</span>
                  </a>
                </li> -->

          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid py-4">
  <div class="row">

    <!-- Kartu langganan Bulanan -->
    <div class="col-md-4">
      <div class="card card-profile">
        <img src="{{ asset('template2/assets/img/bg-profile.jpg') }}" alt="Image placeholder" class="card-img-top">
        <div class="row justify-content-center">
          <div class="col-4 col-lg-4 order-lg-2">
            <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
              <!-- <a href="javascript:;">
                <img src="{{ asset('template2/assets/img/team-2.jpg') }}" class="rounded-circle img-fluid border border-2 border-white">
              </a> -->
            </div>
          </div>
        </div>
        <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">

          <!-- <div class="d-flex justify-content-between">
            <a href="javascript:;" class="btn btn-sm btn-info mb-0 d-none d-lg-block">Connect</a>
            <a href="javascript:;" class="btn btn-sm btn-info mb-0 d-block d-lg-none"><i class="ni ni-collection"></i></a>
            <a href="javascript:;" class="btn btn-sm btn-dark float-right mb-0 d-none d-lg-block">Message</a>
            <a href="javascript:;" class="btn btn-sm btn-dark float-right mb-0 d-block d-lg-none"><i class="ni ni-email-83"></i></a>
          </div> -->

        </div>
        <div class="card-body pt-0">
          <div class="row">
            <div class="col">
              <div class="d-flex justify-content-center">

                <div class="card p-2 btn " style="background-color: #4B70F5;">

                  <div class="d-grid text-center mx-4">
                    <span class="text-lg text-white font-weight-bolder">MASA AKTIF SAMPAI</span>
                    <span class="text-sm text-white opacity-8">10 November 1990</span>
                  </div>

                </div>

              </div>
            </div>
          </div>
          <div class="text-center mt-4">
            <h5>
              Battle PAS<span class="font-weight-light"></span>
            </h5>
            <div class="h6 font-weight-300">
              <i class="ni location_pin mr-2"></i>Bucharest, Romania
            </div>
            <div>
            <button class="btn btn-primary ms-auto mt-2">Upgrade Pro</button>
            </div>
            <div class="h6 mt-4">
              <i class="ni business_briefcase-24 mr-2"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus id placeat iure, obcaecati eligendi excepturi enim dolore! Placeat, dolores voluptate nostrum corporis quia, eos quaerat quidem fugiat hic magnam nihil!
            </div>
            <div>
              <i class="ni education_hat mr-2"></i>SWIS ENTERPRISE
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- form -->
    <div class="col-md-8 mt-2">
      <div class="card">
        <div class="card-header pb-0">
          <div class="d-flex align-items-center">
            <p class="mb-0">CONTACT</p>
            <button class="btn btn-primary btn-sm ms-auto">Contact</button>
          </div>
        </div>
        <div class="card-body">
          <p class="text-uppercase text-sm">User Information</p>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Username</label>
                <input class="form-control" type="text" value="lucky.jesse">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Email address</label>
                <input class="form-control" type="email" value="jesse@example.com">
              </div>
            </div>
          </div>

          <div class="row">
            <hr class="">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore obcaecati, officia corrupti alias mollitia exercitationem deleniti dolores voluptates? Autem vero amet perferendis quos praesentium perspiciatis provident alias rem voluptatem dolores?
            </p>
            <hr>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum deserunt cupiditate laudantium, maxime architecto magni perferendis, culpa quis, fuga a amet doloremque labore modi sapiente! Perferendis consequatur laborum impedit quas.
            </p>
          </div>
        </div>
      </div>
    </div>



  </div>
</div>
</div>


<!--   Core JS Files   -->
<script src="{{ asset('template2/assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('template2/assets/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('template2/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('template2/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('template2/assets/js/argon-dashboard.min.js?v=2.0.4') }}"></script>
@endsection