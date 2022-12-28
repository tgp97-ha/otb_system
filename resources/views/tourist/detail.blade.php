@extends('layout.base')

@section('content')
    <div class="">
        <h4 class="mb-6 text-2xl font-bold dark:text-white">Profile</h4>

        <div class="bg-white p-6 rounded-md">
            {{-- Grid Container --}}
            <div class="grid grid-cols-1 gap-6">
                <div class="w-full flex items-center justify-center">
                    <img src="{{ asset('images/avatar_default.png') }}" alt="avatar"
                        class="w-[150px] h-[150px] rounded-full">
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Name
                    </label>
                    <div>
                        <input id="email" type="text"
                            class="cursor-not-allowed {{ $errors->has('tourist_name') ? 'border-red-600 focus:ring-red-600 focus:border-red-600 dark:focus:ring-red-500 dark:focus:border-red-500' : 'border-gray-300 focus:ring-blue-500 focus:border-blue-500  dark:border-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500' }} bg-gray-50 border  text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white"
                            name="tourist_name" value="{{ $tourist->tourist_name ?? '' }}" required autofocus disabled>
                    </div>
                </div>
                <div>
                    <label for="username"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                    <div>
                        <input id="username" type="text"
                            class="cursor-not-allowed bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            name="address" value="{{ $tourist->address ?? '' }}" required autofocus disabled>
                    </div>
                </div>
                <div>
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
                        <input datepicker datepicker-autohide type="text" id="dob"
                            class="cursor-not-allowed {{ $errors->has('dob') ? 'border-red-600 focus:ring-red-600 focus:border-red-600' : 'border-gray-300 focus:ring-blue-500 focus:border-blue-500' }}bg-gray-50 border  text-gray-900 text-sm rounded-lg  block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            value="{{ $tourist->date_of_birth ?? '' }}" placeholder="Select date" disabled>
                    </div>
                </div>
                <div>
                    <label for="phone_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                        Number</label>
                    <div>
                        <input id="phone_number" type="number"
                            class="cursor-not-allowed {{ $errors->has('phone_number') ? 'border-red-600 focus:ring-red-600 focus:border-red-600 dark:focus:ring-red-500 dark:focus:border-red-500' : 'border-gray-300 focus:ring-blue-500 focus:border-blue-500  dark:border-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500' }}
                                bg-gray-50 border text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700
                                dark:placeholder-gray-400 dark:text-white"
                            name="phone_number" value="{{ $tourist->tourist_phone_number ?? '' }}" required disabled>
                    </div>
                </div>
                <div>
                    <label for="personal_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Personal
                        ID</label>
                    <div>
                        <input id="personal_id" type="number"
                            class="cursor-not-allowed {{ $errors->has('personal_id') ? 'border-red-600 focus:ring-red-600 focus:border-red-600 dark:focus:ring-red-500 dark:focus:border-red-500' : 'border-gray-300 focus:ring-blue-500 focus:border-blue-500  dark:border-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500' }} bg-gray-50 border  text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white"
                            value="{{ $tourist->tourist_personal_id ?? '' }}" name="personal_id" required disabled>
                    </div>
                </div>
                <div class="flex items-center justify-end">
                    <a href="{{ url('/tourist/edit-profile') }}"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        Edit Profile
                    </a>
                </div>
            </div>
            {{-- /Grid Container --}}

            @can('admin')
                <div class="card pt-2">
                    <div class="card-header">Booked Tours</div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <td>Tour Name</td>
                                    <td>Tour Destination</td>
                                    <td>Tour Date</td>
                                    <td>Booked At</td>
                                    <td>Functions</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tourist->userTourist->bookings as $booking)
                                    <tr>
                                        <td>{{ $booking->tours->tour_title }}</td>
                                        <td>{{ $booking->tours->place->place_name }}</td>
                                        <td>{{ $booking->tours->tour_start_date }}</td>
                                        <td>{{ $booking->created_at }}</td>
                                        <td> <a class="btn btn-primary"
                                                href="{{ url('/tour/detail/' . $booking->tours->serial) }}">Detail</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endcan
        </div>
    </div>
@endsection
