@extends('welcome')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fitness Website - Classes</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/classes.css') }}">
	<script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
	<main>
		<div class="box">

        </div>

        <section id="classes">
			<ul id="options">
                <li>
                    <img style="width: 400px;" src="/assets/weight.jpg" alt="">
                    <h3>Weightlifting</h3>
                </li>
                <li>
                    <img style="width: 400px;" src="/assets/kickboxing.jpeg" alt="">

                    <h3>Kickboxing</h3>
                </li>
                <li>
                    <img style="width: 400px;" src="/assets/Zumba.webp" alt="">

                    <h3>Zumba</h3>
                </li>
                <li>
                    <img style="width: 400px;" src="/assets/yoga.jpg" alt="">

                    <h3>Yoga</h3>
                </li>
                <li>
                    <img style="width: 400px ;" src="/assets/cycling.jpg" alt="">

                    <h3>Cycling</h3>
                </li>
                <li>
                    <img style="width: 400px ;" src="/assets/pilates.jpeg" alt="">

                    <h3>Pilates</h3>
                </li>
            </ul>
            <a href="Schedule" class="cta-button">Schedule</a>
            </ul>

            <ul id="options">


        </section>

	</main>
</body>
</html>
@endsection
