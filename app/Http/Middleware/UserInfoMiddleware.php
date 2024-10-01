<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\View;

class UserInfoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

       if(Auth::check()){
            $Account = Auth::user();

            $userInfo = [
                'id' => $Account->id,
                'email' => $Account->email,
                'role' => $Account->user_level_id,
                'person_id' => $Account->person_id
            ];

            View::share('user_info', $userInfo);

             $request->merge(['user_info' => $userInfo]);

       }

        return $next($request);
    }
}
