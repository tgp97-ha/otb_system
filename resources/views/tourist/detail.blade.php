@extends('layout.management')

@section('content')
    <div class="w-[70%] mx-auto">
        <h5 class="text-xl font-bold mb-4">
            My Profile
        </h5>
        <div class="w-full bg-white p-4 rounded-lg shadow-lg">


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


        </div>

    </div>
    @can('admin')
        <div class="mb-4 p-4">
            <h5 class="text-xl font-bold mb-4">
                Booked Tours
            </h5>
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                        <tr>
                            <th scope="col" class="px-6 py-3">Tour Name</td>
                            <th scope="col" class="px-6 py-3">Tour Destination</td>
                            <th scope="col" class="px-6 py-3">Tour Date</td>
                            <th scope="col" class="px-6 py-3">Booked At</td>
                            <th scope="col" class="px-6 py-3">Functions</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tourist->userTourist->bookings as $booking)
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="px-6 py-4">{{ $booking->tours->tour_title }}</td>
                                <td class="px-6 py-4">{{ $booking->tours->place->place_name }}</td>
                                <td class="px-6 py-4">{{ $booking->tours->tour_start_date }}</td>
                                <td class="px-6 py-4">{{ $booking->created_at }}</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2"
                                            href="{{ url('/tour/detail/' . $booking->tours->serial) }}">
                                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                                </path>
                                            </svg>
                                            Detail
                                        </a>
                                    </div>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endcan
@endsection
