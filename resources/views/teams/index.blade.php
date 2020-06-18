@extends('layouts.app')

@section('content')

<!-- SUCCESS MESSAGE FOR ADDING NEW MEMBER -->
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<div class="pull-right">
    <a class="btn btn-success" style='margin: 20px 10px 10px 10px;' href="{{ route('admin.users.create') }}"> Lägg till ny medlem</a>
    <a class="btn btn-info" style='margin: 20px 10px 10px 10px;' href="{{ route('teams.create') }}"> Lägg till nytt lag</a>
    <a class="btn btn-danger" style='margin: 50px 10px 10px 10px;' href="{{ route('activities.create') }}"> Lägg till ny aktivitet</a>
</div>
<div class="float-left ml-2 mt-4">
    <div class="card p-3" style="width: 18rem;">
        <a href="{{ route('admin.users.index') }}"> Visa alla medlemmar</a>
        <a href="{{ route('teams.index') }}">Lag</a>
    </div>

</div>



<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Lag</div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Antal</th>
                            <th scope="col">Lag</th>
                        </tr>
                    </thead>
                    @foreach($teams as $key=>$team)
                    <tbody>
                        <tr>
                            <th scope="row">{{++$key}}</th>
                            <td>
                                <a href="{{ route('teams.show', $team->team_id) }}">{{$team->team_name}}</a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
            @endsection