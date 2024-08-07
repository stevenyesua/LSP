<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class isActivate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle(Request $request, Closure $next)
    {

        if (Auth::check()) {
            $user = Auth::user()->status;
            $status_user = $user;
            if ($status_user=='pending') {
                // Log them out
                Auth::logout();
        
                // Redirect them somewhere with a message
                return redirect('/pending')->with('message', 'Your request is pending.');
            }
           elseif($status_user=='nonaktif'){
                // Log them out
                Auth::logout();

                // Redirect them somewhere with a message
                return redirect('/nonaktif')->with('message', 'Your request has rejected.');
            }
        }
        return $next($request);
    }
}
