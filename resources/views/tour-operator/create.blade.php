@extends('layout.tour-operator')

@section('content')
    {{-- Flex Container --}}
    <div class="flex justify-between items-center">
        <a href="javascript:history.back()" class="w-20">
            <i class="fa fa-arrow-left"></i>
            Back
        </a>
        <h3 class="flex-auto uppercase -translate-x-6 text-center text-2xl font-semibold text-gray-900">
            Create Tour
        </h3>
    </div>

    {{-- Create Form --}}
    <form method="POST" action="/tour-operator/tours" enctype="multipart/form-data"
        class="grid grid-cols-3 gap-x-8 gap-y-4 w-1/2 mx-auto mt-4">
        @csrf
        <div class="col-span-3">
            <label class="block mb-2 text-sm font-medium text-gray-900 ">
                Name
            </label>
            <input type="text"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                placeholder=" " required>
        </div>
        <div class="col-span-3">
            <label class="block mb-2 text-sm font-medium text-gray-900 ">
                Title
            </label>
            <input type="text"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                placeholder=" " required>
        </div>
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 ">
                Destination
            </label>
            <input type="text"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                placeholder=" " required>
        </div>

        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 ">
                Day Length
            </label>
            <input type="text"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                placeholder=" " required>
        </div>
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 ">
                Night Length
            </label>
            <input type="text"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                placeholder=" " required>
        </div>

        <div class="relative">
            <label class="block mb-2 text-sm font-medium text-gray-900 ">
                Start Date
            </label>
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="mt-4 w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
            <input datepicker datepicker-autohide type="text"
                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5"
                placeholder="Select date">
        </div>
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 ">
                Total Slots
            </label>
            <input type="text"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                placeholder=" " required>
        </div>
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 ">
                Slots Left
            </label>
            <input type="text"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                placeholder=" " required>
        </div>
        <div class="col-span-3">
            <label class="block mb-2 text-sm font-medium text-gray-900">
                Tour Images
            </label>
            <input id="file"
                class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer focus:outline-none"
                type="file" name="my_file" onchange="javascript:updateList()" multiple>
            <div id="fileList"></div>
        </div>
        <button type="submit"
            class="col-start-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">
            Create
        </button>
    </form>
@endsection
