<?php

namespace App\Providers;

use App\Booking;
use App\Observers\BookingObserver;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Fix migration bug
        Schema::defaultStringLength(191);

        // Booking Observer
        Booking::observe(BookingObserver::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
