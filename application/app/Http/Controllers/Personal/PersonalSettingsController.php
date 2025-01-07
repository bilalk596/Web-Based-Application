<?php
/*
* HRIS - Attendance Management System For Employees
* Email: bilalk596@gmail.com
* Version: 1.1
* Author: Muhammad Bilal , Syed Mohsin Shah 
*/
namespace App\Http\Controllers\personal;
use DB;
use App\Classes\table;
use App\Classes\permission;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PersonalSettingsController extends Controller
{
    public function index() 
    {
        return view('personal.personal-settings-view');
    }
}

