<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('user',[
            'users' => $users,
        ]);
    }

    public function store(){
        $user = new User();
        $user->name = request('username');
        $user->first_name = request('firstname');
        $user->last_name = request('lastname');
        $user->email = request('email');
        $user->password = request('password');
        $user->mobile_no = request('mobile');
        $user->dob = request('dob');
        $user->gender = request('gender');
        $user->save();

        return back();
    }
}
