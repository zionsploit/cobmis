@extends('./components.authLayout')

@section('title', 'Registration')
@section('contents')
    <div class="my-5">
        <span class="text-gray-900 text-2xl font-semibold tracking-wider">REGISTRATION FORM</span>
    </div>
    @if ($status === 200)
        <div class="bg-green-700/50 py-2 px-2 text-center border-0 rounded my-5">
            <span class="font-semibold text-gray-100 text-lg tracking-wide">{{ $message }}</span>
        </div>
    @endif
    @if ($status === 500)
        <div class="bg-red-700/50 py-2 px-2 text-center border-0 rounded my-5">
            <span class="font-semibold text-gray-100 text-lg tracking-wide">{{ $message }}</span>
        </div>
    @endif
    <div class="bg-[#3D405B] py-5 px-4 border-0 rounded shadow-md">
        <form action="/registration-form" method="post">
            @csrf
            <div class="flex flex-col gap-y-5">
                <div class="flex justify-between items-start gap-x-2">
                    <div class="flex flex-col">
                        <input type="text" name="lastName" placeholder="Last Name"
                            class="outline-none focus:outline-none focus:shadow-purple-500/60 shadow px-2 py-2 w-[20em] rounded transition-shadow font-medium text-base text-gray-700 tracking-wider"
                            value="{{ old('lastName') }}">
                        @error('lastName')
                            <span class="text-sm font-semibold text-red-800/95 tracking-wide">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <input type="text" name="firstName" placeholder="First Name"
                            class="outline-none focus:outline-none focus:shadow-purple-500/60 shadow px-2 py-2 w-[20em] rounded transition-shadow font-medium text-base text-gray-700 tracking-wider"
                            value="{{ old('firstName') }}">
                        @error('firstName')
                            <span class="text-sm font-semibold text-red-800/95 tracking-wide">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <input type="text" name="middleName" placeholder="Middle Name"
                            class="outline-none focus:outline-none focus:shadow-purple-500/60 shadow px-2 py-2 w-[20em] rounded transition-shadow font-medium text-base text-gray-700 tracking-wider"
                            value="{{ old('middleName') }}">
                        @error('middleName')
                            <span class="text-sm font-semibold text-red-800/95 tracking-wide">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <input type="text" name="contactNumber" placeholder="Contact Number"
                            class="outline-none focus:outline-none focus:shadow-purple-500/60 shadow px-2 py-2 w-[20em] rounded transition-shadow font-medium text-base text-gray-700 tracking-wider"
                            value="{{ old('contactNumber') }}">
                        @error('contactNumber')
                            <span class="text-sm font-semibold text-red-800/95 tracking-wide">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="flex justify-between items-start gap-x-2">
                    <div class="flex flex-col">
                        <input type="text" name="dateOfBirth" placeholder="Date of Birth [1998-1-30]"
                            class="outline-none focus:outline-none focus:shadow-purple-500/60 shadow px-2 py-2 w-[20em] rounded transition-shadow font-medium text-base text-gray-700 tracking-wider"
                            value="{{ old('dateOfBirth') }}">
                        @error('dateOfBirth')
                            <span class="text-sm font-semibold text-red-800/95 tracking-wide">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <input type="text" name="religion" placeholder="Religion"
                            class="outline-none focus:outline-none focus:shadow-purple-500/60 shadow px-2 py-2 w-[20em] rounded transition-shadow font-medium text-base text-gray-700 tracking-wider"
                            value="{{ old('religion') }}">
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
                            value="{{ old('monthlyIncome') }}">
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
                            value="{{ old('householdNumber') }}">
                        @error('householdNumber')
                            <span class="text-sm font-semibold text-red-800/95 tracking-wide">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <input type="text" name="municipality" placeholder="Municipality"
                            class="outline-none focus:outline-none focus:shadow-purple-500/60 shadow px-2 py-2 w-[20em] rounded transition-shadow font-medium text-base text-gray-700 tracking-wider"
                            value="{{ old('municipality') }}">
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
                            value="{{ old('occupation') }}">
                        @error('occupation')
                            <span class="text-sm font-semibold text-red-800/95 tracking-wide">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="border-2 border-gray-600 p-2 rounded">
                    <table class="table-auto text-gray-300 w-full items-center">
                        <thead>
                            <tr>
                                <th>FAMILY MEMBERS (BENEFICIARIES)</th>
                                <th>RELATION</th>
                                <th>BIRTH DATE (mm/dd/yy)</th>
                                <th>GENDER</th>
                                <th>OCCUPATION</th>
                                <th>SECTOR</th>
                                <th>HEALTH CONDITION</th>
                            </tr>
                        </thead>
                        <tbody id="group_item">
                            <tr class="items-center" id="items_row">
                                <td>
                                    <input type="text" name="ben_familyMembers[]" id=""
                                        class="outline-none focus:outline-none focus:shadow-purple-500/60 shadow px-1 py-1 w-full rounded transition-shadow font-medium text-base text-gray-700 tracking-wider">
                                </td>
                                <td><input type="text" name="ben_relation[]" id=""
                                        class="outline-none focus:outline-none focus:shadow-purple-500/60 shadow px-1 py-1 w-full rounded transition-shadow font-medium text-base text-gray-700 tracking-wider">
                                </td>
                                <td><input type="text" name="ben_birthDate[]" id=""
                                        class="outline-none focus:outline-none focus:shadow-purple-500/60 shadow px-1 py-1 w-full rounded transition-shadow font-medium text-base text-gray-700 tracking-wider">
                                </td>
                                <td><input type="text" name="ben_gender[]" id=""
                                        class="outline-none focus:outline-none focus:shadow-purple-500/60 shadow px-1 py-1 w-full rounded transition-shadow font-medium text-base text-gray-700 tracking-wider">
                                </td>
                                <td><input type="text" name="ben_occupation[]" id=""
                                        class="outline-none focus:outline-none focus:shadow-purple-500/60 shadow px-1 py-1 w-full rounded transition-shadow font-medium text-base text-gray-700 tracking-wider">
                                </td>
                                <td><input type="text" name="ben_sector[]" id=""
                                        class="outline-none focus:outline-none focus:shadow-purple-500/60 shadow px-1 py-1 w-full rounded transition-shadow font-medium text-base text-gray-700 tracking-wider">
                                </td>
                                <td><input type="text" name="ben_healthCondition[]" id=""
                                        class="outline-none focus:outline-none focus:shadow-purple-500/60 shadow px-1 py-1 w-full rounded transition-shadow font-medium text-base text-gray-700 tracking-wider">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="flex justify-between items-center mt-2">
                        <span class="font-semibold text-sm text-gray-400 tracking-wider">NOTE: This table form is required
                            and shouldn't leave EMPTY</span>
                        <button
                            class="bg-orange-400 px-2 py-1 text-sm font-bold text-gray-800 tracking-wide rounded border-0 hover:bg-orange-500 transition-colors"
                            type="button" id="addMembers">ADD MEMBERS</button>
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
                        <input type="submit" value="SUBMIT"
                            class="bg-yellow-400 py-1 px-3 font-semibold text-gray-700 tracking-wider text-lg border-0 rounded cursor-pointer hover:bg-yellow-500 transition-colors">
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        let totalRow = 0;
        $('#addMembers').on('click', function() {
            $(`
                <tr class="items-center" id="items_row">
                    <td><input type="text" name="ben_familyMembers[]" id=""
                            class="outline-none focus:outline-none focus:shadow-purple-500/60 shadow px-1 py-1 w-full rounded transition-shadow font-medium text-base text-gray-700 tracking-wider">
                    </td>
                    <td><input type="text" name="ben_relation[]" id=""
                            class="outline-none focus:outline-none focus:shadow-purple-500/60 shadow px-1 py-1 w-full rounded transition-shadow font-medium text-base text-gray-700 tracking-wider">
                    </td>
                    <td><input type="text" name="ben_birthDate[]" id=""
                            class="outline-none focus:outline-none focus:shadow-purple-500/60 shadow px-1 py-1 w-full rounded transition-shadow font-medium text-base text-gray-700 tracking-wider">
                    </td>
                    <td><input type="text" name="ben_gender[]" id=""
                            class="outline-none focus:outline-none focus:shadow-purple-500/60 shadow px-1 py-1 w-full rounded transition-shadow font-medium text-base text-gray-700 tracking-wider">
                    </td>
                    <td><input type="text" name="ben_occupation[]" id=""
                            class="outline-none focus:outline-none focus:shadow-purple-500/60 shadow px-1 py-1 w-full rounded transition-shadow font-medium text-base text-gray-700 tracking-wider">
                    </td>
                    <td><input type="text" name="ben_sector[]" id=""
                            class="outline-none focus:outline-none focus:shadow-purple-500/60 shadow px-1 py-1 w-full rounded transition-shadow font-medium text-base text-gray-700 tracking-wider">
                    </td>
                    <td><input type="text" name="ben_healthCondition[]" id=""
                            class="outline-none focus:outline-none focus:shadow-purple-500/60 shadow px-1 py-1 w-full rounded transition-shadow font-medium text-base text-gray-700 tracking-wider">
                    </td>
                    <td>
                        <button
                            class="bg-red-400 px-2 py-1 text-sm font-bold text-gray-800 tracking-wide rounded border-0 hover:bg-red-500 transition-colors"
                            type="button" id="removeMembers">Remove</button>
                    </td>
                </tr>
            `).appendTo('#group_item');
            totalRow += 1;
            if (totalRow === 4) {
                $(this).hide();
            }
        });

        $(document).on('click', '#removeMembers', function() {
            $(this).closest('#items_row').remove();
            totalRow -= 1;
            if (totalRow !== 4) {
                $('#addMembers').show();
            }
        });
    })
</script>
