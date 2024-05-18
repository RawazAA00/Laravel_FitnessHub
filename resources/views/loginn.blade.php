
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>FitnessHub</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">
	<script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    <header class="head1">
		<nav>
			<img src="/assets/logo.png" alt="" class="logo">
			<ul>
				<li><a href="home">Home</a></li>
				<li><a href="shop">Shop</a></li>
                <li><a href="cart">Cart</a></li>
				<li><a href="contact">Contact</a></li>
				<li><a href="loginn">Log in</a></li>
			</ul>
		</nav>
	</header>

    <div class="bg-img">
        <div class="content">
           <header>Login</header>
            <form name="loginForm" action="login" method="post" onsubmit="return validateForm()">
                <div class="field">
                    <span class="fa fa-user"></span>
                    <input type="text" name="email" placeholder="Email">
                    <div id="emailError" class="error-message"></div>
                </div>
                <div class="field space">
                    <span class="fa fa-lock"></span>
                    <input type="password" name="password" class="pass-key" placeholder="Password">
                    <div id="passwordError" class="error-message"></div>
                </div>
                <div class="field space">
                    <input type="submit" value="LOGIN">
                </div>
              </form>

           <div class="signup">
              Don't have account?
              <a href="signupp">Signup Now</a>
           </div>
        </div>
     </div>
     <footer class="bg-blue-950 ">
        <div class="container px-6 py-8 mx-auto">
            <div class="flex flex-col items-center text-center">
                <a href="#">
                    <img class="w-15 h-10" src="/assets/logo.png" alt="">
                </a>

                <div class="flex flex-wrap justify-center mt-6 -mx-4">
                    <a href="home" class="mx-4 text-sm text-neutral-50 hover:text-red-500" > Home </a>
                    <a href="about" class="mx-4 text-sm text-neutral-50 hover:text-red-500 " > About </a>
                    <a href="contact" class="mx-4 text-sm text-neutral-50 hover:text-red-500 "> Contact Us </a>
                </div>
        </div>
        </div>
    </footer>
</body>
<script>
    function validateForm() {
        // Retrieve form data
        var email = document.forms["loginForm"]["email"].value;
        var password = document.forms["loginForm"]["password"].value;

        // Initialize an error variable to track validation errors
        var errors = false;

        // Validate email format
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            displayError("emailError", "Invalid email format.");
            errors = true;
        } else {
            hideError("emailError");
        }

        // Validate password length
        if (password.length < 8) {
            displayError("passwordError", "Password must be at least 8 characters long.");
            errors = true;
        } else {
            hideError("passwordError");
        }

        // If there are errors, prevent form submission
        if (errors) {
            return false;
        }

        // Proceed with form submission or other actions
    }

    // Function to display error message
    function displayError(elementId, message) {
        var errorElement = document.getElementById(elementId);
        if (errorElement) {
            errorElement.innerHTML = message;
            errorElement.style.display = "block";
        }
    }

    // Function to hide error message
    function hideError(elementId) {
        var errorElement = document.getElementById(elementId);
        if (errorElement) {
            errorElement.innerHTML = "";
            errorElement.style.display = "none";
        }
    }
</script>


</html>


