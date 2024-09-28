<?php

namespace App\Providers;

use App\Models\SocialMedia;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        // Fetch social media links from the database
        $socialMedia = SocialMedia::all();

        // Share the social media links with all views
        View::composer('*', function ($view) use (  $socialMedia) {
            $view->with('socialMedia', $socialMedia);
        });


    }
}
