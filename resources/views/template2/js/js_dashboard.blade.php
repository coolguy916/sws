{{-- Fetch Data Categories --}}

<script>
    function refreshConsumptionData() {
        $.ajax({
            url: "/categories-consumtion",
            type: "get",
            dataType: "json",
            success: function(response) {
                var data = response.categoriesData;
                var module = response.modules;

                var moduleOn = module.some(module => module.status === 1)

                console.log(moduleOn)
                if (data !== null) {
                    $('#kwh-categories').text( data.kwh + ' kwh');
                    $('#watt-categories').text( data.power + ' watt');
                    $('#volt-categories').text( data.voltage + ' volt');
                    $('#ampe-categories').text( data.ampere + ' ampe');
                } else {
                    $('#kwh-categories').text('00 kwh');
                    $('#watt-categories').text('00 watt');
                    $('#volt-categories').text('00 volt');
                    $('#ampe-categories').text('00 ampe');
                }

                if(moduleOn){
                    $('.last-data-text').text('Now: ');
                } else {
                    $('.last-data-text').text('Last data: ');
                }
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    }

    $(document).ready(function() {
        setInterval(() => {
            refreshConsumptionData();
            }, 1000);
    });
</script>
