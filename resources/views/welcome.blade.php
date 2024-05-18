<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitnessHub</title>
    <!-- Your CSS and JavaScript files here -->
    <style>
        /* Your styles here */
        .logo {
            /* Add your logo styles */
        }
        nav ul {
            /* Add your navigation menu styles */
        }
        nav ul li {
            /* Add your navigation menu item styles */
        }
        nav ul li a {
            /* Add your navigation menu link styles */
        }
        /* Add more styles as needed */
        .dropdown {
            position: relative;
            display: inline-block;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f32805;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>
<body>
<header id="head1">
    <nav>
        <img src="/assets/logo.png" alt="" class="logo">
        <ul>
            <li><a href="home">Home</a></li>
            <li><a href="store">Shop</a></li>
            <li><a href="cart">Cart</a></li>
            <li><a href="contact">Contact</a></li>
            @guest
                <li><a href="{{ route('login') }}">Login</a></li>
            @endguest
            @auth
                <li class="dropdown">
                    <a href="#" class="user-name">{{ Auth::user()->name }}</a>
                    <div class="dropdown-content">
                        <a href="{{ route('profile.edit') }}">Profile</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit">Log Out</button>
                        </form>
                    </div>
                </li>
            @endauth
        </ul>
    </nav>
</header>
<main>
    @yield('content')
</main>
<footer class="bg-blue-950">
    <div class="container px-6 py-8 mx-auto">
        <div class="flex flex-col items-center text-center">
            <a href="#">
                <img class="w-15 h-10" src="/assets/logo.png" alt="">
            </a>

            <div class="flex flex-wrap justify-center mt-6 -mx-4">
                <a href="home" class="mx-4 text-sm text-neutral-50 hover:text-red-500">Dashboard</a>
                <a href="about" class="mx-4 text-sm text-neutral-50 hover:text-red-500">About</a>
                <a href="contact" class="mx-4 text-sm text-neutral-50 hover:text-red-500">Contact Us</a>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
