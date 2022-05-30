@extends('/components.authLayout')

@section('title', 'Modify')

@section('contents')
    <div class="my-5">
        <span class="text-gray-900 text-2xl font-semibold tracking-wider">Modiy Beneficiaries</span>
    </div>
    @if ($status === 200)
        <div class="bg-green-700/50 py-2 px-2 text-center border-0 rounded my-5">
            <span class="font-semibold text-gray-900 text-lg tracking-wide">{{ $message }}</span>
        </div>
    @endif
    @if ($status === 500)
        <div class="bg-red-700/50 py-2 px-2 text-center border-0 rounded my-5">
            <span class="font-semibold text-gray-900 text-lg tracking-wide">{{ $message }}</span>
        </div>
    @endif
    <div class="bg-gray-900 py-5 px-4 border-0 rounded shadow-md">
        <form action="/update-beneficiaries/{{$data['id']}}" method="post">
            <input name="_method" type="hidden" value="PATCH">
            @csrf
            <div class="flex flex-col gap-y-5">
                <div class="flex justify-between items-start gap-x-2">
                    <div class="flex flex-col">
                        <input type="text" name="lastName" placeholder="Last Name"
                            class="outline-none focus:outline-none focus:shadow-purple-500/60 shadow px-2 py-2 w-[20em] rounded transition-shadow font-medium text-base text-gray-700 tracking-wider"
                            value="{{ old('lastName') == '' ? $data['lastName'] : old('lastName') }}">
                        @error('lastName')
                            <span class="text-sm font-semibold text-red-800/95 tracking-wide">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <input type="text" name="firstName" placeholder="First Name"
                            class="outline-none focus:outline-none focus:shadow-purple-500/60 shadow px-2 py-2 w-[20em] rounded transition-shadow font-medium text-base text-gray-700 tracking-wider"
                            value="{{ old('firstName') == '' ? $data['firstName'] : old('firstName') }}">
                        @error('firstName')
                            <span class="text-sm font-semibold text-red-800/95 tracking-wide">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <input type="text" name="middleName" placeholder="Middle Name"
                            class="outline-none focus:outline-none focus:shadow-purple-500/60 shadow px-2 py-2 w-[20em] rounded transition-shadow font-medium text-base text-gray-700 tracking-wider"
                            value="{{ old('middleName') == '' ? $data['middleName'] : old('middleName') }}">
                        @error('middleName')
                            <span class="text-sm font-semibold text-red-800/95 tracking-wide">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <input type="text" name="contactNumber" placeholder="Contact Number"
                            class="outline-none focus:outline-none focus:shadow-purple-500/60 shadow px-2 py-2 w-[20em] rounded transition-shadow font-medium text-base text-gray-700 tracking-wider"
                            value="{{ old('contactNumber') == '' ? $data['contactNumber'] : old('contactNumber') }}">
                        @error('contactNumber')
                            <span class="text-sm font-semibold text-red-800/95 tracking-wide">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="flex justify-between items-start gap-x-2">
                    <div class="flex flex-col">
                        <input type="text" name="dateOfBirth" placeholder="Date of Birth [1998-1-30]"
                            class="outline-none focus:outline-none focus:shadow-purple-500/60 shadow px-2 py-2 w-[20em] rounded transition-shadow font-medium text-base text-gray-700 tracking-wider"
                            value="{{ old('dateOfBirth') == '' ? $data['dateOfBirth'] : old('dateOfBirth') }}">
                        @error('dateOfBirth')
                            <span class="text-sm font-semibold text-red-800/95 tracking-wide">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <input type="text" name="religion" placeholder="Religion"
                            class="outline-none focus:outline-none focus:shadow-purple-500/60 shadow px-2 py-2 w-[20em] rounded transition-shadow font-medium text-base text-gray-700 tracking-wider"
                            value="{{ old('religion') == '' ? $data['religion'] : old('religion') }}">
                        @error('religion')
                            <span class="text-sm font-semibold text-red-800/95 tracking-wide">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <select type="text" name="status" placeholder="Religion"
                            class="outline-none focus:outline-none focus:shadow-purple-500/60 shadow px-2 py-2 w-[20em] rounded transition-shadow font-medium text-base text-gray-700 tracking-wider">
                            <option value="Married">Married</option>
                            <option value="Single">Single</option>
                            <option value="Divorced">Divorced</option>
                            <option value="Widowed">Widowed</option>
                            <option value="SEPARATED">SEPARATED</option>
                        </select>
                        @error('status')
                            <span class="text-sm font-semibold text-red-800/95 tracking-wide">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <select type="text" name="gender" placeholder="Gender"
                            class="outline-none focus:outline-none focus:shadow-purple-500/60 shadow px-2 py-2 w-[20em] rounded transition-shadow font-medium text-base text-gray-700 tracking-wider">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Alien">Alien</option>
                        </select>
                        @error('gender')
                            <span class="text-sm font-semibold text-red-800/95 tracking-wide">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="flex justify-between items-start gap-x-2">
                    <div class="flex flex-col">
                        <input type="text" name="monthlyIncome" placeholder="Monthly Income"
                            class="outline-none focus:outline-none focus:shadow-purple-500/60 shadow px-2 py-2 w-[20em] rounded transition-shadow font-medium text-base text-gray-700 tracking-wider"
                            value="{{ old('monthlyIncome') == '' ? $data['monthlyIncome'] : old('monthlyIncome') }}">
                        @error('monthlyIncome')
                            <span class="text-sm font-semibold text-red-800/95 tracking-wide">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <select type="text" name="socialClass" placeholder="Status"
                            class="outline-none focus:outline-none focus:shadow-purple-500/60 shadow px-2 py-2 w-[20em] rounded transition-shadow font-medium text-base text-gray-700 tracking-wider">
                            <option value="Poor">Poor</option>
                            <option value="Low Income class">Low Income-Class (But Not Poor)</option>
                            <option value="Lower Middle Class">Lower Middle-Class</option>
                            <option value="Middle Middle Class">Middle Middle-Class</option>
                            <option value="Upper Middle Class">Upper Middle-Class</option>
                            <option value="Upper Income Class">Upper Income-Class (But Not Rich)</option>
                            <option value="Rich">Rich</option>
                        </select>
                        @error('socialClass')
                            <span class="text-sm font-semibold text-red-800/95 tracking-wide">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <input type="text" name="householdNumber" placeholder="Household #"
                            class="outline-none focus:outline-none focus:shadow-purple-500/60 shadow px-2 py-2 w-[20em] rounded transition-shadow font-medium text-base text-gray-700 tracking-wider"
                            value="{{ old('householdNumber') == '' ? $data['householdNumber'] : old('householdNumber') }}">
                        @error('householdNumber')
                            <span class="text-sm font-semibold text-red-800/95 tracking-wide">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <input type="text" name="municipality" placeholder="Municipality"
                            class="outline-none focus:outline-none focus:shadow-purple-500/60 shadow px-2 py-2 w-[20em] rounded transition-shadow font-medium text-base text-gray-700 tracking-wider"
                            value="{{ old('municipality') == '' ? $data['municipality'] : old('municipality') }}">
                        @error('municipality')
                            <span class="text-sm font-semibold text-red-800/95 tracking-wide">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="flex justify-between items-start gap-x-2">
                    <div class="flex flex-col">
                        <select type="text" name="sitio" placeholder="Sitio"
                            class="outline-none focus:outline-none focus:shadow-purple-500/60 shadow px-2 py-2 w-[20em] rounded transition-shadow font-medium text-base text-gray-700 tracking-wider">
                            <option value="SENTRONG IBABA">SENTRONG IBABA</option>
                            <option value="SENTRONG KABILA">SENTRONG KABILA</option>
                            <option value="SALIW IBABA">SALIW IBABA</option>
                            <option value="MAULABE">MAULABE</option>
                            <option value="SENTRONG ILAYA">SENTRONG ILAYA</option>
                            <option value="NABALAGBAG">NABALAGBAG</option>
                            <option value="SALIW ILAYA">SALIW ILAYA</option>
                        </select>
                        @error('sitio')
                            <span class="text-sm font-semibold text-red-800/95 tracking-wide">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <select type="text" name="sector" placeholder="Sector"
                            class="outline-none focus:outline-none focus:shadow-purple-500/60 shadow px-2 py-2 w-auto rounded transition-shadow font-medium text-base text-gray-700 tracking-wider">
                            <option value="SENIOR CITIZEN">SENIOR CITIZEN</option>
                            <option value="PERSON WITH DISABILITY">PERSON WITH DISABILITY</option>
                            <option value="SOLO PARENT">SOLO PARENT</option>
                            <option value="PREGNANT/LACTATING WOMEN">PREGNANT/LACTATING WOMEN</option>
                            <option value="OFs">OFs</option>
                            <option value="INDIGENT INDIGENOUS PEOPLES">INDIGENT INDIGENOUS PEOPLES</option>
                            <option value="UNDERPRIVILEDGE AND HOME">UNDERPRIVILEDGE AND HOMELESS INDIVUALS</option>
                            <option value="UNDERPRIVILEDGE AND HOME">OTHER</option>
                        </select>
                        @error('sector')
                            <span class="text-sm font-semibold text-red-800/95 tracking-wide">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <input type="text" name="occupation" placeholder="Occupation and Location"
                            class="outline-none focus:outline-none focus:shadow-purple-500/60 shadow px-2 py-2 w-[30em] rounded transition-shadow font-medium text-base text-gray-700 tracking-wider"
                            value="{{ old('occupation') == '' ? $data['occupation'] : old('occupation') }}">
                        @error('occupation')
                            <span class="text-sm font-semibold text-red-800/95 tracking-wide">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center justify-start gap-x-2">
                        <div class="flex items-center justify-start gap-2">
                            <span class="text-gray-300 font-semibold tracking-wide">MARK AS:</span>
                            <select type="text" name="markAs" placeholder="Sector"
                                class="outline-none focus:outline-none focus:shadow-purple-500/60 shadow px-1 py-1 w-auto rounded transition-shadow font-medium text-base text-gray-700 tracking-wider">
                                <option value="BENEFICIARIES">BENEFICIARIES</option>
                                <option value="UNBENEFICIARIES">UNBENEFICIARIES</option>
                            </select>
                        </div>
                        <div class="flex items-center justify-start gap-2">
                            <span class="text-gray-300 font-semibold tracking-wide">REMARKS:</span>
                            <select type="text" name="remarks" placeholder="Sector"
                                class="outline-none focus:outline-none focus:shadow-purple-500/60 shadow px-1 py-1 w-auto rounded transition-shadow font-medium text-base text-gray-700 tracking-wider">
                                <option value="PRIORITY">PRIORITY</option>
                                <option value="RECOMMENDED">RECOMMENDED</option>
                                <option value="NONE">NONE</option>
                            </select>
                        </div>
                    </div>
                    <div class="felx items-center justify-start gap-2">
                        <input type="submit" value="UPDATE"
                            class="bg-yellow-400 py-1 px-3 font-semibold text-gray-700 tracking-wider text-lg border-0 rounded cursor-pointer hover:bg-yellow-500 transition-colors">
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
