@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group col-md-10 offset-md-1" {{ $errors->has('username') ? ' has-error' : '' }}>
                            <label for="username" class="control-label">Username</label>

                            <div>
                                <input id="username" type="username" class="form-control" name="username"
                                       value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group col-md-10 offset-md-1" {{ $errors->has('password') ? ' has-error' : '' }}>
                            <label for="password" class="control-label">Password</label>

                            <div>
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group col-md-10 offset-md-1">
                            <div class="row">
                                <div class="col-6">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"
                                                    {{ old('remember') ? 'checked' : '' }}> As tourist
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"
                                                    {{ old('remember') ? 'checked' : '' }}> As tour operator
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-6">
                                <a href="{{url('/register/tourist')}}">Register as Tourist</a>
                            </div>
                            <div class="col-6">
                                <a href="{{url('/register/tour-operator')}}">Register as Tour Operator</a>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 offset-md-1">
                                <button type="submit" class="btn btn-primary float-right">
                                    Login
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
