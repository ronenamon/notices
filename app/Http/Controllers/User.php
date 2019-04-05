<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class User extends Controller
{
    


    public function login()
    {
        return View("login");   
    }

    public function login_proccess(Request $request)
    {
     
      $req =  $request->all();

     if($req['email'] && $req['pswd']){

            echo $req['email'];

            echo $req['pswd'];

      }else{
          
          echo "not exit";
      } 
        
    }




    public function reg()
    {
        echo "work";
    }
}
