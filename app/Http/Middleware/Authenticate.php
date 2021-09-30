<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
//        if (! $request->expectsJson()) {
//            return route('login');
//        }

        if (! $request->expectsJson()) {
            if($request->routeIs('admin.*')){
                return route('admin.login');
            }
            if($request->routeIs('writer.*')){
                return route('writer.login');
            }
            return route('user.login');

        }


        if (! $request->expectsJson()) {
            if($request->routeIs('admin.*')){

                return  redirect()->route('admin.login');
            }elseif($request->routeIs('writer.*')){
                return  redirect()->route('writer.login');
            }elseif ($request->routeIs('user.*')) {
                return redirect()->route('user.login');
            }else{
                return redirect()->route('homepage');
            }
        }

    }
}
