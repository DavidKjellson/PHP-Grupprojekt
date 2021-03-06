@extends('layouts.app')


@section('content')
@can('isAdmin')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 style="margin: 0px 5px 5px 20px">Add New Member</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('admin.users.index') }}" style="margin: 0px 5px 5px 20px"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())

<div class="alert alert-danger">
    <strong>Oops!</strong>Something went wrong.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('admin.users.store') }}" method="POST" style="margin: 0px 5px 5px 17px; width: 30%;">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>First name:</strong>
                <input type="text" name="first_name" class="form-control" placeholder="Name">
                <strong>Last name:</strong>
                <input type="text" name="last_name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="email" name="email" class="form-control" placeholder="johnsmith@icloud.com">
            </div>
            <div class="form-group">
                <strong>Birth year:</strong>
                <input type="number" name="birth_year" class="form-control" placeholder="ex: 1998">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-left">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
</form>

@endcan

@endsection