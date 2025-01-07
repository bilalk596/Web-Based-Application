<?php
/*
* HRIS - Attendance Management System For Employees
* Email: bilalk596@gmail.com
* Version: 1.1
* Author: Muhammad Bilal , Syed Mohsin Shah 
*/
namespace App\Http\Middleware;

use Closure;
use App;

class Localization
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
        if(session()->has('locale')) 
        {
            App::setLocale(session()->get('locale'));
        }
        
        return $next($request);
    }
}
