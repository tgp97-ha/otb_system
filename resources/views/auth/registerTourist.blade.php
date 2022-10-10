@extends('layout.base')

@section('content')
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Register as tourist</div>

                    <div class="card-body">
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group col-md-10 offset-md-1" {{ $errors->has('username') ? ' has-error' : '' }}>
                                <label for="email" class="control-label">Email</label>
                                <div>
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('username') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group col-md-10 offset-md-1" {{ $errors->has('username') ? ' has-error' : '' }}>
                                <label for="username" class="control-label">Username</label>
                                <div>
                                    <input id="username" type="username" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

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
                            <div class="form-group col-md-10 offset-md-1" {{ $errors->has('password-confirm') ? ' has-error' : '' }}>
                                <label for="password-confirm" class="control-label">Password Confifrm</label>
                                <div>
                                    <input id="password-confirm" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password-confirm'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password-confirm') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-10 offset-md-1">
                                    <button type="submit" class="btn btn-primary float-right">
                                        Register
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