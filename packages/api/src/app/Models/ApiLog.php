<?php

namespace Edupham\Api\App\Models;

use Edupham\Api\App\Helpers\Constants;
use Illuminate\Database\Eloquent\Model;

class ApiLog extends Model
{
    protected $table = Constants::TABLE_API_LOGS;

    public $timestamps = false;

    protected $fillable = [
        'id',
        'requested_at',
        'from_domain',
        'from_ip',
        'request',
        'response',
        'notes'
    ];
}
