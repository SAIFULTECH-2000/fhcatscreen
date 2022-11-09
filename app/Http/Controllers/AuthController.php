<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use Illuminate\Support\Facades\Session;
class AuthController extends Controller
{
    //AJAX[login.php]
   function login(Request $req)
    {

        // Validator

        $messages = [
            'required' => 'diperlukan',
        ];

        $rules = [
            'email' => 'required',
            'password' => 'required'
        ];

        $validator = $req->validate($rules, $messages);

        $data = $req->input();

        // Select eloquent
        $check = users::where('adminemail', $req->email)->exists();

        if ($check) {
            $users = users::where('adminemail', $req->email)
                ->get()
                ->first();

            $adminid = $users->adminid;
            $adminusername = $users->adminusername;
            $adminemail = $users->adminemail;
            $password = $users->password;
            $time = $_SERVER['REQUEST_TIME'];
		
            if ($password == $data['adminpassword']) {
                // Save into session
                Session::put('adminid', $adminid);
                Session::put('adminusername', $adminusername);   //put the data and in session
                Session::put('adminemail', $adminemail);
                Session::put('lastactivity',$time);
                return     redirect('/dashboard')->with('login', 'You have successfully signed into your account.');
            } else {
                return redirect()->back()->with('fails', 'Wrong password entered');
            }
        } else {
             return redirect()->back()->with('fails', 'Unregistered user email.');
        }

        // return $check;
    }
    function logout()
    {
        Session::flush();
        return redirect('/')->with('logout', 'You have successfully logged out.');;
    }

}