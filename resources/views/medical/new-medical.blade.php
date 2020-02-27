@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <ol class="breadcrumb">
            <li><a href="{{ route('medical') }}"><i class="material-icons">local_hospital</i> Medical Assistance</a></li>
            <li class="active">Add New Beneficiary</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="body">
                <h3 class="card-inside-title">Patient Information</h3>
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
                </div>
                <div class="row clearfix">
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
                                <input type="text" class="form-control" placeholder="Contact No.">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Barangay">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Street Address/Purok">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Province">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                                <div class="form-line">
                                     <input type="text" class="form-control" placeholder="City/Municipality">
                                </div>
                            </div>
                         </div>
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
</div>
@endsection