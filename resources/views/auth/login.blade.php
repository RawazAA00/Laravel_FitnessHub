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
        /* Adjustments for login form */
        .login-form {
            max-width: 400px; /* Limit width of the form */
            margin: 0 auto; /* Center the form horizontally */
        }
        /* Error message styles */
        .error-message {
            color: red;
            font-size: 12px;
            margin-top: 5px;
        }
    </style>
</head>
<body>
<div class="bg-img">
    <div class="content login-form">
        <header>Login</header>

        <!-- Session Status -->
        @if (session('status'))
            <div class="mb-4 text-sm font-medium text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form name="loginForm" method="POST" action="{{ route('login') }}" onsubmit="return validateForm()">
            @csrf

            <!-- Email Address -->
            <div class="field">
                <span class="fa fa-user"></span>
                <input type="email" name="email" id="email" class="block mt-1 w-full" placeholder="Email" value="{{ old('email') }}" required autofocus autocomplete="username">
                @error('email')
                <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <!-- Password -->
            <div class="field space">
                <span class="fa fa-lock"></span>
                <input type="password" name="password" id="password" class="block mt-1 w-full pass-key" placeholder="Password" required autocomplete="current-password">
                @error('password')
                <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <!-- Updated button class -->
                <button type="submit" class="custom-btn ms-3">
                    {{ __('Log in') }}
                </button>
            </div>
        </form>

        <div class="signup">
            Don't have an account?
            <a href="{{ route('register') }}">Signup Now</a>
        </div>
    </div>
</div>

<script>
    function validateForm() {
        var email = document.forms["loginForm"]["email"].value.trim();
        var password = document.forms["loginForm"]["password"].value.trim();

        if (email === '' || password === '') {
            alert('Please enter both email and password.');
            return false;
        }

        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            alert('Invalid email format.');
            return false;
        }

        if (password.length < 8) {
            alert('Password must be at least 8 characters long.');
            return false;
        }

        return true; // Form will submit if all conditions are met
    }
</script>
</body>
</html>
@endsection
