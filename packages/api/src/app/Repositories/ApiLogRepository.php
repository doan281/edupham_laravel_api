<?php

namespace Edupham\Api\App\Repositories;

use Edupham\Api\App\Models\ApiLog;

class ApiLogRepository extends BaseRepository
{
    public function __construct()
    {

    }

    public function store($arrayField)
    {
        $api_log = new ApiLog();
        //
        $api_log->requested_at = isset($arrayField['requested_at']) ? $arrayField['requested_at'] : null;
        $api_log->from_domain = isset($arrayField['from_domain']) ? $arrayField['from_domain'] : null;
        $api_log->from_ip = isset($arrayField['from_ip']) ? $arrayField['from_ip'] : null;
        $api_log->action_name = isset($arrayField['action_name']) ? $arrayField['action_name'] : null;
        $api_log->request = isset($arrayField['request']) ? $arrayField['request'] : null;
        $api_log->response = isset($arrayField['response']) ? $arrayField['response'] : null;
        $api_log->user_agent = isset($arrayField['user_agent']) ? $arrayField['user_agent'] : null;
        $api_log->notes = isset($arrayField['notes']) ? $arrayField['notes'] : null;
        //
        if ($api_log->save()) {
            return true;
        } else {
            return false;
        }
    }
}