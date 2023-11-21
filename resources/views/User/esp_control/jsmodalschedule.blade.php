<script>
    function fetchusermodule() {
        $.ajax({
            type: "GET",
            url: "/fetch-usermodules",
            dataType: "json",
            success: function (response) {
                $('#modules-container').html('');

                // Check if response.modules is defined
                if (response.modules) {
                    // Display Modules
                    $.each(response.modules, function (index, module) {
                        var statusClass = module.status == 1 ? 'led-green' : 'led-black';

                    var moduleHtml =
                        '<div class="card" style="width: 18rem; margin-right: 10px;">' +
                        '<div class="card-body rounded-auto text-center">' +
                        '<div class="' + statusClass + '"></div>' +
                        '<h5 class="card-title mt-4">Modul ' + (index + 1) + '</h5>' +
                        '<h6 class="card-subtitle text-muted">' + module.lokasi + '</h6>' +
                        '<hr class="w-auto border-light">' +
                        '<div class="form-check form-switch form-switch-xl" style="margin-left: 4.6rem">' +
                        '<input data-id="' + module.id + '" class="form-check-input togglemodule-class" ' +
                        'data-onstyle="success" data-offstyle="danger" data-toggle="toggle" ' +
                        'data-on="Active" data-off="Inactive" type="checkbox" ' +
                            (module.status ? 'checked' : '') +
                            '>' +
                            '</div>' +
                            '</div>' +
                            '</div>';

                        $('#modules-container').append(moduleHtml);
                    });
                }

                // Add event delegation for the checkbox changes
                $('#modules-container').off('change', '.togglemodule-class').on('change', '.togglemodule-class', function() {
                    var status_module = $(this).prop('checked') == true ? 1 : 0;
                    var module_id = $(this).data('id');

                    $.ajax({
                        type: "GET",
                        dataType: "json",
                        url: "/switch-statusmodule",
                        data: {'status' : status_module, 'module_id' : module_id},
                        success: function(data){
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
            error: function (xhr, status, error) {
                console.error('Error fetching user modules:', status);
            }
        });
    }



    // REFRESH SCHEDULE
    function fetchschedule(page = 1) {
        $.ajax({
            type: "GET",
            url: "/fetch-schedules?page=" + page,
            dataType: "json",
            data: {
                page: page
            },
            success: function(response) {
                // console.log(response);
                $('tbody').html("");
                $.each(response.esp_controls, function(key, item) {
                    // Assuming item.schedule is a string in 'hh:mm:ss' format
                    var timeParts = item.schedule.split(':');
                    var formattedTime = '';
                    if (timeParts.length === 3) {
                         var hours = parseInt(timeParts[0]);
                        var minutes = parseInt(timeParts[1]);
                        formattedTime = (hours % 12 || 12) + ':' + (minutes < 10 ? '0' :
                            '') + minutes + ' ' + (hours >= 12 ? 'PM' : 'AM');
                        var now = new Date();

                        var hours = now.getHours();
                        var minutes = now.getMinutes();
                        var ampm = hours >= 12 ? 'PM' : 'AM';
                        hours = hours % 12 || 12;
                        var formattedTimenow = hours + ':' + (minutes < 10 ? '0' : '') + minutes + ' ' + ampm;
                    }
                    if (formattedTime === formattedTimenow) {
    $.ajax({
        url: '/update_status', 
        method: 'POST', 
        data: {
           
            id: item.id, 
            status: 1 
        },
        success: function(response) {
            console.log('Status updated successfully:', response);
        },
        error: function(xhr, status, error) {
            console.error('Error updating status:', error);
        }
    });
} else {
    console.log('Requirements not met to update status.');
}

                    var statusBadge = item.status == 1 ?
                        '<p class="border border-primary d-inline-flex p-1 text-white bg-success rounded">ONLINE</p>' :
                        '<p class="border border-primary d-inline-flex p-1 text-white bg-secondary rounded">OFFLINE</p>';

                    var actionButtons = '<td>\
                            <button type="button" value="' + item.id + '" class="btn btn-warning editbtn btn-sm">Edit</button>\
                            <button type="button" value="' + item.id + '" class="btn btn-danger deletebtn btn-sm">Delete</button>\
                            </td>';

                    $('tbody').append('<tr>\
                        <td>' + (key + 1) + '</td>\
                        <td>' + formattedTime + '</td>\
                        <td>' + item.lokasi + '</td>\
                        <td>' + item.runtime + '</td>\
                        <td>' + statusBadge + '</td>' + actionButtons + '\
                </tr>');
                });

                // Add pagination links
                if (response.pagination) {
                    var paginationHtml = '<nav aria-label="Page navigation"><ul class="pagination">';

                    // Previous Page Link
                    paginationHtml += '<li class="page-item' + (response.pagination.current_page === 1 ? ' disabled' : '') + '">';
                    paginationHtml += '<a class="page-link" href="#" aria-label="Previous" onclick="fetchschedule(' + (response.pagination.current_page - 1) + ')">';
                    paginationHtml += '<span aria-hidden="true">&laquo;</span></a></li>';

                    // Page Links
                    for (var i = 1; i <= response.pagination.last_page; i++) {
                        paginationHtml += '<li class="page-item' + (i === response.pagination.current_page ? ' active' : '') + '">';
                        paginationHtml += '<a class="page-link" href="#" onclick="fetchschedule(' + i + ')">' + i + '</a></li>';
                    }

                    // Next Page Link
                    paginationHtml += '<li class="page-item' + (response.pagination.current_page === response.pagination.last_page ? ' disabled' : '') + '">';
                    paginationHtml += '<a class="page-link" href="#" aria-label="Next" onclick="fetchschedule(' + (response.pagination.current_page + 1) + ')">';
                    paginationHtml += '<span aria-hidden="true">&raquo;</span></a></li>';

                    paginationHtml += '</ul></nav>';

                    $('.pagination-container').html(paginationHtml);
                }

            },
            error: function (xhr, status, error) {
            console.error('Error fetching schedule : ', status);
        }
        });
    }

    $(document).ready(function() {

        fetchschedule();
        fetchusermodule();
        // let fetchcount = 0;

        // Automatic refresh every 1 minute
        setInterval(function() {
            // console.log(fetchcount++);
            fetchschedule();
            fetchusermodule();
        }, 6000); // 60,000 milliseconds = 1 minute

        // CREATE FUNCTION
        $(document).on('click', '.add_schedule', function(e) {
            e.preventDefault();

            $(this).text('Sending..');

            var data = {
                'schedule': $('.schedule').val(),
                'runtime': $('.runtime').val(),
                'id_module': $('.id_module').val(),
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
                url: "/schedules",
                data: data,
                dataType: "json",
                success: function(response) {
                    if (response.status == 400) {
                        $('#save_msgList').html("");
                        $('#save_msgList').addClass('alert alert-danger');
                        $.each(response.errors, function(key, err_value) {
                            $('#save_msgList').append('<li>' + err_value + '</li>');
                        });
                        $('.add_schedule').text('Save');
                        toastr.error(
                            'Error adding schedule: Please check the form for errors.');
                    } else {
                        $('#save_msgList').html("");
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        $('#AddScheduleModal').find('input').val('');
                        $('.add_schedule').text('Save');
                        $('#AddScheduleModal').modal('hide');
                        fetchschedule();
                        fetchusermodule();
                        toastr.success('Schedule added successfully');
                    }
                },
                error: function(xhr, status, error) {
                    toastr.error('Error adding schedule: ' + status);
                }
            });
        });


        // EDIT BUTTON
        $(document).on('click', '.editbtn', function(e) {
            e.preventDefault();
            var up_schedule_id = $(this).val();
            $('#EditScheduleModal').modal('show');
            $.ajax({
                type: "GET",
                url: "/edit-schedule/" + up_schedule_id,
                success: function(response) {
                    if (response.status == 404) {
                        toastr.error(response.message);
                        $('#EditScheduleModal').modal('hide');
                    } else {
                        $('#schedule').val(response.esp_control.schedule);
                        $('#runtime').val(response.esp_control.runtime);
                        $('#id_module').val(response.esp_control.id_module);
                        $('#up_schedule_id').val(up_schedule_id);
                    }
                }
            });
            $('.btn-close').find('input').val('');
        });


        // UPDATE FUNCTION
        $(document).on('click', '.update_schedule', function(e) {
            e.preventDefault();

            $(this).text('Updating..');
            var id = $('#up_schedule_id').val();

            var data = {
                'schedule': $('#schedule').val(),
                'runtime': $('#runtime').val(),
                'id_module': $('#id_module').val(),
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "PUT",
                url: "/update-schedule/" + id,
                data: data,
                dataType: "json",
                success: function(response) {
                    if (response.status == 400) {
                        $('#update_msgList').html("");
                        $('#update_msgList').addClass('alert alert-danger');
                        $.each(response.errors, function(key, err_value) {
                            $('#update_msgList').append('<li>' + err_value +
                                '</li>');
                        });
                        $('.update_schedule').text('Update');
                        toastr.error(
                            'Error updating schedule: Please check the form for errors.'
                        );
                    } else {
                        $('#update_msgList').html("");
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        $('#EditScheduleModal').find('input').val('');
                        $('.update_schedule').text('Update');
                        $('#EditScheduleModal').modal('hide');
                        fetchschedule();
                        fetchusermodule();
                        toastr.success('Schedule updated successfully');
                    }
                },
                error: function(xhr, status, error) {
                    toastr.error('Error updating schedule: ' + status);
                }
            });

        });


        // DELETE BUTTON
        $(document).on('click', '.deletebtn', function() {
            var del_schedule_id = $(this).val();
            $('#DeleteModal').modal('show');
            $('#del_schedule_id').val(del_schedule_id);
        });
        // DELETE FUNCTION
        $(document).on('click', '.delete_schedule', function(e) {
            e.preventDefault();

            $(this).text('Deleting..');
            var id = $('#del_schedule_id').val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "DELETE",
                url: "/delete-schedule/" + id,
                dataType: "json",
                success: function(response) {
                    if (response.status == 404) {
                        toastr.error('Error deleting schedule: ' + response.message);
                        $('.delete_schedule').text('Yes Delete');
                    } else {
                        toastr.success('Schedule deleted successfully');
                        $('#success_message').html("");
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        $('.delete_schedule').text('Yes Delete');
                        $('#DeleteModal').modal('hide');
                        fetchschedule();
                        fetchusermodule();
                    }
                },
                error: function(xhr, status, error) {
                    toastr.error('Error deleting schedule: ' + status);
                }
            });
        });
    });
</script>
