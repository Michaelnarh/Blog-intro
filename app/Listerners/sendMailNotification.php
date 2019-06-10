<?php

namespace App\Listerners;

use App\Event\subscribed;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class sendMailNotification
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
     * @param  subscribed  $event
     * @return void
     */
    public function handle(subscribed $event)
    {
        //
    }
}
