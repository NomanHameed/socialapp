<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $users = User::all();
        return view('auth.profile',[
            'users' => $users,
        ]);
    }

    public function store(){

    }

    public function updateProfile(){

    }
}
