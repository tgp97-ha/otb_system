@extends('layouts.dashboard')

@section('content')
    <div class="grid gap-y-6">

        <ul
            class="w-full sm:w-4/5 text-xs sm:text-sm justify-center lg:justify-end items-center flex flex-row space-x-1 mt-6 overflow-hidden mb-4">
            <li><button
                    class="px-4 py-2 bg-indigo-500 rounded-full text-sm text-gray-100 hover:bg-indigo-700 hover:text-gray-200">30
                    days</button></li>
            <li><button
                    class="px-4 py-2 bg-gray-200 rounded-full text-sm text-gray-700 hover:bg-indigo-700 hover:text-gray-200">90
                    days</button></li>
            <li><button
                    class="px-4 py-2 bg-gray-200 rounded-full text-sm text-gray-700 hover:bg-indigo-700 hover:text-gray-200">6
                    months</button></li>
            <li><button
                    class="px-4 py-2 bg-gray-200 rounded-full text-sm text-gray-700 hover:bg-indigo-700 hover:text-gray-200">12
                    months</button></li>
        </ul>
        <div class="grid gap-7 sm:grid-cols-2 lg:grid-cols-4">
            <div class="p-5 bg-white rounded shadow-sm dark:bg-gray-800">
                <div class="text-base text-gray-400 dark:text-gray-300">Total Sales</div>
                <div class="flex items-center pt-1">
                    <div class="text-2xl font-bold text-gray-900 dark:text-gray-100">$9850.90</div>
                    <span
                        class="flex items-center px-2 py-0.5 mx-2 text-sm rounded-full text-green-600 bg-green-100 dark:bg-green-900 dark:text-emerald-400">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 15L12 9L6 15" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </svg>
                        <span>1.8%</span>
                    </span>
                </div>
            </div>
            <div class="p-5 bg-white rounded shadow-sm dark:bg-gray-800">
                <div class="text-base text-gray-400 dark:text-gray-300">Net Revenue</div>
                <div class="flex items-center pt-1">
                    <div class="text-2xl font-bold text-gray-900 dark:text-gray-100">$7520.50</div>
                    <span
                        class="flex items-center px-2 py-0.5 mx-2 text-sm rounded-full text-red-600 bg-red-100 dark:bg-red-900 dark:text-red-300">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </svg>
                        <span>2.5%</span>
                    </span>
                </div>
            </div>
            <div class="p-5 bg-white rounded shadow-sm dark:bg-gray-800">
                <div class="text-base text-gray-400 dark:text-gray-300">Customers</div>
                <div class="flex items-center pt-1">
                    <div class="text-2xl font-bold text-gray-900 dark:text-gray-100">1375</div>
                    <span
                        class="flex items-center px-2 py-0.5 mx-2 text-sm rounded-full text-green-600 bg-green-100 dark:bg-green-900 dark:text-emerald-400">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 15L12 9L6 15" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </svg>
                        <span>5.2%</span>
                    </span>
                </div>
            </div>
            <div class="p-5 bg-white rounded shadow-sm dark:bg-gray-800">
                <div class="text-base text-gray-400 dark:text-gray-300">MRR</div>
                <div class="flex items-center pt-1">
                    <div class="text-2xl font-bold text-gray-900 dark:text-gray-100">$250.00</div>
                    <span
                        class="flex items-center px-2 py-0.5 mx-2 text-sm rounded-full text-green-600 bg-green-100 dark:bg-green-900 dark:text-emerald-400">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 15L12 9L6 15" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </svg>
                        <span>2.2%</span>
                    </span>
                </div>
            </div>
        </div>


        <div class="grid grid-cols-3 gap-x-6">
            {{-- BAR CHART --}}
            <div class="col-span-2">
                <div class="shadow-lg rounded-lg overflow-hidden">
                    <div class="py-3 px-5 bg-gray-50">Bar chart</div>
                    <canvas class="p-10" id="chartBar"></canvas>
                </div>

                <!-- Required chart.js -->
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                <!-- Chart bar -->
                <script>
                    const labelsBarChart = [
                        "January",
                        "February",
                        "March",
                        "April",
                        "May",
                        "June",
                    ];
                    const dataBarChart = {
                        labels: labelsBarChart,
                        datasets: [{
                            label: "My First dataset",
                            backgroundColor: "hsl(252, 82.9%, 67.8%)",
                            borderColor: "hsl(252, 82.9%, 67.8%)",
                            data: [0, 10, 5, 2, 20, 30, 45],
                        }, ],
                    };

                    const configBarChart = {
                        type: "bar",
                        data: dataBarChart,
                        options: {},
                    };

                    var chartBar = new Chart(
                        document.getElementById("chartBar"),
                        configBarChart
                    );
                </script>
            </div>
            {{-- DOUGHNUT CHART --}}
            <div class="col-span-1">
                <div class="shadow-lg rounded-lg overflow-hidden">
                    <div class="py-3 px-5 bg-gray-50">Doughnut chart</div>
                    <canvas class="p-10" id="chartDoughnut"></canvas>
                </div>

                <!-- Required chart.js -->
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                <!-- Chart doughnut -->
                <script>
                    const dataDoughnut = {
                        labels: ["JavaScript", "Python", "Ruby"],
                        datasets: [{
                            label: "My First Dataset",
                            data: [300, 50, 100],
                            backgroundColor: [
                                "rgb(133, 105, 241)",
                                "rgb(164, 101, 241)",
                                "rgb(101, 143, 241)",
                            ],
                            hoverOffset: 4,
                        }, ],
                    };

                    const configDoughnut = {
                        type: "doughnut",
                        data: dataDoughnut,
                        options: {},
                    };

                    var chartBar = new Chart(
                        document.getElementById("chartDoughnut"),
                        configDoughnut
                    );
                </script>
            </div>
        </div>
        <div class="grid grid-cols-4 gap-x-6">
            {{-- CARD 1 --}}
            {{-- <div class="flex justify-center rounded border-b-8 border-b-red-500">
                <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
                    <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Card title</h5>
                    <p class="text-gray-700 text-base mb-4">
                        Some quick example text to build on the card title and make up the bulk of the card's
                        content.
                    </p>
                </div>
            </div> --}}
            {{-- CARD 2 --}}
            {{-- <div class="flex justify-center rounded border-b-8 border-b-green-500">
                <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
                    <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Card title</h5>
                    <p class="text-gray-700 text-base mb-4">
                        Some quick example text to build on the card title and make up the bulk of the card's
                        content.
                    </p>
                </div>
            </div> --}}
            {{-- CARD 3 --}}
            {{-- <div class="flex justify-center rounded border-b-8 border-b-blue-500">
                <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
                    <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Card title</h5>
                    <p class="text-gray-700 text-base mb-4">
                        Some quick example text to build on the card title and make up the bulk of the card's
                        content.
                    </p>
                </div>
            </div> --}}
            {{-- CARD 4 --}}
            {{-- <div class="flex justify-center rounded border-b-8 border-b-orange-500">
                <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
                    <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Card title</h5>
                    <p class="text-gray-700 text-base mb-4">
                        Some quick example text to build on the card title and make up the bulk of the card's
                        content.
                    </p>
                </div>
            </div> --}}
        </div>

        <div class="grid grid-cols-4 gap-x-6">
            {{-- dashboard card --}}
            {{-- CARD 1 --}}
            <div class="w-full p-2">
                <div
                    class="flex flex-col px-6 py-10 overflow-hidden bg-white hover:bg-gradient-to-br hover:from-purple-400 hover:via-blue-400 hover:to-blue-500 rounded-xl shadow-lg duration-300 hover:shadow-2xl group">
                    <div class="flex flex-row justify-between items-center">
                        <div class="px-4 py-4 bg-gray-300  rounded-xl bg-opacity-30">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 group-hover:text-gray-50"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                                <path fill-rule="evenodd"
                                    d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="inline-flex text-sm text-gray-600 group-hover:text-gray-200 sm:text-base">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 mr-2 text-green-500 group-hover:text-gray-200" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            12%
                        </div>
                    </div>
                    <h1 class="text-3xl sm:text-4xl xl:text-5xl font-bold text-gray-700 mt-12 group-hover:text-gray-50">
                        42.34%</h1>
                    <div class="flex flex-row justify-between group-hover:text-gray-200">
                        <p>Bounce Rate</p>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 text-indigo-600 group-hover:text-gray-200" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
            {{-- CARD 2 --}}
            <div class="w-full p-2">
                <div
                    class="flex flex-col px-6 py-10 overflow-hidden bg-white hover:bg-gradient-to-br hover:from-purple-400 hover:via-blue-400 hover:to-blue-500 rounded-xl shadow-lg duration-300 hover:shadow-2xl group">
                    <div class="flex flex-row justify-between items-center">
                        <div class="px-4 py-4 bg-gray-300  rounded-xl bg-opacity-30">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 group-hover:text-gray-50"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z" />
                            </svg>
                        </div>
                        <div class="inline-flex text-sm text-gray-600 group-hover:text-gray-200 sm:text-base">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 mr-2 text-green-500 group-hover:text-gray-200" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            12%
                        </div>
                    </div>
                    <h1 class="text-3xl sm:text-4xl xl:text-5xl font-bold text-gray-700 mt-12 group-hover:text-gray-50">
                        42.34%</h1>
                    <div class="flex flex-row justify-between group-hover:text-gray-200">
                        <p>Page Per Visits</p>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 text-indigo-600 group-hover:text-gray-200" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
            {{-- CARD 3 --}}
            <div class="w-full p-2">
                <div
                    class="flex flex-col px-6 py-10 overflow-hidden bg-white hover:bg-gradient-to-br hover:from-purple-400 hover:via-blue-400 hover:to-blue-500 rounded-xl shadow-lg duration-300 hover:shadow-2xl group">
                    <div class="flex flex-row justify-between items-center">
                        <div class="px-4 py-4 bg-gray-300  rounded-xl bg-opacity-30">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 group-hover:text-gray-50"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                                <path fill-rule="evenodd"
                                    d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="inline-flex text-sm text-gray-600 group-hover:text-gray-200 sm:text-base">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 mr-2 text-green-500 group-hover:text-gray-200" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            12%
                        </div>
                    </div>
                    <h1 class="text-3xl sm:text-4xl xl:text-5xl font-bold text-gray-700 mt-12 group-hover:text-gray-50">
                        42.34k</h1>
                    <div class="flex flex-row justify-between group-hover:text-gray-200">
                        <p>Total Monthly Visits</p>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 text-indigo-600 group-hover:text-gray-200" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
            {{-- CARD 4 --}}
            <div class="w-full p-2">
                <div
                    class="flex flex-col px-6 py-10 overflow-hidden bg-white hover:bg-gradient-to-br hover:from-purple-400 hover:via-blue-400 hover:to-blue-500 rounded-xl shadow-lg duration-300 hover:shadow-2xl group">
                    <div class="flex flex-row justify-between items-center">
                        <div class="px-4 py-4 bg-gray-300  rounded-xl bg-opacity-30">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 group-hover:text-gray-50"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="inline-flex text-sm text-gray-600 group-hover:text-gray-200 sm:text-base">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 mr-2 text-green-500 group-hover:text-gray-200" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            12%
                        </div>
                    </div>
                    <h1 class="text-3xl sm:text-4xl xl:text-5xl font-bold text-gray-700 mt-12 group-hover:text-gray-50">
                        00:03:20%
                    </h1>
                    <div class="flex flex-row justify-between group-hover:text-gray-200">
                        <p>Avg. Visit Duration</p>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 text-indigo-600 group-hover:text-gray-200" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
            {{-- / dashboard card --}}

        </div>
        <div class="grid grid-cols-3 gap-x-6">
            <div class="col-span-1">
                <div class="shadow-lg rounded-lg overflow-hidden">
                    <div class="py-3 px-5 bg-gray-50">Radar chart</div>
                    <canvas class="p-10" id="chartRadar"></canvas>
                </div>

                <!-- Required chart.js -->
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                <!-- Chart radar -->
                <script>
                    const dataRadar = {
                        labels: [
                            "Eating",
                            "Drinking",
                            "Sleeping",
                            "Designing",
                            "Coding",
                            "Cycling",
                            "Running",
                        ],
                        datasets: [{
                                label: "My First Dataset",
                                data: [65, 59, 90, 81, 56, 55, 40],
                                fill: true,
                                backgroundColor: "rgba(133, 105, 241, 0.2)",
                                borderColor: "rgb(133, 105, 241)",
                                pointBackgroundColor: "rgb(133, 105, 241)",
                                pointBorderColor: "#fff",
                                pointHoverBackgroundColor: "#fff",
                                pointHoverBorderColor: "rgb(133, 105, 241)",
                            },
                            {
                                label: "My Second Dataset",
                                data: [28, 48, 40, 19, 96, 27, 100],
                                fill: true,
                                backgroundColor: "rgba(54, 162, 235, 0.2)",
                                borderColor: "rgb(54, 162, 235)",
                                pointBackgroundColor: "rgb(54, 162, 235)",
                                pointBorderColor: "#fff",
                                pointHoverBackgroundColor: "#fff",
                                pointHoverBorderColor: "rgb(54, 162, 235)",
                            },
                        ],
                    };

                    const configRadarChart = {
                        type: "radar",
                        data: dataRadar,
                        options: {},
                    };

                    var chartBar = new Chart(
                        document.getElementById("chartRadar"),
                        configRadarChart
                    );
                </script>
            </div>
            <div class="col-span-2">
                <div class="shadow-lg rounded-lg overflow-hidden">
                    <div class="py-3 px-5 bg-gray-50">Line chart</div>
                    <canvas class="p-10" id="chartLine"></canvas>
                </div>

                <!-- Required chart.js -->
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                <!-- Chart line -->
                <script>
                    const labels = ["January", "February", "March", "April", "May", "June"];
                    const data = {
                        labels: labels,
                        datasets: [{
                            label: "My First dataset",
                            backgroundColor: "hsl(252, 82.9%, 67.8%)",
                            borderColor: "hsl(252, 82.9%, 67.8%)",
                            data: [0, 10, 5, 2, 20, 30, 45],
                        }, ],
                    };

                    const configLineChart = {
                        type: "line",
                        data,
                        options: {},
                    };

                    var chartLine = new Chart(
                        document.getElementById("chartLine"),
                        configLineChart
                    );
                </script>
            </div>

        </div>
    </div>
@endsection
