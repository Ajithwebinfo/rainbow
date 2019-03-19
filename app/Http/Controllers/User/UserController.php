<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

use App\Classes\DBUtilities;


class UserController extends Controller
{
    public  $idUserDetails;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');

    }

    public function dashboard(Request $request){
        //$currentRouteName   =   Route::current()->getName();
        $currentPath        =   $request->getPathInfo();
        $idUserDetails      =   Session::get('users.idUserDetails')[0];
        $idRole             =   Session::get('users.idRoles')[0];
        $menuData           =   DBUtilities::menuModel($idRole, $currentPath);
        $menuFullData       =   DBUtilities::getFullMenu($idRole);
        $userDetails        =   DBUtilities::getUserDetails($idUserDetails);
        $param              =   ['menuData'=>$menuData,'userDetails'=>$userDetails, 'menuFull'=>$menuFullData];

        dd($menuData);

        if(!empty($userDetails)){
            return view('users.dashboard', $param);
        }
        else{
            return Redirect::route('login');
        }

    }


}
