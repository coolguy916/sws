<script>
    // REFRESH FUNCTUIN
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
                    var paginationHtml = '<ul class="pagination">';
                    for (var i = 1; i <= response.pagination.last_page; i++) {
                        paginationHtml += '<li class="page-item ' + (i == response.pagination
                                .current_page ? 'active' : '') +
                            '"><a class="page-link" href="#" data-page="' + i +
                            '" onclick="fetchschedule(' + i +
                            ')">' + i + '</a></li>';
                    }
                    paginationHtml += '</ul>';

                    $('.pagination-container').html(paginationHtml);
                }
            }
        });
    }

    $(document).ready(function() {

        fetchschedule();

        // Automatic refresh every 1 minute
        setInterval(function() {
            fetchschedule();
        }, 60000); // 60,000 milliseconds = 1 minute

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
                    }
                },
                error: function(xhr, status, error) {
                    toastr.error('Error deleting schedule: ' + status);
                }
            });
        });

    });
</script>
