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
        /* Center the button */
        .btn-center {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        /* Update button styles */
        .custom-btn {
            background-color: #EF4444; /* Red color from your older prompts */
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }
        .custom-btn:hover {
            background-color: #DC2626; /* Darker red on hover */
        }
    </style>
</head>
<body>
<div class="bg-img">
    <div class="content">
        <header>Forgot Password</header>
        <!-- Changed text color to white -->
        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        @if (session('status'))
            <div class="mb-4 text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="field space">
                <span class="fa fa-envelope"></span>
                <input type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                @error('email')
                <div id="emailError" class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <!-- Centered button -->
            <div class="space btn-center">
                <button type="submit" class="custom-btn">
                    Email Password Reset Link
                </button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
@endsection
