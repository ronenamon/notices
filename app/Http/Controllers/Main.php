<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main extends Controller
{
    public function index()
    {
        
        if(isset($_SESSION['user_login'])){
            return view('welcome');
        }else{
            echo "you must login first";
        }
    }
}
