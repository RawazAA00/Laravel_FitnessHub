@extends('welcome')

@section('content')
    <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitnessHub</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Add custom styles here */
        .text-gray-600 {
            color: white; /* Change grey text to white */
        }
        .bg-red-500 {
            background-color: #EF4444; /* Red color from your older prompts */
        }
        /* Custom styles for labels */
        .form-label {
            color: white;
        }
    </style>
</head>
<body>
<div class="bg-img">
    <div class="content">
        <header>Reset Password</header>

        <form method="POST" action="{{ route('password.store') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <!-- Added custom class to label -->
                <x-input-label for="email" :value="__('Email')" class="form-label" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <!-- Added custom class to label -->
                <x-input-label for="password" :value="__('Password')" class="form-label" />
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <!-- Added custom class to label -->
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="form-label" />
                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                              type="password"
                              name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <!-- Use the red button style -->
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 focus:outline-none focus:bg-red-600">
                    {{ __('Reset Password') }}
                </button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
@endsection
