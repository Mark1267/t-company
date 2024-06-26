<?php

namespace App\Events\Admin\Transactions;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class BonusEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user_id, $amount;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($user_id, $amount)
    {
        $this->user_id = $user_id;
        $this->amount = $amount;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
