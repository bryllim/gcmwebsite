<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <ol class="breadcrumb">
            <li><a href="<?php echo e(route('members')); ?>"><i class="material-icons">group</i> Members</a></li>
            <li>Add New Member</li>
            <li class="active">Amount Due</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="body">
                <h3 class="card-inside-title"><?php echo e($member->firstname); ?> <?php echo e($member->lastname); ?> | Amount Due</h3>
                <hr>
                <div class="row" style="color:black">
                    <div class="col-md-12">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>1x Membership Fee</td>
                                    <th scope="row">₱<?php echo e(number_format($payment['membershipfee'], 2, '.', ',')); ?></th>
                                </tr>
                                <tr>
                                    <td><?php echo e($payment['number']); ?>x Monthly Fee</td>
                                    <th scope="row">₱<?php echo e(number_format($payment['amount'], 2, '.', ',')); ?></th>
                                </tr>
                                <tr class="font-24">
                                    <td class="text-right">Grand Total:</td>
                                    <th scope="row">₱<?php echo e(number_format($payment['grandtotal'], 2, '.', ',')); ?></th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <br>
                <div class="row"> 
                    <div class="col-sm-3">
                    <button type="button" class="btn btn-block btn-lg waves-effect"><b>Cancel</b></button>
                    </div>
                    <div class="col-sm-9">
                    <form method="POST" action="<?php echo e(route('initialPayment')); ?>">
                    <?php echo csrf_field(); ?>
                        <input type="hidden" name="member_id" value="<?php echo e($member->id); ?>">
                        <input type="hidden" name="quantity" value="<?php echo e($payment['number']); ?>">
                        <button type="submit" class="btn btn-block btn-lg btn-danger waves-effect"><b>Submit</b></button>
                    </form>
                    </div>
                </div>        
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\california_gym\resources\views/receiptmember.blade.php ENDPATH**/ ?>