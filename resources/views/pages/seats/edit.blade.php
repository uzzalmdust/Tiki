@extends('app')

@section('content')

<section class="pb-5 bg-light">
    <div class="container pt-5">
        <div class="row align-items-center mb-5">
            <div class="col-12 col-sm-6 offset-lg-3 mb-5 mb-lg-0">
                <div class="card">
                    <div class="card-header  text-center">
                        <h3 class="text-primary">Update Seat</h3>

                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('seat-allocations.update', $seat->id) }}">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" value="{{$seat->id}}">
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Seatseat_no</label>
                                <div class="col-sm-10">
                                    <input type="text" name="seat_no" value="{{$seat->seat_no}}"
                                        class="form-control @error('seat_no') is-invalid @enderror" id="inputEmail3" placeholder="Enter your location">
                                    @error('seat_no')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-12 text-end">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>

    </div>

    </div>
</section>
@endsection