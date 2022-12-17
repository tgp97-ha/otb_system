@extends('layouts.dashboard')

@section('content')
    <div class="grid gap-y-6">
        <div class="grid grid-cols-4 gap-x-6">
            {{-- CARD 1 --}}
            <div class="flex justify-center rounded border-b-8 border-b-red-500">
                <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
                    <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Card title</h5>
                    <p class="text-gray-700 text-base mb-4">
                        Some quick example text to build on the card title and make up the bulk of the card's
                        content.
                    </p>
                </div>
            </div>
            {{-- CARD 2 --}}
            <div class="flex justify-center rounded border-b-8 border-b-green-500">
                <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
                    <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Card title</h5>
                    <p class="text-gray-700 text-base mb-4">
                        Some quick example text to build on the card title and make up the bulk of the card's
                        content.
                    </p>
                </div>
            </div>
            {{-- CARD 3 --}}
            <div class="flex justify-center rounded border-b-8 border-b-blue-500">
                <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
                    <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Card title</h5>
                    <p class="text-gray-700 text-base mb-4">
                        Some quick example text to build on the card title and make up the bulk of the card's
                        content.
                    </p>
                </div>
            </div>
            {{-- CARD 4 --}}
            <div class="flex justify-center rounded border-b-8 border-b-orange-500">
                <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
                    <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Card title</h5>
                    <p class="text-gray-700 text-base mb-4">
                        Some quick example text to build on the card title and make up the bulk of the card's
                        content.
                    </p>
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
            <div class="flex justify-center rounded border-b-8 border-b-red-500">
                <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
                    <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Card title</h5>
                    <p class="text-gray-700 text-base mb-4">
                        Some quick example text to build on the card title and make up the bulk of the card's
                        content.
                    </p>
                </div>
            </div>
            {{-- CARD 2 --}}
            <div class="flex justify-center rounded border-b-8 border-b-green-500">
                <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
                    <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Card title</h5>
                    <p class="text-gray-700 text-base mb-4">
                        Some quick example text to build on the card title and make up the bulk of the card's
                        content.
                    </p>
                </div>
            </div>
            {{-- CARD 3 --}}
            <div class="flex justify-center rounded border-b-8 border-b-blue-500">
                <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
                    <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Card title</h5>
                    <p class="text-gray-700 text-base mb-4">
                        Some quick example text to build on the card title and make up the bulk of the card's
                        content.
                    </p>
                </div>
            </div>
            {{-- CARD 4 --}}
            <div class="flex justify-center rounded border-b-8 border-b-orange-500">
                <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
                    <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Card title</h5>
                    <p class="text-gray-700 text-base mb-4">
                        Some quick example text to build on the card title and make up the bulk of the card's
                        content.
                    </p>
                </div>
            </div>

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
