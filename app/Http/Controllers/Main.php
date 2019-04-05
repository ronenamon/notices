<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main extends Controller
{

    // www.****.com/
    public function index()
    {
        session_start();
        if(isset($_SESSION['user_login'])){
            return view('welcome');
        }else{
            return redirect("login");
        }




        
    }
}
