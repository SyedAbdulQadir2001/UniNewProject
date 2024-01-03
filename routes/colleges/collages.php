<?php

use App\Http\Controllers\dashboard\profile\profileController;
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
 *
 *  Collages Route
 *
 */


Route::get("/profile", [profileController::class,"index"]);
Route::get("/std",  function(){
    return view("pages.students");
});
Route::get("/examination", function(){
    return view("pages.examinations.mbbs-form");
});



/*
 *
 *  Exams Forms Routes
 *
 */

Route::get("/exams/mbbs/mbbs-final-prof-conv", function(){
    return view("components.dashboard.exams.mbbs.mbbs-final-prof");
});



