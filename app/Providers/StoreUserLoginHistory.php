<?php

namespace App\Providers;

use App\Login_history;
use App\Providers\LoginHistory;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class StoreUserLoginHistory
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
     * @param  LoginHistory  $event
     * @return void
     */
    public function handle(LoginHistory $event)
    {
       // $current_time   =   Carbon::now()->toDateTimeString();

       $user_info  =   $event->user    ;

       $saveHistory    = Login_history::create([

           'name'   =>  $user_info->name    ,
           'email'  =>  $user_info->email   ,

       ])   ;
    }
}
