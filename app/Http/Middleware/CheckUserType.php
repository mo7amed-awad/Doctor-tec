<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUserType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $user= $request->user();
        if (!$user) {
            dd($user);
            return redirect()->route("login");
        }
        if($user->status=='notyet'){
            return redirect()->route("login")->with("status","لم يتم قبول طلبك حتى الأن");
        }if($user->status=='refused'){
            return redirect()->route("login")->with("status","للأسف لم يتم قبول طلبك");
        }
        return $next($request);
    }
}
