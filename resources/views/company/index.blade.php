@extends('layouts.app')

@section('content')
    <h3 class="font-weight-bold">Companies</h3>
    <div>
        <a href="{{ route('company.create')}}" class="btn btn-primary">Add company</a>
    </div>
    @if(session()->get('success'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('success') }}
        </div>
    @endif
    @foreach($companies as $company)
        <div class="row">
            <div class="card w-75 mb-3 mt-3 border-warning shadow">
            <div class="row no-gutters">
            <div class="col-md-4 p-3">

                @if ($company->image)
                    <img src="{{ asset('storage/' . $company->image) }}" class="img-fluid" alt="default">
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                @else
                    <img src="https://via.placeholder.com/176" class="img-fluid" alt="default">
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                @endif
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $company->name }}</h5>
                    <p class="card-text">{{ $company->description }}</p>
                        <table class="table table-sm">
                            <thead>
                            <tr class="bg-warning">
                                <th scope="col">Employee name</th>
                                <th scope="col">Position</th>
                                <th scope="col">Salary</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($company->employees as $employee)
                                    <tr>
                                        <td>{{ $employee->name }}</td>
                                        <td>{{ $employee->position->name }}</td>
                                        <td>{{ $employee->salary }} $</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="{{ route('company.show', $company->id)}}" class="btn btn-secondary">Show company</a>
                </div>
            </div>
        </div>
        </div>
        </div>
    @endforeach
@endsection




{{--                <table class="table table-striped">--}}
{{--                <thead>--}}
{{--                <tr>--}}
{{--                    <td>ID</td>--}}
{{--                    <td>Name</td>--}}
{{--                    <td>Position</td>--}}
{{--                    <td>Salary</td>--}}
{{--                    <td>Receipt date</td>--}}
{{--                    <td colspan = 2>Actions</td>--}}
{{--                </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                @foreach($employees as $employee)--}}
{{--                    <tr>--}}
{{--                        <td>{{$employee->id}}</td>--}}
{{--                        <td>{{$employee->name}}</td>--}}
{{--                        <td>{{ $employee->position->name }}</td>--}}
{{--                        <td>{{$employee->salary}} $</td>--}}
{{--                        <td>{{$employee->created_at}}</td>--}}
{{--                        <td>--}}
{{--                            <a href="{{ route('employee.show',$employee->id)}}" class="btn btn-secondary">Show</a>--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <a href="{{ route('employee.edit',$employee->id)}}" class="btn btn-primary">Edit</a>--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <form action="{{ route('employee.destroy', $employee->id)}}" method="post">--}}
{{--                                @csrf--}}
{{--                                @method('DELETE')--}}
{{--                                <button class="btn btn-danger" type="submit">Delete</button>--}}
{{--                            </form>--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                @endforeach--}}
{{--                </tbody>--}}
{{--            </table>--}}

