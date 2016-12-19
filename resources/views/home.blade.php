@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Hotel List Dashboard</div>
                <div class="panel-body">
                <table>
                  <tr>
                    <th>Hotel_Name</th>
                  </tr>
                  @foreach($hotellist as $hotel)
                   <tr>
                    <th>{{$hotel->name}}</th>
                     @endforeach
                  </tr>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
