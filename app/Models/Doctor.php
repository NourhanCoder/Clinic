<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = ['name','bio','experience_years','image','location','major_id'];


public function major(){
    return $this->belongsTo(Major::class);
}

public function appointments(){
    return $this->hasMany(Appointment::class);
}
}