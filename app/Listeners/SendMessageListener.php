<?php

namespace App\Listeners;

use App\Events\SendMessage;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Storage;

class SendMessageListener implements ShouldQueue
{
    public $queue = 'messages';

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
     * @param  SendMessage  $event
     * @return void
     */
    public function handle(SendMessage $event)
    {
        $message = "
<Message>
    <Phone>{$event->phone_number}</<Phone>
    <Body>{$event->message}</Body>
</Message>";

        Storage::put('loginactivity.txt', $message);
    }

    public function failed(SendMessage $event, $exception)
    {
        //
    }
}
