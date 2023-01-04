@extends('layout.base')

@section('content')
    <div class="bg-white">


        {{-- Tour Info --}}
        <div class="flex flex-col p-4 border rounded-lg shadow-lg bg-white">

            <h5 class="text-xl font-bold mb-4">HÀ NỘI - ĐÀ NẴNG - BÀ NÀ HILL - PHỐ CỔ HỘI AN</h5>

            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-8 flex items-center">
                    {{-- Thumbnail --}}
                    <div class="min-w-max">
                        @if (count($tour->images))
                            <img src="{{ asset('storage/tour/' . $tour->images[0]->file_path) }}" alt=""
                                class="object-cover w-48 h-44 rounded-md" style="200px" title="" />
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
                                <span class="mr-1 text-sm font-normal text-gray-600">Điểm khởi hành:</span>
                                <span class="text-sm font-medium text-gray-900">{{ $tour->place->place_name }}</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="mr-1 text-sm font-normal text-gray-600">
                                    Điểm đến:
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
                                    Ngày khởi hành:
                                </span>
                                <span class="text-sm font-medium text-gray-900">
                                    2022
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
                                    Thời gian:
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
                    <h1 class="text-xl font-medium mr-2">Thành tiền:</h1>
                    <span class="block text-right text-2xl font-bold text-orange-500">
                        {{ substr($tour->tour_prices, 0, strlen($tour->tour_prices) - 6) . ',' . substr($tour->tour_prices, 1, 3) . '.' . substr($tour->tour_prices, -3, 3) . ' VND' }}
                    </span>
                </div>
                {{-- /Total --}}
            </div>

        </div>
        {{-- /Tour Info --}}


        <form action="">

            <div class="p-4 border rounded-lg shadow-lg bg-white">
                {{-- Payment Type --}}
                <div class="">
                    <h3 class="mb-4 text-xl font-semibold text-gray-900">LOẠI HÌNH THANH TOÁN</h3>
                    <ul class="w-48 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg">
                        <li class="w-full border-b border-gray-200 rounded-t-lg">
                            <div class="flex items-center pl-3">
                                <input class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500"
                                    type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="w-full py-3 ml-2 text-sm font-medium text-gray-900" for="flexRadioDefault1">
                                    Thanh toán toàn bộ (100% giá trị tour)
                                </label>
                            </div>
                        <li class="w-full border-b border-gray-200 rounded-t-lg">
                            <div class="flex items-center pl-3">
                                <input class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500"
                                    type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="w-full py-3 ml-2 text-sm font-medium text-gray-900" for="flexRadioDefault2">
                                    Đặt cọc trước (20% giá trị tour)
                                </label>
                            </div>
                        <li>

                        </li>
                    </ul>
                </div>
                {{-- /Payment Type --}}

                {{-- Payment Method --}}
                <div class="mb-4">
                    <h3 class="mb-4 text-xl font-semibold text-gray-900">PHƯƠNG THỨC THANH TOÁN</h3>
                    <ul class="text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg">
                        <li class="w-full border-b border-gray-200 rounded-t-lg">
                            <div class="flex items-center pl-3">
                                <input class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500"
                                    type="radio" name="flexRadioDefaultMethodPayment" id="flexRadioDefaultMethodPayment1">
                                <label class="w-full py-3 ml-2 text-sm font-medium text-gray-900"
                                    for="flexRadioDefaultMethodPayment1">
                                    Thanh toán trực tuyến bằng thẻ ngân hàng
                                </label>
                            </div>
                        </li>


                        <div class="p-4">
                            {{-- Banking Info --}}
                            <div class="rounded-lg bg-gray-100">
                                <h5 class="mb-4 text-xl font-semibold text-gray-900">Tài khoản ngân hàng của OBTS:</h5>
                                <div class="flex items-center">
                                    <div class="">
                                        <img src="https://inkythuatso.com/uploads/images/2021/11/mb-bank-logo-inkythuatso-01-10-09-01-10.jpg"
                                            class="object-fill w-44" alt="">
                                    </div>
                                    <div class="flex flex-col justify-between p-4 leading-normal">
                                        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">Ngân hàng TMCP Quân
                                            Đội
                                            - CN Đà
                                            Nẵng
                                        </h5>
                                        <h5 class="mb-3 font-medium text-gray-700">STK: 0123456789</h5>
                                        <h5 class="mb-3 font-medium text-gray-700">CTK: OBTSystem</h5>
                                    </div>
                                </div>
                            </div>
                            {{-- /Banking Info --}}



                            {{-- Transfer Content --}}
                            <div class="rounded-lg bg-gray-100">
                                <h5 class="mb-4 text-xl font-semibold text-gray-900">Nội dung chuyển khoản:</h5>
                                <div class="flex flex-col items-start">
                                    <h5 class="mb-3 font-medium text-gray-700">Họ và tên + tên tour</h5>
                                    <h5 class="mb-3 font-medium text-gray-700">Ví dụ: Nguyen Van A, Ha Noi - Da Nang -
                                        Hoi An</h5>
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
                                    Thanh toán trực tiếp tại OBTS
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
                {{-- /Payment Method --}}

                <form class="pl-3" action="{{ url('/tour/payment/' . $booking->serial) }}" method="POST">
                    @csrf
                    <div class="flex items-center justify-end">
                        <button type="submit"
                            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5">Purchase</button>
                    </div>
                </form>
            </div>
        </form>
    </div>
@endsection
