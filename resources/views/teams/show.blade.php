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
                <div class="card-header">{{$team->team_name}}
                 <form action="{{ route('teams.destroy', $team->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Ta bort</button>
                  </form>
                </div>
                  <div class="card-body">
                    <ol>
                      @foreach($team->users as $key=>$user)
                      <form action="{{ route('teams.detach', [$team->id, $user->id]) }}" method="post">
                        @csrf
                        @method('patch')            
                        <li>{{$user->name}} 
                          <button type="submit" class="btn btn-danger ml-3">Ta bort</button>
                        </li>
                      </form>   
                      @endforeach 
                   </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection