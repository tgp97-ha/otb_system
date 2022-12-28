@extends('layout.base')

@section('content')
    <div class="fixed top-0 left-0 w-screen h-screen px-6 bg-white">

        {{-- Flex Container --}}
        <div class="flex justify-evenly items-center h-full">

            {{-- Image --}}
            <div class="w-1/2">
                <img src="{{ asset('images/login_background.jpg') }}" class="w-full" alt="Sample image" />
            </div>
            {{-- /Image --}}

            {{-- Login Form --}}

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="grid grid-cols-1 gap-y-6">
                    {{-- Divider --}}
                    <div
                        class="flex items-center my-4 before:flex-1 before:border-t before:border-gray-300 before:mt-0.5 after:flex-1 after:border-t after:border-gray-300 after:mt-0.5">
                        <p class="text-center font-semibold mx-4">{{ __('Welcome') }}</p>
                    </div>
                    {{-- /Divider --}}

                    {{-- Username Input --}}
                    <div class="">
                        <label for="username"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>

                        <input id="username" type="username"
                            class="bg-gray-50 border {{ $errors->has('username') ? 'border border-red-500' : 'border-gray-300 text-gray-900' }} text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            name="username" value="{{ old('username') }}" required autofocus>

                        @if ($errors->has('username'))
                            <span class="text-red-500">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
                        @if (session('errors') && session('errors')->has('message'))
                            <span class="text-red-500">
                                <strong>{{ session('errors')->first('message') }}</strong>
                            </span>
                        @endif
                    </div>
                    {{-- /Username Input --}}

                    {{-- Password Input --}}
                    <div class="" {{ $errors->has('password') ? ' has-error' : '' }}>
                        <label for="password" class="control-label">Password</label>

                        <input id="password" type="password"
                            class="bg-gray-50 border {{ $errors->has('username') ? 'border border-red-500' : 'border-gray-300 text-gray-900' }} text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            name="password" required>

                        @if ($errors->has('password'))
                            <span class="text-red-500">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    {{-- /Password Input --}}

                    {{-- Role Input --}}
                    <div class="grid grid-cols-2 gap-x-6">
                        <div class="flex items-center">
                            <input id="login-type-1" type="radio" name="login_type" value="1" checked
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                {{ old('remember') ? 'checked' : '' }}>
                            <label for="login-type-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                As tourist
                            </label>
                        </div>

                        <div class="flex items-center">
                            <input id="login-type-2" type="radio" name="login_type" value="2"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                {{ old('remember') ? 'checked' : '' }}>
                            <label for="login-type-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                As tour operator
                            </label>
                        </div>
                    </div>
                    {{-- /Role Input --}}

                    <div class="flex items-center justify-end">
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            Login
                        </button>
                    </div>
                </div>
            </form>
            {{-- /Login Form --}}

        </div>
        {{-- /Flex Container --}}

    </div>
@endsection
