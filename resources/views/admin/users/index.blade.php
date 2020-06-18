@extends('layouts.app')

@section('content')
@can('isAdmin')
<div class="row">

    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 style='margin: 0px 10px 10px 10px;'>Admin Panel Svalan</h2>
        </div>
        <div class="float-left ml-2 mt-4">
            <div class="card p-3" style="width: 9rem; margin-bottom: 15px">
                <a style='font-size: 15px;' href="{{ route('teams.index') }}">Visa lag</a>
                <a style='font-size: 15px;  ' href="{{ route('activities.index') }}">Visa aktiviteter</a>
            </div>
        </div>

        <div class="pull-right">
            <a class="btn btn-success" style='margin: 50px 10px 10px 50px;' href="{{ route('admin.users.create') }}"> Lägg till ny medlem</a>
            <a class="btn btn-info" style='margin: 50px 10px 10px 10px;' href="{{ route('teams.create') }}"> Lägg till nytt lag</a>
            <a class="btn btn-danger" style='margin: 50px 10px 10px 10px;' href="{{ route('activities.create') }}"> Lägg till ny aktivitet</a>
        </div>
    </div>
</div>


<!-- SUCCESS MESSAGE FOR ADDING NEW MEMBER -->
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered" style='margin: 10px 5px 5px 5px;'>
    <div class="card-header" style="font-size:25px;">Medlemmar</div>

    <!-- VISA DATABAS MEDLEMMARNA HÄR -->
    @php
    $totalFee = 0
    @endphp

    <tr>
        <th>Nr</th>
        <th>Förnamn</th>
        <th>Efternamn</th>
        <th>Email</th>
        <th>Födelseår</th>
        <th width="280px">Action</th>
    </tr>
    @foreach($members as $key=>$member)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $member->first_name }}</td>
        <td>{{ $member->last_name }}</td>
        <td>{{ $member->email }}</td>
        <td>{{ $member->birth_year }}</td>
        <td>
            <form action="{{ route('admin.users.destroy', $member->member_id) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="d-inline btn-sm btn-danger">Ta bort</button>
            </form>
        </td>
    </tr>


    @php
    $totalFee += $member->member_fee;
    @endphp

    @endforeach
</table>

    <!--Skriv ut totalsumman-->
    <h6><u>Totala inkomst från dessa medlemmar:</u> {{ $totalFee }}kr</h6>

<!-- PAGINATION  -->
{!! $members->links() !!}
@endcan

@can('isUser')
Nope, här får du inte va
@endcan

@endsection