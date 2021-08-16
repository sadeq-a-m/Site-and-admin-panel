<?php

namespace App\Providers;

use App\Events\PodcastProcessed;
use App\Listeners\SendPodcastNotification;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [


        Registered::class => [

            SendEmailVerificationNotification::class,
        ],

        LoginHistory::class => [
            StoreUserLoginHistory::class,
        ]

         ,

         CounterViewsUser::class => [
            StoreCountViewsUsers::class,

        ]   ,

        CounterViewsPost::class => [

            StoreCountViewsPosts::class,
        ]



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
