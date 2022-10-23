@extends('layout.base')

@section('content')
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Payment</div>
                    <div class="card-body">
                        <div class="row d-flex justify-content-center form-group">
                            <span> You just booked a tour</span>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <form class="pl-3" action="{{url('/tour/payment/'.$booking->serial)}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary">Pay</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection