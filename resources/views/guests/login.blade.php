@extends('../components.unauthLayout')

@section('title', 'Login')

@section('contents')
    <div class="border-0 bg-indigo-500/75 rounded-lg w-auto h-auto shadow-md">
        <div class="py-6 px-4 flex flex-col w-full">
            <span class="text-2xl font-bold tracking-wide text-center text-gray-800/80 my-2">Sign In</span>
            @if ($status)
                <div class="bg-green-400/40 px-2 text-center py-3 my-2">
                    <span class="font-bold text-gray-900/80 tracking-wider">{{ $status }}</span>
                </div>
            @endif
            <form action="/login" method="post">
                @csrf
                <div class="flex flex-col gap-y-2">
                    <div>
                        <label for="Username" class="font-semibold tracking-wider text-gray-800/75">Username</label>
                        <div class="border-2 border-gray-400/50 rounded-md w-[20em] h-10">
                            <input type="text"
                                class="border-0 focus:outline-none w-full rounded-md text-sm h-full px-1 font-semibold text-gray-800/80 tracking-wider"
                                name="username" value="{{ old('username') }}" />
                        </div>
                        @error('username')
                            <span class="text-red-900/90 font-medium tracking-wider text-sm">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div>
                        <label for="Username" class="font-semibold tracking-wider text-gray-800/75">Password</label>
                        <div class="border-2 border-gray-400/50 rounded-md w-[20em] h-10">
                            <input type="password"
                                class="border-0 focus:outline-none w-full rounded-md text-sm h-full px-1 font-semibold text-gray-800/80 tracking-wider"
                                name="password" value="{{ old('password') }}" />
                        </div>
                        @error('password')
                            <span class="text-red-900/90 font-medium tracking-wider text-sm">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div>
                        <input type="submit" value="LOGIN"
                            class="bg-red-900/70 px-4 py-1 text-white font-semibold tracking-wider text-base rounded-md cursor-pointer hover:bg-red-900/90 transition-all">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
