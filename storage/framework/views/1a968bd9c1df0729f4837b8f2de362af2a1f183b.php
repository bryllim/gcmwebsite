<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <ol class="breadcrumb">
            <li><a href="<?php echo e(route('members')); ?>"><i class="material-icons">group</i> Members</a></li>
            <li class="active"><?php echo e($member->firstname); ?> <?php echo e($member->lastname); ?></li>
        </ol>
    </div>
</div>
<?php if($member->status == "Expired"): ?>
<div class="row">
    <div class="col-md-12">
        <div class="alert alert-danger text-center">
            <strong>Important!</strong> This member's membership validity has expired.
        </div>
    </div>
</div>
<?php endif; ?>
<div class="row">
    <div class="col-md-5">
        <div class="card profile-card">
            <div class="profile-body bg-red">
                <div class="content-area">
                    <br>
                    <small>Personal Information</small>
                    <h3><?php echo e($member->firstname); ?> <?php echo e($member->lastname); ?></h3>
                </div>
                <a href="javascript:void(0);" class="thumbnail">
                    <img src="<?php echo e(url('/images/members/'.$member->image)); ?>" class="img-responsive" style="max-height:300px">
                </a>
            </div>
            <div class="profile-footer">
                <ul>
                    <li>
                        <span>Contact Number</span>
                        <span><?php echo e($member->contact); ?></span>
                    </li>
                    <li>
                        <span>Sex</span>
                        <span><?php echo e($member->sex); ?></span>
                    </li>
                    <li>
                        <span>Address</span>
                        <span><?php echo e($member->address); ?></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-7">
        <div class="card card-about-me">
            <div class="body">
                <ul>
                    <li>
                        <div>
                            Actions: <a href="<?php echo e(url('renew')); ?>/<?php echo e($member->id); ?>"><b>RENEW</b></a> | <a href="#"><b>EDIT</b></a>
                        </div>
                    </li>
                    <li>
                        <div class="title">
                            <i class="material-icons">history</i>
                            History
                        </div>
                        <div class="content" style="color:black">
                        <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="font-12 well" style="border-radius: 5px; padding-left:10px; padding-top:10px; padding-bottom:2px; padding-right:10px; margin-bottom:3px">
                                <p><span class="text-muted" style="float:right"><small><i class="material-icons font-12">access_time</i> <?php echo e(date('F j, Y', strtotime($transaction->created_at))); ?></small></span></p>
                                <p style="margin-top: -5px"><?php echo e($transaction->quantity); ?>x <?php echo e($transaction->name); ?> - ₱<?php echo e(number_format($transaction->price, 2, '.', ',')); ?></p>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\california_gym\resources\views/viewmember.blade.php ENDPATH**/ ?>