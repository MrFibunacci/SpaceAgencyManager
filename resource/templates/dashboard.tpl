{extends file='main.tpl'}

{block name='title'} - Dashboard{/block}
{block name='page_content'}
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-bar-chart"></i> Finances</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-8 my-auto">
                    <canvas id="myBarChart" width="100" height="50"></canvas>
                </div>
                <div class="col-sm-4 text-center my-auto">
                    <div class="h4 mb-0 text-primary">$34,693,102.00</div>
                    <div class="small text-muted">Total value</div>
                    <hr>
                    <div class="h4 mb-0 text-success">$12,000,000</div>
                    <div class="small text-muted">Income</div>
                    <hr>
                    <div class="h4 mb-0 text-danger">$-4,123,144</div>
                    <div class="small text-muted">Outcome</div>
                </div>
            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
{/block}

{block name='extra_scripts'}
    <script src="js/sb-admin-datatables.min.js"></script>
    <script>
        // -- Bar Chart Example
        let ctx = document.getElementById("myBarChart").getContext('2d');
        let myLineChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["January", "February", "March", "April", "May", "June"],
                datasets: [{
                    label: "Revenue",
                    backgroundColor: "rgba(2,117,216,1)",
                    borderColor: "rgba(2,117,216,1)",
                    data: [12223446, 12213114.00, 12344136.00, 11211456.00, 31235102.00, 34693102.00],
                }],
            },
            options: {
                scales: {
                    xAxes: [{
                        time: {
                            unit: 'month'
                        },
                        gridLines: {
                            display: false
                        },
                        ticks: {
                            maxTicksLimit: 6
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            min: 0,
                            max: 50000000,
                            maxTicksLimit: 5
                        },
                        gridLines: {
                            display: true
                        }
                    }],
                },
                legend: {
                    display: false
                }
            }
        });
    </script>
{/block}