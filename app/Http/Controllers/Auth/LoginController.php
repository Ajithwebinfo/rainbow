<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

use App\Classes\DBUtilities;


class LoginController extends Controller
{


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(){
        $currentRouteName   =   Route::current()->getName();
        $menuData           =   DBUtilities::menuModel($currentRouteName);

        $param              =   ['menuData'=>$menuData];


        return view('auth.login', $param);
    }

    public function handleLogin(Request $request){



        $username   =   $request->username;
        $password   =   $request->password;



        $userDetails    =   DBUtilities::handleLogin($username, $password);
        //dd($userDetails['status']);

        if($userDetails['status']=="error"){

            echo "ds";

        }
        else{
            $idUser         =   $userDetails['userData']->id_user;
            $idUserType     =   $userDetails['userData']->id_user_type;
            $request->session()->push('users.idUser', $idUser);
            $request->session()->push('users.idUserType', $idUserType);

            dd($idUserType);


            switch($idUserType){
                case 1:
                    break;
                case 2:
                    return view('users.dashboard');
                    break;
            }


        }


    }
}
