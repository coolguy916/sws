{{-- Template Chart --}}
{{-- <script>
    setInterval(function() {

        var ctx1 = document.getElementById("chart-line").getContext("2d");

        var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

        // gradientStroke1.addColorStop(1, 'rgba(119, 156, 126)');
        // gradientStroke1.addColorStop(0.2, 'rgba(119, 156, 126, 0)');
        // gradientStroke1.addColorStop(0, 'rgba(119, 156, 126, 0)');

        gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
        gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
        gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');

        new Chart(ctx1, {
            type: "line",
            data: {
                labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
                datasets: [{
                    label: "Watts Consumption",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    // borderColor: "#779c7e",
                    borderColor: "#5e72e4",
                    backgroundColor: gradientStroke1,
                    borderWidth: 3,
                    fill: true,
                    data: [150, 200, 100, 300, 150, 400, 550],
                    maxBarThickness: 6
                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#fbfbfb',
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        },
                        title: {
                            display: true,
                            text: 'Watts Consumption',
                            color: '#fbfbfb',
                            font: {
                                size: 14,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            }
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#ccc',
                            padding: 20,
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        },
                        title: {
                            display: true,
                            text: 'Days',
                            color: '#ccc',
                            font: {
                                size: 14,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            }
                        }
                    },
                },
            },
        });

    }, 1000);
</script> --}}


{{-- Dynamic Watts Consumption Chart --}}
<script>
    $(document).ready(function() {
        // POWER CHART
        function fetchPowerData() {
            $.ajax({
                type: 'GET',
                url: "/chart-power",
                dataType: 'json',
                success: function(dataPower) {
                    var ctxPower = document.getElementById("chart-power").getContext("2d");

                    var gradientStroke1 = ctxPower.createLinearGradient(0, 230, 0, 50);
                    gradientStroke1.addColorStop(1, 'rgba(119, 156, 126)');
                    gradientStroke1.addColorStop(0.2, 'rgba(119, 156, 126, 0)');
                    gradientStroke1.addColorStop(0, 'rgba(119, 156, 126, 0)');

                    var labels = dataPower.map(item => item.date);
                    var powerData = dataPower.map(item => item.power);

                    new Chart(ctxPower, {
                        type: "line",
                        data: {
                            labels: labels,
                            datasets: [{
                                label: "Power Consumption",
                                tension: 0.4,
                                borderWidth: 0,
                                pointRadius: 0,
                                borderColor: "#779c7e",
                                backgroundColor: gradientStroke1,
                                borderWidth: 3,
                                fill: true,
                                data: powerData,
                                maxBarThickness: 6
                            }],
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            plugins: {
                                legend: {
                                    display: false,
                                }
                            },
                            interaction: {
                                intersect: false,
                                mode: 'index',
                            },
                            scales: {
                                y: {
                                    grid: {
                                        drawBorder: false,
                                        display: true,
                                        drawOnChartArea: true,
                                        drawTicks: false,
                                        borderDash: [5, 5]
                                    },
                                    ticks: {
                                        display: true,
                                        padding: 10,
                                        color: '#fbfbfb',
                                        font: {
                                            size: 11,
                                            family: "Open Sans",
                                            style: 'normal',
                                            lineHeight: 2
                                        },
                                    },
                                    title: {
                                        display: true,
                                        text: 'Watts Consumption',
                                        color: '#fbfbfb',
                                        font: {
                                            size: 14,
                                            family: "Open Sans",
                                            style: 'normal',
                                            lineHeight: 2
                                        }
                                    }
                                },
                                x: {
                                    grid: {
                                        drawBorder: false,
                                        display: false,
                                        drawOnChartArea: false,
                                        drawTicks: false,
                                        borderDash: [5, 5]
                                    },
                                    ticks: {
                                        display: true,
                                        color: '#ccc',
                                        padding: 20,
                                        font: {
                                            size: 13,
                                            family: "Open Sans",
                                            style: 'normal',
                                            lineHeight: 2
                                        },
                                    },
                                    title: {
                                        display: true,
                                        text: 'Days',
                                        color: '#ccc',
                                        font: {
                                            size: 14,
                                            family: "Open Sans",
                                            style: 'normal',
                                            lineHeight: 2
                                        }
                                    }
                                },
                            },
                        },
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Error: ' + status + error);
                }
            });
        }

        function fetchKwhData() {
            $.ajax({
                type: 'GET',
                url: "/chart-kwh",
                dataType: 'json',
                success: function(dataKwh) {
                    var ctxKwh = document.getElementById("chart-kwh").getContext("2d");

                    var gradientStroke2 = ctxKwh.createLinearGradient(0, 230, 0, 50);
                    gradientStroke2.addColorStop(1, 'rgba(255, 87, 51, 1)');
                    gradientStroke2.addColorStop(0.2, 'rgba(255, 87, 51, 0)');
                    gradientStroke2.addColorStop(0, 'rgba(255, 87, 51, 0)');

                    var labels = dataKwh.map(item => item.date);
                    var kwhData = dataKwh.map(item => item.kwh);

                    new Chart(ctxKwh, {
                        type: "line",
                        data: {
                            labels: labels,
                            datasets: [{
                                label: "KWh Consumption",
                                tension: 0.4,
                                borderWidth: 0,
                                pointRadius: 0,
                                borderColor: "#FF5733",
                                backgroundColor: gradientStroke2,
                                borderWidth: 3,
                                fill: true,
                                data: kwhData,
                                maxBarThickness: 6
                            }],
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            plugins: {
                                legend: {
                                    display: false,
                                }
                            },
                            interaction: {
                                intersect: false,
                                mode: 'index',
                            },
                            scales: {
                                y: {
                                    grid: {
                                        drawBorder: false,
                                        display: true,
                                        drawOnChartArea: true,
                                        drawTicks: false,
                                        borderDash: [5, 5]
                                    },
                                    ticks: {
                                        display: true,
                                        padding: 10,
                                        color: '#fbfbfb',
                                        font: {
                                            size: 11,
                                            family: "Open Sans",
                                            style: 'normal',
                                            lineHeight: 2
                                        },
                                    },
                                    title: {
                                        display: true,
                                        text: 'KWh Consumption',
                                        color: '#fbfbfb',
                                        font: {
                                            size: 14,
                                            family: "Open Sans",
                                            style: 'normal',
                                            lineHeight: 2
                                        }
                                    }
                                },
                                x: {
                                    grid: {
                                        drawBorder: false,
                                        display: false,
                                        drawOnChartArea: false,
                                        drawTicks: false,
                                        borderDash: [5, 5]
                                    },
                                    ticks: {
                                        display: true,
                                        color: '#ccc',
                                        padding: 20,
                                        font: {
                                            size: 13,
                                            family: "Open Sans",
                                            style: 'normal',
                                            lineHeight: 2
                                        },
                                    },
                                    title: {
                                        display: true,
                                        text: 'Days',
                                        color: '#ccc',
                                        font: {
                                            size: 14,
                                            family: "Open Sans",
                                            style: 'normal',
                                            lineHeight: 2
                                        }
                                    }
                                },
                            },
                        },
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Error: ' + status + error);
                }
            });
        }

        // Initial load
        fetchPowerData();

        // Toggle buttons
        $('#power-toggle').click(function() {
            $('#chart-power').show();
            $('#chart-kwh').hide();
            fetchPowerData();
        });

        $('#kwh-toggle').click(function() {
            $('#chart-power').hide();
            $('#chart-kwh').show();
            fetchKwhData();
        });
    });
</script>
