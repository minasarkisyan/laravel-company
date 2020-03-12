@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h3 class="font-weight-bold">Update employee</h3>

            @if ($errors->any())
                <div class="alert alert-danger mt-3 mb-3">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <br />
            @endif
            <form method="post" action="{{ route('company.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="image">Company logo:</label>
                    <input type="file" class="form-control-file" name="image"  id="image">
                </div>
                <div class="form-group">
                    <label for="name">Company Name:</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Company description:</label>
                    <textarea class="form-control" name="description"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">ADD COMPANY</button>
            </form>
        </div>
    </div>
@endsection
