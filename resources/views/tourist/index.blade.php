@extends('layout.base')

@section('content')
    <div class="container">
        <div class="row pl-5 pt-5">
            <div class="col">
                <div class="card">
                    <div class="card-header">Search Tour Operator</div>
                    <div class="card-body">
                        <form method="POST" action="{{ url('/tourist/list/') }}">
                            @csrf
                            <div class="row form-group offset-md-1">
                                <div class="col-3">Name</div>
                                <div class="col-9">
                                    <input id="name" type="text" class="form-control"
                                           name="name">
                                </div>
                            </div>
                            <div class="row form-group offset-md-1">
                                <div class="col-3">Personal ID</div>
                                <div class="col-9">
                                    <input id="personal_id" type="number" class="form-control"
                                           name="personal_id">
                                </div>
                            </div>
                            <div class="row form-group offset-md-1">
                                <div class="col-3">Address</div>
                                <div class="col-9">
                                    <input id="address" type="number" class="form-control"
                                           name="address">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-10 offset-md-1">
                                    <button type="submit" class="btn btn-primary float-right">
                                        Search Tourist
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">Tourist List</div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <td class="col-2">Name</td>
                                <td class="col-2">Address</td>
                                <td class="col-2">Date of Birth</td>
                                <td class="col-2">Personal ID </td>
                                <td class="col-2">Phone Number </td>
                                <td class="col-2">Functions</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tourists as $tourist)
                                <tr>
                                    <td>{{$tourist->tourist_name}}</td>
                                    <td>{{$tourist->address}}</td>
                                    <td>{{$tourist->date_of_birth}}</td>
                                    <td>{{$tourist->tourist_phone_number}}</td>
                                    <td>{{$tourist->tourist_personal_id}}</td>
                                    <td class="d-flex justify-content-between">
                                        <a class="align-middle btn btn-primary" href="{{url('/tourist/detail/'.$tourist->serial)}}">Detail</a>
                                        <form class="pl-3" action="{{ url('/tourist/delete/'.$tourist->serial) }}" method="POST">
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