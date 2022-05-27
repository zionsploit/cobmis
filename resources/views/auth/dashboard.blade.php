@extends('./components.authLayout')

@section('title', 'Dashboard')
@section('contents')
    <div class="my-1">
        <span class="text-gray-900 text-2xl font-semibold tracking-wider">DASHBOARD</span>
    </div>
    <div class="flex justify-between items-start w-full">
        <div class="w-[60em]">
            <div class="flex flex-col text-center w-full bg-[#3D405B] rounded-t py-4 gap-1">
                <span class="text-3xl text-gray-900 font-semibold tracking-wide">BRGY. MANGGAHAN</span>
                <span class="text-lg text-gray-900 font-normal tracking-wide">Dolores Quezon</span>
                <span class="text-sm text-gray-900 font-medium tracking-wider">DISCTRICT INFORMATION FOR POPULATION AND
                    CLUSTERING</span>
            </div>
            <div class="bg-[#81B29A] rounded-b w-full py-2 px-3">
                <span class="text-lg text-black font-medium tracking-wider">SITIO (PUROK) IN BRGY. MANGGAHAN</span>
            </div>
            <div class="my-5">
                {{-- <div class="grid grid-cols-2 gap-4 justify-items-center">
                    <a href="{{ route('sitio', ['sitio' => 'sentrong-ibaba']) }}"
                        class="bg-purple-500 w-[20em] px-3 py-2 border-0 rounded-md shadow-md cursor-pointer hover:bg-purple-500/95 transition-all">
                        <span class="text-2xl font-semibold text-gray-800/95 tracking-wide">SENTRONG IBABA</span>
                        <div class="flex justify-between items-center">
                            <img src="{{ asset('images/bounce-up.png') }}" alt="population" height="50" width="50" />
                            <span class="text-xl font-bold tracking-wider text-gray-900">
                                {{ count(
                                    array_filter(
                                        $data,
                                        function ($val) {
                                            return $val['sitio'] === 'SENTRONG IBABA';
                                        },
                                        0,
                                    ),
                                ) }}
                            </span>
                        </div>
                    </a>
                    <a href="{{ route('sitio', ['sitio' => 'sentrong-ilaya']) }}"
                        class="bg-yellow-700 w-[20em] px-3 py-2 border-0 rounded-md shadow-md cursor-pointer hover:bg-yellow-700/95 transition-all">
                        <span class="text-2xl font-semibold text-gray-800/95 tracking-wide">SENTRONG ILAYA</span>
                        <div class="flex justify-between items-center">
                            <img src="{{ asset('images/bounce-up.png') }}" alt="population" height="50" width="50" />
                            <span class="text-xl font-bold tracking-wider text-gray-900">
                                {{ count(
                                    array_filter(
                                        $data,
                                        function ($val) {
                                            return $val['sitio'] === 'SENTRONG ILAYA';
                                        },
                                        0,
                                    ),
                                ) }}
                            </span>
                        </div>
                    </a>
                    <a href="{{ route('sitio', ['sitio' => 'sentrong-kabila']) }}"
                        class="bg-lime-500 w-[20em] px-3 py-2 border-0 rounded-md shadow-md cursor-pointer hover:bg-lime-500/95 transition-all">
                        <span class="text-2xl font-semibold text-gray-800/95 tracking-wide">SENTRONG KABILA</span>
                        <div class="flex justify-between items-center">
                            <img src="{{ asset('images/bounce-up.png') }}" alt="population" height="50" width="50" />
                            <span class="text-xl font-bold tracking-wider text-gray-900">
                                {{ count(
                                    array_filter(
                                        $data,
                                        function ($val) {
                                            return $val['sitio'] === 'SENTRONG KABILA';
                                        },
                                        0,
                                    ),
                                ) }}
                            </span>
                        </div>
                    </a>
                    <a href="{{ route('sitio', ['sitio' => 'nabalagbag']) }}"
                        class="bg-blue-500 w-[20em] px-3 py-2 border-0 rounded-md shadow-md cursor-pointer hover:bg-blue-500/95 transition-all">
                        <span class="text-2xl font-semibold text-gray-800/95 tracking-wide">NABALAGBAG</span>
                        <div class="flex justify-between items-center">
                            <img src="{{ asset('images/bounce-up.png') }}" alt="population" height="50" width="50" />
                            <span class="text-xl font-bold tracking-wider text-gray-900">
                                {{ count(
                                    array_filter(
                                        $data,
                                        function ($val) {
                                            return $val['sitio'] === 'NABALAGBAG';
                                        },
                                        0,
                                    ),
                                ) }}
                            </span>
                        </div>
                    </a>
                    <a href="{{ route('sitio', ['sitio' => 'saliw-ibaba']) }}"
                        class="bg-yellow-500 w-[20em] px-3 py-2 border-0 rounded-md shadow-md cursor-pointer hover:bg-yellow-500/95 transition-all">
                        <span class="text-2xl font-semibold text-gray-800/95 tracking-wide">SALIW IBABA</span>
                        <div class="flex justify-between items-center">
                            <img src="{{ asset('images/bounce-up.png') }}" alt="population" height="50" width="50" />
                            <span class="text-xl font-bold tracking-wider text-gray-900">
                                {{ count(
                                    array_filter(
                                        $data,
                                        function ($val) {
                                            return $val['sitio'] === 'SALIW IBABA';
                                        },
                                        0,
                                    ),
                                ) }}
                            </span>
                        </div>
                    </a>
                    <a href="{{ route('sitio', ['sitio' => 'saliw-ilaya']) }}"
                        class="bg-red-400 w-[20em] px-3 py-2 border-0 rounded-md shadow-md cursor-pointer hover:bg-red-400/95 transition-all">
                        <span class="text-2xl font-semibold text-gray-800/95 tracking-wide">SALIW ILAYA</span>
                        <div class="flex justify-between items-center">
                            <img src="{{ asset('images/bounce-up.png') }}" alt="population" height="50" width="50" />
                            <span class="text-xl font-bold tracking-wider text-gray-900">
                                {{ count(
                                    array_filter(
                                        $data,
                                        function ($val) {
                                            return $val['sitio'] === 'SALIW ILAYA';
                                        },
                                        0,
                                    ),
                                ) }}
                            </span>
                        </div>
                    </a>
                    <a href="{{ route('sitio', ['sitio' => 'maulabe']) }}"
                        class="bg-teal-500 w-[20em] px-3 py-2 border-0 rounded-md shadow-md cursor-pointer hover:bg-teal-500/95 transition-all">
                        <span class="text-2xl font-semibold text-gray-800/95 tracking-wide">MAULABE</span>
                        <div class="flex justify-between items-center">
                            <img src="{{ asset('images/bounce-up.png') }}" alt="population" height="50" width="50" />
                            <span class="text-xl font-bold tracking-wider text-gray-900">
                                {{ count(
                                    array_filter(
                                        $data,
                                        function ($val) {
                                            return $val['sitio'] === 'MAULABE';
                                        },
                                        0,
                                    ),
                                ) }}
                            </span>
                        </div>
                    </a>
                    <a href="{{ route('sitio', ['sitio' => 'all']) }}"
                        class="bg-green-500 w-[20em] px-3 py-2 border-0 rounded-md shadow-md cursor-pointer hover:bg-green-500/95 transition-all">
                        <span class="text-2xl font-semibold text-gray-800/95 tracking-wide">PREVIEW ALL</span>
                        <div class="flex justify-between items-center">
                            <img src="{{ asset('images/bounce-up.png') }}" alt="population" height="50" width="50" />
                            <span class="text-xl font-bold tracking-wider text-gray-900">
                                {{ count($data) }}
                            </span>
                        </div>
                    </a>
                </div> --}}
                <canvas id="dashboard_1" width="150" height="80"></canvas>
            </div>
        </div>
        <div class="mx-4 w-[30em]">
            <div class="flex flex-col gap-2">
                <div class="px-5 py-2 border-0 rounded bg-[#81B29A] shadow-md">
                    <div class="flex flex-col items-start">
                        <span class="text-center w-full font-medium tracking-wide">POPULATION</span>
                        <canvas id="dashboard_2" width="60" height="50"></canvas>
                    </div>
                </div>
                <div class="px-5 py-2 border-0 rounded bg-[#81B29A] shadow-md">
                    <div class="flex flex-col items-start">
                        <span class="text-center w-full font-medium tracking-wide">Beneficiaries Registered By Year</span>
                        <canvas id="dashboard_3" width="100" height="50"></canvas>
                    </div>
                </div>
                {{-- <div class="flex flex-col gap-2 my-3">
                    <div
                        class="flex justify-between items-center w-full px-2 py-1 h-[5em] bg-[#81B29A] rounded shadow-md gap-10">
                        <span class="text-lg font-semibold tracking-wider text-gray-900">POOR</span>
                        <span class="text-lg font-semibold tracking-wider text-gray-900">
                            {{ count(
                                array_filter(
                                    $data,
                                    function ($val) {
                                        return $val['socialClass'] === 'Poor';
                                    },
                                    0,
                                ),
                            ) }}
                        </span>
                    </div>
                    <div
                        class="flex justify-between items-center w-full px-2 py-1 h-[5em] bg-[#81B29A] rounded shadow-md gap-10">
                        <span class="text-lg font-semibold tracking-wider text-gray-900">LOW-INCOME CLASS (BUT NOT
                            POOR)</span>
                        <span class="text-lg font-semibold tracking-wider text-gray-900">
                            {{ count(
                                array_filter(
                                    $data,
                                    function ($val) {
                                        return $val['socialClass'] === 'Low Income class';
                                    },
                                    0,
                                ),
                            ) }}
                        </span>
                    </div>
                    <div
                        class="flex justify-between items-center w-full px-2 py-1 h-[5em] bg-[#81B29A] rounded shadow-md gap-10">
                        <span class="text-lg font-semibold tracking-wider text-gray-900">LOWER MIDDLE INCOME CLASS</span>
                        <span class="text-lg font-semibold tracking-wider text-gray-900">
                            {{ count(
                                array_filter(
                                    $data,
                                    function ($val) {
                                        return $val['socialClass'] === 'Lower Middle Class';
                                    },
                                    0,
                                ),
                            ) }}
                        </span>
                    </div>
                    <div
                        class="flex justify-between items-center w-full px-2 py-1 h-[5em] bg-[#81B29A] rounded shadow-md gap-10">
                        <span class="text-lg font-semibold tracking-wider text-gray-900">MIDDLE MIDDLE-INCOME CLASS</span>
                        <span class="text-lg font-semibold tracking-wider text-gray-900">
                            {{ count(
                                array_filter(
                                    $data,
                                    function ($val) {
                                        return $val['socialClass'] === 'Middle Middle Class';
                                    },
                                    0,
                                ),
                            ) }}
                        </span>
                    </div>
                    <div
                        class="flex justify-between items-center w-full px-2 py-1 h-[5em] bg-[#81B29A] rounded shadow-md gap-10">
                        <span class="text-lg font-semibold tracking-wider text-gray-900">UPPER MIDDLE-INCOME CLASS</span>
                        <span class="text-lg font-semibold tracking-wider text-gray-900">
                            {{ count(
                                array_filter(
                                    $data,
                                    function ($val) {
                                        return $val['socialClass'] === 'Upper Middle Class';
                                    },
                                    0,
                                ),
                            ) }}
                        </span>
                    </div>
                    <div
                        class="flex justify-between items-center w-full px-2 py-1 h-[5em] bg-[#81B29A] rounded shadow-md gap-10">
                        <span class="text-lg font-semibold tracking-wider text-gray-900">UPPER-INCOME CLASS (BUT NOT
                            RICH)</span>
                        <span class="text-lg font-semibold tracking-wider text-gray-900">
                            {{ count(
                                array_filter(
                                    $data,
                                    function ($val) {
                                        return $val['socialClass'] === 'Upper Income Class';
                                    },
                                    0,
                                ),
                            ) }}
                        </span>
                    </div>
                    <div
                        class="flex justify-between items-center w-full px-2 py-1 h-[5em] bg-[#81B29A] rounded shadow-md gap-10">
                        <span class="text-lg font-semibold tracking-wider text-gray-900">RICH</span>
                        <span class="text-lg font-semibold tracking-wider text-gray-900">
                            {{ count(
                                array_filter(
                                    $data,
                                    function ($val) {
                                        return $val['socialClass'] === 'Rich';
                                    },
                                    0,
                                ),
                            ) }}
                        </span>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <div>
        {{-- {{ print_r($data) }} --}}
    </div>
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
@endsection
