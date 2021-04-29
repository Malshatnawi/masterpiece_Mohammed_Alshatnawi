<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use Auth;
use App\Category;

class AdminLoginController extends Controller
{
    public function __construct(){

        $this->middleware('guest:admin');
    }

    public function showLoginForm(){
        $all_categories = Category::all();
        return view ('auth.admin_login' , compact('all_categories'));
    }

    public function login(Request $request){

        $this->validate($request, [

            "email" => "required|email",
            "password" => "required| min:6"
        ]);

        // Attempt to log the user in


        if (Auth::guard('admin')->attempt(['email' => $request->email , 'password'=>$request->password], $request->remember)){

                    // If successful, then redirect to their intended location

            return redirect()->intended(route('admin.dashboard'));

        }


       


        // if (Auth::attempt(['email' => $request->email , 'password'=>$request->password], $request->remember)){

        //         return redirect()->intended(route('home'));

        // }

        

        // If unsuccessful, then redirect back to the login with the form data

        return redirect()->back()->withInput($request->only('email' , 'remember'));



    }

    // public function adminLogout()
    // {
    //     $this::guard()->logout();

    //     return redirect('/');
    // }
}
