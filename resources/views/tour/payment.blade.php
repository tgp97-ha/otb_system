@extends('layout.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="./assets/img/sandip-roy-KPgzTgfdaAc-unsplash.jpg" class="img-fluid rounded-start" alt="">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title card-title-heading">HÀ NỘI - ĐÀ NẴNG - BÀ NÀ HILL - PHỐ CỔ HỘI AN</h5>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="overview-content mt-3">
                                            <i class="fa-solid fa-location-dot overview-content-icon"></i>
                                            <span class="overview-content-title">
                        Điểm khởi hành:
                      </span>
                                            <span class="overview-content-address">{{$tour->place->place_name}}</span>
                                        </div>
                                        <div class="overview-content mt-3">
                                            <i class="fa-solid fa-location-dot overview-content-icon"></i>
                                            <span class="overview-content-title">
                        Điểm đến:
                      </span>
                                            <span class="overview-content-address">{{$tour->place->place_name}}</span>
                                        </div>
                                        <div class="overview-content mt-3">
                                            <i class="fa-regular fa-calendar-days overview-content-icon"></i>
                                            <span class="overview-content-title">
                        Ngày khởi hành:
                      </span>
                                            <span class="overview-content-address">2022</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="overview-content mt-3">
                                            <i class="fa-solid fa-clock overview-content-icon"></i>
                                            <span class="overview-content-title">
                        Thời gian:
                      </span>
                                            <span class="overview-content-address">{{ $tour->tour_day_length. ' days '.' / '. $tour->tour_night_length. ' nights' }}</span>
                                        </div>
                                        <div class="overview-content mt-3">
                                            <i class="fa-solid fa-address-card overview-content-icon"></i>
                                            <span class="overview-content-title">
                  Tour Operator:
                </span>
                                            <span class="overview-content-address">{{ $tour->userTourist->tourOperator->tour_operator_name}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6"></div>
                                    <div class="col-md-6">
                                        <div class="money">
                                            <h1 class="money-heading">Thành tiền:</h1>
                                            <h1 class="money-price">$100</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <form action="">
                <div class="payment mt-5">
                    <h1 class="type-payment">LOẠI HÌNH THANH TOÁN</h1>
                    <div class="form-check-payment">
                        <div class="form-check mt-3" style="font-size: 2.4rem; font-weight: 500;">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Thanh toán toàn bộ (100% giá trị tour)
                            </label>
                        </div>
                        <div class="form-check mt-3" style="font-size: 2.4rem; font-weight: 500;">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Đặt cọc trước (20% giá trị tour)
                            </label>
                        </div>
                    </div>
                </div>
                <div class="banking mt-5">
                    <h1 class="method-payment">PHƯƠNG THỨC THANH TOÁN</h1>
                    <div class="form-check-payment">
                        <div class="form-check mt-3" style="font-size: 2.4rem; font-weight: 500;">
                            <input class="form-check-input" type="radio" name="flexRadioDefaultMethodPayment" id="flexRadioDefaultMethodPayment1">
                            <label class="form-check-label" for="flexRadioDefaultMethodPayment1">
                                Thanh toán trực tuyến bằng thẻ ngân hàng
                            </label>
                        </div>

                        <div class="info-banking">
                            <h1 class="banking-title">Tài khoản ngân hàng của OBTS:</h1>
                            <div class="card mb-3" style="max-width: 600px; background-color: #d5d5d5; border: none;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="https://inkythuatso.com/uploads/images/2021/11/mb-bank-logo-inkythuatso-01-10-09-01-10.jpg" class="img-fluid rounded-start banking-img" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title card-title-info">Ngân hàng TMCP Quân Đội - CN Đà Nẵng</h5>
                                            <h5 class="card-title card-title-info">STK: 0123456789</h5>
                                            <h5 class="card-title card-title-info">CTK: OBTSystem</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="info-banking">
                            <h1 class="banking-title">Nội dung chuyển khoản:</h1>
                            <div class="card mb-3" style="max-width: 600px; background-color: #d5d5d5; border: none;">
                                <div class="row g-0">
                                    <div class="col-md-12">
                                        <div class="card-body">
                                            <h5 class="card-title card-title-info">Họ và tên + tên tour</h5>
                                            <h5 class="card-title card-title-info">Ví dụ: Nguyen Van A, Ha Noi - Da Nang - Hoi An</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-check mt-3" style="font-size: 2.4rem; font-weight: 500;">
                            <input class="form-check-input" type="radio" name="flexRadioDefaultMethodPayment" id="flexRadioDefaultMethodPayment2" checked>
                            <label class="form-check-label" for="flexRadioDefaultMethodPayment2">
                                Thanh toán trực tiếp tại OBTS
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <form class="pl-3" action="{{url('/tour/payment/'.$booking->serial)}}" method="POST">
                        @csrf
                        <button type="submit" class="submit-input">Pay</button>
                    </form>
                </div>
            </form>
        </div>
    </div>

@endsection