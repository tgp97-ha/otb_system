@extends('layout.base')

@section('content')
    <div>
        <h4 class="mb-6 text-2xl font-bold dark:text-white">Profile</h4>

        <div class="bg-white p-6 rounded-md">
            <form method="POST" action="{{ url('tour-operator/edit-profile', [$tourOperator->serial]) }}">
                {{ csrf_field() }}

                {{-- Grid Container --}}
                <div class="grid grid-cols-1 gap-6">
                    <div class="flex items-center justify-center">
                        <img class="w-[150px] h-[150px] rounded-full" src="{{ asset('images/avatar_default.png') }}"
                            alt="image description">
                    </div>
                    {{-- Name --}}
                    <div>
                        <label for="name"
                            class="block mb-2 text-sm font-medium {{ $errors->has('name') ? 'text-red-700 dark:text-red-500' : 'text-gray-900 dark:text-white' }} ">Name</label>
                        <input type="text" id="name"
                            class="hover:cursor-not-allowed {{ $errors->has('name') ? 'bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500' : 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500' }}"
                            name="name" value="{{ $tourOperator->tour_operator_name ?? '' }}" disabled>
                        {{-- Error --}}
                        @if ($errors->has('name'))
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                    class="font-medium">{{ $errors->first('name') }}</span></p>
                        @endif
                    </div>
                    {{-- /Name --}}

                    {{-- Address --}}
                    <div>
                        <label for="address"
                            class="block mb-2 text-sm font-medium {{ $errors->has('address') ? 'text-red-700 dark:text-red-500' : 'text-gray-900 dark:text-white' }} ">Address</label>
                        <input type="text" id="address"
                            class="hover:cursor-not-allowed bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            name="address" value="{{ $tourOperator->tour_operator_address ?? '' }}" disabled>
                        {{-- Error --}}
                        @if ($errors->has('address'))
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                    class="font-medium">{{ $errors->first('address') }}</span></p>
                        @endif
                    </div>
                    {{-- /Address --}}

                    {{-- Company --}}
                    <div>
                        <label for="company"
                            class="block mb-2 text-sm font-medium {{ $errors->has('description') ? 'text-red-700 dark:text-red-500' : 'text-gray-900 dark:text-white' }} ">Company</label>
                        <input type="text" id="company"
                            class="hover:cursor-not-allowed bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            name="description" value="{{ $tourist->tour_operator_description ?? '' }}" disabled>
                        {{-- Error --}}
                        @if ($errors->has('personal_id'))
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                    class="font-medium">{{ $errors->first('description') }}</span></p>
                        @endif
                    </div>
                    {{-- /Compnay --}}

                    {{-- Phone --}}
                    <div>
                        <label for="phone"
                            class="block mb-2 text-sm font-medium {{ $errors->has('phone_number') ? 'text-red-700 dark:text-red-500' : 'text-gray-900 dark:text-white' }} ">Phone
                            number</label>
                        <input type="tel" id="phone"
                            class="hover:cursor-not-allowed bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            name="phone_number" value="{{ $tourOperator->tour_operator_phone_number ?? '' }}" disabled>
                        {{-- Error --}}
                        @if ($errors->has('phone_number'))
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                    class="font-medium">{{ $errors->first('phone_number') }}</span></p>
                        @endif
                    </div>
                    {{-- /Phone --}}

                    {{-- Tax --}}
                    <div>
                        <label for="tax"
                            class="block mb-2 text-sm font-medium {{ $errors->has('tax_number') ? 'text-red-700 dark:text-red-500' : 'text-gray-900 dark:text-white' }} ">Tax
                            number</label>
                        <input type="number" id="tax"
                            class="hover:cursor-not-allowed bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            name="tax_number" value="{{ $tourist->tour_operator_tax_number ?? '' }}" disabled>
                        {{-- Error --}}
                        @if ($errors->has('tax-number'))
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                    class="font-medium">{{ $errors->first('tax_number') }}</span></p>
                        @endif
                    </div>
                    {{-- Button --}}
                    <div class="flex justify-end items-center">
                        <a href="{{ url('/tour-operator/edit-profile') }}"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit Profile</a>
                    </div>
                </div>
                {{-- /Grid Container --}}

            </form>
        </div>
    </div>
@endsection
