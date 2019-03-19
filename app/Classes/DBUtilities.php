<?php

namespace App\Classes;

use Illuminate\Support\Facades\Hash;

use App\Models\UserModel;
use App\Models\MenuModels;
use App\Models\FaviconModels;


use App\Classes\MessageUtilities;


class DBUtilities{
    public static function userModel(){

    }
    public static function menuModel($currentRouteName){
        $data   =   MenuModels::where('current_route_name','=',$currentRouteName)->first();
        return $data;

    }

    public static function handleLogin($username, $password){
        $data  =   UserModel::where('username','=',$username)
            ->leftJoin('users_info as ui','ui.id_user_info','=','users.id_user_info')
            ->select('users.username','users.passwprd','ui.id_user_type')
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
