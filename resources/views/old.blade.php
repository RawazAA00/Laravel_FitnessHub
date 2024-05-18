@extends('welcome')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fitness Website - Classes</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/shop.css')}}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <main>
        <div class="bg-blue-100">
            <div class="container px-6 py-8 mx-auto">
                <div class="flex flex-col items-center justify-center space-y-8 lg:-mx-4 lg:flex-row lg:items-stretch lg:space-y-0">
                    <!-- Crop Top -->
                    <div class="flex flex-col w-full max-w-sm p-8 space-y-8 text-center bg-white border-2 border-gray-200 rounded-lg lg:mx-4">
                        <form method="post" action="{{ route('cart.store') }}">
                            @csrf
                            <input type="hidden" name="product" value="Crop Top">
                            <input type="hidden" name="price" value="25">
                            <div>
                                <img src="{{ asset('assets/croptop.webp') }}" alt="Crop Top">
                            </div>
                            <div class="flex-shrink-0">
                                <h2 class="inline-flex items-center justify-center px-2 font-semibold tracking-tight text-red-600 uppercase rounded-lg bg-gray-50"> Crop Top</h2>
                            </div>
                            <div class="flex-shrink-0">
                                <span class="pt-2 text-4xl font-bold text-gray-800 uppercase">$25</span>
                            </div>
                            <button type="submit" class="cta-button">Buy</button>
                        </form>
                    </div>

                    <!-- Legging -->
                    <div class="flex flex-col w-full max-w-sm p-8 space-y-8 text-center bg-white border-2 border-gray-200 rounded-lg lg:mx-4">
                        <form method="post" action="{{ route('cart.store') }}">
                            @csrf
                            <input type="hidden" name="product" value="Legging">
                            <input type="hidden" name="price" value="60">
                            <div>
                                <img src="{{ asset('assets/Joggers.webp') }}" alt="Legging">
                            </div>
                            <div class="flex-shrink-0">
                                <h2 class="inline-flex items-center justify-center px-2 font-semibold tracking-tight text-red-600 uppercase rounded-lg bg-gray-50"> Legging</h2>
                            </div>
                            <div class="flex-shrink-0">
                                <span class="pt-2 text-4xl font-bold text-gray-800 uppercase">$60</span>
                            </div>
                            <button type="submit" class="cta-button">Buy</button>
                        </form>
                    </div>

                    <!-- Hoodie -->
                    <div class="flex flex-col w-full max-w-sm p-8 space-y-8 text-center bg-white border-2 border-gray-200 rounded-lg lg:mx-4">
                        <form method="post" action="{{ route('cart.store') }}">
                            @csrf
                            <input type="hidden" name="product" value="Hoodie">
                            <input type="hidden" name="price" value="55">
                            <div>
                                <img src="{{ asset('assets/hoodie.webp') }}" alt="Hoodie">
                            </div>
                            <div class="flex-shrink-0">
                                <h2 class="inline-flex items-center justify-center px-2 font-semibold tracking-tight text-red-600 uppercase rounded-lg bg-gray-50"> Hoodie</h2>
                            </div>
                            <div class="flex-shrink-0">
                                <span class="pt-2 text-4xl font-bold text-gray-800 uppercase">$55</span>
                            </div>
                            <button type="submit" class="cta-button">Buy</button>
                        </form>
                    </div>

                    <!-- Stringer -->
                    <div class="flex flex-col w-full max-w-sm p-8 space-y-8 text-center bg-white border-2 border-gray-200 rounded-lg lg:mx-4">
                        <form method="post" action="{{ route('cart.store') }}">
                            @csrf
                            <input type="hidden" name="product" value="Stringer">
                            <input type="hidden" name="price" value="30">
                            <div>
                                <img src="{{ asset('assets/stringer.webp') }}" alt="Stringer">
                            </div>
                            <div class="flex-shrink-0">
                                <h2 class="inline-flex items-center justify-center px-2 font-semibold tracking-tight text-red-600 uppercase rounded-lg bg-gray-50"> Stringer</h2>
                            </div>
                            <div class="flex-shrink-0">
                                <span class="pt-2 text-4xl font-bold text-gray-800 uppercase">$30</span>
                            </div>
                            <button type="submit" class="cta-button">Buy</button>
                        </form>
                    </div>

                    <!-- Short -->
                    <div class="flex flex-col w-full max-w-sm p-8 space-y-8 text-center bg-white border-2 border-gray-200 rounded-lg lg:mx-4">
                        <form method="post" action="{{ route('cart.store') }}">
                            @csrf
                            <input type="hidden" name="product" value="Short">
                            <input type="hidden" name="price" value="50">
                            <div>
                                <img src="{{ asset('assets/short.webp') }}" alt="Short">
                            </div>
                            <div class="flex-shrink-0">
                                <h2 class="inline-flex items-center justify-center px-2 font-semibold tracking-tight text-red-600 uppercase rounded-lg bg-gray-50"> Short</h2>
                            </div>
                            <div class="flex-shrink-0">
                                <span class="pt-2 text-4xl font-bold text-gray-800 uppercase">$50</span>
                            </div>
                            <button type="submit" class="cta-button">Buy</button>
                        </form>
                    </div>

                    <!-- Jacket -->
                    <div class="flex flex-col w-full max-w-sm p-8 space-y-8 text-center bg-white border-2 border-gray-200 rounded-lg lg:mx-4">
                        <form method="post" action="{{ route('cart.store') }}">
                            @csrf
                            <input type="hidden" name="product" value="Jacket">
                            <input type="hidden" name="price" value="15">
                            <div>
                                <img src="{{ asset('assets/jacket.webp') }}" alt="Jacket">
                            </div>
                            <div class="flex-shrink-0">
                                <h2 class="inline-flex items-center justify-center px-2 font-semibold tracking-tight text-red-600 uppercase rounded-lg bg-gray-50"> Jacket</h2>
                            </div>
                            <div class="flex-shrink-0">
                                <span class="pt-2 text-4xl font-bold text-gray-800 uppercase">$15</span>
                            </div>
                            <button type="submit" class="cta-button">Buy</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
@endsection
