<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use App\Events\NewMicrosoft365SignInEvent;
use App\Listeners\NewMicrosoft365SignInListener;
//use Dcblogdev\MsGraph\Events\NewMicrosoft365SignInEvent;

class NewMicrosoft365SignInProvider extends ServiceProvider
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
            NewMicrosoft365SignInEvent::class,
            [NewMicrosoft365SignInListener::class, 'handle']
        );
    }
}
