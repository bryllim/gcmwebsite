@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="body table-responsive">
                <h3 class="visible-md visible-lg" style="margin-bottom: -30px;">Solicitations</h3>
                <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="solicitation_table" role="grid">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description/Purpose</th>
                            <th>Date Released</th>
                            <th>Amount Given</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for($i = 0; $i < 10; $i++)
                        <tr>
                            <td>Rodrigo Roa Duterte</td>
                            <td>For the cost of the barangay fiesta</td>
                            <td>Oct 19, 2019</td>
                            <td><small>₱</small> 35,500.00</td>
                        </tr>
                        <tr>
                            <td>Edgar Labella</td>
                            <td>Payments for organizing barangay basketball league</td>
                            <td>Feb 12, 2020</td>
                            <td><small>₱</small> 24,500.00</td>
                        </tr>
                        <tr>
                            <td>Sonny Antonio Trillanes</td>
                            <td>Transportation expenditures</td>
                            <td>Jan 1, 2020</td>
                            <td><small>₱</small> 25,500.00</td>
                        </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    $('#solicitation_table').DataTable({
        "bLengthChange": false,
    });
</script>
@endsection