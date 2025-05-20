<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    // If your table name is 'messages', no need to specify table property

    // Allow mass assignment for these fields
    protected $fillable = [
        'name',
        'email',
        'issue',
        'message',
    ];
}
