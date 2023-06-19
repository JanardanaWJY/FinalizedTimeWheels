<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request) {
        $username = $request->username;
        $email = $request->email;
        $password = $request->password;
        $confirm =  $request->confirmpassword;

        $errors = [];
        
        if(!$username || !$email || !$password || !$confirm) {
            array_push($errors, "Please Fill all Forms");
        }

        $username_unique = true;
        if(User::where('name', '=', $username)->get()->count() >= 1) {
            $username_unique = false;
            array_push($errors, "Username Taken");
        }

        $email_unique = true;
        if(User::where('email', '=', $email)->get()->count() >= 1) {
            $email_unique = false;
            array_push($errors, "Email has been Used Before");
        }

        $confirmvalid = true;
        if($password != $confirm) {
            $confirmvalid = false;
            array_push($errors, "Password Confirmation Must be the Same With Password");
        }

        $agree = true;
        if(!$request->has("agree")) {
            $agree = false;
            array_push($errors, "Terms of Service Disagreement");
        }

        if(!$errors) {
            $user = new User();
            $user->name = $username;
            $user->email = $email;
            $user->password = Hash::make($password);
            $user->save();

            return redirect("signin");
        }
        else {
            return redirect("signup")->with(['errors' => $errors]);
        }
    }

    public function login(Request $request) {      
        $username = $request->username;
        $password = $request->password;

        $errors = [];
        
        if(!$username || !$password) {
            array_push($errors, "Please Fill all Forms");
        }

        $username_exists = true;
        if(User::where('name', '=', $username)->get()->count() <= 0) {
            $username_unique = false;
            array_push($errors, "Username Doesn't Exist");
        }

        $remember = true;
        if(!$request->has("remember")) {
            $remember = false;
        }

        if(!$errors) {
            if(Auth::attempt(['name' => $username, 'password' => $password])) {
                $request->session()->put('logged', true);
                if($remember) {
                    $request->session()->put('username', $username);
                    $request->session()->put('password', $password);
                }
                return redirect("gotodashboard");
            }
            else {
                array_push($errors, "Wrong username or password");
                return redirect("signin")->with(['errors' => $errors]);
            }
            
        }
        else {
            $request->session()->forget('username');
            $request->session()->forget('password');
            $request->session()->forget('logged');
            return redirect("signin")->with(['errors' => $errors]);
        }
    }

    public function goToDashboard(Request $request) {
        if($request->session()->exists('logged')) {
            return view('dashboard');
        }
        return redirect('signin');
    }

    public function logout(Request $request) {
        $request->session()->forget('logged');
    }
}
