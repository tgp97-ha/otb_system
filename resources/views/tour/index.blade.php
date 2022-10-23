@extends('layout.base')

@section('content')
    <div class="container">
        <div class="row pl-5 pt-5">
            <div class="col">
                <div class="card">
                    <div class="card-header">Search Tour</div>
                    <div class="card-body">
                        <form method="POST" action="{{ url('/tour/list/') }}">
                            @csrf
                            <div class="row form-group offset-md-1">
                                <div class="col-3">Place</div>
                                <div class="col-9 input-group">
                                    <select type="text" class="form-control"
                                            name="destination" autocomplete="off">
                                        @foreach($places as $place )
                                            <option value="{{$place->serial}}">{{$place->place_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group offset-md-1">
                                <div class="col-3">Start Date Range</div>
                                <div class="col-4">
                                    <div class="input-group date" data-provide="datepicker">
                                        <input type="text" class="form-control" placeholder="yyyy/mm/dd"
                                               name="start_date_range_begin">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="input-group date" data-provide="datepicker">
                                        <input type="text" class="form-control" placeholder="yyyy/mm/dd"
                                               name="start_date_range_end">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group offset-md-1">
                                <div class="col-3">Price Range</div>
                                <div class="col-9">
                                    <div class="row">
                                        <div class="col-6">
                                            <input id="price_range_begin" type="number" class="form-control"
                                                   name="tour_price">
                                        </div>
                                        <div class="col-6">
                                            <input id="price_range_end" type="text" class="form-control"
                                                   name="tour_price">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group offset-md-1">
                                <div class="col-3">Services</div>
                                <div class="row">
                                    @foreach($services as $service)
                                        <div class="col-4">
                                            <div class="row">
                                                <div class="col">
                                                    <input id="{{'service'.$service->id}}" type="checkbox"
                                                           name="services[]" value="{{$service->id}}">
                                                    <label for="{{'service'.$service->id}}"
                                                           class="align-middle ml-2">{{$service->service_name}}</label>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            @can('admin')
                            <div class="row form-group offset-md-1">
                                <div class="col-3">Is Tour Verified</div>
                                <div class="col-9 input-group">
                                    <div class="row w-50">
                                        <div class="col-6">
                                            <input id="verify_yes" type="checkbox"
                                                   name="is_verify[]" value="1">
                                            <label for="verify_yes">Verified</label>
                                        </div>
                                        <div class="col-6 p-0">
                                            <input id="verify_no" type="checkbox"
                                                   name="is_verify[]">
                                            <label for="verify_no">Not verified</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endcan
                            <div class="form-group">
                                <div class="col-md-10 offset-md-1">
                                    <button type="submit" class="btn btn-primary float-right">
                                        Search Tour
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">Tour List</div>
                    <div class="card-body">
                        @foreach($tours as $tour)
                            <div class="card pt-1">
                                <div class="card-header">{{$tour->tour_title}}</div>
                                <div class="card-body">
                                    <div class="row form-group">
                                        <div class="col-1 p-0">
                                            <span class="form-control border-0">Place</span>
                                        </div>
                                        <div class="col-2">
                                            <span class="form-control border-0">{{$tour->place? $tour->place->place_name:''}}</span>
                                        </div>
                                        <div class="col-2">
                                            <span class="form-control border-0">Day length</span>
                                        </div>
                                        <div class="col-3">
                                            <span class="form-control border-0">{{$tour->tour_day_length. ' days '. $tour->tour_night_length. ' nights'}}</span>
                                        </div>
                                        <div class="col-2"><span class="form-control border-0">Start Date</span></div>
                                        <div class="col-2"><span
                                                    class="form-control border-0">{{$tour->tour_start_date}}</span>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-2 p-0">
                                            <span class="form-control border-0">Tour Description</span>
                                        </div>
                                        <div class="col-10">
                                            <span class="form-control border-0">{{$tour->tour_description}}</span>
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
                                            <a class="align-middle btn btn-primary"
                                               href="{{url('/tour/detail/'.$tour->serial)}}">Detail</a>
                                            @canany(['admin','tour-operator'])
                                                <form class="pl-3" action="{{ url('/tour/delete/'.$tour->serial) }}"
                                                      method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                                                </form>
                                            @endcan
                                            @canany(['admin'])
                                                @if($tour->tour_is_verify==0)
                                                    <form class="pl-3" action="{{ url('/tour/verify/'.$tour->serial) }}"
                                                          method="POST">
                                                        @csrf
                                                        <button type="submit" class="btn btn-primary">Verify
                                                        </button>
                                                    </form>
                                                @endif
                                            @endcan
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