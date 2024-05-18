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
    </style>
</head>
<body>
<div class="bg-img">
    <div class="content">
        <header>Confirm Password</header>
        <!-- Changed text color to white -->
        <div class="mb-4 text-sm text-gray-600">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <div class="field space">
                <!-- Added custom class to label -->
                <x-input-label for="password" :value="__('Password')" class="form-label" />

                <x-text-input id="password" class="block mt-1 w-full"
                              type="password"
                              name="password"
                              required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="flex justify-end mt-4">
                <!-- Use the red button style -->
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 focus:outline-none focus:bg-red-600">
                    {{ __('Confirm') }}
                </button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
@endsection
