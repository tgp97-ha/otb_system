<?php

namespace App\Events;

use App\Models\Booking;
use App\Room;
use Carbon\Carbon;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class BookingChangedEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $room;
    public $arrival;
    public $departure;

    /**
     * Create a new event instance.
     *
     * @param  Booking $booking
     * @return void
     */
    public function __construct(Room $room, Carbon $arrival, Carbon $departure)
    {
        $this->room = $room;
        $this->arrival = $arrival;
        $this->departure = $departure;
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
