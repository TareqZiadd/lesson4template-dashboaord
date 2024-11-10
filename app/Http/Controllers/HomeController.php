<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    
    public function homepage(){

        return view ('home.homepage');

    }

    public function showProfile(){
        return view ('profile.show');
    }



    
    public function index()
    {

        if (Auth::id()) {

            $userType = Auth()->user()->user_type;

            if ($userType == 'user') {
                return view('home.homepage');
            } 

            elseif ($userType == 'admin') {
                return view('admin.index');
            }
        }else{

            return redirect()->back();

        }

    }

}
