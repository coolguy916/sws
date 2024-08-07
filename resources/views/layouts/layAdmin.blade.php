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
    <link href="https://unpkg.com/grapesjs/dist/css/grapes.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.css" rel="stylesheet">

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.js"></script>
    <script src="https://unpkg.com/grapesjs"></script>
<script src="https://unpkg.com/grapesjs-plugin-forms"></script>
<script src="https://unpkg.com/grapesjs-blocks-basic"></script>
<script src="https://unpkg.com/grapesjs-preset-newsletter"></script>
<script type="text/javascript">
    var editor = grapesjs.init({
        container: '#gjs',
        fromElement: true,
        height: '400px',
        width: 'auto',
        storageManager: { type: null },
        plugins: [
            'gjs-blocks-basic',
            'grapesjs-plugin-forms',
            'grapesjs-preset-newsletter'
        ],
        pluginsOpts: {
            'gjs-blocks-basic': {},
            'grapesjs-plugin-forms': {},
            'grapesjs-preset-newsletter': {}
        },
        blockManager: {
            appendTo: '#gjs'
        },
        panels: {
            defaults: [
                {
                    id: 'panel-top',
                    el: '.panel__top',
                },
                {
                    id: 'panel-basic-actions',
                    el: '.panel__basic-actions',
                    buttons: [
                        {
                            id: 'visibility',
                            active: true, // active by default
                            label: '<u>Visibility</u>',
                            command: 'sw-visibility', // Built-in command
                        }, {
                            id: 'export',
                            className: 'btn-open-export',
                            label: 'Export',
                            command: 'export-template',
                            context: 'export-template', // For grouping context of buttons from the same panel
                        }, {
                            id: 'show-json',
                            className: 'btn-show-json',
                            label: 'Show JSON',
                            context: 'show-json',
                            command(editor) {
                                editor.Modal.setTitle('Components JSON')
                                    .setContent(`<textarea style="width:100%; height: 250px;">
                                    ${JSON.stringify(editor.getComponents())}</textarea>`)
                                    .open();
                            },
                        }
                    ],
                }
            ]
        }
    });

    document.querySelector('form').addEventListener('submit', function() {
        var content = editor.getHtml();
        document.getElementById('content').value = content;
    });
