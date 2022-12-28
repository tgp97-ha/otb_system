@extends('layout.base')

@section('content')
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Register as tourist</div>

                    <div class="card-body">
                        <form class="form-horizontal" method="POST" action="{{ url('tour/edit/'.$tour->serial) }}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group col-md-10 offset-md-1" {{ $errors->has('tour_name') ? ' has-error' : '' }}>
                                <label for="tour_name" class="control-label">Tour Name</label>
                                <div>
                                    <input id="tour_name" type="text" class="form-control" name="tour_name" required
                                           autofocus value="{{$tour->tour_name}}">

                                    @if ($errors->has('tour_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('tour_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group col-md-10 offset-md-1" {{ $errors->has('title') ? ' has-error' : '' }}>
                                <label for="username" class="control-label">Tour title</label>
                                <div>
                                    <input id="username" type="text" class="form-control" name="title" required
                                           value="{{$tour->tour_title}}">

                                    @if ($errors->has('address'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group col-md-10 offset-md-1" {{ $errors->has('destination') ? ' has-error' : '' }}>
                                <label for="password" class="control-label">Tour Destination</label>
                                <div class="input-group date">
                                    <select type="text" class="form-control"
                                            name="destination" required autocomplete="off">
                                        @foreach($places as $place )
                                            @if ($tour->place === $place->serial)
                                                <option selected value="{{$place->serial}}">{{$place->place_name}}</option>
                                            @else
                                                <option value="{{$place->serial}}">{{$place->place_name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-10 offset-md-1">
                                <label class="control-label">Start Date</label>
                                <div class="input-group date_for_duplicate_detail date" data-provide="datepicker">
                                    <input type="text" class="form-control" placeholder="yyyy/mm/dd"
                                           value="{{$tour->tour_start_date}}"
                                           name="start_date">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-10 offset-md-1" {{ $errors->has('services') ? ' has-error' : '' }}>
                                <label for="services[]" class="control-label">Services</label>
                                <div class="row ">
                                    @foreach($services as $service)
                                        <div class="col-4">
                                            <div class="row">
                                                @if (in_array($service->id, $tour->services->toArray()))
                                                    <input id="{{'service'.$service->id}}" type="checkbox"
                                                           name="services[]" checked value="{{$service->id}}">
                                                @else
                                                    <input id="{{'service'.$service->id}}" type="checkbox"
                                                           name="services[]" value="{{$service->id}}">
                                                @endif

                                                <label for="{{'service'.$service->serial}}" class="align-middle ml-2">{{$service->service_name}}</label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="form-group col-md-10 offset-md-1" {{ $errors->has('day_length')||$errors->has('night_length') ? ' has-error' : '' }}>
                                <div class="row">
                                    <div class="col-6">
                                        <label for="day_length" class="control-label">Day length</label>
                                        <div>
                                            <input id="day_length" type="number" class="form-control" name="day_length"
                                                   required value="{{$tour->tour_day_length}}">

                                            @if ($errors->has('day_length'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('day_length') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label for="night_length" class="control-label">Day length</label>
                                        <div>
                                            <input id="night_length" type="number" class="form-control" name="night_length"
                                                   required value="{{$tour->tour_night_length}}">

                                            @if ($errors->has('night_length'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('night_length') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-10 offset-md-1" {{ $errors->has('tour_slot') ? ' has-error' : '' }}>
                                <label for="tour_slot" class="control-label">Tour Slot</label>
                                <div>
                                    <input id="tour_slot" type="number" class="form-control" name="tour_slot"
                                           required value="{{$tour->tour_slots}}">

                                    @if ($errors->has('tour_slot'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('tour_slot') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group col-md-10 offset-md-1" {{ $errors->has('tour_price') ? ' has-error' : '' }}>
                                <label for="tour_price" class="control-label">Tour Price</label>
                                <div>
                                    <input id="tour_price" type="number" class="form-control" name="tour_price"
                                           required value="{{$tour->tour_prices}}">

                                    @if ($errors->has('tour_price'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('tour_price') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group col-md-10 offset-md-1" {{ $errors->has('tour_description') ? ' has-error' : '' }}>
                                <label for="tour_description" class="control-label">Tour description</label>
                                <div>
                                    <textarea id="tour_description" type="text" class="form-control"
                                              name="tour_description" required >{{$tour->tour_description}}</textarea>

                                    @if ($errors->has('tour_description'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('tour_description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group col-md-10 offset-md-1" {{ $errors->has('tour_detail') ? ' has-error' : '' }}>
                                <label for="tour_detail" class="control-label">Tour Detail</label>
                                <div>
                                    <textarea id="tour_detail" type="number" class="form-control" name="tour_detail"
                                              required>{{$tour->tour_detail}}</textarea>

                                    @if ($errors->has('tour_detail'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('tour_detail') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group col-md-10 offset-md-1" {{ $errors->has('tour_image[]') ? ' has-error' : '' }}>
                                <label for="tour_detail" class="control-label">Tour Image</label>
                                <div>
                                    <input id="tour_image_1" type="file" class="form-control" name="tour_image[]">
                                    <input id="tour_image_2" type="file" class="form-control" name="tour_image[]">
                                    <input id="tour_image_3" type="file" class="form-control" name="tour_image[]">
                                    <input id="tour_image_4" type="file" class="form-control" name="tour_image[]">
                                    <input id="tour_image_5" type="file" class="form-control" name="tour_image[]">

                                    @if ($errors->has('tour_image[]'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('tour_image[]') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-10 offset-md-1">
                                    <button type="submit" class="btn btn-primary float-right">
                                        Edit Tour
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection