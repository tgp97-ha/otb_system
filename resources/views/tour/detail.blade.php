@extends('layout.base')

@section('content')
    <div class="wrapper">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-8 px-4">
                    <ul class="list-menu">
                        <li class="list-menu-item">
                            <a class="list-menu-item-link" href="#overview">Overview</a>
                        </li>
                        @if(count($tour->images))
                            <li class="list-menu-item">
                                <a class="list-menu-item-link" href="#photos">Photos</a>
                            </li>
                        @endif
                        <li class="list-menu-item">
                            <a class="list-menu-item-link" href="#itinerary">Itinerary</a>
                        </li>
                        <li class="list-menu-item">
                            <a class="list-menu-item-link" href="#reviews">Reviews</a>
                        </li>
                    </ul>
                    <div id="overview" class="content-section">
                        <h1 class="content-section-heading">
                            HÀ NỘI - ĐÀ NẴNG - PHỐ CỔ HỘI AN - BÀ NÀ HILL
                        </h1>
                        <div class="row">
                            @if(count($tour->images))
                                <div class="col">
                                    <img src="{{ asset('storage/tour/'.$tour->images[0]->file_path) }}" alt=""
                                         class="image-detail"
                                         title=""/>
                                </div>
                            @endif
                        </div>
                        <div class="rating">
                            {{--                            <i class="fa-solid fa-star rating-btn"></i>--}}
                            {{--                            <i class="fa-solid fa-star rating-btn"></i>--}}
                            {{--                            <i class="fa-solid fa-star rating-btn"></i>--}}
                            {{--                            <i class="fa-solid fa-star rating-btn"></i>--}}
                            {{--                            <i class="fa-solid fa-star rating-btn"></i>--}}
                        </div>
                        <div class="row mb-5 border-bot">
                            <div class="col-md-6">
                                <div class="overview-content mt-3">
                                    <i class="fa-solid fa-location-dot overview-content-icon"></i>
                                    <span class="overview-content-title">
                  Departure:
                </span>
                                    <span class="overview-content-address">{{ $tour->place->place_name }}</span>
                                </div>
                                <div class="overview-content mt-3">
                                    <i class="fa-solid fa-location-dot overview-content-icon"></i>
                                    <span class="overview-content-title">
                 Arrival:
                </span>
                                    <span class="overview-content-address">{{ $tour->place->place_name }}</span>
                                </div>
                                <div class="overview-content mt-3">
                                    <i class="fa-regular fa-calendar-days overview-content-icon"></i>
                                    <span class="overview-content-title">
                  Departure Date:
                </span>
                                    <span class="overview-content-address">2022</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="overview-content mt-3">
                                    <i class="fa-solid fa-clock overview-content-icon"></i>
                                    <span class="overview-content-title">
                  Tour length:
                </span>
                                    <span class="overview-content-address">{{ $tour->tour_day_length. ' days '.' / '. $tour->tour_night_length. ' nights' }}</span>
                                </div>
                                <div class="overview-content mt-3">
                                    <i class="fa-solid fa-address-card overview-content-icon"></i>
                                    <span class="overview-content-title">
                  Tour Operator:
                </span>
                                    <a class="overview-content-address"
                                       href="{{url('/tour-operator/detail/'.$tour->userTourist->tourOperator->serial)}}">{{$tour->userTourist->tourOperator->tour_operator_name}}</a>
                                </div>
                                @canany(['admin', 'tour-operator'])
                                    <div class="overview-content mt-3">
                                        <i class="fa-solid fa-people-group overview-content-icon"></i>
                                        <span class="overview-content-title">
                  Tour Slots:
                </span>
                                        <span class="overview-content-address">{{$tour->tour_slots}}</span>
                                    </div>
                                    <div class="overview-content mt-3">
                                        <i class="fa-solid fa-people-group overview-content-icon"></i>
                                        <span class="overview-content-title">
                  Tour Slot Left:
                </span>
                                        <span class="overview-content-address">{{$tour->tour_slots_left}}</span>
                                    </div>
                                @endcan
                            </div>
                            @canany(['admin', 'tour-operator'])
                                <div class="row mt-4 d-flex justify-content-end">
                                    <div class="col-3">
                                        <div class="form-group col-md-10 offset-md-1">
                                            <a class="btn btn-primary card-btn"
                                               href="{{url('/tour/'.$tour->serial.'/edit')}}">Edit
                                                Tours</a>
                                        </div>
                                    </div>
                                </div>
                            @endcan
                        </div>

                    </div>
                    @if(count($tour->images))
                        <div id="photos" class="content-section mt-5 border-bot">
                            <h1 class="content-section-heading">
                                PHOTOS
                            </h1>
                            <div class="row">
                                @foreach($tour->images as $key=>$image)
                                    @if($key!==0)
                                        <div class="col-4">
                                            <img src="{{ asset('storage/tour/'.$image->file_path) }}" alt=""
                                                 class="image-detail"
                                                 title=""/>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endif
                    <div id="itinerary" class="content-section mt-5 border-bot">
                        <h1 class="content-section-heading">
                            ITINERARY
                        </h1>
                        <h4 class="content-section-day">
                            NGÀY 01: NỘI BÀI - ĐÀ NẴNG
                        </h4>
                        <p class="content-section-text">{{$tour->tour_detail}}

                    </div>
                    @if(isset($tour->comments)&& count($tour->comments))
                        <div id="reviews" class="content-section mt-5">
                            <h1 class="content-section-heading">
                                Reviews
                            </h1>
                            <div class="row reviews-header border-bot">
                                <div class="col-md-6">
                                    <div class="rating">
                <span class="reviews-rating-sum">
                  {{count($tour->comments)}} reviewer
               </span>
                                        {{--                                    <i class="fa-solid fa-star reviews-header-btn"></i>--}}
                                        {{--                                    <i class="fa-solid fa-star reviews-header-btn"></i>--}}
                                        {{--                                    <i class="fa-solid fa-star reviews-header-btn"></i>--}}
                                        {{--                                    <i class="fa-solid fa-star reviews-header-btn"></i>--}}
                                        {{--                                    <i class="fa-solid fa-star reviews-header-btn"></i>--}}

                                    </div>
                                </div>
                                {{--                            <div class="col-md-6">--}}
                                {{--                                <div class="sort">--}}
                                {{--                                    <h1 class="reviews-sort-heading">--}}
                                {{--                                        Sort By:--}}

                                {{--                                        <span class="reviews-sort-title">--}}
                                {{--                    <select class="select-sort" name="select-sort" id="select-sort">--}}
                                {{--                      <option value="rating">Rating</option>--}}
                                {{--                      <option value="date">Date</option>>--}}
                                {{--                    </select>--}}
                                {{--                  </span>--}}
                                {{--                                    </h1>--}}

                                {{--                                </div>--}}

                                {{--                            </div>--}}
                            </div>
                            @if(isset($booking))
                                <form class="form-horizontal" method="POST"
                                      action="{{ url('tour/comment/'.$tour->serial) }}"
                                      enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="row mt-5">
                                        <div class="col-md-2">
                                            <div class="reviews-body">
                                                <i class="fa-solid fa-user-tie user-icon"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <h2 class="reviews-rating">
                                                Rating:
                                                <i class="fa-regular fa-star reviews-rating-btn"></i>
                                                <i class="fa-regular fa-star reviews-rating-btn"></i>
                                                <i class="fa-regular fa-star reviews-rating-btn"></i>
                                                <i class="fa-regular fa-star reviews-rating-btn"></i>
                                                <i class="fa-regular fa-star reviews-rating-btn"></i>
                                            </h2>
                                            <textarea id="comment"
                                                      class=" reviews-cmt col-form-label font-weight-normal align-middle "
                                                      name="comment" placeholder="Comment..."></textarea>
                                        </div>
                                        <div class="col d-flex justify-content-end mt-2">
                                            <button type="submit" class="btn btn-dark align-right">Leave Comment
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            @endif

                            @foreach($tour->comments as $comment)
                                <div class="row mt-5">
                                    <div class="col-md-2">
                                        <div class="reviews-body">
                                            <i class="fa-solid fa-user-tie user-icon"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="reviews-feedback">
                                            <div class="reviews-feedback-name">{{$comment->tourist->tourist->tourist_name}}</div>
                                            <div class="reviews-feedback-time">{{$comment->created_at}}</div>
                                        </div>
                                        {{--                                <div class="rate">--}}
                                        {{--                                    <i class="fa-solid fa-star reviews-rating-btn"></i>--}}
                                        {{--                                    <i class="fa-solid fa-star reviews-rating-btn"></i>--}}
                                        {{--                                    <i class="fa-solid fa-star reviews-rating-btn"></i>--}}
                                        {{--                                    <i class="fa-solid fa-star reviews-rating-btn"></i>--}}
                                        {{--                                    <i class="fa-solid fa-star reviews-rating-btn"></i>--}}
                                        {{--                                </div>--}}
                                        <div class="h3">{{$comment->comment_content}}</div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif

                </div>
                <div class="col-md-4">
                    <div class="book-tour">
                        <h1 class="book-tour-heading">BOOK THIS TOUR</h1>
                        <div class="book-tour-body">
                            <i class="fa-regular fa-calendar-days calendar-btn"></i>
                            <input class="book-tour-tickets-adults" placeholder="dd/mm/yyyy">
                            <i class="fa-solid fa-caret-down book-tour-down-btn"></i>
                        </div>
                        <div class="book-tour-tickets">
                            <h1 class="book-tour-tickets-heading">Number of People</h1>
                            <div class="book-tour-tickets-body">
                                <div class="book-tour-tickets-title">Adult (18+ years)
                                </div>
                                <input type="number" min="0" max="200" value="0" class="book-tour-tickets-adults">
                            </div>
                            <div class="book-tour-tickets-body">
                                <div class="book-tour-tickets-title">Youth (13-17 years)
                                </div>
                                <input type="number" min="0" max="200" value="0" class="book-tour-tickets-adults">
                            </div>
                        </div>

                        @if(\Illuminate\Support\Facades\Auth::user())
                            @canany(['tourist'])
                                {{--                                @if(!isset($booking))--}}
                                <form class="pl-3" action="{{url('/tour/book/'.$tour->serial)}}"
                                      style="margin-left: 35px;"
                                      method="POST">
                                    @csrf
                                    <button class="book-now-btn">BOOK NOW</button>
                                </form>
                                {{--                                @else--}}

                                {{--                                @endif--}}
                            @endcan
                        @else
                            <a href="{{url('/login')}}" style="margin-left: 35px;">
                                <button class="book-now-btn">BOOK NOW</button>
                            </a>
                        @endif
                    </div>
                </div>
            </div>

            {{--            <div class="row pt-5">--}}
            {{--                <div class="col-md-8 offset-md-2">--}}
            {{--                    <div class="card">--}}
            {{--                        <div class="card-header">Tour Detail</div>--}}
            {{--                        <div class="card-body">--}}
            {{--                            <div class="form-group col-md-10 offset-md-1 row">--}}
            {{--                                <span class="col-form-label col-4 align-middle">Tour Services</span>--}}
            {{--                                <div class="col-8">--}}
            {{--                                    @foreach($tour->services as $service)--}}
            {{--                                        <div class="row">--}}
            {{--                                            <div class="col">--}}
            {{--                                                <span class="col-form-label font-weight-normal align-middle">{{ $service->service_name}}</span>--}}
            {{--                                            </div>--}}
            {{--                                        </div>--}}
            {{--                                    @endforeach--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                            @canany(['admin', 'tour-operator'])--}}
            {{--                                <div class="form-group col-md-10 offset-md-1 row">--}}
            {{--                                    <span class="col-form-label col-4 align-middle">Tour Slots</span>--}}
            {{--                                    <span class="col-form-label font-weight-normal align-middle col-8">{{$tour->tour_slots}}</span>--}}
            {{--                                </div>--}}
            {{--                                <div class="form-group col-md-10 offset-md-1 row">--}}
            {{--                                    <span class="col-form-label col-4 align-middle">Tour Slot Left</span>--}}
            {{--                                    <span class="col-form-label font-weight-normal align-middle col-8">{{ $tour->tour_slots_left}}</span>--}}
            {{--                                </div>--}}

            {{--                                <div class="form-group col-md-10 offset-md-1">--}}
            {{--                                    <div class="row d-flex justify-content-center">--}}
            {{--                                        <a class="btn btn-primary" href="{{url('/tour/'.$tour->serial.'/edit')}}">Edit--}}
            {{--                                            Tours</a>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            @endcan--}}
            {{--                            @if(isset($booking))--}}
            {{--                                <form class="form-horizontal" method="POST"--}}
            {{--                                      action="{{ url('tour/comment/'.$tour->serial) }}"--}}
            {{--                                      enctype="multipart/form-data">--}}
            {{--                                    {{ csrf_field() }}--}}
            {{--                                    <div class="form-group col-md-10 offset-md-1 row">--}}
            {{--                                        <label for="comment" class="col-form-label col-4 align-middle">Comment</label>--}}
            {{--                                        <textarea id="comment"--}}
            {{--                                                  class="col-form-label font-weight-normal align-middle col-8"--}}
            {{--                                                  name="comment"></textarea>--}}
            {{--                                    </div>--}}
            {{--                                    <div class="col d-flex justify-content-end pr-5">--}}
            {{--                                        <button type="submit" class="btn btn-dark align-right">Leave Comment</button>--}}
            {{--                                    </div>--}}
            {{--                                </form>--}}
            {{--                            @endif--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
        </div>
    </div>
@endsection