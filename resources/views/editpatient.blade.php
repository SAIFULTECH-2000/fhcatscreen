<?php  
                $patientname = $patient->patientname;
                $patientcontact = $patient->patientcontact;
                $patientgender = $patient->patientgender;
                $patientrace = $patient->patientrace;
                $patientnric = $patient->patientnric;
                $patientnric1 = substr($patientnric,0,6);
                $patientnric2 = substr($patientnric,6,2);
                $patientnric3 = substr($patientnric,8,4);
				$patientaddress=$patient->patientaddress;
				$patientheight=$patient->patientheight;
				$patientweight=$patient->patientweight;
				$patientwaist=$patient->patientwaist;
				
				//causes of secondary hypercholesterolaemia
				$pregnancy=$patient->pregnancy;
				$hypothyroidism=$patient->hypothyroidism;
				$nephroticsyndrome=$patient->nephroticsyndrome;
				$obstructive_liverdisease=$patient->obstructive_liverdisease;
				$medications=$patient->medications;
				$hypogonadism=$patient->hypogonadism;
				
				
				//to add crf
				$cadSmoking=$patient->cadSmoking;
				$averageStick=$patient->averageStick;
				$activeSmokingM=$patient->activeSmokingM;
				$activeSmokingY=$patient->activeSmokingY;
				$cadSmokingNo=$patient->cadSmokingNo;
				//$ExSmokerAverageStick=$patient->ExSmokerAverageStick;
				//$ExSmokerActiveSmokingM=$patient->ExSmokerActiveSmokingM;
				//$ExSmokerActiveSmokingY=$patient->ExSmokerActiveSmokingY;
				
				
				$cadDM=$patient->cadDM;
				$lpa=$patient->lpa;
				$lpav= $patient->lpav;
				$cadHT=$patient->cadHT;
				$systolic=$patient->systolic;
				$dystolic=$patient->dystolic;
				$cadHTT=$patient->cadHTT;
				$DMp=$patient->DMp;
				$DMtod=$patient->DMtod;
				$exist = true;
				
				
                $patientyearoffirstseen = $patient->patientyearoffirstseen;
                $premature_cad = $patient->premature_cad;
                $ageCAD = $patient->ageCAD;//patientageatfirstseen -cad
				
				
				$dontknow_geneticmutation=$patient->dontknow_geneticmutation;
				$notfoundmutation = $patient->notfoundmutation;
				
                $agefirstseenMD = $patient->agefirstseenMD ;//patientageatfirstseen -md
                $premature_cerebral = $patient->premature_cerebral;
                $ageStroke = $patient->ageStroke; //patientageatfirstseen -stroke
                $pvd = $patient->pvd;
                $agePVD =$patient->agePVD; //patientageatfirstseen -pvd
                $corneal_arcus = $patient->corneal_arcus;
                $patienttclevel = $patient->patienttclevel;
                $patientldlclevel = $patient->patientldlclevel;
				$patientpretclevel = $patient->patientpretclevel;
                $patientpreldlclevel= $patient->patientpreldlclevel;
                $patientpretg= $patient->patientpretg;
                $patientprehdlc= $patient->patientprehdlc;
                $fasting= $patient->fasting;
				$patientposttg= $patient->patientposttg;
                $patientposthdlc= $patient->patientposthdlc;
                $postfasting= $patient->postfasting;               
                $baseline_therapy = $patient->baseline_therapy;
                $baseline_therapy_specify = $patient->baseline_therapy_specify;
                $tendon_xanthomata = $patient->tendon_xanthomata;
                $tendon_xanthomata_elbows = $patient->tendon_xanthomata_elbows;
                $tendon_xanthomata_heels = $patient->tendon_xanthomata_heels;
                $tendon_xanthomata_fingers = $patient->tendon_xanthomata_fingers;
                $tendon_xanthomata_knees = $patient->tendon_xanthomata_knees;
                $tendon_xanthomata_palms = $patient->tendon_xanthomata_palms;
                $achilles_tendon = $patient->achilles_tendon;
                $nodular_xanthoma = $patient->nodular_xanthoma;
                $genetic_mutation = $patient->genetic_mutation;
                $ldlr = $patient->ldlr;
			    $apob = $patient->apob;
			    $pcsk9 = $patient->pcsk9;
			    $other_fh_mutations = $patient->other_fh_mutations;
				$other_fh_mutations_detail = $patient->other_fh_mutations_detail;
				$reasons = $patient->reasons;
				$first_degree_tc_level = $patient->first_degree_tc_level;
				$second_degree_tc_level = $patient->second_degree_tc_level;
				
				$genetic_mutation_noreason_detail = $patient->genetic_mutation_noreason_detail;
				$first_degree = $patient->first_degree;
                $first_degree_gender = $patient->first_degree_gender;
                $first_degree_age = $patient->first_degree_age;
                $first_degree_tclvl = $patient->first_degree_tclvl;
                $first_degree_ldlclvl = $patient->first_degree_ldlclvl;
                $first_degree_hyperlipidaemia = $patient->first_degree_hyperlipidaemia;
				$first_degree_hyperlipidaemiachild = $patient->first_degree_hyperlipidaemiachild;
				$first_degree_tc_levelchild = $patient->first_degree_tc_levelchild;
				$first_degree_premature_cad = $patient->first_degree_premature_cad;
				$first_degree_tendon_xanthomata = $patient->first_degree_tendon_xanthomata;
                $first_degree_corneal_arcus = $patient->first_degree_corneal_arcus;
                $first_degree_fh = $patient->first_degree_fh;
				
				
				
				
                $second_degree = $patient->second_degree;
                $second_degree_gender = $patient->second_degree_gender;
                $second_degree_age = $patient->second_degree_age;
                $second_degree_tclvl = $patient->second_degree_tclvl;
				$second_degree_tc_levelchild = $patient->second_degree_tc_levelchild;
				$second_degree_tc_level = $patient->second_degree_tc_level;
                $second_degree_hyperlipidaemia = $patient->second_degree_hyperlipidaemia;
                $second_degree_premature_cad = $patient->second_degree_premature_cad;
			
				
                $second_degree_tendon_xanthomata = $patient->second_degree_tendon_xanthomata;
                $second_degree_fh = $patient->second_degree_fh;
				
				
				
                $third_degree = $patient->third_degree;
                $third_degree_fh = $patient->third_degree_fh;


                // get age from ic and first seen
                $nricyear = substr($patientnric,0,2);
                if ($nricyear > 19) {    
                    $firstseenage = $patientyearoffirstseen - (1900 + $nricyear);
                    $nricage = date('Y') - (1900 + $nricyear);
                }
                else {
                    $firstseenage = $patientyearoffirstseen - 2000 - $nricyear;
                    $nricage = date('Y') - 2000 - $nricyear;
                }
?>


@extends('layouts.app')
@section('title', 'FH CatScreen')

@section('content')

<div id="myHeader">
	<div class="boxCorner boxShadow-top header text-left" >
		<div class="row">
		  <div class="logo-fhcatscreen"><img src="{{asset('img/logo-small.png')}}" alt=""/></div>
		  <div class="hello-user">
            <label class="hello-seperator"></label>
		  </div>
		</div>
	</div>
	<div class="boxCorner boxShadow-top header-sub text-left" >
	    <div class="txt-title"><p>Edit Registration</p></div>
    </div>
</div>

