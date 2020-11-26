<?php

namespace Edupham\Api\App\Listeners;

use Edupham\Api\App\Events\ApiLogEvent;
use Edupham\Api\App\Repositories\ApiLogRepository;

class ApiLogListener
{
    protected $repository;

    /**
     * Create the event listener.
     * @param ApiLogRepository $repository     *
     */
    public function __construct(ApiLogRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Handle the event.
     *
     * @param  ApiLogEvent  $event
     * @return void
     */
    public function handle(ApiLogEvent $event)
    {
        $this->repository->store([
            'requested_at' => $event->requested_at,
            'from_domain' => $event->from_domain,
            'from_ip' => $event->from_ip,
            'action_name' => $event->action_name,
            'request' => $event->request,
            'response' => $event->response,
            'user_agent' => $event->user_agent,
            'notes' => $event->notes
        ]);
    }
}
