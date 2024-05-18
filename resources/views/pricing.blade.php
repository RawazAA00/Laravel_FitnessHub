@extends('welcome')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fitness Website - Classes</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/pricing.css')}}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <main>
        <div class="bg-blue-100">
            <div class="container px-6 py-8 mx-auto">
                <div class="flex flex-col items-center justify-center space-y-8 lg:-mx-4 lg:flex-row lg:items-stretch lg:space-y-0">
                    <div class="flex flex-col w-full max-w-sm p-8 space-y-8 text-center bg-white border-2 border-gray-200 rounded-lg lg:mx-4">
                        <div class="flex-shrink-0">
                            <h2 class="inline-flex items-center justify-center px-2 font-semibold tracking-tight text-red-600 uppercase rounded-lg bg-gray-50"> Kickboxing</h2>
                        </div>
                        <div class="flex-shrink-0">
                            <span class="pt-2 text-4xl font-bold text-gray-800 uppercase">$100</span>
                            <span class="text-gray-500">/month</span>
                        </div>
                        <a href="signup.html" class="cta-button">Sign Up</a>
                    </div>
                    <div class="flex flex-col w-full max-w-sm p-8 space-y-8 text-center bg-white border-2 border-gray-200 rounded-lg lg:mx-4">
                        <div class="flex-shrink-0">
                            <h2 class="inline-flex items-center justify-center px-2 font-semibold tracking-tight text-red-600 uppercase rounded-lg bg-gray-50"> Cycling</h2>
                        </div>
                        <div class="flex-shrink-0">
                            <span class="pt-2 text-4xl font-bold text-gray-800 uppercase">$60</span>
                            <span class="text-gray-500">/month</span>
                        </div>
                        <a href="signup.html" class="cta-button">Sign Up</a>
                    </div>
                    <div class="flex flex-col w-full max-w-sm p-8 space-y-8 text-center bg-white border-2 border-gray-200 rounded-lg lg:mx-4">
                        <div class="flex-shrink-0">
                            <h2 class="inline-flex items-center justify-center px-2 font-semibold tracking-tight text-red-600 uppercase rounded-lg bg-gray-50"> Pilates</h2>
                        </div>
                        <div class="flex-shrink-0">
                            <span class="pt-2 text-4xl font-bold text-gray-800 uppercase">$40</span>
                            <span class="text-gray-500">/month</span>
                        </div>
                        <a href="signup.html" class="cta-button">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-blue-100">
            <div class="container px-6 py-8 mx-auto">
                <div class="flex flex-col items-center justify-center space-y-8 lg:-mx-4 lg:flex-row lg:items-stretch lg:space-y-0">
                    <div class="flex flex-col w-full max-w-sm p-8 space-y-8 text-center bg-white border-2 border-gray-200 rounded-lg lg:mx-4">
                        <div class="flex-shrink-0">
                            <h2 class="inline-flex items-center justify-center px-2 font-semibold tracking-tight text-red-600 uppercase rounded-lg bg-gray-50">Weightlifting</h2>
                        </div>
                        <div class="flex-shrink-0">
                            <span class="pt-2 text-4xl font-bold text-gray-800 uppercase">$150</span>
                            <span class="text-gray-500">/month</span>
                        </div>
                        <a href="signup.html" class="cta-button">Sign Up</a>
                       </div>
                    <div class="flex flex-col w-full max-w-sm p-8 space-y-8 text-center bg-white border-2 border-gray-200 rounded-lg lg:mx-4">
                        <div class="flex-shrink-0">
                            <h2
                                class="inline-flex items-center justify-center px-2 font-semibold tracking-tight text-red-600 uppercase rounded-lg bg-gray-50">Yoga</h2>
                        </div>
                        <div class="flex-shrink-0">
                            <span class="pt-2 text-4xl font-bold text-gray-800 uppercase">$80</span>
                            <span class="text-gray-500">/month</span>
                        </div>
                        <a href="signup.html" class="cta-button">Sign Up</a>
                    </div>
                    <div class="flex flex-col w-full max-w-sm p-8 space-y-8 text-center bg-white border-2 border-gray-200 rounded-lg lg:mx-4">
                        <div class="flex-shrink-0">
                            <h2 class="inline-flex items-center justify-center px-2 font-semibold tracking-tight text-red-600 uppercase rounded-lg bg-gray-50"> Zumba</h2>
                        </div>
                        <div class="flex-shrink-0">
                            <span class="pt-2 text-4xl font-bold text-gray-800 uppercase">$60</span>
                            <span class="text-gray-500">/month</span>
                        </div>
                        <a href="signup.html" class="cta-button">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
@endsection