<div class="content container content-wrapper2">
    <div class="row">
    <div class="col-custom2 boxShadow-top form-group">
            <form id="registration-form" method="post" action="/changepatient">
                @csrf
            <!-- <div class="panel-body two-col"> -->
                <!-- first question -->
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <p class="txt-title2">1. Personal Information</p>
                    </div>
                </div>

                <div class="row">
                <div class="col-md-6 mb-3">
                    <input type="text" value="<?php echo $patientname; ?>" class="form-control" name="patientname" id="patientname" pattern="[A-Za-z ]{1,50}" title="All must be characters" required>
                    <input type="hidden" value="<?php echo $patient->patientid; ?>" class="form-control" name="patientid" id="patientid"  >
                    <input type="hidden" value="<?php echo $score->patientscoreid; ?>" class="form-control" name="patientscoreid" id="patientscoreid"  >

                </div>
                <div class="col-md-6 mb-3">
                    <div class="row">
                        <div class="col-md-3 col-3 col-form-label">
                            <label for="patientgender">Gender:</label>
                        </div>
                            <?php 
                            if ($patientgender == 1) { ?>
                                <br><label class="but-radio">Male<input type="radio" value="1"  name="patientgender" id="patientgender" checked="checked" required><span class="checkmark"></span></label>
                                <br><label class="but-radio">Female<input type="radio" value="2"  name="patientgender" id="patientgender"><span class="checkmark"></span></label>
                            <?php } 
                            else if ($patientgender == 2) { ?>
                                <br><label class="but-radio">Male<input type="radio" value="1"  name="patientgender" id="patientgender" required><span class="checkmark"></span></label>
                                <br><label class="but-radio">Female<input type="radio" value="2"  name="patientgender" id="patientgender" checked="checked"><span class="checkmark"></span></label>
                            <?php } ?>
                    </div>
                </div>
                </div>

                <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="row">
                        <div class="col-4 mb-3">
                            <input type="text" value="<?php echo $patientnric1; ?>" class="form-control" name="patientnric1" id="patientnric1" pattern="[0-9]{6}" title="First 6 digits"  onkeyup="calculateAge()" autocomplete="off" maxlength="6" placeholder="NRIC" required>
                        </div>
                        <div class="col-4 mb-3">
                            <input type="text" value="<?php echo $patientnric2; ?>" class="form-control" name="patientnric2" id="patientnric2" pattern="[0-9]{2}" title="2 Digits" autocomplete="off" maxlength="2" required>
                        </div>
                        <div class="col-4 mb-3">
                            <input type="text" value="<?php echo $patientnric3; ?>" class="form-control" name="patientnric3" id="patientnric3" pattern="[0-9]{4}" title="4 Last Digits" autocomplete="off" maxlength="4" required>
                        </div>
                    </div>
                    <small class="text-muted"><strong>Note:</strong> If you don’t know the NRIC, at least put the first two digits of 
        NRIC (year) and types zeros for others. E.g: (930000-00-0000).</small>
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="text" value="<?php echo $patientcontact; ?>" class="form-control" name="patientcontact" id="patientcontact" placeholder="Mobile number (Optional)" pattern="[0-9]{10}" title="Enter digits mobile number" >
                    </div>
                </div>

                <div class="row">
                <div class="col-md-6 mb-3">
                        <select name="patientrace" id="patientrace" class="form-control" required>
                            <option disabled hidden>Choose here</option>
                        <?php 
                            $array_race = ["MALAY","CHINESE","INDIAN","ORANG ASLI","BIDAYUH","IBAN","OTHERS","DUSUN","BAJAU","KADAZAN","SULUK","BANJAR","BUGIS","NON-MALAYSIAN"];
                            for ($i = 0; $i < sizeof($array_race); $i++) { 
                                if ($array_race[$i] == $patientrace) { ?>
                                    <option value="<?php echo $array_race[$i]; ?>" selected><?php echo $array_race[$i]; ?></option>
                                <?php } else { ?>
                                    <option value="<?php echo $array_race[$i]; ?>"><?php echo $array_race[$i]; ?></option>
                                <?php
                                }
                            }
                        ?>
                        </select>
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" value="<?php echo $nricage; ?>" class="form-control" name="patientage" id="patientage" placeholder="Age based on NRIC" readonly>
                </div>
                </div>
				
				<div class="row">
			<div class="col mb-3">
			
            <input type="text" value="<?php echo $patientaddress; ?>" class="form-control" name="patientaddress" id="patientaddress"  placeholder="Current Address"  title="Current address">
        </div>
			</div>
			
			<div class="row">
			<div class="col-md-4 mb-3">
			
            <input type="text" value="<?php echo $patientheight; ?>" class="form-control" name="patientheight" id="patientheight"  placeholder="Height (cm)"  title="Height (cm)">
        </div>
		<div class="col-md-4 mb-3">
			
            <input type="text" value="<?php echo $patientweight; ?>" class="form-control" name="patientweight" id="patientweight"  placeholder="Weight (kg)"  title="Weight (kg)">
        </div>
		<div class="col-md-4 mb-3">
			
            <input type="text" value="<?php echo $patientwaist; ?>" class="form-control" name="patientwaist" id="patientwaist"  placeholder="Waist circumference (cm)"  title="Waist circumference (cm)">
        </div>
		
			</div>

                <!-- second question -->
                <hr class="mb-3">
                <div class="row">
                    <div class="col-md-4 mb-3">
                    <p class="txt-title2">2. Personal Clinical History</p>
                    </div>
                </div>

                <!-- baru2.1 -->
                <div class="row">
                    <div class="col-md-12 mb-3 ">
                        <div class="but-radio-group mb-3">
                            <label for="premature_cad" class="col col-form-label">2.1 CAD <i> (Ischaemic Heart Disease (IHD), Angina, Chestpain Exertion, Myocardial Infarction, Angioplasty (coronary stent), CABG, Revascularisation)</i></label>
                        <div class="col form-group mb-3 row">
                            <?php if ($premature_cad == "yes") { ?>
                                <div class="col-4 mb-3">
                                    <label class="but-radio">Yes<input type="radio" value="yes" class="cad" name="cad" id="cad" checked="checked" ><span class="checkmark"></span></label>
                                </div>
                                <div class="col-4 mb-3">
                                    <label class="but-radio">No<input type="radio" value="no" class="cad" name="cad" id="cad"><span class="checkmark"></span></label>
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                    <label class="but-radio">Yes<input type="radio" value="yes" class="cad" name="cad" id="cad"><span class="checkmark"></span></label>
                                </div>
                                <div class="col-4 mb-3">
                                    <label class="but-radio">No<input type="radio" value="no" class="cad" name="cad" id="cad" checked="checked" ><span class="checkmark"></span></label>
                                </div>
                            <?php }?>
                        </div>
                        
                        <div class="col-md-12" id="autoUpdate_cad" class="autoUpdate_cad">
                        <!--<label class="col col-form-label" id ="premature_cad" for="premature_cad">Premature CAD:-->
						<input type="hidden" value="premature_cad" name="premature_cad" id="premature_cad"></label>
                                    <div class="col form-group mb-3 row">
                                    
                                    <label class="col col-form-label" id ="patientageatfirstseen" for="patientageatfirstseen">Age at first diagnosed /Symptom presents of CAD:
                                    <input type="number" step="1" value="<?php echo $ageCAD; ?>" class="patientageatfirstseen" name="patientageatfirstseen" id="patientageatfirstseen"></label>
                                    </div>
                                    
                                                                       
                                    
                                    
                                    <!-- <input type="text" value="" class="form-control" name="patientageatfirstseen" id="patientageatfirstseen" readonly>-->
                                </div>
                                
                              
                                
                                </div>
                    </div>
                    </div>
                    <!-- baru2.1 end -->
                    
                    <!-- baru2.2 -->
                    <div class="row">
                    <div class="col-md-12">
                        <div class="but-radio-group">
                            <label for="Premature CAD" class="col col-form-label">2.2 Stroke <i>(Thrombotic Stroke, Transient Ischaemic Attack (TIA))</i></label>
                        <div class="col form-group mb-3 row">

                            <?php if ($premature_cerebral == "yes") { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" class ="premature_cerebral" name="premature_cerebral" id="premature_cerebral" checked="checked" required><span class="checkmark"></span></label>
                                </div>

								<div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" class ="premature_cerebral" name="premature_cerebral" id="premature_cerebral" ><span class="checkmark"></span></label>
                                </div>
                                <div class="col-md-12" id="autoUpdate_stroke" class="autoUpdate_stroke">
                                    <label class="col col-form-label" id ="patientageoffirstseen_stroke" for="patientageoffirstseen_stroke">Age at first diagnosed:
                                    <input class="col-md-6" type="number" step="1" value="<?php echo $ageStroke; ?>" class="form-control" name="patientageoffirstseen_stroke" id="patientageoffirstseen_stroke"  title="Age of First Seen" ></label>
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" class ="premature_cerebral" name="premature_cerebral" id="premature_cerebral" required><span class="checkmark"></span></label>
                                </div>
								<div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" class ="premature_cerebral" name="premature_cerebral" id="premature_cerebral" checked="checked" ><span class="checkmark"></span></label>
                                </div>
                                <div class="col-md-12" id="autoUpdate_stroke" class="autoUpdate_stroke">
                                    <label class="col col-form-label" id ="patientageoffirstseen_stroke" for="patientageoffirstseen_stroke">Age at first diagnosed:
                                    <input class="col-md-6" type="number" step="1" value="0" class="form-control" name="patientageoffirstseen_stroke" id="patientageoffirstseen_stroke"  title="Age of First Seen" ></label>
                                </div>
                            <?php } ?>
                            
                           <!-- <?php if ($premature_cerebral == "no") { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" class ="premature_cerebral" name="premature_cerebral" id="premature_cerebral" checked="checked"><span class="checkmark"></span></label>
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" class ="premature_cerebral" name="premature_cerebral" id="premature_cerebral"><span class="checkmark"></span></label>
                                </div>
                            <?php } ?> -->

                        </div>
                        </div>
                    </div>  
                    </div>
                    <!-- baru2.2 end -->

                    <!-- baru2.3 -->
                    <div class="row">
                    <div class="col-md-12 ">
                        <div class="but-radio-group">
                            <label for="Premature CAD" class="col col-form-label">2.3 PVD <i>(Intermittent Claudication, Carotid Stenosis, Aortic Aneurysm, Renal Artery Stenosis (RAS), Ischaemic Bowel Disease )</i></label>
                        <div class="col form-group mb-3 row">

                            <?php if ($pvd == "yes") { ?>
                                <div class="col-4 mb-3">
                                    <label class="but-radio">Yes<input type="radio" value="yes" class ="pvd" name="pvd" id="pvd" checked="checked" required><span class="checkmark"></span></label>
                                </div>
								<div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" class ="pvd" name="pvd" id="pvd"><span class="checkmark"></span></label>
								</div>
                                <div class="col-md-12" id="autoUpdate_pvd" class="autoUpdate_pvd">
                                    <label class="col col-form-label" id ="patientageoffirstseen_pvd" for="patientageoffirstseen_pvd">Age at first diagnosed:
                                    <input class="col-md-6" type="number" step="1" value="<?php echo $agePVD; ?>" class="form-control" name="patientageoffirstseen_pvd" id="patientageoffirstseen_pvd"  title="Age of First Seen" > </label>
                                    <!-- <label id ="patientageoffirstseen_pvd" for="patientageoffirstseen_pvd">Age at first diagnosed:</label>
                                    <input type="text" value="<?php echo $agePVD; ?>" class="form-control" name="patientageoffirstseen_pvd" id="patientageoffirstseen_pvd"  title="Age of First Seen" > <br /> -->
                                    <!-- <input type="text" value="" class="form-control" name="patientageatfirstseen" id="patientageatfirstseen" readonly>-->
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                    <label class="but-radio">Yes<input type="radio" value="yes" class ="pvd" name="pvd" id="pvd" required><span class="checkmark"></span></label>
                                </div>
								<div class="col-4 mb-3">
								               <label class="but-radio">No<input type="radio" value="no" class ="pvd" name="pvd" id="pvd" checked="checked"><span class="checkmark"></span></label>
								</div>
								<div class="col-md-12" id="autoUpdate_pvd" class="autoUpdate_pvd">
                                    <label class="col col-form-label" id ="patientageoffirstseen_pvd" for="patientageoffirstseen_pvd">Age at first diagnosed:
                                    <input class="col-md-6" type="number" step="1" value="0" class="form-control" name="patientageoffirstseen_pvd" id="patientageoffirstseen_pvd"  title="Age of First Seen" > </label>
                                    <!-- <input type="text" value="" class="form-control" name="patientageatfirstseen" id="patientageatfirstseen" readonly>-->
                                </div>
                            <?php } ?>
                            
                           <!-- <?php if ($pvd == "no") { ?>
                                <label class="but-radio">No<input type="radio" value="no" class ="pvd" name="pvd" id="pvd" checked="checked"><span class="checkmark"></span></label>
                            <?php } else { ?>
                                <label class="but-radio">No<input type="radio" value="no" class ="pvd" name="pvd" id="pvd"><span class="checkmark"></span></label>
                            <?php } ?> -->

                        </div>
                        </div>		
                    </div>
                    </div>
                    <!-- baru2.3 end -->

                    <!-- baru2.4 -->
                    <div class="row">
                    <div class="col-md-12 ">
                        <div class="but-radio-group">
                            <label for="Premature CAD" class="col col-form-label">2.4 Cornel Arcus <i>(First appearance < 45 years)</i></label>
                        <div class="col form-group mb-3 row">

                            <?php if ($corneal_arcus == "yes") { ?>
                                <div class="col-4 mb-3">
                                    <label class="but-radio">Yes<input type="radio" value="yes" name="corneal_arcus" id="corneal_arcus" checked="checked" required><span class="checkmark"></span></label>
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                    <label class="but-radio">Yes<input type="radio" value="yes" name="corneal_arcus" id="corneal_arcus" required><span class="checkmark"></span></label>
                                </div>
                            <?php } ?>
                            
                            <?php if ($corneal_arcus == "no") { ?>
                                <div class="col-4 mb-3">
                                    <label class="but-radio">No<input type="radio" value="no" name="corneal_arcus" id="corneal_arcus" checked="checked"><span class="checkmark"></span></label>
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                    <label class="but-radio">No<input type="radio" value="no" name="corneal_arcus" id="corneal_arcus"><span class="checkmark"></span></label>
                                </div>
                            <?php } ?>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- baru2.4 end -->

                
				<hr class="mb-3">
                <div class="row">
                    <div class="col-md-4 mb-3">
                    <p class="txt-title2">3. Coronary Risk Factor(s)</p>
                    </div>
                </div>
				
				<div class="but-radio-group mb-3">
									<label class="col col-form-label">Current Smoker  <i>(Currently actively smoking or stop only within the last 1 month)</i></label> 				
									<div class="col form-group mb-3 row">
										<div class="col-4 mb-3">
											<label class="but-radio">Yes<input type="radio" value="yes" name="cadSmoking" id="cadSmoking"  <?php if($exist) if($cadSmoking == 'yes') echo 'checked'; ?> ><span class="checkmark"></span></label>
										</div>
										<div class="col-4 mb-3">
											<label class="but-radio">No<input type="radio" value="no" name="cadSmoking" id="cadSmoking" <?php if($exist) if($cadSmoking == 'no') echo 'checked'; ?> ><span class="checkmark"></span></label>
										</div>
									</div>		
									<div class="col form-group mb-3 row" id="noSmoking" <?php if($exist){ if($cadSmoking == 'no') echo 'class="visible"'; else echo 'style="display:none;"';}else echo 'style="display:none;"'; ?> > 
										<div class="col-4 mb-3">
											<label class="but-radio"> Ex Smoker <input type="radio" value="yes" name="cadSmokingNo" id="cadSmokingNo" <?php if($exist) if($cadSmokingNo == 'yes') echo 'checked'; ?> ><span class="checkmark"></span></label>
										</div>
										<div class="col-4 mb-3">
											<label class="but-radio"> Never Smoked <input type="radio" value="no" name="cadSmokingNo" id="cadSmokingNo" <?php if($exist) if($cadSmokingNo == 'no') echo 'checked'; ?>><span class="checkmark"></span></label>
										</div>
									</div>
									<div id="yesSmoking" <?php if($exist){ if($cadSmoking == 'yes' || $cadSmokingNo == 'yes') echo 'class="visible"'; else echo 'style="display:none;"';}else echo 'style="display:none;"'; ?> >
										<div class="col form-group mb-3 row">
											<label class="col-4 mb-3">Average sticks per day </label>
											<div class="col mb-3">
												<input type="number" step="1" value="<?php if($exist) echo $averageStick; ?>" class="form-control" name="averageStick" id="averageStick"  placeholder="Number of sticks per day" min="1">
											</div>
										</div>
										<div class="col form-group mb-3 row">
											<label class="col mb-3">Duration of active smoking</label>
											<div class="col mb-3">
												<input type="number" step="1" value="<?php if($exist){ echo $activeSmokingM;} else echo "1"; ?>" class="form-control" name="activeSmokingM" id="activeSmokingM" min="0" placeholder="Month(s)">
											</div>
											<div class="col mb-3">
												<input type="number" step="1" value="<?php if($exist){ echo $activeSmokingY;} else echo "0"; ?>" class="form-control" name="activeSmokingY" id="activeSmokingY" min="0" placeholder="Year(s)">
											</div>
										</div>
									</div>
								</div>

				
				
								<div class="but-radio-group mb-3">
									<label for="Premature CAD" class="col col-form-label">Diabetes </label>
									
									 <div class="col form-group mb-3 row">
										<div class="col-4 mb-3">
											<label class="but-radio">Yes<input type="radio" value="yes" name="cadDM"  <?php if($exist) if($cadDM == 'yes') echo 'checked'; ?> ><span class="checkmark"></span></label>
										</div>
										<div class="col-4 mb-3">
											<label class="but-radio">No<input type="radio" value="no" name="cadDM" <?php if($exist) if($cadDM == 'no') echo 'checked'; ?> ><span class="checkmark"></span></label>
										</div>
									</div>
									
									
									<div id="yesDiabetes" <?php if($exist){ if($cadDM == 'yes') echo 'class="visible"'; else echo 'style="display:none;"';}else echo 'style="display:none;"'; ?> >
										<div class="col form-group mb-3 row">
											<div class="col-4 mb-3">
												<input type="checkbox" value="yes" name="DMp" id="DMp" <?php if($exist) if($DMp == 'yes') echo 'checked'; ?> > Proteinura
											</div>						   
											<div class="col-4 mb-3">
												<input type="checkbox" value="yes" name="DMtod" id="DMtod" <?php if($exist) if($DMtod == 'yes') echo 'checked'; ?> > Target organ damage
											</div>
										</div>
									</div>
									
									
								</div>
			
								<div class="but-radio-group mb-3">
									<label class="col col-form-label">Lp(a)</label>
									<div class="col form-group mb-3 row">
										<div class="col-4 mb-3">
											<label class="but-radio">Yes<input type="radio" value="yes" name="lpa" id="lpa"  <?php if($exist) if($lpa == 'yes') echo 'checked'; ?> ><span class="checkmark"></span></label>
										</div>
										<div class="col-4 mb-3">
											<label class="but-radio">No<input type="radio" value="no" name="lpa" id="lpa" <?php if($exist) if($lpa == 'no') echo 'checked'; ?> ><span class="checkmark"></span></label>
										</div>
									</div>
									<div id="yeslpa" class="col form-group mb-3 row" <?php if($exist){ if($lpa == 'yes') echo 'class="visible"'; else echo 'style="display:none;"';}else echo 'style="display:none;"'; ?>>
										<div class="col-4 mb-3">
											<label>Lp(a) nmol/L <i class="fa fa-info-circle" aria-hidden="true" title="Value must be between 90-200"></i></label>
											<input type="number" step="0.1" class="form-control" value="<?php if($exist) echo $lpav; ?>" name="lpav" id="lpav">
										</div>
									</div>		
								</div>			
				
								<div class="but-radio-group mb-3">
									<label class="col col-form-label">On Antihypertensive Medication? </label>
									<div class="col form-group mb-3 row">
										<div class="col-4 mb-3">
											<label class="but-radio">Yes<input type="radio" value="yes" name="cadHT" <?php if($exist) if($cadHT == 'yes') echo 'checked';?> ><span class="checkmark"></span></label>
										</div>
										<div class="col-4 mb-3">
											<label class="but-radio">No<input type="radio" value="no" name="cadHT" <?php if($exist) if($cadHT == 'no') echo 'checked';?> ><span class="checkmark"></span></label>
										</div>					   
									</div>
									<div class="col form-group mb-3 row">
										<div class="col-md-6 mb-3">                            
											Systolic Blood Pressure (mm Hg) 
											<input class="col-md-6" type="number" step="0.1" value="<?php if($exist) echo $systolic; else echo "0.0"; ?>" class="form-control" name="systolic" id="systolic" min="0.0" >
										</div>
										<div class="col-md-6 mb-3">
											Dystolic Blood Pressure (mm Hg) 
											<input class="col-md-6" type="number" step="0.1" value="<?php if($exist) echo $dystolic; else echo "0.0"; ?>" class="form-control" name="dystolic" id="dystolic" min="0.0" >
										</div>
									</div>
								</div>
				
                <hr class="mb-3">
                <!-- finish second question -->


                <!-- third question -->
                <div class="row">
                    <div class="col-md-5 mb-3">
                    <p class="txt-title2">3. TC and LDL-C levels (mmol/L)</p>
                    </div>
                </div>

                <!-- baru3.1 -->
                <div class="row">
                <div class="col-md-12">
                <div class="but-radio-group">
                    <label class="col col-form-label">3.1 Pre-treatment</label>
                    <div class="col form-group mb-3 row">

                        <?php if ($patientpretclevel == 0.00) { ?>
                            <div class="col-md-6 mb-3">                            
                                <label class="col col-form-label" id="patientpretclevel">TC levels (mmol/L)</label>
                                <input class="col-md-6" type="number" step="0.1" value="0.0" class="form-control" name="patientpretclevel" id="patientpretclevel" placeholder="TC levels (mmol/L)">
                            </div>
                        <?php } else{  ?>
                            <div class="col-md-6 mb-3">                            
                                <label class="col col-form-label" id="patientpretclevel">TC levels (mmol/L)</label>
                                <input class="col-md-6" type="number" step="0.1" value="<?php echo $patientpretclevel; ?>" class="form-control" name="patientpretclevel" id="patientpretclevel" placeholder="TC levels (mmol/L)">
                            </div>
						<?php } ?>
                        <!-- <br /> -->
                        <?php if ($patientpreldlclevel == 0.00) { ?>
                            <div class="col-md-6 mb-3">
                                <label class="col col-form-label">LDL-C levels (mmol/L) (if available)</label>
                                <input class="col-md-6" type="number" step="0.1" value="0.0" class="form-control" name="patientpreldlclevel" id="patientpreldlclevel" placeholder="LDL-C levels (mmol/L)" >
                            </div>
                        <?php } else{  ?>
                            <div class="col-md-6 mb-3">
                                <label class="col col-form-label">LDL-C levels (mmol/L) (if available)</label>
                                <input class="col-md-6" type="number" step="0.1" value="<?php echo $patientpreldlclevel; ?>" class="form-control" name="patientpreldlclevel" id="patientpreldlclevel" placeholder="LDL-C levels (mmol/L)" >
                            </div>
                        <?php } ?>
                        <!-- <br/> -->

                        <?php if ($patientpretg == 0.00) { ?>
                            <div class="col-md-6 mb-3">
                                <label class="col col-form-label">TG</label>
                                <input class="col-md-6" type="number" step="0.1" value="0.0" class="form-control" name="patientpretg" id="patientpretg">
                            </div>
                        <?php } else{  ?>
                            <div class="col-md-6 mb-3">
                                <label class="col col-form-label">TG</label>
                                <input class="col-md-6" type="number" step="0.1" value="<?php echo $patientpretg; ?>" class="form-control" name="patientpretg" id="patientpretg">
                            </div>
                        <?php } ?>

                        <?php if ($patientprehdlc == 0.00) { ?>
                            <div class="col-md-6 mb-3">
                                <label class="col col-form-label">HDL-C</label>
                                <input class="col-md-6" type="number" step="0.1" value="0.0" class="form-control" name="patientprehdlc" id="patientprehdlc">
                            </div>
                        <?php } else{  ?>
                            <div class="col-md-6 mb-3">
                                <label class="col col-form-label">HDL-C</label>
                                <input class="col-md-6" type="number" step="0.1" value="<?php echo $patientprehdlc; ?>" class="form-control" name="patientprehdlc" id="patientprehdlc">
                            </div>
                        <?php } ?>
                        
                    </div>
                        
                    <div class="but-radio-group"> 
                    <label class="col col-form-label">Fasting</label>   		  
                    <div class="col form-group mb-3 row">
                        <?php if ($fasting == "yes") { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="fasting" id="fasting" checked="checked" ><span class="checkmark"></span></label>
                            </div>
                        <?php } else { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="fasting" id="fasting" ><span class="checkmark"></span></label>
                            </div>
                        <?php } ?>

                        <?php if ($fasting == "no") { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="fasting" id="fasting" checked="checked"><span class="checkmark"></span></label>
                            </div>
                        <?php } else { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="fasting" id="fasting"><span class="checkmark"></span></label>
                            </div>
                        <?php } ?>
                    </div>
                    </div>

                </div>
                </div>
                </div>
                <!-- baru3.1 end -->

                <!-- baru3.2 -->
                <div class="row">		
                <div class="col-md-12">
                <div class="but-radio-group"> 
                    <label class="col col-form-label">3.2 On lipid-lowering therapy?</label>   		  
                    <div class="col form-group mb-3 row">

                        <?php if ($baseline_therapy == 1) { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="1" class="statin_name" name="statin_name" id="statin_name" checked><span class="checkmark"></span></label>
                            </div>
                        <?php } else{ ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="1" class="statin_name" name="statin_name" id="statin_name"><span class="checkmark"></span></label>
                            </div>
                        <?php } ?>

                        <?php if ($baseline_therapy == 0) { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="0" class="statin_name" name="statin_name" id="statin_name" checked><span class="checkmark"></span></label>
                            </div>
                        <?php } else { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="0" class="statin_name" name="statin_name" id="statin_name" ><span class="checkmark"></span></label>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                </div>
                </div>
                <!-- baru3.2 end -->
                    
                <!-- baru3.3 -->
                <div class="row">
                <div id="autoUpdate" class="col-md-12 autoUpdate">     
                <div class="but-radio-group"> 
            
                    <label class="col col-form-label" id="adjust_ldlclabel"> 3.3 Post Treatment </label>
                    <div class="col form-group mb-3 row">
                        <div class="col-md-6 mb-3">                            
                            <label class="col col-form-label">TC levels (mmol/L)</label> 
                            <input class="col-md-6" type="number" step="0.1" value="<?php echo $patienttclevel; ?>" class="form-control" name="patienttclevel" id="patienttclevel">
                        </div>
                        <div class="col-md-6 mb-3">                            
                            <label class="col col-form-label">LDL-C levels (mmol/L)</label> 
                            <input class="col-md-6" type="number" step="0.1" value="<?php echo $patientldlclevel; ?>" class="form-control" name="patientldlclevel" id="patientldlclevel" >
                        </div>
                    

					<?php if ($patientposttg == 0.00) { ?>
                            <div class="col-md-6 mb-3">
                                <label class="col col-form-label">TG</label>
                                <input class="col-md-6" type="number" step="0.1" value="0.0" class="form-control" name="patientposttg" id="patientposttg">
                            </div>
                        <?php } else{  ?>
                            <div class="col-md-6 mb-3">
                                <label class="col col-form-label">TG</label>
                                <input class="col-md-6" type="number" step="0.1" value="<?php echo $patientposttg; ?>" class="form-control" name="patientposttg" id="patientposttg">
                            </div>
                        <?php } ?>

                        <?php if ($patientposthdlc == 0.00) { ?>
                            <div class="col-md-6 mb-3">
                                <label class="col col-form-label">HDL-C</label>
                                <input class="col-md-6" type="number" step="0.1" value="0.0" class="form-control" name="patientposthdlc" id="patientposthdlc">
                            </div>
                        <?php } else{  ?>
                            <div class="col-md-6 mb-3">
                                <label class="col col-form-label">HDL-C</label>
                                <input class="col-md-6" type="number" step="0.1" value="<?php echo $patientposthdlc; ?>" class="form-control" name="patientposthdlc" id="patientposthdlc">
                            </div>
                        <?php } ?>
                        
                    </div>
                        
                    <div class="but-radio-group"> 
                    <label class="col col-form-label">Fasting</label>   		  
                    <div class="col form-group mb-3 row">
                        <?php if ($postfasting == "yes") { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="postfasting" id="postfasting" checked="checked" ><span class="checkmark"></span></label>
                            </div>
                        <?php } else { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="postfasting" id="postfasting" ><span class="checkmark"></span></label>
                            </div>
                        <?php } ?>

                        <?php if ($postfasting == "no") { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="postfasting" id="postfasting" checked="checked"><span class="checkmark"></span></label>
                            </div>
                        <?php } else { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="postfasting" id="postfasting"><span class="checkmark"></span></label>
                            </div>
                        <?php } ?>
                    </div>
                    </div>


                    <div class="col-md-10">
					<div class="col form-group mb-3 row">
					<div class="col-md-10 mb-3"> 
                        <select class="col col-form-label" class="form-control" id="ldlcadjustment" name="ldlcadjustment" onchange="calculateAdjustedLDLC()">
						
						<option selected disabled hidden>Choose here</option>
                            
                            <?php 

                                $ldls = DB::table('ldltbl')->get(); 
                                
                                foreach ($ldls as $ldl) {
                                   if ($baseline_therapy_specify == $ldl->ldlid) {
                                            echo '<option value="'.$ldl->ldladjustment.'-'.$ldl->ldlid.'" id="'.$ldl->ldlid.'" selected="selected">'.$ldl->ldlname.'</option>';
                                        } else {
                                            echo '<option value="'.$ldl->ldladjustment.'-'.$ldl->ldlid.'" id="'.$ldl->ldlid.'">'.$ldl->ldlname.'</option>';    
                                        }
            
                                }
                            ?>
                        </select>

                    </div>
                </div>
                </div>	
                </div>
                <div class="row">		
                <div class="col-md-12">
                <div class="but-radio-group"> 
                            
                <div class="col form-group mb-3 row">
                    <label class="col col-form-label">3.4 Adjusted LDL-C level(mmol/L) (predicted pre-treatment)</label>
                    <div class="col-md-6 mb-3"> 
                        <input class="col-md-6"  type="number" step="0.1" value="0" class="form-control" name="adjust_ldlclevel" id="adjust_ldlclevel" readonly></label>
                    </div>
                </div>
                </div>
                </div>
                </div>
                </div>                
                </div>	
                <!-- baru3.3 end -->
                <hr class="mb-3">
                    
                <!-- baru4 -->
                <div class="row">
                    <div class="col-md-3 mb-3">
                    <p class="txt-title2">4. Xanthomata</p>
                    </div>
                </div>

                <div class="row">
                <div class="col-md-6 ">
                    <div class="but-radio-group">
                        <label for="Premature CAD" class="col col-form-label">Tendon Xanthomata on the: </label>
                        <label>1) Elbows</label>
                    <div class="col form-group mb-3 row">
                        <?php if ($tendon_xanthomata_elbows == "yes") { ?>
                            <div class="col-6 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="tendon_xanthomata_elbows" id="tendon_xanthomata_elbows" checked="checked" required><span class="checkmark"></span></label>
                            </div>
                        <?php } else { ?>
                            <div class="col-6 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="tendon_xanthomata_elbows" id="tendon_xanthomata_elbows" required><span class="checkmark"></span></label>
                            </div>
                        <?php } ?>

                        <?php if ($tendon_xanthomata_elbows == "no") { ?>
                            <div class="col-6 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="tendon_xanthomata_elbows" id="tendon_xanthomata_elbows" checked="checked"><span class="checkmark"></span></label> 
                            </div>
                        <?php } else { ?>
                            <div class="col-6 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="tendon_xanthomata_elbows" id="tendon_xanthomata_elbows"><span class="checkmark"></span></label>
                            </div>
                        <?php } ?>

                      
                    </div>

                    <label>2) Heels</label>
                    <div class="col form-group mb-3 row">
                        <?php if ($tendon_xanthomata_heels == "yes") { ?>
                            <div class="col-6 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="tendon_xanthomata_heels" id="tendon_xanthomata_heels" checked="checked" required><span class="checkmark"></span></label>
                            </div>
                        <?php } else { ?>
                            <div class="col-6 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="tendon_xanthomata_heels" id="tendon_xanthomata_heels" required><span class="checkmark"></span></label>
                            </div>
                        <?php } ?>

                        <?php if ($tendon_xanthomata_heels == "no") { ?>
                            <div class="col-6 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="tendon_xanthomata_heels" id="tendon_xanthomata_heels" checked="checked"><span class="checkmark"></span></label> 
                            </div>
                        <?php } else { ?>
                            <div class="col-6 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="tendon_xanthomata_heels" id="tendon_xanthomata_heels"><span class="checkmark"></span></label>
                            </div>
                        <?php } ?>

                        
                    </div>

                    <label>3) Fingers</label>
                    <div class="col form-group mb-3 row">
                        <?php if ($tendon_xanthomata_fingers == "yes") { ?>
                            <div class="col-6 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="tendon_xanthomata_fingers" id="tendon_xanthomata_fingers" checked="checked" required><span class="checkmark"></span></label>
                            </div>
                        <?php } else { ?>
                            <div class="col-6 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="tendon_xanthomata_fingers" id="tendon_xanthomata_fingers" required><span class="checkmark"></span></label>
                            </div>
                        <?php } ?>

                        <?php if ($tendon_xanthomata_fingers == "no") { ?>
                            <div class="col-6 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="tendon_xanthomata_fingers" id="tendon_xanthomata_fingers" checked="checked"><span class="checkmark"></span></label> 
                            </div>
                        <?php } else { ?>
                            <div class="col-6 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="tendon_xanthomata_fingers" id="tendon_xanthomata_fingers"><span class="checkmark"></span></label>
                            </div>
                        <?php } ?>

                        
                    </div>

                    <label>4) Knees</label>
                    <div class="col form-group mb-3 row">
                        <?php if ($tendon_xanthomata_knees == "yes") { ?>
                            <div class="col-6 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="tendon_xanthomata_knees" id="tendon_xanthomata_knees" checked="checked" required><span class="checkmark"></span></label>
                            </div>
                        <?php } else { ?>
                            <div class="col-6 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="tendon_xanthomata_knees" id="tendon_xanthomata_knees" required><span class="checkmark"></span></label>
                            </div>
                        <?php } ?>

                        <?php if ($tendon_xanthomata_knees == "no") { ?>
                            <div class="col-6 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="tendon_xanthomata_knees" id="tendon_xanthomata_knees" checked="checked"><span class="checkmark"></span></label> 
                            </div>
                        <?php } else { ?>
                            <div class="col-6 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="tendon_xanthomata_knees" id="tendon_xanthomata_knees"><span class="checkmark"></span></label>
                            </div>
                        <?php } ?>

                        
                    </div>

                    <label>5) Palms</label>
                    <div class="col form-group mb-3 row">
                        <?php if ($tendon_xanthomata_palms == "yes") { ?>
                            <div class="col-6 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="tendon_xanthomata_palms" id="tendon_xanthomata_palms" checked="checked" required><span class="checkmark"></span></label>
                            </div>
                        <?php } else { ?>
                            <div class="col-6 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="tendon_xanthomata_palms" id="tendon_xanthomata_palms" required><span class="checkmark"></span></label>
                            </div>
                        <?php } ?>

                        <?php if ($tendon_xanthomata_palms == "no") { ?>
                            <div class="col-6 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="tendon_xanthomata_palms" id="tendon_xanthomata_palms" checked="checked"><span class="checkmark"></span></label> 
                            </div>
                        <?php } else { ?>
                            <div class="col-6 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="tendon_xanthomata_palms" id="tendon_xanthomata_palms"><span class="checkmark"></span></label>
                            </div>
                        <?php } ?>

                        
                    </div>
                    </div>
                </div>

                <div class="col-md-6 ">
                    <div class="but-radio-group">
                        <label for="Premature CAD" class="col col-form-label">Achilles Tendon Thickening</label>
                    <div class="col form-group mb-3 row">
                        <?php if ($achilles_tendon == "yes") { ?>
                            <div class="col-6 mb-3">
                                <label class="but-radio">Yes <input type="radio" value="yes" name="achilles_tendon" id="achilles_tendon" checked="checked" required><span class="checkmark"></span></label>
                            </div>
                        <?php } else { ?>
                            <div class="col-6 mb-3">
                                <label class="but-radio">Yes <input type="radio" value="yes" name="achilles_tendon" id="achilles_tendon" required><span class="checkmark"></span></label>
                            </div>
                        <?php } ?>
                        
                        <?php if ($achilles_tendon == "no") { ?>
                            <div class="col-6 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="achilles_tendon" id="achilles_tendon" checked="checked"><span class="checkmark"></span></label>
                            </div>
                        <?php } else { ?>
                            <div class="col-6 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="achilles_tendon" id="achilles_tendon"><span class="checkmark"></span></label>
                            </div>
                        <?php } ?>

                       
                    </div>
                    </div>

                    <div class="but-radio-group">
                        <label for="Premature CAD" class="col col-form-label">Nodular Xanthoma on the skin</label>
                    <div class="col form-group mb-3 row">
                        <?php if ($nodular_xanthoma == "yes") { ?>
                            <div class="col-6 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="nodular_xanthoma" id="nodular_xanthoma" checked="checked" required><span class="checkmark"></span></label>
                            </div>
                        <?php } else { ?>
                            <div class="col-6 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="nodular_xanthoma" id="nodular_xanthoma" required><span class="checkmark"></span></label>
                            </div>
                        <?php } ?>
                        
                        <?php if ($nodular_xanthoma == "no") { ?>
                            <div class="col-6 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="nodular_xanthoma" id="nodular_xanthoma" checked="checked"><span class="checkmark"></span></label>
                            </div>
                        <?php } else { ?>
                            <div class="col-6 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="nodular_xanthoma" id="nodular_xanthoma"><span class="checkmark"></span></label>
                            </div>
                        <?php } ?>

                        
                    </div>
                    </div>

                </div>
                </div>
                <!-- baru4 end -->
                <hr class="mb-3">

                <!-- baru5 -->
                <div class="row">
                <div class="col-md-12 mb-3">
                    <p class="txt-title2">5. Has genetic mutation analysis been done?</p>
                    
                    <div class="col form-group mb-3 row">

                        <?php if ($genetic_mutation == "yes") { ?>
                            <div class="col-4 mb-3"> 
                                <label class="but-radio">Yes<input type="radio" value="yes" name="genetic_mutation" class="genetic_mutation" id="genetic_mutation" checked><span class="checkmark"></span></label>
                            </div>
                            <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="genetic_mutation" class="genetic_mutation" id="genetic_mutation" ><span class="checkmark"></span></label>
                            </div>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Pending<input type="radio" value="pending" name="genetic_mutation" class="genetic_mutation" id="genetic_mutation" ><span class="checkmark"></span></label>							
                            </div>
                        <?php } else if ($genetic_mutation=="no") { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="genetic_mutation" class="genetic_mutation" id="genetic_mutation" ><span class="checkmark"></span></label>
                            </div>
                            <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="genetic_mutation" class="genetic_mutation" id="genetic_mutation" checked ><span class="checkmark"></span></label>
                            </div>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Pending<input type="radio" value="pending" name="genetic_mutation"  class="genetic_mutation" id="genetic_mutation" ><span class="checkmark"></span></label>							
                            </div>        
                        <?php } else { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="genetic_mutation" class="genetic_mutation" id="genetic_mutation" ><span class="checkmark"></span></label>
                            </div>
                            <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="genetic_mutation" class="genetic_mutation" id="genetic_mutation" ><span class="checkmark"></span></label>
                            </div>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Pending<input type="radio" value="pending" name="genetic_mutation" class="genetic_mutation" id="genetic_mutation" checked ><span class="checkmark"></span></label>							
                            </div>
                        <?php } ?>
                    </div>			              
                
                    <div id="autoUpdate_gm" class="col-md-12 autoUpdate_gm">
                                
                        <label class="col col-form-label" > In which FH gene the pathogenic variant was found?   
                        <div class="col form-group mb-3 row">
                            <?php if ($ldlr == "yes") { ?>
                                <div class="col-6 mb-3">
                                    <input type="checkbox" value="yes" name="ldlr" id="ldlr" checked="checked" > LDLR   <br />
                                </div>
                            <?php } else { ?>
                                <div class="col-6 mb-3">
                                    <input type="checkbox" value="yes" name="ldlr" id="ldlr" > LDLR   <br />
                                </div>
                            <?php } ?>
                            
                            <?php if ($apob == "yes") { ?>
                                <div class="col-6 mb-3">
                                    <input type="checkbox" value="yes" name="apob" id="apob" checked="checked" > APOB <br />
                                </div>
                            <?php } else { ?>
                                <div class="col-6 mb-3">
                                    <input type="checkbox" value="yes" name="apob" id="apob" > APOB <br />
                                </div>
                            <?php } ?>
                            
                            <?php if ($pcsk9 == "yes") { ?>
                                <div class="col-6 mb-3">
                                    <input type="checkbox" value="yes" name="pcsk9" id="pcsk9" checked="checked" > PCSK9 <br />
                                </div>
                            <?php } else { ?>
                                <div class="col-6 mb-3">
                                    <input type="checkbox" value="yes" name="pcsk9" id="pcsk9" > PCSK9  <br />
                                </div>
                            <?php } ?>
                            
                            <?php if ($dontknow_geneticmutation == "yes") { ?>
                                <div class="col-6 mb-3">
                                    <input type="checkbox" value="yes" name="dontknow_geneticmutation" id="dontknow_geneticmutation" checked="checked" > Don't know  <br />
                                </div>
                            <?php } else { ?>
                                <div class="col-6 mb-3">
                                    <input type="checkbox" value="yes" name="dontknow_geneticmutation" id="dontknow_geneticmutation" > Don't know  <br />
                                </div>
                            <?php } ?>
							
							<?php if ($notfoundmutation == "yes") { ?>
                                <div class="col-6 mb-3">
                                    <input type="checkbox" value="yes" name="notfoundmutation" id="notfoundmutation" checked="checked" onclick="onClickHandler(this)"> Not found  <br />
                                </div>
                            <?php } else { ?>
                                <div class="col-6 mb-3">
                                    <input type="checkbox" value="yes" name="notfoundmutation" id="notfoundmutation" onclick="onClickHandler(this)"> Not found  <br />
                                </div>
                            <?php } ?>
							
							
							 
                            <?php if ($other_fh_mutations == "yes") { ?>
                                <div class="col-6 mb-3">
                                    <input type="checkbox" value="yes" name="other_fh_mutations" id="other_fh_mutations" checked="checked" > Other FH mutations (eg: <i> APOE, LIPA</i>) Please state  
                                    <input type="text" name="other_fh_mutations_detail" value="<?php echo $other_fh_mutations_detail; ?>" size="14">  <br />
                                </div>
                            <?php } else { ?>
                                <div class="col-6 mb-3">
                                    <input type="checkbox" value="yes" name="other_fh_mutations" id="other_fh_mutations" > Other FH mutations (eg: <i> APOE, LIPA</i>) Please state  
                                    <input type="text" name="other_fh_mutations_detail" size="14">  <br />
                                </div>
                            <?php } ?>
                        </div>
                        </label>     
                    </div>

                    <div id="autoUpdate_gmn" class="col-md-12 autoUpdate_gmn">
                            
                        <label class="col col-form-label" for="autoUpdate_gmn">Reasons
                        <div class="col form-group mb-2 row">
                            <?php if ($reasons == "financial_issues") { ?>
                                <div class="col-6 mb-3">
								    <input type="radio" value="financial_issues" name="reasons" id="financial_issues" checked> Financial  issue<br />
                                </div>
                            <?php } else { ?>
                                <div class="col-6 mb-3">
								    <input type="radio" value="financial_issues" name="reasons" id="financial_issues" > Financial  issue<br />
                                </div>
                            <?php } ?>
							
                            <?php if ($reasons == "patient_refuse") { ?>
                                <div class="col-6 mb-3">
				                    <input type="radio" value="patient_refuse" name="reasons" id="patient_refuse" checked> Patient refuse other than financial issue  <br /> 
                                </div>
                            <?php } else { ?>
                                <div class="col-6 mb-3">
								    <input type="radio" value="patient_refuse" name="reasons" id="patient_refuse"> Patient refuse other than financial issue  <br /> 
                                </div>
                            <?php } ?>
								
                            <?php if ($reasons == "no_facility") { ?>
                                <div class="col-6 mb-3">
								    <input type="radio" value="no_facility" name="reasons" id="no_facility" checked> No facility (not available)<br />
                                </div>
                            <?php } else { ?>
                                <div class="col-6 mb-3">													
							        <input type="radio" value="no_facility" name="reasons" id="no_facility" > No facility (not available)<br />
                                </div>
                            <?php } ?>
								
							<?php if ($reasons == "others") { ?>
								<div class="col-6 mb-3">
							        <input type="radio" value="others" name="reasons" id="others" checked> Others (please specify) <input type="text" name="genetic_mutation_noreason_detail" value="<?php echo $genetic_mutation_noreason_detail; ?>" size="15"><br />
                                </div>
                            <?php } else { ?>
                                <div class="col-6 mb-3">
                                    <input type="radio" value="others" name="reasons" id="others" > Others (please specify) 
                                    <input type="text" name="genetic_mutation_noreason_detail" size="15"><br />
                                </div>
                            <?php } ?>
                        </label>     
                    </div>        
                </div>
                </div>
                </div>
                <!-- baru5 end -->
                <hr class="mb-3">
                
                <!-- baru6 -->
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <p class="txt-title2">6. Family History</p>
                    </div>
                </div>

                <div class="row col-md-12">           
                <div class="row ">
                <div class="col-md-12 mb-3">
                    <div class="col form-group">
                        <?php if ($first_degree == 1) { ?>
                            <label class="but-radio">First Degree Relative (Parent, Sibling, Child)<input type="checkbox" value="1" name="first_degree" id="first_degree" checked><span class="checkmark"></span></label>
                        <?php } else { ?>
                            <label class="but-radio">First Degree Relative (Parent, Sibling, Child)<input type="checkbox" value="1" name="first_degree" id="first_degree"><span class="checkmark"></span></label>
                        <?php } ?>
                    </div>
                <div id = "first_degree_data">

            

                <!-- <div class="col-md-12">
                    <label for="first_degree_age">Age:</label>
                    <input class="form-control" name="first_degree_age" id="first_degree_age" type="number" step="1" value="<?php echo $first_degree_age; ?>">
                </div> -->

                           

                <div class="row">
                <div class="col-md-12 ">
                <div class="but-radio-group">
                    <label for="first_degree_cad" class="col col-form-label">CAD</label>
                <div class="col form-group mb-3 row">

                    <?php if ($first_degree_premature_cad == "yes") { ?>
                        <div class="col-4 mb-3">
                            <label class="but-radio">Yes<input type="radio" value="yes" class ="first_degree_cad" name="first_degree_premature_cad" id="first_degree_cad" checked="checked" ><span class="checkmark"></span></label>
                        </div>
                    <?php } else { ?>
                        <div class="col-4 mb-3">
                            <label class="but-radio">Yes<input type="radio" value="yes" class ="first_degree_cad" name="first_degree_premature_cad" id="first_degree_cad" ><span class="checkmark"></span></label>
                        </div>
                    <?php } ?>
                    
                    <?php if ($first_degree_premature_cad == "no") { ?>
                        <div class="col-4 mb-3">
                            <label class="but-radio">No<input type="radio" value="no" class ="first_degree_cad" name="first_degree_premature_cad" id="first_degree_cad" checked="checked"><span class="checkmark"></span></label>
                        </div>
                    <?php } else { ?>
                        <div class="col-4 mb-3">
                            <label class="but-radio">No<input type="radio" value="no" class ="first_degree_cad" name="first_degree_premature_cad" id="first_degree_cad"><span class="checkmark"></span></label>
                        </div>
                    <?php } ?>

                    <?php if ($first_degree_premature_cad == "unknown") { ?>
                        <div class="col-4 mb-3">
                            <label class="but-radio">Don't know<input type="radio" value="unknown" class ="first_degree_cad" name="first_degree_premature_cad" id="first_degree_cad" checked="checked"><span class="checkmark"></span></label>
                        </div>
                    <?php } else { ?>
                        <div class="col-4 mb-3">
                            <label class="but-radio">Don't know<input type="radio" value="unknown" class ="first_degree_cad" name="first_degree_premature_cad" id="first_degree_cad"><span class="checkmark"></span></label>
                        </div>
                    <?php } ?>
                </div>

	            <div class="col-md-12" id="autoUpdate_fdcad" class="autoUpdate_fdcad">
                    <!--<label class="col-form-label" id ="fdpremature_cad" for="fdpremature_cad">Premature CAD:</label>-->
                    <!--<input type="hidden" value="first_degree_premature_cad" name="fdpremature_cad" id="fdpremature_cad" checked>-->
                    <div class="col form-group mb-3 row">
                        <label class="col-md-4 col-form-label" id ="first_degree_age" for="first_degree_age" >Age at first diagnosed:</label>
                        <input class="col-md-4" type="number"  step="1" value="<?php echo $first_degree_age; ?>" class="form-control" name="first_degree_age" id="first_degree_age"> 
                    </div>
                    
					
				<div class="col-md-12 mb-3">
                <div class="row">
                    <div class="col-md-4 col-form-label">
                        <label for="first_degree_gender">Gender:</label>
                    </div>
                        <?php if ($first_degree_gender == 1) { ?>
                            <label class="but-radio">Male <input type="radio" value="1"  name="first_degree_gender" id="first_degree_gender" checked="checked" ><span class="checkmark"></span></label>
                            <label class="but-radio">Female<input type="radio" value="2"  name="first_degree_gender" id="first_degree_gender"><span class="checkmark"></span></label>
                        <?php } else if ($first_degree_gender == 2) { ?>
                            <label class="but-radio">Male <input type="radio" value="1"  name="first_degree_gender" id="first_degree_gender" ><span class="checkmark"></span></label>
                            <label class="but-radio">Female<input type="radio" value="2"  name="first_degree_gender" id="first_degree_gender" checked="checked"><span class="checkmark"></span></label>
                        <?php } else { ?>
                            <label class="but-radio">Male <input type="radio" value="1"  name="first_degree_gender" id="first_degree_gender" ><span class="checkmark"></span></label>
                            <label class="but-radio">Female<input type="radio" value="2"  name="first_degree_gender" id="first_degree_gender"><span class="checkmark"></span></label>
                        <?php } ?>
                </div>
                </div> 
					</div>
				    </div>
				    </div>
					</div>

 <div class="row">
                <div class="col-md-12 ">
				 <div class="but-radio-group">
				<label class="col-md-3 col-3 col-form-label" for="first_degree_hyperlipidaemia"> LDL level:</label>
               
			   
			    <div class="col form-group mb-3 row">
				 <div class="col-md-12">
                <label class="col col-form-label"> Adult (>=18 years) with LDL>4.9(mmol/L):</label>
				</div>
				 
				 
                    <div class="col form-group mb-2 row">
                        <?php if ($first_degree_hyperlipidaemia == "yes") { ?>
						
                            <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="first_degree_hyperlipidaemia" id="first_degree_hyperlipidaemia" checked="checked" ><span class="checkmark"></span></label>                               
                            </div>
                        <?php } else { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="first_degree_hyperlipidaemia" id="first_degree_hyperlipidaemia" ><span class="checkmark"></span></label>
                                
                            </div>
                        <?php } ?>
                        
                        <?php if ($first_degree_hyperlipidaemia == "no") { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="first_degree_hyperlipidaemia" id="first_degree_hyperlipidaemia" checked="checked"><span class="checkmark"></span></label>
                            </div>
                        <?php } else { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="first_degree_hyperlipidaemia" id="first_degree_hyperlipidaemia"><span class="checkmark"></span></label>
                            </div>
                        <?php } ?>
						
						   <?php if ($first_degree_hyperlipidaemia == "unknown") { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Don't know<input type="radio" value="unknown" name="first_degree_hyperlipidaemia" id="first_degree_hyperlipidaemia" checked="checked"><span class="checkmark"></span></label>
                            </div>
                        <?php } else { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Don't know<input type="radio" value="unknown" name="first_degree_hyperlipidaemia" id="first_degree_hyperlipidaemia"><span class="checkmark"></span></label>
                            </div>
                        <?php } ?>
                    </div>
					</div>
                
				
				
				 <div class="col form-group mb-3 row">
				<div class="col-md-12">
                <label class="col col-form-label"> Children (<18 years) with LDL>3.0(mmol/L):</label>
				</div>
                    <div class="col form-group mb-2 row">
                        <?php if ($first_degree_hyperlipidaemiachild == "yes") { ?>
						
                            <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="first_degree_hyperlipidaemiachild" id="first_degree_hyperlipidaemiachild" checked="checked" ><span class="checkmark"></span></label> 
                               
                            </div>
                        <?php } else { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="first_degree_hyperlipidaemiachild" id="first_degree_hyperlipidaemiachild" ><span class="checkmark"></span></label>
                                
                            </div>
                        <?php } ?>
                        
                        <?php if ($first_degree_hyperlipidaemiachild == "no") { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="first_degree_hyperlipidaemiachild" id="first_degree_hyperlipidaemiachild" checked="checked"><span class="checkmark"></span></label>
                            </div>
                        <?php } else { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="first_degree_hyperlipidaemiachild" id="first_degree_hyperlipidaemiachild"><span class="checkmark"></span></label>
                            </div>
                        <?php } ?>
						
						 <?php if ($first_degree_hyperlipidaemiachild == "unknown") { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Don't know<input type="radio" value="unknown" name="first_degree_hyperlipidaemiachild" id="first_degree_hyperlipidaemiachild" checked="checked"><span class="checkmark"></span></label>
                            </div>
                        <?php } else { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Don't know<input type="radio" value="unknown" name="first_degree_hyperlipidaemiachild" id="first_degree_hyperlipidaemiachild"><span class="checkmark"></span></label>
                            </div>
                        <?php } ?>
                    </div>
                </div>
				</div>
				
				
				</div>
                </div>
				
				 <div class="row">
                <div class="col-md-12 ">
				 <div class="but-radio-group">
				<label class="col-md-3 col-3 col-form-label" for="first_degree_tc_level"> TC level:</label>
               
			   
			    <div class="col form-group mb-3 row">
				 <div class="col-md-12">
                <label class="col col-form-label"> Adult (>=16 years) with TC>7.5(mmol/L):</label>
				</div>
				 
				 
                    <div class="col form-group mb-2 row">
                        <?php if ($first_degree_tc_level == "yes") { ?>
						
                            <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="first_degree_tc_level" id="first_degree_tc_level" checked="checked" ><span class="checkmark"></span></label>                               
                            </div>
                        <?php } else { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="first_degree_tc_level" id="first_degree_tc_level" ><span class="checkmark"></span></label>
                                
                            </div>
                        <?php } ?>
                        
                        <?php if ($first_degree_tc_level == "no") { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="first_degree_tc_level" id="first_degree_tc_level" checked="checked"><span class="checkmark"></span></label>
                            </div>
                        <?php } else { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="first_degree_tc_level" id="first_degree_tc_level"><span class="checkmark"></span></label>
                            </div>
                        <?php } ?>
						
						   <?php if ($first_degree_tc_level == "unknown") { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Don't know<input type="radio" value="unknown" name="first_degree_tc_level" id="first_degree_tc_level" checked="checked"><span class="checkmark"></span></label>
                            </div>
                        <?php } else { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Don't know<input type="radio" value="unknown" name="first_degree_tc_level" id="first_degree_tc_level"><span class="checkmark"></span></label>
                            </div>
                        <?php } ?>
                    </div>
					</div>
                
				
				
				 <div class="col form-group mb-3 row">
				<div class="col-md-12">
                <label class="col col-form-label"> Children (<16 years) with TC>6.7(mmol/L):</label>
				</div>
                    <div class="col form-group mb-2 row">
                        <?php if ($first_degree_tc_levelchild == "yes") { ?>
						
                            <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="first_degree_tc_levelchild" id="first_degree_tc_levelchild" checked="checked" ><span class="checkmark"></span></label> 
                               
                            </div>
                        <?php } else { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="first_degree_tc_levelchild" id="first_degree_tc_levelchild" ><span class="checkmark"></span></label>
                                
                            </div>
                        <?php } ?>
                        
                        <?php if ($first_degree_tc_levelchild == "no") { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="first_degree_tc_levelchild" id="first_degree_tc_levelchild" checked="checked"><span class="checkmark"></span></label>
                            </div>
                        <?php } else { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="first_degree_tc_levelchild" id="first_degree_tc_levelchild"><span class="checkmark"></span></label>
                            </div>
                        <?php } ?>
						
						 <?php if ($first_degree_tc_levelchild == "unknown") { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Don't know<input type="radio" value="unknown" name="first_degree_tc_levelchild" id="first_degree_tc_levelchild" checked="checked"><span class="checkmark"></span></label>
                            </div>
                        <?php } else { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Don't know<input type="radio" value="unknown" name="first_degree_tc_levelchild" id="first_degree_tc_levelchild"><span class="checkmark"></span></label>
                            </div>
                        <?php } ?>
                    </div>
                </div>
				</div>
				
				
				</div>
                </div>
				

            <div class="row">
            <div class="col-md-12 ">
            <div class="but-radio-group">
                <label for="first_degree_tendon_xanthomata" class="col col-form-label">Tendon Xanthomata</label>
                <div class="col form-group mb-3 row">

                    <?php if ($first_degree_tendon_xanthomata == "yes") { ?>
                        <div class="col-4 mb-3">
                            <label class="but-radio">Yes<input type="radio" value="yes" name="first_degree_tendon_xanthomata" id="first_degree_tendon_xanthomata" checked="checked" ><span class="checkmark"></span></label>
                        </div>
                    <?php } else { ?>
                        <div class="col-4 mb-3">
                            <label class="but-radio">Yes<input type="radio" value="yes" name="first_degree_tendon_xanthomata" id="first_degree_tendon_xanthomata" ><span class="checkmark"></span></label>
                        </div>
                    <?php } ?>
                    
                    <?php if ($first_degree_tendon_xanthomata == "no") { ?>
                        <div class="col-4 mb-3">
                            <label class="but-radio">No<input type="radio" value="no" name="first_degree_tendon_xanthomata" id="first_degree_tendon_xanthomata" checked="checked"><span class="checkmark"></span></label>
                        </div>
                    <?php } else { ?>
                        <div class="col-4 mb-3">
                            <label class="but-radio">No<input type="radio" value="no" name="first_degree_tendon_xanthomata" id="first_degree_tendon_xanthomata"><span class="checkmark"></span></label>
                        </div>
                    <?php } ?>

                    <?php if ($first_degree_tendon_xanthomata == "unknown") { ?>
                        <div class="col-4 mb-3">
                            <label class="but-radio">Don't know<input type="radio" value="unknown" name="first_degree_tendon_xanthomata" id="first_degree_tendon_xanthomata" checked="checked"><span class="checkmark"></span></label>
                        </div>
                    <?php } else { ?>
                        <div class="col-4 mb-3">
                            <label class="but-radio">Don't know<input type="radio" value="unknown" name="first_degree_tendon_xanthomata" id="first_degree_tendon_xanthomata"><span class="checkmark"></span></label>
                        </div>
                    <?php } ?>
                </div>
            </div>
		    </div>
            </div>

                <div class="row">
                <div class="col-md-12 ">
                    <div class="but-radio-group">
                        <label for="first_degree_corneal_arcus" class="col col-form-label">Corneal Arcus (First appearance < 45 years)</label>
                        <div class="col form-group mb-3 row">
                            <?php if ($first_degree_corneal_arcus == "yes") { ?>
                                <div class="col-4 mb-3">
                                    <label class="but-radio">Yes<input type="radio" value="yes" name="first_degree_corneal_arcus" id="first_degree_corneal_arcus" checked="checked" ><span class="checkmark"></span></label>
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                    <label class="but-radio">Yes<input type="radio" value="yes" name="first_degree_corneal_arcus" id="first_degree_corneal_arcus" ><span class="checkmark"></span></label>
                                </div>
                            <?php } ?>
                            
                            <?php if ($first_degree_corneal_arcus == "no") { ?>
                                <div class="col-4 mb-3">
                                    <label class="but-radio">No<input type="radio" value="no" name="first_degree_corneal_arcus" id="first_degree_corneal_arcus" checked="checked"><span class="checkmark"></span></label>
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                    <label class="but-radio">No<input type="radio" value="no" name="first_degree_corneal_arcus" id="first_degree_corneal_arcus"><span class="checkmark"></span></label>
                                </div>                            
                            <?php } ?>

                            <?php if ($first_degree_corneal_arcus == "unknown") { ?>
                                <div class="col-4 mb-3">
                                    <label class="but-radio">Don't know<input type="radio" value="unknown" name="first_degree_corneal_arcus" id="first_degree_corneal_arcus" checked="checked"><span class="checkmark"></span></label>
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                    <label class="but-radio">Don't know<input type="radio" value="unknown" name="first_degree_corneal_arcus" id="first_degree_corneal_arcus"><span class="checkmark"></span></label>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                </div>


                <div class="row">
                <div class="col-md-12 ">
                    <div class="but-radio-group">
                        <label for="first_degree_fh" class="col col-form-label">Confirmed FH</label>
                    <div class="col form-group mb-3 row">
                        <?php if ($first_degree_fh == "yes") { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Yes <input type="radio" value="yes" name="first_degree_fh" id="first_degree_fh" checked="checked" ><span class="checkmark"></span></label>
                            </div>
                        <?php } else { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Yes <input type="radio" value="yes" name="first_degree_fh" id="first_degree_fh" ><span class="checkmark"></span></label>
                            </div>
                        <?php } ?>
                        
                        <?php if ($first_degree_fh == "no") { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="first_degree_fh" id="first_degree_fh" checked="checked"><span class="checkmark"></span></label>
                            </div>
                        <?php } else { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="first_degree_fh" id="first_degree_fh"><span class="checkmark"></span></label>
                            </div>
                        <?php } ?>

                        <?php if ($first_degree_fh == "unknown") { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Don't know<input type="radio" value="unknown" name="first_degree_fh" id="first_degree_fh" checked="checked"><span class="checkmark"></span></label>
                            </div>
                        <?php } else { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Don't know<input type="radio" value="unknown" name="first_degree_fh" id="first_degree_fh"><span class="checkmark"></span></label>
                            </div>
                        <?php } ?>
                    </div>
                    </div>
                </div>
                </div>		
                </div>


                <div class="row">
                <div class="col-md-12">
                    <div class="col form-group">
                        <?php if ($second_degree == 1) { ?>
                            <label class="but-radio">Second Degree Relative (Grandparent, Grandchild, Nephew, Niece)<input type="checkbox" value="1" name="second_degree" id="second_degree" checked><span class="checkmark"></span></label>
                        <?php } else { ?>
                            <label class="but-radio">Second Degree Relative (Grandparent, Grandchild, Nephew, Niece)<input type="checkbox" value="1" name="second_degree" id="second_degree"><span class="checkmark"></span></label>
                        <?php } ?>
                    </div>
          
		  
		        <div id = "second_degree_data" class="col-md-12 mb-3">
                
				
				<div class="row">
                <div class="col-md-12 ">
                    <div class="but-radio-group">
                        <label for="second_degree_cad" class="col col-form-label">CAD</label>
                    <div class="col form-group mb-3 row">
                        <?php if ($second_degree_premature_cad == "yes") { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" class ="second_degree_cad" name="second_degree_premature_cad" id="second_degree_cad" checked="checked" ><span class="checkmark"></span></label>
                            </div>
                        <?php } else { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" class ="second_degree_cad" name="second_degree_premature_cad" id="second_degree_cad" ><span class="checkmark"></span></label>
                            </div>
                        <?php } ?>
                        
                        <?php if ($second_degree_premature_cad == "no") { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" class ="second_degree_cad" name="second_degree_premature_cad" id="second_degree_cad" checked="checked"><span class="checkmark"></span></label>
                            </div>
                        <?php } else { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" class ="second_degree_cad" name="second_degree_premature_cad" id="second_degree_cad"><span class="checkmark"></span></label>
                            </div>
                        <?php } ?>

                        <?php if ($second_degree_premature_cad == "unknown") { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Don't know<input type="radio" value="unknown" class ="second_degree_cad" name="second_degree_premature_cad" id="second_degree_cad" checked="checked"><span class="checkmark"></span></label>
                            </div>
                        <?php } else { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Don't know<input type="radio" value="unknown" class ="second_degree_cad" name="second_degree_premature_cad" id="second_degree_cad"><span class="checkmark"></span></label>
                            </div>
                        <?php } ?>
                    </div>
                


				
				    <div class="col-md-12" id="autoUpdate_sdcad" class="autoUpdate_sdcad">
                    <!--<label class="col-form-label" id ="fdpremature_cad" for="fdpremature_cad">Premature CAD:</label>-->
                    <!--<input type="hidden" value="first_degree_premature_cad" name="fdpremature_cad" id="fdpremature_cad" checked>-->
                    <div class="col form-group mb-3 row">
                        <label class="col-md-4 col-form-label" id ="second_degree_age" for="second_degree_age" >Age at first diagnosed:</label>
                        <input class="col-md-4" type="number"  step="1" value="<?php echo $second_degree_age; ?>" class="form-control" name="second_degree_age" id="second_degree_age"> 
                    </div>
                    
					
				<div class="col-md-12 mb-3">
                <div class="row">
                    <div class="col-md-4 col-form-label">
                        <label for="second_degree_gender">Gender:</label>
                    </div>
                        <?php if ($second_degree_gender == 1) { ?>
                            <label class="but-radio">Male <input type="radio" value="1"  name="second_degree_gender" id="second_degree_gender" checked="checked" ><span class="checkmark"></span></label>
                            <label class="but-radio">Female<input type="radio" value="2"  name="second_degree_gender" id="second_degree_gender"><span class="checkmark"></span></label>
                        <?php } else if ($second_degree_gender == 2) { ?>
                            <label class="but-radio">Male <input type="radio" value="1"  name="second_degree_gender" id="second_degree_gender" ><span class="checkmark"></span></label>
                            <label class="but-radio">Female<input type="radio" value="2"  name="second_degree_gender" id="second_degree_gender" checked="checked"><span class="checkmark"></span></label>
                        <?php } else { ?>
                            <label class="but-radio">Male <input type="radio" value="1"  name="second_degree_gender" id="second_degree_gender" ><span class="checkmark"></span></label>
                            <label class="but-radio">Female<input type="radio" value="2"  name="second_degree_gender" id="second_degree_gender"><span class="checkmark"></span></label>
                        <?php } ?>
                </div>
                </div> 
					</div>
				
				
                	</div>
                </div>
                </div>
				
				
				
				
				 <div class="row">
                <div class="col-md-12 ">
				 <div class="but-radio-group">
				<label class="col-md-3 col-3 col-form-label" for="second_degree_tc_level"> TC level:</label>
               
			   
			    <div class="col form-group mb-3 row">
				 <div class="col-md-12">
                <label class="col col-form-label"> Adult (>=16 years) with TC>7.5(mmol/L):</label>
				</div>
				 
				 
                    <div class="col form-group mb-2 row">
                        <?php if ($second_degree_tc_level == "yes") { ?>
						
                            <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="second_degree_tc_level" id="second_degree_tc_level" checked="checked" ><span class="checkmark"></span></label>                               
                            </div>
                        <?php } else { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="second_degree_tc_level" id="second_degree_tc_level" ><span class="checkmark"></span></label>
                                
                            </div>
                        <?php } ?>
                        
                        <?php if ($second_degree_tc_level == "no") { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="second_degree_tc_level" id="second_degree_tc_level" checked="checked"><span class="checkmark"></span></label>
                            </div>
                        <?php } else { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="second_degree_tc_level" id="second_degree_tc_level"><span class="checkmark"></span></label>
                            </div>
                        <?php } ?>
						
						   <?php if ($second_degree_tc_level == "unknown") { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Don't know<input type="radio" value="unknown" name="second_degree_tc_level" id="second_degree_tc_level" checked="checked"><span class="checkmark"></span></label>
                            </div>
                        <?php } else { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Don't know<input type="radio" value="unknown" name="second_degree_tc_level" id="second_degree_tc_level"><span class="checkmark"></span></label>
                            </div>
                        <?php } ?>
                    </div>
					</div>
                
				
				
				 <div class="col form-group mb-3 row">
				<div class="col-md-12">
                <label class="col col-form-label"> Children (<16 years) with TC>6.7(mmol/L):</label>
				</div>
                    <div class="col form-group mb-2 row">
                        <?php if ($second_degree_tc_levelchild == "yes") { ?>
						
                            <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="second_degree_tc_levelchild" id="second_degree_tc_levelchild" checked="checked" ><span class="checkmark"></span></label> 
                               
                            </div>
                        <?php } else { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="second_degree_tc_levelchild" id="second_degree_tc_levelchild" ><span class="checkmark"></span></label>
                                
                            </div>
                        <?php } ?>
                        
                        <?php if ($second_degree_tc_levelchild == "no") { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="second_degree_tc_levelchild" id="second_degree_tc_levelchild" checked="checked"><span class="checkmark"></span></label>
                            </div>
                        <?php } else { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="second_degree_tc_levelchild" id="second_degree_tc_levelchild"><span class="checkmark"></span></label>
                            </div>
                        <?php } ?>
						
						 <?php if ($second_degree_tc_levelchild == "unknown") { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Don't know<input type="radio" value="unknown" name="second_degree_tc_levelchild" id="second_degree_tc_levelchild" checked="checked"><span class="checkmark"></span></label>
                            </div>
                        <?php } else { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Don't know<input type="radio" value="unknown" name="second_degree_tc_levelchild" id="second_degree_tc_levelchild"><span class="checkmark"></span></label>
                            </div>
                        <?php } ?>
                    </div>
                </div>
				</div>
				
				
				</div>
                </div>
				
				
		        
                
                


                <div class="row">
                <div class="col-md-12 ">
                    <div class="but-radio-group">
                        <label for="second_degree_tendon_xanthomata" class="col col-form-label">Tendon Xanthomata</label>
                    <div class="col form-group mb-3 row">
                        <?php if ($second_degree_tendon_xanthomata == "yes") { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="second_degree_tendon_xanthomata" id="second_degree_tendon_xanthomata" checked="checked" ><span class="checkmark"></span></label>
                            </div>
                        <?php } else { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="second_degree_tendon_xanthomata" id="second_degree_tendon_xanthomata" ><span class="checkmark"></span></label>
                            </div>
                        <?php } ?>
                        
                        <?php if ($second_degree_tendon_xanthomata == "no") { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="second_degree_tendon_xanthomata" id="second_degree_tendon_xanthomata" checked="checked"><span class="checkmark"></span></label>
                            </div>
                        <?php } else { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="second_degree_tendon_xanthomata" id="second_degree_tendon_xanthomata"><span class="checkmark"></span></label>
                            </div>
                        <?php } ?>

                        <?php if ($second_degree_tendon_xanthomata == "unknown") { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Don't know<input type="radio" value="unknown" name="second_degree_tendon_xanthomata" id="second_degree_tendon_xanthomata" checked="checked"><span class="checkmark"></span></label>
                            </div>
                        <?php } else { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Don't know<input type="radio" value="unknown" name="second_degree_tendon_xanthomata" id="second_degree_tendon_xanthomata"><span class="checkmark"></span></label>
                            </div>
                        <?php } ?>
                    </div>
                    </div>
                </div>
                </div>

                <div class="row">
                <div class="col-md-12 ">
                    <div class="but-radio-group">
                        <label for="second_degree_fh" class="col col-form-label">Confirmed FH</label>
                        <div class="col form-group mb-3 row">

                            <?php if ($second_degree_fh == "yes") { ?>
                                <div class="col-4 mb-3">
                                    <label class="but-radio">Yes <input type="radio" value="yes" name="second_degree_fh" id="second_degree_fh" checked="checked" ><span class="checkmark"></span></label>
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                    <label class="but-radio">Yes <input type="radio" value="yes" name="second_degree_fh" id="second_degree_fh" ><span class="checkmark"></span></label>
                                </div>
                            <?php } ?>
                            
                            <?php if ($second_degree_fh == "no") { ?>
                                <div class="col-4 mb-3">
                                    <label class="but-radio">No<input type="radio" value="no" name="second_degree_fh" id="second_degree_fh" checked="checked"><span class="checkmark"></span></label>
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                    <label class="but-radio">No<input type="radio" value="no" name="second_degree_fh" id="second_degree_fh"><span class="checkmark"></span></label>
                                </div>
                            <?php } ?>

                            <?php if ($second_degree_fh == "unknown") { ?>
                                <div class="col-4 mb-3">
                                    <label class="but-radio">Don't know<input type="radio" value="unknown" name="second_degree_fh" id="second_degree_fh" checked="checked"><span class="checkmark"></span></label>
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                    <label class="but-radio">Don't know<input type="radio" value="unknown" name="second_degree_fh" id="second_degree_fh"><span class="checkmark"></span></label>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                </div> 						   
                </div>
                </div>
				</div>


                <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="col form-group">
                        <?php if ($third_degree == 1) { ?>
                            <label class="but-radio">Third Degree Relative (Great-grandparent, Great-grandchild, Uncle, Aunt, Cousin)<input type="checkbox" value="1" name="third_degree" id="third_degree" checked><span class="checkmark"></span></label>
                        <?php } else { ?>
                            <label class="but-radio">Third Degree Relative (Great-grandparent, Great-grandchild, Uncle, Aunt, Cousin)<input type="checkbox" value="1" name="third_degree" id="third_degree"><span class="checkmark"></span></label>
                        <?php } ?>
                    </div>
                
                <div id = "third_degree_data">
                
                <div class="row">
                <div class="col-md-12 ">
                    <div class="but-radio-group">
                    <label for="third_degree_fh" class="col col-form-label">Confirmed FH</label>
                    <div class="col form-group mb-3 row">

                        <?php if ($third_degree_fh == "yes") { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Yes <input type="radio" value="yes" name="third_degree_fh" id="third_degree_fh" checked="checked" ><span class="checkmark"></span></label>
                            </div>
                        <?php } else { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Yes <input type="radio" value="yes" name="third_degree_fh" id="third_degree_fh" ><span class="checkmark"></span></label>
                            </div>
                        <?php } ?>
                        
                        <?php if ($third_degree_fh == "no") { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="third_degree_fh" id="third_degree_fh" checked="checked"><span class="checkmark"></span></label>
                            </div>
                        <?php } else { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="third_degree_fh" id="third_degree_fh"><span class="checkmark"></span></label>
                            </div>
                        <?php } ?>

                        <?php if ($third_degree_fh == "unknown") { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Don't know<input type="radio" value="unknown" name="third_degree_fh" id="third_degree_fh" checked="checked"><span class="checkmark"></span></label>
                            </div>
                        <?php } else { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Don't know<input type="radio" value="unknown" name="third_degree_fh" id="third_degree_fh"><span class="checkmark"></span></label>
                            </div>
                        <?php } ?>
                    </div>
                    </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>         
                </div>
                </div>      

                <hr class="mb-3">
                
                <div class="row">
                    <div class="col-md-1 col-2">
                        <button type="button" onClick="window.location.href='patient-dashboard.php'"  class="btn btn-dark btn-block but-custom2"><i class="fa fa-long-arrow-left fa-lg"></i></button>
                    </div>
                    <div class="col-md-5 col-10">
                        <button type="submit" class="btn btn-success btn-block but-color-none">Submit<i class="fa fa-paper-plane fa-lg" aria-hidden="true"></i></button>
                    </div>
                </div>
                <!-- baru6 end -->

            </div>
        </form>
        </div>
    </div>
</div>
@section('javascript')
<script type="text/javascript">

function onClickHandler(checkbox){
	if (checkbox.checked){
		document.getElementById("ldlr").disabled = true;
		document.getElementById("apob").disabled = true;
		document.getElementById("pcsk9").disabled = true;
		document.getElementById("other_fh_mutations").disabled = true;
		document.getElementById("dontknow_geneticmutation").disabled = true;

	}
    //var chk=parseInt(document.getElementById("patientpretclevel").value);
	//alert(chk);
}

var $contactForm = $('#registration-form');

function calculateAge(){
    var dt = new Date();
    var year = document.getElementById("patientyearoffirstseen");
    var age = document.getElementById("patientageatfirstseen");
    var nricyear = parseInt((document.getElementById("patientnric").value).substring(0,2));
    var nricage = document.getElementById("patientage");
    if (nricyear > 19) {    
        age.value = parseInt(year.value) - 1900 - nricyear;
        nricage.value = parseInt(dt.getYear()) - nricyear;
    }
    else {
        age.value = parseInt(year.value) - 2000 - nricyear;
        nricage.value = 1900 + parseInt(dt.getYear()) - 2000 - parseInt(nricyear);
    }

    var gender = $("input[name=patientgender]:checked").val();

    if (age.value < 55 && gender == 1) {
        var radio = document.getElementsByName("premature_cad");
        var len = radio.length;
        for(var i=0;i<len;i++)
        {
           radio[i].disabled=true;
        }

        var radio = document.getElementsByName("premature_cerebral");
        var len = radio.length;
        for(var i=0;i<len;i++)
        {
           radio[i].disabled=true;
        }

        var radio = document.getElementsByName("pvd");
        var len = radio.length;
        for(var i=0;i<len;i++)
        {
           radio[i].disabled=true;
        }
    }
    else if (age.value < 60 && gender == 2) {
        var radio = document.getElementsByName("premature_cad");
        var len = radio.length;
        for(var i=0;i<len;i++)
        {
           radio[i].disabled=true;
        }

        var radio = document.getElementsByName("premature_cerebral");
        var len = radio.length;
        for(var i=0;i<len;i++)
        {
           radio[i].disabled=true;
        }

        var radio = document.getElementsByName("pvd");
        var len = radio.length;
        for(var i=0;i<len;i++)
        {
           radio[i].disabled=true;
        }
    }
    else {
        var radio = document.getElementsByName("premature_cad");
        var len = radio.length;
        for(var i=0;i<len;i++)
        {
           radio[i].disabled=false;
        }

        var radio = document.getElementsByName("premature_cerebral");
        var len = radio.length;
        for(var i=0;i<len;i++)
        {
           radio[i].disabled=false;
        }

        var radio = document.getElementsByName("pvd");
        var len = radio.length;
        for(var i=0;i<len;i++)
        {
           radio[i].disabled=false;
        }
    }


    // if (age.value >= 45) {
    //     document.getElementById("corneal_arcus").disabled = true;   ;
    // }
    // else {
    //     document.getElementById("corneal_arcus").disabled = false;   
    // }
}   

function calculateAdjustedLDLC() {
	var select = document.getElementById("ldlcadjustment");
    var adjust_value = (select.options[select.selectedIndex].value).split('-')[0];
    var patientldlclevel = document.getElementById("patientldlclevel").value;

    var adjust_ldlclevel = patientldlclevel * adjust_value;
    var adjustedldlclevel = document.getElementById("adjust_ldlclevel");
    adjustedldlclevel.value = (Math.round(adjust_ldlclevel * 10) / 10).toFixed(1);
}

var container = document.getElementsByClassName("nric")[0];
container.onkeyup = function(e) {
  var target = e.srcElement;
  var maxLength = parseInt(target.attributes["maxlength"].value, 10);
  var myLength = target.value.length;
  if (myLength >= maxLength) {
    var next = target;
    while (next = next.nextElementSibling) {
      if (next == null)
        break;
      if (next.tagName.toLowerCase() == "input") {
        next.focus();
        break;
      }
    }
  }
}

</script>


<script type="text/javascript">

    $('.cad').on('click', function(){
      //  alert ($(this).val());
        if($(this).val() == 'yes') {
            $('#autoUpdate_cad').fadeIn('fast');
            $('#autoUpdate_cad_no').fadeOut('fast');
        }else if($(this).val() == 'no') {
            $('#autoUpdate_cad_no').fadeIn('fast');
            $('#autoUpdate_cad').fadeOut('fast');
        }else {
            $('#autoUpdate_cad').fadeOut('fast');
            $('#autoUpdate_cad_no').fadeOut('fast');
        }
    });
	
	$('.cadmdfirstseen').on('click', function(){
        //alert ($(this).val());
        if($(this).val() == 'yes') {
            $('#autoUpdate_cadmdseen').fadeIn('fast');
        }else if($(this).val() == 'no') {
            $('#autoUpdate_cadmdseen').fadeOut('fast');
        }else {
            $('#autoUpdate_cadmdseen').fadeOut('fast');
            
        }
    });
	$('.fdcadmdfirstseen').on('click', function(){
        //alert ($(this).val());
        if($(this).val() == 'yes') {
            $('#autoUpdate_fdcadmdseen').fadeIn('fast');
			
        }else if($(this).val() == 'no') {
            $('#autoUpdate_fdcadmdseen').fadeOut('fast');
        }else {
            $('#autoUpdate_fdcadmdseen').fadeOut('fast');
            
        }
    });

	$('.fdcadmdfirstseenno').on('click', function(){
        //alert ($(this).val());
        if($(this).val() == 'yes') {
            $('#autoUpdate_fdcadmdseenno').fadeIn('fast');
        }else if($(this).val() == 'no') {
            $('#autoUpdate_fdcadmdseenno').fadeOut('fast');
        }else {
            $('#autoUpdate_fdcadmdseenno').fadeOut('fast');
            
        }
    });
	$('.cadmdfirstseenno').on('click', function(){
        //alert ($(this).val());
        if($(this).val() == 'yes') {
            $('#autoUpdate_cadmdseenno').fadeIn('fast');
        }else if($(this).val() == 'no') {
            $('#autoUpdate_cadmdseenno').fadeOut('fast');
        }else {
            $('#autoUpdate_cadmdseenno').fadeOut('fast');
            
        }
    });
	$('.sdcadmdfirstseen').on('click', function(){
        //alert ($(this).val());
        if($(this).val() == 'yes') {
            $('#autoUpdate_sdcadmdseen').fadeIn('fast');
        }else if($(this).val() == 'no') {
            $('#autoUpdate_sdcadmdseen').fadeOut('fast');
        }else {
            $('#autoUpdate_sdcadmdseen').fadeOut('fast');
            
        }
    });

	$('.sdcadmdfirstseenno').on('click', function(){
        //alert ($(this).val());
        if($(this).val() == 'yes') {
            $('#autoUpdate_sdcadmdseenno').fadeIn('fast');
        }else if($(this).val() == 'no') {
            $('#autoUpdate_sdcadmdseenno').fadeOut('fast');
        }else {
            $('#autoUpdate_sdcadmdseenno').fadeOut('fast');
            
        }
    });
	
	$('.first_degree_cad').on('click', function(){
        //alert ($(this).val());
        if($(this).val() == 'yes') {
            $('#autoUpdate_fdcad').fadeIn('fast');
            $('#autoUpdate_fdcad_no').fadeOut('fast');
        }else if($(this).val() == 'no') {
            $('#autoUpdate_fdcad_no').fadeIn('fast');
            $('#autoUpdate_fdcad').fadeOut('fast');
        }else {
            $('#autoUpdate_fdcad').fadeOut('fast');
            $('#autoUpdate_fdcad_no').fadeOut('fast');
        }
    });

$('.second_degree_cad').on('click', function(){
        //alert ($(this).val());
        if($(this).val() == 'yes') {
            $('#autoUpdate_sdcad').fadeIn('fast');
            $('#autoUpdate_sdcad_no').fadeOut('fast');
        }else if($(this).val() == 'no') {
            $('#autoUpdate_sdcad_no').fadeIn('fast');
            $('#autoUpdate_sdcad').fadeOut('fast');
        }else {
            $('#autoUpdate_sdcad').fadeOut('fast');
            $('#autoUpdate_sdcad_no').fadeOut('fast');
        }
    });
    $('.premature_cerebral').on('click', function(){
        //alert ($(this).val());
        if($(this).val() == 'yes') {
            $('#autoUpdate_stroke').fadeIn('fast');

        }else {
            $('#autoUpdate_stroke').fadeOut('fast');

        }
    });

    $('.pvd').on('click', function(){
        //alert ($(this).val());
        if($(this).val() == 'yes') {
            $('#autoUpdate_pvd').fadeIn('fast');

        }else {
            $('#autoUpdate_pvd').fadeOut('fast');

        }
    });

    $('.statin_name').on('click', function(){
        //alert ($(this).val());
        if($(this).val() == '1') {
            $('#autoUpdate').fadeIn('fast');
           // $('#adjust_ldlclabel').fadeIn('fast');
         //   $('#preldlc_label').fadeIn('fast');

        }else if($(this).val() == '0'){
            $('#autoUpdate').fadeOut('fast');
           // $('#adjust_ldlclabel').fadeOut('fast');
          //  $('#preldlc_label').fadeOut('fast');

        }
    });
	
	$('.genetic_mutation').on('click', function(){
        //alert ($(this).val());
        if($(this).val() == 'yes') {
            $('#autoUpdate_gm').fadeIn('fast');
            $('#autoUpdate_gmn').fadeOut('fast');

        }else if($(this).val() == 'no'){
			$('#autoUpdate_gmn').fadeIn('fast');
            $('#autoUpdate_gm').fadeOut('fast');
         
        }else if($(this).val() == 'pending'){
			$('#autoUpdate_gmn').fadeOut('fast');
            $('#autoUpdate_gm').fadeOut('fast');
           

        }
    });

		$("input[name='cadDM']").on('change', function(){
					if($(this).val() == 'yes') {
						$("#yesDiabetes").show();
						$("#proteinura").prop("checked",false);
						$("#tod").prop("checked",false);
					}else if($(this).val() == 'no'){
						$("#yesDiabetes").hide();
						$("#proteinura").prop("checked",false);
						$("#tod").prop("checked",false);
					}
				});

			
				
				$("input[name='cadSmoking']").on('change', function(){
					if($(this).val() == 'yes') {
						$("#noSmoking").hide();
						$("input[name='cadSmokingNo']").prop("required",false);
						$("#yesSmoking").show();
						$("input[name='cadSmokingNo']").prop("checked",false);
						$("#averageStick").val("");
						$("#averageStick").prop("required",true);
						$("#activeSmokingM").val("");
						$("#activeSmokingM").prop("required",true);
						$("#activeSmokingY").val("");
						$("#activeSmokingY").prop("required",true);
					}else if($(this).val() == 'no'){
						$("#noSmoking").show();
						$("input[name='cadSmokingNo']").prop("required",true);
						$("#yesSmoking").hide();
						$("input[name='cadSmokingNo']").prop("checked",false);
						$("#averageStick").val("");
						$("#averageStick").prop("required",false);
						$("#activeSmokingM").val("");
						$("#activeSmokingM").prop("required",false);
						$("#activeSmokingY").val("");
						$("#activeSmokingY").prop("required",false);
					}
				});
						
				$("input[name='cadSmokingNo']").on('change', function(){
					if($(this).val() == 'yes') {
						$("#yesSmoking").show();
						$("#averageStick").val("");
						$("#averageStick").prop("required",true);
						$("#activeSmokingM").val("");
						$("#activeSmokingM").prop("required",true);
						$("#activeSmokingY").val("");
						$("#activeSmokingY").prop("required",true);
					}else if($(this).val() == 'no'){
						$("#yesSmoking").hide();
						$("#averageStick").val("");
						$("#averageStick").prop("required",false);
						$("#activeSmokingM").val("");
						$("#activeSmokingM").prop("required",false);
						$("#activeSmokingY").val("");
						$("#activeSmokingY").prop("required",false);
					}
				});
				
				$("input[name='activeSmokingM']").on('change', function(){
					if($("#activeSmokingY").val() == '' || $("#activeSmokingY").val() == '0'){
						$("#activeSmokingY").val("0");
						if($("#activeSmokingM").val() == '0' || $("#smokeMonth").val() == '')
							$("#activeSmokingM").val("1");
					}
				});
				
				$("input[name='activeSmokingY']").on('change', function(){
					if($("#activeSmokingY").val() == '0' || $("#activeSmokingY").val() == ''){
						$("#activeSmokingM").val("1");
						$("#activeSmokingY").val("0");
					}else if($("#activeSmokingM").val() == '0' || $("#activeSmokingM").val() == '')
						$("#activeSmokingM").val("0");
				});			
				

    $(document).ready(function(){

        var select = document.getElementById("ldlcadjustment");
        var adjust_value = (select.options[select.selectedIndex].value).split('-')[0];
        var patientldlclevel = document.getElementById("patientldlclevel").value;

        var adjust_ldlclevel = patientldlclevel * adjust_value;
        var adjustedldlclevel = document.getElementById("adjust_ldlclevel");
        adjustedldlclevel.value = (Math.round(adjust_ldlclevel * 10) / 10).toFixed(1);
		//var pretreatment = $("input:radio[name='statin_name']:checked").val();
		
		//if (pretreatment==0){
       // var patientpreldlclevel = document.getElementById("patientpreldlclevel"); //new
       // patientpreldlclevel.value = (Math.round(adjust_ldlclevel * 10) / 10).toFixed(1); //new
		//}
	
        var cad = $("input:radio[name='cad']:checked").val();
		
		var fdcad = $("input:radio[name='first_degree_premature_cad']:checked").val();
		var sdcad = $("input:radio[name='second_degree_premature_cad']:checked").val();
		
        var stroke = $("input:radio[name='premature_cerebral']:checked").val();
        //alert(stroke);
        var pvd = $("input:radio[name='pvd']:checked").val();
		var gm = $("input:radio[name='genetic_mutation']:checked").val();
		//alert(gm);
		var cadmdfirstseen = $("input:radio[name='cadmdfirstseen']:checked").val();
		var cadmdfirstseenno = $("input:radio[name='cadmdfirstseenno']:checked").val();
		//alert(cadmdfirstseen);
		var fdcadmdfirstseen = $("input:radio[name='fdcadmdfirstseen']:checked").val();
		var fdcadmdfirstseenno = $("input:radio[name='fdcadmdfirstseenno']:checked").val();
		var sdcadmdfirstseen = $("input:radio[name='sdcadmdfirstseen']:checked").val();
		var sdcadmdfirstseenno = $("input:radio[name='sdcadmdfirstseenno']:checked").val();
		
        if (document.getElementById("statin_name").checked) {
            $('#autoUpdate').fadeIn('fast');
            //$('#adjust_ldlclabel').fadeIn('fast');
        } else {
            $('#autoUpdate').fadeOut('fast');
           // $('#adjust_ldlclabel').fadeOut('fast');
        }

        if (cad=='yes') {
            $('#autoUpdate_cad').fadeIn('fast');
            $('#autoUpdate_cad_no').fadeOut('fast');
        } else if (cad =='no'){
            $('#autoUpdate_cad_no').fadeIn('fast');
            $('#autoUpdate_cad').fadeOut('fast');
        }else{
            $('#autoUpdate_cad').fadeOut('fast');
            $('#autoUpdate_cad_no').fadeOut('fast');
        }
		
		if (cadmdfirstseen=='yes') {
            $('#autoUpdate_cadmdseen').fadeIn('fast');
           
        } else if (cadmdfirstseen =='no'){
            $('#autoUpdate_cadmdseen').fadeOut('fast');
        }else{
            $('#autoUpdate_cadmdseen').fadeOut('fast');
         }
		 
		 
		 if (fdcadmdfirstseen=='yes') {
            $('#autoUpdate_fdcadmdseen').fadeIn('fast');
           
        } else if (fdcadmdfirstseen =='no'){
            $('#autoUpdate_fdcadmdseen').fadeOut('fast');
        }else{
            $('#autoUpdate_fdcadmdseen').fadeOut('fast');
         }
		 if (sdcadmdfirstseen=='yes') {
            $('#autoUpdate_sdcadmdseen').fadeIn('fast');
           
        } else if (sdcadmdfirstseen =='no'){
            $('#autoUpdate_sdcadmdseen').fadeOut('fast');
        }else{
            $('#autoUpdate_sdcadmdseen').fadeOut('fast');
         }
		
		if (cadmdfirstseenno=='yes') {
            $('#autoUpdate_cadmdseenno').fadeIn('fast');
           
        } else if (cadmdfirstseenno =='no'){
            $('#autoUpdate_cadmdseenno').fadeOut('fast');
        }else{
            $('#autoUpdate_cadmdseenno').fadeOut('fast');
         }
		
		if (fdcadmdfirstseenno=='yes') {
            $('#autoUpdate_fdcadmdseenno').fadeIn('fast');
           
        } else if (fdcadmdfirstseenno =='no'){
            $('#autoUpdate_fdcadmdseenno').fadeOut('fast');
        }else{
            $('#autoUpdate_fdcadmdseenno').fadeOut('fast');
         }
		 if (sdcadmdfirstseenno=='yes') {
            $('#autoUpdate_sdcadmdseenno').fadeIn('fast');
           
        } else if (sdcadmdfirstseenno =='no'){
            $('#autoUpdate_sdcadmdseenno').fadeOut('fast');
        }else{
            $('#autoUpdate_sdcadmdseenno').fadeOut('fast');
         }
		
		
		
		if (fdcad=='yes') {
            $('#autoUpdate_fdcad').fadeIn('fast');
            $('#autoUpdate_fdcad_no').fadeOut('fast');
        } else if (fdcad =='no'){
            $('#autoUpdate_fdcad_no').fadeIn('fast');
            $('#autoUpdate_fdcad').fadeOut('fast');
        }else{
            $('#autoUpdate_fdcad').fadeOut('fast');
            $('#autoUpdate_fdcad_no').fadeOut('fast');
        }
		
		if (sdcad=='yes') {
            $('#autoUpdate_sdcad').fadeIn('fast');
            $('#autoUpdate_sdcad_no').fadeOut('fast');
        } else if (sdcad =='no'){
            $('#autoUpdate_sdcad_no').fadeIn('fast');
            $('#autoUpdate_sdcad').fadeOut('fast');
        }else{
            $('#autoUpdate_sdcad').fadeOut('fast');
            $('#autoUpdate_sdcad_no').fadeOut('fast');
        }

        if (stroke=='yes') {
            $('#autoUpdate_stroke').fadeIn('fast');
        } else{
            $('#autoUpdate_stroke').fadeOut('fast');
        }

        if (pvd=='yes') {
            $('#autoUpdate_pvd').fadeIn('fast');
        } else{
            $('#autoUpdate_pvd').fadeOut('fast');
        }
	
	   

        if (gm=='yes') {
            $('#autoUpdate_gm').fadeIn('fast');
			 $('#autoUpdate_gmn').fadeOut('fast');
            //$("#pcsk9").prop('required',true);
            //$("#apob").prop('required',true);
            //$("#ldlr").prop('required',true);
            //$("#other_fh_mutations").prop('required',true);
        } else if (gm=='no') {
            $('#autoUpdate_gm').fadeOut('fast');
			 $('#autoUpdate_gmn').fadeIn('fast');
            //$("#pcsk9").prop('required',false);
            //$("#apob").prop('required',false);
            //$("#ldlr").prop('required',false);
            //$("#other_fh_mutations").prop('required',false);
        }else{
			$('#autoUpdate_gm').fadeOut('fast');
			 $('#autoUpdate_gmn').fadeOut('fast');
            //$("#pcsk9").prop('required',false);
            //$("#apob").prop('required',false);
            //$("#ldlr").prop('required',false);
            //$("#other_fh_mutations").prop('required',false);
			
		}

        $('#ldlcadjustment').change(function() {
            var select = document.getElementById("ldlcadjustment");
            var adjust_value = (select.options[select.selectedIndex].value).split('-')[0];
            var patientldlclevel = document.getElementById("patientldlclevel").value;
            var adjust_ldlclevel = patientldlclevel * adjust_value;
            var adjustedldlclevel = document.getElementById("adjust_ldlclevel");
            adjustedldlclevel.value = (Math.round(adjust_ldlclevel * 10) / 10).toFixed(1);
        });

        $('#statin_name').change(function() {

            if (this.checked) {
                $('#autoUpdate').fadeIn('fast');
                //$('#adjust_ldlclabel').fadeIn('fast');
               // var adjust_value = (select.options[select.selectedIndex].value).split('-')[0];
               // var patientldlclevel = document.getElementById("patientldlclevel").value;
               // var adjust_ldlclevel = patientldlclevel * adjust_value;
               // var adjustedldlclevel = document.getElementById("adjust_ldlclevel");
               // adjustedldlclevel.value = (Math.round(adjust_ldlclevel * 10) / 10).toFixed(1);
                
            }
            else {
                $('#autoUpdate').fadeOut('fast');
             //   $('#adjust_ldlclabel').fadeOut('fast');
            }
        });

       $('#genetic_mutation').change(function() {

            if (this.checked) {
                $('#autoUpdate_gm').fadeIn('fast');
				$('#autoUpdate_gmn').fadeOut('fast');
               
            } else {
                $('#autoUpdate_gm').fadeOut('fast');
				$('#autoUpdate_gmn').fadeIn('fast');
               
            }
        });


		$("input[name='lpa']").on('change', function(){
					if($(this).val() == 'yes') {
						$("#yeslpa").show();
						$("#lpav").prop("required",true);
						$("#lpav").val("0.0");
						$("#lpav").prop("disabled", false);
					}else if($(this).val() == 'no'){
						$("#yeslpa").hide();
						$("#lpav").prop("required",false);
						$("#lpav").val("0.0");
						$("#lpav").prop("disabled", true);
					}
				});


        if (document.getElementById("first_degree").checked) {
            $('#first_degree_data').fadeIn('fast');
           
            $("#first_degree_hyperlipidaemia").prop('required',true);
            $("#first_degree_premature_cad").prop('required',true);
            $("#first_degree_tendon_xanthomata").prop('required',true);
            $("#first_degree_corneal_arcus").prop('required',true);
            $("#first_degree_fh").prop('required',true);
        }else {
            $('#first_degree_data').fadeOut('fast');
           
            $("#first_degree_hyperlipidaemia").prop('required',false);
            $("#first_degree_premature_cad").prop('required',false);
            $("#first_degree_tendon_xanthomata").prop('required',false);
            $("#first_degree_corneal_arcus").prop('required',false);
            $("#first_degree_fh").prop('required',false);
        }


        $('#first_degree').change(function() {
            if (this.checked) {
                $('#first_degree_data').fadeIn('fast');
                $("#first_degree_gender").prop('required',true);
                $("#first_degree_hyperlipidaemia").prop('required',true);
                $("#first_degree_premature_cad").prop('required',true);
                $("#first_degree_tendon_xanthomata").prop('required',true);
                $("#first_degree_corneal_arcus").prop('required',true);
                $("#first_degree_fh").prop('required',true);
                
            }
            else {
                $('#first_degree_data').fadeOut('fast');
                $("#first_degree_gender").prop('required',false);
                $("#first_degree_hyperlipidaemia").prop('required',false);
                $("#first_degree_premature_cad").prop('required',false);
                $("#first_degree_tendon_xanthomata").prop('required',false);
                $("#first_degree_corneal_arcus").prop('required',false);
                $("#first_degree_fh").prop('required',false);
                
            }
        });

        if (document.getElementById("second_degree").checked) {
            $('#second_degree_data').fadeIn('fast');
            $("#second_degree_gender").prop('required',true);
            $("#second_degree_hyperlipidaemia").prop('required',true);
            $("#second_degree_premature_cad").prop('required',true);
            $("#second_degree_tendon_xanthomata").prop('required',true);
            $("#second_degree_fh").prop('required',true);
        }else {
            $('#second_degree_data').fadeOut('fast');
            $("#second_degree_gender").prop('required',false);
            $("#second_degree_hyperlipidaemia").prop('required',false);
            $("#second_degree_premature_cad").prop('required',false);
            $("#second_degree_tendon_xanthomata").prop('required',false);
            $("#second_degree_fh").prop('required',false);
        }


        $('#second_degree').change(function() {
            if (this.checked) {
                $('#second_degree_data').fadeIn('fast');
                $("#second_degree_gender").prop('required',true);
                $("#second_degree_hyperlipidaemia").prop('required',true);
                $("#second_degree_premature_cad").prop('required',true);
                $("#second_degree_tendon_xanthomata").prop('required',true);
                $("#second_degree_fh").prop('required',true);
                
            }
            else {
                $('#second_degree_data').fadeOut('fast');
                $("#second_degree_gender").prop('required',false);
                $("#second_degree_hyperlipidaemia").prop('required',false);
                $("#second_degree_premature_cad").prop('required',false);
                $("#second_degree_tendon_xanthomata").prop('required',false);
                $("#second_degree_fh").prop('required',false);
                
            }
        });

        if (document.getElementById("third_degree").checked) {
            $('#third_degree_data').fadeIn('fast');
            $("#third_degree_fh").prop('required',true);
        }else {
            $('#third_degree_data').fadeOut('fast');
            $("#third_degree_fh").prop('required',false);
        }


        $('#third_degree').change(function() {
            if (this.checked) {
                $('#third_degree_data').fadeIn('fast');
                $("#third_degree_fh").prop('required',true);       
            }
            else {
                $('#third_degree_data').fadeOut('fast');
                $("#third_degree_fh").prop('required',false);            
            }
        });
    });

</script>

@endsection
@endsection

