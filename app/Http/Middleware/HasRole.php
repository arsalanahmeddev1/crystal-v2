<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class HasRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role)
    {
        if(!Auth::check()){
            return redirect()->route('login')->with('error', 'Please Login');
        }
        else if(Auth::user()->verification_status == 0){
            // dd('11');
            return redirect()->route('login.verification')->with('error', 'Please Verify Your Account');
        }
        // else if(Auth::user()->role_id != $role){
            
        //     // dd(Auth::user()->role_id,$role);
        //     if(Auth::user()->role_id == '1'){
        //         return redirect()->route('dashboard')->with('error', 'Access Deined');
        //     }
        //     if(Auth::user()->role_id == '2'){
        //         return redirect()->route('dashboard')->with('error', 'Access Deined');
        //     }

        // }
        
        return $next($request);
    }
}
