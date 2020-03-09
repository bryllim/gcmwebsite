@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <ol class="breadcrumb">
            <li><a href="{{ route('members') }}"><i class="material-icons">group</i> Members</a></li>
            <li class="active">Renew</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="body">
                <h3 class="card-inside-title">{{ $member->firstname }}  {{ $member->lastname }} | Renew Membership</h3>
                <hr>
                <form method="POST" action="{{ route('extend') }}">
                @csrf
                    <div class="form-group">
                        <label for="validity">Renew Membership: &nbsp;</label>
                        <select class="selectpicker" id="validity" name="number" required>
                            <option value="1">1 Month</option>
                            <option value="2">2 Months</option>
                            <option value="3">3 Months</option>
                            <option value="4">4 Months</option>
                            <option value="5">5 Months</option>
                            <option value="6">6 Months</option>
                            <option value="7">7 Months</option>
                            <option value="8">8 Months</option>
                            <option value="9">9 Months</option>
                            <option value="10">10 Months</option>
                            <option value="11">11 Months</option>
                            <option value="12">12 Months</option>
                        </select>
                    </div>
                    <hr>
                    <h2>Amount to collect: <span id="amount">₱ {{ ($member->type == "Student")? $studentfee : $regularfee }}</span></h2>
                    <hr>
                    <input type="hidden" name="member_id" value="{{ $member->id }}">
                    <button type="submit" class="btn btn-block btn-lg btn-danger waves-effect"><b>Submit</b></button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
$("#validity").change(function(){
    var amount = $("#validity").val() * {{ ($member->type == "Student")? $studentfee : $regularfee }};
    const formatter = new Intl.NumberFormat('en-US', {
    style: 'currency',
    currency: 'USD',
    minimumFractionDigits: 2
    })
    amount = formatter.format(amount);
    amount = amount.replace('$', '₱ ');
    $("#amount").text(amount);
});
</script>

@endsection