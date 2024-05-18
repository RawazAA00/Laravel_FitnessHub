@extends('welcome')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>FitnessHub - Contact Us</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/contact.css')}}">
</head>
<body>
	<main>
		<section id="contact">
			<h2>Contact Us</h2>
			<p>Have a question or comment? Fill out the form below and we'll get back to you as soon as possible.</p>
			<form>
				<label for="name">Name</label>
				<input type="text" id="name" name="name" required>

				<label for="email">Email</label>
				<input type="email" id="email" name="email" required>

				<label for="subject">Subject</label>
				<input type="text" id="subject" name="subject" required>

				<label for="message">Message</label>
				<textarea id="message" name="message" required></textarea>

				<button type="submit" class="cta-button">Send Message</button>
			</form>
		</section>
	</main>

</body>
</html>
@endsection
