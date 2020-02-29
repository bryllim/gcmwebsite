@extends('layouts.app')

@section('content')
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
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);" class=" waves-effect waves-block" data-toggle="modal" data-target="#newHospital">Add a new hospital</a></li>
                            <li><a href="javascript:void(0);" class=" waves-effect waves-block">Remove a hospital</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-hover dashboard-task-infos">
                        <thead>
                            <tr>
                                <th>Location</th>
                                <th>Available Budget</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="vertical-align:middle">Cebu Hospital</td>
                                <td>
                                    <small>₱ <strong>2,033,342.00</strong> out of ₱ <strong>3,000,000.00</strong></small>
                                    <div class="progress">
                                        <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 67%"></div>
                                    </div>
                                </td>
                                <td style="vertical-align:middle">
                                    <button type="button" class="btn bg-indigo waves-effect" data-toggle="modal" data-target="#addBudget">+
                                    </button>
                                    <button type="button" class="btn bg-indigo waves-effect">-
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">NCR Hospital</td>
                                <td>
                                    <small>₱ <strong>733,569.00</strong> out of ₱ <strong>4,000,000.00</strong></small>
                                    <div class="progress">
                                        <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 18%"></div>
                                    </div>
                                </td>
                                <td style="vertical-align:middle">
                                    <button type="button" class="btn bg-indigo waves-effect">+
                                    </button>
                                    <button type="button" class="btn bg-indigo waves-effect">-
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">Bohol Hospital</td>
                                <td>
                                    <small>₱ <strong>33,112.00</strong> out of ₱ <strong>1,000,000.00</strong></small>
                                    <div class="progress">
                                        <div class="progress-bar bg-red" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 8%"></div>
                                    </div>
                                </td>
                                <td style="vertical-align:middle">
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
                                <td style="vertical-align:middle">Education</td>
                                <td>
                                    <small>₱ <strong>33,112.00</strong> out of ₱ <strong>1,000,000.00</strong></small>
                                    <div class="progress">
                                        <div class="progress-bar bg-red" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 8%"></div>
                                    </div>
                                </td>
                                <td style="vertical-align:middle">
                                    <button type="button" class="btn bg-indigo waves-effect">+
                                    </button>
                                    <button type="button" class="btn bg-indigo waves-effect">-
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">Burial</td>
                                <td>
                                    <small>₱ <strong>933,112.00</strong> out of ₱ <strong>1,000,000.00</strong></small>
                                    <div class="progress">
                                        <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 93%"></div>
                                    </div>
                                </td>
                                <td style="vertical-align:middle">
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
<!-- Add Budget Modal -->
<div class="modal fade" id="addBudget" tabindex="-1" role="dialog" style="display: none;">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <hr>
                <button type="button" class="btn btn-primary btn-block waves-effect"><b>TOP UP TO FULL AMOUNT</b></button>
                <hr>
                <p style="text-align:center">or</p>
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="number" class="form-control" placeholder="Enter the specific amount to add...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CANCEL</button>
                
                <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button>
            </div>
        </div>
    </div>
</div>
<!-- New Hospital Modal -->
<div class="modal fade" id="newHospital" tabindex="-1" role="dialog" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Add New Hospital</h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Enter hospital name">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="number" class="form-control" placeholder="Enter hospital budget">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CANCEL</button>
                
                <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button>
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
@endsection