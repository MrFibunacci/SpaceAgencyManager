const lineChartOptions = {
    scales: {
        xAxes: [{
            time: {
                unit: 'date'
            },
            gridLines: {
                display: false
            },
            ticks: {
                maxTicksLimit: 7
            }
        }],
        yAxes: [{
            ticks: {
                min: 0,

                maxTicksLimit: 5
            },
            gridLines: {
                color: "rgba(0, 0, 0, .125)",
            }
        }],
    },
    legend: {
        display: false
    }
};