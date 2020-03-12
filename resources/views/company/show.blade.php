@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            <h3 class="font-weight-bold">Employee profile</h3>
                <div>
                    <a style="margin: 19px;" href="{{ route('company.index')}}" class="btn btn-primary">На главную</a>
                </div>

                <div class="row">
                    <div class="col-3">
                        <img src="{{asset('storage/' . $company->image)}}" alt="logo" width="200">
                    </div>
                    <div class="col-8">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th style="width: 11rem">Company Name:</th>
                                    <td>{{ $company->name }}</td>
                                </tr>
                                <tr>
                                    <th>Company description:</th>
                                    <td>{{ $company->description }} $</td>
                                </tr>
                                <tr>
                                    <th>Company email:</th>
                                    <td>{{ $company->email }}</td>
                                </tr>
                                <tr>
                                    <th><a href="{{ route('company.edit', $company->id)}}" class="btn btn-warning">Редактировать</a></th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection
