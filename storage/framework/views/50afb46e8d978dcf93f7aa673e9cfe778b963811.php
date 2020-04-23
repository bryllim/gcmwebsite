<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-4">
        <div class="info-box bg-red hover-expand-effect">
            <div class="icon">
                <i class="material-icons">account_balance_wallet</i>
            </div>
            <div class="content">
                <div class="text">TOTAL REVENUE</div>
                <div class="number"><small>₱</small> <strong><?php echo e(number_format($revenue, 2, '.', ',')); ?></strong></div>
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
                <div class="number"><strong><?php echo e($active); ?></strong></div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="info-box bg-red hover-expand-effect">
            <div class="icon">
                <i class="material-icons">group_add</i>
            </div>
            <div class="content">
                <div class="text">NEW MEMBERS THIS MONTH</div>
                <div class="number"><strong><?php echo e($newmembers); ?></strong></div>
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
            label: 'New Members',
            backgroundColor: 'red',
            borderColor: 'black',
            data: [
                <?php echo e($graph_members['January']); ?>,
                <?php echo e($graph_members['February']); ?>,
                <?php echo e($graph_members['March']); ?>,
                <?php echo e($graph_members['April']); ?>,
                <?php echo e($graph_members['May']); ?>,
                <?php echo e($graph_members['June']); ?>,
                <?php echo e($graph_members['July']); ?>,
                <?php echo e($graph_members['August']); ?>,
                <?php echo e($graph_members['September']); ?>,
                <?php echo e($graph_members['October']); ?>,
                <?php echo e($graph_members['November']); ?>,
                <?php echo e($graph_members['December']); ?>,
            ]
        },{
            label: 'Gym Revenue',
            backgroundColor: 'maroon',
            borderColor: 'black',
            data: [
                <?php echo e($graph_revenue['January']); ?>,
                <?php echo e($graph_revenue['February']); ?>,
                <?php echo e($graph_revenue['March']); ?>,
                <?php echo e($graph_revenue['April']); ?>,
                <?php echo e($graph_revenue['May']); ?>,
                <?php echo e($graph_revenue['June']); ?>,
                <?php echo e($graph_revenue['July']); ?>,
                <?php echo e($graph_revenue['August']); ?>,
                <?php echo e($graph_revenue['September']); ?>,
                <?php echo e($graph_revenue['October']); ?>,
                <?php echo e($graph_revenue['November']); ?>,
                <?php echo e($graph_revenue['December']); ?>,
            ]
        }]
    },

    // Configuration options go here
    options: {}
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\california_gym\resources\views/home.blade.php ENDPATH**/ ?>