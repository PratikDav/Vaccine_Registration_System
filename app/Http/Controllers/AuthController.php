<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class AuthController extends Controller
{


    /***************************************
    ***** Check User Logged In Or Not *****
    ***************************************/

    public function IsLoggedIn(){
        return view('admin.layout.no_access');
    }


     /*****************************************
     ******* User Registration Section Start *******
     ******************************************/
    public function showRegisterForm()
    {
        return view('admin.pages.auth.registration.register');
    }

    public function register(Request $request)
    {

        $user = new User();

        $request->validate([

            'firstName' => 'required|filled',
            'lastName' => 'required|filled',
            'number' => 'required|filled|numeric',
            'email' => 'required|email',
            'address' => 'required|filled',
            'role' => 'required',

        ]);
        $user_exists = User::where('email', '=', $request->email)->first();

        if ($request->password == $request->confirm_password) {
            if ($user_exists) {
                return redirect()->back()->with('failed', 'Email Already Exists!');
            } else {
                $user->firstName = $request['firstName'];
                $user->lastName = $request['lastName'];
                $user->number = $request['number'];
                $user->address = $request['address'];
                $user->email = $request['email'];
                $user->role = $request['role'];
                $user->password = md5($request['password']);
                if ($user->save()) {
                    return redirect()->back()->with('success', 'User Registered Successfully!');
                }
            }
        } else {
            return redirect()->back()->with('failed', 'Password Not Matched');
        }

    }
    /***************************************
     ******* User Registration Section End *******
     ****************************************/

    /***************************************
     ******* User Login Section Start *******
     ****************************************/

    public function showLoginForm()
    {
        return view('admin.pages.auth.login.login');
    }

    public function userLogin(Request $req)
    {
        $email = $req->email;
        $password = md5($req['password']);
        $user = User::where('email', '=', $email)
            ->where('password', '=', $password)
            ->first();
        if ($user) {
            //check if user is approved(check value of status column is 1)
            if ($user->status == 1) {
                // save user info
                Session::put('firstName', $user->firstName);
                Session::put('lastName', $user->lastName);
                Session::put('user_email', $user->email);
                Session::put('user_role', $user->role);
                return redirect('/admin/dashboard')->with('success', "You've logged in successfully!");
            } else {
                return redirect()->back()->with('failed', 'User Not Approved Yet');
            }
        } else {
            return redirect()->back()->with('failed', 'User Not Found With These Credentials');
        }
    }
    /***************************************
     ******* User Login Section End *******
     ****************************************/


    /***************************************
    ******* User Logout Section Start *******
    ****************************************/

     public function logout(Request $req){
        $req->session()->forget(['firstName', 'lastName', 'user_email', 'user_role']);
        return redirect()->route('show.Login');
    }

    /***************************************
    ******* User Logout Section End *******
    ****************************************/

}
