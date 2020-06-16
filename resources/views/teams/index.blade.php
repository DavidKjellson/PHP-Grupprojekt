@extends('layouts.app')

@section('content')
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
                            <th scope="col">Lag</th>
                            </tr>
                        </thead>
                           
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
