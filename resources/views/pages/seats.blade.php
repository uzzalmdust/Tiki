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

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($seats as $key=>$item)
                                <tr>
                                    <th scope="row">{{++$key}}</th>
                                    <td>{{$item->seat_no}}</td>
                                    <td class="d-flex">
                                        <form action="{{route('home.book', $item->id)}}" method="post">
                                            @csrf
                                            <input type="hidden" name="trip_id" value="{{$trip_id}}">
                                            <button type="submit" class="btn btn-outline-info">Book</button>
                                        </form>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
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