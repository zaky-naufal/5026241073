<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator; // Import the Paginator

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {

        Paginator::useBootstrapFive();


    }
}
