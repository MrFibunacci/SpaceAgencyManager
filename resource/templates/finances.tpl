{extends file='main.tpl'}

{block name='title'} - Finances{/block}

{$notEnoughDataHTML = '<p class="text-center text-muted">Not enough data</p>'}

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

                    {if notEnoughData}
                        {$notEnoughDataHTML}
                    {else}
                        <canvas id="financialDevGraph" height="75%"></canvas>
                    {/if}

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
                                        {foreach $transactions as $transaction}
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">{$transaction['usage']}</td>
                                                <td>{$transaction['dateTime']}</td>
                                                <td class="text-right">{$transaction['amount']}</td>
                                            </tr>
                                        {/foreach}
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
                    {if notEnoughData}
                        {$notEnoughDataHTML}
                    {else}
                        <canvas id="incomeDevGraph" height="75%"></canvas>
                    {/if}
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Structure
                </div>
                <div class="card-body">
                    {if notEnoughData}
                        {$notEnoughDataHTML}
                    {else}
                        <canvas id="incomeDoughnutGraph" ></canvas>
                    {/if}
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
                    {if notEnoughData}
                        {$notEnoughDataHTML}
                    {else}
                        <canvas id="outcomeDevGraph" height="75%"></canvas>
                    {/if}
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Structure
                </div>
                <div class="card-body">
                    {if notEnoughData}
                        {$notEnoughDataHTML}
                    {else}
                        <canvas id="outcomeDoughnutGraph" ></canvas>
                    {/if}
                </div>
            </div>
        </div>
    </div>
{/block}

{block name='extra_scripts'}
    <script src="/js/chartPreload.js"></script>
    <script>
        const exampleLineChartObj = {
            type: 'line',
            data: {
                labels: {$labels},
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

        let financialDevGraph = new Chart(document.getElementById("financialDevGraph"), {
            type: 'line',
            data: {
                labels: {$labels},
                datasets: [{
                    label: "Absolute Change",
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
                    data: {$financialDevGraphData},
                }],
            },
            options: lineChartOptions
        });

        let incomeDevGraph = new Chart(document.getElementById('incomeDevGraph'), {
            type: 'line',
            data: {
                labels: {$labels},
                datasets: [{
                    label: "Income",
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
                    data: {$incomeDevGraphData},
                }],
            },
            options: lineChartOptions
        });

        let outcomeDevGraph = new Chart(document.getElementById('outcomeDevGraph'), {
            type: 'line',
            data: {
                labels: {$labels},
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
                    data: {$outcomeDevGraphData},
                }],
            },
            options: lineChartOptions
        });

        let incomeDoughnutGraph = new Chart(document.getElementById('incomeDoughnutGraph'), {
            type: 'doughnut',
            data: {
                labels: {$doughnutLabels},
                datasets: [{
                    data: [12.21, 15.58, 11.25, 8.32],
                    backgroundColor: ['#007bff', '#dc3545', '#ffc107', '#0700a7'],
                }],
            },
        });

        let outcomeDoughnutGraph = new Chart(document.getElementById('outcomeDoughnutGraph'), {
            type: 'doughnut',
            data: {
                labels: {$doughnutLabels},
                datasets: [{
                    data: [12.21, 15.58, 11.25, 8.32],
                    backgroundColor: ['#007bff', '#dc3545', '#ffc107', '#0700a7'],
                }],
            },
        });
    </script>
{/block}