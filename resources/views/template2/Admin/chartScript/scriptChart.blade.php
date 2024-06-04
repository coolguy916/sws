<script>
    document.addEventListener("DOMContentLoaded", function() {
        fetch("{{ url('/chart-data') }}")
            .then(response => response.json())
            .then(data => {
                var ctx1 = document.getElementById("chart-line").getContext("2d");

                var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

                gradientStroke1.addColorStop(1, 'rgba(119, 156, 126)');
                gradientStroke1.addColorStop(0.2, 'rgba(119, 156, 126, 0)');
                gradientStroke1.addColorStop(0, 'rgba(119, 156, 126, 0)');

                var labels = data.map(item => item.date);
                var wattsConsumption = data.map(item => item.watts_consumption);

                new Chart(ctx1, {
                    type: "line",
                    data: {
                        labels: labels,
                        datasets: [{
                            label: "Watts Consumption",
                            tension: 0.4,
                            borderWidth: 0,
                            pointRadius: 0,
                            borderColor: "#779c7e",
                            backgroundColor: gradientStroke1,
                            borderWidth: 3,
                            fill: true,
                            data: wattsConsumption,
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
            });
    });
</script>