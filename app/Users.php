<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Exceptions;

class Users extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    //protected $table = 'users';

    protected static function checkUserToLogin($email)
    {
    
    try{
         $query = "SELECT id,name,email,password FROM users 
         WHERE email=?";
         $user = DB::select($query,array($email));
         return $user;

    }catch(Exception $e){
        return $e->getMessage();
    }
       
    }

}
