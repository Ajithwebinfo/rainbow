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
        $this->currentRouteName  =   Route::current()->getName();
    }

    public function login(Request $request){
        //$currentRouteName   =   Route::current()->getName();
        $currentPath        =   $request->getPathInfo();
        $menuData           =   DBUtilities::menuModel(0, $currentPath);
        $param              =   ['menuData'=>$menuData[0]];


        return view('auth.login', $param);
    }

    public function handleLogin(Request $request){
        $request->session()->flush();


        $username   =   $request->username;
        $password   =   $request->password;



        $userDetails    =   DBUtilities::handleLogin($username, $password);




        if($userDetails['status']=="error"){

            echo "ds";

        }
        else{
            $idUserDetails  =   $userDetails['userData']->id_users_detail;
            $idRoles        =   $userDetails['userData']->id_roles;
            $request->session()->push('users.idUserDetails', $idUserDetails);
            $request->session()->push('users.idRoles', $idRoles);


            switch($idRoles){
                case 1:
                    break;
                case 2:
                    return Redirect::route('userDashboard');
                    break;
            }


        }


    }
}
