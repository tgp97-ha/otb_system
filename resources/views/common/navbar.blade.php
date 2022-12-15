<nav class="fixed top-0 left-0 w-full px-2 bg-gray-900 border-gray-700">
    <div class="flex flex-wrap items-center justify-between">
        <a href="#" class="w-32 flex items-center">
            <img src="https://upload.wikimedia.org/wikipedia/commons/f/f1/Pornhub-logo.svg" alt="OTB Logo" />
        </a>

        <div class="" id="navbar-dropdown">
            <ul class="flex flex-col p-4 border rounded-lg bg-gray-800 border-gray-700">
                <li class="relative">
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                        class="flex items-center justify-between w-fullfont-medium  rounded text-gray-400 hover:text-white focus:text-white border-gray-700 hover:bg-gray-700">{{ 'Hello ' . auth()->user()->username }}
                        <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar"
                        class="absolute top-10 -right-6 z-10 hidden font-normal divide-y rounded shadow w-44 bg-gray-700 divide-gray-600">
                        <ul class="py-1 text-sm text-gray-400">
                            <li>
                                <a href="{{ url('tour-operator/profile', []) }}"
                                    class="block px-4 py-2 hover:bg-gray-600 hover:text-white">Profile</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-600 hover:text-white">Settings</a>
                            </li>
                        </ul>
                        <div class="py-1">
                            <a href="{{ url('/logout') }}"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                                class="block px-4 py-2 text-sm hover:bg-gray-600 text-gray-400 hover:text-white">Sign
                                out</a>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>

                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
