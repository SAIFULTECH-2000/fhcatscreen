<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\patients;
use App\Models\patientscore;
class PatientController extends Controller
{
    function Register(Request $request)
    {
        $adminid = session::get('adminid');
        // patient information
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

        $patientname = $request->patientname;
        $patientnric = $request->patientnric1 . $request->patientnric2 . $request->patientnric3;
        $patientgender = $request->patientgender;
        //$patientrace = $request->patientrace;
        $patientyearoffirstseen = 0;
        $patientage = $request->patientage;
        $patientldlclevel = $request->patientldlclevel;
        $patienttclevel = $request->patienttclevel;
        $patientpreldlclevel = $request->patientpreldlclevel; //new
        $patientpretclevel = $request->patientpretclevel; //new
        $patientcontact = $request->patientcontact;
        $patientaddress = $request->patientaddress;

        if (isset($request->patientrace)) {
            $patientrace = $request->patientrace;
        } else {
            $patientrace = 'unknown';
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

        // CAD
        if ($premature_cad == 'yes') {
            $patientageatfirstseen = $request->patientageatfirstseen;
            $patientageoffirstseen_md = $request->patientageoffirstseen_md;
        } elseif ($premature_cad == 'no') {
            $patientageatfirstseen = 0;
            $patientageoffirstseen_md = $request->patientageoffirstseen_mdn;
            $cadmdfirstseen = 0;
            $cadmdfirstseenno = $request->cadmdfirstseenno;
        } else {
            $patientageatfirstseen = 0;
            $patientageoffirstseen_md = 0;
            $cadmdfirstseen = 0;
            $cadmdfirstseenno = 0;
        }

        if ($cadmdfirstseenno == 'yes') {
            if (isset($request->cadnSmoking)) {
                $cadnSmoking = $request->cadnSmoking;
            } else {
                $cadnSmoking = 0;
            }
            if (isset($request->cadnHC)) {
                $cadnHC = $request->cadnHC;
            } else {
                $cadnHC = 0;
            }
            if (isset($request->cadnHT)) {
                $cadnHT = $request->cadnHT;
            } else {
                $cadnHT = 0;
            }
            if (isset($request->cadnDM)) {
                $cadnDM = $request->cadnDM;
            } else {
                $cadnDM = 0;
            }
            if (isset($request->cadnObesity)) {
                $cadnObesity = $request->cadnObesity;
            } else {
                $cadnObesity = 0;
            }
            if (isset($request->cadnFamilyhistoryhc)) {
                $cadnFamilyhistoryhc = $request->cadnFamilyhistoryhc;
            } else {
                $cadnFamilyhistoryhc = 0;
            }

            if (isset($request->cadnFamilyhistorypcad)) {
                $cadnFamilyhistorypcad = $request->cadnFamilyhistorypcad;
            } else {
                $cadnFamilyhistorypcad = 0;
            }
            if (isset($request->cadnLowHDLC)) {
                $cadnLowHDLC = $request->cadnLowHDLC;
            } else {
                $cadnLowHDLC = 0;
            }
            if (isset($request->cadnHighFastingTG)) {
                $cadnHighFastingTG = $request->cadnHighFastingTG;
            } else {
                $cadnHighFastingTG = 0;
            }

            if (isset($request->cadnPatientseenmdother)) {
                $cadnPatientseenmdother = $request->cadnPatientseenmdother;
            } else {
                $cadnPatientseenmdother = 0;
            }
        } else {
            $cadnSmoking = 0;
            $cadnHC = 0;
            $cadnHT = 0;
            $cadnDM = 0;
            $cadnObesity = 0;
            $cadnFamilyhistoryhc = 0;
            $cadnFamilyhistorypcad = 0;
            $cadnLowHDLC = 0;
            $cadnHighFastingTG = 0;
            $cadnPatientseenmdother = 0;
        }

        if ($premature_cerebral == 'yes') {
            $patientageoffirstseen_stroke = $request->patientageoffirstseen_stroke;
        } else {
            $patientageoffirstseen_stroke = 0;
        }

        if ($pvd == 'yes') {
            $patientageoffirstseen_pvd = $request->patientageoffirstseen_pvd;
        } else {
            $patientageoffirstseen_pvd = 0;
        }

        if (isset($request->corneal_arcus)) {
            $corneal_arcus = $request->corneal_arcus;
        } else {
            $corneal_arcus = '';
        }

    $statin_name = isset($request->statin_name) ? $request->statin_name : '';
        
    if($request->statin_name=='yes'){
        $baseline_therapy = 1;
    } else {
        $baseline_therapy = 0;
    }
    $baseline_therapy_specify = 0;
    $adjust_ldlclevel = $request->adjust_ldlclevel;
	if (isset($request->adjust_ldlclevel)) 
		$adjust_ldlclevel= $request->adjust_ldlclevel; 
	else
		$adjust_ldlclevel=0;

    if ($baseline_therapy == 1) {

        $adjust_ldlclevel = $request->adjust_ldlclevel;

        //if($patientpreldlclevel!=$adjust_ldlclevel)             // if pretreatment is available, use pretreatment, else use adjustldlc
          //  $adjust_ldlclevel = $patientpreldlclevel;
        //else
          //  $adjust_ldlclevel =$request->adjust_ldlclevel;

        if (isset($request->ldlcadjustment)) {
            $baseline_therapy_specify = explode("-", $request->ldlcadjustment)[1];
        }
    }
	
    if (isset($request->patientpretg)) $patientpretg= $request->patientpretg; //new
    if (isset($request->patientprehdlc)) $patientprehdlc= $request->patientprehdlc; //new
    if (isset($request->fasting)) 
		$fasting= $request->fasting; //new
	else
		$fasting="";
	

	if (isset($request->patientposttg)) $patientposttg= $request->patientposttg; //new
    if (isset($request->patientposthdlc)) $patientposthdlc= $request->patientposthdlc; //new
    if (isset($request->postfasting)) 
		$postfasting= $request->postfasting; //new
	else
		$postfasting="";

    // xanthomata
	// if either one of tendon_xanthomata items is yes, set the value for tendon_xanthomata = yes.
	//if (isset($request->tendon_xanthomata_elbows)) $tendon_xanthomata_elbows = $request->tendon_xanthomata_elbows; //new
	$tendon_xanthomata_elbows = isset($request->tendon_xanthomata_elbows) ? $request->tendon_xanthomata_elbows : '';
    //if (isset($request->tendon_xanthomata_heels)) $tendon_xanthomata_heels = $request->tendon_xanthomata_heels; //new
	$tendon_xanthomata_heels = isset($request->tendon_xanthomata_heels) ? $request->tendon_xanthomata_heels : '';
  // if (isset($request->tendon_xanthomata_fingers)) $tendon_xanthomata_fingers = $request->tendon_xanthomata_fingers; //new
	$tendon_xanthomata_fingers = isset($request->tendon_xanthomata_fingers) ? $request->tendon_xanthomata_fingers : '';
   // if (isset($request->tendon_xanthomata_knees)) $tendon_xanthomata_knees = $request->tendon_xanthomata_knees; //new
	$tendon_xanthomata_knees = isset($request->tendon_xanthomata_knees) ? $request->tendon_xanthomata_knees : '';
    //if (isset($request->tendon_xanthomata_palms)) $tendon_xanthomata_palms = $request->tendon_xanthomata_palms; //new
	$tendon_xanthomata_palms = isset($request->tendon_xanthomata_palms) ? $request->tendon_xanthomata_palms : '';
 
	if ($tendon_xanthomata_elbows=="yes" || $tendon_xanthomata_heels=="yes" || $tendon_xanthomata_fingers=="yes" || $tendon_xanthomata_knees=="yes" || $tendon_xanthomata_palms=="yes")
		$tendon_xanthomata = "yes";
	else
		$tendon_xanthomata = "no";
	
   /* if (isset($request->tendon_xanthomata)) 
		$tendon_xanthomata = $request->tendon_xanthomata;
	else 
		$tendon_xanthomata = 0;
    */
	//if (isset($request->achilles_tendon)) $achilles_tendon = $request->achilles_tendon;
   // if (isset($request->nodular_xanthoma)) $nodular_xanthoma = $request->nodular_xanthoma;
	$achilles_tendon = isset($request->achilles_tendon) ? $request->achilles_tendon : '';
	$nodular_xanthoma = isset($request->nodular_xanthoma) ? $request->nodular_xanthoma : '';


if(isset($request->genetic_mutation))
	$genetic_mutation= $request->genetic_mutation;
else
	$genetic_mutation= 0;

if(isset($request->reasons))
	$reasons= $request->reasons;
else
	$reasons=0;

    // genetic mutation
    
	if ($genetic_mutation=='yes') {
		if(isset($request->ldlr))
				$ldlr = $request->ldlr;
		else
				$ldlr ="";
		if(isset($request->apob))
				$apob = $request->apob;
		else
				$apob = "";	
		if(isset($request->pcsk9))
				$pcsk9 = $request->pcsk9;
		else
				$pcsk9 = "";	
		if(isset($request->other_fh_mutations))	
				$other_fh_mutations = $request->other_fh_mutations;
		else
				$other_fh_mutations = "";	
		if(isset($request->other_fh_mutations_detail))
				$other_fh_mutations_detail = $request->other_fh_mutations_detail;
		else
				$other_fh_mutations_detail = "";	
	    if(isset($request->dontknow_geneticmutation))
				$dontknow_geneticmutation = $request->dontknow_geneticmutation;
		else
				$dontknow_geneticmutation = "";	
		
		if(isset($request->notfoundmutation))
				$notfoundmutation = $request->notfoundmutation;
		else
				$notfoundmutation = "";
		
		
		$reasons = "unknown";
		$genetic_mutation_noreason_detail = "unknown";
    } else if ($genetic_mutation =='no') {
        $ldlr = "unknown";
	    $apob = "unknown";
	    $pcsk9 = "unknown";
	    $other_fh_mutations = "unknown";
		$other_fh_mutations_detail = "unknown";
		$dontknow_geneticmutation = "unknown";
		
		$notfoundmutation = "unknown" ;
		
		if(isset($request->reasons))
			$reasons= $request->reasons; 
		else
			$reasons = 0;
		if(isset($request->genetic_mutation_noreason_detail))
				$genetic_mutation_noreason_detail =$request->genetic_mutation_noreason_detail;
		else
			$genetic_mutation_noreason_detail = 0;
		        
    }else{
		$genetic_mutation = 0;
        $ldlr = "unknown";
	    $apob = "unknown";
        $pcsk9 = "unknown";
        $other_fh_mutations = "unknown";
		$other_fh_mutations_detail = "unknown";
		$dontknow_geneticmutation = "unknown";
		$notfoundmutation = "unknown" ;
		$reasons="unknown";
		$genetic_mutation_noreason_detail ="unknown";
	}

    // family information

    $first_degree = 0;
    $first_degree_age = '';
    $first_degree_tclvl = 0.0;
    $first_degree_ldlclvl = 0.0;
    $first_degree_hyperlipidaemia = '';
	$first_degree_hyperlipidaemiachild='';
    $first_degree_gender = 0;
    $first_degree_premature_cad ='';
	$first_degree_patientageatfirstseen =0;
	$first_degree_patientageoffirstseen_md =0;
    $first_degree_tendon_xanthomata ='';
    $first_degree_corneal_arcus = '';
    $first_degree_fh = "null";
	$first_degree_tc_level = '';
	$first_degree_tc_levelchild='';
	$fdcadmdfirstseen=0;
	$fdcadmdfirstseenno=0;
	$fdcadSmoking=0;
	$fdcadHC=0;
	$fdcadHT=0;
	$fdcadDM=0;
	$fdcadObesity=0;
	$fdcadFamilyhistoryhc=0;
	$fdcadPatientseenmdother=0;
	$fdncadSmoking=0;
	$fdncadHC=0;
	$fdncadHT=0;
	$fdncadDM=0;
	$fdncadObesity=0;
	$fdncadFamilyhistoryhc=0;
	$fdncadPatientseenmdother=0;
	$first_degree = isset($request->first_degree) ? $request->first_degree : '';


    if ($first_degree==1) {
       // $first_degree = $request->first_degree;
        $first_degree_age = $request->first_degree_age;
		
        //$first_degree_hyperlipidaemia = $request->first_degree_hyperlipidaemia;
		$first_degree_hyperlipidaemia = isset($request->first_degree_hyperlipidaemia) ? $request->first_degree_hyperlipidaemia : '';
		
        if ($first_degree_hyperlipidaemia == 'yes') {
            $first_degree_tclvl = 7.5;
            $first_degree_ldlclvl = 4.9;
        }
    //  $first_degree_gender = $request->first_degree_gender;
        //$first_degree_premature_cad = $request->first_degree_premature_cad;
		$first_degree_premature_cad = isset($request->first_degree_premature_cad) ? $request->first_degree_premature_cad : '';
		
	//	$first_degree_patientageatfirstseen = $request->fdpatientageatfirstseen;
	    if (isset($request->fdpatientageatfirstseen)) 
			$first_degree_patientageatfirstseen = $request->fdpatientageatfirstseen;
		else
			$first_degree_patientageatfirstseen =0;
		
		//$first_degree_age = $first_degree_patientageatfirstseen;
		
		if (isset($request->first_degree_gender)) 
			$first_degree_gender=$request->first_degree_gender;
		else
			$first_degree_gender=0;
		
		if (isset($request->fdcadmdfirstseen)) 
			$fdcadmdfirstseen=$request->fdcadmdfirstseen;
			
		if (isset($request->fdcadmdfirstseenno)) 
			$fdcadmdfirstseenno=$request->fdcadmdfirstseenno;
		
		if (isset($request->fdpatientageoffirstseen_mdn)) 
			$first_degree_patientageoffirstseen_mdn= $request->fdpatientageoffirstseen_mdn;
		else
			$first_degree_patientageoffirstseen_mdn=0;
	
		if ($first_degree_premature_cad=='yes'){
			$first_degree_premature_cad = $request->first_degree_premature_cad;
		
		if ($fdcadmdfirstseen=='yes'){
			if (isset($request->fdcadSmoking)) 
				$fdcadSmoking=$request->fdcadSmoking;
			if (isset($request->fdcadHC))
				$fdcadHC=$request->fdcadHC;
			if (isset($request->fdcadHT))
				$fdcadHT=$request->fdcadHT;
			if (isset($request->fdcadDM))
			    $fdcadDM=$request->fdcadDM;
			if (isset($request->fdcadObesity))
				 $fdcadObesity=$request->fdcadObesity;
			if (isset($request->fdcadFamilyhistoryhc))
			     $fdcadFamilyhistoryhc=$request->fdcadFamilyhistoryhc;
			 if (isset($request->fdcadPatientseenmdother))
			     $fdcadPatientseenmdother=$request->fdcadPatientseenmdother;	 
		 }else{
			 $fdcadSmoking=0;
			 $fdcadHC=0;
			 $fdcadHT=0;
			 $fdcadDM=0;
			 $fdcadObesity=0;
			 $fdcadFamilyhistoryhc=0;
			 $fdcadPatientseenmdother=0;
			 
		 }
		}else if($first_degree_premature_cad=='no'){
			$first_degree_patientageoffirstseen_md = $first_degree_patientageoffirstseen_mdn;
			
			if ($fdcadmdfirstseenno=='yes'){
				
			if (isset($request->fdncadSmoking))
			    $fdncadSmoking=$request->fdncadSmoking;
			if (isset($request->fdncadHC))
			   $fdncadHC=$request->fdncadHC;
			if (isset($request->fdncadHT))
			   $fdncadHT=$request->fdncadHT;
			 if (isset($request->fdncadDM))
			 $fdncadDM=$request->fdncadDM;
			 if (isset($request->fdncadObesity))
			 $fdncadObesity=$request->fdncadObesity;
			 if (isset($request->fdncadFamilyhistoryhc))
			 $fdncadFamilyhistoryhc=$request->fdncadFamilyhistoryhc;
			 if (isset($request->fdncadPatientseenmdother))
			 $fdncadPatientseenmdother=$request->fdncadPatientseenmdother;	 
		 }else{
			 $fdncadSmoking=0;
			 $fdncadHC=0;
			 $fdncadHT=0;
			 $fdncadDM=0;
			 $fdncadObesity=0;
			 $fdncadFamilyhistoryhc=0;
			 $fdncadPatientseenmdother=0;
		}
	}else{
			$first_degree_patientageoffirstseen_md = 0;
	}
  	
		$first_degree_tc_levelchild=$request->first_degree_tc_levelchild;
		$first_degree_corneal_arcus = isset($request->first_degree_corneal_arcus) ? $request->first_degree_corneal_arcus : '';
		$first_degree_tendon_xanthomata = isset($request->first_degree_tendon_xanthomata) ? $request->first_degree_tendon_xanthomata : '';
		$first_degree_fh = isset($request->first_degree_fh) ? $request->first_degree_fh : '';
		$first_degree_tc_level = isset($request->first_degree_tc_level) ? $request->first_degree_tc_level : '';
		$first_degree_hyperlipidaemiachild = isset($request->first_degree_hyperlipidaemiachild) ? $request->first_degree_hyperlipidaemiachild : '';
    }

    $second_degree = 0;
    $second_degree_age ='';
    $second_degree_tclvl = 0.0;
    $second_degree_gender = 0;
    $second_degree_hyperlipidaemia = '';
    $second_degree_premature_cad = '';
	$second_degree_patientageatfirstseen=0;
	$second_degree_patientageoffirstseen_md=0;
    $second_degree_tendon_xanthomata = '';
    $second_degree_fh = "null";
	$second_degree_tc_level = '';
	$second_degree_tc_levelchild = '';
	$sdcadSmoking=0;
	$sdcadHC=0;
	$sdcadHT=0;
	$sdcadDM=0;
	$sdcadObesity=0;
	$sdcadFamilyhistoryhc=0;
	$sdcadPatientseenmdother=0;
	$sdncadSmoking=0;
	$sdncadHC=0;
	$sdncadHT=0;
	$sdncadDM=0;
	$sdncadObesity=0;
	$sdncadFamilyhistoryhc=0;
	$sdncadPatientseenmdother=0;
	$second_degree_cadmdfirstseen= 0;
	$second_degree_cadmdfirstseenno=0;


	
	$second_degree_premature_cad = isset($request->second_degree_premature_cad) ? $request->second_degree_premature_cad : '';
	
	if (isset($request->sdcadmdfirstseen)) {		
		$second_degree_cadmdfirstseen= $request->sdcadmdfirstseen;
	}else
	$second_degree_cadmdfirstseen=0;
	
	if (isset($request->sdcadmdfirstseenno)) {		
		$second_degree_cadmdfirstseenno= $request->sdcadmdfirstseenno;
	}
	else
		$second_degree_cadmdfirstseenno=0;
	
	$second_degree = isset($request->second_degree) ? $request->second_degree : '';
	
    if ($second_degree==1) {
       // $second_degree = $request->second_degree;
	   $second_degree_age = isset($request->second_degree_age) ? $request->second_degree_age : '';
       $second_degree_hyperlipidaemia = isset($request->second_degree_hyperlipidaemia) ? $request->second_degree_hyperlipidaemia : '';
      
       
        if ($second_degree_hyperlipidaemia == 'yes') {
            $second_degree_tclvl = 7.5;
			
        }
        $second_degree_gender = $request->second_degree_gender;
        //$second_degree_premature_cad = $request->second_degree_premature_cad;
		$second_degree_patientageatfirstseen=$request->sdpatientageatfirstseen;
		//$second_degree_cadmdfirstseen= $request->sdcadmdfirstseen;
		//$second_degree_cadmdfirstseenno= $request->sdcadmdfirstseenno;
				
		if (isset($request->sdpatientageoffirstseen_mdn)) 
			$second_degree_patientageoffirstseen_mdn= $request->sdpatientageoffirstseen_mdn;
		else
			$second_degree_patientageoffirstseen_mdn=0;
		
		if ($second_degree_premature_cad=='yes'){
			
			$second_degree_patientageoffirstseen_md = $request->sdpatientageoffirstseen_md;
			
			if ($second_degree_cadmdfirstseen=='yes'){
				if (isset($request->sdcadSmoking)) 
				$sdcadSmoking=$request->sdcadSmoking;
			if (isset($request->sdcadHC))
				$sdcadHC=$request->sdcadHC;
			if (isset($request->sdcadHT))
				$sdcadHT=$request->sdcadHT;
			if (isset($request->sdcadDM))
			    $sdcadDM=$request->sdcadDM;
			if (isset($request->sdcadObesity))
				 $sdcadObesity=$request->sdcadObesity;
			if (isset($request->sdcadFamilyhistoryhc))
			     $sdcadFamilyhistoryhc=$request->sdcadFamilyhistoryhc;
			 if (isset($request->sdcadPatientseenmdother))
			     $sdcadPatientseenmdother=$request->sdcadPatientseenmdother;	
				
				
			  
		 }else{
			 $sdcadSmoking=0;
			 $sdcadHC=0;
			 $sdcadHT=0;
			 $sdcadDM=0;
			 $sdcadObesity=0;
			 $sdcadFamilyhistoryhc=0;
			 $sdcadPatientseenmdother=0;
		}
			
		} else if($second_degree_premature_cad=='no'){
			
			$second_degree_patientageoffirstseen_mdn = $second_degree_patientageoffirstseen_mdn;
			
			if ($second_degree_cadmdfirstseenno=='yes'){
				if (isset($request->sdncadSmoking))
			    $sdncadSmoking=$request->sdncadSmoking;
			if (isset($request->sdncadHC))
			   $sdncadHC=$request->sdncadHC;
			if (isset($request->sdncadHT))
			   $sdncadHT=$request->sdncadHT;
			 if (isset($request->sdncadDM))
			 $sdncadDM=$request->sdncadDM;
			 if (isset($request->sdncadObesity))
			 $sdncadObesity=$request->sdncadObesity;
			 if (isset($request->sdncadFamilyhistoryhc))
			 $sdncadFamilyhistoryhc=$request->sdncadFamilyhistoryhc;
			 if (isset($request->sdncadPatientseenmdother))
			 $sdncadPatientseenmdother=$request->sdncadPatientseenmdother;	
				
				
			 }else{
			 $sdncadSmoking=0;
			 $sdncadHC=0;
			 $sdncadHT=0;
			 $sdncadDM=0;
			 $sdncadObesity=0;
			 $sdncadFamilyhistoryhc=0;
			 $sdncadPatientseenmdother=0;
		}
		}else{
			
			$second_degree_patientageoffirstseen_md = 0;
		}
		
		
        $second_degree_tendon_xanthomata = $request->second_degree_tendon_xanthomata;
        $second_degree_fh = $request->second_degree_fh;
		if (isset($request->second_degree_tc_level))
			$second_degree_tc_level= $request->second_degree_tc_level;
		//$second_degree_tclvl = $request->second_degree_tc_level;
    }
	
	if (isset($request->second_degree_tc_levelchild))
			$second_degree_tc_levelchild= $request->second_degree_tc_levelchild;
	

    $third_degree = 0;
    $third_degree_fh = "null";
    if (isset($request->third_degree)) {
        $third_degree = $request->third_degree;
		 if (isset($request->third_degree_fh))
			 $third_degree_fh = $request->third_degree_fh;
    }


    $registerdate = date("Y-m-d");
    $patientdata = [
        `adminid`=>$adminid, 
        `patientname`=>$patientname,
        `patientgender`=>$patientgender,
        `patientrace`=>$patientrace, 
        `patientnric`=>$patientnric, 
        `patientcontact`=>$patientcontact, 
        `patientaddress`=>$patientaddress, 
        `pregnancy`=>$pregnancy,
        `hypothyroidism`=>$hypothyroidism,
        `nephroticsyndrome`=>$nephroticsyndrome,
        `obstructive_liverdisease`=> $obstructive_liverdisease,
        `medications`=>$medications,
        `hypogonadism`=>$hypogonadism,
        `patientyearoffirstseen`=>$patientyearoffirstseen,
        `registerdate`=>$registerdate, 
        `premature_cad`=>$premature_cad,
        `ageCAD`=> $patientageatfirstseen,
        `agefirstseenMD`=> $patientageoffirstseen_md,
        `cadSmoking`=>$cadSmoking,
        `cadHC`=>$cadHC, 
        `cadHT`=>$cadHT, 
        `cadDM`=>$cadDM, 
        `cadObesity`=>$cadObesity,
        `lpa`=>$lpa,
        `lpav`=>$lpav,
        `systolic`=>$systolic,
        `dystolic`=>$dystolic,
        `DMp`=>$DMp,
        `cadHTT`=>$cadHTT, 
        `DMtod`=>$DMtod, 
        `averageStick`=>$averageStick,
        `activeSmokingM`=>$activeSmokingM,
        `activeSmokingY`=>$activeSmokingY,
        `cadSmokingNo`=>$cadSmokingNo,
        `patientheight`=>$patientheight,
        `patientweight`=>$patientweight,
        `patientwaist`=>$patientwaist,
        `cadnObesity`=>$cadnObesity,
        `cadnFamilyhistoryhc`=>$cadnFamilyhistoryhc,
        `cadnFamilyhistorypcad`=>$cadnFamilyhistorypcad,
        `cadnLowHDLC`=>$cadnLowHDLC,
        `cadnHighFastingTG`=>$cadnHighFastingTG,
        `cadnPatientseenmdother`=>$cadnPatientseenmdother,
        `premature_cerebral`=>$premature_cerebral,
        `ageStroke`=>$patientageoffirstseen_stroke,
        `pvd`=>$pvd,
        `agePVD`=>$patientageoffirstseen_pvd,
        `corneal_arcus`=>$corneal_arcus,
        `patienttclevel`=>$patienttclevel,
        `patientldlclevel`=>$patientldlclevel,
        `patientpreldlclevel`=>$patientpreldlclevel,
        `patientpretclevel`=>$patientpretclevel,
        `patientpretg`=>$patientpretg,
        `patientprehdlc`=>$patientprehdlc,
        `fasting`=>$fasting,
        `patientposttg`=>$patientposttg,
        `patientposthdlc`=>$patientposthdlc,
        `postfasting`=>$postfasting,
        `baseline_therapy`=>$baseline_therapy,
        `baseline_therapy_specify`=>$baseline_therapy_specify,
        `tendon_xanthomata`=>$tendon_xanthomata,
        `tendon_xanthomata_elbows`=>$tendon_xanthomata_elbows,
        `tendon_xanthomata_heels`=>$tendon_xanthomata_heels,
        `tendon_xanthomata_fingers`=>$tendon_xanthomata_fingers,
        `tendon_xanthomata_knees`=>$tendon_xanthomata_knees,
        `tendon_xanthomata_palms`=>$tendon_xanthomata_palms,
        `achilles_tendon`=>$achilles_tendon,
        `nodular_xanthoma`=>$nodular_xanthoma,
        `genetic_mutation`=>$genetic_mutation,
        `ldlr`=>$ldlr,
        `apob`=>$apob,
        `pcsk9`=>$pcsk9,
        `other_fh_mutations`=>$other_fh_mutations,
        `other_fh_mutations_detail`=>$other_fh_mutations_detail,
        `dontknow_geneticmutation`=>$dontknow_geneticmutation,
        `reasons`=>$reasons,
        `notfoundmutation`=>$notfoundmutation,
        `genetic_mutation_noreason_detail`=>$genetic_mutation_noreason_detail,
        `first_degree`=>$first_degree,
        `first_degree_gender`=>$first_degree_gender,
        `first_degree_age`=>$first_degree_age,
        `first_degree_tclvl`=>$first_degree_tclvl,
        `first_degree_ldlclvl`=>$first_degree_ldlclvl,
        `first_degree_hyperlipidaemia`=>$first_degree_hyperlipidaemia,
        `first_degree_tc_level`=>$first_degree_tc_level,
        `first_degree_hyperlipidaemiachild`=>$first_degree_hyperlipidaemiachild,
        `first_degree_tc_levelchild`=>$first_degree_tc_levelchild,
        `first_degree_premature_cad`=>$first_degree_premature_cad,
        `fdpatientageoffirstseen_md`=>$first_degree_patientageoffirstseen_md,
        `fdpatientageatfirstseen`=>$first_degree_patientageatfirstseen,
        `fdcadmdfirstseen`=>$fdcadmdfirstseen,
        `fdcadSmoking`=>$fdcadSmoking,
        `fdcadHC`=>$fdcadHC,
        `fdcadHT`=>$fdcadHT,
        `fdcadDM`=>$fdcadDM,
        `fdcadObesity`=>$fdcadObesity,
        `fdcadFamilyhistoryhc`=>$fdcadFamilyhistoryhc,
        `fdcadPatientseenmdother`=>$fdcadPatientseenmdother,
        `fdcadmdfirstseenno`=>$fdcadmdfirstseenno,
        `fdncadSmoking`=>$fdncadSmoking,
        `fdncadHT`=>$fdncadHT,
        `fdncadHC`=>$fdncadHC,
        `fdncadDM`=>$fdncadDM,
        `fdncadObesity`=>$fdncadObesity,
        `fdncadFamilyhistoryhc`=>$fdncadFamilyhistoryhc,
        `fdncadPatientseenmdother`=>$fdncadPatientseenmdother,
        `first_degree_tendon_xanthomata`=>$first_degree_tendon_xanthomata,
        `first_degree_corneal_arcus`=>$first_degree_corneal_arcus,
        `first_degree_fh`=>$first_degree_fh,
        `second_degree`=>$second_degree,
        `second_degree_gender`=>$second_degree_gender,
        `second_degree_age`=>$second_degree_age,
        `second_degree_tclvl`=>$second_degree_tclvl,
        `second_degree_hyperlipidaemia`=>$second_degree_hyperlipidaemia,
        `second_degree_tc_level`=>$second_degree_tc_level,
        `second_degree_tc_levelchild`=>$second_degree_tc_levelchild,
        `second_degree_premature_cad`=>$second_degree_premature_cad,
        `sdpatientageoffirstseen_md`=>$second_degree_patientageoffirstseen_md,
        `sdpatientageatfirstseen`=>$second_degree_cadmdfirstseen,
        `second_degree_cadmdfirstseen`=>$second_degree_cadmdfirstseen,
        `sdcadSmoking`=>$sdcadSmoking,
        `sdcadHC`=>$sdcadHC,
        `sdcadHT`=>$sdcadHT,
        `sdcadDM`=>$sdcadDM,
        `sdcadObesity`=>$sdcadObesity,
        `sdcadFamilyhistoryhc` =>$sdcadFamilyhistoryhc,
        `sdcadPatientseenmdother`=>$sdcadPatientseenmdother,
        `second_degree_cadmdfirstseenno`=>$second_degree_cadmdfirstseenno,
        `sdncadSmoking`=>$sdncadSmoking,
        `sdncadHC`=>$sdncadHC,
        `sdncadHT`=>$sdncadHT,
        `sdncadDM`=>$sdncadDM,
        `sdncadObesity`=>$sdncadObesity, 
        `sdncadFamilyhistoryhc`=>$sdncadFamilyhistoryhc,
        `sdncadPatientseenmdother`=>$sdncadPatientseenmdother,
        `second_degree_tendon_xanthomata`=>$second_degree_tendon_xanthomata,
        `second_degree_fh`=>$second_degree_fh,
        `third_degree`=>$third_degree,
        `third_degree_fh`=>$third_degree_fh,
    ];
	
  
    $patientid = 0;


	

    // first question
    $first_question_dlcc = 0; 
    if ($first_degree_premature_cad == "yes") {
        if($first_degree_gender == 1 && $first_degree_age < 55) {
            $first_question_dlcc = max($first_question_dlcc, 1);
        }
        else if ($first_degree_gender == 2 && $first_degree_age < 60) {
            $first_question_dlcc = max($first_question_dlcc, 1);   
        }
    }

	//first_degree_hyperlipidaemia = yes
	if ($first_degree_hyperlipidaemia =="yes") {
        $first_question_dlcc = max($first_question_dlcc, 1);
    }
	
	if ($first_degree_hyperlipidaemiachild =="yes") {
       $first_question_dlcc = max($first_question_dlcc, 2);
    }
	
	
	
    /*if ($first_degree_age >= 18 && $first_degree_ldlclvl > 4.9) {
        $first_question_dlcc = max($first_question_dlcc, 1);
    }
    else if ($first_degree_age < 18 && $first_degree_age!=0 && $first_degree_ldlclvl > 4.0) {
        $first_question_dlcc = max($first_question_dlcc, 2);
    }*/

    if ($first_degree_tendon_xanthomata == "yes") {
         $first_question_dlcc = max($first_question_dlcc, 2);
    }
    if ($first_degree_corneal_arcus == "yes") {
         $first_question_dlcc = max($first_question_dlcc, 2);
    }


    // second question
    $second_question_dlcc = 0;
    if ($patientageatfirstseen < 55 && $patientgender == 1) {
        if ($premature_cad == "yes") {
            $second_question_dlcc = max($second_question_dlcc, 2);       
        }
	}
	if (($patientageoffirstseen_stroke < 55 && $patientgender == 1) || ($patientageoffirstseen_pvd < 55 && $patientgender == 1)) {
        if ($premature_cerebral == "yes") {
            $second_question_dlcc = max($second_question_dlcc, 1);
        }
		
		 if ($pvd == "yes") {
            $second_question_dlcc = max($second_question_dlcc, 1);
        }
	}
	
	  if ($patientageatfirstseen < 60 && $patientgender == 2) {
        if ($premature_cad == "yes") {
            $second_question_dlcc = max($second_question_dlcc, 2);       
        }
	}
	if (($patientageoffirstseen_stroke < 60 && $patientgender == 2) || ($patientageoffirstseen_pvd < 60 && $patientgender == 2)) {
        if ($premature_cerebral == "yes") {
            $second_question_dlcc = max($second_question_dlcc, 1);
        }
		
		 if ($pvd == "yes") {
            $second_question_dlcc = max($second_question_dlcc, 1);
        }
	}
	
	
	

    // third question
    $third_question_dlcc = 0;
    if ($tendon_xanthomata == "yes" || $achilles_tendon == "yes" || $nodular_xanthoma == "yes") {
        $third_question_dlcc = max($third_question_dlcc, 6);
    }
    if ($corneal_arcus=='yes') {
        $third_question_dlcc = max($third_question_dlcc, 4);
		
    }
		
	
    // fourth question
    $fourth_question_dlcc = 0;
	
   // if ($patientldlclevel > 0) {
         if  (($baseline_therapy == 1)&&($patientldlclevel > 0) && ($patientpreldlclevel<=0)){
            if ($adjust_ldlclevel >= 8.5) {
                $fourth_question_dlcc = 8;
            }
            else if($adjust_ldlclevel >= 6.5 && $adjust_ldlclevel <= 8.4) {
                $fourth_question_dlcc = 5;
            }
            else if($adjust_ldlclevel >= 5.0 && $adjust_ldlclevel <= 6.4) {
                $fourth_question_dlcc = 3;
            }
            else if($adjust_ldlclevel >= 4.0 && $adjust_ldlclevel <= 4.9) {
                $fourth_question_dlcc = 1;
            }
            else if($adjust_ldlclevel < 4.0) {
                $fourth_question_dlcc = 0;
            }
        } else {
            if ($patientpreldlclevel >= 8.5) {
                $fourth_question_dlcc = 8;
            }
            else if($patientpreldlclevel >= 6.5 && $patientpreldlclevel <= 8.4) {
                $fourth_question_dlcc = 5;
            }
            else if($patientpreldlclevel >= 5.0 && $patientpreldlclevel <= 6.4) {
                $fourth_question_dlcc = 3;
            }
            else if($patientpreldlclevel >= 4.0 && $patientpreldlclevel <= 4.9) {
                $fourth_question_dlcc = 1;
            }
            else if($patientpreldlclevel < 4.0) {
                $fourth_question_dlcc = 0;
            }
        }
   // }

    // fifth question
    $fifth_question_dlcc = 0;
    if ($ldlr == "yes" || $apob == "yes" || $pcsk9 == "yes" || $other_fh_mutations == "yes") {
        $fifth_question_dlcc = 8;
    }

    $total_dlcc = $first_question_dlcc + $second_question_dlcc + $third_question_dlcc + $fourth_question_dlcc + $fifth_question_dlcc;

    // bug
    //if (($patientldlclevel == 0)&& ($patientpreldlclevel==0)) {
      //  $result_dlcc = "INVALID"; 
    //}
    // bug
    //else {
        if ($total_dlcc <= 2) {
            $result_dlcc = "UNLIKELY";
        }
        else if ($total_dlcc >= 3 && $total_dlcc <= 5) {
            $result_dlcc = "POSSIBLE";
        }
        else if ($total_dlcc >= 6 && $total_dlcc <= 8) {
            $result_dlcc = "PROBABLE";
        }
        else if ($total_dlcc > 8) {
            $result_dlcc = "DEFINITE";
        }    
    //}
    
    // sb question

    // first question
    $first_question_sb = 0;
if($baseline_therapy==1){
    if ($patientage >= 16) {
        if ($patienttclevel > 7.5) {
            $first_question_sb = 1;
        }
        if ($patientldlclevel > 4.9) {
            $first_question_sb = 1;
        }
        //if (($patienttclevel > 7.5) || ($patientldlclevel > 4.9))
        //$first_question_sb = 1;

    }
	} else {
        if ($patientpretclevel > 6.7) {
            $first_question_sb = 1;
        }
        if ($patientpreldlclevel > 4.0) {
            $first_question_sb = 1;
        }
        //if (($patienttclevel > 6.7) || ($patientldlclevel > 4.0))
        //$first_question_sb = 1;

    }

    // second question
    $second_question_sb = 0;
    if (($tendon_xanthomata == "yes")||($achilles_tendon == "yes")|| ($nodular_xanthoma == "yes") || ($first_degree_tendon_xanthomata == "yes")|| ($second_degree_tendon_xanthomata == "yes"))
        $second_question_sb = 1;

   // if (($tendon_xanthomata == "yes") || ($achilles_tendon == "yes") || ($nodular_xanthoma == "yes") || ($first_degree_tendon_xanthomata == "yes") || ($second_degree_tendon_xanthomata == "yes")) {
      //  $second_question_sb = 1;
   // }

    // third question
    $third_question_sb = 0;
    if ($ldlr == "yes" || $apob == "yes" || $pcsk9 == "yes") {
        $third_question_sb = 1;
    }

    // fourth question
    $fourth_question_sb = 0;
    if($first_degree_age < 60) {
        if($first_degree_premature_cad == "yes") {
            $fourth_question_sb = 1;
        }
    }

    if($second_degree_age < 50) {
        if($second_degree_premature_cad == "yes") {
            echo $second_degree_age."s".$fourth_question_sb = 1;
        }
    }


    // fifth question
    $fifth_question_sb = 0;
	if ($first_degree_tc_level =="yes") {
            $fifth_question_sb = 1;
        }
	
	if ($first_degree_tc_levelchild =="yes") {
            $fifth_question_sb = 1;
        }
	
	if ($second_degree_tc_level =="yes") {
            $fifth_question_sb = 1;
        }
	
	if ($second_degree_tc_levelchild =="yes") {
            $fifth_question_sb = 1;
        }
	
    /*if ($first_degree_age >= 16) {
        if ($first_degree_tc_level >7.5) {
            $fifth_question_sb = 1;
        }
    }
    else {
        if($first_degree_tclvl > 6.7) {
            $fifth_question_sb = 1;
        }
    }*/

    if ($second_degree_age >= 16) {
        if ($second_degree_tclvl > 7.5) {
            $fifth_question_sb = 1;
        }
    }else {
        if($second_degree_tclvl > 6.7) {
            $fifth_question_sb = 1;
        }
    }


    /*if ($first_question_sb == 1 && $second_question_sb == 1) {
        $result_sb = "DEFINITE";
    }
    else if ($first_question_sb == 1 && $third_question_sb == 1) {
        $result_sb = "DEFINITE";
    }
    else if ($first_question_sb == 1 && $fourth_question_sb == 1) {
        $result_sb = "POSSIBLE";
    }
    else if ($first_question_sb == 1 && $fifth_question_sb == 1) {
        $result_sb = "POSSIBLE";
    }
    else {
        $result_sb = "UNLIKELY";
    }
    */

    if (($first_question_sb == 1 && $second_question_sb == 1) || ($first_question_sb == 1 && $third_question_sb == 1)) {
        $result_sb = "DEFINITE";
    }
    else if (($first_question_sb == 1 && $fourth_question_sb == 1)||($first_question_sb == 1 && $fifth_question_sb == 1)) {

        $result_sb = "POSSIBLE";
    }
    else {
        $result_sb = "UNLIKELY";
}


    // jfhmc question

    if ($patientage >= 15) {

        // first question
        $first_question_jfhmc = 0;
		if ($baseline_therapy==1){
			if ($patientldlclevel >= 4.7) {
				$first_question_jfhmc = 1;
			}    
        }else {
			if ($patientpreldlclevel >= 4.7) {
				$first_question_jfhmc = 1;
			
		   }
		}
        // second question
        $second_question_jfhmc = 0;
        if ($tendon_xanthomata == "yes" || $achilles_tendon == "yes" || $nodular_xanthoma == "yes") {
            $second_question_jfhmc = 1;
        }
        
        // third question
        $third_question_jfhmc = 0;
        if ($first_degree_fh == "yes") {
            $third_question_jfhmc = 1;
        }

        if ($first_degree_age < 55 && $first_degree_gender == 1 && $first_degree_premature_cad == "yes") {
            $third_question_jfhmc = 1;
        }
        else if ($first_degree_age < 60 && $first_degree_gender == 2 && $first_degree_premature_cad == "yes") {
            $third_question_jfhmc = 1;
        }

        if ($second_degree_fh == "yes") {
            $third_question_jfhmc = 1;
        }

        if ($second_degree_age < 55 && $second_degree_gender == 1 && $second_degree_premature_cad == "yes") {
            $third_question_jfhmc = 1;
        }
        else if ($second_degree_age < 60 && $second_degree_gender == 2 && $second_degree_premature_cad == "yes") {
            $third_question_jfhmc = 1;
        }    

        //total
        $total_jfhmc = $first_question_jfhmc + $second_question_jfhmc + $third_question_jfhmc;

        if ($total_jfhmc >= 2) {
            $result_jfhmc = 'YES';
        } else if ($total_jfhmc == 1) {
            if ($first_question_jfhmc == 1) {
                $result_jfhmc = 'SUSPECTED';
            }
            else if ($second_question_jfhmc == 1) {
                $result_jfhmc = 'NO';
            }
            else if ($third_question_jfhmc == 1) {
                if ($patientldlclevel >= 3.6) {
                    $result_jfhmc = 'SUSPECTED';
                }
                else {
                    $result_jfhmc = 'NO';   
                }
            }
        } else {
            $result_jfhmc = 'NO';
        }
    }
    else {
        $total_jfhmc = 0;
        $first_question_jfhmc = 0; 
        $second_question_jfhmc = 0; 
        $third_question_jfhmc = 0;
        $result_jfhmc = 'NO';
    }

    // us medped
	//echo $first_degree_fh."first_degree_fh";
	//echo $second_degree_fh."second_degree_fh";
	//echo $third_degree_fh."third_degree_fh";
	
if($baseline_therapy==1) {
	
	if($patientpretclevel >0 && $patienttclevel>0) 
		$patienttclevel = $patientpretclevel;
	else if($patientpretclevel>0 && $patienttclevel==0)
		$patienttclevel = $patientpretclevel;
	else 
		$patienttclevel = $patienttclevel;
	
	
	
	
    if ($patientage > 0 && $patienttclevel > 0) {
        if ($first_degree_fh == "yes") {
            if ($patientage < 20 && $patienttclevel > 5.7) {
                $result_us = 'YES';
            }
            else if ($patientage >= 20 && $patientage <= 29 && $patienttclevel > 6.2) {
                $result_us = 'YES';
            } 
            else if ($patientage >= 30 && $patientage <= 39 && $patienttclevel > 7.0) {
                $result_us = 'YES';
            } 
            else if ($patientage >= 40 && $patienttclevel > 7.5) {
                $result_us = 'YES';
            }
            else {
                $result_us = 'NO';
            }
        } else if ($second_degree_fh == "yes") {
            if ($patientage < 20 && $patienttclevel > 5.9) {
                $result_us = 'YES';
            }
            else if ($patientage >= 20 && $patientage <= 29 && $patienttclevel > 6.5) {
                $result_us = 'YES';
            } 
            else if ($patientage >= 30 && $patientage <= 39 && $patienttclevel > 7.2) {
                $result_us = 'YES';
            } 
            else if ($patientage >= 40 && $patienttclevel > 7.8) {
                $result_us = 'YES';
            }
            else {
                $result_us = 'NO';
            }
        } else if ($third_degree_fh == "yes") {
            if ($patientage < 20 && $patienttclevel > 6.2) {
                $result_us = 'YES';
            }
            else if ($patientage >= 20 && $patientage <= 29 && $patienttclevel > 6.7) {
                $result_us = 'YES';
            } 
            else if ($patientage >= 30 && $patientage <= 39 && $patienttclevel > 7.5) {
                $result_us = 'YES';
            } 
            else if ($patientage >= 40 && $patienttclevel > 8.0) {
                $result_us = 'YES';
            }
            else {
                $result_us = 'NO';
            }
        } else {
            if ($patientage < 20 && $patienttclevel > 7.0) {
                $result_us = 'YES';
            }
            else if ($patientage >= 20 && $patientage <= 29 && $patienttclevel > 7.5) {
                $result_us = 'YES';
            } 
            else if ($patientage >= 30 && $patientage <= 39 && $patienttclevel > 8.8) {
                $result_us = 'YES';
            } 
            else if ($patientage >= 40 && $patienttclevel > 9.3) {
                $result_us = 'YES';
            }
            else {
                $result_us = 'NO';
            }
        }
    }
} else {
	if ($patientage > 0 && $patientpretclevel > 0) {
		
        if ($first_degree_fh == "yes") {
			
            if ($patientage < 20 && $patientpretclevel > 5.7) {
                $result_us = 'YES';
            }
            else if ($patientage >= 20 && $patientage <= 29 && $patientpretclevel > 6.2) {
                $result_us = 'YES';
            } 
            else if ($patientage >= 30 && $patientage <= 39 && $patientpretclevel > 7.0) {
                $result_us = 'YES';
            } 
            else if ($patientage >= 40 && $patientpretclevel > 7.5) {
                $result_us = 'YES';
            }
            else {
                $result_us = 'NO';
				
				
            }
        }
        else if ($second_degree_fh == "yes") {
            if ($patientage < 20 && $patientpretclevel > 5.9) {
                $result_us = 'YES';
            }
            else if ($patientage >= 20 && $patientage <= 29 && $patientpretclevel > 6.5) {
                $result_us = 'YES';
            } 
            else if ($patientage >= 30 && $patientage <= 39 && $patientpretclevel > 7.2) {
                $result_us = 'YES';
            } 
            else if ($patientage >= 40 && $patientpretclevel > 7.8) {
                $result_us = 'YES';
            }
            else {
                $result_us = 'NO';
            }
        } 
        else if ($third_degree_fh == "yes") {
            if ($patientage < 20 && $patientpretclevel > 6.2) {
                $result_us = 'YES';
            }
            else if ($patientage >= 20 && $patientage <= 29 && $patientpretclevel > 6.7) {
                $result_us = 'YES';
            } 
            else if ($patientage >= 30 && $patientage <= 39 && $patientpretclevel > 7.5) {
                $result_us = 'YES';
            } 
            else if ($patientage >= 40 && $patientpretclevel > 8.0) {
                $result_us = 'YES';
            }
            else {
                $result_us = 'NO';
            }
        }
        else {
            if ($patientage < 20 && $patientpretclevel > 7.0) {
                $result_us = 'YES';
            }
            else if ($patientage >= 20 && $patientage <= 29 && $patientpretclevel > 7.5) {
                $result_us = 'YES';
            } 
            else if ($patientage >= 30 && $patientage <= 39 && $patientpretclevel > 8.8) {
                $result_us = 'YES';
            } 
            else if ($patientage >= 40 && $patientpretclevel > 9.3) {
                $result_us = 'YES';
            }
            else {
                $result_us = 'NO';
            }
        }
    } else {
		
		//$result_us = 'INVALID';// TC level is 0.
		$result_us = 'NO';// TC level is 0.
	}
		
      
    }
	
	//count obesity
	
	$patientHmeter= $patientheight *0.01;
	$countBMI = ($patientweight / ($patientHmeter* $patientHmeter));
	
	
	//FH -count number of risk
	if($cadDM=='yes' || $cadSmoking=='yes' || $cadHT=='yes')
		$numOfFHRisk=1;
	else
		$numOfFHRisk=0;
	
	
	
	
	
	
	// if Confirm FH (DLCC Definite, probable, possible) AND (Diabetes yes OR hypertension yes OR Smoking yes)
	//if(($DMtod=='yes') || (($result_dlcc=='DEFINITE' || $result_dlcc=='PROBABLE' || $result_dlcc=='POSSIBLE') && (($premature_cerebral=='yes') || ($pvd=='yes'))) || (($result_dlcc=='DEFINITE' || $result_dlcc=='PROBABLE' || $result_dlcc=='POSSIBLE') && ($numRisk>=1) ) )
	if ((($result_dlcc=='DEFINITE' || $result_dlcc=='PROBABLE' || $result_dlcc=='POSSIBLE') && ($numOfFHRisk==1)) || (($result_dlcc=='DEFINITE' || $result_dlcc=='PROBABLE' || $result_dlcc=='POSSIBLE') && (($premature_cerebral=='yes') || ($pvd=='yes') || ($cadDM=='yes'))) )
		$result_risk="VERY HIGH RISK";
	else if($result_dlcc=='DEFINITE' || $result_dlcc=='PROBABLE' || $result_dlcc=='POSSIBLE')
		$result_risk="HIGH RISK";
	else
		$result_risk="NO RISK";
	
	//echo "first question point :".$first_question_dlcc;
    //echo "\nsecond question point :".$second_question_dlcc;
    //echo "\nthird question point :".$third_question_dlcc;
    //echo "\nfourth question point :".$fourth_question_dlcc;
    //echo "\nfifth question point :".$fifth_question_dlcc;
    echo "\nDLCC total point :".$total_dlcc;
    echo "\nDLCC result :".$result_dlcc;
    //echo "\n\nfirst question :".$first_question_sb;
    //echo "\nsecond question :".$second_question_sb;
    //echo "\nthird question :".$third_question_sb;
    //echo "\nfourth question :".$fourth_question_sb;
    //echo "\nfifth question :".$fifth_question_sb;
    echo "\nSB result :".$result_sb;
    echo "\n\nfirst question :".$first_question_jfhmc;
    echo "\nsecond question :".$second_question_jfhmc;
    echo "\nthird question :".$third_question_jfhmc;
    echo "\nJFHMC total :".$total_jfhmc;
    echo "\nJFHMC result :".$result_jfhmc;
	echo "\nUS-MEDPED result: ".$result_us;
	echo "\nnumOfFHRisk: ".$numOfFHRisk;
	echo "\ncadDM: ".$cadDM;
	echo "\ncadSmoking: ".$cadSmoking;
	echo "\ncadHT: ".$cadHT;
	echo "\nFRS CVD risk result: ".$result_risk;

	
    //$sql    = "INSERT INTO `patientscoretbl`(`patientid`, `first_question_dlcc`, `second_question_dlcc`, `third_question_dlcc`, `fourth_question_dlcc`, `fifth_question_dlcc`, `total_dlcc`, `result_dlcc`, `first_question_sb`, `second_question_sb`, `third_question_sb`, `fourth_question_sb`, `fifth_question_sb`, `result_sb`, `first_question_jfhmc`, `second_question_jfhmc`, `third_question_jfhmc`, `total_jfhmc`, `result_jfhmc`, `result_us`, `result_risk` ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
	
    $patientscoredata = [
        "patientid" => $patientid,
        "first_question_dlcc" => $first_question_dlcc,
        "second_question_dlcc" => $second_question_dlcc,
        "third_question_dlcc" => $third_question_dlcc,
        "fourth_question_dlcc" => $fourth_question_dlcc,
        "fifth_question_dlcc" => $fifth_question_dlcc,
        "total_dlcc" => $total_dlcc,
        "result_dlcc" => $result_dlcc,
        "first_question_sb" => $first_question_sb,
        "second_question_sb" => $second_question_sb,
        "third_question_sb" => $third_question_sb,
        "fourth_question_sb" => $fourth_question_sb,
        "fifth_question_sb" => $fifth_question_sb,
        "result_sb" => $result_sb,
        "first_question_jfhmc" => $first_question_jfhmc,
        "second_question_jfhmc" => $second_question_jfhmc,
        "third_question_jfhmc" => $third_question_jfhmc,
        "total_jfhmc" => $total_jfhmc,
        "result_jfhmc" => $result_jfhmc,
        "result_us" => $result_us,
        "result_risk" => $result_risk
    ];
    patients::create($patientdata);
    patientscore::create($patientscoredata);
    return redirect('/dashboard')->with('message', 'Successfully register patient.');
    }
}