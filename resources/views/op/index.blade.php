@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>OP Visits</h3>
        <form method="GET" action="{{ route('ops.index') }}" class="form-inline float-right">
            <input type="text" name="search" class="form-control mr-2" placeholder="Search by patient" value="{{ request('search') }}">
            <button class="btn btn-primary">Search</button>
        </form>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>OP Number</th><th>Patient Name</th><th>Doctor</th><th>Visit Date</th><th>Bill Total</th><th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ops as $op)
                <tr class="{{ $op->bill ? '' : 'table-danger' }}">
                    <td>{{ $op->op_number }}</td>
                    <td>{{ $op->patient->name }}</td>
                    <td>{{ $op->doctor }}</td>
                    <td>{{ $op->visit_date }}</td>
                    <td>{{ $op->bill ? $op->bill->total : 'Not Billed' }}</td>
                    <td>
                        @if(!$op->bill)
                        <a href="{{ url('/bill/'.$op->id) }}" class="btn btn-sm btn-success">Create Bill</a>
                        @else
                        <a href="{{ url('/bill/print/'.$op->id) }}" class="btn btn-sm btn-primary">Print Bill</a>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $ops->links() }}
    </div>
</div>
@endsection