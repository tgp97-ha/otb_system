@extends('layout.base')

@section('content')
    <div class="container">
        <div class="row pt-5 d-flex justify-content-center">
            <div class="col-md-9">
                <div class="card border-0 ">
                    <div class="card-header border-0 bg-white font-weight-bold" style="font-size: 20px">MY TOURS</div>
                    <div class="card-body">
                        <div class="row">
                            @foreach($tours as $tour)
                                <div class="col-md-4 pt-4">
                                    <div class="card mb-5">
                                        @if(count($tour->images))
                                            <img src="{{ asset('storage/tour/'.$tour->images[0]->file_path) }}" alt=""
                                                 class="image-detail"
                                                 title=""/>
                                        @else
                                            <img src="https://livedemo00.template-help.com/wt_51676/images/landing-private-airlines-01-570x370.jpg"
                                                 class="card-img-top" alt="">
                                        @endif
                                        <div class="card-body">
                                            <div class="card-description">
                                                <h2 class="card-title">{{$tour->place? $tour->place->place_name:''}}</h2>
                                                <h2 class="card-price">{{$tour->tour_prices.'VND'}}</h2>
                                            </div>
                                            <i class="fa-solid fa-calendar card-time-btn mt-3">
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
{{--                            {{$tours->links()}}--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection