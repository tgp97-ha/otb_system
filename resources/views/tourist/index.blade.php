@extends('layout.management')

@section('content')
    {{-- Search Operator --}}
    {{-- <div class="card">
        <div class="card-header">Search Tour Operator</div>
        <div class="card-body">
            <form method="POST" action="{{ url('/tourist/list/') }}">
                @csrf
                <div class="row form-group offset-md-1">
                    <div class="col-3">Name</div>
                    <div class="col-9">
                        <input id="name" type="text" class="form-control" name="name">
                    </div>
                </div>
                <div class="row form-group offset-md-1">
                    <div class="col-3">Personal ID</div>
                    <div class="col-9">
                        <input id="personal_id" type="number" class="form-control" name="personal_id">
                    </div>
                </div>
                <div class="row form-group offset-md-1">
                    <div class="col-3">Address</div>
                    <div class="col-9">
                        <input id="address" type="number" class="form-control" name="address">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-10 offset-md-1">
                        <button type="submit" class="btn btn-primary float-right">
                            Search Tourist
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div> --}}
    {{-- /Search Operator --}}

    {{-- Operator List --}}
    <div class="">
        <h5 class="text-xl font-bold mb-4 ml-4">Tourist List</h5>
        <div class="flex items-center justify-between pb-4 bg-white">
            <table class="w-full text-sm text-left text-gray-500 rounded-lg shadow-md">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3">Name</th>
                        <th class="px-6 py-3">Address</th>
                        <th class="px-6 py-3">Date of Birth</th>
                        <th class="px-6 py-3">Personal ID </th>
                        <th class="px-6 py-3">Phone Number </th>
                        <th class="px-6 py-3">Functions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tourists as $tourist)
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <td class="px-6 py-4">{{ $tourist->tourist_name }}</td>
                            <td class="px-6 py-4">{{ $tourist->address }}</td>
                            <td class="px-6 py-4">{{ $tourist->date_of_birth }}</td>
                            <td class="px-6 py-4">{{ $tourist->tourist_phone_number }}</td>
                            <td class="px-6 py-4">{{ $tourist->tourist_personal_id }}</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2"
                                        href="{{ url('/tourist/detail/' . $tourist->serial) }}">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                            </path>
                                        </svg>
                                        Detail
                                    </a>
                                    <form class="" action="{{ url('/tourist/delete/' . $tourist->serial) }}"
                                        method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit"
                                            class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
                                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                </path>
                                            </svg>
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
    {{-- /Operator List --}}
@endsection
