<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class patientsdashboard extends Controller
{
    function usmedped(Request $request){
          $patientid= $request->id;
       $patient=DB::table('patienttbl')->where('patientid',$patientid)->first();
       $patientscoretbl = DB::table('patientscoretbl')->where('patientid',$patientid)->first();
       return view('usmedped',['patient'=>$patient,'patientscoretbl'=>$patientscoretbl]);
    }
    function jfhmc(Request $request){
       $patientid= $request->id;
       $patient=DB::table('patienttbl')->where('patientid',$patientid)->first();
       $patientscoretbl = DB::table('patientscoretbl')->where('patientid',$patientid)->first();
       return view('jfhmc',['patient'=>$patient,'patientscoretbl'=>$patientscoretbl]);
    }
    function sb(Request $request){
       $patientid= $request->id;
       $patient=DB::table('patienttbl')->where('patientid',$patientid)->first();
       $patientscoretbl = DB::table('patientscoretbl')->where('patientid',$patientid)->first();
       return view('sb',['patient'=>$patient,'patientscoretbl'=>$patientscoretbl]);
    }
    function dllc(Request $request){
       $patientid= $request->id;
       $patient=DB::table('patienttbl')->where('patientid',$patientid)->first();
       $patientscoretbl = DB::table('patientscoretbl')->where('patientid',$patientid)->first();
       return view('dllc',['patient'=>$patient,'patientscoretbl'=>$patientscoretbl]);
    }
}
