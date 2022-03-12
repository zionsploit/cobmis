@extends('./components.authLayout')

@section('title', 'Beneficiaries')

@section('contents')
    <div class="my-5">
        <span class="text-gray-300/80 text-2xl font-semibold tracking-wider">BENEFICIARIES</span>
    </div>
    <div class="bg-gray-900 py-5 px-4 border-0 rounded shadow-md w-full">
        <div class="float-right my-1 mb-3">
            <div class="flex justify-start items-center gap-x-3">
                <span class="text-gray-300 font-semibold text-lg tracking-wider">Search:</span>
                <input type="text" class="px-2 py-1 w-[15em] outline-none focus:outline-none rounded text-lg font-semibold text-gray-700 tracking-wider">
            </div>
        </div>
        <table class="table-auto text-gray-300 w-full items-center">
            <thead>
                <tr>
                    <th>NAME</th>
                    <th>AGE</th>
                    <th>CONTACT #</th>
                    <th>SITIO</th>
                    <th>DATE SUBMIT</th>
                    <th>MARK AS</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <tr>
                    <td>DELA CRUZ JUAN</td>
                    <td>30</td>
                    <td>09123456789</td>
                    <td>388 SENTRONG IBABA</td>
                    <td>09/11/2022</td>
                    <td>
                        <span class="border-2 border-gray-600 rounded px-1">BENEFICIARIES</span>
                    </td>
                    <td>
                        <button type="button" class="bg-green-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-green-700 transition-colors">TRACK</button>
                        <button type="button" class="bg-blue-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-blue-700 transition-colors">VIEW</button>
                        <button type="button" class="bg-yellow-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-yellow-700 transition-colors">MODIFY</button>
                        <button type="button" class="bg-red-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-red-700 transition-colors">DELETE</button>
                    </td>
                </tr>
                <tr>
                    <td>DELA CRUZ JUAN</td>
                    <td>30</td>
                    <td>09123456789</td>
                    <td>388 SENTRONG IBABA</td>
                    <td>09/11/2022</td>
                    <td>
                        <span class="border-2 border-gray-600 rounded px-1">BENEFICIARIES</span>
                    </td>
                    <td>
                        <button type="button" class="bg-green-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-green-700 transition-colors">TRACK</button>
                        <button type="button" class="bg-blue-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-blue-700 transition-colors">VIEW</button>
                        <button type="button" class="bg-yellow-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-yellow-700 transition-colors">MODIFY</button>
                        <button type="button" class="bg-red-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-red-700 transition-colors">DELETE</button>
                    </td>
                </tr>
                <tr>
                    <td>DELA CRUZ JUAN</td>
                    <td>30</td>
                    <td>09123456789</td>
                    <td>388 SENTRONG IBABA</td>
                    <td>09/11/2022</td>
                    <td>
                        <span class="border-2 border-gray-600 rounded px-1">BENEFICIARIES</span>
                    </td>
                    <td>
                        <button type="button" class="bg-green-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-green-700 transition-colors">TRACK</button>
                        <button type="button" class="bg-blue-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-blue-700 transition-colors">VIEW</button>
                        <button type="button" class="bg-yellow-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-yellow-700 transition-colors">MODIFY</button>
                        <button type="button" class="bg-red-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-red-700 transition-colors">DELETE</button>
                    </td>
                </tr>
                <tr>
                    <td>DELA CRUZ JUAN</td>
                    <td>30</td>
                    <td>09123456789</td>
                    <td>388 SENTRONG IBABA</td>
                    <td>09/11/2022</td>
                    <td>
                        <span class="border-2 border-gray-600 rounded px-1">BENEFICIARIES</span>
                    </td>
                    <td>
                        <button type="button" class="bg-green-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-green-700 transition-colors">TRACK</button>
                        <button type="button" class="bg-blue-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-blue-700 transition-colors">VIEW</button>
                        <button type="button" class="bg-yellow-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-yellow-700 transition-colors">MODIFY</button>
                        <button type="button" class="bg-red-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-red-700 transition-colors">DELETE</button>
                    </td>
                </tr>
                <tr>
                    <td>DELA CRUZ JUAN</td>
                    <td>30</td>
                    <td>09123456789</td>
                    <td>388 SENTRONG IBABA</td>
                    <td>09/11/2022</td>
                    <td>
                        <span class="border-2 border-gray-600 rounded px-1">BENEFICIARIES</span>
                    </td>
                    <td>
                        <button type="button" class="bg-green-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-green-700 transition-colors">TRACK</button>
                        <button type="button" class="bg-blue-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-blue-700 transition-colors">VIEW</button>
                        <button type="button" class="bg-yellow-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-yellow-700 transition-colors">MODIFY</button>
                        <button type="button" class="bg-red-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-red-700 transition-colors">DELETE</button>
                    </td>
                </tr>
                <tr>
                    <td>DELA CRUZ JUAN</td>
                    <td>30</td>
                    <td>09123456789</td>
                    <td>388 SENTRONG IBABA</td>
                    <td>09/11/2022</td>
                    <td>
                        <span class="border-2 border-gray-600 rounded px-1">BENEFICIARIES</span>
                    </td>
                    <td>
                        <button type="button" class="bg-green-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-green-700 transition-colors">TRACK</button>
                        <button type="button" class="bg-blue-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-blue-700 transition-colors">VIEW</button>
                        <button type="button" class="bg-yellow-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-yellow-700 transition-colors">MODIFY</button>
                        <button type="button" class="bg-red-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-red-700 transition-colors">DELETE</button>
                    </td>
                </tr>
                <tr>
                    <td>DELA CRUZ JUAN</td>
                    <td>30</td>
                    <td>09123456789</td>
                    <td>388 SENTRONG IBABA</td>
                    <td>09/11/2022</td>
                    <td>
                        <span class="border-2 border-gray-600 rounded px-1">BENEFICIARIES</span>
                    </td>
                    <td>
                        <button type="button" class="bg-green-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-green-700 transition-colors">TRACK</button>
                        <button type="button" class="bg-blue-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-blue-700 transition-colors">VIEW</button>
                        <button type="button" class="bg-yellow-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-yellow-700 transition-colors">MODIFY</button>
                        <button type="button" class="bg-red-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-red-700 transition-colors">DELETE</button>
                    </td>
                </tr>
                <tr>
                    <td>DELA CRUZ JUAN</td>
                    <td>30</td>
                    <td>09123456789</td>
                    <td>388 SENTRONG IBABA</td>
                    <td>09/11/2022</td>
                    <td>
                        <span class="border-2 border-gray-600 rounded px-1">BENEFICIARIES</span>
                    </td>
                    <td>
                        <button type="button" class="bg-green-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-green-700 transition-colors">TRACK</button>
                        <button type="button" class="bg-blue-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-blue-700 transition-colors">VIEW</button>
                        <button type="button" class="bg-yellow-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-yellow-700 transition-colors">MODIFY</button>
                        <button type="button" class="bg-red-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-red-700 transition-colors">DELETE</button>
                    </td>
                </tr>
                <tr>
                    <td>DELA CRUZ JUAN</td>
                    <td>30</td>
                    <td>09123456789</td>
                    <td>388 SENTRONG IBABA</td>
                    <td>09/11/2022</td>
                    <td>
                        <span class="border-2 border-gray-600 rounded px-1">BENEFICIARIES</span>
                    </td>
                    <td>
                        <button type="button" class="bg-green-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-green-700 transition-colors">TRACK</button>
                        <button type="button" class="bg-blue-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-blue-700 transition-colors">VIEW</button>
                        <button type="button" class="bg-yellow-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-yellow-700 transition-colors">MODIFY</button>
                        <button type="button" class="bg-red-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-red-700 transition-colors">DELETE</button>
                    </td>
                </tr>
                <tr>
                    <td>DELA CRUZ JUAN</td>
                    <td>30</td>
                    <td>09123456789</td>
                    <td>388 SENTRONG IBABA</td>
                    <td>09/11/2022</td>
                    <td>
                        <span class="border-2 border-gray-600 rounded px-1">BENEFICIARIES</span>
                    </td>
                    <td>
                        <button type="button" class="bg-green-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-green-700 transition-colors">TRACK</button>
                        <button type="button" class="bg-blue-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-blue-700 transition-colors">VIEW</button>
                        <button type="button" class="bg-yellow-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-yellow-700 transition-colors">MODIFY</button>
                        <button type="button" class="bg-red-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-red-700 transition-colors">DELETE</button>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="w-full flex justify-end items-center gap-x-3 mt-5">
            <button type="button" class="bg-gray-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-gray-700 transition-colors">NEXT</button>
            <button type="button" class="bg-gray-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-gray-700 transition-colors">PREVIOUS</button>
            <button type="button" class="bg-gray-600 text-gray-50 px-2 py-1 border-0 rounded text-sm tracking-wider hover:bg-gray-700 transition-colors">BACK</button>
        </div>
    </div>
@endsection