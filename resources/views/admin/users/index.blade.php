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
                    @php
                    $totalFee = 0
                    @endphp

                    <ol>
                    @foreach($users as $key=>$user)
                    <form action="{{ route('admin.users.destroy', $user->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <li style="padding: 1rem;"><b>Namn:</b> {{$user->name}} | <b>Email:</b> {{$user->email}} <button type="submit" class="d-inline btn-sm btn-danger">Ta bort</button></li>

                        @php
                        $totalFee += $user->member_fee;
                        @endphp
                    </form>
                    @endforeach
                    </ol>
                        <h6><u>Summan av medlemsavgift:</u> {{ $totalFee }}</h6>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection