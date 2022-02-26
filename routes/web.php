<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CocheController;
use App\Http\Controllers\HomeController;
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

// Route::get('/',HomeController::class);

Route::controller(CocheController::class)->group(function(){
  Route::get('/','index')->name('coche.index');

  Route::get('coche/create','create')->name('coche.pata');  //cambiar nombres


  Route::post('coche','store')->name('coche.crear');  //cambiar nombres

  
  Route::get('coche/{datos}','show')->name('coche.show');


  Route::get('coche/{datos}/edit','edit')->name('coche.edicion');


  Route::put('coche/{datos}','update')->name('coche.actualizar');  

  Route::delete('coche/{datos}','destroy')->name('coche.eliminar');  //cambiar nombres

});


