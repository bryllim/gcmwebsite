<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <a type="button" class="btn btn-primary waves-effect" href="<?php echo e(route('new-beneficiary')); ?>">
            <i class="material-icons">add</i>
            <span><strong>Add New Beneficiary</strong></span>
        </a>
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="body table-responsive">
                <h3 class="visible-md visible-lg" style="margin-bottom: -30px;">List of Beneficiaries</h3>
                <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="beneficiary_table" role="grid">
                    <thead>
                        <tr>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Assistance</th>
                            <th>Amount</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="#">Dela Cruz</a></td>
                            <td>Juan</td>
                            <td>Medical</td>
                            <td><small>₱</small> 25,500.00</td>
                            <td><span class="label bg-green">Approved</span></td>
                        </tr>
                        <tr>
                            <td><a href="#">Militante</a></td>
                            <td>Cris Lawrence Adrian</td>
                            <td>Burial</td>
                            <td><small>₱</small> 28,900.00</td>
                            <td><span class="label bg-blue">Pending</span></td>
                        </tr>
                        <tr>
                            <td><a href="#">Lim</a></td>
                            <td>Bryl Kezter</td>
                            <td>Education</td>
                            <td><small>₱</small> 20,500.00</td>
                            <td><span class="label bg-red">Declined</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    $('#beneficiary_table').DataTable({
        "bLengthChange": false,
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\akbis_master\resources\views/assistance.blade.php ENDPATH**/ ?>