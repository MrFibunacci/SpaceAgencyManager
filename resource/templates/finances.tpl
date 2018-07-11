{extends file='main.tpl'}

{block name='title'} - Finances{/block}
{block name='page_content'}
    <div class="row">
        <div class="col-12">
            <h1>Finance</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p>Your Agencies finances are very important, so keep an eye on them.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Finances
                </div>
                <div class="card-body">
                    <div class="row">
                        <canvas id="financialDevGraph" height="75%"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Latest transactions
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="dataTable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-hover dataTable" id="dataTable" aria-describedby="dataTable_info">
                                        <thead>
                                        <tr role="row">
                                            <th>Use</th>
                                            <th>Date</th>
                                            <th>Amount</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">Accepted Contract</td>
                                            <td>11.28.2008</td>
                                            <td class="text-right">162,700.00$</td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1">Build new Building</td>
                                            <td>10.09.2009</td>
                                            <td class="text-right">1,200,000.00$</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Income
                </div>
                <div class="card-body">
                    <canvas id="incomeDevGraph" height="75%"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Structure
                </div>
                <div class="card-body">
                    <canvas id="incomeDoughnutGraph" ></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Outcome
                </div>
                <div class="card-body">
                    <canvas id="outcomeDevGraph" height="75%"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Structure
                </div>
                <div class="card-body">
                    <canvas id="outcomeDoughnutGraph" ></canvas>
                </div>
            </div>
        </div>
    </div>
{/block}

{block name='extra_scripts'}
    <script src="js/chartPreload.js"></script>
    <script>
        const exampleLineChartObj = {
            type: 'line',
            data: {
                labels: ["Mar 1", "Mar 2", "Mar 3", "Mar 4", "Mar 5", "Mar 6", "Mar 7", "Mar 8", "Mar 9", "Mar 10", "Mar 11", "Mar 12", "Mar 13"],
                datasets: [{
                    label: "Sessions",
                    lineTension: 0.3,
                    backgroundColor: "rgba(2,117,216,0.2)",
                    borderColor: "rgba(2,117,216,1)",
                    pointRadius: 5,
                    pointBackgroundColor: "rgba(2,117,216,1)",
                    pointBorderColor: "rgba(255,255,255,0.8)",
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "rgba(2,117,216,1)",
                    pointHitRadius: 20,
                    pointBorderWidth: 2,
                    data: [10000, 30162, 26263, 18394, 18287, 28682, 31274, 33259, 25849, 24159, 32651, 31984, 38451],
                }],
            },
            options: lineChartOptions
        };

        const exampleDoughnutChartObj = {
            type: 'doughnut',
            data: {
                labels: ["Development", "Employees", "Budget", "Green"],
                datasets: [{
                    data: [12.21, 15.58, 11.25, 8.32],
                    backgroundColor: ['#007bff', '#dc3545', '#ffc107', '#28a745'],
                }],
            },
        };

        let financialDevGraph = new Chart(document.getElementById("financialDevGraph"), exampleLineChartObj);

        let incomeDevGraph = new Chart(document.getElementById('incomeDevGraph'), exampleLineChartObj);
        let outcomeDevGraph = new Chart(document.getElementById('outcomeDevGraph'), exampleLineChartObj);

        let incomeDoughnutGraph = new Chart(document.getElementById('incomeDoughnutGraph'), exampleDoughnutChartObj);
        let outcomeDoughnutGraph = new Chart(document.getElementById('outcomeDoughnutGraph'), exampleDoughnutChartObj);
    </script>
{/block}