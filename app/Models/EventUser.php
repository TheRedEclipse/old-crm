<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventUser extends Model
{
    protected $table = 'event_user';

    protected $fillable = [
        'event_id',
        'user_id',
    ];
    use HasFactory;
}
