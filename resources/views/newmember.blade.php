@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <ol class="breadcrumb">
            <li><a href="{{ route('members') }}"><i class="material-icons">group</i> Members</a></li>
            <li class="active">Add New Member</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="body">
                <h3 class="card-inside-title">Member Information Form</h3>
                <hr>
                <div class="row clearfix">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="First Name">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Last Name">
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
                    <div class="col-sm-8">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Address">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="number" class="form-control" placeholder="Contact Number">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="validity">Initial Gym Membership: &nbsp;</label>
                            <select class="selectpicker" id="validity">
                                <option>1 Month</option>
                                <option>2 Months</option>
                                <option>3 Months</option>
                                <option>4 Months</option>
                                <option>5 Months</option>
                                <option>6 Months</option>
                                <option>7 Months</option>
                                <option>8 Months</option>
                                <option>9 Months</option>
                                <option>10 Months</option>
                                <option>11 Months</option>
                                <option>1 Year</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row"> 
                    <form class="form-inline" action="">
                        <div class="col-sm-12">
                        <a href="{{ route('amountdue') }}" class="btn btn-block btn-lg btn-danger waves-effect"><b>Submit</b></a>
                        </div>
                    </form>
                </div>        
            </div>
        </div>
    </div>
</div>

@endsection