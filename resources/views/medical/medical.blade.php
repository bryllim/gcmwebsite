@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-3">
        <a type="button" class="btn btn-primary waves-effect btn-block" href="{{ route('new-medical') }}">
            <i class="material-icons">add</i>
            <span><strong>Add New Beneficiary</strong></span>
        </a>
    </div>
    <div class="col-md-6">
        <button type="button" class="btn btn-secondary btn-block" style="pointer-events: none;">
            <i class="material-icons text-muted">account_balance_wallet</i>
            <span>Remaining Budget:&nbsp; <small>₱</small> <b>2,235,500.00</b> out of <small>₱</small> <b>5,235,500.00</b></span>
        </button>
    </div>
    <div class="col-md-3">
        <button type="button" class="btn btn-secondary btn-block" style="pointer-events: none;">
            <i class="material-icons text-muted">local_hospital</i>
            <span>Constituents Assisted:&nbsp; <b>145</b></span>
        </button>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="body table-responsive">
                <h3 class="visible-md visible-lg" style="margin-bottom: -30px;">List of Medical Beneficiaries</h3>
                <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="beneficiary_table" role="grid">
                    <thead>
                        <tr>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Hospital</th>
                            <th>Amount</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="{{ route('view-medical') }}">Dela Cruz</a></td>
                            <td>Juan</td>
                            <td>St. Luke's</td>
                            <td><small>₱</small> 25,500.00</td>
                            <td><span class="label bg-green">Approved</span></td>
                        </tr>
                        <tr>
                            <td><a href="{{ route('view-medical') }}">Militante</a></td>
                            <td>Cris Lawrence Adrian</td>
                            <td>Chong Hua</td>
                            <td><small>₱</small> 28,900.00</td>
                            <td><span class="label bg-blue">Pending</span></td>
                        </tr>
                        <tr>
                            <td><a href="{{ route('view-medical') }}">Lim</a></td>
                            <td>Bryl Kezter</td>
                            <td>Vicente Sotto</td>
                            <td><small>₱</small> 20,500.00</td>
                            <td><span class="label bg-red">Declined</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    $('#beneficiary_table').DataTable({
        "bLengthChange": false,
    });
</script>
@endsection