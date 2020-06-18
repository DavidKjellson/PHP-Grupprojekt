@extends('layouts.app')

@can('isAdmin')
@section('content')
<div class="pull-right">
    <a class="btn btn-success" style='margin: 20px 10px 10px 10px;' href="{{ route('admin.users.create') }}"> Add New Member</a>
    <a class="btn btn-info" style='margin: 20px 10px 10px 10px;' href="{{ route('teams.create') }}"> Add New Team</a>
    <a class="btn btn-danger" style='margin: 20px 10px 10px 10px;' href="{{ route('activities.create') }}"> Add New Activity</a>
</div>

</div>
<div class="container">

    <div class="row justify-content-center" style='margin: 10px 5px 5px 5px;'>
        <div class="card">
            <div class="card-header" style="font-size:25px;">Activities</div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th width="100px" scope="col">No</th>
                            <th width="300px" scope="col">Activity Name</th>
                        </tr>
                    </thead>
                    @foreach($activities as $key=>$activity)
                    <tbody>
                        <tr>
                            <th scope="row">{{++$key}}</th>
                            <td>
                                <a>{{$activity->activity_name}}</a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>

            </div>
        </div>
    </div>
</div>
</div>
@endcan
@endsection