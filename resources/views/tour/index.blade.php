@extends('layout.base')

@section('content')
    <div class="container">
        <div class="mt-3 px-4">
            <div class="row px-4 py-4 tour-index-image" style="border-radius: 10px ">
                <div class="col-7 d-flex flex-column align-items-center">
                    <h1 class="text-heading col-5" style="color: white">
                        WELCOME TO OTB SYSTEM
                    </h1>
                    <p class="text-content col-5">Our website is ready to offer you an exciting tour providing by the
                        top angency around Vietnam.</p>
                </div>
                <div class="col-5 search-tour-section">
                    <h1 class="search-tour-heading">Find Tour</h1>
                    <form method="POST" action="{{ url('/tour/list/') }}">
                    @csrf <!-- {{ csrf_field() }} -->
                        <div class="search-tour-from">
                            <h4 class="search-tour-from-header">
                                From
                            </h4>
                            <div class="search-tour-from-body">
                                <select class="city"
                                        name="destination" autocomplete="off">
                                    @foreach($places as $place )
                                        <option value="{{$place->serial}}">{{$place->place_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="search-tour-to">
                            <h4 class="search-tour-to-header">
                                To
                            </h4>
                            <div class="search-tour-to-body">
                                <select class="city"
                                        name="destination" autocomplete="off">
                                    @foreach($places as $place )
                                        <option value="{{$place->serial}}">{{$place->place_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="search-tour-to">
                            <div class="row">
                                <div class="col-6">
                                    <h4 class="search-tour-depart-header">
                                        Date From
                                    </h4>
                                    <input type="text" placeholder="dd/mm/yyyy" name="start_date_range_begin"
                                           class="search-tour-depart-date search-tour-to-body w-100">
                                </div>
                                <div class="col-6">
                                    <h4 class="search-tour-depart-header">
                                        Date To
                                    </h4>
                                    <input type="text" placeholder="dd/mm/yyyy" name="start_date_range_end"
                                           class="search-tour-depart-date search-tour-to-body w-100">
                                </div>
                            </div>
                        </div>
                        <div class="search-tour-to">
                            <div class="row">
                                <div class="col-6">
                                    <h4 class="search-tour-depart-header">
                                        Tour Operator
                                    </h4>
                                    <div>
                                        <input type="text" name="start_date_range_end"
                                               class=" search-tour-depart-body search-tour-depart-date w-100">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <h4 class="search-tour-depart-header">
                                        Number Of People
                                    </h4>
                                    <div>
                                        <input type="number" min="0" max="200" value="1"
                                               class="search-tour-depart-body search-tour-adults-date w-100">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row w-100 d-flex justify-content-center">
                            <button type="submit" class="search-light-btn">SEARCH TOUR</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row">
                <div class="container-tour-title mb-0">
                    <h1 class="container-tour-heading mb-0">TOUR LIST</h1>
                </div>
            </div>
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
                {{$tours->links()}}
            </div>
        </div>
    </div>
@endsection