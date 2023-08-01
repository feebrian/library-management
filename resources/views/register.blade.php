@extends('layouts.authenticate')
@section('container')
    <div class="rounded- bg-[#F9F9F9] shadow-lg w-[30.8503s8rem] p-9 mx-auto">
        <div class="heading flex justify-center items-center">
            <p class="font-inter-bold text-[2.5rem]">Sign<span class="text-[#0055A4]">Up</span></p>
        </div>

        <hr class="mb-12">

        <form action="/register" method="POST">
            @csrf
            <div class="form-group">

                <div class="data-input flex flex-col gap-y-4">
                    <div class="data-input-group">

                        <label for="username" class="block text-xl font-inter-bold">Username</label>
                        <input type="text" name="username" id="username" placeholder="Freaky Decky"
                            class="border-solid border rounded-[0.3125rem] p-2 h-9 border-[#7E7E7E] w-full">
                        @if ($errors->has('username'))
                            <div class="alert alert-error mt-2">
                                @include('svg.falied') <span>{{ $errors->first('username') }}</span>
                            </div>
                        @endif
                    </div>

                    <div class="data-input-group">

                        <label for="email" class="block text-xl font-inter-bold">Email</label>
                        <input type="email" name="email" id="email" placeholder="somewhere@gmail.com"
                            class="border-solid border rounded-[0.3125rem] p-2 h-9 border-[#7E7E7E] w-full">
                        @if ($errors->has('email'))
                            <div class="alert alert-error mt-2">
                                @include('svg.falied') <span>{{ $errors->first('email') }}</span>
                            </div>
                        @endif
                    </div>

                    <div class="data-input-group">

                        <label for="password" class="block text-xl font-inter-bold">Password</label>
                        <input type="password" name="password" id="password"
                            class="border-solid border rounded-[0.3125rem] p-2 h-9 border-[#7E7E7E] w-full">
                        <div class="form-control">
                            <label class="flex items-center my-1 gap-x-2">
                                <input type="checkbox" class="checkbox" id="show-password" />
                                <span class="label-text">Show Password</span>
                            </label>
                        </div>
                        <p class="italic text-xs mb-2"><span class="text-red-700">* </span>password must contain
                            atleast
                            8 character, 1
                            capital letter, 1
                            number and 1 symbol
                        </p>
                        @if ($errors->has('password'))
                            <div class="alert alert-error mt-2">
                                @include('svg.falied') <span>{{ $errors->first('password') }}</span>
                            </div>
                        @endif
                    </div>
                </div>

                <p class="font-poppins-reguler text-base text-center">already have an account? <a href="/login"
                        class="underline">login</a>
                    now</p>

                <div class="button-container flex justify-center mt-[1.05rem] mb-[5.19rem]">
                    <button class="text-2xl bg-[#0055A4] rounded-[0.625rem] py-2.5 px-10 text-white font-inter-bold"
                        type="submit">Register</button>
                </div>
            </div>
        </form>
    </div>
@endsection
