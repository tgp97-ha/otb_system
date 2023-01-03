@extends('layout.base')

@section('content')
    <div class="w-[40%] mx-auto bg-white p-6 rounded-lg">
        <h1 class="text-2xl font-bold text-gray-900 mb-6">Register as tourist</h1>

        <form class="" method="POST" action="{{ route('tourist.store') }}">
            {{ csrf_field() }}

            <div class="grid grid-cols-1 gap-6">
                <div class="">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Tourist Name</label>
                    <div>
                        <input id="email" type="text"
                            class="{{ $errors->has('tourist_name') ? 'border-red-500 focus:ring-red-600 focus:border-red-600' : 'border-gray-300 focus:ring-blue-500 focus:border-blue-500' }} block w-full p-2.5 border bg-gray-50 text-gray-900 text-sm rounded-lg"
                            name="tourist_name" required autofocus>
                        @if ($errors->has('tourist_name'))
                            <p class="text-red-600">
                                <strong>{{ $errors->first('tourist_name') }}</strong>
                            </p>
                        @endif
                    </div>
                </div>

                {{-- Address --}}
                <div class="">
                    <label for="address" class="block mb-2 text-sm font-medium text-gray-900">Address</label>
                    <input id="address" type="text"
                        class="{{ $errors->has('address') ? 'border-red-500 focus:ring-red-600 focus:border-red-600' : 'border-gray-300 focus:ring-blue-500 focus:border-blue-500' }} block w-full p-2.5 border bg-gray-50 text-gray-900 text-sm rounded-lg"
                        name="address" required autofocus>

                    @if ($errors->has('address'))
                        <p class="text-red-600">
                            <strong>{{ $errors->first('address') }}</strong>
                        </p>
                    @endif
                </div>
                {{-- /Address --}}

                {{-- Dob --}}
                <div class="">
                    <label for="dob" class="block mb-2 text-sm font-medium text-gray-900">Date of Birth</label>
                    <div class="relative">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input id="dob" name="dob" datepicker datepicker-autohide datepicker-format="dd/mm/yyyy"
                            type="text"
                            class="{{ $errors->has('dob') ? 'border-red-500 focus:ring-red-600 focus:border-red-600' : 'border-gray-300 focus:ring-blue-500 focus:border-blue-500' }} block w-full pl-10 p-2.5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg"
                            placeholder="Select date" autocomplete="off">
                    </div>
                </div>
                {{-- /Dob --}}

                {{-- Phone --}}
                <div class="">
                    <label for="phone_number" class="block mb-2 text-sm font-medium text-gray-900">Phone Number</label>
                    <div>
                        <input id="phone_number" type="number"
                            class="{{ $errors->has('phone_number') ? 'border-red-500 focus:ring-red-600 focus:border-red-600' : 'border-gray-300 focus:ring-blue-500 focus:border-blue-500' }} block w-full border p-2.5 rounded-lg text-sm bg-gray-50"
                            name="phone_number" required>

                        @if ($errors->has('phone_number'))
                            <p class="text-red-600">
                                <strong>{{ $errors->first('phone_number') }}</strong>
                            </p>
                        @endif
                    </div>
                </div>
                {{-- /Phone --}}

                {{-- ID --}}
                <div class="">
                    <label for="personal_id" class="block mb-2 text-sm font-medium text-gray-900">Personal ID</label>
                    <input id="personal_id" type="number"
                        class="{{ $errors->has('personal_id') ? 'border-red-500 focus:ring-red-600 focus:border-red-600' : 'border-gray-300 focus:ring-blue-500 focus:border-blue-500' }} block w-full p-2.5 bg-gray-50 text-sm border rounded-lg"
                        name="personal_id" required>

                    @if ($errors->has('personal_id'))
                        <p class="text-red-600">
                            <strong>{{ $errors->first('personal_id') }}</strong>
                        </p>
                    @endif
                </div>
                {{-- /ID --}}

                <div class="flex items-center justify-center mt-6">
                    <button type="submit"
                        class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5">
                        Register Tourist Detail
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
