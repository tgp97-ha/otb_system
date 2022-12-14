@extends('layout.base')

@section('content')
    <div class="bg-white">


        {{-- Tour Info --}}
        <div class="flex flex-col p-4 border rounded-lg shadow-lg bg-white">

            <h5 class="text-xl font-bol d mb-4">{{$tour->tour_title}}</h5>

            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-8 flex items-center">
                    {{-- Thumbnail --}}
                    <div class="min-w-max">
                        @if (count($tour->images))
                            <img src="{{ asset('storage/tour/' . $tour->images[0]->file_path) }}" alt=""
                                class="object-cover w-48 h-44 rounded-md" title="" />
                        @else
                            <img src="https://livedemo00.template-help.com/wt_51676/images/landing-private-airlines-01-570x370.jpg"
                                class="object-cover w-48 h-44 rounded-md" alt="">
                        @endif
                    </div>
                    {{-- /Thumbnail --}}

                    {{-- Description --}}
                    <div class="h-44 flex flex-col justify-between items-start px-4">

                        <div class="grid grid-cols-1 gap-4">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="mr-1 text-sm font-normal text-gray-600">Departure:</span>
                                <span class="text-sm font-medium text-gray-900">{{ $tour->startingPlace->place_name }}</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="mr-1 text-sm font-normal text-gray-600">
                                    Arrival:
                                </span>
                                <span class="text-sm font-medium text-gray-900">
                                    {{ $tour->place->place_name }}
                                </span>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="mr-1 text-sm font-normal text-gray-600">
                                    Starting Date:
                                </span>
                                <span class="text-sm font-medium text-gray-900">
                                    {{$tour->tour_start_date}}
                                </span>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="mr-1 text-sm font-normal text-gray-600">
                                    Length:
                                </span>
                                <span class="text-sm font-medium text-gray-900">
                                    {{ $tour->tour_day_length . ' days ' . ' / ' . $tour->tour_night_length . ' nights' }}
                                </span>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="mr-1 text-sm font-normal text-gray-600">
                                    Tour Operator:
                                </span>
                                <span class="text-sm font-medium text-gray-900">
                                    {{ $tour->userTourist->tourOperator->tour_operator_name }}
                                </span>
                            </div>
                        </div>
                    </div>
                    {{-- /Description --}}
                </div>

                {{-- Total --}}
                <div class="col-span-4 flex items-center justify-end">
                    <h1 class="text-xl font-medium mr-2">Total:</h1>
                    <span class="block text-right text-2xl font-bold text-orange-500">
                        {{ number_format((float)$tour->tour_prices * (float) $booking->number_of_people, 2).'VND'}}
                    </span>
                </div>
                {{-- /Total --}}
            </div>

        </div>
        {{-- /Tour Info --}}


            <div class="p-4 border rounded-lg shadow-lg bg-white">

                {{-- Payment Method --}}
                <div class="mb-4">
                    <h3 class="mb-4 text-xl font-semibold text-gray-900">Payment Method</h3>
                    <ul class="text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg">
                        <li class="w-full border-b border-gray-200 rounded-t-lg">
                            <div class="flex items-center pl-3">
                                <input class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500"
                                    type="radio" name="flexRadioDefaultMethodPayment" id="flexRadioDefaultMethodPayment1">
                                <label class="w-full py-3 ml-2 text-sm font-medium text-gray-900"
                                    for="flexRadioDefaultMethodPayment1">
                                    Banking Payment
                                </label>
                            </div>
                        </li>


                        <div class="p-4">
                            {{-- Banking Info --}}
                            <div class="rounded-lg bg-gray-100">
                                <h5 class="mb-4 text-xl font-semibold text-gray-900">OBTS's Bank Account:</h5>
                                <div class="flex items-center">
                                    <div class="">
                                        <img src="https://inkythuatso.com/uploads/images/2021/11/mb-bank-logo-inkythuatso-01-10-09-01-10.jpg"
                                            class="object-fill w-44" alt="">
                                    </div>
                                    <div class="flex flex-col justify-between p-4 leading-normal">
                                        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">Military Commercial Joint Stock Bank
                                            Team
                                            - Da Nang branch
                                        </h5>
                                        <h5 class="mb-3 font-medium text-gray-700">Account Number: 0123456789</h5>
                                        <h5 class="mb-3 font-medium text-gray-700">Account Name: OBTSystem</h5>
                                    </div>
                                </div>
                            </div>
                            {{-- /Banking Info --}}



                            {{-- Transfer Content --}}
                            <div class="rounded-lg bg-gray-100">
                                <h5 class="mb-4 text-xl font-semibold text-gray-900">Transfer Content:</h5>
                                <div class="flex flex-col items-start">
                                    <h5 class="mb-3 font-medium text-gray-700">Name + Tour Name</h5>
                                    <h5 class="mb-3 font-medium text-gray-700">Example: Nguyen Van A, Ha Noi - Da Nang - Hoi An</h5>
                                </div>
                            </div>
                            {{-- /Transfer Content --}}
                        </div>

                        <li class="w-full border-b border-gray-200 rounded-t-lg">
                            <div class="flex items-center pl-3">
                                <input class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500"
                                    type="radio" name="flexRadioDefaultMethodPayment"
                                    id="flexRadioDefaultMethodPayment2" checked>
                                <label class="w-full py-3 ml-2 text-sm font-medium text-gray-900"
                                    for="flexRadioDefaultMethodPayment2">
                                    Pay directly at OBTS
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
                {{-- /Payment Method --}}

                <form class="pl-3" action="{{ url('tour/payment/' . $booking->id) }}" method="POST">
                    @csrf
                    <div class="flex items-center justify-end">
                        <button type="submit"
                            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5">Purchase</button>
                    </div>
                </form>
            </div>
    </div>
@endsection
