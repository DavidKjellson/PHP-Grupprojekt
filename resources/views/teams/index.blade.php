@extends('layouts.app')

@section('content')
<!-- SUCCESS MESSAGE FOR ADDING NEW MEMBER -->
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<div class="pull-right">
    <a class="btn btn-success" style='margin: 20px 10px 10px 10px;' href="{{ route('admin.users.create') }}"> Add New Member</a>
    <a class="btn btn-info" style='margin: 20px 10px 10px 10px;' href="{{ route('teams.create') }}"> Add New Team</a>
    <a class="btn btn-danger" style='margin: 20px 10px 10px 10px;' href="{{ route('activities.create') }}"> Add New Activity</a>
</div>
<div class="float-left ml-2 mt-4">
    <div class="card p-3" style="width: 10rem;">
        <a style='font-size: 15px; margin-bottom: 10px' href="{{ route('admin.users.index') }}">Show Members</a>
        <a style='font-size: 15px;  ' href="{{ route('activities.index') }}">Show Activities</a>
    </div>

</div>
<div class="container">
    <div class="row justify-content-center" style='margin: 10px 5px 5px 5px;'>
        <div class="card">
            <div class="card-header" style="font-size:25px;">Teams</div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th width="600px" scope="col">No</th>
                            <th width="600px" scope="col">Team</th>
                            <th width="700px">Team Activity</th>
                        </tr>
                    </thead>
                    @foreach($teams as $key=>$team)
                    <tbody>
                        <tr>
                            <th scope="row">{{++$key}}</th>
                            <td>
                                <a href="{{ route('teams.index', $team->id) }}">{{$team->team_name}}</a>
                            </td>
                            <td> <a>{{$team->team_activity}}</a></td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>

            </div>
        </div>
    </div>
</div>
</div>
@endsection