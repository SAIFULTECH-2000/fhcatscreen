<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Models\Users;
use App\Models\patients;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Import controller
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Crudcontroller;
use App\Http\Controllers\patientsdashboard;
use Illuminate\Support\Facades\Auth;

//LOGIN
Route::get('/', function () {
    return view('index');
});
Route::post('/login',[AuthController::class,'login']);
Route::get('/logout',[AuthController::class,'logout']);

Route::get('/dashboard',function(){
return view('dashboard');
});


//Edit Details
Route::get('/edit-detail',function(){
  $id=  Session::get('adminid');
 $user= users::where('adminid', $id)
                ->get()
                ->first();
   return view('editdetails',['user'=>$user]); 

});
Route::post('/changedetails',[Crudcontroller::class,'changedetails']);




Route::get('/change-password',function(){
    return view('changepassword');
});
Route::post('/changepassword',[Crudcontroller::class,'changepassword']);


Route::get('/patient-registration',function(){
    return view('patientregistration');
});
Route::get('/list-patient',function(){
    $patients = patients::paginate(10);
   $admin = DB::table('admintbl')->get();
    return view('listpatient',['patients'=>$patients,'admin'=>$admin]);
});

Route::get('/list-staff',function(){
    $users= users::paginate(10);
    return view('liststaff',['users'=>$users]);
});
Route::get('/patient-dashboard/{id}',[Crudcontroller::class,'patientdashboard']);

Route::get('/admin-report/{category}',[Crudcontroller::class,'adminreport']);
Route::get('/patientprint/{id}',[Crudcontroller::class,'patientprint']);
Route::get('/editpatient/{id}',[Crudcontroller::class,'editpatient']);
Route::post('/changepatient',[Crudcontroller::class,'changepatient']);


Route::post('/admin-export',[Crudcontroller::class,'exportcsv']);
Route::get('/reset-password',function(){
 return view('reset-password');
});


Route::get('/dllc/{id}',[patientsdashboard::class,'dllc']);
Route::get('/sb/{id}',[patientsdashboard::class,'sb']);
Route::get('/jfhmc/{id}',[patientsdashboard::class,'jfhmc']);
Route::get('/usmedped/{id}',[patientsdashboard::class,'usmedped']);

//
Route::get('auth/google',[AuthController::class,'redirectToGoogle']);
Route::get('auth/google/callback',[AuthController::class,'handleGoogleCallback']);
Route::get('auth/admin-register',function(){
    return view('adminregister');
});
Route::post('registeradmin',[AuthController::class,'registeradmin']);