</script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 300, // Set the height as needed
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']]
                ]
            });
        });
    </script>
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
    $(document).ready(function() {
        // Show update form
        $(document).on('click', '.update_user_form', function() {
            let id = $(this).data('id');
            let role = $(this).data('role');
            $('#up_id').val(id);
            $('#up_role').val(role);
        });

        // Update process
        $(document).on('click', '.update_user', function(e) {
            e.preventDefault();
            let up_id = $('#up_id').val();
            let up_role = $('#up_role').val();

            $.ajax({
                url: "{{ route('update.user') }}",
                method: 'POST',
                data: { up_id: up_id, up_role: up_role },
                success: function(res) {
                    if (res.status == 'success') {
                        $('#updateModal').modal('hide');
                        $('#updateproductform')[0].reset();
                        $('.table').load(location.href + ' .table');
                        Command: toastr["success"]("Module Telah berhasil di Update", "Success");

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
                    $.each(error.errors, function(index, value) {
                        $('.errMsgContainer').append('<span class="text-danger">' + value + '</span>' + '<br>');
                    });
                }
            });
        });
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
    $(document).on('click', '.open_keunggulan', function(e){
        e.preventDefault();
        $('#addkeunggulan')[0].reset(); 
        $('#keunggulan_id').val(''); 
        $('.save_keunggulan').text('Add Keunggulan'); 
        $('.save_keunggulan').data('action', 'add'); 
    });

    $(document).on('click', '.edit_keunggulan', function(e) {
        e.preventDefault();
        let id = $(this).data('id');
        let judul = $(this).data('judul');
        let teks = $(this).data('teks');
        let icon = $(this).data('icon');
        let status = $(this).data('status');

        $('#keunggulan_id').val(id);
        $('#judul').val(judul);
        $('#teks').val(teks);
        $('#icon').val(icon);
        $('#status').val(status);

        $('#keunggulan').modal('show');
        $('.save_keunggulan').text('Update Keunggulan '); 
        $('.save_keunggulan').data('action', 'edit'); 
    });

    $(document).on('click', '.save_keunggulan', function(e) {
        e.preventDefault();

        let action = $(this).data('action');
        let id = $('#keunggulan_id').val();
        let judul = $('#judul').val();
        let teks = $('#teks').val();
        let icon = $('#icon').val();
        let status = $('#status').val();

        let formData = new FormData();
        formData.append('judul', judul);
        formData.append('teks', teks);
        formData.append('status', status);
        formData.append('icon', icon);

        let url = action === 'edit' ? "{{ route('update.keunggulan') }}" : "{{ route('add.keunggulan') }}";
        if (action === 'edit') {
            formData.append('keunggulan_id', id);
        }

        $.ajax({
            url: url,
            method: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(res) {
                if(res.status == 'success') {
                    $('#keunggulan').modal('hide');
                    $('#addkeunggulan')[0].reset();
                    $('.table').load(location.href + ' .table');
                    Command: toastr["success"](action === 'edit' ? "keunggulan has been successfully updated" : "keunggulan has been successfully added", "Success");

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
    $(document).on('click', '.open_dokumentasi', function(e){
        e.preventDefault();
        $('#adddocs')[0].reset(); 
        $('#docks_id').val(''); 
        $('.save_dokumentasi').text('Add Dokumentasi'); 
        $('.save_dokumentasi').data('action', 'add'); 
    });

    $(document).on('click', '.edit_dokumentasi', function(e) {
        e.preventDefault();
        let id = $(this).data('id');
        let judul = $(this).data('judul');
        let teks = $(this).data('teks');
        let status = $(this).data('status');

        $('#docs_id').val(id);
        $('#judul').val(judul);
        $('#teks').val(teks);
        $('#status').val(status);

        $('#dokumentasi').modal('show');
        $('.save_dokumentasi').text('Update Dokumentasi '); 
        $('.save_dokumentasi').data('action', 'edit'); 
    });

    $(document).on('click', '.save_dokumentasi', function(e) {
        e.preventDefault();

        let action = $(this).data('action');
        let id = $('#docs_id').val();
        let judul = $('#judul').val();
        let teks = $('#teks').val();
        let image = $('#image')[0].files[0];
        let status = $('#status').val();

        let formData = new FormData();
        formData.append('judul', judul);
        formData.append('teks', teks);
        formData.append('status', status);
        if (image) {
            formData.append('image', image);
        }

        let url = action === 'edit' ? "{{ route('update.dokumentasi') }}" : "{{ route('add.dokumentasi') }}";
        if (action === 'edit') {
            formData.append('docs_id', id);
        }

        $.ajax({
            url: url,
            method: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(res) {
                if(res.status == 'success') {
                    $('#dokumentasi').modal('hide');
                    $('#adddocs')[0].reset();
                    $('.table').load(location.href + ' .table');
                    Command: toastr["success"](action === 'edit' ? "Dokumentasi has been successfully updated" : "Dokumentasi has been successfully added", "Success");

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
    $(document).on('click', '.open_testimoni', function(e){
        e.preventDefault();
        $('#addtestimoni')[0].reset(); 
        $('#testimoni_id').val(''); 
        $('.save_testimoni').text('Add Testimoni'); 
        $('.save_testimoni').data('action', 'add'); 
    });

    $(document).on('click', '.edit_testimoni', function(e) {
        e.preventDefault();
        let id = $(this).data('id');
        let judul = $(this).data('judul');
        let teks = $(this).data('teks');
        let status = $(this).data('status');

        $('#testimoni_id').val(id);
        $('#judul').val(judul);
        $('#teks').val(teks);
        $('#status').val(status);

        $('#testimoni').modal('show');
        $('.save_testimoni').text('Update testimoni'); 
        $('.save_testimoni').data('action', 'edit'); 
    });

    $(document).on('click', '.save_testimoni', function(e) {
        e.preventDefault();

        let action = $(this).data('action');
        let id = $('#testimoni_id').val();
        let judul = $('#judul').val();
        let teks = $('#teks').val();
        let status = $('#status').val();

        let formData = new FormData();
        formData.append('judul', judul);
        formData.append('teks', teks);
        formData.append('status', status);
       

        let url = action === 'edit' ? "{{ route('update.testimoni') }}" : "{{ route('add.testimoni') }}";
        if (action === 'edit') {
            formData.append('testimoni_id', id);
        }

        $.ajax({
            url: url,
            method: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(res) {
                if(res.status == 'success') {
                    $('#testimoni').modal('hide');
                    $('#addtestimoni')[0].reset();
                    $('.table').load(location.href + ' .table');
                    Command: toastr["success"](action === 'edit' ? "Testimoni has been successfully updated" : "Testimoni has been successfully added", "Success");

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
    $(document).on('click', '.open_news', function(e){
        e.preventDefault();
        $('#addnews')[0].reset(); 
        $('#news_id').val(''); 
        $('.save_news').text('Add News'); 
        $('.save_news').data('action', 'add'); 
    });

    $(document).on('click', '.edit_news', function(e) {
        e.preventDefault();
        let id = $(this).data('id');
        let judul = $(this).data('judul');
        let teks = $(this).data('teks');
        let status = $(this).data('status');

        $('#news_id').val(id);
        $('#judul').val(judul);
        $('#teks').val(teks);
        $('#status').val(status);

        $('#news').modal('show');
        $('.save_news').text('Update News '); 
        $('.save_news').data('action', 'edit'); 
    });

    $(document).on('click', '.save_news', function(e) {
        e.preventDefault();

        let action = $(this).data('action');
        let id = $('#news_id').val();
        let judul = $('#judul').val();
        let teks = $('#teks').val();
        let image = $('#image')[0].files[0];
        let icon = $('#icon')[0].files[0];
        let status = $('#status').val();

        let formData = new FormData();
        formData.append('judul', judul);
        formData.append('teks', teks);
        formData.append('status', status);
        if (image) {
            formData.append('image', image);
        }
        if (icon) {
            formData.append('icon', icon);
        }

        let url = action === 'edit' ? "{{ route('update.news') }}" : "{{ route('add.news') }}";
        if (action === 'edit') {
            formData.append('news_id', id);
        }

        $.ajax({
            url: url,
            method: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(res) {
                if(res.status == 'success') {
                    $('#news').modal('hide');
                    $('#addnews')[0].reset();
                    $('.table').load(location.href + ' .table');
                    Command: toastr["success"](action === 'edit' ? "news has been successfully updated" : "news has been successfully added", "Success");

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
    $(document).on('click', '.delete_news', function (e) {
        e.preventDefault();
        let news_id = $(this).data('id');

        Swal.fire({
            title: 'Are you sure?',
            text: 'You are about to delete this News!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "{{ route('delete.news') }}", 
                    method: 'POST',
                    data: {
                        news_id: news_id,
                        _token: '{{ csrf_token() }}' 
                    },
                    dataType: 'json',
                    success: function (res) {
                        if (res.status === 'success') {
                            $('.table').load(location.href + ' .table');

                            Swal.fire({
                                title: 'Deleted!',
                                text: 'News has been deleted.',
                                icon: 'success',
                                timer: 2000,
                                timerProgressBar: true,
                            });
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error(error);

                        Swal.fire({
                            title: 'Error!',
                            text: 'Failed to delete the News.',
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
    $(document).on('click', '.delete_keunggulan', function (e) {
        e.preventDefault();
        let keunggulan_id = $(this).data('id');

        Swal.fire({
            title: 'Are you sure?',
            text: 'You are about to delete this fitur!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "{{ route('delete.keunggulan') }}", 
                    method: 'POST',
                    data: {
                        keunggulan_id: keunggulan_id,
                        _token: '{{ csrf_token() }}' 
                    },
                    dataType: 'json',
                    success: function (res) {
                        if (res.status === 'success') {
                            $('.table').load(location.href + ' .table');

                            Swal.fire({
                                title: 'Deleted!',
                                text: 'Slider has been deleted.',
                                icon: 'success',
                                timer: 2000,
                                timerProgressBar: true,
                            });
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error(error);

                        Swal.fire({
                            title: 'Error!',
                            text: 'Failed to delete the slider.',
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
    $(document).on('click', '.delete_dokumentasi', function (e) {
        e.preventDefault();
        let docs_id = $(this).data('id');

        Swal.fire({
            title: 'Are you sure?',
            text: 'You are about to delete this dokumentasi!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "{{ route('delete.dokumentasi') }}", 
                    method: 'POST',
                    data: {
                        docs_id: docs_id,
                        _token: '{{ csrf_token() }}' 
                    },
                    dataType: 'json',
                    success: function (res) {
                        if (res.status === 'success') {
                            $('.table').load(location.href + ' .table');

                            Swal.fire({
                                title: 'Deleted!',
                                text: 'Slider has been deleted.',
                                icon: 'success',
                                timer: 2000,
                                timerProgressBar: true,
                            });
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error(error);

                        Swal.fire({
                            title: 'Error!',
                            text: 'Failed to delete the slider.',
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
    $(document).on('click', '.delete_testimoni', function (e) {
        e.preventDefault();
        let testimoni_id = $(this).data('id');

        Swal.fire({
            title: 'Are you sure?',
            text: 'You are about to delete this dokumentasi!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "{{ route('delete.testimoni') }}", 
                    method: 'POST',
                    data: {
                        testimoni_id: testimoni_id,
                        _token: '{{ csrf_token() }}' 
                    },
                    dataType: 'json',
                    success: function (res) {
                        if (res.status === 'success') {
                            $('.table').load(location.href + ' .table');

                            Swal.fire({
                                title: 'Deleted!',
                                text: 'Slider has been deleted.',
                                icon: 'success',
                                timer: 2000,
                                timerProgressBar: true,
                            });
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error(error);

                        Swal.fire({
                            title: 'Error!',
                            text: 'Failed to delete the slider.',
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




</body>

</html>
