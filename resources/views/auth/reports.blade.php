@extends('./components.authLayout')

@section('title', 'Reports')
@section('contents')
    <div class="mb-5">
        <span class="text-gray-900 text-2xl font-semibold tracking-wider">REPORTS FOR 2021</span>
    </div>
    <div class="flex justify-start items-start gap-x-5">
        <div class="w-[70%] space-y-1">
            <div class="bg-[#81B29A] rounded-b py-2 px-3 w-full">
                <span class="font-medium text-base tracking-wide">Beneficiaries and Priority Reports for Year 2021</span>
                <canvas id="reports_1" width="150" height="50"></canvas>
            </div>
            <div class="bg-[#81B29A] rounded-b py-2 px-3 w-full">
                <span class="font-medium text-base tracking-wide">Class Status Reports for Year 2021</span>
                <canvas id="reports_3" width="150" height="50"></canvas>
            </div>
        </div>
        <div class="bg-[#81B29A] rounded-b py-2 px-3 w-[30%]">
            <span class="font-medium text-base tracking-wide">Cluster Reports for year 2021</span>
            <hr />
            <div class="flex flex-col justify-start items-start">
                <div class="w-full flex justify-between items-center">
                    <span class="font-medium text-base">SENTRONG IBABA:</span>
                    <span class="font-medium text-base">19</span>
                </div>
                <div class="w-full flex justify-between items-center">
                    <span class="font-medium text-base">SENTRONG KABILA:</span>
                    <span class="font-medium text-base">19</span>
                </div>
                <div class="w-full flex justify-between items-center">
                    <span class="font-medium text-base">SALIW IBABA:</span>
                    <span class="font-medium text-base">19</span>
                </div>
                <div class="w-full flex justify-between items-center">
                    <span class="font-medium text-base">MAULABE:</span>
                    <span class="font-medium text-base">19</span>
                </div>
                <div class="w-full flex justify-between items-center">
                    <span class="font-medium text-base">SENTRONG ILAYA:</span>
                    <span class="font-medium text-base">19</span>
                </div>
                <div class="w-full flex justify-between items-center">
                    <span class="font-medium text-base">NABALAGBAG:</span>
                    <span class="font-medium text-base">19</span>
                </div>
                <div class="w-full flex justify-between items-center">
                    <span class="font-medium text-base">SALIW ILAYA:</span>
                    <span class="font-medium text-base">19</span>
                </div>
            </div>
            <hr />
            <canvas id="reports_2" width="160" height="60"></canvas>
        </div>
    </div>
    <script>
        const ctx_1 = document.getElementById('reports_1').getContext('2d');
        const ctx_2 = document.getElementById('reports_2').getContext('2d');
        const ctx_3 = document.getElementById('reports_3').getContext('2d');
        const myChart_1 = new Chart(ctx_1, {
            data: {
                datasets: [{
                        type: 'bar',
                        label: 'Beneficiaries By Year',
                        data: [10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 110, 120],
                        backgroundColor: [
                            'rgba(208, 0, 0, 0.2)',
                            'rgba(255, 186, 8, 0.2)',
                            'rgba(63, 136, 197, 0.2)',
                            'rgba(3, 43, 67, 0.2)',
                            'rgba(19, 111, 99, 0.2)',
                            'rgba(168, 213, 226, 0.2)',
                            'rgba(249, 166, 32, 0.2)',
                            'rgba(244, 241, 222, 0.2)',
                            'rgba(224, 122, 95, 0.2)',
                            'rgba(61, 64, 91, 0.2)',
                            'rgba(106, 4, 15, 0.2)',
                            'rgba(242, 204, 143, 0.2)',
                        ],
                        borderColor: [
                            'rgba(208, 0, 0, 1)',
                            'rgba(255, 186, 8, 1)',
                            'rgba(63, 136, 197, 1)',
                            'rgba(3, 43, 67, 1)',
                            'rgba(19, 111, 99, 1)',
                            'rgba(168, 213, 226, 1)',
                            'rgba(249, 166, 32, 1)',
                            'rgba(244, 241, 222, 1)',
                            'rgba(224, 122, 95, 1)',
                            'rgba(61, 64, 91, 1)',
                            'rgba(106, 4, 15, 1)',
                            'rgba(242, 204, 143, 1)',
                        ],
                        borderWidth: 1
                    },
                    {
                        type: 'line',
                        label: 'Priority By Year',
                        data: [10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 110, 120],
                        backgroundColor: [
                            'rgba(208, 0, 0, 0.2)'
                        ],
                        borderColor: [
                            'rgba(208, 0, 0, 1)'
                        ],
                        borderWidth: 1
                    },
                ],
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
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
                labels: ['SENTRONG IBABA', 'SENTRONG KABILA', 'SALIW IBABA', 'MAULABE',
                    'SENTRONG NABALAGBAG'
                ],
                datasets: [{
                    label: '# of Beneficiary',
                    data: [1, 78, 32, 6, 7, 10, 8],
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
            scaleFontColor: 'red',
        })

        const myChart_3 = new Chart(ctx_3, {
            type: 'line',
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
        })
    </script>
@endsection
