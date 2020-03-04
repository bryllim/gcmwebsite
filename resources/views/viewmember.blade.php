@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <ol class="breadcrumb">
            <li><a href="{{ route('members') }}"><i class="material-icons">group</i> Members</a></li>
            <li class="active">Juan Dela Cruz</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="alert alert-warning text-center">
            <strong>Important!</strong> This member's membership validity has expired.
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-5">
        <div class="card profile-card">
            <div class="profile-body bg-red">
                <div class="content-area">
                    <br>
                    <small>Personal Information</small>
                    <h3>Juan Dela Cruz</h3>
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
                        <span>Address</span>
                        <span>Sto. Nino Village, Banilad, Cebu City</span>
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
                            Actions: <a href="#"><b>RENEW</b></a> | <a href="#"><b>EDIT</b></a>
                        </div>
                    </li>
                    <li>
                        <div class="title">
                            <i class="material-icons">history</i>
                            History
                        </div>
                        <div class="content" style="color:black">
                            <div class="font-12 well" style="border-radius: 5px; padding-left:10px; padding-top:10px; padding-bottom:2px; padding-right:10px; margin-bottom:3px">
                                <p><span class="text-muted" style="float:right"><small><i class="material-icons font-12">access_time</i> March 12, 2020</small></span></p>
                                <p style="margin-top: -5px">1x Monthly Fee - ₱750.00</p>
                            </div>
                            <div class="font-12 well" style="border-radius: 5px; padding-left:10px; padding-top:10px; padding-bottom:2px; padding-right:10px; margin-bottom:3px">
                                <p><span class="text-muted" style="float:right"><small><i class="material-icons font-12">access_time</i> January 3, 2020</small></span></p>
                                <p style="margin-top: -5px">1x Annual Membership Fee - ₱250.00</p>
                                <p style="margin-top: -5px">2x Monthly Fee - ₱1500.00</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection