<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
use Auth;
use Exception;
use App\User;
class AuthController extends Controller
{
    public function handleGoogleCallback()
    {
        
        try {
         $user = Socialite::driver('google')->stateless()->user();   
            $check = users::where('adminemail', $user->email)->exists();
            if ($check) {
                $users = users::where('adminemail', $user->email)
                    ->get()
                    ->first();

                $adminid = $users->adminid;
                $adminusername = $users->adminusername;
                $adminemail = $users->adminemail;
                $password = $users->adminpassword;
                $adminstate = $users->adminstate;
                $adminlocation = $users->adminlocation;
                $adminlevel = $users->adminlevel;
                $time = $_SERVER['REQUEST_TIME'];


                        Session::put('adminid', $adminid);
                        Session::put('adminusername', $adminusername);
                        Session::put('adminemail', $adminemail);
                        Session::put('lastactivity', $time);
                        Session::put('adminlocation', $adminlocation);
                        Session::put('adminlevel', $adminlevel);
                        return redirect('/dashboard')->with('message', 'You have successfully signed into your account.');
            } else {
                return redirect()
                    ->back()
                    ->with('fails', 'Unregistered user email.');
            }
        } catch (Exception $e) {
        echo "error";
            dd($e->getMessage());
        
        }
    }
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    function login(Request $req)
    {
        $messages = [
            'required' => 'diperlukan',
        ];
        $rules = [
            'adminemail' => 'required',
            'adminpassword' => 'required',
        ];
        $validator = $req->validate($rules, $messages);
        $data = $req->input();
        $check = users::where('adminemail', $req->adminemail)->exists();

        if ($check) {
            $users = users::where('adminemail', $req->adminemail)
                ->get()
                ->first();

            $adminid = $users->adminid;
            $adminusername = $users->adminusername;
            $adminemail = $users->adminemail;
            $password = $users->adminpassword;
            $adminstate = $users->adminstate;
            $adminlocation = $users->adminlocation;
            $adminlevel = $users->adminlevel;
            $time = $_SERVER['REQUEST_TIME'];

            if ($password == $data['adminpassword']) {
                if ($data['adminstate'] == $adminstate && $data['adminlocation'] == $adminlocation) {
                    Session::put('adminid', $adminid);
                    Session::put('adminusername', $adminusername);
                    Session::put('adminemail', $adminemail);
                    Session::put('lastactivity', $time);
                    Session::put('adminlocation', $adminlocation);
                    Session::put('adminlevel', $adminlevel);
                    return redirect('/dashboard')->with('message', 'You have successfully signed into your account.');
                } else {
                    return redirect()
                        ->back()
                        ->with('fails', 'Wrong email / state / location. You need to create new one with same email for other states and locations');
                }
            } else {
                return redirect()
                    ->back()
                    ->with('fails', 'Wrong password entered');
            }
        } else {
            return redirect()
                ->back()
                ->with('fails', 'Unregistered user email.');
        }
    }
    function registeradmin(Request $request)
    {
        $adminname = $request->adminname;
        $adminemail = $request->adminemail;
        $adminstaffid = $request->adminstaffid;
        $adminlocation = $request->adminlocation;
        $adminstate = $request->adminstate;
        $adminaddress = $request->adminaddress;
	    $adminusername = $request->adminusername;
	    $adminpassword = $request->adminpassword;
        $adminlevel = "staff";
        $check = users::where('adminemail', $request->adminemail)->exists();
        if($check){
              return redirect()
                ->back()
                ->with('fails', 'this email has been register');
        }else{
            $registerdate = date("Y-m-d");
            $data =[
                'adminname'=> $adminname, 
                'adminstaffid'=>$adminstaffid,
                'adminstate' => $adminstate, 
                'adminlocation'=>$adminlocation, 
                'adminaddress'=>$adminaddress,
                'adminemail'=> $adminemail,
                'adminpassword'=> $adminpassword, 
                'adminusername'=>$adminusername, 
                'adminlevel'=>$adminlevel,
                'registerdate'=> $registerdate,
            ];
            users::create($data);
            return redirect('/')->with('logout', 'You have successfully register.');
        }
    
    }
    function logout()
    {
        Session::flush();
        return redirect('/')->with('logout', 'You have successfully logged out.');
    }
}