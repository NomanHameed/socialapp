<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UpdateRequest;
use Illuminate\Http\Request;
use App\User;
use App\Traits\UploadTrait;

class UserController extends Controller
{
    use UploadTrait;
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

    public function updateProfile(UpdateRequest $request){
        $user = auth()->user();
        $user->name = $request->input('name');
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->mobile_no = $request->input('mobile_no');
        $user->dob = $request->input('dob');
        $user->gender = $request->input('gender');

        if ($request->has('profile_image')) {
            // Get image file
            $image = $request->file('profile_image')->store('tests', 'public');
            $name = explode('/', $image)[1];
            $user->profile_image = $name;
        }

            $user->save();
            return redirect()->back()->with(['status' => 'Profile updated successfully.']);

    }
}
