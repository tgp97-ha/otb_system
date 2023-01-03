@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('register.tourist') }}">
        @csrf

        <div class="grid grid-cols-1 gap-6 p-6 bg-white rounded-lg shadow-lg">
            {{-- Divider --}}
            <div
                class="flex items-center my-4 before:flex-1 before:border-t before:border-gray-300 before:mt-0.5 after:flex-1 after:border-t after:border-gray-300 after:mt-0.5">
                <p class="text-center font-semibold mx-4">{{ __('Register') }}</p>
            </div>
            {{-- /Divider --}}

            {{-- Username Input --}}
            <div class="">
                <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Username</label>

                <input id="username" type="username"
                    class="{{ $errors->has('username') ? 'border border-red-500 focus:ring-red-500 focus:border-red-500' : 'border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500' }} bg-gray-50 border  text-sm rounded-lg  block w-full p-2.5"
                    name="username" value="{{ old('username') }}" required autocomplete="name" autofocus>

                @error('username')
                    <p class="text-red-600">
                        <strong>{{ $message }}</strong>
                    </p>
                @enderror
            </div>
            {{-- /Username Input --}}

            {{-- Email Input --}}
            <div class="">
                <label for="email"
                    class="block mb-2 text-sm font-medium text-gray-900">{{ __('E-Mail Address') }}</label>

                <input id="email" type="email"
                    class="{{ $errors->has('email') ? 'border border-red-500 focus:ring-red-500 focus:border-red-500' : 'border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500' }} bg-gray-50 border  text-sm rounded-lg  block w-full p-2.5"
                    name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <p class="text-red-600">
                        <strong>{{ $message }}</strong>
                    </p>
                @enderror
            </div>
            {{-- /Email Input --}}

            {{-- Password Input --}}
            <div class="">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900">{{ __('Password') }}</label>

                <input id="password" type="password"
                    class="{{ $errors->has('password') ? 'border border-red-500 focus:ring-red-500 focus:border-red-500' : 'border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500' }} bg-gray-50 border  text-sm rounded-lg  block w-full p-2.5"
                    name="password" required autocomplete="new-password">

                @error('password')
                    <p class="text-red-600" role="alert">
                        <strong>{{ $message }}</strong>
                    </p>
                @enderror
            </div>
            {{-- /Password Input --}}

            {{-- Password Confirm Input --}}
            <div class="">
                <label for="password-confirm"
                    class="block mb-2 text-sm font-medium text-gray-900">{{ __('Confirm Password') }}</label>

                <input id="password-confirm" type="password"
                    class="{{ $errors->has('password-confirm') ? 'border border-red-500 focus:ring-red-500 focus:border-red-500' : 'border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500' }} bg-gray-50 border  text-sm rounded-lg  block w-full p-2.5"
                    name="password_confirmation" required autocomplete="new-password">
            </div>
            {{-- /Password Confirm Input --}}

            <div class="flex items-center justify-center mt-6">
                <button type="submit"
                    class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    </form>
@endsection
