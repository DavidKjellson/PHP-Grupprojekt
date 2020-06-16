@extends('layouts.app')

@section('content')
<!-- <div class="float-left">
    <div class="card" style="width: 18rem;">
        <a class="dropdown-item" href="{{ route('admin.users.teams') }}"> Välj ett lag</a>
    </div>
</div> -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Medlemmar</div>
                <div class="card-body">
                <!-- HÄMTA DATABAS MEDLEMMARNA HÄR -->
                    <table class="table table-hover">
                        <thead class="thead-light">
                            <tr>
                            <th scope="col">Antal</th>
                            <th scope="col">Namn</th>
                            <th scope="col">Email</th>
                            <th scope="col">Aktivitet</th>
                            <th scope="col">Lag</th>
                            <th scope="col">Medlemsavgift</th>
                            </tr>
                        </thead>
                            @foreach($users as $key=>$user)                 
                            <tbody>
                                <tr>
                                <th scope="row">{{++$key}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                </tr>
                            </tbody>
                            @endforeach
                        <h6><u>Summan av medlemsavgift:</u> {{}}</h6>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection