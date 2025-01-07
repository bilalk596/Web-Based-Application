<?php
/*
* HRIS - Attendance Management System For Employees
* Email: bilalk596@gmail.com
* Version: 1.1
* Author: Muhammad Bilal , Syed Mohsin Shah 
*/
namespace App\Http\Middleware;

use Closure;
use View;
use App\Classes\table;

class CheckStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $s = \Auth::user()->status;
        $r = \Auth::user()->role_id;

        if ($s == null || $s == 0) 
        {
            \Auth::logout();
            return redirect()->route('disabled');
        } 
        
        if ($r == null || $r == 0) 
        {
            \Auth::logout();
            return redirect()->route('notfound');
        }
        
        return $next($request);
    }
}
