<?php

namespace App\Events;

use App\Models\Personne;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PersonneCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $personne;

    /**
     * Create a new event instance.
     *
     * @param Personne $personne
     */
    public function __construct(Personne $personne)
    {
        $this->personne = $personne;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('personne-channel'),
        ];
    }
}

