@extends('app')

@section('content')

<section class="pb-5 bg-light">
    <div class="container pt-5">
        <div class="row align-items-center mb-5">
            <div class="col-12 col-sm-8 offset-lg-2 mb-5 mb-lg-0">
                <div class="card">
                    <div class="card-header  text-center">
                        <h3 class="text-primary">Ticket</h3>
                        

                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th scope="col">Name</th>
                                <td scope="col">:</td>
                                <td><b class="text-success">{{$tickets->name}}</b></td>
                            </tr>
                            <tr>
                                <th scope="col">Trip</th>
                                <td scope="col">:</td>
                                <td><b class="text-success">
                            {{$trip->from_location}} To {{$trip->to_location}}</b></td>
                            </tr>
                            <tr>
                                <th scope="col">Trip Date</th>
                                <td scope="col">:</td>
                                <td>
                                <b class="text-success"> {{$trip->trip_date}}</b>
                                </td>
                            </tr>
                            <tr>
                                <th scope="col">Trip Start Time</th>
                                <td scope="col">:</td>
                                <td><b class="text-success"> {{$trip->start_time}}</b></td>
                            </tr>
                            <tr>
                                <th scope="col">Seat Numbers</th>
                                <td scope="col">:</td>
                                <td><b class="text-success"> {{$tickets->seats->pluck('seat_no')->implode(', ')}}</b></td>
                            </tr>
                            <tr>
                                <th scope="col">Total Fare</th>
                                <td scope="col">:</td>
                                <td><b class="text-success"> TK. {{$tickets->seats->count()*$trip->price}}</b></td>
                            </tr>
                            
                        </table>
                    </div>
                    <div class="card-footer text-muted">
                        2 days ago
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection