@extends('layout.base')

@section('content')
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">My Tours</div>
                    <div class="card-body">
                        @foreach($tours as $tour)
                            <div class="card pt-1">
                                <div class="card-header">{{$tour->tour_title}}</div>
                                <div class="card-body">
                                    <div class="row form-group">
                                        <div class="col-2 p-0">
                                            <span class="form-control border-0">Place</span>
                                        </div>
                                        <div class="col-2">
                                            <span class="form-control border-0">{{$tour->place? $tour->place->place_name:''}}</span>
                                        </div>
                                        <div class="col-3"><span class="form-control border-0">Start Date</span></div>
                                        <div class="col-4"><span
                                                    class="form-control border-0">{{$tour->tour_start_date}}</span>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-2 p-0">
                                            <span class="form-control border-0">Tour Price</span>
                                        </div>
                                        <div class="col-10">
                                            <span class="form-control border-0">{{$tour->tour_prices.'VND'}}</span>
                                        </div>
                                    </div>
                                    <div class="form-group row pr-5 d-flex justify-content-end">
                                        <div class="row">
                                            <a class="align-middle btn btn-primary" href="{{url('/tour/detail/'.$tour->serial)}}">Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection