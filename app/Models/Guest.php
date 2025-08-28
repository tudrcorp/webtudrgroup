<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $table = 'guests';

    protected $fillable = [
        'event_id',
        'firstName',
        'lastName',
        'phone',
        'agency',
        'companion',
        'webBrowser',
    ];

    
}