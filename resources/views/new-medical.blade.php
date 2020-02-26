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
                <h2 class="card-inside-title">Basic Examples</h2>
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="card-inside-title">Different Widths</h2>
                <div class="row clearfix">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="col-sm-6">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="col-sm-6">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="col-sm-4">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="col-sm-4">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="col-sm-4">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="col-sm-3">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="col-sm-3">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="col-sm-3">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="col-sm-3">
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="card-inside-title">Different Sizes</h2>
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group form-group-lg">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Large Input">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Default Input">
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Small Input">
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="card-inside-title">Floating Label Examples</h2>
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control">
                                <label class="form-label">Username</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="password" class="form-control">
                                <label class="form-label">Password</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group form-float form-group-lg">
                            <div class="form-line">
                                <input type="text" class="form-control">
                                <label class="form-label">Large Input</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control">
                                <label class="form-label">Default Input</label>
                            </div>
                        </div>
                        <div class="form-group form-float form-group-sm">
                            <div class="form-line">
                                <input type="text" class="form-control">
                                <label class="form-label">Small Input</label>
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="card-inside-title">Input Status</h2>
                <div class="row clearfix">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="form-line focused">
                                <input type="text" class="form-control" value="Focused" placeholder="Statu Focused">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="form-line disabled">
                                <input type="text" class="form-control" placeholder="Disabled" disabled="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection