<?php

namespace App\Http\Controllers\administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\auth\User;
use Illuminate\Support\Facades\Hash;

class users extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view("pages.administrator.users.index", ["users" => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("pages.administrator.users.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
//        if($request->role == 1){
//            User::insert([
//                "email" => $request->email,
//                "password" => md5($request->password),
//                "role" => $request->role
//            ]);
//        }

        $request->validate([
            "email" => "required",
            "password" => "required",
            "role" => "required"
        ]);

        User::insert([
           "email" => $request->email,
           "password" => Hash::make($request->password),
           "role" => $request->role
        ]);



        return redirect()->route("users.index");

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $users = User::where("id", $id)->first();
        return view("pages.administrator.users.edit", ["users" => $users]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        if($request->password === null){
            User::where("id",$id)->update([
                "email" => $request->email,
                "role" => $request->role
            ]);
        }else{
            User::where("id",$id)->update([
                "email" => $request->email,
                "password" => Hash::make($request->password),
                "role" => $request->role
            ]);
        }

        return redirect()->route("users.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
