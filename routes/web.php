<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\loginController;
use App\Http\Controllers\dashboard\dashboardController;
use App\Http\Controllers\dashboard\profile\profileController;
use App\Http\Controllers\dashboard\profile\studentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\auth\User;
use App\Models\Students;
use App\Http\Middleware\auth;
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


Route::get("/",function(){
    return view("pages.auth.login");
});

/** Auth Routes */
Route::view("/signin","pages.auth.login");
Route::Post("/login", [loginController::class,"Signin"]);

/** Signup */
Route::view("/signup", "pages.auth.signup");
Route::Post("/signup", [loginController::class,"Signup"]);

Route::get("/signout",function(){

    DB::table("sessions")->where("user_id", session("user_id"))->delete();
    session()->flush();

    return redirect("/");
});
/** End Routes*/


Route::middleware(auth::class)->group(function () {

/** Dashboard Routes */
Route::view('/dashboard',"index");
Route::get("/profile", [profileController::class,"index"]);
Route::post("/profile", [profileController::class, "update"]);
/**
 * End Dashboard Routes
 */

    /**
     *  College Routes
     */
    Route::post("/exams/mbbs/mbbs-final-prof-conv", function(Request $req){
        $student = Students::where("rno", $req->enrollment)->first();
        return view("components.dashboard.exams.mbbs.mbbs-final-prof-conv", ["data" => $student]);
    });

    Route::get("/exams/mbbs/mbbs-final-prof-conv", function(){
        return view("components.dashboard.exams.mbbs.mbbs-final-prof-conv");
    })->name("mbbs-final-conv");

    Route::get("exams/mbbs/mbbs-final-prof-mod", function(){
        return view("components.dashboard.exams.mbbs.mbbs-final-prof-mod");
    });

    /**
     *  End College Routes
     */

});









/**
 *  Administrator Routes
 */
Route::middleware("admin")->group(function (){
    Route::get("/colleges", function(){
        return view("pages.administrator.colleges");
    });



    Route::resource("users",\App\Http\Controllers\administrator\users::class);

});

/** End Administrator Routes */
// Not in used
Route::get("/std",  function(){
    return view("pages.students");
});



