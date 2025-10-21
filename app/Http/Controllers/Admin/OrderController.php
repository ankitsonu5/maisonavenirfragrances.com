<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    

    function index(){
        $orders  = Order::orderBy('id', 'desc')->paginate(50);
        return view('admin.order.index',compact('orders'));
    }


    public function updateStatus(Request $request)
{
    $request->validate([
        'order_id' => 'required|exists:orders,id',
        'status' => 'required|in:pending,completed,cancelled'
    ]);

    $order = Order::find($request->order_id);
    $order->status = $request->status;
    $order->save();

    return response()->json(['success' => true]);
}


    public function show($order)
    {
        $order = Order::with(['user', 'address', 'orderItems.serviceItem'])->findOrFail($order);
        $user = $order->user;
        $addresses = $user->addresses; // Assuming you have a relationship in User model
        return view('admin.order.show', compact('order', 'user', 'addresses'));
    }
    
    public function destroy($order)
    {
        $data = Order::findOrFail($order);
        $data->delete();
        return redirect()->route('admin.order.index')->with('success', 'Order deleted successfully');
    }

}
