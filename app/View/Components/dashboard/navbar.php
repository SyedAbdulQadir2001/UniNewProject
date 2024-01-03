<?php

namespace App\View\Components\dashboard;

use App\Models\Auth\college;
use App\Models\auth\User;
use App\Models\Students;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class navbar extends Component
{

    /**
     * Create a new component instance.
     */
    public function __construct()
    {

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $user = User::where("id", session("user_id"))->first();

        if($user->role == 0){
            $name = Students::where("user_id", $user->id)->first();
            return view('components.dashboard.navbar', ["user" => $name, "role" => $user->role]);
        }else if($user->role == 1){
            $name = college::where("user_id", $user->id)->first();
            return view('components.dashboard.navbar', ["user" => $name, "role" => $user->role]);
        }else if($user->role == 9999){
            $name = DB::table("administrator")->where("user_id", $user->id)->first();
            return view('components.dashboard.navbar', ["user" => $name, "role" => $user->role]);
        }

//        return view('components.navbar', ["user" => "", "role" => ""]);

    }
}
