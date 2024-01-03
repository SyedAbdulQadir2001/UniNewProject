<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Auth\User;
use App\Models\Students;
use Illuminate\Support\Facades\DB;
use App\Models\Session;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;

date_default_timezone_set("Asia/Karachi");

class loginController extends Controller
{

    function Signup(Request $req){

        $req->validate([
            "email" => ["required"],
            "password" => ['required', Password::min(8)->mixedCase()->numbers()->symbols()->uncompromised()],
            "confirm_password" => ["required_with:password|same:password",Password::min(8)->mixedCase()->numbers()->symbols()->uncompromised()]

        ]);

        if($req->password === $req->confirm_password){

            $countEmail = User::all()->where("email", $req->email)->count();

            if($countEmail != 1){


                $user = new User;
                $user->email = $req->email;
                $user->password = Hash::make($req->password);
                $user->role = 0;
                $user->save();

                $id = User::where("email", $req->email)->first();

                Students::insert([
                    "name" => $req->name,
                    "fatherName" => null,
                    "cnic" => null,
                    "address" => null,
                    "dob" => null,
                    "rno" => null,
                    "user_id" => $id->id,
                ]);
                return redirect("/dashboard");
            }else{
                return redirect()->back()->with("error", "Email Already Registed");
            }

        }else{
            // If Password or Confirm password not match redirect to Signup page with error
            return redirect("/");
        }

    }

    function Signin(Request $req){

        $users = User::where("email", $req->email)->first();

        if(Hash::check($req->password,$users->password)){

            session()->flush();
            session()->put("user_id", $users->id);
            return redirect("/dashboard");
        }else{
            return redirect()->back()->with("error", "Wrong Email or password");
        }

//        if($users != null){
//            $session = Session::where("user_id", $users->id)->count();
////            $login_at = Session::where("user_id", $users->id)->first();
//
//                if($session > 0){
//                    $test = Session::where("id", session()->getId())->get();
//                    if($test != null){
//                        Session::where("user_id", 1)->delete();
//                    }else{
//                        return "Failure";
//                    }
//
//                    session()->invalidate();
//                    session()->regenerateToken();
//                    Session::where("user_id", $users->id)->delete();
//                    return redirect("/");
//                    dd("hello from func");
//                }else{
//                    session()->put("user_id", $users->id);
//                    Session::insert([
//                        "id" => session()->getId(),
//                        "user_id" => $users->id,
//                        "user_agent" => $req->header('User-Agent'),
//                        "ip_address" => $req->ip(),
//                    ]);
//                    return redirect("/dashboard");
//                }
//            }else {
//            return redirect("/")->with("error", "Wrong Email or Password");
//        }
    }
}
