<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-3">
        <a type="button" class="btn btn-danger waves-effect btn-block" href="<?php echo e(route('newmember')); ?>">
            <i class="material-icons">add</i>
            <span><strong>Add New Member</strong></span>
        </a>
    </div>
    <div class="col-md-3">
        <button type="button" class="btn btn-secondary btn-block" style="pointer-events: none;">
            <i class="material-icons text-muted">date_range</i>
            <span>Date Today:&nbsp; <b><?php echo e(date('F j, Y')); ?></b></span>
        </button>
    </div>
    <div class="col-md-6">
        <button type="button" class="btn btn-secondary btn-block" style="pointer-events: none;">
            <i class="material-icons text-muted">group</i>
            <span>Active Members:&nbsp; <b><?php echo e($active); ?></b></span>
        </button>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="body table-responsive">
                <h3 class="visible-md visible-lg" style="margin-bottom: -30px;">Gym Members</h3>
                <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="beneficiary_table" role="grid">
                    <thead>
                        <tr>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Type</th>
                            <th>Valid Until</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($member->lastname); ?></td>
                            <td><?php echo e($member->firstname); ?></td>
                            <td><?php echo e($member->type); ?></td>
                            <td><?php echo e(date('F j, Y', strtotime($member->validity))); ?></td>
                            <td>
                                <?php if($member->status == "Pending"): ?>
                                <span class="label bg-blue">Pending</span>
                                <?php elseif($member->status == "Expired"): ?>
                                <span class="label bg-red">Expired</span>
                                <?php else: ?>
                                <span class="label bg-green">Active</span>
                                <?php endif; ?>
                            </td>
                            <td><b><a href="<?php echo e(url('member')); ?>/<?php echo e($member->id); ?>">VIEW</a> | <a href="<?php echo e(url('renew')); ?>/<?php echo e($member->id); ?>">RENEW</a> | <a href="<?php echo e(url('edit')); ?>/<?php echo e($member->id); ?>">EDIT</a></b></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\california_gym\resources\views/members.blade.php ENDPATH**/ ?>