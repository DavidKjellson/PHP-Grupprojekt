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
                <div class="card-header">Medlemmar</div>
                <div class="card-body">

                    <!-- HÄMTA DATABAS MEDLEMMARNA HÄR -->

                    @php
                    $totalFee = 0
                    @endphp

                    <table class="table table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Antal</th>
                                <th scope="col">Namn</th>
                                <th scope="col">Email</th>
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

                        @php
                        $totalFee += $user->member_fee;
                        @endphp

                        @endforeach
                        <h6><u>Summan av medlemsavgift:</u> {{ $totalFee }}</h6>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection