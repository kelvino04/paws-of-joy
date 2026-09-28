<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'message',
        'viewed_at',
    ];
    protected $casts = [
        'viewed_at' => 'datetime',
    ];
}
