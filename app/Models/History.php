<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $fillable = ['doctor_id', 'user_id', 'date', 'location', 'completed'];
}
