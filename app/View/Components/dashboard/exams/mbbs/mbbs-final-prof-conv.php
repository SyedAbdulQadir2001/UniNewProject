<?php

namespace App\View\Components\dashboard\exams\mbbs;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class mbbs-final-prof-conv extends Component
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
        return view('components..dashboard.exams.mbbs.mbbs-final-prof-conv');
    }
}
