@extends('layout.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card border-0">
                    <div class="card-header font-weight-bold border-0 bg-white" style="font-size: 30px">{{ $tourOperator->tour_operator_name }}</div>
                    <div class="card-body">
                        <div class="form-group col-md-10 row px-4">
                            <span class="col-form-label col-4 align-middle font-weight-bold font-italic">Address: </span>
                            <span class="col-form-label font-weight-normal  col-8 align-middle">{{ $tourOperator->tour_operator_address }}</span>
                        </div>
                        <div class="form-group col-md-10 row px-4">
                            <span  class="col-form-label col-4 align-middle font-weight-bold font-italic">Description:</span>
                            <span class="col-form-label font-weight-normal align-middle col-8">{{ $tourOperator->tour_operator_description }}</span>
                        </div>
{{--                        <div class="form-group col-md-10 offset-md-1">--}}
{{--                            <div class="row d-flex justify-content-center">--}}
{{--                                <a class="btn btn-primary" href="{{url('/tour-operator/edit-profile')}}">Edit profile</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                    <div class="card border-0 px-2">
                        <div class="card-header font-weight-bold border-0 bg-white px-4" style="font-size: 15px">{{'TOUR LIST' }}</div>
                        <div class="card-body pt-0">
                            @foreach($tours as $tour)
                                <div class="col-md-6 pt-4">
                                    <div class="card">
                                        <img src="https://livedemo00.template-help.com/wt_51676/images/landing-private-airlines-01-570x370.jpg" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <div class="card-description">
                                                <h2 class="card-title">{{$tour->place? $tour->place->place_name:''}}</h2>
                                                <h2 class="card-price">{{$tour->tour_prices.'VND'}}</h2>
                                            </div>
                                            <i class="fa-solid fa-calendar card-time-btn">
                                                <span class="card-time">{{$tour->tour_start_date}}</span>
                                            </i>
                                            {{--                            <div class="rating">--}}
                                            {{--                                <i class="fa-solid fa-star rating-btn"></i>--}}
                                            {{--                                <i class="fa-solid fa-star rating-btn"></i>--}}
                                            {{--                                <i class="fa-solid fa-star rating-btn"></i>--}}
                                            {{--                                <i class="fa-solid fa-star rating-btn"></i>--}}
                                            {{--                                <i class="fa-solid fa-star rating-btn"></i> (2 reviewer)--}}
                                            {{--                            </div>--}}
                                            <div class="row justify-content-end py-2">
                                                <a class="btn btn-primary card-btn"
                                                   href="{{url('/tour/detail/'.$tour->serial)}}">Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mt-4">
                    <div class="card-header bg-white border-0 font-weight-bold">
                        CONTACT US
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3 font-weight-bold font-italic">
                                Phone Number:
                            </div>
                            <div class="col-9">{{$tourOperator->tour_operator_phone_number}}</div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-3 font-weight-bold font-italic">
                                Website:
                            </div>
                            <div class="col-9"><a href="www.google.com">{{$tourOperator->tour_operator_name}}</a></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-3 font-weight-bold font-italic pt-3">
                                Chatbot:
                            </div>
                            <div class="col-4">
                                <button class="btn btn-primary card-btn py-2" style="font-size: 10px;">Open Chatbot</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection