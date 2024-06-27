<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use App\Events\SignInEvent;
use App\Listeners\NewMicrosoft365SignInListener;

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
    public function boot()
    {
        Event::listen(
            SignInEvent::class,
            NewMicrosoft365SignInListener::class, 'handle'
        );
    }
}
