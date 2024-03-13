@extends('layouts.app')

@section('content')
<br />
<div class="container">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h1>Laravel 9 CRUD (Create, Read, Update and Delete)</h1>
            </div>
            <div class="card-body">
                <a href="{{ url('/employee/create') }}" class="btn btn-success btn-sm" title="Add New Employee">Add
                    New</a>
                <br />
                <br />
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Mobile</th>
                                <th scope="col">Password</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($employees as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->mobile }}</td>
                                <td>{{ $item->password }}</td>
                                <td>
                                    <a href="{{ url('/employee/' .$item->id) }}" title="View Employee"
                                        class="btn btn-info btn-sm"><i class="fa-sharp fa-light fa-eye"
                                            aria-hidden="true"></i> View</a>
                                    <a href="{{ url('/employee/' .$item->id . '/edit') }}" title="Edit Employee"
                                        class="btn btn-primary btn-sm"><i class="fa-sharp fa-thin fa-pencil"
                                            aria-hidden="true"></i>Edit</a>

                                    <form method="POST" action="{{ url('/employee' .'/' . $item->id) }}"
                                        accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}

                                        <button type="submit" title="Delete Employee" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Confirm delete?')"><i class="fa fa-thrash-o"
                                                aria-hidden="true"></i>Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @endsection