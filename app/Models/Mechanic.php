<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Car;

class Mechanic extends Model
{
    use HasFactory;
    public function car(){
        return $this->hasOne(Car::class,'mechanic_id');
    }
    public function owner(){
        return $this->hasOneThrough(Owner::class,Car::class,'mechanic_id','car_id','id','id');
    }
}
