<?php

use App\Http\Controllers\mainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::controller(mainController::class)->group(function(){
    Route::get('addmechanic','Add_Mechanic');
    Route::get('addcar/{id}','Add_Car');
    Route::get('addowner/{id}','Add_Owner');
    Route::get('getowner/{id}','Get_Owner');


});
