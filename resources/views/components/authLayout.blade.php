<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>

<body>
    <div class="flex">
        <div class="bg-gray-900 h-screen w-[20em]">
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
        <div class="w-screen h-screen bg-gray-900/90">
            <div class="p-5 w-full">
                @yield('contents')
            </div>
        </div>
    </div>
</body>

</html>
