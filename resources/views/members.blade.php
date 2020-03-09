@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-3">
        <a type="button" class="btn btn-danger waves-effect btn-block" href="{{ route('newmember') }}">
            <i class="material-icons">add</i>
            <span><strong>Add New Member</strong></span>
        </a>
    </div>
    <div class="col-md-3">
        <button type="button" class="btn btn-secondary btn-block" style="pointer-events: none;">
            <i class="material-icons text-muted">date_range</i>
            <span>Date Today:&nbsp; <b>{{ date('F j, Y') }}</b></span>
        </button>
    </div>
    <div class="col-md-6">
        <button type="button" class="btn btn-secondary btn-block" style="pointer-events: none;">
            <i class="material-icons text-muted">group</i>
            <span>Active Members:&nbsp; <b>{{ $active }}</b></span>
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
                            <th>Type</th>
                            <th>Valid Until</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($members as $member)
                        <tr>
                            <td>{{ $member->lastname }}</td>
                            <td>{{ $member->firstname }}</td>
                            <td>{{ $member->type }}</td>
                            <td>{{ date('F j, Y', strtotime($member->validity)) }}</td>
                            <td>
                                @if($member->status == "Pending")
                                <span class="label bg-blue">Pending</span>
                                @elseif($member->status == "Expired")
                                <span class="label bg-red">Expired</span>
                                @else
                                <span class="label bg-green">Active</span>
                                @endif
                            </td>
                            <td><b><a href="{{ url('member') }}/{{ $member->id }}">VIEW</a> | <a href="{{ url('renew') }}/{{ $member->id }}">RENEW</a> | <a href="{{ url('edit') }}/{{ $member->id }}">EDIT</a></b></td>
                        </tr>
                    @endforeach
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