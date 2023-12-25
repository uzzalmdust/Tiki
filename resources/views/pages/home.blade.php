@extends('app')

@section('content')

<section class="pb-5 bg-light">
    <div class="container pt-5">
        <div class="row align-items-center mb-5">
            <div class="col-12 col-sm-8 offset-lg-2 mb-5 mb-lg-0">
                <div class="card">
                    <div class="card-header  text-center">
                        <h3 class="text-primary">Browse Your Trip</h3>

                    </div>
                    <div class="card-body">
                        <form method="post" action="{{route('home.search')}}">
                            @csrf
                            <div class="row g-3 m-3">
                                <div class="col">
                                    <select name="from_location" class="form-select"
                                        aria-label="Default select example">
                                        <option value=''>Choose your 'From' location</option>
                                        @foreach($locations as $item)
                                        <option value="{{$item->name}}" {{ ( $item->name == old('from_location')) ?
                                            'selected' : '' }}>{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('from_location')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col">
                                    <select name="to_location" class="form-select" aria-label="Default select example">
                                        <option value=''>Choose your 'To' location</option>
                                        @foreach($locations as $item)
                                        <option value="{{$item->name}}" {{ ( $item->name == old('to_location')) ?
                                            'selected' : '' }} >{{$item->name}}</option>
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
                                    <input type="date" name="trip_date" class="form-control"
                                        value="{{old('trip_date')}}">
                                    @error('trip_date')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Search...</button>
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