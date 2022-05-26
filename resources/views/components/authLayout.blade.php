<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>

<body>
    <div class="flex">
        <div class="bg-[#3D405B] h-screen w-[20em]">
            <div class="px-5 py-2">
                <div class="my-5 flex justify-center">
                    <img src="{{ asset('images/logoImage.png') }}" alt="HELLO WORLD" height="200" width="200">
                </div>
                <div class="mt-10 text-gray-400 flex flex-col gap-4 w-full">
                    <a href="{{ route('dashboard') }}"
                        class="text-base font-medium tracking-wider border-2 border-gray-500 rounded-sm px-5 py-3 hover:border-gray-300 transition-all hover:text-gray-300 cursor-pointer">
                        Dashboard
                    </a>
                    <a href="{{ route('registrationForm') }}"
                        class="text-base font-medium tracking-wider border-2 border-gray-500 rounded-sm px-5 py-3 hover:border-gray-300 transition-all hover:text-gray-300 cursor-pointer">
                        Registration Form
                    </a>
                    <a href="{{ route('tracking') }}"
                        class="text-base font-medium tracking-wider border-2 border-gray-500 rounded-sm px-5 py-3 hover:border-gray-300 transition-all hover:text-gray-300 cursor-pointer">
                        Tracking
                    </a>
                    <a href="{{ route('beneficiaries') }}"
                        class="text-base font-medium tracking-wider border-2 border-gray-500 rounded-sm px-5 py-3 hover:border-gray-300 transition-all hover:text-gray-300 cursor-pointer">
                        Beneficiaries
                    </a>
                    <a href=""
                        class="text-base font-medium tracking-wider border-2 border-gray-500 rounded-sm px-5 py-3 hover:border-gray-300 transition-all hover:text-gray-300 cursor-pointer">
                        Report
                    </a>
                    <a href=""
                        class="text-base font-medium tracking-wider border-2 border-gray-500 rounded-sm px-5 py-3 hover:border-gray-300 transition-all hover:text-gray-300 cursor-pointer">
                        Setting
                    </a>
                    <a href="{{ route('logout') }}"
                        class="text-base font-medium tracking-wider border-2 border-gray-500 rounded-sm px-5 py-3 hover:border-gray-300 transition-all hover:text-gray-300 cursor-pointer">
                        Log out
                    </a>
                </div>
            </div>
        </div>
        <div class="w-screen h-screen bg-gray-200">
            <div class="p-5 w-full">
                @yield('contents')
            </div>
            {{-- {{ print_r($data ?? '') }} --}}
        </div>
    </div>
</body>

