@extends('layouts.app')

@section('content')
<br />
<div class="card" style="margin:20px">
    <div class="card-header">Create New Employees</div>
    <div class="card-body">
        <form action="{{ url('employee') }}" method="post">
            {!! csrf_field() !!}
            <label>Name</label></br>
            <input type="text" name="name" class="form-control" id="name"></br>
            <label>Email</label></br>
            <input type="text" name="email" class="form-control" id="email"></br>
            <label>Mobile</label></br>
            <input type="text" name="mobile" class="form-control" id="mobile"></br>
            <label>Password</label></br>
            <input type="text" name="password" class="form-control" id="password"></br>

            <input type="submit" value="Save" class="btn btn-success"></br>

        </form>
    </div>
</div>


@endsection