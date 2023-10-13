<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
publick-key: BEd4ONqb_Aogr9m2q848lViUqALnjGko4ZnEfFh2SCpUcTUtyksep3xTWWTIR3iMEymwIK5R9W4Gp3wdSUkv9-s
private-key:Vcbu4T5-ncz5lXF6ka73rqryPwPDSBLjT__Fst2qU6U
*/
Route::get('/',[\App\Http\Controllers\IndexController::class,'index']);
Route::resource('/admin',\App\Http\Controllers\PushController::class);
