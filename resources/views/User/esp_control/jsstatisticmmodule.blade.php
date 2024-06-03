<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script> <!-- Include the plugin for datalabels -->

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
                    const title = $('<h3>').addClass('page-title').text(moduleTitle);
                    moduleContainer.append(title);

                    // const day30 = $('<h4>').addClass('page-day30').text(moduleTitle);
                    // moduleContainer.append(day30);

                    // const day7 = $('<h4>').addClass('page-day7').text(moduleTitle);
                    // moduleContainer.append(day7);

                    // Add a canvas for each module
                    const canvasId = 'myChart' + chartData.moduleId;
                    const canvas = $('<canvas>').attr({
                        'id': canvasId,
                        'width': 400,
                        'height': 200
                    });
                    moduleContainer.append(canvas);

                    // Create the chart for each module with multiple datasets
                    createChart(canvasId, chartData.labels, chartData.kwhData, chartData.wattData, chartData.ampeData);
                });
            },
            error: function(error) {
                console.error('Error fetching data:', error);
            }
        });
    }

    // Function to create a new chart with multiple datasets
    function createChart(chartId, labels, kwhData, wattData, ampeData) {
        const ctx = document.getElementById(chartId).getContext('2d');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    type: 'bar',
                    label: 'kWh',
                    data: kwhData,
                    backgroundColor: '#8ecae6',
                    borderWidth: 1
                }, {
                    type: 'bar',
                    label: 'Watt',
                    data: wattData,
                    backgroundColor: '#219ebc',
                    borderWidth: 1
                }, {
                    type: 'bar',
                    label: 'Ampe',
                    data: ampeData,
                    backgroundColor: '#03045e',
                    borderWidth: 1
                }],
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

    // // Set an interval to refresh the charts every 5 minutes (adjust as needed)
    // setInterval(createDynamicCharts, 3000); // 5 minutes in milliseconds
</script>
