<?php

namespace App\Http\Controllers;
use App\Models\Mechanic;
use App\Models\Car;
use App\Models\Owner;

use Illuminate\Http\Request;

class mainController extends Controller
{
    public function Add_Mechanic(){
        $mechanic = new Mechanic();
        $mechanic -> name = 'Sodhi';
        $mechanic->save();
        return "Mechanic Add Successfully";
    }
    public function Add_Car($id){
        $mechanic = Mechanic::find($id);
        $car = new Car();
        $car->model='Zeep';
        $mechanic->car()->save($car);
        return "Car Add Successfully";
    }
    public function Add_Owner($id){
        $car = Car::find($id);
        $owner = new Owner();
        $owner->name = "Mukesh";
        $car->owner()->save($owner);
        return "Owner Add Successfully";
    }
    public function Get_Owner($id){
    //Get Owner based on Mechanic ID
        $owner = Mechanic::find($id)->owner;
        $car = Car::find($owner->car_id);
        $mechanic = Mechanic::find($owner->laravel_through_key);
        //dd($owner);
        return $mechanic->name." Repair car is ".$car->model." And Car Owner is  ".$owner->name;
    }
}
