<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Users;
use Illuminate\Support\Facades\Auth;

class User extends Controller
{
    
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function login()
    {
        return View("login");   
    }

    public function login_proccess(Request $request)
    {
    
      $req =  $request->all();

      $errors = ["user"=>"user not exist!"];

     if($req['email'] && $req['pswd']){
        $u  = Users::checkUserToLogin($req['email']);
        if(!empty($u)){
            if($u[0]->password == $req['pswd']){
                $_SESSION['user_login']=true;
                return redirect('/');
            }
        }else{
            return View("login")->with("errors",$errors);   
        }

      }else{
          
        return View("login");
      } 
        
    }
}
