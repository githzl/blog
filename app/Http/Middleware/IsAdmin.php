<?php

namespace App\Http\Middleware;

use Closure;
use Cookie;
use App\Model\Admin;

class IsAdmin
{
    /**
     * auth user is login.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $email = $request->cookie('is_admin');
        $data = Admin::where('email',$email)->first();
        if(!$data){
            return redirect('/login');
        }
        return $next($request);
    }
}
