<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\VisitorModel;

class HomeController extends Controller
{
    function HomeIndex(){
        $userIpAddress = $_SERVER['REMOTE_ADDR'];
        date_default_timezone_set('Asia/Dhaka');
        $userDateTime = date('Y-m-d H:i:s');
        VisitorModel::insert(['ip_address'=>$userIpAddress, 'visit_time'=> $userDateTime]);

        return view('Home');
    }
}
