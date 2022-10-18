<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\RateController;
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

// --------------------------vars & request-----------------------
Route ::get("home",[HomeController::class,"info"]);
Route::get('users/{id}',[HomeController::class,"index"]);
Route::get("profile/{name}",[HomeController::class,"show"]);
// ...................................
Route::get("/",[HomeController::class,"landing"]);
// short.................
Route::view("about","web.about");
Route::view("contact","web.contact");
Route::view("jewellery","web.jewellery");

// ------------------------------------------------
// send the view to user
Route::get("additem" ,[ItemController ::class,"create"]);
// -----------------------------------------
Route::post("store",[ItemController ::class,"store"])->name("store");
// ---------------------------
Route ::get("allitems",[ItemController ::class,"index"]);
//--------------------------
Route ::get("deletItem/{id}",[ItemController ::class,"delete"])->name("delete");
Route ::get("editItem/{id}",[ItemController ::class,"edit"])->name("edit");
Route ::post("update/{id}",[ItemController ::class,"update"])->name("update");
// ------------------------------------------------
Route :: resource("rates",RateController::class);
