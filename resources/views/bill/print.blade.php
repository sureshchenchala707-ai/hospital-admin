@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Bill for {{ $op->patient->name }} ({{ $op->op_number }})</h3>
        <button onclick="window.print()" class="btn btn-primary float-right">Print</button>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr><th>Patient Name</th><td>{{ $op->patient->name }}</td></tr>
            <tr><th>Doctor</th><td>{{ $op->doctor }}</td></tr>
            <tr><th>Consultation Fee</th><td>{{ $op->bill->consultation_fee }}</td></tr>
            <tr><th>Lab Fee</th><td>{{ $op->bill->lab_fee }}</td></tr>
            <tr><th>Medicine Fee</th><td>{{ $op->bill->medicine_fee }}</td></tr>
            <tr><th>Total</th><td>{{ $op->bill->total }}</td></tr>
        </table>
    </div>
</div>
@endsection