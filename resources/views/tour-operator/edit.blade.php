@extends('layout.base')

@section('content')
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Tour Operator Edit</div>

                    <div class="card-body">
                        <form class="form-horizontal" method="POST" action="{{ url('tour-operator/edit-profile/'.$tourOperator->serial)}}">
                            {{ csrf_field() }}
                            <div class="form-group col-md-10 offset-md-1" {{ $errors->has('name') ? ' has-error' : '' }}>
                                <label for="name" class="control-label">Tour Operator Name</label>
                                <div>
                                    <input id="name" type="text" class="form-control" name="name"
                                           value="{{ $tourOperator->tour_operator_name ?? '' }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group col-md-10 offset-md-1" {{ $errors->has('address') ? ' has-error' : '' }}>
                                <label for="username" class="control-label">Address</label>
                                <div>
                                    <input id="username" type="text" class="form-control" name="address"
                                           value="{{$tourOperator->tour_operator_address??''}}" required autofocus>

                                    @if ($errors->has('address'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group col-md-10 offset-md-1" {{ $errors->has('phone_number') ? ' has-error' : '' }}>
                                <label for="phone_number" class="control-label">Phone Number</label>
                                <div>
                                    <input id="phone_number" type="text" class="form-control" name="phone_number"
                                           value="{{$tourOperator->tour_operator_phone_number??''}}" required autofocus>

                                    @if ($errors->has('phone_number'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group col-md-10 offset-md-1" {{ $errors->has('tax_number') ? ' has-error' : '' }}>
                                <label for="tax_number" class="control-label">Tax Number</label>
                                <div>
                                    <input id="tax_number" type="number" class="form-control" name="tax_number"
                                           value="{{$tourist->tour_operator_tax_number??''}}" required>

                                    @if ($errors->has('tax_number'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('tax_number') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group col-md-10 offset-md-1" {{ $errors->has('personal_id') ? ' has-error' : '' }}>
                                <label for="description" class="control-label">Company Description</label>
                                <div>
                                    <input id="description" type="text" class="form-control"
                                           value="{{$tourist->tour_operator_description??''}}" name="description" required>

                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-10 offset-md-1">
                                    <button type="submit" class="btn btn-primary float-right">
                                        Update Tour Operator
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection