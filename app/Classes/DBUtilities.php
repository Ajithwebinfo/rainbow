<?php

namespace App\Classes;

use App\Models\Users\UserDetailsModel;
use Illuminate\Support\Facades\Hash;

use App\Models\Users\UserModel;
use App\Models\MenuModels;
use App\Models\FaviconModels;


use App\Classes\MessageUtilities;


class DBUtilities{
    public static function getUserDetails($idUserDetails){
        if(!empty($idUserDetails)){
            /* $userData   =   LoginModel::from('users As u')
                 ->join('users_info As ui','u.id_users_info','=','ui.id_users_info')
                 ->leftJoin('urls_storage As url','url.id_user','u.id_user')
                 ->select('ui.first_name','ui.middle_name','ui.last_name','ui.gender','ui.email','ui.mobile','ui.id_roles','ui.uid','url.*')
                 ->first();
             return $userData;*/

            $userDetails  =   UserDetailsModel::where('id_users_detail','=',$idUserDetails)->select('first_name','last_name', 'email','id_roles')->first();
            return $userDetails;


        }
        else{
            return $userDetails    =   "";
        }
    }
    public static function menuModel($idRoles, $currentPath){
        $data   =   MenuModels::where('id_roles','=',$idRoles)
            ->where('current_route_namez','LIKE','%'.$currentPath.'%')->first();
        return $data;

    }
    public static function getFullMenu($idRoles){
        $data   =   MenuModels::where('id_roles','=',$idRoles)->get();
        return $data;

    }

    public static function handleLogin($username, $password){
        $data  =   UserModel::where('username','=',$username)
            ->leftJoin('users_detail as u','u.id_users_detail','=','users.id_users_detail')
            ->select('users.username','users.password','u.id_roles','u.id_users_detail')
            ->first();

        //echo $username."--".$password;

        //dd($data);


        if(!empty($data)){
            $passwordExist  =   $data['password'];


            if(Hash::check($password, $passwordExist)){
                $status     =   "success";
                $msgString  =   "";

                return ['status'=>$status, 'msg'=>$msgString, 'userData'=>$data];
            }
            else{
                $status     =   "error";
                $msgString  =   MessageUtilities::loginFailedMessage();
                return ['status'=>$status, 'msg'=>$msgString, 'userData'=>$data];


            }

            return ['status'=>$status, 'msg'=>$msgString, 'userData'=>$data];
        }
        else{
            $status     =   "error";
            $msgString  =   MessageUtilities::invalidMessages($username);

            return ['status'=>$status, 'msg'=>$msgString, 'userData'=>$data];
        }
    }

}
