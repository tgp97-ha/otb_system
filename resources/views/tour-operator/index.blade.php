@extends('layout.base')

@section('content')
    <div class="container">
        <div class="row pl-5 pt-5">
            <div class="col">
                <div class="card">
                    <div class="card-header">Search Tour Operator</div>
                    <div class="card-body">
                        <form method="POST" action="{{ url('/tour-operator/list/') }}">
                            @csrf
                            <div class="row form-group offset-md-1">
                                <div class="col-3">Name</div>
                                <div class="col-9">
                                    <input id="name" type="text" class="form-control"
                                           name="name">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-10 offset-md-1">
                                    <button type="submit" class="btn btn-primary float-right">
                                        Search Tour
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">Tour Operator List</div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <td class="col-3">Name</td>
                                <td class="col-3">Address</td>
                                <td class="col-2">Phone Number</td>
                                <td class="col-2">Bank Account</td>
                                <td class="col-2">Functions</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tourOperators as $tourOperator)
                                <tr>
                                    <td>{{$tourOperator->tour_operator_name}}</td>
                                    <td>{{$tourOperator->tour_operator_address}}</td>
                                    <td>{{$tourOperator->tour_operator_phone_number}}</td>
                                    <td>{{$tourOperator->tour_operator_bank_account}}</td>
                                    <td class="d-flex justify-content-between">
                                        <a class="align-middle btn btn-primary" href="{{url('/tour-operator/detail/'.$tourOperator->serial)}}">Detail</a>
                                        <form class="pl-3" action="{{ url('/tour-operator/delete/'.$tourOperator->serial) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                                        </form></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection