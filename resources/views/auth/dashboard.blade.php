@extends('./components.authLayout')

@section('title', 'Dashboard')

@section('contents')
    <div class="my-5">
        <span class="text-gray-300/80 text-2xl font-semibold tracking-wider">DASHBOARD</span>
    </div>
    <div class="flex justify-between items-start w-full">
        <div class="w-[60em]">
            <div class="flex flex-col text-center w-full bg-gray-900 rounded-t py-4 gap-1">
                <span class="text-3xl text-gray-400 font-semibold tracking-wide">BRGY. MANGGAHAN</span>
                <span class="text-lg text-gray-400 font-normal tracking-wide">Dolores Quezon</span>
                <span class="text-sm text-gray-400 font-thin tracking-wider">DISCTRICT INFORMATION FOR POPULATION AND
                    CLUSTERING</span>
            </div>
            <div class="bg-gray-900/80 rounded-b w-full py-2 px-3">
                <span class="text-lg text-gray-400 font-thin tracking-wider">SITIO (PUROK) IN BRGY. MANGGAHAN</span>
            </div>
            <div class="my-5">
                <div class="grid grid-cols-2 gap-4 justify-items-center">
                    <a href="/hello"
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
                    <a href="/testingSitio/sentrong-ilaya"
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
                    <a href="/testingSitio/sentrong-kabila"
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
                    <a href="/testingSitio/nabalagbag"
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
                    <a href="/testingSitio/saliw-ibaba"
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
                    <a href="/testingSitio/saliw-ilaya"
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
                    <a href="/testingSitio/maulabe"
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
                    <a href="/testingSitio/all"
                        class="bg-green-500 w-[20em] px-3 py-2 border-0 rounded-md shadow-md cursor-pointer hover:bg-green-500/95 transition-all">
                        <span class="text-2xl font-semibold text-gray-800/95 tracking-wide">PREVIEW ALL</span>
                        <div class="flex justify-between items-center">
                            <img src="{{ asset('images/bounce-up.png') }}" alt="population" height="50" width="50" />
                            <span class="text-xl font-bold tracking-wider text-gray-900">
                                {{ count($data) }}
                            </span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="mx-4 w-[20em]">
            <div class="flex flex-col gap-2">
                <div class="px-5 py-2 flex justify-between items-center border-0 rounded bg-gray-900 shadow-md">
                    <img src="{{ asset('images/population.png') }}" alt="population total">
                    <div class="flex flex-col items-start">
                        <span class="text-4xl text-gray-400 font-medium tracking-wider">
                            {{ count($data) }}
                        </span>
                        <span class="tracking-wide text-gray-400 text-sm font-thin">POPULATION</span>
                    </div>
                </div>
                <div class="flex flex-col gap-2 my-3">
                    <a href=""
                        class="flex justify-between items-center w-full px-2 py-1 h-[5em] bg-slate-700 rounded shadow-md gap-10">
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
                    </a>
                    <a href=""
                        class="flex justify-between items-center w-full px-2 py-1 h-[5em] bg-slate-700 rounded shadow-md gap-10">
                        <span class="text-lg font-semibold tracking-wider text-gray-900">LOW-INCOME CLASS (BUT NOT
                            POOR)</span>
                        <span class="text-lg font-semibold tracking-wider text-gray-900">
                            {{ count(
                                array_filter(
                                    $data,
                                    function ($val) {
                                        return $val['socialClass'] === 'Low Income-class (But Not Poor)';
                                    },
                                    0,
                                ),
                            ) }}
                        </span>
                    </a>
                    <a href=""
                        class="flex justify-between items-center w-full px-2 py-1 h-[5em] bg-slate-700 rounded shadow-md gap-10">
                        <span class="text-lg font-semibold tracking-wider text-gray-900">LOWER MIDDLE INCOME CLASS</span>
                        <span class="text-lg font-semibold tracking-wider text-gray-900">
                            {{ count(
                                array_filter(
                                    $data,
                                    function ($val) {
                                        return $val['socialClass'] === 'Lower Middle-Class';
                                    },
                                    0,
                                ),
                            ) }}
                        </span>
                    </a>
                    <a href=""
                        class="flex justify-between items-center w-full px-2 py-1 h-[5em] bg-slate-700 rounded shadow-md gap-10">
                        <span class="text-lg font-semibold tracking-wider text-gray-900">MIDDLE MIDDLE-INCOME CLASS</span>
                        <span class="text-lg font-semibold tracking-wider text-gray-900">
                            {{ count(
                                array_filter(
                                    $data,
                                    function ($val) {
                                        return $val['socialClass'] === 'Middle Middle-Class';
                                    },
                                    0,
                                ),
                            ) }}
                        </span>
                    </a>
                    <a href=""
                        class="flex justify-between items-center w-full px-2 py-1 h-[5em] bg-slate-700 rounded shadow-md gap-10">
                        <span class="text-lg font-semibold tracking-wider text-gray-900">UPPER MIDDLE-INCOME CLASS</span>
                        <span class="text-lg font-semibold tracking-wider text-gray-900">
                            {{ count(
                                array_filter(
                                    $data,
                                    function ($val) {
                                        return $val['socialClass'] === 'Upper Middle-Class';
                                    },
                                    0,
                                ),
                            ) }}
                        </span>
                    </a>
                    <a href=""
                        class="flex justify-between items-center w-full px-2 py-1 h-[5em] bg-slate-700 rounded shadow-md gap-10">
                        <span class="text-lg font-semibold tracking-wider text-gray-900">UPPER-INCOME CLASS (BUT NOT
                            RICH)</span>
                        <span class="text-lg font-semibold tracking-wider text-gray-900">
                            {{ count(
                                array_filter(
                                    $data,
                                    function ($val) {
                                        return $val['socialClass'] === 'Upper Income-Class (But Not Rich)';
                                    },
                                    0,
                                ),
                            ) }}
                        </span>
                    </a>
                    <a href=""
                        class="flex justify-between items-center w-full px-2 py-1 h-[5em] bg-slate-700 rounded shadow-md gap-10">
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
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div>
        {{-- {{ print_r($data) }} --}}
    </div>
@endsection
