<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="your, keywords, here" />
    <meta name="description" content="Your website description here" />
    <meta name="robots" content="noindex,nofollow" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Matrix Admin Lite Free Versions Template by WrapPixel</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}" />
    <!-- Custom CSS -->
    <link href="{{ asset('assets/libs/flot/css/float-chart.css') }}" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css-inp/style-inp.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css-inp/style-ind.scss') }}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->

    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

        @include('layouts.navAdmin')

        @yield('content')

    </div>
    </div>

    <!-- ============================================================== -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- Include SweetAlert CSS and JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/sparkline/sparkline.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('dist/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('dist/js/custom.min.js') }}"></script>
    <!--This page JavaScript -->
    <!-- <script src="{{ asset('dist/js/pages/dashboards/dashboard1.js') }}"></script> -->
    <!-- Charts js Files -->
    <script src="{{ asset('assets/libs/flot/excanvas.js') }}"></script>
    <script src="{{ asset('assets/libs/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/libs/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('assets/libs/flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('assets/libs/flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('assets/libs/flot/jquery.flot.crosshair.js') }}"></script>
    <script src="{{ asset('assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('dist/js/pages/chart/chart-page-init.js') }}"></script>

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
    // Add Image
    $(document).on('click', '.add_image', function(e){
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
        
        $.ajax({
            url: "{{ route('add.slider') }}",
            method: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(res){
                if(res.status == 'success'){
                    $('#addimages').modal('hide');
                    $('#addslider')[0].reset();
                    $('.table').load(location.href + ' .table');
                    Command: toastr["success"]("Image Slider has been successfully added", "Success");

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
                    };
                }
            },
            error: function(err){
                let error = err.responseJSON;
                $('.errMsgContainer').html('');
                $.each(error.errors, function(index, value){
                    $('.errMsgContainer').append('<span class="text-danger">'+value+'</span><br>');
                });
            }
        });
    });

    $(document).on('click', '.edit_image', function(e) {
        e.preventDefault();
        
        let id = $(this).data('id');
        let body = $(this).data('body');
        let sub = $(this).data('sub');
        let status = $(this).data('status');

        $('#slider_id').val(id);
        $('#body').val(body);
        $('#sub').val(sub);
        $('#status').val(status);

        $('#addimages').modal('show');
        $('.save_image').text('Update Image Slider'); 
    });

    $(document).on('click', '.save_image', function(e) {
        e.preventDefault();

        let id = $('#slider_id').val();
        let body = $('#body').val();
        let sub = $('#sub').val();
        let image = $('#image')[0].files[0];
        let status = $('#status').val();

        let formData = new FormData();
        formData.append('body', body);
        formData.append('sub', sub);
        formData.append('status', status);
        if (image) {
            formData.append('image', image); 
        }
        if (id) {
            formData.append('slider_id', id); 
        }

        let url = id ? "{{ route('update.slider') }}" : "{{ route('add.slider') }}";
        $.ajax({
            url: url,
            method: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(res) {
                if(res.status == 'success') {
                    $('#addimages').modal('hide');
                    $('#addslider')[0].reset();
                    $('.table').load(location.href + ' .table');
                    Command: toastr["success"](id ? "Image Slider has been successfully updated" : "Image Slider has been successfully added", "Success");

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
                    };
                }
            },
            error: function(err) {
                let error = err.responseJSON;
                $('.errMsgContainer').html('');
                $.each(error.errors, function(index, value) {
                    $('.errMsgContainer').append('<span class="text-danger">'+value+'</span><br>');
                });
            }
        });
    });
});
</script>


        <script>
