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

    public static function getUserDetails($username, $password){
        $data  =   UserModel::where('username','=',$username)->first();

        //echo $username."--".$password;

        //dd($data);


        if(!empty($data)){
            $passwordExist  =   $data['password'];


            if(Hash::check($password, $passwordExist)){
                $status     =   "success";
                $msgString  =   "";
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
