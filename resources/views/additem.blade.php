@extends('welcome')
@section('content')
    <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Website - Add New Item</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<main>
    <div class="bg-blue-100">
        <div class="container px-6 py-8 mx-auto">
            <h1 class="text-3xl font-semibold text-gray-800 mb-6">Add New Item</h1>

            @if ($errors->any())
                <div class="mb-4">
                    <div class="text-red-600">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

            <form method="post" action="{{ route('items.store') }}" enctype="multipart/form-data" class="max-w-lg mx-auto">
                @csrf

                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Item Name</label>
                    <input type="text" name="name" id="name" class="form-input mt-1 block w-full rounded-md shadow-sm" value="{{ old('name') }}">
                </div>

                <div class="mb-4">
                    <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                    <input type="number" name="price" id="price" class="form-input mt-1 block w-full rounded-md shadow-sm" value="{{ old('price') }}">
                </div>

                <div class="mb-4">
                    <label for="image" class="block text-sm font-medium text-gray-700">Image (Optional)</label>
                    <input type="file" name="image" id="image" class="form-input mt-1 block w-full rounded-md shadow-sm">
                </div>

                <button type="submit" class="cta-button">Add Item</button>
            </form>
        </div>
    </div>
</main>
</body>
</html>
@endsection
