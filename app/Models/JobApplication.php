<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    protected $fillable = [
        'name',
        'email',
        'role',
        'message',
        'resume_path',
        'ip',
        'user_agent',
    ];
}

