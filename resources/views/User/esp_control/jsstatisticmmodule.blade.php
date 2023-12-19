<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script> <!-- Include the plugin for datalabels -->

{{-- <script>
    const ctx1 = document.getElementById('myChart1');

    new Chart(ctx1, {
        data: {
            labels: ['00:00 AM', '01:00 AM', '02:00 AM', '03:00 AM', '04:00 AM', '05:00 AM', '06:00 AM',
                '07:00 AM'
            ],
            datasets: [{
                type: 'bar',
                label: 'Bar Chart',
                data: [40, 60, 30, 75, 50, 200, 500, 100],
                backgroundColor: [
                    'rgba(153, 102, 255, 0.2)',
                ],
                borderColor: [
                    'rgb(153, 102, 255)',
                ],
                borderWidth: 1
            }, {
                type: 'line',
                label: 'Line Chart',
                data: [40, 60, 30, 75, 50, 200, 500, 100],
                backgroundColor: [
                    'rgba(153, 102, 255, 0.2)',
                ],
                borderColor: [
                    'rgb(153, 102, 255)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script> --}}

<script>
    // Function to fetch new data from the server and create dynamic charts
    function createDynamicCharts() {
        $.ajax({
            url: '/api/getDynamicChartData',
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                // Clear existing charts container
                $('#dynamicChartsContainer').empty();

                // Iterate through the data and create charts dynamically
                data.forEach(function(chartData) {
                    const moduleTitle = chartData.moduleTitle;

                    // Create a container for each module with a title
                    const moduleContainer = $('<div>').addClass('module-container');
                    $('#dynamicChartsContainer').append(moduleContainer);

                    // Add the title to the container
                    const title = $('<h4>').addClass('page-title').text(moduleTitle);
                    moduleContainer.append(title);

                    // Add a canvas for each module
                    const canvasId = 'myChart' + chartData.moduleId;
                    const canvas = $('<canvas>').attr({
                        'id': canvasId,
                        'width': 400,
                        'height': 200
                    });
                    moduleContainer.append(canvas);

                    // Create the chart for each module
                    createChart(canvasId, chartData.labels, chartData.data);
                });
            },
            error: function(error) {
                console.error('Error fetching data:', error);
            }
        });
    }

    // Function to create a new chart
    function createChart(chartId, labels, data) {
        const ctx = document.getElementById(chartId).getContext('2d');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    type: 'bar',
                    label: 'kWh',
                    data: data,
                    backgroundColor: 'rgb(198, 170, 237)',
                    borderColor: 'rgb(0,38,230)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                plugins: {
                    datalabels: {
                        anchor: 'end',
                        align: 'end'
                    }
                }
            }
        });
    }

    // Call the function to create dynamic charts when the page loads
    createDynamicCharts();

    // Set an interval to refresh the charts every 5 minutes (adjust as needed)
    setInterval(createDynamicCharts, 60000); // 5 minutes in milliseconds
</script>
