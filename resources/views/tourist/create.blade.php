@extends('layout.base')

@section('content')
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Register as tourist</div>

                    <div class="card-body">
                        <form class="form-horizontal" method="POST" action="{{ route('tourist.store') }}">
                            {{ csrf_field() }}

                            <div class="form-group col-md-10 offset-md-1" {{ $errors->has('tourist_name') ? ' has-error' : '' }}>
                                <label for="email" class="control-label">Tourist Name</label>
                                <div>
                                    <input id="email" type="text" class="form-control" name="tourist_name" required autofocus>

                                    @if ($errors->has('tourist_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('tourist_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group col-md-10 offset-md-1" {{ $errors->has('address') ? ' has-error' : '' }}>
                                <label for="username" class="control-label">Address</label>
                                <div>
                                    <input id="username" type="text" class="form-control" name="address"  required autofocus>

                                    @if ($errors->has('address'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group col-md-10 offset-md-1" {{ $errors->has('dob') ? ' has-error' : '' }}>
                                <label for="password" class="control-label">Date of Birth</label>
                                <div class="input-group date" data-provide="datepicker">
                                    <input type="text" class="form-control" placeholder="day/month/year"
                                           name="dob" required autocomplete="off">
                                    <div class="input-group-append">
                                                            <span class="input-group-text"><i
                                                                        class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-10 offset-md-1" {{ $errors->has('phone_number') ? ' has-error' : '' }}>
                                <label for="phone_number" class="control-label">Phone Number</label>
                                <div>
                                    <input id="phone_number" type="number" class="form-control" name="phone_number" required>

                                    @if ($errors->has('phone_number'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group col-md-10 offset-md-1" {{ $errors->has('personal_id') ? ' has-error' : '' }}>
                                <label for="personal_id" class="control-label">Personal ID</label>
                                <div>
                                    <input id="personal_id" type="number" class="form-control" name="personal_id" required>

                                    @if ($errors->has('personal_id'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('personal_id') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-10 offset-md-1">
                                    <button type="submit" class="btn btn-primary float-right">
                                        Register Tourist Detail
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