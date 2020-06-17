@extends('layouts.app')

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 style='margin: 0px 10px 10px 10px;'>Admin Panel Svalan</h2>
        </div>
        <div class="float-left ml-2 mt-4">
            <div class="card p-3" style="width: 10rem; margin-bottom: 20px">
                <a style='font-size: 18px; margin: 10px; ' href="{{ route('teams.index') }}">Show Teams</a>
            </div>
        </div>

        <div class="pull-right">
            <a class="btn btn-success" style='margin: 50px 10px 10px 50px;' href="{{ route('admin.users.create') }}"> Add New Member</a>
            <a class="btn btn-info" style='margin: 50px 10px 10px 10px;' href="{{ route('teams.create') }}"> Add New Team</a>
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
    <div class="card-header" style="font-size:25px;">Members</div>
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