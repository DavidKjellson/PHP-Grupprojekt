@extends('layouts.app')

@section('content')
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
                <div class="float-left p-1">
                    <div class="card p-3" style="width: 18rem;">
                        <a href="{{ route('admin.users.index') }}"> Visa alla medlemmar</a>
                        <a href="{{ route('teams.index') }}">Lag</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection