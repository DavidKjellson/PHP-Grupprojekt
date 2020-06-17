@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 style="margin: 0px 5px 5px 20px">Add New Activity</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('activities.index') }}" style="margin: 0px 5px 5px 20px"> Back</a>
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

<form action="{{ route('activities.store') }}" method="POST">
    @csrf

    <div class="row" style="margin: 0px 5px 5px 2px; width: 30%;">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Activity name:</strong>
                <input type="text" name="activity_name" class="form-control" placeholder="Team Name">
            </div>
        </div <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-success" style="margin: 0px 5px 5px 20px">Submit</button>
    </div>
    </div>
</form>

@endsection