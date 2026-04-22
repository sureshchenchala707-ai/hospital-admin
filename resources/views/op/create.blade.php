@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header"><h3>Register OP - April</h3></div>
    <div class="card-body">
        <form method="POST" action="/op/store">
            @csrf
            <div class="form-group">
                <label>Name :</label>
                <input class="form-control" name="name" placeholder="Patient Name" required>
            </div>
            <div class="form-group">
                <label>Age :</label>
                <input class="form-control" type="number" name="age" placeholder="Age" required>
            </div>
            <div class="form-group">
                <label>Gender :</label>
                <select class="form-control" name="gender" required>
                    <option value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label>Phone :</label>
                <input class="form-control" name="phone" placeholder="Phone">
            </div>
            <div class="form-group">
                <label>Doctor :</label>
                <input class="form-control" name="doctor" placeholder="Doctor Name" required>
            </div>
            <button class="btn btn-primary">Register OP</button>
        </form>
    </div>
</div>
@endsection