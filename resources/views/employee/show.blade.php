@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-8">
            @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            <h3 class="font-weight-bold">Employee profile</h3>
                <div>
                    <a style="margin: 19px;" href="{{ route('employee.index')}}" class="btn btn-primary">На главную</a>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Name:</th>
                        <th>{{ $employee->name }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th>Salary:</th>
                        <td>{{ $employee->salary }} $</td>
                    </tr>
                    <tr>
                        <th>Position:</th>
                        <td>Some position</td>
                    </tr>
                    <tr>
                        <th>Receipt date:</th>
                        <td>{{ $employee->created_at }}</td>
                    </tr>
                    </tbody>
                </table>
        </div>
    </div>
@endsection
