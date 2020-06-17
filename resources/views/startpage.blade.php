@extends('layouts.app')

@section('content')

 <div class="container">
    <div class="row justify-content-left">
        
        <div class="col-md-6 mt-2">
            <div class="card">
                <div class="card-header">Lag</div>
                  <div class="card-body">
                      <table class="table table-hover">
                          <thead class="thead-light">
                              <tr>
                              <th scope="col">Antal</th>
                              <th scope="col">Lag</th>
                              <th scope="col">Aktivitet</th>
                              </tr>
                          </thead>
                            @foreach($teams as $key=>$team)
                              <tbody>
                                  <tr>
                                      <th scope="row">{{++$key}}</th>
                                      <td>{{$team->team_name}}</td>
                                      <td>{{$team->activity->activity}}</td>
                                  </tr>
                              </tbody>
                          @endforeach 
                      </table>
                  </div>
              </div>
          </div>

          <div class="col-md-6 mt-2">
            <div class="card">
                <div class="card-header">Aktiviter</div>
                  <div class="card-body">
                      <table class="table table-hover">
                          <thead class="thead-light">
                              <tr>
                              <th scope="col">Antal</th>
                              <th scope="col">Aktivitet</th>
                              </tr>
                          </thead>
                            @foreach($activities as $key=>$activity)
                              <tbody>
                                  <tr>
                                      <th scope="row">{{++$key}}</th>
                                      <td>{{$activity->activity}}</td>
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