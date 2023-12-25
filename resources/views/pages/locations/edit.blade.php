@extends('app')

@section('content')

<section class="pb-5 bg-light">
    <div class="container pt-5">
        <div class="row align-items-center mb-5">
            <div class="col-12 col-sm-6 offset-lg-3 mb-5 mb-lg-0">
                <div class="card">
                    <div class="card-header  text-center">
                        <h3 class="text-primary">Add Location</h3>

                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('locations.update', $location->id) }}">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" value="{{$location->id}}">
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Location</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" value="{{$location->name}}"
                                        class="form-control @error('name') is-invalid @enderror" id="inputEmail3" placeholder="Enter your location">
                                    @error('name')
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