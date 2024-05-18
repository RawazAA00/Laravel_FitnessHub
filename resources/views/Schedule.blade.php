@extends('welcome')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fitness Website - Schedule</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/schedule.css') }}">
	<script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
	<main>
		<section id="classes">
			<h2>Schedule</h2>
			<table>
				<thead>
					<tr>
						<th>Class Name</th>
						<th>Instructor</th>
						<th>Time</th>
						<th>Duration</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Yoga</td>
						<td>John Doe</td>
						<td>9:00 AM</td>
						<td>1 hour</td>
					</tr>
					<tr>
						<td>Cardio Kickboxing</td>
						<td>Jane Smith</td>
						<td>12:00 PM</td>
						<td>1 hour</td>
					</tr>
					<tr>
						<td>Zumba</td>
						<td>Mike Johnson</td>
						<td>6:00 PM</td>
						<td>1 hour</td>
					</tr>
                    <tr>
						<td>Pilates</td>
						<td>Sarah Thompson</td>
						<td>7:30 AM</td>
						<td>1 hour</td>
					</tr>
					<tr>
						<td>Spin Cycling</td>
						<td>David Wilson</td>
						<td>5:30 PM</td>
						<td>45 minutes</td>
					</tr>
					<tr>
						<td>Bootcamp</td>
						<td>Lisa Anderson</td>
						<td>8:00 AM</td>
						<td>1 hour</td>
					</tr>
				</tbody>
			</table>
		</section>
	</main>
</body>
</html>
@endsection
