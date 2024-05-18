@extends('welcome')

    @section('content')
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>FitnessHub</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
	<script src="https://cdn.tailwindcss.com"></script>

</head>
<body>

	<main>
		<section id="hero">
			<p>Get in shape and stay healthy with our world-class facilities and expert trainers.</p>
		</section>

		<section id="about">
			<h2>About Us</h2>
			<p>We are a full-service fitness center dedicated to helping our members achieve their health and fitness goals. Our facilities include state-of-the-art equipment, expert trainers, and a wide range of classes and programs.</p>
			<a href="about" class="cta-button">Learn More</a>
		</section>

		<section id="testimonials">
			<h2>Testimonials</h2>
			<div class="testimonial">
				<p>"I've been a member for over a year and I love it. The trainers are amazing and the facilities are top-notch."</p>
				<p class="author">- John S.</p>
			</div>
			<div class="testimonial">
				<p>"I've never been a fan of working out, but this place has changed my mind. The classes are fun and challenging, and the staff is friendly and supportive."</p>
				<p class="author">- Sarah M.</p>
			</div>
		</section>

		<section id="classes">
			<h2>Classes</h2>
			<ul>
				<li>
					<h3>Yoga</h3>
					<p>A relaxing and rejuvenating yoga class that helps you reduce stress and increase flexibility.</p>
				</li>
				<li>
					<h3>Cardio</h3>
					<p>A high-energy cardio workout that gets your heart pumping and burns calories.</p>
				</li>
				<li>
					<h3>Strength Training</h3>
					<p>A full-body strength training workout that helps you build muscle and increase strength.</p>
				</li>
			</ul>
			<a href="classes" class="cta-button">View All Classes</a>
		</section>

		<section id="pricing">
			<h2>Pricing</h2>
			<ul>
				<li>
					<h3>Monthly Membership</h3>
					<p>$50 per month</p>
				</li>
				<li>
					<h3>Class Package</h3>
					<p>$100 for 10 classes</p>
				</li>
				<li>
					<h3>Drop-In Rate</h3>
					<p>$15 per class</p>
				</li>
			</ul>
			<a href="csignup" class="cta-button">Sign Up For Classes Today</a>
		</section>
  </main>

</body>
</html>
@endsection
