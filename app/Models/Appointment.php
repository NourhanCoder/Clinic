<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = ['name','phone','email','appointment_dates','status','user_id','doctor_id'];

public function doctor(){
    return $this->belongsTo(Doctor::class);
}
}
