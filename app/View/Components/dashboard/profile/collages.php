<?php

namespace App\View\Components\dashboard\profile;

use App\Models\Auth\college;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class collages extends Component
{
    /**
     * Create a new component instance.
     */


    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $data = college::where("user_id",session("user_id"))->first();
        return view('components.dashboard.profile.collages',["data" => $data]);
    }
}
