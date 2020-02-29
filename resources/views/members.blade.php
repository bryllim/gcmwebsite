@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-3">
        <a type="button" class="btn btn-danger waves-effect btn-block" href="#">
            <i class="material-icons">add</i>
            <span><strong>Add New Member</strong></span>
        </a>
    </div>
    <div class="col-md-3">
        <button type="button" class="btn btn-secondary btn-block" style="pointer-events: none;">
            <i class="material-icons text-muted">date_range</i>
            <span>Date Today:&nbsp; <b>March 10, 2020</b></span>
        </button>
    </div>
    <div class="col-md-6">
        <button type="button" class="btn btn-secondary btn-block" style="pointer-events: none;">
            <i class="material-icons text-muted">group</i>
            <span>Active Members:&nbsp; <b>145</b></span>
        </button>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="body table-responsive">
                <h3 class="visible-md visible-lg" style="margin-bottom: -30px;">Gym Members</h3>
                <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="beneficiary_table" role="grid">
                    <thead>
                        <tr>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Contact Number</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Dela Cruz</td>
                            <td>Juan</td>
                            <td>09055210329</td>
                            <td><span class="label bg-green">Active</span></td>
                            <td><b><a href="#">VIEW</a> | <a href="#">RENEW</a> | <a href="#">EDIT</a></b></td>
                        </tr>
                        <tr>
                            <td>Kumar</td>
                            <td>Ashnek Muhammed</td>
                            <td>09055210329</td>
                            <td><span class="label bg-red">Expired</span></td>
                            <td><b><a href="#">VIEW</a> | <a href="#">RENEW</a> | <a href="#">EDIT</a></b></td>
                        </tr>
                        <tr>
                            <td>Vishuna</td>
                            <td>Siddharta Gautma</td>
                            <td>0905523210329</td>
                            <td><span class="label bg-green">Active</span></td>
                            <td><b><a href="#">VIEW</a> | <a href="#">RENEW</a> | <a href="#">EDIT</a></b></td>
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