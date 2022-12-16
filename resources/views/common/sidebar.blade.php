    {{-- <div class="w-64 border-2 border-red-500 h-screen">
        @can('tourist')
            <a href="{{ url('/tour/') }}" class="">Tours</a>
            <a href="{{ url('/tourist/my-tours') }}" class="">My Tours</a>
            <a href="{{ url('tourist/profile') }}" class="">My Profiles</a>
        @endcan
        @can('tour-operator')
            sidebar
            <a href="{{ url('/tour-operator/profile/') }}" class="">Profiles</a>
            <a href="{{ url('/tour/') }}" class="">Tours Management</a>
            <a href="{{ url('/tour/create') }}" class="">Create Tour</a>
            <a href="#" class="">Tours analysis</a>
        @endcan
        @can('admin')
            <a href="{{ url('/tour/') }}" class="">Tours Management</a>
            <a href="{{ route('tourist.index') }}" class="">Tourist Management</a>
            <a href="{{ route('tour-operator.index') }}" class="">Tour Operator Management</a>
        @endcan
    </div> --}}

    @if (!Auth::guest())
        <aside class="fixed w-64 h-screen">
            <div class="h-full overflow-y-auto py-4 px-3 bg-gray-800">
                <ul class="space-y-2">
                    <li>
                        <a href="#"
                            class="flex items-center p-2 text-base font-normal rounded-lg text-white hover:bg-gray-700">
                            <svg aria-hidden="true"
                                class="w-6 h-6 transition duration-75 text-gray-400 group-hover:text-white"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                            </svg>
                            <span class="ml-3">Dashboard</span>
                        </a>
                    </li>
                    @can('tourist')
                        <li>
                            <a href="#"
                                class="flex items-center p-2 text-base font-normal rounded-lg text-white hover:bg-gray-700">
                                <svg aria-hidden="true"
                                    class="flex-shrink-0 w-6 h-6 transition duration-75 text-gray-400 group-hover:text-white"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                                    </path>
                                </svg>
                                <span class="ml-3 whitespace-nowrap">My Tours</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center p-2 text-base font-normal rounded-lg text-white hover:bg-gray-700">
                                <svg aria-hidden="true"
                                    class="flex-shrink-0 w-6 h-6 transition duration-75 text-gray-400 group-hover:text-white"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                                    </path>
                                </svg>
                                <span class="ml-3 whitespace-nowrap">Profile</span>
                            </a>
                        </li>
                    @endcan
                    @can('tour-operator')
                        <li>
                            <a href="#"
                                class="flex items-center p-2 text-base font-normal rounded-lg text-white hover:bg-gray-700">
                                <svg aria-hidden="true"
                                    class="flex-shrink-0 w-6 h-6 transition duration-75 text-gray-400 group-hover:text-white"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                                    </path>
                                </svg>
                                <span class="ml-3 whitespace-nowrap">Tours Management</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center p-2 text-base font-normal rounded-lg text-white hover:bg-gray-700">
                                <svg aria-hidden="true"
                                    class="flex-shrink-0 w-6 h-6 transition duration-75 text-gray-400 group-hover:text-white"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="ml-3 whitespace-nowrap">Profile</span>
                            </a>
                        </li>
                    @endcan
                    @can('admin')
                        <li>
                            <a href="#"
                                class="flex items-center p-2 text-base font-normal rounded-lg text-white hover:bg-gray-700">
                                <svg aria-hidden="true"
                                    class="flex-shrink-0 w-6 h-6 transition duration-75 text-gray-400 group-hover:text-white"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                                    </path>
                                </svg>
                                <span class="ml-3 whitespace-nowrap">Tours Management</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center p-2 text-base font-normal rounded-lg text-white hover:bg-gray-700">
                                <svg aria-hidden="true"
                                    class="flex-shrink-0 w-6 h-6 transition duration-75 text-gray-400 group-hover:text-white"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="ml-3 whitespace-nowrap">Tourist Management/span>
                            </a>
                        </li>
                    @endcan
                </ul>
                <ul class="pt-4 mt-4 space-y-2 border-t border-gray-700">
                    <li>
                        <a href="#"
                            class="flex items-center p-2 text-base font-normal rounded-lg transition duration-75 hover:bg-gray-700 text-white group">
                            <svg aria-hidden="true"
                                class="flex-shrink-0 w-6 h-6 transition duration-75 text-gray-400 group-hover:text-white"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                                <path fill-rule="evenodd"
                                    d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-3">Documentation</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center p-2 text-base font-normal rounded-lg transition duration-75 hover:bg-gray-700 text-white group">
                            <svg aria-hidden="true"
                                class="flex-shrink-0 w-6 h-6 transition duration-75 text-gray-400 group-hover:text-white"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-3">Help</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center p-2 text-base font-normal rounded-lg text-white hover:bg-gray-700">
                            <svg aria-hidden="true"
                                class="flex-shrink-0 w-6 h-6 transition duration-75 text-gray-400 group-hover:text-white"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Sign In</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
    @endif
