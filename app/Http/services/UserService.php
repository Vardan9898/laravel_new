<?php

namespace App\Http\services;
use App\Http\Requests\CreateUsersRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserService
{
    public function UserStore(CreateUsersRequest $request)
    {
        $data = $request->validated();
        $user = User::create($data);
        $user->save();

        if (!$user->save()) {
            return response()->json(['error' => 'Something went wrong']);
        }
        return response()->json($user);
    }
    public function getUsers(User $user) {
        $users = User::get();
        return response()->json($users);
    }

    public function UserUpdate(Request $request){
        Auth::user()->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
    }

}
