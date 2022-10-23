@extends('layout.base')

@section('content')
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Tour Detail</div>
                    <div class="card-body">
                        <div class="form-group col-md-10 offset-md-1 row">
                            <span class="col-form-label col-4 align-middle">Tour Name</span>
                            <span class="col-form-label font-weight-normal col-8 align-middle">{{ $tour->tour_name }}</span>
                        </div>
                        <div class="form-group col-md-10 offset-md-1 row">
                            <span class="col-form-label col-4 align-middle">Title</span>
                            <span class="col-form-label font-weight-normal  col-8 align-middle">{{ $tour->tour_title }}</span>
                        </div>
                        <div class="form-group col-md-10 offset-md-1 row">
                            <span class="col-form-label col-4 align-middle">Tour Place</span>
                            <span class="col-form-label font-weight-normal  col-8 align-middle">{{ $tour->place->place_name }}</span>
                        </div>
                        <div class="form-group col-md-10 offset-md-1 row">
                            <span class="col-form-label col-4 align-middle">Tour Description</span>
                            <span class="col-form-label font-weight-normal  col-8 align-middle d-inline-block">{{ $tour->tour_description }}</span>
                        </div>
                        <div class="form-group col-md-10 offset-md-1 row">
                            <span class="col-form-label col-4 align-middle">Tour Detail</span>
                            <span class="col-form-label font-weight-normal  col-8 align-middle d-inline-block">{{ $tour->tour_detail }}</span>
                        </div>
                        <div class="form-group col-md-10 offset-md-1 row">
                            <span class="col-form-label col-4 align-middle">Tour Length</span>
                            <span class="col-form-label font-weight-normal align-middle col-8">{{ $tour->tour_day_length. ' days '. $tour->tour_night_length. ' nights' }}</span>
                        </div>
                        <div class="form-group col-md-10 offset-md-1 row">
                            <span class="col-form-label col-4 align-middle">Tour Price</span>
                            <span class="col-form-label font-weight-normal align-middle col-8">{{ $tour->tour_prices. ' VND'}}</span>
                        </div>
                        <div class="form-group col-md-10 offset-md-1 row">
                            <span class="col-form-label col-4 align-middle">Tour Services</span>
                            <div class="col-8">
                                @foreach($tour->services as $service)
                                    <div class="row">
                                        <div class="col">
                                            <span class="col-form-label font-weight-normal align-middle">{{ $service->service_name}}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group col-md-10 offset-md-1 row">
                            <span class="col-form-label col-4 align-middle">Tour Operator Name</span>
                            <div class="col-8">
                            <a href="{{url('/tour-operator/detail/'.$tour->userTourist->tourOperator->serial)}}">{{$tour->userTourist->tourOperator->tour_operator_name}}</a>
                            </div>
                        </div>
                        @canany(['admin', 'tour-operator'])
                            <div class="form-group col-md-10 offset-md-1 row">
                                <span class="col-form-label col-4 align-middle">Tour Slots</span>
                                <span class="col-form-label font-weight-normal align-middle col-8">{{$tour->tour_slots}}</span>
                            </div>
                            <div class="form-group col-md-10 offset-md-1 row">
                                <span class="col-form-label col-4 align-middle">Tour Slot Left</span>
                                <span class="col-form-label font-weight-normal align-middle col-8">{{ $tour->tour_slots_left}}</span>
                            </div>

                            <div class="form-group col-md-10 offset-md-1">
                                <div class="row d-flex justify-content-center">
                                    <a class="btn btn-primary" href="{{url('/tour/'.$tour->serial.'/edit')}}">Edit
                                        Tours</a>
                                </div>
                            </div>
                        @endcan
                        @foreach($tour->comments as $comment)
                            <div class="col-md-10 offset-md-1 form-group">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between">
                                            <span>{{$comment->tourist->tourist->tourist_name}}</span>
                                            <span class="font-weight-normal">{{$comment->created_at}}</span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <span> {{$comment->comment_content}}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        @canany(['tourist'])
                            @if(!isset($booking))
                                <div class="form-group col-md-10 offset-md-1">
                                    <div class="row d-flex justify-content-center">
                                        <form class="pl-3" action="{{url('/tour/book/'.$tour->serial)}}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-primary">Book Tour</button>
                                        </form>
                                    </div>
                                </div>
                            @endif
                        @endcan

                        @if(isset($booking))
                            <form class="form-horizontal" method="POST"
                                  action="{{ url('tour/comment/'.$tour->serial) }}"
                                  enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group col-md-10 offset-md-1 row">
                                    <label for="comment" class="col-form-label col-4 align-middle">Comment</label>
                                    <textarea id="comment" class="col-form-label font-weight-normal align-middle col-8"
                                              name="comment"></textarea>
                                </div>
                                <div class="col d-flex justify-content-end pr-5">
                                    <button type="submit" class="btn btn-dark align-right">Leave Comment</button>
                                </div>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection