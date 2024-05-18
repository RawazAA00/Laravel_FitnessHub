<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cartItems = cart::all(); // Fetch cart items from the database

        return view('cart', compact('cartItems'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'required|string|max:255',
        ]);

        $cart = new Cart();
        $cart->product = $request->input('product');
        $cart->price = $request->input('price');
        $cart->image = $request->input('image');
        $cart->save();

        return redirect()->back()->with('success', 'Product added to cart!');
    }


    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }
    public function remove($id)
    {
        $cartItem = Cart::find($id);

        if (!$cartItem) {
            return redirect()->back()->with('error', 'Item not found in the cart!');
        }

        $cartItem->delete();

        return redirect()->back()->with('success', 'Item removed from cart!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {

    }
}
