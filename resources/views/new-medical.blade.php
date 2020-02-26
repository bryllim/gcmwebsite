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
                <h2 class="card-inside-title"><h1>MEDICAL ASSISTANCE</h1><h4>Vicente Sotto Medical Memorial Center</h4></h2><br>
                <h3 class="card-inside-title">Patient Information</h3>
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
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Sex">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Civil Status">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
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
                    <div class="row clearfix"> 
                       <form class="form-inline" action="">
                           <div class="col-sm-12">
                           <div class="form-group">
                               <label for="">Enter Medical Assistance Amount</label>
                               <input type="text" name="" id="">                                
                            </div>
                           </div>
                       </form>
                    </div>            
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    input {
  border: 0;
  outline: 0;
  background: transparent;
  border-bottom: 1px solid black;
}
</style>
@endsection