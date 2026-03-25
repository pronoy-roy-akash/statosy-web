<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    protected $fillable = [
        'name',
        'email',
        'company',
        'topic',
        'message',
        'ip',
        'user_agent',
    ];
}

