<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema; // ✅ सही namespace

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191); // ✅ इस लाइन से एरर आ सकता है अगर namespace गलत है
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }
}
