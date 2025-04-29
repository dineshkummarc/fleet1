<?php

namespace Modules\Partner\Events;

use Illuminate\Queue\SerializesModels;

class GetPartner

{

    use SerializesModels;

    public $slug;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($slug)
    {
        $this->slug = $slug;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
