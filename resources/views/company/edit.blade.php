@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h3 class="font-weight-bold">Update employee</h3>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <br />
            @endif
            <form method="post" action="{{ route('company.update', $company->id) }}" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <img src="{{ asset('storage/' . $company->image) }}" class="img-fluid" width="100" alt="default">
                    <label for="image">Company logo:</label>
                    <input type="file" class="form-control-file" name="image" value={{ $company->name }} id="image">
                </div>
                <div class="form-group">
                    <label for="name">Company Name:</label>
                    <input type="text" class="form-control" name="name" value={{ $company->name }} />
                </div>

                <div class="form-group">
                    <label for="description">Company description:</label>
                    <textarea class="form-control" name="description">{{ $company->description }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
