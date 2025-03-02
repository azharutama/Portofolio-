<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        'name',
        'description',
        'user_id',
        'status',
        'start_date',
        'end_date',
    ];
}
