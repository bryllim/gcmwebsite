<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <ol class="breadcrumb">
            <li><a href="<?php echo e(route('members')); ?>"><i class="material-icons">group</i> Members</a></li>
            <li class="active">Edit</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
            <strong>Edit | <?php echo e($member->firstname); ?> <?php echo e($member->lastname); ?></strong>
            </div>
            <div class="body">
                <h3><?php echo e($member->firstname); ?></h3>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\california_gym\resources\views/editmember.blade.php ENDPATH**/ ?>