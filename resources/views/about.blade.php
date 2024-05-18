@extends('welcome')
    @section('content')
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fitness Website - About</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/about.css') }}">
	<script src="https://cdn.tailwindcss.com"></script>

</head>
<body>


	<main>
		<div class="about">
			<div class="option"><img src="/assets/logo.png" alt=""></div>
			<div class="aboutus">About Us</div>
			<div class="option">Established in 2005, Fitness Center has been a pioneer in the fitness industry, dedicated to helping individuals achieve their health and wellness goals. What started as a small neighborhood gym has now grown into a leading fitness center, providing a comprehensive range of facilities and services. With a strong commitment to our members' success, we have built a reputation for creating a supportive and motivating environment. Our experienced trainers are passionate about guiding our members on their fitness journey, offering personalized guidance and pushing them to reach their full potential. We stay ahead of the curve by incorporating the latest fitness trends and technologies into our programs. Our state-of-the-art facilities are equipped with top-of-the-line equipment, ensuring a seamless workout experience. From yoga and cardio to strength training and more, we offer a diverse range of classes to cater to the unique preferences and goals of our members. Join our fitness community today and experience the Fitness Center difference. Let us help you transform your life through the power of fitness.</div>
		</div>
	</main>


</body>
</html>
@endsection
