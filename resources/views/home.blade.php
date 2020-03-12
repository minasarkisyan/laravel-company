@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ Auth::user()->name }} Company profile</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div>
                            <a style="margin: 19px;" href="{{ route('company.index')}}" class="btn btn-primary">К списку компаний</a>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <img src="{{asset('storage/' . Auth::user()->image)}}" alt="logo" width="100">
                            </div>
                            <div class="col-8">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <th style="width: 11rem">Company Name:</th>
                                        <td>{{ Auth::user()->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Company description:</th>
                                        <td>{{ Auth::user()->description }} $</td>
                                    </tr>
                                    <tr>
                                        <th>Company email:</th>
                                        <td>{{ Auth::user()->email }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <table class="table table-sm">
                                    <thead>
                                    <tr class="bg-warning">
                                        <th scope="col">Employee name</th>
                                        <th scope="col">Position</th>
                                        <th scope="col">Salary</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach(Auth::user()->employees as $employee)
                                        <tr>
                                            <td>{{ $employee->name }}</td>
                                            <td>{{ $employee->position->name }}</td>
                                            <td>{{ $employee->salary }} $</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tr>
                                        <th><a href="{{ route('employee.create')}}" class="btn btn-success">Добавить сотрудника</a></th>
                                        <th><a href="{{ route('employee.edit', Auth::user()->id)}}" class="btn btn-primary">Редактировать список</a></th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
