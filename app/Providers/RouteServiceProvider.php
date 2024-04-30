<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;




class RouteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */


    public const HOME_ETUDIANT = 'etudiant/dashboard';
    public const HOME_PSY = 'psychologue/dashboard';
    public const HOME_ADMIN = 'admin/dashboard';


    public function register(): void
    {
        //

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
