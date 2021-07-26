<?php

namespace App\Providers;

use App\Count;
use App\Providers\CounterViews;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class StoreCountViewsPosts
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
    public function handle(CounterViewsPost $event)

    {

        $post_couter  =   $event->data    ;


       $post_couter->update([

           'view_posts' =>  $post_couter->view_posts + 1   ,
       ]);




    }
}
