@section('nav')
    <nav id="navbar"
        class="transition-all ease-in-out duration-300 fixed top-0 left-0 w-full z-50 bg-white border border-gray-200 px-2 py-2 rounded-md shadow-md dark:bg-gray-900">
        <div class="container flex flex-wrap items-center justify-between mx-auto">
            <a class="flex items-center" href="/">
                <img src="{{ asset('images/logo1.jpg') }}" alt="" class="w-16">
                <h3 class="text-3xl font-bold dark:text-white">
                    OTB System
                </h3>
            </a>
            @if (Route::current()->uri == 'tour/detail/{id}')
                <ul
                    class="flex flex-col border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#overview"
                            class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white">
                            Overview
                        </a>
                    </li>
                    <li>
                        <a href="#itinerary"
                            class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white">
                            Itinerary
                        </a>
                    </li>
                    <li>
                        <a href="#location"
                            class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white">
                            Location
                        </a>
                    </li>
                    <li>
                        <a href="#reviews"
                            class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white">
                            Reviews
                        </a>
                    </li>
                </ul>
            @endif

            @if (!Auth::guest())
                <div class="flex items-center">
                    <button
                        class="flex items-center text-base rounded-lg bg-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                        data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                        <img class="mr-2 w-8 h-8 rounded-full" src="{{ asset('images/avatar_default.png') }}"
                            alt="user photo">
                        <span class="mr-1 font-medium text-gray-900">{{ 'Hello ' . auth()->user()->username }}</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>

                    {{-- Dropdown Menu --}}
                    <div id="user-dropdown"
                        class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600">
                        <div class="px-4 py-3">
                            @if (Auth::user()->can('admin'))
                                <span class="block text-sm text-gray-900 dark:text-white">Admin</span>
                            @elseif(Auth::user()->can('tour-operator'))
                                <span class="block text-sm text-gray-900 dark:text-white">Agency</span>
                            @else
                                <span class="block text-sm text-gray-900 dark:text-white">User</span>
                            @endif
                            <span
                                class="block text-sm font-medium text-gray-500 truncate dark:text-gray-400">{{ auth()->user()->email }}</span>
                            <ul class="mt-2 border-t py-1">
                                @canany(['tourist', 'tour-operator'])
                                    <li>
                                        <a href="{{ Auth::user()->can('tourist') ? url('tourist/profile') : url('/tour-operator/profile/') }}"
                                            class="flex justify-between items-center py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                            <span class="font-medium text-sm text-gray-900">My Profile</span>
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                                </path>
                                            </svg>
                                        </a>

                                    </li>
                                @endcanany
                                <li>
                                    <a class="flex justify-between items-center py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                                        href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        <span class="font-medium text-sm text-red-500">Sign out</span>
                                        <svg class="w-6 h-6" fill="none" stroke="red" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                            </path>
                                        </svg>
                                    </a>
                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                        style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                    {{-- /Dropdown Menu --}}

                </div>
            @else
                @if (Route::currentRouteName() == null)
                    <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                        href="{{ url('/login') }}">
                        Sign In
                    </a>
                    <form id="logout-form" action="{{ url('/login') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                @else
                    <div>
                        <a href="{{ url('/register/tourist/') }}"
                            class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">Register
                            as Tourist</a>
                        <a href="{{ url('/register/tour-operator') }}"
                            class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">Register
                            as Tour Operator</a>
                    </div>
                @endif
            @endif
        </div>
    </nav>
@show
