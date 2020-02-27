<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <ol class="breadcrumb">
            <li><a href="<?php echo e(route('burial')); ?>"><i class="material-icons">airline_seat_individual_suite</i> Burial Assistance</a></li>
            <li class="active">Rodrigo Roa Duterte</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-5">
        <div class="card profile-card">
            <div class="profile-body bg-indigo">
                <div class="content-area">
                    <br>
                    <small>Personal Information</small>
                    <h3>Rodrigo Roa Duterte</h3>
                </div>
            </div>
            <div class="profile-footer">
                <ul>
                    <li>
                        <span>Contact Number</span>
                        <span>09055210329</span>
                    </li>
                    <li>
                        <span>Sex</span>
                        <span>Male</span>
                    </li>
                    <li>
                        <span>Civil Status</span>
                        <span>Single</span>
                    </li>
                    <li>
                        <span>Barangay</span>
                        <span>Banilad</span>
                    </li>
                    <li>
                        <span>Street Address/Purok</span>
                        <div>Sto. Nino Village</div>
                    </li>
                    <li>
                        <span>Province</span>
                        <span>Cebu</span>
                    </li>
                    <li>
                        <span>City/Municipality</span>
                        <span>Cebu City</span>
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
                            Requesting burial assistance of <small>₱</small> <b>24,000.00</b> |
                            <a href="#">Approve</a> or <a href="#"> Cancel</a>
                        </div>
                    </li>
                    <li>
                        <div class="title">
                            <i class="material-icons">history</i>
                            History
                        </div>
                        <div class="content">
                            No records found.
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\akbis_master\resources\views/burial/view-burial.blade.php ENDPATH**/ ?>