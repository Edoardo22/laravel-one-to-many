<?php

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
    return view('home');
});

Route::get("/barbers", "barberController@index")->name("barbers.index");
Route::get("/barbers/create", "barberController@create")->name("barbers.create");
Route::get("/barbers/{id}", "barberController@show")->name("barbers.show");
Route::post("/barbers", "barberController@store")->name("barbers.store");
Route::get("/barbers/{id}/edit", "barberController@edit")->name("barbers.edit");
Route::patch("/barbers/{id}", "barberController@update")->name("barbers.update");
Route::delete("/barbers/{id}", "barberController@destroy")->name("barbers.destroy");
