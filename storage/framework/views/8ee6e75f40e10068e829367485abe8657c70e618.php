<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="info-box bg-indigo hover-zoom-effect">
            <div class="icon">
                <i class="material-icons">account_balance_wallet</i>
            </div>
            <div class="content">
                <div class="text">General Funds</div>
                <div class="number"><small>₱</small> <strong>48,505,234.55</strong></div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="header">
                <h2>Hospital Budget Allocation</h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-hover dashboard-task-infos">
                        <thead>
                            <tr>
                                <th>Location</th>
                                <th>Current Budget</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Cebu Hospital</td>
                                <td><small>₱</small> <strong>12,023,323.10</strong></td>
                                <td>
                                    <button type="button" class="btn bg-indigo waves-effect">+
                                    </button>
                                    <button type="button" class="btn bg-indigo waves-effect">-
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Bohol Hospital</td>
                                <td><small>₱</small> <strong>2,033,342.00</strong></td>
                                <td>
                                    <button type="button" class="btn bg-indigo waves-effect">+
                                    </button>
                                    <button type="button" class="btn bg-indigo waves-effect">-
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>NCR Hospital</td>
                                <td><small>₱</small> <strong>523,324.90</strong></td>
                                <td>
                                    <button type="button" class="btn bg-indigo waves-effect">+
                                    </button>
                                    <button type="button" class="btn bg-indigo waves-effect">-
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="info-box-3 bg-blue hover-zoom-effect">
            <div class="icon">
                <i class="material-icons">account_balance_wallet</i>
            </div>
            <div class="content">
                <div class="text">Unallocated Funds</div>
                <div class="number"><small>₱</small> <strong>20,505,234.55</strong></div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="info-box-3 bg-blue-grey hover-zoom-effect">
            <div class="icon">
                <i class="material-icons">account_balance_wallet</i>
            </div>
            <div class="content">
                <div class="text">Total Hospital Budget</div>
                <div class="number"><small>₱</small> <strong>20,505,234.55</strong></div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="info-box-3 bg-blue-grey hover-zoom-effect">
            <div class="icon">
                <i class="material-icons">account_balance_wallet</i>
            </div>
            <div class="content">
                <div class="text">Total DSWD Budget</div>
                <div class="number"><small>₱</small> <strong>20,505,234.55</strong></div>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="header">
                <h2>DSWD Budget Allocation</h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-hover dashboard-task-infos">
                        <thead>
                            <tr>
                                <th>Sector</th>
                                <th>Current Budget</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Education</td>
                                <td><small>₱</small> <strong>12,023,323.10</strong></td>
                                <td>
                                    <button type="button" class="btn bg-indigo waves-effect">+
                                    </button>
                                    <button type="button" class="btn bg-indigo waves-effect">-
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Burial</td>
                                <td><small>₱</small> <strong>2,033,342.00</strong></td>
                                <td>
                                    <button type="button" class="btn bg-indigo waves-effect">+
                                    </button>
                                    <button type="button" class="btn bg-indigo waves-effect">-
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="header">
                <h2>General Funds Allocation</h2>
            </div>
            <div class="body"><iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;"></iframe>
                <canvas id="budget_allocation" height="220" width="440" style="display: block; width: 440px; height: 220px;"></canvas>
            </div>
        </div>
    </div>
</div>
<script>
    var ctx = document.getElementById('budget_allocation').getContext('2d');

    //doughnut chart data
    var data = {
    labels: ["Hospital", "DSWD", "Unallocated Funds"],
    datasets: [
    {
        label: "Budget Allocation",
        data: [221312, 434324, 123123],
        backgroundColor: [
        "#2B3856",
        "#4863A0",
        "gray"
        ],
        borderWidth: [1, 1, 1]
    }
    ]
};

    var myDoughnutChart = new Chart(ctx, {
    type: 'doughnut',
    data: data,
    options: {
            responsive: true,
            title: {
                display: false,
            },
            legend: {
                display: false,
            }
        }
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\akbis_master\resources\views/home.blade.php ENDPATH**/ ?>