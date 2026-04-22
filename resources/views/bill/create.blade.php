@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header"><h3>Create Bill for {{ $op->patient->name }}</h3></div>
    <div class="card-body">
        <form method="POST" action="{{ url('/bill/store') }}">
            @csrf
            <input type="hidden" name="op_id" value="{{ $op->id }}">
            
            <div class="form-group">
                <label>Consultation Fee</label>
                <input class="form-control" type="number" name="consultation_fee" value="0" required>
            </div>
            <div class="form-group">
                <label>Lab Fee</label>
                <input class="form-control" type="number" name="lab_fee" value="0">
            </div>
            <div class="form-group">
                <label>Medicine Fee</label>
                <input class="form-control" type="number" name="medicine_fee" value="0">
            </div>
            <button class="btn btn-success">Generate Bill</button>
        </form>
    </div>
</div>
@endsection