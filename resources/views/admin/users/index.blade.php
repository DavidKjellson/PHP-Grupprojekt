@extends('layouts.app')

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 style='margin: 20px 10px 10px 10px;'>Admin Panel Svalan</h2>
        </div>
        <a href="{{ route('teams.index') }}" style='font-size: 20px; margin: 20px 10px 10px 10px;'>Show Teams</a>
        <div class="pull-right">
            <a class="btn btn-success" style='margin: 20px 10px 10px 10px;' href="{{ route('admin.users.create') }}"> Add New Member</a>
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

    <tr>
        <th>No</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Birth year</th>
        <th width="280px">Action</th>
    </tr>
    @foreach($members as $key=>$member)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $member->first_name }}</td>
        <td>{{ $member->last_name }}</td>
        <td>{{ $member->email }}</td>
        <td>{{ $member->birth_year }}</td>
        </form>
        </td>
    </tr>
    @endforeach
</table>

<!-- PAGINATION  -->
{!! $members->links() !!}
@endsection