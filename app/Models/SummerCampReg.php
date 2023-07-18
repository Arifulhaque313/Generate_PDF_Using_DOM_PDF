<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SummerCampReg extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function getWeeklyClassHoursAttribute($value){
        return json_decode($value);
    }

    public function getCampHoursAttribute($value){
        return json_decode($value);
    }
}
