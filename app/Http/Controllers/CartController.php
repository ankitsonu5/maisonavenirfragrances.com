<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Addtocart;
use App\Models\Admin\Coupon;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addtocart(Request $request)
    {
        $userId = auth()->user()->id;
        $productId = $request->product_id;

        // Check if the product is already in the cart
        $existingCartItem = Addtocart::where('user_id', $userId)
                                    ->where('service_item_id', $productId)
                                    ->first();

        if ($existingCartItem) {
            return back()->with('error', 'Product already in cart.');
        }

        // If the item does not exist, add it to the cart
        $cartItem = new Addtocart();
        $cartItem->user_id = $userId;
        $cartItem->quantity = 1;
        $cartItem->service_item_id = $productId;
        $cartItem->status = '1';

        if ($cartItem->save()) {
            return back()->with('success', 'Product added to cart successfully.');
        }

        return back()->with('error', 'Failed to add product to cart.');
    }

    public function index()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to view your cart.');
        }

        $userId = Auth::id();
        $cartItems = Addtocart::with('serviceItem')->where('user_id', $userId)->get();

        $cartTotal = $cartItems->sum(function ($item) {
            return $item->quantity * $item->serviceItem->price;
        });

        return view('website.pages.cart', compact('cartItems', 'cartTotal'));
    }

    public function remove($id)
    {
        $cartItem = Addtocart::find($id);

        if ($cartItem) {
            $cartItem->delete();
            return back()->with('success', 'Product removed from cart.');
        }

        return back()->with('error', 'Product not found in cart.');
    }




  
}

