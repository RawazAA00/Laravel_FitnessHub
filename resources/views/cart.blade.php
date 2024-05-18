@extends('welcome')
@section('content')
    <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Website - Classes</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<main>
    <div class="bg-blue-100">
        <div class="container px-6 py-8 mx-auto">
            <h1 class="text-3xl font-semibold text-gray-800 mb-6">Shopping Cart</h1>

            @if($cartItems->isEmpty())
                <div class="text-center text-gray-600">Your cart is empty.</div>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($cartItems as $item)
                        <div class="flex flex-col w-full max-w-sm p-8 space-y-8 text-center bg-blue-950 border-2 border-gray-200 rounded-lg">
                            <img src="{{ asset('images/' . $item->image) }}" alt="{{ $item->product }}" class="mx-auto mb-4">
                            <h2 class="inline-flex items-center justify-center px-2 font-semibold tracking-tight text-red-600 uppercase rounded-lg bg-gray-50">{{ $item->product }}</h2>
                            <span class="pt-2 text-4xl font-bold text-white uppercase">${{ $item->price }}</span>
                            <form method="post" action="{{ route('cart.remove', $item->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="cta-button mt-4">Remove from Cart</button>
                            </form>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</main>
</body>
</html>
@endsection
