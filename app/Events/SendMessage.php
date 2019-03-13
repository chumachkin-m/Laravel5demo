<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Http\Request;

class SendMessage
{
    use SerializesModels;

    public $phone_number;
    public $message;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($phone_number, $message)
    {
        $this->phone_number = $phone_number;
        $this->message      = $message;
    }

}
