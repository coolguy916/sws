<!--
=========================================================
* Argon Dashboard 2 - v2.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/logos/logo.png">
  <title>
SWIS
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{asset ('/template2/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{asset ('template2/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{asset ('template2/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset ('template2/assets/css/argon-dashboard.css?v=2.0.4')}}" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
</head>


<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
 @include('layouts.admin.sideadmin')

  <!-- content -->
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
  @include('layouts.admin.navadmin')

    <!-- End Navbar -->
   @yield('admin')
  </main>

  

  <!-- setings -->
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Argon Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0 overflow-auto">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default" onclick="sidebarType(this)">Dark</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="d-flex my-3">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <div class="mt-2 mb-5 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/argon-dashboard">Free Download</a>
        <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/argon-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/argon-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/argon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
    <!-- ============================================================== -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- Include SweetAlert CSS and JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
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
  <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
  <Script>
    $('.delete').click(function() {
        var moduleid = $(this).attr('data-id');
        var lokasi = $(this).attr('data-lokasi');
        swal({
                title: "Yakin Mau Hapus Data ?"
                , text: "kamu akan menghapus Module dengan Nama " + lokasi + ""
                , icon: "warning"
                , buttons: true
                , dangerMode: true
            , })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/delete-module/" + moduleid + ""
                    swal("Data Berhasil dihapus", {
                        icon: "success"
                    , });
                } else {
                    swal("Data tidak jadi dihapus");
                }
            });
    })

</script>



     <script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    </script>
    <script>
    $(document).ready(function(){
        $(document).on('click','.add_product',function(e){
            e.preventDefault();
            let lokasi = $('#lokasi').val();
            let user_id = $('#user_id').val();
            let status = 0;
            //console.log(lokasi+user_id+status);
            $.ajax({
                url:"{{ route('add.module') }}",
                method:'POST',
                data:{lokasi:lokasi,user_id:user_id,status: status},
                success:function(res){
                    if(res.status=='success'){
                        $('#addModal').modal('hide');
                        $('#addproductform')[0].reset();
                        $('.table').load(location.href+' .table');
                    Command: toastr["success"]("Module Telah berhasil", "Success")

                            toastr.options = {
                            "closeButton": true,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                            }
                    }
                },error:function(err){
                    let error = err.responseJSON;
                    $.each(error.errors,function(index, value){
                        $('.errMsgContainer').append('<span class="text-danger">'+value+'</span>'+'<br>');
                    });

                }
            });
        })

        //show update value update form
        $(document).on('click','.update_product_form', function(){
            let id  = $(this).data('id');
            let lokasi  = $(this).data('lokasi');
            let user_id  = $(this).data('user_id');
            $('#up_id').val(id);
            $('#up_lokasi').val(lokasi);
            $('#up_user_id').val(user_id);

        });

        //update proses system
          $(document).on('click','.update_product',function(e){
            e.preventDefault();
            let up_id = $('#up_id').val();
            let up_lokasi = $('#up_lokasi').val();
            let up_user_id = $('#up_user_id').val();
            //console.log(up_id+up_lokasi+up_user_id);
            $.ajax({
                url:"{{ route('update.module') }}",
                method:'POST',
                data:{up_id:up_id,up_lokasi:up_lokasi,up_user_id:up_user_id},
                success:function(res){
                    if(res.status=='success'){
                        $('#updateModal').modal('hide');
                        $('#updateproductform')[0].reset();
                        $('.table').load(location.href+' .table');
                          Command: toastr["success"]("Module Telah berhasil di Update", "Success")

                            toastr.options = {
                            "closeButton": true,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                            }
                    }
                },error:function(err){
                    let error = err.responseJSON;
                    $.each(error.errors,function(index, value){
                        $('.errMsgContainer').append('<span class="text-danger">'+value+'</span>'+'<br>');
                    });

                }
            });
        })




    });
    </script>

    <script>
  $(document).on('click', '.delete_product', function (e) {
    e.preventDefault();
    let module_id = $(this).data('id');

    // Use SweetAlert for confirmation
    Swal.fire({
      title: 'Are you sure?',
      text: 'You are about to delete this Module!',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!',
      cancelButtonText: 'Cancel'
    }).then((result) => {
      if (result.isConfirmed) {
        // User clicked 'Yes', proceed with the deletion
        $.ajax({
          url: "{{ route('delete.module') }}",
          method: 'POST',
          data: { module_id: module_id },
          dataType: 'json',
          success: function (res) {
            if (res.status === 'success') {
              // Refresh the table after successful deletion
              $('.table').load(location.href + ' .table');

              // Show a success message using SweetAlert
              Swal.fire({
                title: 'Deleted!',
                text: ' Module has been deleted.',
                icon: 'success',
                timer: 2000,
                timerProgressBar: true,
              });
            }
          },
          error: function (xhr, status, error) {
            // Handle the error response from the server
            console.error(error);

            // Show an error message using SweetAlert
            Swal.fire({
              title: 'Error!',
              text: 'Failed to delete the Module.',
              icon: 'error',
              timer: 2000,
              timerProgressBar: true,
            });
          }
        });
      }
    });
  });
</script>

<script>
  $(document).on('click', '.delete_user', function (e) {
    e.preventDefault();
    let user_id = $(this).data('id');

    // Use SweetAlert for confirmation
    Swal.fire({
      title: 'Are you sure?',
      text: 'You are about to delete this User!',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!',
      cancelButtonText: 'Cancel'
    }).then((result) => {
      if (result.isConfirmed) {
        // User clicked 'Yes', proceed with the deletion
        $.ajax({
          url: "{{ route('delete.user') }}",
          method: 'POST',
          data: { user_id: user_id },
          dataType: 'json',
          success: function (res) {
            if (res.status === 'success') {
              // Refresh the table after successful deletion
              $('.table').load(location.href + ' .table');

              // Show a success message using SweetAlert
              Swal.fire({
                title: 'Deleted!',
                text: ' User has been deleted.',
                icon: 'success',
                timer: 2000,
                timerProgressBar: true,
              });
            }
          },
          error: function (xhr, status, error) {
            // Handle the error response from the server
            console.error(error);

            // Show an error message using SweetAlert
            Swal.fire({
              title: 'Error!',
              text: 'Failed to delete the User.',
              icon: 'error',
              timer: 2000,
              timerProgressBar: true,
            });
          }
        });
      }
    });
  });
</script>

    <script>
   $(document).ready(function() {
    $('.burger').click(function() {
        $('.nav-links').slideToggle();
    });

    // Handle window resize event
    $(window).resize(function() {
        if ($(window).width() > 768) {
            $('.nav-links').removeAttr('style');
        }
    });
});

</script>
<script>
    @if(Session::has('success'))
    toastr.success("{{ Session::get('success') }}")

    @endif

</script>

  <script>
    $(document).ready(function(){
        $(document).on('click','.add_product',function(e){
            e.preventDefault();
            let lokasi = $('#lokasi').val();
            let user_id = $('#user_id').val();
            let status = 0;
            //console.log(lokasi+user_id+status);
            $.ajax({
                url:"",
                method:'POST',
                data:{lokasi:lokasi,user_id:user_id,status: status},
                success:function(res){
                    if(res.status=='success'){
                        $('#addModal').modal('hide');
                        $('#addproductform')[0].reset();
                        $('.table').load(location.href+' .table');
                    Command: toastr["success"]("Module Telah berhasil", "Success")

                            toastr.options = {
                            "closeButton": true,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                            }
                    }
                },error:function(err){
                    let error = err.responseJSON;
                    $.each(error.errors,function(index, value){
                        $('.errMsgContainer').append('<span class="text-danger">'+value+'</span>'+'<br>');
                    });

                }
            });
        })

        //show update value update form
        $(document).on('click','.update_user_form', function(){
             let id  = $(this).data('id');
            let role  = $(this).data('role');
            $('#up_id').val(id);
            $('#up_role').val(role);

        });

        //update proses system
          $(document).on('click','.update_user',function(e){
            e.preventDefault();
            let up_id = $('#up_id').val();
            let up_role = $('#up_role').val();
            //console.log(up_id+up_lokasi+up_user_id);
            $.ajax({
                url:"{{ route('update.user') }}",
                method:'POST',
                data:{up_id:up_id,up_role:up_role},
                success:function(res){
                    if(res.status=='success'){
                        $('#updateModal').modal('hide');
                        $('#updateproductform')[0].reset();
                        $('.table').load(location.href+' .table');
                          Command: toastr["success"]("Module Telah berhasil di Update", "Success")

                            toastr.options = {
                            "closeButton": true,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                            }
                    }
                },error:function(err){
                    let error = err.responseJSON;
                    $.each(error.errors,function(index, value){
                        $('.errMsgContainer').append('<span class="text-danger">'+value+'</span>'+'<br>');
                    });

                }
            });
        })




    });
    </script>
    <script>
    $(document).ready(function() {
        $('#submitButton').click(function(e) {
            e.preventDefault();
            let judul = $('#judul').val();
            let link = $('#link').val();
            let deskripsi = $('#deskripsi').val();

            $.ajax({
                url: '{{ route("deskripsi.update") }}',
                type: 'POST',
                data: {
                    judul: judul,
                      link: link,
                    deskripsi: deskripsi,
                },
                success: function(response) {
                                   toastr.success('Image Slider Telah berhasil', 'Success');

                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });
    });
</script>

 <script>
    $(document).ready(function(){
        $(document).on('click','.add_image',function(e){
            e.preventDefault();
            let body = $('#body').val();
            let sub = $('#sub').val();
            let image = $('#image')[0].files[0];
            let status = $('#status').val();
             let formData = new FormData();
        formData.append('body', body);
                formData.append('sub', sub);
        formData.append('image', image);
        formData.append('status', status);
            //console.log(lokasi+user_id+status);
            $.ajax({
                url:"{{ route('add.slider') }}",
                method:'POST',
                 data: formData,
            contentType: false,
            processData: false,
                success:function(res){
                    if(res.status=='success'){
                        $('#addimages').modal('hide');
                        $('#addslider')[0].reset();
                        $('.table').load(location.href+' .table');
                    Command: toastr["success"]("Image Slider Telah berhasil", "Success")

                            toastr.options = {
                            "closeButton": true,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                            }
                    }
                },error:function(err){
                    let error = err.responseJSON;
                    $.each(error.errors,function(index, value){
                        $('.errMsgContainer').append('<span class="text-danger">'+value+'</span>'+'<br>');
                    });

                }
            });
        })

        //show update value update form
        $(document).on('click','.update_user_form', function(){
             let id  = $(this).data('id');
            let role  = $(this).data('role');
            $('#up_id').val(id);
            $('#up_role').val(role);

        });

        //update proses system
          $(document).on('click','.update_user',function(e){
            e.preventDefault();
            let up_id = $('#up_id').val();
            let up_role = $('#up_role').val();
            //console.log(up_id+up_lokasi+up_user_id);
            $.ajax({
                url:"{{ route('update.user') }}",
                method:'POST',
                data:{up_id:up_id,up_role:up_role},
                success:function(res){
                    if(res.status=='success'){
                        $('#updateModal').modal('hide');
                        $('#updateproductform')[0].reset();
                        $('.table').load(location.href+' .table');
                          Command: toastr["success"]("Module Telah berhasil di Update", "Success")

                            toastr.options = {
                            "closeButton": true,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                            }
                    }
                },error:function(err){
                    let error = err.responseJSON;
                    $.each(error.errors,function(index, value){
                        $('.errMsgContainer').append('<span class="text-danger">'+value+'</span>'+'<br>');
                    });

                }
            });
        })




    });
    </script>

     <script>
    $(document).ready(function(){
        $(document).on('click','.add_fitur',function(e){
            e.preventDefault();
            let teks = $('#teks').val();
            let image = $('#image')[0].files[0];
            let status = $('#status').val();
             let formData = new FormData();
        formData.append('teks', teks);
        formData.append('image', image);
        formData.append('status', status);
            //console.log(lokasi+user_id+status);
            $.ajax({
                url:"{{ route('add.fitur') }}",
                method:'POST',
                 data: formData,
            contentType: false,
            processData: false,
                success:function(res){
                    if(res.status=='success'){
                        $('#addimagefitur').modal('hide');
                        $('#addfitur')[0].reset();
                        $('.table').load(location.href+' .table');
                    Command: toastr["success"]("Image Slider Telah berhasil", "Success")

                            toastr.options = {
                            "closeButton": true,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                            }
                    }
                },error:function(err){
                    let error = err.responseJSON;
                    $.each(error.errors,function(index, value){
                        $('.errMsgContainer').append('<span class="text-danger">'+value+'</span>'+'<br>');
                    });

                }
            });
        })

        //show update value update form
        $(document).on('click','.update_user_form', function(){
             let id  = $(this).data('id');
            let role  = $(this).data('role');
            $('#up_id').val(id);
            $('#up_role').val(role);

        });

        //update proses system
          $(document).on('click','.update_user',function(e){
            e.preventDefault();
            let up_id = $('#up_id').val();
            let up_role = $('#up_role').val();
            //console.log(up_id+up_lokasi+up_user_id);
            $.ajax({
                url:"{{ route('update.user') }}",
                method:'POST',
                data:{up_id:up_id,up_role:up_role},
                success:function(res){
                    if(res.status=='success'){
                        $('#updateModal').modal('hide');
                        $('#updateproductform')[0].reset();
                        $('.table').load(location.href+' .table');
                          Command: toastr["success"]("Module Telah berhasil di Update", "Success")

                            toastr.options = {
                            "closeButton": true,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                            }
                    }
                },error:function(err){
                    let error = err.responseJSON;
                    $.each(error.errors,function(index, value){
                        $('.errMsgContainer').append('<span class="text-danger">'+value+'</span>'+'<br>');
                    });

                }
            });
        })




    });
    </script>

       <script>
    $(document).ready(function(){
        $(document).on('click','.add_keunggulan',function(e){
            e.preventDefault();
            let judul = $('#judul').val();
            let teks = $('#teks').val();
            let icon = $('#icon')[0].files[0];
            let image = $('#image')[0].files[0];
            let status = $('#status').val();
             let formData = new FormData();
        formData.append('judul', judul);
        formData.append('teks', teks);
        formData.append('icon', icon);
        formData.append('image', image);
        formData.append('status', status);
            //console.log(lokasi+user_id+status);
            $.ajax({
                url:"{{ route('add.keunggulan') }}",
                method:'POST',
                 data: formData,
            contentType: false,
            processData: false,
                success:function(res){
                    if(res.status=='success'){
                        $('#addform').modal('hide');
                        $('#addkeunggulan')[0].reset();
                        $('.table').load(location.href+' .table');
                    Command: toastr["success"]("Image Slider Telah berhasil", "Success")

                            toastr.options = {
                            "closeButton": true,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                            }
                    }
                },error:function(err){
                    let error = err.responseJSON;
                    $.each(error.errors,function(index, value){
                        $('.errMsgContainer').append('<span class="text-danger">'+value+'</span>'+'<br>');
                    });

                }
            });
        })

        //show update value update form
        $(document).on('click','.update_user_form', function(){
             let id  = $(this).data('id');
            let role  = $(this).data('role');
            $('#up_id').val(id);
            $('#up_role').val(role);

        });

        //update proses system
          $(document).on('click','.update_user',function(e){
            e.preventDefault();
            let up_id = $('#up_id').val();
            let up_role = $('#up_role').val();
            //console.log(up_id+up_lokasi+up_user_id);
            $.ajax({
                url:"{{ route('update.user') }}",
                method:'POST',
                data:{up_id:up_id,up_role:up_role},
                success:function(res){
                    if(res.status=='success'){
                        $('#updateModal').modal('hide');
                        $('#updateproductform')[0].reset();
                        $('.table').load(location.href+' .table');
                          Command: toastr["success"]("Module Telah berhasil di Update", "Success")

                            toastr.options = {
                            "closeButton": true,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                            }
                    }
                },error:function(err){
                    let error = err.responseJSON;
                    $.each(error.errors,function(index, value){
                        $('.errMsgContainer').append('<span class="text-danger">'+value+'</span>'+'<br>');
                    });

                }
            });
        })




    });
    </script>
   <script>
    $(document).ready(function(){
        $(document).on('click','.add_dokumentasi',function(e){
            e.preventDefault();
            let judul = $('#judul').val();
            let teks = $('#teks').val();
            let image = $('#image')[0].files[0];
            let status = $('#status').val();
             let formData = new FormData();
        formData.append('judul', judul);
        formData.append('teks', teks);
        formData.append('image', image);
        formData.append('status', status);
            //console.log(lokasi+user_id+status);
            $.ajax({
                url:"{{ route('add.dokumentasi') }}",
                method:'POST',
                 data: formData,
            contentType: false,
            processData: false,
                success:function(res){
                    if(res.status=='success'){
                        $('#adddocs').modal('hide');
                        $('#adddokumentasi')[0].reset();
                        $('.table').load(location.href+' .table');
                    Command: toastr["success"]("Dokumentasi Website Telah berhasil", "Success")

                            toastr.options = {
                            "closeButton": true,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                            }
                    }
                },error:function(err){
                    let error = err.responseJSON;
                    $.each(error.errors,function(index, value){
                        $('.errMsgContainer').append('<span class="text-danger">'+value+'</span>'+'<br>');
                    });

                }
            });
        })

        //show update value update form
        $(document).on('click','.update_user_form', function(){
             let id  = $(this).data('id');
            let role  = $(this).data('role');
            $('#up_id').val(id);
            $('#up_role').val(role);

        });

        //update proses system
          $(document).on('click','.update_user',function(e){
            e.preventDefault();
            let up_id = $('#up_id').val();
            let up_role = $('#up_role').val();
            //console.log(up_id+up_lokasi+up_user_id);
            $.ajax({
                url:"{{ route('update.user') }}",
                method:'POST',
                data:{up_id:up_id,up_role:up_role},
                success:function(res){
                    if(res.status=='success'){
                        $('#updateModal').modal('hide');
                        $('#updateproductform')[0].reset();
                        $('.table').load(location.href+' .table');
                          Command: toastr["success"]("Module Telah berhasil di Update", "Success")

                            toastr.options = {
                            "closeButton": true,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                            }
                    }
                },error:function(err){
                    let error = err.responseJSON;
                    $.each(error.errors,function(index, value){
                        $('.errMsgContainer').append('<span class="text-danger">'+value+'</span>'+'<br>');
                    });

                }
            });
        })




    });
    </script>

    <script>
    $(document).ready(function(){
        $(document).on('click','.add_kontak',function(e){
            e.preventDefault();
            let link = $('#link').val();
            let teks = $('#teks').val();
            let image = $('#image')[0].files[0];
            let status = $('#status').val();
             let formData = new FormData();
        formData.append('link', link);
        formData.append('teks', teks);
        formData.append('image', image);
        formData.append('status', status);
            //console.log(lokasi+user_id+status);
            $.ajax({
                url:"{{ route('add.kontak') }}",
                method:'POST',
                 data: formData,
            contentType: false,
            processData: false,
                success:function(res){
                    if(res.status=='success'){
                        $('#addkons').modal('hide');
                        $('#addkontak')[0].reset();
                        $('.table').load(location.href+' .table');
                    Command: toastr["success"]("Dokumentasi Website Telah berhasil", "Success")

                            toastr.options = {
                            "closeButton": true,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                            }
                    }
                },error:function(err){
                    let error = err.responseJSON;
                    $.each(error.errors,function(index, value){
                        $('.errMsgContainer').append('<span class="text-danger">'+value+'</span>'+'<br>');
                    });

                }
            });
        })

        //show update value update form
        $(document).on('click','.update_user_form', function(){
             let id  = $(this).data('id');
            let role  = $(this).data('role');
            $('#up_id').val(id);
            $('#up_role').val(role);

        });

        //update proses system
          $(document).on('click','.update_user',function(e){
            e.preventDefault();
            let up_id = $('#up_id').val();
            let up_role = $('#up_role').val();
            //console.log(up_id+up_lokasi+up_user_id);
            $.ajax({
                url:"{{ route('update.user') }}",
                method:'POST',
                data:{up_id:up_id,up_role:up_role},
                success:function(res){
                    if(res.status=='success'){
                        $('#updateModal').modal('hide');
                        $('#updateproductform')[0].reset();
                        $('.table').load(location.href+' .table');
                          Command: toastr["success"]("Module Telah berhasil di Update", "Success")

                            toastr.options = {
                            "closeButton": true,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                            }
                    }
                },error:function(err){
                    let error = err.responseJSON;
                    $.each(error.errors,function(index, value){
                        $('.errMsgContainer').append('<span class="text-danger">'+value+'</span>'+'<br>');
                    });

                }
            });
        })




    });
    </script>
 <script>
    $(document).ready(function(){
        $(document).on('click','.add_testimoni',function(e){
            e.preventDefault();
            let judul = $('#judul').val();
            let teks = $('#teks').val();

             let formData = new FormData();
        formData.append('judul', judul);
        formData.append('teks', teks);
            //console.log(lokasi+user_id+status);
            $.ajax({
                url:"{{ route('add.testimoni') }}",
                method:'POST',
                 data: formData,
            contentType: false,
            processData: false,
                success:function(res){
                    if(res.status=='success'){
                        $('#addtesti').modal('hide');
                        $('#addtestimoni')[0].reset();
                        $('.table').load(location.href+' .table');
                    Command: toastr["success"]("Dokumentasi Website Telah berhasil", "Success")

                            toastr.options = {
                            "closeButton": true,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                            }
                    }
                },error:function(err){
                    let error = err.responseJSON;
                    $.each(error.errors,function(index, value){
                        $('.errMsgContainer').append('<span class="text-danger">'+value+'</span>'+'<br>');
                    });

                }
            });
        })

        //show update value update form
        $(document).on('click','.update_user_form', function(){
             let id  = $(this).data('id');
            let judul  = $(this).data('judul');
                        let teks  = $(this).data('teks');

            $('#up_id').val(id);
            $('#judul').val(judul);
            $('#teks').val(teks);
        });

        //update proses system
          $(document).on('click','.update_testi',function(e){
            e.preventDefault();
            let up_id = $('#up_id').val();
            let judul = $('#judul').val();
                        let teks = $('#teks').val();
            //console.log(up_id+up_lokasi+up_user_id);
            $.ajax({
                url:"{{ route('update.testimoni') }}",
                method:'POST',
                data:{up_id:up_id,judul:judul,teks:teks},
                success:function(res){
                    if(res.status=='success'){
                        $('#updatetesti').modal('hide');
                        $('#updatetestimoni')[0].reset();
                        $('.table').load(location.href+' .table');
                          Command: toastr["success"]("Module Telah berhasil di Update", "Success")

                            toastr.options = {
                            "closeButton": true,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                            }
                    }
                },error:function(err){
                    let error = err.responseJSON;
                    $.each(error.errors,function(index, value){
                        $('.errMsgContainer').append('<span class="text-danger">'+value+'</span>'+'<br>');
                    });

                }
            });
        })




    });
    </script>

    <script>
    $(document).ready(function(){
        $(document).on('click','.add_footer',function(e){
            e.preventDefault();
            let judul = $('#judul').val();
            let deskripsi = $('#deskripsi').val();
            let alamat = $('#alamat').val();
            let email = $('#email').val();
            let phone = $('#phone').val();
            let instagram = $('#instagram').val();
            let youtube = $('#youtube').val();
            let status = $('#status').val();
            let image = $('#image')[0].files[0];

             let formData = new FormData();
        formData.append('judul', judul);
        formData.append('deskripsi', deskripsi);
                formData.append('alamat', alamat);
        formData.append('email', email);
        formData.append('phone', phone);
        formData.append('instagram', instagram);
        formData.append('youtube', youtube);
        formData.append('status', status);
        formData.append('image', image);
            //console.log(lokasi+user_id+status);
            $.ajax({
                url:"{{ route('add.footer') }}",
                method:'POST',
                 data: formData,
            contentType: false,
            processData: false,
                success:function(res){
                    if(res.status=='success'){
                        $('#addfoot').modal('hide');
                        $('#addfooter')[0].reset();
                        $('.table').load(location.href+' .table');
                    Command: toastr["success"]("Dokumentasi Website Telah berhasil", "Success")

                            toastr.options = {
                            "closeButton": true,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                            }
                    }
                },error:function(err){
                    let error = err.responseJSON;
                    $.each(error.errors,function(index, value){
                        $('.errMsgContainer').append('<span class="text-danger">'+value+'</span>'+'<br>');
                    });

                }
            });
        })

        //show update value update form
        $(document).on('click','.update_user_form', function(){
             let id  = $(this).data('id');
            let role  = $(this).data('role');
            $('#up_id').val(id);
            $('#up_role').val(role);

        });

        //update proses system
          $(document).on('click','.update_user',function(e){
            e.preventDefault();
            let up_id = $('#up_id').val();
            let up_role = $('#up_role').val();
            //console.log(up_id+up_lokasi+up_user_id);
            $.ajax({
                url:"{{ route('update.user') }}",
                method:'POST',
                data:{up_id:up_id,up_role:up_role},
                success:function(res){
                    if(res.status=='success'){
                        $('#updateModal').modal('hide');
                        $('#updateproductform')[0].reset();
                        $('.table').load(location.href+' .table');
                          Command: toastr["success"]("Module Telah berhasil di Update", "Success")

                            toastr.options = {
                            "closeButton": true,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                            }
                    }
                },error:function(err){
                    let error = err.responseJSON;
                    $.each(error.errors,function(index, value){
                        $('.errMsgContainer').append('<span class="text-danger">'+value+'</span>'+'<br>');
                    });

                }
            });
        })




    });
    </script>
</body>

</html>