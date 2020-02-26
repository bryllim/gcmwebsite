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
                <h1>view medical</h1>
            </div>
        </div>
    </div>
</div>
@endsection