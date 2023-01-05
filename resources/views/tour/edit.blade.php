@extends('layout.base')

@section('content')
    @if(Auth::user() &&( Auth::user()->can( 'tour-operator' ) || Auth::user()->can('admin')))
        <div class="ml-32">

            <h5 class="text-xl font-bold mb-4">Edit Tour</h5>

            <div class="bg-white p-4 rounded-md">

                <form class="" method="POST" action="{{ url('tour/edit/' . $tour->serial) }}" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    {{-- Grid Container --}}
                    <div class="grid grid-cols-1 gap-6">

                        {{-- Name --}}
                        <div>
                            <label for="tour_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Tour Code Name
                            </label>
                            <input id="tour_name" type="text"
                                   class="{{ $errors->has('tour_name') ? 'border-red-600 focus:ring-red-600 focus:border-red-600 dark:focus:ring-red-500 dark:focus:border-red-500' : '' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   name="tour_name" required autofocus value="{{ $tour->tour_name }}">

                            @if ($errors->has('tour_name'))
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                    <strong>{{ $errors->first('tour_name') }}</strong>
                                </p>
                            @endif
                        </div>
                        {{-- /Name --}}

                        {{-- Title --}}
                        <div>
                            <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Title
                            </label>
                            <div>
                                <input id="username" type="text"
                                       class="{{ $errors->has('title') ? 'border-red-600 focus:ring-red-600 focus:border-red-600 dark:focus:ring-red-500 dark:focus:border-red-500' : '' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                       name="title" required value="{{ $tour->tour_title }}">

                                @if ($errors->has('address'))
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </p>
                                @endif
                            </div>
                        </div>
                        {{-- /Title --}}

                        {{-- Place --}}
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Departure
                            </label>
                            <div class="">
                                <select type="text"
                                        class="{{ $errors->has('departure') ? 'border-red-600 focus:ring-red-600 focus:border-red-600 dark:focus:ring-red-500 dark:focus:border-red-500' : '' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        name="departure" required autocomplete="off">
                                    <option disabled selected>Choose place</option>
                                    @foreach ($places as $place)
                                        @if($place->serial === (int)$tour->tour_starting_place)
                                            <option selected value="{{ $place->serial }}">
                                                {{ $place->place_name }}
                                            </option>
                                        @else
                                            <option value="{{ $place->serial }}">
                                                {{ $place->place_name }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Destination
                            </label>
                            <div class="">
                                <select type="text"
                                        class="{{ $errors->has('destination') ? 'border-red-600 focus:ring-red-600 focus:border-red-600 dark:focus:ring-red-500 dark:focus:border-red-500' : '' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        name="destination" required autocomplete="off">
                                    <option value="" disabled selected>Choose place</option>
                                    @foreach ($places as $place)

                                         @if ((int)$tour->place->serial == $place->serial)
                                            <option selected value="{{ $place->serial }}">
                                                {{ $place->place_name }}
                                            </option>
                                        @else
                                        <option value="{{ $place->serial }}">
                                            {{ $place->place_name }}
                                        </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        {{-- /Place --}}

                        {{-- Start Date --}}
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Start Date
                            </label>
                            <div class="relative">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input datepicker datepicker-autohide datepicker-format="dd/mm/yyyy" type="text"  value="{{$tour->tour_start_date}}"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                       name="start_date" {{ $tour->tour_start_date }} placeholder="dd/mm/yyyy">
                            </div>
                        </div>
                        {{-- /Start Date --}}

                        <div class="grid grid-cols-2 gap-6">
                            <div>
                                <label for="day_length" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Day
                                    length</label>
                                <div>
                                    <input id="day_length" type="number"
                                           class=" {{ $errors->has('day_length') ? 'border-red-600 focus:ring-red-600 focus:border-red-600 dark:focus:ring-red-500 dark:focus:border-red-500' : '' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                           name="day_length" required min="0" value="{{ (int)$tour->tour_day_length }}">

                                    @if ($errors->has('day_length'))
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                            <strong>{{ $errors->first('day_length') }}</strong>
                                        </p>
                                    @endif
                                </div>
                            </div>

                            <div>
                                <label for="night_length"
                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Night
                                    length</label>
                                <div>
                                    <input id="night_length" type="number"
                                           class="{{ $errors->has('night_length') ? 'border-red-600 focus:ring-red-600 focus:border-red-600 dark:focus:ring-red-500 dark:focus:border-red-500' : '' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                           name="night_length" required min="0" value="{{ (int)$tour->tour_night_length }}">

                                    @if ($errors->has('night_length'))
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                            <strong>{{ $errors->first('night_length') }}</strong>
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </div>


                        {{-- Slots --}}
                        <div class="grid grid-cols-2 gap-6">
                            <div>
                                <label for="tour_slot" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Slot
                                </label>
                                <div>
                                    <input id="tour_slot" type="number"
                                           class="{{ $errors->has('tour_slot') ? 'border-red-600 focus:ring-red-600 focus:border-red-600 dark:focus:ring-red-500 dark:focus:border-red-500' : '' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                           name="tour_slot" value="{{ $tour->tour_slots }}" required min="0">

                                    @if ($errors->has('tour_slot'))
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                            <strong>{{ $errors->first('tour_slot') }}</strong>
                                        </p>
                                    @endif
                                </div>
                            </div>
                            <div>
                                <label for="tour_price"
                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tour
                                    Price</label>
                                <div>
                                    <input id="tour_price" type="number" style="width: 80%; display: inline"
                                           class="inline-block w-full {{ $errors->has('tour_price') ? 'border-red-600 focus:ring-red-600 focus:border-red-600' : '' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                                           name="tour_price" value="{{ $tour->tour_prices }}" required min="0">
                                    <span class="">VND</span>
                                    @if ($errors->has('tour_price'))
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                            <strong>{{ $errors->first('tour_price') }}</strong>
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        {{-- Description --}}
                        <div>
                            <label for="tour_description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Description
                            </label>
                            <div>
                            <textarea id="tour_description" type="text"
                                      class="{{ $errors->has('tour_description') ? 'border-red-600 focus:ring-red-600 focus:border-red-600 dark:focus:ring-red-500 dark:focus:border-red-500' : '' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                      name="tour_description" required>{{ $tour->tour_description }}</textarea>
                                @if ($errors->has('tour_description'))
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        <strong>{{ $errors->first('tour_description') }}</strong>
                                    </p>
                                @endif
                            </div>
                        </div>
                        {{-- /Description --}}

                        {{-- Detail --}}
                        <div>
                            <label for="tour_detail"
                                   class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">TOUR
                                DETAIL</label>
                            <div>
                                @foreach($tour->tourDetails as $detail)
                                <textarea id="tour_detail"
                                      class="{{ $errors->has('tour_detail') ? ' border-red-600 focus:ring-red-600 focus:border-red-600 dark:focus:ring-red-500 dark:focus:border-red-500' : '' }} mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                      name="tour_detail[]" rows="2" placeholder={{"Detail ".$loop->iteration}}>{{$detail->tour_detail_content}}</textarea>
                                @endforeach
                                    @for($i = 5- count($tour->tourDetails); $i>0; $i--)
                                        <textarea id="tour_detail"
                                                  class="{{ $errors->has('tour_detail') ? ' border-red-600 focus:ring-red-600 focus:border-red-600 dark:focus:ring-red-500 dark:focus:border-red-500' : '' }} mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                  name="tour_detail[]" rows="2" placeholder={{"Detail ".$i}}></textarea>
                                    @endfor
                                @if ($errors->has('tour_detail'))
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        <strong>{{ $errors->first('tour_detail') }}</strong>
                                    </p>
                                @endif
                            </div>
                        </div>
                        {{-- /Detail --}}

                        {{-- Images --}}
                        <div>
                            <label for="tour_detail" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tour
                                Image</label>
                            <div>
                                @if ($errors->has('tour_image[]'))
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        <strong>{{ $errors->first('tour_image[]') }}</strong>
                                    </p>
                                @endif
                                <input id="tour_image_1" type="file"
                                       class="{{ $errors->has('tour_image_1') ? ' border-red-600d dark:border-red-600' : '' }} block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                       name="tour_image[]">
                                <input id="tour_image_2" type="file"
                                       class="{{ $errors->has('tour_image_2') ? ' border-red-600d dark:border-red-600' : '' }} block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                       name="tour_image[]">
                                <input id="tour_image_3" type="file"
                                       class="{{ $errors->has('tour_image_3') ? ' border-red-600d dark:border-red-600' : '' }} block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                       name="tour_image[]">
                                <input id="tour_image_4" type="file"
                                       class="{{ $errors->has('tour_image_4') ? ' border-red-600d dark:border-red-600' : '' }} block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                       name="tour_image[]">
                                <input id="tour_image_5" type="file"
                                       class="{{ $errors->has('tour_image_5') ? ' border-red-600d dark:border-red-600' : '' }} block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                       name="tour_image[]">
                            </div>
                        </div>
                        {{-- /Images --}}

                        {{-- Submit --}}
                        <div class="flex items-center justify-end">
                            <button type="submit"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                Update Tour
                            </button>
                        </div>
                        {{-- /Submit --}}

                    </div>
                    {{-- /Grid Container --}}

                </form>

            </div>
        </div>
    @else
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
                                            <label for="night_length" class="control-label">Night length</label>
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
    @endif
@endsection
