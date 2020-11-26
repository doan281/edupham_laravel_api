<?php

namespace Edupham\Api\App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ApiLogEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $requested_at;
    public $from_domain;
    public $from_ip;
    public $request;
    public $response;
    public $user_agent;
    public $notes;

    /**
     * Create a new event instance.
     *
     * ApiLogEvent constructor.
     * @param $requested_at
     * @param $from_domain
     * @param $from_ip
     * @param $action_name
     * @param $request
     * @param $response
     * @param $user_agent
     * @param $notes
     */
    public function __construct($requested_at, $from_domain, $from_ip, $action_name, $request, $response, $user_agent, $notes)
    {
        $this->requested_at = $requested_at;
        $this->from_domain = $from_domain;
        $this->from_ip = $from_ip;
        $this->action_name = $action_name;
        $this->request = $request;
        $this->response = $response;
        $this->user_agent = $user_agent;
        $this->notes = $notes;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('api-log');
    }
}