</html>
<script>
    const ctx_1 = document.getElementById('dashboard_1').getContext('2d');
    const ctx_2 = document.getElementById('dashboard_2').getContext('2d');
    const ctx_3 = document.getElementById('dashboard_3').getContext('2d');
    const myChart_1 = new Chart(ctx_1, {
        type: 'bar',
        data: {
            labels: ['SENTRONG IBABA', 'SENTRONG KABILA', 'SALIW IBABA', 'MAULABE', 'SENTRONG ILAYA',
                'NABALAGBAG', 'SALIW ILAYA'
            ],
            datasets: [{
                label: '# of Beneficiary',
                data: [
                    {{ count(array_filter($data ?? [],function ($d) {return $d['sitio'] == 'SENTRONG IBABA';},0)) }},
                    {{ count(array_filter($data ?? [],function ($d) {return $d['sitio'] == 'SENTRONG KABILA';},0)) }},
                    {{ count(array_filter($data ?? [],function ($d) {return $d['sitio'] == 'SALIW IBABA';},0)) }},
                    {{ count(array_filter($data ?? [],function ($d) {return $d['sitio'] == 'MAULABE';},0)) }},
                    {{ count(array_filter($data ?? [],function ($d) {return $d['sitio'] == 'SENTRONG ILAYA';},0)) }},
                    {{ count(array_filter($data ?? [],function ($d) {return $d['sitio'] == 'NABALAGBAG';},0)) }},
                    {{ count(array_filter($data ?? [],function ($d) {return $d['sitio'] == 'SALIW ILAYA';},0)) }},
                ],
                backgroundColor: [
                    'rgba(208, 0, 0, 0.2)',
                    'rgba(255, 186, 8, 0.2)',
                    'rgba(63, 136, 197, 0.2)',
                    'rgba(3, 43, 67, 0.2)',
                    'rgba(19, 111, 99, 0.2)',
                    'rgba(168, 213, 226, 0.2)',
                    'rgba(249, 166, 32, 0.2)'
                ],
                borderColor: [
                    'rgba(208, 0, 0, 1)',
                    'rgba(255, 186, 8, 1)',
                    'rgba(63, 136, 197, 1)',
                    'rgba(3, 43, 67, 1)',
                    'rgba(19, 111, 99, 1)',
                    'rgba(168, 213, 226, 1)',
                    'rgba(249, 166, 32, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            legend: {
                labels: {
                    color: "white",
                    font: 18
                }
            },
            scales: {
                yAxes: [{
                    ticks: {
                        color: "green",
                        font: 18,
                        stepSize: 1,
                        beginAtZero: true
                    }
                }],
                xAxes: [{
                    ticks: {
                        color: "purple",
                        font: 14,
                        stepSize: 1,
                        beginAtZero: true
                    }
                }]
            }
        },
        scaleFontColor: 'red',
    });
    const myChart_2 = new Chart(ctx_2, {
        type: 'pie',
        data: {
            labels: ['Poor', 'Low Income class', 'Lower Middle Class', 'Middle Middle Class',
                'Upper Middle Class',
                'Upper Income Class', 'Rich'
            ],
            datasets: [{
                label: '# of Beneficiary',
                data: [
                    {{ count(array_filter($data ?? [],function ($d) {return $d['socialClass'] == 'Poor';},0)) }},
                    {{ count(array_filter($data ?? [],function ($d) {return $d['socialClass'] == 'Low Income class';},0)) }},
                    {{ count(array_filter($data ?? [],function ($d) {return $d['socialClass'] == 'Lower Middle Class';},0)) }},
                    {{ count(array_filter($data ?? [],function ($d) {return $d['socialClass'] == 'Middle Middle Class';},0)) }},
                    {{ count(array_filter($data ?? [],function ($d) {return $d['socialClass'] == 'Upper Middle Class';},0)) }},
                    {{ count(array_filter($data ?? [],function ($d) {return $d['socialClass'] == 'Upper Income Class';},0)) }},
                    {{ count(array_filter($data ?? [],function ($d) {return $d['socialClass'] == 'Rich';},0)) }},
                ],
                backgroundColor: [
                    'rgba(208, 0, 0, 0.2)',
                    'rgba(255, 186, 8, 0.2)',
                    'rgba(63, 136, 197, 0.2)',
                    'rgba(3, 43, 67, 0.2)',
                    'rgba(19, 111, 99, 0.2)',
                    'rgba(168, 213, 226, 0.2)',
                    'rgba(249, 166, 32, 0.2)'
                ],
                borderColor: [
                    'rgba(208, 0, 0, 1)',
                    'rgba(255, 186, 8, 1)',
                    'rgba(63, 136, 197, 1)',
                    'rgba(3, 43, 67, 1)',
                    'rgba(19, 111, 99, 1)',
                    'rgba(168, 213, 226, 1)',
                    'rgba(249, 166, 32, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            legend: {
                labels: {
                    color: "white",
                }
            },
        },
        scaleFontColor: 'red',
    });
    const myChart_3 = new Chart(ctx_3, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: '# of Beneficiary year 2022',
                data: [
                    {{ count(array_filter($data ?? [],function ($d) {return explode('-', explode('T0', $d['created_at'])[0])[1] == '01';},0)) }},
                    {{ count(array_filter($data ?? [],function ($d) {return explode('-', explode('T0', $d['created_at'])[0])[1] == '02';},0)) }},
                    {{ count(array_filter($data ?? [],function ($d) {return explode('-', explode('T0', $d['created_at'])[0])[1] == '03';},0)) }},
                    {{ count(array_filter($data ?? [],function ($d) {return explode('-', explode('T0', $d['created_at'])[0])[1] == '04';},0)) }},
                    {{ count(array_filter($data ?? [],function ($d) {return explode('-', explode('T0', $d['created_at'])[0])[1] == '05';},0)) }},
                    {{ count(array_filter($data ?? [],function ($d) {return explode('-', explode('T0', $d['created_at'])[0])[1] == '06';},0)) }},
                    {{ count(array_filter($data ?? [],function ($d) {return explode('-', explode('T0', $d['created_at'])[0])[1] == '07';},0)) }},
                    {{ count(array_filter($data ?? [],function ($d) {return explode('-', explode('T0', $d['created_at'])[0])[1] == '08';},0)) }},
                    {{ count(array_filter($data ?? [],function ($d) {return explode('-', explode('T0', $d['created_at'])[0])[1] == '09';},0)) }},
                    {{ count(array_filter($data ?? [],function ($d) {return explode('-', explode('T0', $d['created_at'])[0])[1] == '10';},0)) }},
                    {{ count(array_filter($data ?? [],function ($d) {return explode('-', explode('T0', $d['created_at'])[0])[1] == '11';},0)) }},
                    {{ count(array_filter($data ?? [],function ($d) {return explode('-', explode('T0', $d['created_at'])[0])[1] == '12';},0)) }},
                ],
                backgroundColor: [
                    'rgba(208, 0, 0, 0.2)',
                ],
                borderColor: [
                    'rgba(208, 0, 0, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            legend: {
                labels: {
                    color: "white",
                }
            },
        },
        scaleFontColor: 'red',
    });
</script>
