<?php
/*
* HRIS - Attendance Management System For Employees
* Email: bilalk596@gmail.com
* Version: 1.1
* Author: Muhammad Bilal , Syed Mohsin Shah 
*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function AuthRouteAPI(Request $request) 
    {
        return $request->user();
    }
}
