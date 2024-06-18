<script>
    function fetchusermodule() {
        $.ajax({
            type: "GET",
            url: "/fetch-usermodules",
            dataType: "json",
            success: function(response) {
                $('#modules-container').html('');

                // Check if response.modules is defined
                if (response.modules) {
                    // Display Modules
                    $.each(response.modules, function(index, module) {
                        var statusClass = module.status == 1 ?
                            'icon icon-shape bg-gradient-success shadow-success text-center rounded-circle' :
                            'icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle';

                        var moduleHtml =
                            '<div class="col-lg-3 col-md-4 col-sm-6 mb-4 ps-3 py-2">' +
                            '<div class="card shadow">' +
                            '<div class="card-body p-3">' +
                            '<div class="row">' +
                            '<div class="col-8">' +
                            '<div class="numbers">' +
                            '<p class="text-sm mb-0 text-uppercase font-weight-bold">Modul ' + (
                                index + 1) + '</p>' +
                            '<h5 class="font-weight-bolder">' + module.lokasi + '</h5>' +
                            '<div class="form-check form-switch form-switch-xl">' +
                            '<input data-id="' + module.id +
                            '" class="form-check-input togglemodule-class" ' +
                            'data-onstyle="success" data-offstyle="danger" data-toggle="toggle" ' +
                            'data-on="Active" data-off="Inactive" type="checkbox" ' +
                            (module.status == 1 ? 'checked' : '') +
                            '>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '<div class="col-4 text-end">' +
                            '<div class="' + statusClass + '"></div>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>';

                        $('#modules-container').append(moduleHtml);
                    });
                }

                // Add event delegation for the checkbox changes
                $('#modules-container').off('change', '.togglemodule-class').on('change',
                    '.togglemodule-class',
                    function() {
                        var status_module = $(this).prop('checked') == true ? 1 : 0;
                        var module_id = $(this).data('id');

                        $.ajax({
                            type: "GET",
                            dataType: "json",
                            url: "/switch-statusmodule",
                            data: {
                                'status': status_module,
                                'module_id': module_id
                            },
                            success: function(data) {
                                if (data.status == 1) {
                                    toastr.success('Module is now ON');
                                } else if (data.status == 0) {
                                    toastr.success('Module is now OFF');
                                } else {
                                    toastr.warning('Unknown status');
                                }
                            },
                        });
                    });
            },
            error: function(xhr, status, error) {
                console.error('Error fetching user modules:', status);
            }
        });
    }

    $(document).ready(function() {
        fetchusermodule();

        // Automatic refresh every 1 minute
        setInterval(function() {
            fetchusermodule();
        }, 60000); // 60,000 milliseconds = 1 minute

        // Other AJAX calls for creating, editing, and deleting schedules if needed
        // ...
    });
</script>
