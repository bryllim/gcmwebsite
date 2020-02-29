@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="info-box bg-red hover-expand-effect">
            <div class="icon">
                <i class="material-icons">account_balance_wallet</i>
            </div>
            <div class="content">
                <div class="text">TOTAL REVENUE</div>
                <div class="number"><small>₱</small> <strong>35,234.00</strong></div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="info-box bg-red hover-expand-effect">
            <div class="icon">
                <i class="material-icons">group</i>
            </div>
            <div class="content">
                <div class="text">ACTIVE MEMBERS</div>
                <div class="number"><strong>127</strong></div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="info-box bg-red hover-expand-effect">
            <div class="icon">
                <i class="material-icons">group_add</i>
            </div>
            <div class="content">
                <div class="text">NEW MEMBERS</div>
                <div class="number"><strong>25</strong></div>
            </div>
        </div>
    </div>
</div>
@endsection