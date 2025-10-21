<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleLoginController extends Controller
{




// Redirect the user to the Google authentication page
public function redirectToGoogle()
{
   
    return Socialite::driver('google')->redirect();
}

// Obtain the user information from Google
public function handleGoogleCallback()
{
    $user = Socialite::driver('google')->user();

    // Check if the user already exists in the database
    $existingUser = User::where('email', $user->getEmail())->first();

    if ($existingUser) {
        Auth::guard('web')->login($existingUser, true);
    } else {
        // Create a new user
        $newUser = new User();
        $newUser->name = $user->getName();
        $newUser->email = $user->getEmail();
        $newUser->google_id = $user->getId();
        $newUser->password =$user->getName().'@'.$user->getId() ; // Generate a random password or let users set their password
        $newUser->save();

        Auth::guard('web')->login($newUser, true);
    }

    $data=[
        'email'=> $user->getEmail(),
        'password'=> $user->getName().'@'.$user->getId(),
    ];

  
    return redirect()->intended(RouteServiceProvider::HOME); // Replace with your desired redirect URL after login
}








}
