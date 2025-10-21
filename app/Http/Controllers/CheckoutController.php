<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;
use App\Models\Addtocart;
use App\Models\Admin\Coupon;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Razorpay\Api\Api;

class CheckoutController extends Controller
{
    public function showCheckoutForm()
    {
        $user = Auth::user();
        $addresses = Address::where('user_id', $user->id)->get();
        $cartItems = Addtocart::with('serviceItem')->where('user_id', $user->id)->get();

        $cartTotal = $cartItems->sum(function ($item) {
            return $item->quantity * $item->serviceItem->price;
        });
        return view('website.pages.checkout', compact('addresses', 'cartItems', 'cartTotal'));
    }

    public function applyCoupon(Request $request)
    {
        $coupon = Coupon::where('code', $request->coupon_code)->first();

        if (!$coupon) {
            return back()->with('error', 'Invalid coupon code.');
        }

        session()->put('discount', $coupon->discount);
        return back()->with('success', 'Coupon applied successfully.');
    }

    public function store(Request $request)
    {
        $userId = Auth::id();
        $paymentMethod = $request->input('payment_method');
        $addressId = $request->input('address_id');
    
        // Handle address selection or creation
        if ($addressId === "new") {
            $addressData = $request->only([
                'first_name', 'last_name', 'company_name', 'country', 'address', 'address2', 'city', 'state', 'postcode', 'phone', 'email'
            ]);
            $addressData['user_id'] = $userId;
            $address = Address::create($addressData);
        } else {
            $address = Address::find($addressId);
        }
    
        $cartItems = Addtocart::with('serviceItem')->where('user_id', $userId)->get();
        $cartTotal = $cartItems->sum(function ($item) {
            return $item->quantity * $item->serviceItem->price;
        });
    
        if (session('discount')) {
            $cartTotal -= session('discount');
        }
    
        // Save cart total in session for later use in payment success handling
        session(['cart_total' => $cartTotal]);
    
        if ($paymentMethod == 'razorpay') {
            $api = new Api(env('RAZORPAY_KEY_ID'), env('RAZORPAY_KEY_SECRET'));
    
            $orderData = [
                'receipt'         => uniqid(),
                'amount'          => $cartTotal * 100, // amount in the smallest currency unit
                'currency'        => 'INR',
                'payment_capture' => 1 // auto capture
            ];
            Log::debug('Creating Razorpay Order', $orderData);

            try {
                $razorpayOrder = $api->order->create($orderData);
                $razorpayOrderId = $razorpayOrder['id'];
    
                return response()->json([
                    'success' => true,
                    'razorpayOrderId' => $razorpayOrderId,
                    'amount' => $orderData['amount'],
                    'currency' => $orderData['currency'],
                    'address_id' => $address->id
                ]);
            } catch (\Exception $e) {
                Log::error('Razorpay Order creation failed: ' . $e->getMessage());
                return response()->json([
                    'success' => false,
                    'message' => 'Razorpay Order creation failed. Please try again.'
                ], 500);
            }
        } else {
            // Handle COD
            $order = Order::create([
                'user_id' => $userId,
                'address_id' => $address->id,
                'payment_method' => 'cod',
                'status' => 'pending',
                'total_amount' => $cartTotal
            ]);
    

              // Save order items
        foreach ($cartItems as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'service_item_id' => $item->service_item_id,
                'quantity' => $item->quantity,
                'price' => $item->serviceItem->price
            ]);
        }
            // Clear the cart and session discount
            Addtocart::where('user_id', $userId)->delete();
            session()->forget('discount');
    
            return redirect()->route('index')->with('success', 'Order placed successfully.');
        }
    }
    


    public function verifyPayment(Request $request)
    {
        $userId = Auth::id();
        $addressId = $request->input('address_id');
    
        // Retrieve the cart items before clearing the cart
        $cartItems = Addtocart::with('serviceItem')->where('user_id', $userId)->get();
    
        // Create the order record
        $order = Order::create([
            'user_id' => $userId,
            'address_id' => $addressId,
            'payment_method' => 'razorpay',
            'status' => 'completed',
            'total_amount' => session('cart_total'),
            'razorpay_payment_id' => $request->input('razorpay_payment_id'),
            'razorpay_order_id' => $request->input('razorpay_order_id'),
            'razorpay_signature' => $request->input('razorpay_signature'),
        ]);
    
        // Save order items
        foreach ($cartItems as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'service_item_id' => $item->service_item_id,
                'quantity' => $item->quantity,
                'price' => $item->serviceItem->price
            ]);
        }
    
        // Clear the cart and session discount
        Addtocart::where('user_id', $userId)->delete();
        session()->forget('discount');
        session()->forget('cart_total');
    
        return response()->json([
            'success' => true,
            'message' => 'Order placed successfully.'
        ]);
    }
    
}
