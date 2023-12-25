@extends('app')

@section('content')

<section class="pb-5 bg-light">
    <div class="container pt-5">
        <div class="row align-items-center mb-5">
            <div class="col-12 col-sm-10 offset-lg-1 mb-5 mb-lg-0">
                <div class="card">
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                
                    <div class="card-header  text-center">
                        <h3 class="text-primary">Available Trips</h3>
                        <div class="col-12 text-end">
                            <a href="{{route('trips.create')}}" class="btn btn-primary">Add</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">From Location</th>
                                    <th scope="col">To Location</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Fare</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($trips as $key=>$item)
                                <tr>
                                    <th scope="row">{{++$key}}</th>
                                    <td>{{$item->trip_date}}</td>
                                    <td>{{$item->from_location}}</td>
                                    <td>{{$item->to_location}}</td>
                                    <td>{{$item->start_time}}</td>
                                    <td>{{$item->price}}</td>
                                    <td class="d-flex">
                                        <a href="{{route('trips.edit', $item->id)}}" class="btn btn-info">View</a>
                                        <form action="{{route('trips.destroy', $item->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')                                            
                                            <button type="submit" class="btn btn-danger">Delete</button>
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
</section>
@endsection