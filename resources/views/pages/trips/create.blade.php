@extends('app')

@section('content')

<section class="pb-5 bg-light">
    <div class="container pt-5">
        <div class="row align-items-center mb-5">
            <div class="col-12 col-sm-8 offset-lg-2 mb-5 mb-lg-0">
                <div class="card">
                    <div class="card-header  text-center">
                        <h3 class="text-primary">Create New Trip</h3>

                    </div>
                    <div class="card-body">
                        <form method="post" action="{{route('trips.store')}}">
                            @csrf
                            <div class="row g-3 m-3">
                                <div class="col">
                                    <label for="from_location">From Location</label>
                                    <select name="from_location" class="form-select"
                                        aria-label="Default select example">
                                        <option value=''>Choose location</option>
                                        @foreach($locations as $item)
                                        <option value="{{$item->name}}" {{ ( $item->name == old('from_location')) ? 'selected' : '' }}>{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('from_location')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="to_location">To Location</label>
                                    <select name="to_location" class="form-select" aria-label="Default select example">
                                        <option value=''>Choose location</option>
                                        @foreach($locations as $item)
                                        <option value="{{$item->name}}" {{ ( $item->name == old('to_location')) ? 'selected' : '' }} >{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('to_location')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>


                            </div>
                            <div class="row g-3 m-3">
                                <div class="col">
                                    <label for="trip_date">Trip Date</label>
                                    <input type="date" name="trip_date" class="form-control" value="{{old('trip_date')}}">
                                    @error('trip_date')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="start_time">Trip Start Time</label>
                                    <input type="time" name="start_time" class="form-control" value="{{old('start_time')}}">
                                    @error('start_time')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="price">Trip Fare</label>
                                    <input type="number" min="0" name="price" class="form-control" placeholder="Enter your fare" value="{{old('price')}}">
                                    @error('price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>


                            </div>
                        </form>

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