$(document).ready(function(){
    $(document).on('click', '.add_fitur', function(e){
        e.preventDefault();
        
        let teks = $('#teks').val();
        let image = $('#image')[0].files[0];
        let status = $('#status').val();
        
        let formData = new FormData();
        formData.append('teks', teks);
        formData.append('image', image);
        formData.append('status', status);
        
        $.ajax({
            url: "{{ route('add.fitur') }}",
            method: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(res){
                if(res.status == 'success'){
                    $('#addimagefitur').modal('hide');
                    $('#addfitur')[0].reset();
                    $('.table').load(location.href + ' .table');
                    Command: toastr["success"]("Image Slider has been successfully added", "Success");

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
                    };
                }
            },
            error: function(err){
                let error = err.responseJSON;
                $('.errMsgContainer').html('');
                $.each(error.errors, function(index, value){
                    $('.errMsgContainer').append('<span class="text-danger">'+value+'</span><br>');
                });
            }
        });
    });

    $(document).on('click', '.edit_fitur', function(e) {
        e.preventDefault();
        
        let id = $(this).data('id');
        let teks = $(this).data('teks');
        let status = $(this).data('status');

        $('#fitur_id').val(id);
        $('#teks').val(teks);
        $('#status').val(status);

        $('#addimagefitur').modal('show');
        $('.save_fitur').text('Update Image Slider'); 
    });

    $(document).on('click', '.save_fitur', function(e) {
        e.preventDefault();

        let id = $('#fitur_id').val();
        let teks = $('#teks').val();
        let image = $('#image')[0].files[0];
        let status = $('#status').val();

        let formData = new FormData();
        formData.append('teks', teks);
        formData.append('status', status);
        if (image) {
            formData.append('image', image); 
        }
        if (id) {
            formData.append('fitur_id', id); 
        }

        let url = id ? "{{ route('update.fitur') }}" : "{{ route('add.fitur') }}";
        $.ajax({
            url: url,
            method: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(res) {
                if(res.status == 'success') {
                    $('#addimagefitur').modal('hide');
                    $('#addfitur')[0].reset();
                    $('.table').load(location.href + ' .table');
                    Command: toastr["success"](id ? "Image Slider has been successfully updated" : "Image Slider has been successfully added", "Success");

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
                    };
                }
            },
            error: function(err) {
                let error = err.responseJSON;
                $('.errMsgContainer').html('');
                $.each(error.errors, function(index, value) {
                    $('.errMsgContainer').append('<span class="text-danger">'+value+'</span><br>');
                });
            }
        });
    });
});
    </script>

    
