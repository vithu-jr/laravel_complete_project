<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //show create user form
    public function create(){
        return view('users.create');
    }

    // store user to the DB
    public function store(Request $request){
        // dd($request);
        $formFields = $request->validate([
            'name' => 'required',
            'email'=> ['required', 'email', 'unique:users,email'],
            'password'  => ['required', 'min:6', 'confirmed ']
        ]);

        // hash password
        $formFields['password'] = bcrypt($formFields['password']);

        // create user
        $user = User::create($formFields);

        // login
        auth()->login($user);

        return redirect('/')->with('message','user created and logged in succesfully!!');
        
    }

    // logout user
    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out successfully!!');
    }

    // show login form
    public function login(){
        return view('users.login');
    }

    // authenticate a user
    public function authenticate(Request $request){
        $formFields = $request->validate([
            'email'=>['required','email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)){
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You have logged in Succesfully');
        }

        return back()->withErrors(['email'=> 'invalid creditials'])->onlyInput('email');
    }
}
