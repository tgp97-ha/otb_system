@extends('layout.base')

@section('content')
    <div class="w-[40%] mx-auto bg-white p-6 rounded-lg">
        <h1 class="text-2xl font-bold text-gray-900 mb-6">Register as tour operator</h1>
        <form class="" method="POST" action="{{ route('tour-operator.store') }}">
            {{ csrf_field() }}
            <div class="grid grid-cols-1 gap-6">
                <div>
                    <label for="name" class="control-label">Tour Operator Name</label>
                    <input id="name" type="text"
                        class="{{ $errors->has('name') ? 'border-red-500 focus:ring-red-600 focus:border-red-600' : 'border-gray-300 focus:ring-blue-500 focus:border-blue-500' }} block w-full p-2.5 border bg-gray-50 text-gray-900 text-sm rounded-lg"
                        name="name" required autofocus>

                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div>
                    <label for="address" class="control-label">Address</label>
                    <input id="address" type="text"
                        class="{{ $errors->has('address') ? 'border-red-500 focus:ring-red-600 focus:border-red-600' : 'border-gray-300 focus:ring-blue-500 focus:border-blue-500' }} block w-full p-2.5 border bg-gray-50 text-gray-900 text-sm rounded-lg"
                        name="address" required autofocus>

                    @if ($errors->has('address'))
                        <span class="help-block">
                            <strong>{{ $errors->first('address') }}</strong>
                        </span>
                    @endif
                </div>
                <div>
                    <label for="phone_number" class="control-label">Phone Number</label>
                    <input id="phone_number" type="number"
                        class="{{ $errors->has('phone_number') ? 'border-red-500 focus:ring-red-600 focus:border-red-600' : 'border-gray-300 focus:ring-blue-500 focus:border-blue-500' }} block w-full p-2.5 border bg-gray-50 text-gray-900 text-sm rounded-lg"
                        name="phone_number" required>

                    @if ($errors->has('phone_number'))
                        <span class="help-block">
                            <strong>{{ $errors->first('phone_number') }}</strong>
                        </span>
                    @endif
                </div>
                <div>
                    <label for="tax_number" class="control-label">Tax Number</label>
                    <input id="tax_number" type="number"
                        class="{{ $errors->has('tax_number') ? 'border-red-500 focus:ring-red-600 focus:border-red-600' : 'border-gray-300 focus:ring-blue-500 focus:border-blue-500' }} block w-full p-2.5 border bg-gray-50 text-gray-900 text-sm rounded-lg"
                        name="tax_number" required>
                    @if ($errors->has('tax_number'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tax_number') }}</strong>
                        </span>
                    @endif
                </div>
                <div>
                    <label for="description" class="control-label">Company Description</label>
                    <textarea id="description" type="text"
                        class="{{ $errors->has('description') ? 'border-red-500 focus:ring-red-600 focus:border-red-600' : 'border-gray-300 focus:ring-blue-500 focus:border-blue-500' }} block w-full p-2.5 border bg-gray-50 text-gray-900 text-sm rounded-lg"
                        name="description" required></textarea>

                    @if ($errors->has('description'))
                        <span class="help-block">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="flex justify-center items-center mt-6">
                    <button type="submit"
                        class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5">
                        Register Tour Operator
                    </button>
                </div>
            </div>


        </form>
    </div>
@endsection
