<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class PrivateChatEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $content;
    public $chat;
    public $touser;
    public $images;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($content, $chat,$touser,array $images=array())
    {
        $this->content = $content;
        $this->chat = $chat;
        $this->touser=$touser;
        $this->images=$images;
        $this->dontBroadcastToCurrentUser();
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('Chat.' . $this->chat['session_id']);
    }
}
