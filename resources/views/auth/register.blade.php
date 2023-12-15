<!-- we're extending the base layout -->
@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-6/12 bg-white p-6 rounded-lg">
        <form action="{{ route('register') }}" method="post">
            <!-- if i dont include @csrf i will get a 419 page expired error -->
            @csrf
            <div class="mb-4">
                <label for="name" class="font-medium text-lg mb-2">Name *</label>
                <input type="text" name="name" id="name" placeholder="Enter your name"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="">
                    @error('name')
                    <div class="text-red-500 mt-2 text-sm">
                        <this is a scoped message variable!--  -->
                    {{$message}}
                    </div>
                    @enderror
            </div>
            <div class="mb-4">
                <label for="username" class="font-medium text-lg mb-2">Username *</label>
                <input type="text" name="username" id="username" placeholder="Enter your username"
                class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="">
                    @error('username')
                    <div class="text-red-500 mt-2 text-sm">
                        <!--this is a scoped message variable-->
                    {{$message}}
                    </div>
                    @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="font-medium text-lg mb-2">Email *</label>
                <input type="email" name="email" id="email" placeholder="Enter your email"
                class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="">
                    @error('email')
                    <div class="text-red-500 mt-2 text-sm">
                     <!--this is a scoped message variable-->
                    {{$message}}
                    </div>
                    @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="font-medium text-lg mb-2">Password *</label>
                <input type="password" name="password" id="password" placeholder="Enter your password"
                class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="">
                    @error('password')
                    <div class="text-red-500 mt-2 text-sm">
                        <!--this is a scoped message variable-->
                    {{$message}}
                    </div>
                    @enderror
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="font-medium text-lg mb-2">Confirm Password *</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm password"
                class="bg-gray-100 border-2 w-full p-4 rounded-lg " value="">
                    
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">
                    Register
                </button>
            </div>
        </form>

        </div>
    </div>
@endsection