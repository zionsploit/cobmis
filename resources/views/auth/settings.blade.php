@extends('./components.authLayout')

@section('title', 'Settings')
@section('contents')
    <div class="mb-5">
        <span class="text-gray-900 text-2xl font-semibold tracking-wider">Settings</span>
    </div>
    @if ($status === 200)
        <div class="bg-green-700/50 py-2 px-2 text-center border-0 rounded my-5">
            <span class="font-semibold text-gray-900 text-lg tracking-wide">{{ $affected }}</span>
        </div>
    @endif
    <div class="flex justify-start items-start w-full">
        <div class="flex flex-col text-center w-[60em] bg-[#3D405B] rounded-t py-4 gap-1">
            <span class="text-gray-300 text-lg tracking-wide font-medium">Change Password:</span>
            <form action="{{ route('change-password') }}" method="POST">
                @csrf
                <div class="w-[60em] flex justify-between items-start px-5">
                    <div class="flex flex-col justify-start items-start">
                        <input type="password" name="currentpassword" placeholder="Current password"
                            class="w-[15em] px-2 h-[2em] rounded text-gray-500 tracking-wide"
                            value="{{ old('currentpassword') }}" />
                        @error('currentpassword')
                            <span class="text-sm font-semibold text-red-800/95 tracking-wide">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col justify-start items-start">
                        <input type="password" name="newpassword" placeholder="New password"
                            class="w-[15em] px-2 h-[2em] rounded text-gray-500 tracking-wide"
                            value="{{ old('newpassword') }}" />
                        @error('newpassword')
                            <span class="text-sm font-semibold text-red-800/95 tracking-wide">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col justify-start items-start">
                        <input type="password" name="confirmnewpassword" placeholder="Confirm New password"
                            class="w-[15em] px-2 h-[2em] rounded text-gray-500 tracking-wide"
                            value="{{ old('confirmnewpassword') }}" />
                        @error('confirmnewpassword')
                            <span class="text-sm font-semibold text-red-800/95 tracking-wide">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="my-2">
                    <button type="submit"
                        class="bg-green-500 px-2 py-1 rounded font-medium tracking-wide text-gray-800 hover:bg-green-500/50 transition-all active:bg-green-500">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
