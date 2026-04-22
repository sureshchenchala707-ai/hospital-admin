@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Patients List</h3>
        <form method="GET" action="{{ route('patients.index') }}" class="form-inline float-right">
            <input type="text" name="search" class="form-control mr-2" placeholder="Search by name" value="{{ request('search') }}">
            <button class="btn btn-primary">Search</button>
        </form>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th><th>Name</th><th>Age</th><th>Gender</th><th>Phone</th>
                </tr>
            </thead>
            <tbody>
                @foreach($patients as $patient)
                <tr>
                    <td>{{ $patient->id }}</td>
                    <td>{{ $patient->name }}</td>
                    <td>{{ $patient->age }}</td>
                    <td>{{ $patient->gender }}</td>
                    <td>{{ $patient->phone }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $patients->links() }}
    </div>
</div>
@endsection