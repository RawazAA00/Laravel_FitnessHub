@extends('welcome')

@section('content')
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Website - Shop</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/shop.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
<main>
    <div class="bg-blue-100">
        @auth()
            <a href="/items/create" class="top-left-button cta-button">Add Item</a>
        @endauth
        <div class="container px-6 py-8 mx-auto">
            <div class="flex flex-col items-center justify-center space-y-8 lg:-mx-4 lg:flex-row lg:items-stretch lg:space-y-0">
                @foreach ($items as $item)
                    <div class="flex flex-col w-full max-w-sm p-8 space-y-8 text-center bg-blue-950 border-2 border-gray-200 rounded-lg lg:mx-4">
                        <form method="post" action="{{ route('cart.store') }}">
                            @csrf
                            <input type="hidden" name="product" value="{{ $item->name }}">
                            <input type="hidden" name="price" value="{{ $item->price }}">
                            <input type="hidden" name="image" value="{{ $item->image }}">
                            <div>
                                <img src="{{ asset('images/' . $item->image) }}" alt="{{ $item->name }}">
                            </div>
                            <div class="flex-shrink-0">
                                <h2 class="space inline-flex items-center justify-center px-2 font-semibold tracking-tight text-red-600 uppercase rounded-lg bg-red">{{ $item->name }}</h2>
                            </div>
                            <div class="flex-shrink-0">
                                <span class="pt-2 text-4xl font-bold text-white uppercase">${{ $item->price }}</span>
                            </div>
                            <button type="submit" class="cta-button">Buy</button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</main>
</body>
</html>
@endsection
