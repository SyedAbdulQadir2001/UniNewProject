<?php

namespace App\Http\Middleware\admin;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Auth\User;
class adminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = User::where("id", session("user_id"))->first();

        /** $user->role == 9999 Means is Admin? */
        if($user->role == 9999){
            return $next($request);
        }else{
            return redirect("/dashboard");
        }
    }
}
