<?php

namespace App\Providers;

use App\Events\StudentEvent;
use App\Listeners\StudentListener;
use App\Events\WelcomeContactEvent;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use App\Listeners\WelcomeContactListener;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        WelcomeContactEvent::class => [
            WelcomeContactListener::class,
        ],
        StudentEvent::class => [
            StudentListener::class,
        ],
    ];
    

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
