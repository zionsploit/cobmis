@extends('./components.authLayout')

@section('title', 'View')

@section('contents')
    <div class="my-5">
        <span class="text-gray-300/80 text-2xl font-semibold tracking-wider">View {{ 'User' }}</span>
    </div>
    <div class="flex justify-start items-start gap-x-2">
        <div class="flex flex-col justify-start items-start gap-y-2">
            <div class="flex justify-center items-center gap-x-2 text-gray-300 font-semibold tracking-wider text-base">
                <span>Last Name:</span>
                <span>{{ $data['lastName'] }}</span>
            </div>
            <div class="flex justify-center items-center gap-x-2 text-gray-300 font-semibold tracking-wider text-base">
                <span>First Name:</span>
                <span>{{ $data['firstName'] }}</span>
            </div>
            <div class="flex justify-center items-center gap-x-2 text-gray-300 font-semibold tracking-wider text-base">
                <span>Middle Name:</span>
                <span>{{ $data['middleName'] }}</span>
            </div>
            <div class="flex justify-center items-center gap-x-2 text-gray-300 font-semibold tracking-wider text-base">
                <span>Contact Number Name:</span>
                <span>{{ $data['contactNumber'] }}</span>
            </div>
            <div class="flex justify-center items-center gap-x-2 text-gray-300 font-semibold tracking-wider text-base">
                <span>Date Of Birth Name:</span>
                <span>{{ $data['dateOfBirth'] }}</span>
            </div>
            <div class="flex justify-center items-center gap-x-2 text-gray-300 font-semibold tracking-wider text-base">
                <span>Religion Name:</span>
                <span>{{ $data['religion'] }}</span>
            </div>
            <div class="flex justify-center items-center gap-x-2 text-gray-300 font-semibold tracking-wider text-base">
                <span>Status Name:</span>
                <span>{{ $data['status'] }}</span>
            </div>
            <div class="flex justify-center items-center gap-x-2 text-gray-300 font-semibold tracking-wider text-base">
                <span>Gender Name:</span>
                <span>{{ $data['gender'] }}</span>
            </div>
            <div class="flex justify-center items-center gap-x-2 text-gray-300 font-semibold tracking-wider text-base">
                <span>Monthly Income Name:</span>
                <span>{{ $data['monthlyIncome'] }}</span>
            </div>
        </div>
        <div class="flex flex-col justify-start items-start gap-y-2">
            <div class="flex justify-center items-center gap-x-2 text-gray-300 font-semibold tracking-wider text-base">
                <span>Social Class:</span>
                <span>{{ $data['socialClass'] }}</span>
            </div>
            <div class="flex justify-center items-center gap-x-2 text-gray-300 font-semibold tracking-wider text-base">
                <span>Household Number:</span>
                <span>{{ $data['householdNumber'] }}</span>
            </div>
            <div class="flex justify-center items-center gap-x-2 text-gray-300 font-semibold tracking-wider text-base">
                <span>Municipality:</span>
                <span>{{ $data['municipality'] }}</span>
            </div>
            <div class="flex justify-center items-center gap-x-2 text-gray-300 font-semibold tracking-wider text-base">
                <span>Sitio:</span>
                <span>{{ $data['sitio'] }}</span>
            </div>
            <div class="flex justify-center items-center gap-x-2 text-gray-300 font-semibold tracking-wider text-base">
                <span>Sector:</span>
                <span>{{ $data['sector'] }}</span>
            </div>
            <div class="flex justify-center items-center gap-x-2 text-gray-300 font-semibold tracking-wider text-base">
                <span>Occupation:</span>
                <span>{{ $data['occupation'] }}</span>
            </div>
            <div class="flex justify-center items-center gap-x-2 text-gray-300 font-semibold tracking-wider text-base">
                <span>Mark As:</span>
                <span>{{ $data['markAs'] }}</span>
            </div>
            <div class="flex justify-center items-center gap-x-2 text-gray-300 font-semibold tracking-wider text-base">
                <span>Remarks:</span>
                <span>{{ $data['remarks'] }}</span>
            </div>
            <div class="flex justify-center items-center gap-x-2 text-gray-300 font-semibold tracking-wider text-base">
                <button type="button" class="py-2 px-5 border-2 border-green-300 rounded bg-green-300">View Beneficiaries</button>
            </div>
        </div>
    </div>
@endsection
