<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\users;
use App\Models\patients;
use App\Models\patientscore;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExportPatients;

class Crudcontroller extends Controller
{
    function changedetails(Request $request)
    {
        $data = [
            'adminname' => $request->adminname,
            'adminstate' => $request->adminstate,
            'adminlocation' => $request->adminlocation,
            'adminaddress' => $request->adminaddress,
            'adminemail' => $request->adminemail,
            'adminstaffid' => $request->adminstaffid,
        ];
        $user = users::where('adminusername', $request->adminusername);
        $user->update($data);
        return redirect('/dashboard')->with('message', 'Successfully edited.');
    }
    function changepassword(Request $request)
    {
        $id = Session::get('adminid');
        $user = users::where('adminid', $id)
            ->get()
            ->first();

        if ($request->newadminpassword == $request->newadminrepassword) {
            if ($user->adminpassword == $request->adminpassword) {
                $data = [
                    'adminpassword' => $request->newadminpassword,
                ];
                $user = users::where('adminid', $id);
                $user->update($data);
                return redirect('/dashboard')->with('message', 'Successfully change password.');
            } else {
                return redirect()
                    ->back()
                    ->with('fails', 'invalid password');
            }
        } else {
            return redirect()
                ->back()
                ->with('fails', 'new password and confirm password invalid');
        }
    }
    function patientdashboard(Request $request)
    {
        $id = $request->id;
        $patient = patients::where('patientid', $id)
            ->get()
            ->first();
        $score = patientscore::where('patientid', $id)
            ->get()
            ->first();

        return view('patientdashboard', ['patient' => $patient, 'score' => $score]);
    }
    function adminreport(Request $request)
    {
        $display = $request->category;

        if ($display == 'all') {
            $patients = DB::table('patienttbl')
                ->join('patientscoretbl', 'patienttbl.patientid', '=', 'patientscoretbl.patientid')
                ->orderBy('patienttbl.patientname', 'asc')
                ->paginate(10);

            $DLCC = DB::select("SELECT result_dlcc, COUNT(*) AS Total, CONCAT(ROUND(((COUNT(*) / (SELECT COUNT(*) FROM patientscoretbl)) * 100),0),'%') AS Percentage FROM patientscoretbl GROUP BY result_dlcc");
            $SB = DB::select("SELECT result_sb, COUNT(*) AS Total, CONCAT(ROUND(((COUNT(*) / (SELECT COUNT(*) FROM patientscoretbl)) * 100),0),'%') AS Percentage FROM patientscoretbl GROUP BY result_sb");
            $JFHMC = DB::select("SELECT result_jfhmc, COUNT(*) AS Total, CONCAT(ROUND(((COUNT(*) / (SELECT COUNT(*) FROM patientscoretbl)) * 100),0),'%') AS Percentage FROM patientscoretbl GROUP BY result_jfhmc");
            $US = DB::select("SELECT result_us, COUNT(*) AS Total, CONCAT(ROUND(((COUNT(*) / (SELECT COUNT(*) FROM patientscoretbl)) * 100),0),'%') AS Percentage FROM patientscoretbl GROUP BY result_us");
        } elseif ($display == 'Community') {
            $patients = DB::table('patienttbl')
                ->join('patientscoretbl', 'patienttbl.patientid', '=', 'patientscoretbl.patientid')
                ->join('admintbl', 'patienttbl.patientid', '=', 'admintbl.adminid')
                ->where('admintbl.adminlocation', 'Community')
                ->paginate(10);
            $DLCC = DB::select("SELECT scr.result_dlcc, COUNT(*) AS Total, CONCAT(ROUND(((COUNT(*) / (SELECT COUNT(*) FROM patientscoretbl)) * 100),0),'%') AS Percentage FROM patienttbl as pt, patientscoretbl as scr, admintbl as adm WHERE pt.patientid = scr.patientid AND adm.adminid = pt.adminid AND adm.adminlocation = 'Community' GROUP BY result_dlcc");
            $SB = DB::select("SELECT scr.result_sb, COUNT(*) AS Total, CONCAT(ROUND(((COUNT(*) / (SELECT COUNT(*) FROM patientscoretbl)) * 100),0),'%') AS Percentage FROM patienttbl as pt, patientscoretbl as scr, admintbl as adm WHERE pt.patientid = scr.patientid AND adm.adminid = pt.adminid AND adm.adminlocation = 'Community' GROUP BY result_sb");
            $JFHMC = DB::select("SELECT scr.result_jfhmc, COUNT(*) AS Total, CONCAT(ROUND(((COUNT(*) / (SELECT COUNT(*) FROM patientscoretbl)) * 100),0),'%') AS Percentage FROM patienttbl as pt, patientscoretbl as scr, admintbl as adm WHERE pt.patientid = scr.patientid AND adm.adminid = pt.adminid AND adm.adminlocation = 'Community' GROUP BY result_jfhmc");

            $US = DB::select("SELECT scr.result_us, COUNT(*) AS Total, CONCAT(ROUND(((COUNT(*) / (SELECT COUNT(*) FROM patientscoretbl)) * 100),0),'%') AS Percentage FROM patienttbl as pt, patientscoretbl as scr, admintbl as adm WHERE pt.patientid = scr.patientid AND adm.adminid = pt.adminid AND adm.adminlocation = 'Community' GROUP BY result_us");
        } elseif ($display == 'Hospital') {
            $patients = DB::table('patienttbl')
                ->join('patientscoretbl', 'patienttbl.patientid', '=', 'patientscoretbl.patientid')
                ->join('admintbl', 'patienttbl.patientid', '=', 'admintbl.adminid')
                ->where('admintbl.adminlocation', 'Hospital')
                ->paginate(10);
            $DLCC = DB::select("SELECT scr.result_dlcc, COUNT(*) AS Total, CONCAT(ROUND(((COUNT(*) / (SELECT COUNT(*) FROM patientscoretbl)) * 100),0),'%') AS Percentage FROM patienttbl as pt, patientscoretbl as scr, admintbl as adm WHERE pt.patientid = scr.patientid AND adm.adminid = pt.adminid AND adm.adminlocation = 'Hospital' GROUP BY result_dlcc");
            $SB = DB::select("SELECT scr.result_sb, COUNT(*) AS Total, CONCAT(ROUND(((COUNT(*) / (SELECT COUNT(*) FROM patientscoretbl)) * 100),0),'%') AS Percentage FROM patienttbl as pt, patientscoretbl as scr, admintbl as adm WHERE pt.patientid = scr.patientid AND adm.adminid = pt.adminid AND adm.adminlocation = 'Hospital' GROUP BY result_sb");
            $JFHMC = DB::select("SELECT scr.result_jfhmc, COUNT(*) AS Total, CONCAT(ROUND(((COUNT(*) / (SELECT COUNT(*) FROM patientscoretbl)) * 100),0),'%') AS Percentage FROM patienttbl as pt, patientscoretbl as scr, admintbl as adm WHERE pt.patientid = scr.patientid AND adm.adminid = pt.adminid AND adm.adminlocation = 'Hospital' GROUP BY result_jfhmc");
            $US = DB::select("SELECT scr.result_us, COUNT(*) AS Total, CONCAT(ROUND(((COUNT(*) / (SELECT COUNT(*) FROM patientscoretbl)) * 100),0),'%') AS Percentage FROM patienttbl as pt, patientscoretbl as scr, admintbl as adm WHERE pt.patientid = scr.patientid AND adm.adminid = pt.adminid AND adm.adminlocation = 'Hospital' GROUP BY result_us");
        }
        return view('adminreport', ['display' => $display, 'patients' => $patients, 'DLCC' => $DLCC, 'SB' => $SB, 'JFHMC' => $JFHMC, 'US' => $US]);
    }
    function patientprint(Request $request)
    {
        $patientid = $request->id;
        $patient = patients::where('patientid', $patientid)
            ->get()
            ->first();
        $score = patientscore::where('patientid', $patientid)
            ->get()
            ->first();
        return view('tempprint', ['patient' => $patient, 'score' => $score]);
    }
    function editpatient(Request $request)
    {
        $patientid = $request->id;
        $patient = patients::where('patientid', $patientid)
            ->get()
            ->first();
        $score = patientscore::where('patientid', $patientid)
            ->get()
            ->first();
        return view('editpatient', ['patient' => $patient, 'score' => $score]);
    }
    function changepatient(Request $request)
    {
        $patientageoffirstseen_md = 0;
        $premature_cerebral = 0;
        $patientageoffirstseen_stroke = 0;
        $pvd = 0;
        $patientageoffirstseen_pvd = 0;
        $corneal_arcus = 0;
        $pregnancy = 0;
        $hypothyroidism = 0;
        $nephroticsyndrome = 0;
        $obstructive_liverdisease = 0;
        $medications = 0;
        $hypogonadism = 0;
        $cadSmoking = 0;
        $averageStick = 0;

        $activeSmokingM = 0;
        $adminid = Session::get('adminid');
        $patientid = $request->patientid;
        $patientscoreid = $request->patientscoreid;
        // patient information
        $patientname = $request->patientname;
        $patientnric = $request->patientnric1 . $request->patientnric2 . $request->patientnric3;
        $patientgender = $request->patientgender;
        $patientrace = $request->patientrace;
        $patientyearoffirstseen = 0;
        $patientage = $request->patientage;
        $patientldlclevel = $request->patientldlclevel;
        $patienttclevel = $request->patienttclevel;
        $patientcontact = $request->patientcontact;
        $patientpretclevel = $request->patientpretclevel;
        $patientaddress = $request->patientaddress;
        //$second_degree_tc_levelchild = $request->second_degree_tc_levelchild;

        if (isset($request->second_degree_tc_levelchild)) {
            $second_degree_tc_levelchild = $request->second_degree_tc_levelchild;
        } else {
            $second_degree_tc_levelchild = 0;
        }
        //causes of secondary hypercholesterolaemia
        if (isset($request->pregnancy)) {
            $pregnancy = $request->pregnancy;
        } else {
            $pregnancy = 0;
        }
        if (isset($request->hypothyroidism)) {
            $hypothyroidism = $request->hypothyroidism;
        } else {
            $hypothyroidism = 0;
        }
        if (isset($request->nephroticsyndrome)) {
            $nephroticsyndrome = $request->nephroticsyndrome;
        } else {
            $nephroticsyndrome = 0;
        }
        if (isset($request->obstructive_liverdisease)) {
            $obstructive_liverdisease = $request->obstructive_liverdisease;
        } else {
            $obstructive_liverdisease = 0;
        }
        if (isset($request->medications)) {
            $medications = $request->medications;
        } else {
            $medications = 0;
        }
        if (isset($request->hypogonadism)) {
            $hypogonadism = $request->hypogonadism;
        } else {
            $hypogonadism = 0;
        }

        //crf
        if (isset($request->cadSmoking)) {
            $cadSmoking = $request->cadSmoking;
        } else {
            $cadSmoking = 0;
        }
        //if smoking yes, capture the average stick, duration of active smoking
        if (isset($request->averageStick)) {
            $averageStick = $request->averageStick;
        } else {
            $averageStick = 0;
        }
        if (isset($request->activeSmokingM)) {
            $activeSmokingM = $request->activeSmokingM;
        } else {
            $activeSmokingM = 0;
        }
        if (isset($request->activeSmokingY)) {
            $activeSmokingY = $request->activeSmokingY;
        } else {
            $activeSmokingY = 0;
        }

        //if cadSmokingNo =yes, then exSmoker, capture the average stick, duration of active smoking
        if (isset($request->cadSmokingNo)) {
            $cadSmokingNo = $request->cadSmokingNo;
        } else {
            $cadSmokingNo = 0;
        }

        // if cadSmoking= No, then never smoker

        if (isset($request->cadDM)) {
            $cadDM = $request->cadDM;
        } else {
            $cadDM = 0;
        }
        if (isset($request->lpa)) {
            $lpa = $request->lpa;
        } else {
            $lpa = 0;
        }
        if (isset($request->lpav)) {
            $lpav = $request->lpav;
        } else {
            $lpav = 0;
        }
        if (isset($request->cadHT)) {
            $cadHT = $request->cadHT;
        } else {
            $cadHT = 0;
        }
        if (isset($request->systolic)) {
            $systolic = $request->systolic;
        } else {
            $systolic = 0;
        }
        if (isset($request->dystolic)) {
            $dystolic = $request->dystolic;
        } else {
            $dystolic = 0;
        }
        if (isset($request->cadHTT)) {
            $cadHTT = $request->cadHTT;
        } else {
            $cadHTT = 0;
        }
        if (isset($request->DMp)) {
            $DMp = $request->DMp;
        } else {
            $DMp = 0;
        }
        if (isset($request->DMtod)) {
            $DMtod = $request->DMtod;
        } else {
            $DMtod = 0;
        }
        if (isset($request->patientheight)) {
            $patientheight = $request->patientheight;
        } else {
            $patientheight = 0;
        }
        if (isset($request->patientweight)) {
            $patientweight = $request->patientweight;
        } else {
            $patientweight = 0;
        }
        if (isset($request->patientwaist)) {
            $patientwaist = $request->patientwaist;
        } else {
            $patientwaist = 0;
        }

        if (isset($request->cadHC)) {
            $cadHC = $request->cadHC;
        } else {
            $cadHC = 0;
        }
        if (isset($request->cadObesity)) {
            $cadObesity = $request->cadObesity;
        } else {
            $cadObesity = 0;
        }

        if (isset($request->patientpreldlclevel)) {
            $patientpreldlclevel = $request->patientpreldlclevel;
        } else {
            $patientpreldlclevel = $request->patientpreldlclevel_current;
        }

        if (isset($request->cad)) {
            $premature_cad = $request->cad;
        } else {
            $premature_cad = 'unknown';
        }

        if (isset($request->premature_cerebral)) {
            $premature_cerebral = $request->premature_cerebral;
        } else {
            $premature_cerebral = 'unknown';
        }

        if (isset($request->pvd)) {
            $pvd = $request->pvd;
        } else {
            $pvd = 'unknown';
        }

        if ($premature_cad == 'yes') {
            if (isset($request->patientageatfirstseen)) {
                $patientageatfirstseen = $request->patientageatfirstseen;
            }
            if (isset($request->patientageoffirstseen_md)) {
                $patientageoffirstseen_md = $request->patientageoffirstseen_md;
            }
        } elseif ($premature_cad == 'no') {
            if (isset($request->patientageatfirstseen)) {
                $patientageatfirstseen = 0;
            }
            if (isset($request->patientageoffirstseen_md)) {
                $patientageoffirstseen_md = $request->patientageoffirstseen_md;
            }
        } else {
            $patientageatfirstseen = 0;
            $patientageoffirstseen_md = 0;
        }

        if ($premature_cerebral == 'yes') {
            if (isset($request->patientageoffirstseen_stroke)) {
                $patientageoffirstseen_stroke = $request->patientageoffirstseen_stroke;
            }
        } else {
            $patientageoffirstseen_stroke = 0;
        }

        if ($pvd == 'yes') {
            if (isset($request->patientageoffirstseen_pvd)) {
                $patientageoffirstseen_pvd = $request->patientageoffirstseen_pvd;
            }
        } else {
            $patientageoffirstseen_pvd = 0;
        }

        //$premature_cad = $request->premature_cad;
        // $premature_cerebral = $request->premature_cerebral;
        // $pvd = $request->pvd;
        $corneal_arcus = $request->corneal_arcus;

        // check ldlc adjustment checked or not, if not checked then get the id
        if (isset($request->statin_name)) {
            $baseline_therapy = $request->statin_name;
            //} else {
            //   $baseline_therapy = 0;
        }
        $baseline_therapy_specify = 0;
        $adjust_ldlclevel = $request->adjust_ldlclevel;

        if ($baseline_therapy == 1) {
            $adjust_ldlclevel = $request->adjust_ldlclevel;
            if (isset($request->ldlcadjustment)) {
                $baseline_therapy_specify = explode('-', $request->ldlcadjustment)[1];
            }
        }

        if (isset($request->patientpretg)) {
            $patientpretg = $request->patientpretg;
        } //new
        if (isset($request->patientprehdlc)) {
            $patientprehdlc = $request->patientprehdlc;
        } //new
        if (isset($request->fasting)) {
            $fasting = $request->fasting;
        }
        //new
        else {
            $fasting = '';
        }

        if (isset($request->patientposttg)) {
            $patientposttg = $request->patientposttg;
        } //new
        if (isset($request->patientposthdlc)) {
            $patientposthdlc = $request->patientposthdlc;
        } //new

        if (isset($request->postfasting)) {
            $postfasting = $request->postfasting;
        }
        //new
        else {
            $postfasting = '';
        }

        // xanthomata
        // if either one of tendon_xanthomata items is yes, set the value for tendon_xanthomata = yes.
        if (isset($request->tendon_xanthomata_elbows)) {
            $tendon_xanthomata_elbows = $request->tendon_xanthomata_elbows;
        } //new
        if (isset($request->tendon_xanthomata_heels)) {
            $tendon_xanthomata_heels = $request->tendon_xanthomata_heels;
        } //new
        if (isset($request->tendon_xanthomata_fingers)) {
            $tendon_xanthomata_fingers = $request->tendon_xanthomata_fingers;
        } //new
        if (isset($request->tendon_xanthomata_knees)) {
            $tendon_xanthomata_knees = $request->tendon_xanthomata_knees;
        } //new
        if (isset($request->tendon_xanthomata_palms)) {
            $tendon_xanthomata_palms = $request->tendon_xanthomata_palms;
        } //new

        if ($tendon_xanthomata_elbows == 'yes' || $tendon_xanthomata_heels == 'yes' || $tendon_xanthomata_fingers == 'yes' || $tendon_xanthomata_knees == 'yes' || $tendon_xanthomata_palms == 'yes') {
            $tendon_xanthomata = 'yes';
        } else {
            $tendon_xanthomata = 'no';
        }
        if (isset($request->achilles_tendon)) {
            $achilles_tendon = $request->achilles_tendon;
        }
        if (isset($request->nodular_xanthoma)) {
            $nodular_xanthoma = $request->nodular_xanthoma;
        }

        if (isset($request->genetic_mutation)) {
            $genetic_mutation = $request->genetic_mutation;
        }
        // genetic mutation
        if ($genetic_mutation == 'yes') {
            if (isset($request->ldlr)) {
                $ldlr = $request->ldlr;
            } else {
                $ldlr = '';
            }
            if (isset($request->apob)) {
                $apob = $request->apob;
            } else {
                $apob = '';
            }
            if (isset($request->pcsk9)) {
                $pcsk9 = $request->pcsk9;
            } else {
                $pcsk9 = '';
            }
            if (isset($request->other_fh_mutations)) {
                $other_fh_mutations = $request->other_fh_mutations;
            } else {
                $other_fh_mutations = '';
            }
            if (isset($request->other_fh_mutations_detail)) {
                $other_fh_mutations_detail = $request->other_fh_mutations_detail;
            } else {
                $other_fh_mutations_detail = '';
            }

            if (isset($request->dontknow_geneticmutation)) {
                $dontknow_geneticmutation = $request->dontknow_geneticmutation;
            } else {
                $dontknow_geneticmutation = '';
            }

            if (isset($request->notfoundmutation)) {
                $notfoundmutation = $request->notfoundmutation;
            } else {
                $notfoundmutation = '';
            }

            $reasons = 'unknown';
            $genetic_mutation_noreason_detail = 'unknown';
        } elseif ($genetic_mutation == 'no') {
            $ldlr = 'unknown';
            $apob = 'unknown';
            $pcsk9 = 'unknown';
            $other_fh_mutations = 'unknown';
            $other_fh_mutations_detail = 'unknown';
            $dontknow_geneticmutation = 'unknown';
            $notfoundmutation = 'unknown';

            if (isset($request->reasons)) {
                $reasons = $request->reasons;
            } else {
                $reasons = 0;
            }
            if (isset($request->genetic_mutation_noreason_detail)) {
                $genetic_mutation_noreason_detail = $request->genetic_mutation_noreason_detail;
            } else {
                $genetic_mutation_noreason_detail = 0;
            }
        } else {
            $genetic_mutation = 'pending';
            $ldlr = 'unknown';
            $apob = 'unknown';
            $pcsk9 = 'unknown';
            $other_fh_mutations = 'unknown';
            $other_fh_mutations_detail = 'unknown';
            $dontknow_geneticmutation = 'unknown';
            $reasons = 'unknown';
            $genetic_mutation_noreason_detail = 'unknown';
            $notfoundmutation = 'unknown';
        }

        // family information

        $first_degree = isset($request->first_degree) ? $request->first_degree : 0;

        if ($first_degree == 1) {
            $first_degree_age = isset($request->first_degree_age) ? $request->first_degree_age : '';
            $first_degree_hyperlipidaemia = isset($request->first_degree_hyperlipidaemia) ? $request->first_degree_hyperlipidaemia : '';
            $first_degree_hyperlipidaemiachild = isset($request->first_degree_hyperlipidaemiachild) ? $request->first_degree_hyperlipidaemiachild : '';
            $first_degree_tc_levelchild = isset($request->first_degree_tc_levelchild) ? $request->first_degree_tc_levelchild : '';
            $first_degree_tc_level = isset($request->first_degree_tc_level) ? $request->first_degree_tc_level : '';
            $first_degree_gender = isset($request->first_degree_gender) ? $request->first_degree_gender : '';
            $first_degree_premature_cad = isset($request->first_degree_premature_cad) ? $request->first_degree_premature_cad : '';

            //if first_degree_premature_cad==no, update first degree age =0 and first degree gender=0.

            if ($first_degree_premature_cad == 'no') {
                $first_degree_age = 0;
                $first_degree_gender = 0;
            }

            if ($first_degree_hyperlipidaemia == 'yes') {
                $first_degree_tclvl = 7.5;
                $first_degree_ldlclvl = 4.9;
                //$first_degree_tc_level= $request->first_degree_tc_level;
            }

            $first_degree_tendon_xanthomata = $request->first_degree_tendon_xanthomata;
            $first_degree_corneal_arcus = $request->first_degree_corneal_arcus;
            $first_degree_fh = $request->first_degree_fh;

            if (isset($request->first_degree_tclvl)) {
                $first_degree_tclvl = $request->first_degree_tclvl;
            }

            if (isset($request->first_degree_ldlclvl)) {
                $first_degree_ldlclvl = $request->first_degree_ldlclvl;
            }
        } else {
            $first_degree_age = 0;
            $first_degree_tclvl = 0.0;
            $first_degree_ldlclvl = 0.0;
            $first_degree_gender = 0;
            $first_degree_hyperlipidaemia = '';
            $first_degree_hyperlipidaemiachild = '';
            $first_degree_premature_cad = 0;
            $first_degree_tendon_xanthomata = '';
            $first_degree_corneal_arcus = '';
            $first_degree_fh = 'null';
            $first_degree_tc_level = '';
            $first_degree_tc_levelchild = '';
        }

        $second_degree = isset($request->second_degree) ? $request->second_degree : 0;

        if ($second_degree == 1) {
            $second_degree_premature_cad = isset($request->second_degree_premature_cad) ? $request->second_degree_premature_cad : '';
            $second_degree_gender = isset($request->second_degree_gender) ? $request->second_degree_gender : '';
            $second_degree_age = isset($request->second_degree_age) ? $request->second_degree_age : '';
            if (isset($request->second_degree_tc_levelchild)) {
                $second_degree_tc_levelchild = $request->second_degree_tc_levelchild;
            }
            //$second_degree_tc_levelchild= isset($request->$second_degree_tc_levelchild) ? $request->$second_degree_tc_levelchild : '';
            $second_degree_tc_level = isset($request->second_degree_tc_level) ? $request->second_degree_tc_level : '';
            $second_degree_tendon_xanthomata = isset($request->second_degree_tendon_xanthomata) ? $request->second_degree_tendon_xanthomata : '';
            $second_degree_fh = isset($request->second_degree_fh) ? $request->second_degree_fh : '';

            if ($second_degree_tc_level == 'yes') {
                $second_degree_tclvl = 7.5;
            }
        } else {
            $second_degree_age = 0;
            $second_degree_tclvl = 0.0;
            $second_degree_gender = 0;
            $second_degree_hyperlipidaemia = 0;
            $second_degree_tc_levelchild = '';
            $second_degree_tc_level = '';
            $second_degree_premature_cad = 0;
            $second_degree_patientageatfirstseen = 0;
            $second_degree_patientageoffirstseen_md = 0;
            $second_degree_tendon_xanthomata = 0;
            $second_degree_fh = 'null';
        }

        $third_degree = 0;
        $third_degree_fh = 'null';
        if (isset($request->third_degree)) {
            $third_degree = $request->third_degree;
            $third_degree_fh = $request->third_degree_fh;
        }

        $registerdate = date('Y-m-d');

        $data = [
            'adminid' => $adminid,
            'patientname' => $patientname,
            'patientgender' => $patientgender,
            'patientrace' => $patientrace,
            'patientnric' => $patientnric,
            'patientcontact' => $patientcontact,
            'patientaddress' => $patientaddress,
            'patientheight' => $patientheight,
            'patientweight' => $patientweight,
            'patientwaist' => $patientwaist,
            'patientyearoffirstseen' => $patientyearoffirstseen,
            'registerdate' => $registerdate,
            'premature_cad' => $premature_cad,
            'ageCAD' => $patientageatfirstseen,
            'agefirstseenMD' => $patientageoffirstseen_md,
            'premature_cerebral' => $premature_cerebral,
            'ageStroke' => $patientageoffirstseen_stroke,
            'pvd' => $pvd,
            'agePVD' => $patientageoffirstseen_pvd,
            'corneal_arcus' => $corneal_arcus,
            'pregnancy' => $pregnancy,
            'hypothyroidism' => $hypothyroidism,
            'nephroticsyndrome' => $nephroticsyndrome,
            'obstructive_liverdisease' => $obstructive_liverdisease,
            'medications' => $medications,
            'hypogonadism' => $hypogonadism,
            'cadSmoking' => $cadSmoking,
            'averageStick' => $averageStick,
            'activeSmokingM' => $activeSmokingM,
            'activeSmokingY' => $activeSmokingY,
            'cadDM' => $cadDM,
            'lpa' => $lpa,
            'lpav' => $lpav,
            'cadHT' => $cadHT,
            'systolic' => $systolic,
            'dystolic' => $dystolic,
            'cadHTT' => $cadHTT,
            'DMp' => $DMp,
            'DMtod' => $DMtod,
            'cadHC' => $cadHC,
            'cadObesity' => $cadObesity,
            'patienttclevel' => $patienttclevel,
            'patientldlclevel' => $patientldlclevel,
            'patientpreldlclevel' => $patientpreldlclevel,
            'patientpretclevel' => $patientpretclevel,
            'patientpretg' => $patientpretg,
            'patientprehdlc' => $patientprehdlc,
            'fasting' => $fasting,
            'patientposttg' => $patientposttg,
            'patientposthdlc' => $patientposthdlc,
            'postfasting' => $postfasting,
            'baseline_therapy' => $baseline_therapy,
            'baseline_therapy_specify' => $baseline_therapy_specify,
            'tendon_xanthomata' => $tendon_xanthomata,
            'tendon_xanthomata_elbows' => $tendon_xanthomata_elbows,
            'tendon_xanthomata_heels' => $tendon_xanthomata_heels,
            'tendon_xanthomata_fingers' => $tendon_xanthomata_fingers,
            'tendon_xanthomata_knees' => $tendon_xanthomata_knees,
            'tendon_xanthomata_palms' => $tendon_xanthomata_palms,
            'achilles_tendon' => $achilles_tendon,
            'nodular_xanthoma' => $nodular_xanthoma,
            'genetic_mutation' => $genetic_mutation,
            'ldlr' => $ldlr,
            'apob' => $apob,
            'pcsk9' => $pcsk9,
            'other_fh_mutations' => $other_fh_mutations,
            'other_fh_mutations_detail' => $other_fh_mutations_detail,
            'dontknow_geneticmutation' => $dontknow_geneticmutation,
            'notfoundmutation' => $notfoundmutation,
            'reasons' => $reasons,
            'genetic_mutation_noreason_detail' => $genetic_mutation_noreason_detail,

            'first_degree' => $first_degree,

            'first_degree_gender' => $first_degree_gender,
            'first_degree_age' => $first_degree_age,
            'first_degree_tclvl' => $first_degree_tclvl,
            'first_degree_ldlclvl' => $first_degree_ldlclvl,
            'first_degree_hyperlipidaemia' => $first_degree_hyperlipidaemia,
            'first_degree_hyperlipidaemiachild' => $first_degree_hyperlipidaemiachild,
            'first_degree_tc_level' => $first_degree_tc_level,
            'first_degree_tc_levelchild' => $first_degree_tc_levelchild,
            'first_degree_premature_cad' => $first_degree_premature_cad,
            'first_degree_tendon_xanthomata' => $first_degree_tendon_xanthomata,
            'first_degree_corneal_arcus' => $first_degree_corneal_arcus,
            'first_degree_fh' => $first_degree_fh,
            'second_degree' => $second_degree,
            'second_degree_gender' => $second_degree_gender,
            'second_degree_age' => $second_degree_age,
            'second_degree_tclvl' => $second_degree_tclvl,
            'second_degree_hyperlipidaemia' => $second_degree_hyperlipidaemia,
            'second_degree_tc_level' => $second_degree_tc_level,
            'second_degree_tc_levelchild' => $second_degree_tc_levelchild,
            'second_degree_premature_cad' => $second_degree_premature_cad,
            'second_degree_tendon_xanthomata' => $second_degree_tendon_xanthomata,
            'second_degree_fh' => $second_degree_fh,
            'third_degree' => $third_degree,
            'third_degree_fh' => $third_degree_fh,
        ];

        $patients = patients::where('patientid', $patientid);
        $patients->update($data);
        $first_question_dlcc = 0;
        if ($first_degree_premature_cad == 'yes') {
            if ($first_degree_gender == 1 && $first_degree_age < 55) {
                $first_question_dlcc = max($first_question_dlcc, 1);
            } elseif ($first_degree_gender == 2 && $first_degree_age < 60) {
                $first_question_dlcc = max($first_question_dlcc, 1);
            }
        }

        //first_degree_hyperlipidaemia = yes
        if ($first_degree_hyperlipidaemia == 'yes') {
            $first_question_dlcc = max($first_question_dlcc, 1);
        }

        if ($first_degree_hyperlipidaemiachild == 'yes') {
            $first_question_dlcc = max($first_question_dlcc, 2);
        }

        if ($first_degree_tendon_xanthomata == 'yes') {
            $first_question_dlcc = max($first_question_dlcc, 2);
        }
        if ($first_degree_corneal_arcus == 'yes') {
            $first_question_dlcc = max($first_question_dlcc, 2);
        }

        echo 'first_question_dlcc :' . $first_question_dlcc;

        // second question
        $second_question_dlcc = 0;
        if ($patientageatfirstseen < 55 && $patientgender == 1) {
            if ($premature_cad == 'yes') {
                $second_question_dlcc = max($second_question_dlcc, 2);
            }
        }
        if (($patientageoffirstseen_stroke < 55 && $patientgender == 1) || ($patientageoffirstseen_pvd < 55 && $patientgender == 1)) {
            if ($premature_cerebral == 'yes') {
                $second_question_dlcc = max($second_question_dlcc, 1);
            }

            if ($pvd == 'yes') {
                $second_question_dlcc = max($second_question_dlcc, 1);
            }
        }

        if ($patientageatfirstseen < 60 && $patientgender == 2) {
            if ($premature_cad == 'yes') {
                $second_question_dlcc = max($second_question_dlcc, 2);
            }
        }
        if (($patientageoffirstseen_stroke < 60 && $patientgender == 2) || ($patientageoffirstseen_pvd < 60 && $patientgender == 2)) {
            if ($premature_cerebral == 'yes') {
                $second_question_dlcc = max($second_question_dlcc, 1);
            }

            if ($pvd == 'yes') {
                $second_question_dlcc = max($second_question_dlcc, 1);
            }
        }

        // third question
        $third_question_dlcc = 0;
        if ($tendon_xanthomata == 'yes' || $achilles_tendon == 'yes' || $nodular_xanthoma == 'yes') {
            $third_question_dlcc = max($third_question_dlcc, 6);
        }
        if ($corneal_arcus == 'yes') {
            $third_question_dlcc = max($third_question_dlcc, 4);
        }

        // on lipid =no, use pretreatment tc level
        // on lipid =yes, if pre and post available, use pre tc. else use post tc.

        // fourth question
        $fourth_question_dlcc = 0;
        // if ($patientldlclevel > 0) {
        if ($baseline_therapy == 1 && $patientldlclevel > 0 && $patientpreldlclevel <= 0) {
            // if  (($baseline_therapy == 1)&&($patientldlclevel > 0)){
            if ($adjust_ldlclevel >= 8.5) {
                $fourth_question_dlcc = 8;
            } elseif ($adjust_ldlclevel >= 6.5 && $adjust_ldlclevel <= 8.4) {
                $fourth_question_dlcc = 5;
            } elseif ($adjust_ldlclevel >= 5.0 && $adjust_ldlclevel <= 6.4) {
                $fourth_question_dlcc = 3;
            } elseif ($adjust_ldlclevel >= 4.0 && $adjust_ldlclevel <= 4.9) {
                $fourth_question_dlcc = 1;
            } elseif ($adjust_ldlclevel < 4.0) {
                $fourth_question_dlcc = 0;
            }
        } else {
            if ($patientpreldlclevel >= 8.5) {
                $fourth_question_dlcc = 8;
            } elseif ($patientpreldlclevel >= 6.5 && $patientpreldlclevel <= 8.4) {
                $fourth_question_dlcc = 5;
            } elseif ($patientpreldlclevel >= 5.0 && $patientpreldlclevel <= 6.4) {
                $fourth_question_dlcc = 3;
            } elseif ($patientpreldlclevel >= 4.0 && $patientpreldlclevel <= 4.9) {
                $fourth_question_dlcc = 1;
            } elseif ($patientpreldlclevel < 4.0) {
                $fourth_question_dlcc = 0;
            }
        }
        // }

        // fifth question
        $fifth_question_dlcc = 0;
        if ($ldlr == 'yes' || $apob == 'yes' || $pcsk9 == 'yes' || $other_fh_mutations == 'yes') {
            $fifth_question_dlcc = 8;
        }

        $total_dlcc = $first_question_dlcc + $second_question_dlcc + $third_question_dlcc + $fourth_question_dlcc + $fifth_question_dlcc;

        // bug
        /*if (($patientldlclevel == 0)&& ($patientpreldlclevel==0)) {
        $result_dlcc = "INVALID";
    }
    // bug
    else {*/
        if ($total_dlcc <= 2) {
            $result_dlcc = 'UNLIKELY';
        } elseif ($total_dlcc >= 3 && $total_dlcc <= 5) {
            $result_dlcc = 'POSSIBLE';
        } elseif ($total_dlcc >= 6 && $total_dlcc <= 8) {
            $result_dlcc = 'PROBABLE';
        } elseif ($total_dlcc > 8) {
            $result_dlcc = 'DEFINITE';
        }

        // sb question

        // first question
        $first_question_sb = 0;
        if ($baseline_therapy == 1) {
            if ($patientage >= 16) {
                if ($patienttclevel > 7.5) {
                    $first_question_sb = 1;
                }
                if ($patientldlclevel > 4.9) {
                    $first_question_sb = 1;
                }
            } else {
                if ($patienttclevel > 6.7) {
                    $first_question_sb = 1;
                }
                if ($patientldlclevel > 4.0) {
                    $first_question_sb = 1;
                }
            }
        } else {
            if ($patientage >= 16) {
                if ($patientpretclevel > 7.5) {
                    $first_question_sb = 1;
                }
                if ($patientpreldlclevel > 4.9) {
                    $first_question_sb = 1;
                }
            } else {
                if ($patientpretclevel > 6.7) {
                    $first_question_sb = 1;
                }
                if ($patientpreldlclevel > 4.0) {
                    $first_question_sb = 1;
                }
            }
        }

        // second question
        $second_question_sb = 0;
        if ($tendon_xanthomata == 'yes' || $achilles_tendon == 'yes' || $nodular_xanthoma == 'yes' || $first_degree_tendon_xanthomata == 'yes' || $second_degree_tendon_xanthomata == 'yes') {
            $second_question_sb = 1;
        }

        // third question
        $third_question_sb = 0;
        if ($ldlr == 'yes' || $apob == 'yes' || $pcsk9 == 'yes') {
            $third_question_sb = 1;
        }

        // fourth question
        $fourth_question_sb = 0;
        if ($first_degree_age < 60) {
            if ($first_degree_premature_cad == 'yes') {
                $fourth_question_sb = 1;
            }
        }

        if ($second_degree_age < 50) {
            if ($second_degree_premature_cad == 'yes') {
                $fourth_question_sb = 1;
            }
        }

        // fifth question
        $fifth_question_sb = 0;

        if ($first_degree_tc_level == 'yes') {
            $fifth_question_sb = 1;
        }

        if ($first_degree_tc_levelchild == 'yes') {
            $fifth_question_sb = 1;
        }

        if ($second_degree_tc_level == 'yes') {
            $fifth_question_sb = 1;
        }

        if ($second_degree_tc_levelchild == 'yes') {
            $fifth_question_sb = 1;
        }

        if ($second_degree_age >= 16) {
            if ($second_degree_tclvl > 7.5) {
                $fifth_question_sb = 1;
            }
        }

        if (($first_question_sb == 1 && $second_question_sb == 1) || ($first_question_sb == 1 && $third_question_sb == 1)) {
            $result_sb = 'DEFINITE';
        } elseif (($first_question_sb == 1 && $fourth_question_sb == 1) || ($first_question_sb == 1 && $fifth_question_sb == 1)) {
            $result_sb = 'POSSIBLE';
        } else {
            $result_sb = 'UNLIKELY';
        }

        // jfhmc question

        if ($patientage >= 15) {
            // first question
            $first_question_jfhmc = 0;
            if ($baseline_therapy == 1) {
                if ($patientldlclevel >= 4.7) {
                    $first_question_jfhmc = 1;
                }
            } else {
                if ($patientpreldlclevel >= 4.7) {
                    $first_question_jfhmc = 1;
                }
            }

            // second question
            $second_question_jfhmc = 0;
            if ($tendon_xanthomata == 'yes' || $achilles_tendon == 'yes' || $nodular_xanthoma == 'yes') {
                $second_question_jfhmc = 1;
            }

            // third question
            $third_question_jfhmc = 0;
            if ($first_degree_fh == 'yes') {
                $third_question_jfhmc = 1;
            }

            if ($first_degree_age < 55 && $first_degree_gender == 1 && $first_degree_premature_cad == 'yes') {
                $third_question_jfhmc = 1;
            } elseif ($first_degree_age < 60 && $first_degree_gender == 2 && $first_degree_premature_cad == 'yes') {
                $third_question_jfhmc = 1;
            }

            if ($second_degree_fh == 'yes') {
                $third_question_jfhmc = 1;
            }

            if ($second_degree_age < 55 && $second_degree_gender == 1 && $second_degree_premature_cad == 'yes') {
                $third_question_jfhmc = 1;
            } elseif ($second_degree_age < 60 && $second_degree_gender == 2 && $second_degree_premature_cad == 'yes') {
                $third_question_jfhmc = 1;
            }

            //total
            $total_jfhmc = $first_question_jfhmc + $second_question_jfhmc + $third_question_jfhmc;

            if ($total_jfhmc >= 2) {
                $result_jfhmc = 'YES';
            } elseif ($total_jfhmc == 1) {
                if ($first_question_jfhmc == 1) {
                    $result_jfhmc = 'SUSPECTED';
                } elseif ($second_question_jfhmc == 1) {
                    $result_jfhmc = 'NO';
                } elseif ($third_question_jfhmc == 1) {
                    if ($baseline_therapy == 1) {
                        if ($patientldlclevel >= 3.6) {
                            $result_jfhmc = 'SUSPECTED';
                        } else {
                            $result_jfhmc = 'NO';
                        }
                    } else {
                        if ($patientpreldlclevel >= 3.6) {
                            $result_jfhmc = 'SUSPECTED';
                        } else {
                            $result_jfhmc = 'NO';
                        }
                    }
                }
            } else {
                $result_jfhmc = 'NO';
            }
        } else {
            $total_jfhmc = 0;
            $first_question_jfhmc = 0;
            $second_question_jfhmc = 0;
            $third_question_jfhmc = 0;
            $result_jfhmc = 'NO';
        }

        // us medped

        // on lipid =no, use pretreatment tc level
        // on lipid =yes, if pre and post available, use pre tc. else use post tc.

        //echo $first_degree_fh."first_degree_fh";
        //echo $second_degree_fh."second_degree_fh";
        //echo $third_degree_fh."third_degree_fh";

        if ($baseline_therapy == 1) {
            if ($patientpretclevel > 0 && $patienttclevel > 0) {
                $patienttclevel = $patientpretclevel;
            }

            if ($patientage > 0 && $patienttclevel > 0) {
                if ($first_degree_fh == 'yes') {
                    if ($patientage < 20 && $patienttclevel > 5.7) {
                        $result_us = 'YES';
                    } elseif ($patientage >= 20 && $patientage <= 29 && $patienttclevel > 6.2) {
                        $result_us = 'YES';
                    } elseif ($patientage >= 30 && $patientage <= 39 && $patienttclevel > 7.0) {
                        $result_us = 'YES';
                    } elseif ($patientage >= 40 && $patienttclevel > 7.5) {
                        $result_us = 'YES';
                    } else {
                        $result_us = 'NO';
                    }
                } elseif ($second_degree_fh == 'yes') {
                    if ($patientage < 20 && $patienttclevel > 5.9) {
                        $result_us = 'YES';
                    } elseif ($patientage >= 20 && $patientage <= 29 && $patienttclevel > 6.5) {
                        $result_us = 'YES';
                    } elseif ($patientage >= 30 && $patientage <= 39 && $patienttclevel > 7.2) {
                        $result_us = 'YES';
                    } elseif ($patientage >= 40 && $patienttclevel > 7.8) {
                        $result_us = 'YES';
                    } else {
                        $result_us = 'NO';
                    }
                } elseif ($third_degree_fh == 'yes') {
                    if ($patientage < 20 && $patienttclevel > 6.2) {
                        $result_us = 'YES';
                    } elseif ($patientage >= 20 && $patientage <= 29 && $patienttclevel > 6.7) {
                        $result_us = 'YES';
                    } elseif ($patientage >= 30 && $patientage <= 39 && $patienttclevel > 7.5) {
                        $result_us = 'YES';
                    } elseif ($patientage >= 40 && $patienttclevel > 8.0) {
                        $result_us = 'YES';
                    } else {
                        $result_us = 'NO';
                    }
                } else {
                    if ($patientage < 20 && $patienttclevel > 7.0) {
                        $result_us = 'YES';
                    } elseif ($patientage >= 20 && $patientage <= 29 && $patienttclevel > 7.5) {
                        $result_us = 'YES';
                    } elseif ($patientage >= 30 && $patientage <= 39 && $patienttclevel > 8.8) {
                        $result_us = 'YES';
                    } elseif ($patientage >= 40 && $patienttclevel > 9.3) {
                        $result_us = 'YES';
                    } else {
                        $result_us = 'NO';
                    }
                }
            }
        } else {
            if ($patientage > 0 && $patientpretclevel > 0) {
                if ($first_degree_fh == 'yes') {
                    if ($patientage < 20 && $patientpretclevel > 5.7) {
                        $result_us = 'YES';
                    } elseif ($patientage >= 20 && $patientage <= 29 && $patientpretclevel > 6.2) {
                        $result_us = 'YES';
                    } elseif ($patientage >= 30 && $patientage <= 39 && $patientpretclevel > 7.0) {
                        $result_us = 'YES';
                    } elseif ($patientage >= 40 && $patientpretclevel > 7.5) {
                        $result_us = 'YES';
                    } else {
                        $result_us = 'NO';
                    }
                } elseif ($second_degree_fh == 'yes') {
                    if ($patientage < 20 && $patientpretclevel > 5.9) {
                        $result_us = 'YES';
                    } elseif ($patientage >= 20 && $patientage <= 29 && $patientpretclevel > 6.5) {
                        $result_us = 'YES';
                    } elseif ($patientage >= 30 && $patientage <= 39 && $patientpretclevel > 7.2) {
                        $result_us = 'YES';
                    } elseif ($patientage >= 40 && $patientpretclevel > 7.8) {
                        $result_us = 'YES';
                    } else {
                        $result_us = 'NO';
                    }
                } elseif ($third_degree_fh == 'yes') {
                    if ($patientage < 20 && $patientpretclevel > 6.2) {
                        $result_us = 'YES';
                    } elseif ($patientage >= 20 && $patientage <= 29 && $patientpretclevel > 6.7) {
                        $result_us = 'YES';
                    } elseif ($patientage >= 30 && $patientage <= 39 && $patientpretclevel > 7.5) {
                        $result_us = 'YES';
                    } elseif ($patientage >= 40 && $patientpretclevel > 8.0) {
                        $result_us = 'YES';
                    } else {
                        $result_us = 'NO';
                    }
                } else {
                    if ($patientage < 20 && $patientpretclevel > 7.0) {
                        $result_us = 'YES';
                    } elseif ($patientage >= 20 && $patientage <= 29 && $patientpretclevel > 7.5) {
                        $result_us = 'YES';
                    } elseif ($patientage >= 30 && $patientage <= 39 && $patientpretclevel > 8.8) {
                        $result_us = 'YES';
                    } elseif ($patientage >= 40 && $patientpretclevel > 9.3) {
                        $result_us = 'YES';
                    } else {
                        $result_us = 'NO';
                    }
                }
            } else {
                $result_us = 'NO'; // TC level is 0.
            }
        }
        $data1 = [
            'first_question_dlcc' => $first_question_dlcc,
            'second_question_dlcc' => $second_question_dlcc,
            'third_question_dlcc' => $third_question_dlcc,
            'fourth_question_dlcc' => $fourth_question_dlcc,
            'fifth_question_dlcc' => $fifth_question_dlcc,
            'total_dlcc' => $total_dlcc,
            'result_dlcc' => $result_dlcc,
            'first_question_sb' => $first_question_sb,
            'second_question_sb' => $second_question_sb,
            'third_question_sb' => $third_question_sb,
            'fourth_question_sb' => $fourth_question_sb,
            'fifth_question_sb' => $fifth_question_sb,
            'result_sb' => $result_sb,
            'first_question_jfhmc' => $first_question_jfhmc,
            'second_question_jfhmc' => $second_question_jfhmc,
            'third_question_jfhmc' => $third_question_jfhmc,
            'total_jfhmc' => $total_jfhmc,
            'result_jfhmc' => $result_jfhmc,
            'result_us' => $result_us,
        ];
        $patientscores = patientscore::where('patientid', $patientid);
        $patientscores->update($data1);
        return redirect("/patient-dashboard/$patientid")->with('message', 'Successfully updated patient information.');
    }
    function exportcsv(Request $request)
    {
        
        $datestart = 0;
        $dateend = 0;

        $adminid = session::get('adminid');
        $adminstaffid = $request->staffid;
        $date_from = $request->dtp_input2;
        $date_to = $request->dtp_input3;
        $adminlocation =$request->adminlocation;
        $adminstate = $request->adminstate;
        return Excel::download(new ExportPatients($adminid,$adminstaffid,$date_from,$date_to,$adminlocation,$adminstate), 'users.xlsx');
    }
}