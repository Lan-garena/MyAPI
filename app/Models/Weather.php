<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weather extends Model
{
    use HasFactory;

    protected $fillable = ['weather_name','temperature','wind_speed','pressure','humidity','chance_of_precipitation','city_id'];
    public function city(){
        return $this->belongsTo(City::class);
    }
}
