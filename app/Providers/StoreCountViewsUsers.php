<?php

namespace App\Providers;

use App\Providers\CounterViews;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class StoreCountViewsUsers
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  CounterViews  $event
     * @return void
     */
    public function handle(CounterViewsUser $event)
    {


        $post_couter  =   $event->data    ;


        $post_couter->update([

            'view_users' =>  $post_couter->view_users + 1   ,
        ]);
    }
}
