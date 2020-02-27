<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <ol class="breadcrumb">
            <li><a href="<?php echo e(route('education')); ?>"><i class="material-icons">school</i> Education Assistance</a></li>
            <li class="active">Add New Beneficiary</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="body">
                <h3 class="card-inside-title">Personal Information</h3>
                <hr>
                <div class="row clearfix">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Last Name">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="First Name">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Middle Name">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Maiden Name (For Married Women)">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="datetime" class="form-control" placeholder="Date of Birth">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="datetime" class="form-control" placeholder="Place of Birth">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="sex">Sex: &nbsp;</label>
                            <select class="selectpicker" id="sex">
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label for="sex">Civil Status: &nbsp;</label>
                            <select class="selectpicker" id="civil_status">
                                <option>Single</option>
                                <option>Married</option>
                                <option>Divorced/Annulled</option>
                                <option>Widowed</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Citizenship">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Mobile Number">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Email Address">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Permanent Mailing Address">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="ZIP Code">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Name of School Last Attended">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="School Address">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label for="school_sector">School Sector: &nbsp;</label>
                            <select class="selectpicker" id="school_sector">
                                <option>Public</option>
                                <option>Private</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Highest Attained Grade Year Level">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Type of Disability (if applicable)">
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                    <h3 class="card-inside-title">Family Background</h3>
                <hr>
                <div class="row">
                    
                </div>
                <div class="row"> 
                    <form class="form-inline" action="">
                        <div class="col-sm-12">
                        <button type="button" class="btn btn-block btn-lg btn-primary waves-effect">Submit</button>
                        </div>
                    </form>
                </div>  
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\akbis_master\resources\views/new-education.blade.php ENDPATH**/ ?>