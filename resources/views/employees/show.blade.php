@extends('layouts.app')

@section('content')
<br />
<div class="card" style="margin:20px">
    <div class="card-header">Employees Page</div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Name : {{ $employees->name }}</h5>
            <p class="card-text">Email : {{ $employees->email }}</p>
            <p class="card-text">Mobile : {{ $employees->mobile }}</p>
            <p class="card-text">Password : {{ $employees->password }}</p>
        </div>

    </div>
</div>


@endsection