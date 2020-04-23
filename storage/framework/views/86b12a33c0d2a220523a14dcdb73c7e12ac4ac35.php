<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <ol class="breadcrumb">
            <li><a href="<?php echo e(route('members')); ?>"><i class="material-icons">group</i> Members</a></li>
            <li class="active">Renew</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="body">
                <h3 class="card-inside-title"><?php echo e($member->firstname); ?>  <?php echo e($member->lastname); ?> | Renew Membership</h3>
                <hr>
                <form method="POST" action="<?php echo e(route('extend')); ?>">
                <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="validity">Renew Membership: &nbsp;</label>
                        <select class="selectpicker" id="validity" name="number" required>
                            <option value="1">1 Month</option>
                            <option value="2">2 Months</option>
                            <option value="3">3 Months</option>
                            <option value="4">4 Months</option>
                            <option value="5">5 Months</option>
                            <option value="6">6 Months</option>
                            <option value="7">7 Months</option>
                            <option value="8">8 Months</option>
                            <option value="9">9 Months</option>
                            <option value="10">10 Months</option>
                            <option value="11">11 Months</option>
                            <option value="12">12 Months</option>
                        </select>
                    </div>
                    <hr>
                    <h2>Amount to collect: <span id="amount">₱ <?php echo e(($member->type == "Student")? $studentfee : $regularfee); ?></span></h2>
                    <hr>
                    <input type="hidden" name="member_id" value="<?php echo e($member->id); ?>">
                    <button type="submit" class="btn btn-block btn-lg btn-danger waves-effect"><b>Submit</b></button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
$("#validity").change(function(){
    var amount = $("#validity").val() * <?php echo e(($member->type == "Student")? $studentfee : $regularfee); ?>;
    const formatter = new Intl.NumberFormat('en-US', {
    style: 'currency',
    currency: 'USD',
    minimumFractionDigits: 2
    })
    amount = formatter.format(amount);
    amount = amount.replace('$', '₱ ');
    $("#amount").text(amount);
});
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\california_gym\resources\views/renew.blade.php ENDPATH**/ ?>