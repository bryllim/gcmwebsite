@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <ol class="breadcrumb">
            <li><a href="{{ route('solicitation') }}"><i class="material-icons">card_giftcard</i> Solicitation</a></li>
            <li class="active">Add New Solicitation</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="body">
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Description">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="number" class="form-control" placeholder="Amount">
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
@endsection