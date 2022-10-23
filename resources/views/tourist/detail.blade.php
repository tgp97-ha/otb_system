@extends('layout.base')

@section('content')
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Tourist Detail</div>
                    <div class="card-body">
                        <div class="form-group col-md-10 offset-md-1 row">
                            <span for="email" class="col-form-label col-4 align-middle">Tourist Name</span>
                            <span class="col-form-label font-weight-normal col-8 align-middle">{{ $tourist->tourist_name }}</span>
                        </div>
                        <div class="form-group col-md-10 offset-md-1 row">
                            <span class="col-form-label col-4 align-middle">Address</span>
                            <span class="col-form-label font-weight-normal  col-8 align-middle">{{ $tourist->address }}</span>
                        </div>
                        <div class="form-group col-md-10 offset-md-1 row">
                            <span class="col-form-label col-4 align-middle">Date of Birth</span>
                            <span class="col-form-label font-weight-normal  col-8 align-middle">{{ $tourist->date_of_birth }}</span>
                        </div>
                        <div class="form-group col-md-10 offset-md-1 row">
                            <span class="col-form-label col-4 align-middle">Phone Number</span>
                            <span class="col-form-label font-weight-normal align-middle col-8">{{ $tourist->tourist_phone_number }}</span>
                        </div>
                        <div class="form-group col-md-10 offset-md-1 row">
                            <span  class="col-form-label col-4 align-middle">Personal Id</span>
                            <span class="col-form-label font-weight-normal align-middle col-8">{{ $tourist->tourist_personal_id }}</span>
                        </div>
                        <div class="form-group col-md-10 offset-md-1">
                            <div class="row d-flex justify-content-center">
                                    <a class="btn btn-primary" href="{{url('/tourist/edit-profile')}}">Edit profile</a>
                            </div>
                        </div>
                    </div>
                </div>
                @can('admin')
                <div class="card pt-2">
                    <div class="card-header">Booked Tours</div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <td>Tour Name</td>
                                <td>Tour Destination</td>
                                <td>Tour Date</td>
                                <td>Booked At</td>
                                <td>Functions</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tourist->userTourist->bookings as $booking)
                                <tr>
                                    <td>{{$booking->tours->tour_title}}</td>
                                    <td>{{$booking->tours->place->place_name}}</td>
                                    <td>{{$booking->tours->tour_start_date}}</td>
                                    <td>{{$booking->created_at}}</td>
                                    <td> <a class="btn btn-primary" href="{{url('/tour/detail/'.$booking->tours->serial)}}">Detail</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @endcan
            </div>
        </div>
    </div>
@endsection