@extends('app')

@section('content')

<section class="pb-5 bg-light">
    <div class="container pt-5">
        <div class="row align-items-center mb-5">
            <div class="col-12 col-sm-8 offset-lg-2 mb-5 mb-lg-0">
                <div class="card">
                    <div class="card-header  text-center">
                        <h3 class="text-primary">Available Trip</h3>

                    </div>
                    <div class="card-body">
                    <div class="col-12 col-md-6 col-lg-4 m-auto">
                        <div class="d-flex justify-content-center align-items-center py-5 bg-light rounded">
                            <div class="text-center">
                                
                                <h4 class="fw-bold text-primary">{{$trip->from_location}} To {{$trip->to_location}}</h4>
                                <p class="text-muted">Trip Date:<b class="text-success"> {{$trip->trip_date}}</b></p>
                                <p class="text-muted">Trip Start Time:<b class="text-success"> {{$trip->start_time}}</b></p>
                                <p class="text-muted">Available seats:<b class="text-success"> {{ 36 - $booked_seat}}</b></p>
                                <a href="{{route('home.seats', $trip->id)}}" class="btn btn-outline-primary">For Book</a>
                            </div>
                        </div>
                    </div>
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