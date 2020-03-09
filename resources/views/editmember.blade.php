@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <ol class="breadcrumb">
            <li><a href="{{ route('members') }}"><i class="material-icons">group</i> Members</a></li>
            <li class="active">Edit</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
            <strong>Edit | {{ $member->firstname }} {{ $member->lastname }}</strong>
            </div>
            <div class="body">
                <h3>{{ $member->firstname }}</h3>
            </div>
        </div>
    </div>
</div>
@endsection