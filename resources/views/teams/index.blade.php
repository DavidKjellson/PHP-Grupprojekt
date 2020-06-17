@extends('layouts.app')

@section('content')
<div class="float-left ml-2 mt-4">
        <div class="card p-3" style="width: 18rem;">
            <a href="{{ route('admin.users.index') }}"> Visa alla medlemmar</a>
            <a href="{{ route('teams.index') }}">Lag</a>
        </div>
    </div>
<div class="container">
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
                                    <td>{{$team->team_name}}</td>
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
