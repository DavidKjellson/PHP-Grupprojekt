@extends('layouts.app')

@section('content')

@can('isAdmin')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    Welcome back, admin!
                </div>

                <div class="card p-3" style="width: 100%; text-align: center; font-size: 20px;">

                    <a href="{{ route('admin.users.index') }}"> Members</a>
                    <hr>
                    <a href="{{ route('teams.index') }}"> Teams</a>
                </div>
                <a class="btn btn-success" style='margin: 20px 10px 10px 10px;' href="{{ route('admin.users.create') }}"> Add New Member</a>
                <a class="btn btn-info" style='margin: 20px 10px 10px 10px;' href="{{ route('teams.create') }}"> Add New Team</a>
                <a class="btn btn-danger" style='margin: 20px 10px 10px 10px;' href="{{ route('activities.create') }}"> Add New Activity</a>
            </div>
        </div>
    </div>
</div>
@endcan

@can('isUser')

<div class="card-header">Welcome back, generic user!</div>

@endcan
@endsection