@extends('layout.base')

@section('content')
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Tour Operator Detail</div>
                    <div class="card-body">
                        <div class="form-group col-md-10 offset-md-1 row">
                            <span for="email" class="col-form-label col-4 align-middle">Tour Operator Name</span>
                            <span class="col-form-label font-weight-normal col-8 align-middle">{{ $tourOperator->tour_operator_name }}</span>
                        </div>
                        <div class="form-group col-md-10 offset-md-1 row">
                            <span class="col-form-label col-4 align-middle">Address</span>
                            <span class="col-form-label font-weight-normal  col-8 align-middle">{{ $tourOperator->tour_operator_address }}</span>
                        </div>
                        <div class="form-group col-md-10 offset-md-1 row">
                            <span class="col-form-label col-4 align-middle">Bank Account</span>
                            <span class="col-form-label font-weight-normal  col-8 align-middle">{{ $tourOperator->tour_operator_tax_number }}</span>
                        </div>
                        <div class="form-group col-md-10 offset-md-1 row">
                            <span class="col-form-label col-4 align-middle">Tax Number</span>
                            <span class="col-form-label font-weight-normal  col-8 align-middle">{{ $tourOperator->tour_operator_tax_number }}</span>
                        </div>
                        <div class="form-group col-md-10 offset-md-1 row">
                            <span class="col-form-label col-4 align-middle">Phone Number</span>
                            <span class="col-form-label font-weight-normal align-middle col-8">{{ $tourOperator->tour_operator_phone_number }}</span>
                        </div>
                        <div class="form-group col-md-10 offset-md-1 row">
                            <span  class="col-form-label col-4 align-middle">Description</span>
                            <span class="col-form-label font-weight-normal align-middle col-8">{{ $tourOperator->tour_operator_description }}</span>
                        </div>
                        <div class="form-group col-md-10 offset-md-1">
                            <div class="row d-flex justify-content-center">
                                <a class="btn btn-primary" href="{{url('/tour-operator/edit-profile')}}">Edit profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection