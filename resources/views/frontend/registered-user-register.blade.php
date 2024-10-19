@extends('frontend.register')

@section('login')
    <div class="">


        @include('error')
        <form class="ml-4 md:mx-0 font-[sans-serif] my-3" action="{{ route('registeredUser.store') }}" method="POST"
            enctype="multipart/form-data">
            @csrf

            <x-frontend.forms.input-type-field :value="old('username')" label="Username" id="username" name="username" labelClass="w-48"
                type="text" />
            <x-frontend.forms.input-type-field :value="old('email')"   label="Email Address" id="email" name="email" labelClass="w-48"
                type="email" />

            <x-frontend.forms.input-type-field :value="old('phone_no')" label="Phone No" id="phone_no" name="phone_no" labelClass="w-48"
                type="text" />
            <x-frontend.forms.select-type-field :value="old('gender')" label="Gender" id="gender" name="gender"
                :options="['male' => 'Male', 'female' => 'Female', 'other' => 'Other']" labelClass="w-48" />


            <x-frontend.forms.input-type-field :value="old('d_o_b')" label="Date of Birth" id="d_o_b" name="d_o_b" labelClass="w-48"
                type="date" />

            <x-frontend.forms.input-type-field label="Password" id="password" name="password" type="password" labelClass="w-48" />
            <x-frontend.forms.input-type-field label="Confirm Password" id="password_confirmation" labelClass="w-48"
                name="password_confirmation" type="password" />
            <x-frontend.forms.multiple-select-component :value="old('category[]')" label="Choose Your Ad Category" id="category" labelClass="w-48"
                name="category[]" :options="$categories" />

            <button type="button submit"
                class="!mt-8 px-6 pt-1 pb-2  bg-[#333] hover:bg-[#444] text-xs text-white mx-auto block">Submit</button>
        </form>
    </div>
@endsection
