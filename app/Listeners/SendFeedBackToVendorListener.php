<?php

namespace App\Listeners;

use App\Providers\NewFeedBackHasRegisteredEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\FeedBack;

class SendFeedBackToVendorListener implements ShouldQueue
{
    /**
     * Handle the event.
     *
     * @param  NewFeedBackHasRegisteredEvent  $event
     * @return void
     */
    public function handle($event)
    {
        sleep(5);
        $feedBack = new FeedBack();
        $feedBack->create($event->data);
    }
}
