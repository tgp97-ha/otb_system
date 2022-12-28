@extends('layout.base')

@section('content')
    <div class="container">
        <div class="row pt-5 d-flex justify-content-center">
            <div class="col-md-9">
                <div class="card border-0">
                    <div class="card-header border-0 bg-white font-weight-bold" style="font-size: 20px">MY PROFILE</div>
                    <div class="card-body">
                        <div class="form-group col-md-10 row px-4">
                            <span class="col-form-label col-4 align-middle font-weight-bold font-italic">Tourist Name: </span>
                            <span class="col-form-label font-weight-normal  col-8 align-middle">{{ $tourist->tourist_name }}</span>
                        </div>
                        <div class="form-group col-md-10 row px-4">
                            <span class="col-form-label col-4 align-middle font-weight-bold font-italic">Address: </span>
                            <span class="col-form-label font-weight-normal  col-8 align-middle">{{ $tourist->address }}</span>
                        </div>
                        <div class="form-group col-md-10 row px-4">
                            <span class="col-form-label col-4 align-middle font-weight-bold font-italic">Date Of Birth: </span>
                            <span class="col-form-label font-weight-normal  col-8 align-middle">{{ $tourist->date_of_birth }}</span>
                        </div>
                        <div class="form-group col-md-10 row px-4">
                            <span class="col-form-label col-4 align-middle font-weight-bold font-italic">Phone Number: </span>
                            <span class="col-form-label font-weight-normal  col-8 align-middle">{{ $tourist->tourist_phone_number }}</span>
                        </div>
                        <div class="form-group col-md-10 row px-4">
                            <span class="col-form-label col-4 align-middle font-weight-bold font-italic">Personal Id: </span>
                            <span class="col-form-label font-weight-normal  col-8 align-middle">{{ $tourist->tourist_personal_id }}</span>
                        </div>
                        <div class="row mt-4 d-flex justify-content-end">
                            <div class="col-3">
                                <div class="form-group col-md-10 offset-md-1">
                                    <a class="btn btn-primary" href="{{url('/tourist/edit-profile')}}">Edit profile</a>

                                </div>
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