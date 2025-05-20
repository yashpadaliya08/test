<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    protected $fillable = [
    'car_id' ,'name', 'email', 'phone', 'start_date', 'end_date'
];


public function car()
{
    return $this->belongsTo(Car::class);
}

}
