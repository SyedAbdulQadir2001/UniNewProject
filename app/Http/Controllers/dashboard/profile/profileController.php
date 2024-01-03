<?php

namespace App\Http\Controllers\dashboard\profile;

use App\Http\Controllers\Controller;
use App\Models\Auth\User;
use Illuminate\Http\Request;
use App\Models\college\college_profile;

class profileController extends Controller
{
    function index(){
        /** Using For both Routes */
        $data = User::where("id", session("user_id"))->first();
        $role = $data->role;
        return view("pages.profile", ["role" => $role]);
    }

    function update(Request $req){
        college_profile::where("user_id", session("user_id"))->update
        ([
            "name" => $req->title,
            "Contact" => $req->contact,
            "Contact_Person" => $req->contact_person,
            "Email" => $req->email,
            "Address" => $req->address,
            "principal" => $req->principal,
            "Principal_Contact" => $req->principal_contact,
        ]);



        return redirect()->back();
    }
}
