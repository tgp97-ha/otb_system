@extends('layout.base')

@section('content')
    @if(Auth::user() &&( Auth::user()->can( 'tour-operator' ) || Auth::user()->can('admin')))
        <div class="ml-32">
            <h5 class="text-xl font-bold mb-4">Profile</h5>

            <div class="w-full bg-white p-6 rounded-lg shadow-lg">

                <form method="POST" action="{{ url('tour-operator/edit-profile', [$tourOperator->serial]) }}">
                    {{ csrf_field() }}

                    {{-- Grid Container --}}
                    <div class="grid grid-cols-1 gap-6">
                        <div class="flex items-center justify-center">
                            <img class="w-[150px] h-[150px] rounded-full" src="{{ asset('images/avatar_default.png') }}"
                                 alt="image description">
                        </div>
                        {{-- Name --}}
                        <div>
                            <label for="name"
                                   class="block mb-2 text-sm font-medium {{ $errors->has('name') ? 'text-red-700 dark:text-red-500' : 'text-gray-900 dark:text-white' }} ">Name</label>
                            <input type="text" id="name"
                                   class="hover:cursor-not-allowed {{ $errors->has('name') ? 'bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500' : 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500' }}"
                                   name="name" value="{{ $tourOperator->tour_operator_name ?? '' }}" disabled>
                            {{-- Error --}}
                            @if ($errors->has('name'))
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">{{ $errors->first('name') }}</span></p>
                            @endif
                        </div>
                        {{-- /Name --}}

                        {{-- Address --}}
                        <div>
                            <label for="address"
                                   class="block mb-2 text-sm font-medium {{ $errors->has('address') ? 'text-red-700 dark:text-red-500' : 'text-gray-900 dark:text-white' }} ">Address</label>
                            <input type="text" id="address"
                                   class="hover:cursor-not-allowed bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   name="address" value="{{ $tourOperator->tour_operator_address ?? '' }}" disabled>
                            {{-- Error --}}
                            @if ($errors->has('address'))
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">{{ $errors->first('address') }}</span></p>
                            @endif
                        </div>
                        {{-- /Address --}}

                        {{-- Company --}}
                        <div>
                            <label for="company"
                                   class="block mb-2 text-sm font-medium {{ $errors->has('description') ? 'text-red-700 dark:text-red-500' : 'text-gray-900 dark:text-white' }} ">Company</label>
                            <input type="text" id="company"
                                   class="hover:cursor-not-allowed bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   name="description" value="{{ $tourist->tour_operator_description ?? '' }}" disabled>
                            {{-- Error --}}
                            @if ($errors->has('personal_id'))
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">{{ $errors->first('description') }}</span></p>
                            @endif
                        </div>
                        {{-- /Compnay --}}

                        {{-- Phone --}}
                        <div>
                            <label for="phone"
                                   class="block mb-2 text-sm font-medium {{ $errors->has('phone_number') ? 'text-red-700 dark:text-red-500' : 'text-gray-900 dark:text-white' }} ">Phone
                                number</label>
                            <input type="tel" id="phone"
                                   class="hover:cursor-not-allowed bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   name="phone_number" value="{{ $tourOperator->tour_operator_phone_number ?? '' }}" disabled>
                            {{-- Error --}}
                            @if ($errors->has('phone_number'))
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">{{ $errors->first('phone_number') }}</span></p>
                            @endif
                        </div>
                        {{-- /Phone --}}

                        {{-- Tax --}}
                        <div>
                            <label for="tax"
                                   class="block mb-2 text-sm font-medium {{ $errors->has('tax_number') ? 'text-red-700 dark:text-red-500' : 'text-gray-900 dark:text-white' }} ">Tax
                                number</label>
                            <input type="number" id="tax"
                                   class="hover:cursor-not-allowed bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   name="tax_number" value="{{ $tourist->tour_operator_tax_number ?? '' }}" disabled>
                            {{-- Error --}}
                            @if ($errors->has('tax-number'))
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">{{ $errors->first('tax_number') }}</span></p>
                            @endif
                        </div>
                        {{-- Button --}}
                        <div class="flex justify-end items-center">
                            <a href="{{ url('/tour-operator/edit-profile') }}"
                               class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit Profile</a>
                        </div>
                    </div>
                    {{-- /Grid Container --}}

                </form>
            </div>
        </div>
    @else
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
    @endif
@endsection