<script>
    $(document).ready(function(){
        $(document).on('click', '.add_keunggulan', function(e){
            e.preventDefault();
            let judul = $('#judul').val();
            let teks = $('#teks').val();
            let image = $('#image')[0].files[0];
            let icon = $('#icon')[0].files[0];
            let status = $('#status').val();
            
            let formData = new FormData();
            formData.append('teks', teks);
            formData.append('judul', judul);
            formData.append('icon', icon);
            formData.append('image', image);
            formData.append('status', status);
            
            $.ajax({
                url: "{{ route('add.keunggulan') }}",
                method: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(res){
                    if(res.status == 'success'){
                        $('#addform').modal('hide');
                        $('#addkeunggulan')[0].reset();
                        $('.table').load(location.href + ' .table');
                        Command: toastr["success"]("Image Slider has been successfully added", "Success");
    
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
                        };
                    }
                },
                error: function(err){
                    let error = err.responseJSON;
                    $('.errMsgContainer').html('');
                    $.each(error.errors, function(index, value){
                        $('.errMsgContainer').append('<span class="text-danger">'+value+'</span><br>');
                    });
                }
            });
        });
    
        $(document).on('click', '.edit_keunggulan', function(e) {
            e.preventDefault();
            
            let id = $(this).data('id');
            let teks = $(this).data('teks');
            let judul = $(this).data('judul');
            let status = $(this).data('status');
    
            $('#keunggulan_id').val(id);
            $('#teks').val(teks);
            $('#judul').val(judul);
            $('#status').val(status);
    
            $('#addform').modal('show');
            $('.save_keunggulan').text('Update Keunggulan'); 
        });
    
        $(document).on('click', '.save_keunggulan', function(e) {
            e.preventDefault();
    
            let id = $('#keunggulan_id').val();
            let teks = $('#teks').val();
            let judul = $('#judul').val();
            let image = $('#image')[0].files[0];
            let icon = $('#icon')[0].files[0];
            let status = $('#status').val();
    
            let formData = new FormData();
            formData.append('teks', teks);
            formData.append('status', status);
            formData.append('judul', judul);
            if (image) {
                formData.append('image', image); 
            }
            if (icon) {
                formData.append('icon', icon); 
            }
            if (id) {
                formData.append('keunggulan_id', id); 
            }
    
            let url = id ? "{{ route('update.keunggulan') }}" : "{{ route('add.keunggulan') }}";
            $.ajax({
                url: url,
                method: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(res) {
                    if(res.status == 'success') {
                        $('#addform').modal('hide');
                        $('#addkeunggulan')[0].reset();
                        $('.table').load(location.href + ' .table');
                        Command: toastr["success"](id ? "Image Slider has been successfully updated" : "Image Slider has been successfully added", "Success");
    
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
                        };
                    }
                },
                error: function(err) {
                    let error = err.responseJSON;
                    $('.errMsgContainer').html('');
                    $.each(error.errors, function(index, value) {
                        $('.errMsgContainer').append('<span class="text-danger">'+value+'</span><br>');
                    });
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function(){
        $(document).on('click', '.add_dokumentasi', function(e){
            e.preventDefault();
            let judul = $('#judul').val();
            let teks = $('#teks').val();
            let image = $('#image')[0].files[0];
            let status = $('#status').val();
            
            let formData = new FormData();
            formData.append('teks', teks);
            formData.append('judul', judul);
            formData.append('image', image);
            formData.append('status', status);
            
            $.ajax({
                url: "{{ route('add.dokumentasi') }}",
                method: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(res){
                    if(res.status == 'success'){
                        $('#adddocs').modal('hide');
                        $('#adddokumentasi')[0].reset();
                        $('.table').load(location.href + ' .table');
                        Command: toastr["success"]("Dokumentasi has been successfully added", "Success");
    
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
                        };
                    }
                },
                error: function(err){
                    let error = err.responseJSON;
                    $('.errMsgContainer').html('');
                    $.each(error.errors, function(index, value){
                        $('.errMsgContainer').append('<span class="text-danger">'+value+'</span><br>');
                    });
                }
            });
        });
    
        $(document).on('click', '.edit_dokumentasi', function(e) {
            e.preventDefault();
            
            let id = $(this).data('id');
            let teks = $(this).data('teks');
            let judul = $(this).data('judul');
            let status = $(this).data('status');
    
            $('#docs_id').val(id);
            $('#teks').val(teks);
            $('#judul').val(judul);
            $('#status').val(status);
    
            $('#adddocs').modal('show');
            $('.save_dokumentasi').text('Update Dokumentasi'); 
        });
    
        $(document).on('click', '.save_dokumentasi', function(e) {
            e.preventDefault();
    
            let id = $('#docs_id').val();
            let teks = $('#teks').val();
            let judul = $('#judul').val();
            let image = $('#image')[0].files[0];
            let status = $('#status').val();
    
            let formData = new FormData();
            formData.append('teks', teks);
            formData.append('status', status);
            formData.append('judul', judul);
            if (image) {
                formData.append('image', image); 
            }
           
            if (id) {
                formData.append('docs_id', id); 
            }
    
            let url = id ? "{{ route('update.dokumentasi') }}" : "{{ route('add.dokumentasi') }}";
            $.ajax({
                url: url,
                method: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(res) {
                    if(res.status == 'success') {
                        $('#adddocs').modal('hide');
                        $('#adddokumentasi')[0].reset();
                        $('.table').load(location.href + ' .table');
                        Command: toastr["success"](id ? "Dokumentasi has been successfully updated" : "Dokumentasi has been successfully added", "Success");
    
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
                        };
                    }
                },
                error: function(err) {
                    let error = err.responseJSON;
                    $('.errMsgContainer').html('');
                    $.each(error.errors, function(index, value) {
                        $('.errMsgContainer').append('<span class="text-danger">'+value+'</span><br>');
                    });
                }
            });
        });
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
