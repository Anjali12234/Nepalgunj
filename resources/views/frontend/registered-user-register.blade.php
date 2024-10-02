@extends('frontend.register')

@section('login')
    <div class="">


        @include('error')
        <form class="ml-4 md:mx-0 font-[sans-serif] my-3" action="{{ route('registeredUser.store') }}" method="POST"
            enctype="multipart/form-data">
            @csrf

            <x-frontend.forms.input-type-field :value="old('username')" label="Username" id="username" name="username"
                type="text" />
            <x-frontend.forms.input-type-field :value="old('email')" label="Email Address" id="email" name="email"
                type="email" />

            <x-frontend.forms.input-type-field :value="old('phone_no')" label="Phone No" id="phone_no" name="phone_no"
                type="text" />
            <x-frontend.forms.select-type-field :value="old('gender')" label="Gender" id="gender" name="gender"
                :options="['male' => 'Male', 'female' => 'Female', 'other' => 'Other']" />

            {{-- <x-frontend.forms.select-type-field label="Choose Your Ad Category" id="main_category_id" name="main_category_id"
                 :options="$categories"  /> --}}

            <x-frontend.forms.input-type-field :value="old('d_o_b')" label="Date of Birth" id="d_o_b" name="d_o_b"
                type="date" />

            <x-frontend.forms.input-type-field label="Password" id="password" name="password" type="password" />
            <x-frontend.forms.input-type-field label="Confirm Password" id="password_confirmation"
                name="password_confirmation" type="password" />
            <x-frontend.forms.multiple-select-component :value="old('category[]')" label="Choose Your Ad Category" id="category"
                name="category[]" :options="$categories" />

            <button type="button submit"
                class="!mt-8 px-6 pt-1 pb-2  bg-[#333] hover:bg-[#444] text-xs text-white mx-auto block">Submit</button>
        </form>
    </div>
@endsection
