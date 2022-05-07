<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>

<body>
    <div class="w-screen h-screen bg-gray-900/90">
        <div class="w-full flex justify-between px-6 py-2 bg-slate-500/75">
            <span class="font-medium text-base text-gray-200/80 tracking-wider">Code-Ordinate: Browser-Based Management Information  System with Geo Mapping for San Isidro, San Pablo City, Laguna</span>
            <a href="{{ Request::segment(1) === 'login' ? route('register') : route('login') }}"
                class="font-medium text-base text-gray-200/80 tracking-wider">{{ Request::segment(1) === 'login' ? 'Register' : 'Login' }}</a>
        </div>
        <div class="flex flex-nowrap justify-center mt-24">
            @yield('contents')
        </div>
    </div>
</body>

</html>
