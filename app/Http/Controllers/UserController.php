<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUsersRequest;
use App\Http\services\UserService;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function ApiStore() {
        return response()->json(
            (new UserService())->UserStore()
        );
    }
    public function getApiUser(){
        return response()->json(
            (new UserService())->getUsers()
        );
    }

    public function ApiUpdate(){
        return response()->json(
            (new UserService())->UserUpdate()
        );
    }




}
