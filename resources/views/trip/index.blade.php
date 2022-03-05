@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Trips</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>User</th>
                                <th>City</th>
                                <th>Departure</th>
                                <th>Arrival</th>
                                <th> </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($trips as $trip)
                            <tr>
                                <th>{{$trip->id}}</th>
                                <td>{{$trip->name}}</td>
                                <td>{{$trip->users[0]->name}}</td>
                                <td>{{$trip->city->name}}</td>
                                <td>{{$trip->departure}}</td>
                                <td>{{$trip->arrival}}</td>
                                <td>
                                    <form action="{{route('trips.destroy',$trip)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection