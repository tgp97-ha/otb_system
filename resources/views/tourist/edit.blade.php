@extends('layout.base')

@section('content')
    <div class="row d-flex justify-content-center">
        <h4 class="mb-6 text-2xl font-bold dark:text-white col-8">Edit Profile</h4>
            <div class="bg-white p-6 rounded-md col-8 px-3">
                <form class="" method="POST" action="{{ url('tourist/edit-profile/' . $tourist->serial) }}">
                    {{ csrf_field() }}
                    {{-- Grid Container --}}
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tourist Name</label>
                        <div>
                            <input id="email" type="text"
                                   class="{{ $errors->has('tourist_name') ? 'border-red-600 focus:ring-red-600 focus:border-red-600 dark:focus:ring-red-500 dark:focus:border-red-500' : 'border-gray-300 focus:ring-blue-500 focus:border-blue-500  dark:border-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500' }} bg-gray-50 border  text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white"
                                   name="tourist_name" value="{{ $tourist->tourist_name ?? '' }}" required autofocus>

                            @if ($errors->has('tourist_name'))
                                <p class="text-red-600">
                                    <strong>{{ $errors->first('tourist_name') }}</strong>
                                </p>
                            @endif
                        </div>
                    </div>
                    <div class="mt-2">
                        <label for="username"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                        <div>
                            <input id="username" type="text"
                                   class="{{ $errors->has('address') ? 'border-red-600 focus:ring-red-600 focus:border-red-600 dark:focus:ring-red-500 dark:focus:border-red-500' : 'border-gray-300 focus:ring-blue-500 focus:border-blue-500  dark:border-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500' }}
                                           bg-gray-50 border text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700
                                           dark:placeholder-gray-400 dark:text-white"
                                   name="address" value="{{ $tourist->address ?? '' }}" required autofocus>

                            @if ($errors->has('address'))
                                <p class="text-red-600">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </p>
                            @endif
                        </div>
                    </div>
                    <div class="mt-2">
                        <label for="dob" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date of
                            Birth</label>

                        <div class="relative">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input type="text" id="dob" name="dob"
                                   class="{{ $errors->has('dob') ? 'border-red-600 focus:ring-red-600 focus:border-red-600' : 'border-gray-300 focus:ring-blue-500 focus:border-blue-500' }}bg-gray-50 border  text-gray-900 text-sm rounded-lg  block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   value="{{ $tourist->date_of_birth ?? '' }}" placeholder="Select date">
                        </div>
                    </div>
                    <div class="mt-2">
                        <label for="phone_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                            Number</label>
                        <div>
                            <input id="phone_number" type="number"
                                   class="{{ $errors->has('phone_number') ? 'border-red-600 focus:ring-red-600 focus:border-red-600 dark:focus:ring-red-500 dark:focus:border-red-500' : 'border-gray-300 focus:ring-blue-500 focus:border-blue-500  dark:border-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500' }}
                                           bg-gray-50 border text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700
                                           dark:placeholder-gray-400 dark:text-white"
                                   name="phone_number" value="{{ $tourist->tourist_phone_number ?? '' }}" required>

                            @if ($errors->has('phone_number'))
                                <p class="text-red-600">
                                    <strong>{{ $errors->first('phone_number') }}</strong>
                                </p>
                            @endif
                        </div>
                    </div>
                    <div class="mt-2">
                        <label for="personal_id"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Personal ID</label>
                        <div>
                            <input id="personal_id" type="number"
                                   class="{{ $errors->has('personal_id') ? 'border-red-600 focus:ring-red-600 focus:border-red-600 dark:focus:ring-red-500 dark:focus:border-red-500' : 'border-gray-300 focus:ring-blue-500 focus:border-blue-500  dark:border-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500' }} bg-gray-50 border  text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white"
                                   value="{{ $tourist->tourist_personal_id ?? '' }}" name="personal_id" required>

                            @if ($errors->has('personal_id'))
                                <p class="text-red-600">
                                    <strong>{{ $errors->first('personal_id') }}</strong>
                                </p>
                            @endif
                        </div>
                    </div>
                    <div class="flex items-center justify-end mt-2">
                        <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            Update Profile
                        </button>
                    </div>
            </form>
        </div>
        </div>

    </div>
@endsection
