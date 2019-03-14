<?php

namespace App\Classes;

use App\Models\UserModel;
use App\Models\MenuModels;
use App\Models\FaviconModels;


class DBUtilities{
    public static function userModel(){

    }
    public static function menuModel($currentRouteName){
        $data   =   MenuModels::where('current_route_name','=',$currentRouteName)->first();
        return $data;

    }

}
