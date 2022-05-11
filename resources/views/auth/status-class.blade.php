@extends('./components.authLayout')

@section('title', 'Class')

@section('contents')
    <div class="my-5 flex justify-between items-center">
        <span class="text-gray-300/80 text-2xl font-semibold tracking-wider">{{ $socialClass }}</span>
        <a href="{{ route('dashboard') }}" type="button" class="px-3 py-2 bg-green-400 hover:bg-green-400/50 cursor-pointer rounded">Back</a type="button">
    </div>
    <div class="bg-[#3D405B] py-5 px-4 border-0 rounded shadow-md w-full">
        <div class="float-right my-1 mb-3">
            <div class="flex justify-start items-center gap-x-3">
                <span class="text-gray-300 font-semibold text-lg tracking-wider">Search:</span>
                <input type="text"
                    class="px-2 py-1 w-[15em] outline-none focus:outline-none rounded text-lg font-semibold text-gray-700 tracking-wider">
            </div>
        </div>
        <table class="table-auto text-gray-300 w-full items-center">
            <thead>
                <tr>
                    <th>NAME</th>
                    <th>BIRTH DATE</th>
                    <th>CONTACT #</th>
                    <th>SITIO</th>
                    <th>DATE SUBMIT</th>
                    <th>MARK AS</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($data as $dataList)
                    <tr>
                        <td>
                            {{ strtoupper($dataList['lastName']) . ' ' . strtoupper($dataList['firstName']) . ' ' . strtoupper($dataList['middleName']) }}
                        </td>
                        <td>{{ $dataList['dateOfBirth'] }}</td>
                        <td>{{ $dataList['contactNumber'] }}</td>
                        <td>{{ $dataList['sitio'] }}</td>
                        <td>{{ $dataList['created_at'] }}</td>
                        <td>
                            <span class="border-2 border-gray-600 rounded px-1">{{ $dataList['markAs'] }}</span>
                        </td>
                        <td>
                            <button type="button"
                                class="bg-green-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-green-700 transition-colors">TRACK</button>
                            <a href="/view-beneficiaries/{{ $dataList['id'] }}"  type="button"
                                class="bg-blue-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-blue-700 transition-colors">VIEW</a>
                            <a href="/modify-beneficiares/{{ $dataList['id'] }}" type="button"
                                class="bg-yellow-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-yellow-700 transition-colors">MODIFY</a>
                            <button type="button"
                                class="bg-red-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-red-700 transition-colors">DELETE</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="w-full flex justify-end items-center gap-x-3 mt-5">
            <button type="button"
                class="bg-gray-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-gray-700 transition-colors">NEXT</button>
            <button type="button"
                class="bg-gray-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-gray-700 transition-colors">PREVIOUS</button>
            <button type="button"
                class="bg-gray-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-gray-700 transition-colors">BACK</button>
        </div>
    </div>
@endsection
