@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            @if(session()->get('success'))
                <div class="alert alert-success" role="alert">
                    {{ session()->get('success') }}
                </div>
            @endif
            <h3 class="font-weight-bold">Employees</h3>
                <div>
                    <a style="margin: 19px;" href="{{ route('employee.create')}}" class="btn btn-primary">Add employee</a>
                </div>
                <table class="table table-striped">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Position</td>
                    <td>Salary</td>
                    <td>Receipt date</td>
                    <td colspan = 2>Actions</td>
                </tr>
                </thead>
                <tbody>
                @foreach($employees as $employee)
                    <tr>
                        <td>{{$employee->id}}</td>
                        <td>{{$employee->name}}</td>
                        <td>{{ $employee->position->name }}</td>
                        <td>{{$employee->salary}} $</td>
                        <td>{{$employee->created_at}}</td>
                        <td>
                            <a href="{{ route('employee.show',$employee->id)}}" class="btn btn-secondary">Show</a>
                        </td>
                        <td>
                            <a href="{{ route('employee.edit',$employee->id)}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('employee.destroy', $employee->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div>
            </div>
@endsection
