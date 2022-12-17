    <nav
        class="fixed top-0 left-0 w-full flex flex-wrap items-center justify-between py-3 bg-gray-900 text-gray-200 shadow-lg navbar navbar-expand-lg navbar-light z-50">
        <div class="container-fluid w-full flex flex-wrap items-center justify-between px-2">
            <button
                class="navbar-toggler text-gray-200 border-0 hover:shadow-none hover:no-underline py-2 px-2.5 bg-transparent focus:outline-none focus:ring-0 focus:shadow-none focus:no-underline"
                type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent1"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" class="w-6"
                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="currentColor"
                        d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z">
                    </path>
                </svg>
            </button>
            <div class="collapse navbar-collapse flex-grow items-center" id="navbarSupportedContent1">
                <a class="text-xl text-white pr-2 font-semibold" href="{{ url('/') }}">Online Tour Booking</a>
            </div>
            <!-- Collapsible wrapper -->
            @if (Auth::guest())
                <div class="flex space-x-2 justify-center">
                    <a href="{{ url('/login') }}">
                        <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light"
                            class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                            Sign In
                        </button>
                    </a>
                    <form id="logout-form" action="{{ url('/login') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                </div>
            @endif
            @if (!Auth::guest())
                <!-- Right elements -->
                <div class="flex items-center relative">
                    <!-- Icon -->
                    <span>{{ 'Hello ' . auth()->user()->username }}</span>
                    <div class="dropdown relative ml-3">
                        <a class="dropdown-toggle flex items-center hidden-arrow" href="#"
                            id="dropdownMenuButton2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://mdbootstrap.com/img/new/avatars/2.jpg" class="rounded-full"
                                style="height: 25px; width: 25px" alt="" loading="lazy" />
                        </a>
                        <ul class="dropdown-menu min-w-max absolute bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none left-auto right-0"
                            aria-labelledby="dropdownMenuButton2">
                            <li>
                                <span class="ml-2 mb-2 text-black font-bold">Account</span>
                            </li>
                            <li class="hover:bg-gray-300">
                                <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100"
                                    href="#">Edit profile</a>
                            </li>
                            <li class="hover:bg-gray-300">
                                <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                                    href="{{ url('/logout') }}">Sign out</a>
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                    style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Right elements -->
            @endif
        </div>
    </nav>
