<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboard extends Controller
{



/**
 * Display the dashboard view.
 *
 * This method handles the request to show the admin dashboard page. It does not
 * take any parameters and returns the view responsible for displaying the dashboard.
 *
 * @return \Illuminate\View\View The view instance for the admin dashboard.
 */
function dashboard(){
    return view('website.dashboard.dashboard');
}



function order(){
    $orders = auth('web')->user()->orders()->with('orderItems.serviceItem')->get();
    return view('website.dashboard.order', compact('orders'));
}






}
