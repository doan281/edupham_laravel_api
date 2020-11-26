<?php

namespace Edupham\Api\App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    public $timestamps = true;

    protected $fillable = [
        'id',
        'name',
        'email',
        'created_at',
        'updated_at'
    ];
}
