@extends('welcome')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fitness Website - Sign Up</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/signup.css')}}">
	<script src="https://cdn.tailwindcss.com"></script></head>
<body>
	<main class="max-w-4xl mx-auto py-8 px-4">
		<section id="signup">
			<h2 class="text-2xl font-bold mb-4">Sign Up</h2>
			<p class="mb-4">Fill out the form below to create an account.</p>
			<form class="">
				<div class="mb-4">
					<label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
					<input type="text" id="name" name="name" required class="border border-red-500 rounded-md px-2 py-2 w-full focus:outline-none focus:ring focus:border-red-600">
				</div>

				<div class="mb-4">
					<label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
					<input type="email" id="email" name="email" required class="border border-red-600 rounded-md px-3 py-2 w-full focus:outline-none focus:ring focus:border-red-600">
				</div>

				<div class="mb-4">
					<label for="Class" class="block text-gray-700 font-bold mb-2">Class</label>
					<select id="Class" name="Class" required class="border border-red-600 rounded-md px-3 py-2 w-full focus:outline-none focus:ring focus:border-red-600">
                        <option value="#">#</option>
                        <option value="#">#</option>
                        <option value="#">#</option>
                    </select>
				</div>
				<button type="submit" class="bg-red-500 text-white hover:bg-white hover:text-red-500 border hover:border-red-500 font-bold py-2 px-4 rounded">Sign Up</button>
			</form>
		</section>
	</main>
</body>
</html>
@endsection
