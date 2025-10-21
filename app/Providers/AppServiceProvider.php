<?php

namespace App\Providers;


use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();
        Paginator::useBootstrapFour();
       

        view()->composer('components.cart-dropdown', function ($view) {
            $user = auth('web')->user();
            $cartItems = collect();
            $cartCount = 0;
            $cartTotal = 0;

            if ($user) {
                $userId = $user->id;
                $cartItems = \App\Models\Addtocart::with('serviceItem')->where('user_id', $userId)->get();
                $cartCount = $cartItems->count();
                $cartTotal = $cartItems->sum(function ($item) {
                    return $item->quantity * $item->serviceItem->price;
                });
            }

            $view->with(compact('cartItems', 'cartCount', 'cartTotal'));
        });
    }
}
