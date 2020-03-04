@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <ol class="breadcrumb">
            <li><a href="{{ route('members') }}"><i class="material-icons">group</i> Members</a></li>
            <li>Add New Member</li>
            <li class="active">Amount Due</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="body">
                <h3 class="card-inside-title">Amount Due</h3>
                <hr>
                <div class="row" style="color:black">
                    <div class="col-md-12">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>1x Membership Fee</td>
                                    <th scope="row">₱250.00</th>
                                </tr>
                                <tr>
                                    <td>3x Monthly Fee</td>
                                    <th scope="row">₱2,250.00</th>
                                </tr>
                                <tr class="font-24">
                                    <td class="text-right">Grand Total:</td>
                                    <th scope="row">₱2,500.00</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <br>
                <div class="row"> 
                    <form class="form-inline" action="">
                        <div class="col-sm-3">
                        <button type="button" class="btn btn-block btn-lg waves-effect"><b>Cancel</b></button>
                        </div>
                        <div class="col-sm-9">
                        <button type="button" class="btn btn-block btn-lg btn-danger waves-effect"><b>Submit</b></button>
                        </div>
                    </form>
                </div>        
            </div>
        </div>
    </div>
</div>

@endsection