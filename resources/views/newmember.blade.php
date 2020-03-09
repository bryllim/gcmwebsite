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
                <form method="POST" action="{{ route('member-create') }}" enctype="multipart/form-data">
                @csrf
                    <div class="row clearfix">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="First Name" name="firstname" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Last Name" name="lastname" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Address" name="address" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" class="form-control" placeholder="Contact Number" name="contact" required>
                                </div>
                            </div>
                        </div>
                    </div>                
                    <div class="row clearfix">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="sex">Sex: &nbsp;</label>
                                <select class="selectpicker" id="sex" name="sex" required>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="validity">Initial Gym Membership: &nbsp;</label>
                                <select class="selectpicker" id="validity" name="validity" required>
                                    <option value="1">1 Month</option>
                                    <option value="2">2 Months</option>
                                    <option value="3">3 Months</option>
                                    <option value="4">4 Months</option>
                                    <option value="5">5 Months</option>
                                    <option value="6">6 Months</option>
                                    <option value="7">7 Months</option>
                                    <option value="8">8 Months</option>
                                    <option value="9">9 Months</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="type">Membership Type: &nbsp;</label>
                                <select class="selectpicker" id="type" name="type" required>
                                    <option value="Regular">Regular</option>
                                    <option value="Student">Student</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="file" class="form-control" name="image" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row"> 
                        <div class="col-sm-12">
                        <button type="submit" class="btn btn-block btn-lg btn-danger waves-effect"><b>Submit</b></button>
                        </div>
                    </div>        
                </form>
            </div>
        </div>
    </div>
</div>

@endsection