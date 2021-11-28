<?php

namespace App\Http\Controllers\Api\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function allusers(){
        return User::all();
    }

    public function user(){
        return Auth::user();
    }

    public function admin(){
        $admin = DB::table('users')->where('role', 'admin')->get();
        return $admin;
    }

    public function usershow(User $user){
        return $user;
    }

    public function deleteuser(User $user){
        $user->delete();
        return response(['message' => 'User deleted Successfully !!'], 204);
    }

    public function updateuser(Request $request, User $user){
        $request->validate([
            'role' => 'required',
        ]);

        $user->update([
                'role' => $request->role,
            ]);

        return response(['message' => 'User updated Successfully !!'], 200);
    }
}
