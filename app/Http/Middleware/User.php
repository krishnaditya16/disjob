<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;

class User
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->role == 'admin') {
            return redirect()->route('admin');
        }

        if (Auth::user()->role == 'employer') {
            return redirect()->route('employer');
        }

        if (Auth::user()->role == 'user') {
            return $next($request);
        } else {
            return back(); // Redirecting same dashboard when user try to access another dashboard by typing in the URL
        }
    }
}
