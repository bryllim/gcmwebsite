@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="info-box bg-red hover-expand-effect">
            <div class="icon">
                <i class="material-icons">account_balance_wallet</i>
            </div>
            <div class="content">
                <div class="text">TOTAL REVENUE</div>
                <div class="number"><small>₱</small> <strong>35,234.00</strong></div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="info-box bg-red hover-expand-effect">
            <div class="icon">
                <i class="material-icons">group</i>
            </div>
            <div class="content">
                <div class="text">ACTIVE MEMBERS</div>
                <div class="number"><strong>127</strong></div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="info-box bg-red hover-expand-effect">
            <div class="icon">
                <i class="material-icons">group_add</i>
            </div>
            <div class="content">
                <div class="text">NEW MEMBERS</div>
                <div class="number"><strong>25</strong></div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <b>Monthly Statistics</b>
            </div>
            <div class="body">
                <canvas id="monthlyStatistics"></canvas>
            </div>
        </div>
    </div>
</div>
<script>
var ctx = document.getElementById('monthlyStatistics').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        datasets: [{
            label: 'Active Members',
            backgroundColor: 'red',
            borderColor: 'black',
            data: [0, 10, 5, 2, 20, 30, 45, 38, 23, 35, 56, 39]
        },{
            label: 'Gym Revenue',
            backgroundColor: 'maroon',
            borderColor: 'black',
            data: [39, 52, 23, 34, 20, 20, 35, 58, 13, 33, 55, 59]
        }]
    },

    // Configuration options go here
    options: {}
});
</script>
@endsection