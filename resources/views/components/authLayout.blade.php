<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
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
                    <a href="{{ route('reports') }}"
                        class="text-base font-medium tracking-wider border-2 border-gray-500 rounded-sm px-5 py-3 hover:border-gray-300 transition-all hover:text-gray-300 cursor-pointer">
                        Report
                    </a>
                    <a href="{{ route('settings') }}"
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
