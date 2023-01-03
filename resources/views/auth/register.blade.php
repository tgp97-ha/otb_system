@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('register.operator') }}">
        @csrf

        <div class="grid grid-cols-1 gap-6 p-6 bg-white rounded-lg shadow-lg">
            <div class="">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">{{ __('Username') }}</label>
                <input id="username" type="text"
                    class="{{ $errors->has('username') ? 'border-red-500 hover:border-red-400 focus:ring-red-600 focus:border-red-600' : 'border-gray-300 hover:border-blue-500 focus:ring-blue-500 focus:border-blue-500' }} block w-full p-2.5 text-sm font-medium border rounded-lg bg-gray-50 "
                    name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                @error('username')
                    <p class="text-red-600" role="alert">
                        <strong>{{ $message }}</strong>
                    </p>
                @enderror
            </div>

            <div class="form-group row">
                <label for="email"
                    class="block mb-2 text-sm font-medium text-gray-900">{{ __('E-Mail Address') }}</label>

                <input id="email" type="email"
                    class="{{ $errors->has('email') ? 'border-red-500 hover:border-red-400 focus:ring-red-600 focus:border-red-600' : 'border-gray-300 hover:border-blue-500 focus:ring-blue-500 focus:border-blue-500' }} block w-full p-2.5 text-sm font-medium border rounded-lg bg-gray-50"
                    name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <p class="text-red-600" role="alert">
                        <strong>{{ $message }}</strong>
                    </p>
                @enderror
            </div>

            <div class="form-group row">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900">{{ __('Password') }}</label>

                <input id="password" type="password"
                    class="{{ $errors->has('password') ? 'border-red-500 hover:border-red-400 focus:ring-red-600 focus:border-red-600' : 'border-gray-300 hover:border-blue-500 focus:ring-blue-500 focus:border-blue-500' }} block w-full p-2.5 text-sm font-medium border rounded-lg bg-gray-50"
                    name="password" required autocomplete="new-password">

                @error('password')
                    <p class="text-red-600" role="alert">
                        <strong>{{ $message }}</strong>
                    </p>
                @enderror
            </div>
            <div class="">
                <label for="password-confirm"
                    class="block mb-2 text-sm font-medium text-gray-900">{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password"
                    class="{{ $errors->has('password_confirmation') ? 'border-red-500 hover:border-red-400 focus:ring-red-600 focus:border-red-600' : 'border-gray-300 hover:border-blue-500 focus:ring-blue-500 focus:border-blue-500' }} block w-full p-2.5 text-sm font-medium border rounded-lg bg-gray-50"
                    name="password_confirmation" required autocomplete="new-password">
            </div>

            <div class="flex justify-center items-center">
                <button type="submit"
                    class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    </form>
@endsection
