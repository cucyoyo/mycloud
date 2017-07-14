<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Config;

class HomeController extends Controller
{
    //
    function index(){
        $user = Auth::user();
        if(!$user->type){
            $user->type = Config::get("my.user_type.student");
            $user->save();
            return view('admin/home');
        } else if($user->type == Config::get("my.user_type.student")){
            return view('admin/home');
        } else{
            return view('teacher/home');
        }
//        return view('admin/home');

    }
}
