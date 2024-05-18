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
    <script src="{{ asset('js/signup.js') }}"></script>
</head>
<body>

<div class="bg-img">
    <div class="content">
        <header>Sign Up</header>
        <form name="signupForm" method="POST" action="{{ route('register') }}" onsubmit="return validateForm()">
            @csrf

            <!-- Name -->
            <div class="field space">
                <span class="fa fa-user"></span>
                <input type="text" name="name" id="name" placeholder="Name" value="{{ old('name') }}" required autofocus autocomplete="name">
                @error('name')
                <div id="nameError" class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <!-- Email Address -->
            <div class="field space">
                <span class="fa fa-envelope"></span>
                <input type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="username">
                @error('email')
                <div id="emailError" class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <!-- Phone -->
            <div class="field space">
                <span class="fa fa-phone"></span>
                <input type="text" name="phone" id="phone" placeholder="Phone" value="{{ old('phone') }}">
                <div id="phoneError" class="error-message"></div>
            </div>

            <!-- Password -->
            <div class="field space">
                <span class="fa fa-lock"></span>
                <input type="password" name="password" id="password" class="pass-key" placeholder="Password" required autocomplete="new-password">
                @error('password')
                <div id="passwordError" class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="field space">
                <span class="fa fa-lock"></span>
                <input type="password" name="password_confirmation" id="password_confirmation" class="pass-key" placeholder="Confirm Password" required autocomplete="new-password">
                @error('password_confirmation')
                <div id="confirmPasswordError" class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="field space">
                <input type="submit" value="SIGN UP">
            </div>
        </form>

        <div class="signup">
            Already have an account?
            <a href="{{ route('login') }}">Log in</a>
        </div>
    </div>
</div>


<script>
    function validateForm() {
        var name = document.forms["signupForm"]["name"].value;
        var email = document.forms["signupForm"]["email"].value;
        var phone = document.forms["signupForm"]["phone"].value;
        var password = document.forms["signupForm"]["password"].value;
        var confirmPassword = document.forms["signupForm"]["password_confirmation"].value;
        var errors = false;

        if (name.length < 4) {
            displayError("nameError", "Name must be at least 4 characters long.");
            errors = true;
        } else {
            hideError("nameError");
        }

        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            displayError("emailError", "Invalid email format.");
            errors = true;
        } else {
            hideError("emailError");
        }

        var phoneRegex = /^\d{10,11}$/;
        if (phone && !phoneRegex.test(phone)) {
            displayError("phoneError", "Phone number must be 10 or 11 digits.");
            errors = true;
        } else {
            hideError("phoneError");
        }

        if (password.length < 8) {
            displayError("passwordError", "Password must be at least 8 characters long.");
            errors = true;
        } else {
            hideError("passwordError");
        }

        if (password !== confirmPassword) {
            displayError("confirmPasswordError", "Password and Confirm Password must match.");
            errors = true;
        } else {
            hideError("confirmPasswordError");
        }

        if (errors) {
            return false;
        }
    }

    function displayError(elementId, message) {
        var errorElement = document.getElementById(elementId);
        if (errorElement) {
            errorElement.innerHTML = message;
            errorElement.style.display = "block";
        }
    }

    function hideError(elementId) {
        var errorElement = document.getElementById(elementId);
        if (errorElement) {
            errorElement.innerHTML = "";
            errorElement.style.display = "none";
        }
    }
</script>
</body>
</html>
@endsection
