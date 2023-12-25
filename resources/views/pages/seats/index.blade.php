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
                        <h3 class="text-primary">Available Seats</h3>
                        <div class="col-12 text-end">
                            <a href="{{route('seat-allocations.create')}}" class="btn btn-primary">Add</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Seat No.</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($seats as $key=>$item)
                                <tr>
                                    <th scope="row">{{++$key}}</th>
                                    <td>{{$item->seat_no}}</td>
                                    <td class="d-flex">
                                        <a href="{{route('seat-allocations.edit', $item->id)}}" class="btn btn-info">View</a>
                                        <form action="{{route('seat-allocations.destroy', $item->id)}}" method="post">
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