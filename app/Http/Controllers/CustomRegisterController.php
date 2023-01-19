<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomRegisterController extends Controller
{
    public function index(){
        return view('customRegister');
    }

    public function store (Request $request){
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'role' => 'required',
            'country' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->country = $request->country;
        $user->role = $request->role;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('login');

    }
}
