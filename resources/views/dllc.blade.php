@extends('layouts.app')
@section('title','FH CatScreen')

@section('content')
@php
$patientid = $patient->patientid;
  $patientgender = $patient->patientgender;
                $patientnric = $patient->patientnric;
                $patientyearoffirstseen = $patient->patientyearoffirstseen;
                $premature_cad = $patient->premature_cad;
				$ageCAD = $patient->ageCAD; //patientageatfirstseen -cad
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
				$genetic_mutation_noreason_detail= $patient->genetic_mutation_noreason_detail;
                $dontknow_geneticmutation=$patient->dontknow_geneticmutation;
				$notfoundmutation = $patient->notfoundmutation;
                $reasons = $patient->reasons;		
                $first_degree = $patient->first_degree;
                $first_degree_gender = $patient->first_degree_gender;
                $first_degree_age = $patient->first_degree_age;
                $first_degree_tclvl = $patient->first_degree_tclvl;
                $first_degree_ldlclvl = $patient->first_degree_ldlclvl;
				$first_degree_hyperlipidaemia =$patient->first_degree_hyperlipidaemia;
                $first_degree_premature_cad = $patient->first_degree_premature_cad;
                $first_degree_tendon_xanthomata = $patient->first_degree_tendon_xanthomata;
                $first_degree_corneal_arcus = $patient->first_degree_corneal_arcus;
                $first_degree_fh = $patient->first_degree_fh;
                $second_degree = $patient->second_degree;
                $second_degree_gender = $patient->second_degree_gender;
                $second_degree_age = $patient->second_degree_age;
                $second_degree_tclvl = $patient->second_degree_tclvl;
                $second_degree_premature_cad = $patient->second_degree_premature_cad;
                $second_degree_tendon_xanthomata = $patient->second_degree_tendon_xanthomata;
                $second_degree_fh = $patient->second_degree_fh;
                $third_degree = $patient->third_degree;
                $third_degree_fh = $patient->third_degree_fh;


                // get age from ic and first seen
                $nricyear = substr($patientnric,0,2);
                if ($nricyear > 25) {    
                    $firstseenage = $patientyearoffirstseen - (1900 + $nricyear);
                    $nricage = date('Y') - (1900 + $nricyear);
                }
                else {
                    $firstseenage = $patientyearoffirstseen - $nricyear;
                    $nricage = $nricyear;
                } 
                $first_question_dlcc = $patientscoretbl->first_question_dlcc;
                $second_question_dlcc = $patientscoretbl->second_question_dlcc;
                $third_question_dlcc = $patientscoretbl->third_question_dlcc;
                $fourth_question_dlcc = $patientscoretbl->fourth_question_dlcc;
                $fifth_question_dlcc = $patientscoretbl->fifth_question_dlcc;
                $total_dlcc = $patientscoretbl->total_dlcc;
                $result_dlcc = $patientscoretbl->result_dlcc;  
@endphp

<div id="myHeader">
    <div class="boxCorner boxShadow-top header text-left" >
        <div class="row">
            <div class="logo-fhcatscreen"><img src="{{asset('img/logo-small.png')}}" alt=""/></div>
            <div class="hello-user">
                <label class="hello-seperator"></label>
                <label></label>
            </div>
        </div>
    </div>
</div>


<!-- Satisfaction Survey - START -->
<div class="content container content-wrapper1">
<div class="row">
    <div class="col-custom2 boxShadow-top form-group">
        <div class="row">
            <div class="col-md-10 mb-3">
                <p class="txt-title2">DLCC</p>
            </div>
            <div class="col-md mb-3">
                <a onclick="PrintDiv();" href=""><span class="glyphicon glyphicon-print"></span> Print</a></span>
            </div>
        </div>
            <!-- <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">DLCC<span class="pull-right">
                <a onclick="PrintDiv();" href=""><span class="glyphicon glyphicon-print"></span> Print</a></span></h3>
            </div> -->

            <!-- <div class="panel-body two-col"> -->
                <!-- first question -->
                 <b><?php 
                    if (($result_dlcc == 'UNLIKELY')) {
                        ?><font size="5px">Category  :</font><font color="green" size="5px"><?php echo $result_dlcc; ?></font><?php
                    } else {
                        ?><font size="5px">Category  :</font><font color="red" size="5px"><?php echo $result_dlcc; ?></font><?php
                    }
                 ?></b>
                <span class="pull-right"><b><font color="blue" size="5px">Total Points  : <?php echo $total_dlcc; ?></font></b></span><br/>
                
                <hr class="mb-3">

                    <div class="row">
                    <div class="col-md-12">
                        <label>
                            1. Family History (1st degree relative parent, sibling, child)
                        </label>
                    </div>
                    </div>
                    <!-- <div class="col-md-12"> -->
                    <div class="row">
                    <div class="col-md-12 mb-3 ">
                    <div class="but-radio-group mb-3">
                    <div class="col form-group mb-3 row">
                        <div class="col-md mb-3">
                            <label>
                            <?php 
                                if (($first_degree_gender == 1 && $first_degree_age < 55 && $first_degree_premature_cad == "yes") || ($first_degree_gender == 2 && $first_degree_age < 60 && $first_degree_premature_cad == "yes")) {
                            ?>
                                <input type="checkbox" value="1" checked="checked" disabled>
                            <?php
                                } else {
                            ?>
                                <input type="checkbox" value="1" disabled>
                            <?php 
                                }
                             ?>
                            
                            Known premature CAD (< 55 years for men; < 60 years for women)</label>
                        </div>
                    </div>
                    <div class="col form-group mb-3 row">
                        <div class="col-md mb-3">
                            <label>Premature CAD</label>
                            <div class="col form-group mb-3 row">
                            <?php if ($first_degree_premature_cad == "yes") { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="first_degree_premature_cad" id="first_degree_premature_cad" checked="checked" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="first_degree_premature_cad" id="first_degree_premature_cad" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } ?>
                            
                            <?php if ($first_degree_premature_cad == "no") { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="first_degree_premature_cad" id="first_degree_premature_cad" checked="checked" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="first_degree_premature_cad" id="first_degree_premature_cad" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } ?>

                            <?php if ($first_degree_premature_cad == "unknown") { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">Don't know<input type="radio" value="unknown" name="first_degree_premature_cad" id="first_degree_premature_cad" checked="checked" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">Don't know<input type="radio" value="unknown" name="first_degree_premature_cad" id="first_degree_premature_cad" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } ?>
                        </div>
                        </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    

                    <div class="row">
                    <div class="col-md-12 mb-3 ">
                    <div class="but-radio-group mb-3">
                    <div class="col form-group mb-3 row">
                        <div class="col-md mb-3">
                            <label>
                            <?php 
                                //if ($first_degree_ldlclvl > 4.9 && $first_degree_age >= 18) {
								if ($first_degree_hyperlipidaemia =="yes") {
                            ?>
                                <input type="checkbox" value="1" checked="checked" disabled>
                            <?php
                                } else {
                            ?>
                                <input type="checkbox" value="1" disabled>
                            <?php 
                                }
                             ?>
                            
                            LDL-C > 4.9 mmol/L (>= 18 years)</label>   
                        </div>
                    </div>
                    </div>
                    </div>
                    </div>


                    <div class="row">
                    <div class="col-md-12 mb-3 ">
                    <div class="but-radio-group mb-3">
                    <div class="col form-group mb-3 row">
                        <div class="col-md mb-3">
                            <label>
                            <?php
                                if ($first_degree_ldlclvl > 4.0 && $first_degree_age < 18 && $first_degree_age!=0) {
                            ?>
                                <input type="checkbox" value="1" checked="checked" disabled>
                            <?php
                                } else {
                            ?>
                                <input type="checkbox" value="1" disabled>
                            <?php 
                                }
                             ?>
                            
                            LDL-C > 4.0 mmol/L (< 18 years)</label>   
                        </div>
                    </div>
                    </div>
                    </div>
                    </div>

                    <div class="row">
                    <div class="col-md-12 mb-3 ">
                    <div class="but-radio-group mb-3">
                    <div class="col form-group mb-3 row">
                        <div class="col-md mb-3">
                            <label>
                            <?php 
                                if ($first_degree_tendon_xanthomata == "yes" || $first_degree_corneal_arcus == "yes") {
                            ?>
                                <input type="checkbox" value="1" checked="checked" disabled>
                            <?php
                                } else {
                            ?>
                                <input type="checkbox" value="1" disabled>
                            <?php 
                                }
                             ?>
                            
                            Tendon xanthoma OR Corneal arcus</label>   
                        <div class="col form-group mb-3 row">
                            <label>Tendon Xantomata</label>
                        </div>
                            <div class="col form-group mb-3 row">
                                <?php if ($first_degree_tendon_xanthomata == "yes") { ?>
                                    <div class="col-4 mb-3">
                                    <label class="but-radio">Yes<input type="radio" value="yes" name="first_degree_tendon_xanthomata" id="first_degree_tendon_xanthomata" checked="checked" disabled><span class="checkmark"></span></label>
                                    </div>
                                <?php } else { ?>
                                    <div class="col-4 mb-3">
                                    <label class="but-radio">Yes<input type="radio" value="yes" name="first_degree_tendon_xanthomata" id="first_degree_tendon_xanthomata" disabled><span class="checkmark"></span></label>
                                    </div>
                                <?php } ?>
                                
                                <?php if ($first_degree_tendon_xanthomata == "no") { ?>
                                    <div class="col-4 mb-3">
                                    <label class="but-radio">No<input type="radio" value="no" name="first_degree_tendon_xanthomata" id="first_degree_tendon_xanthomata" checked="checked" disabled><span class="checkmark"></span></label>
                                    </div>
                                <?php } else { ?>
                                    <div class="col-4 mb-3">
                                    <label class="but-radio">No<input type="radio" value="no" name="first_degree_tendon_xanthomata" id="first_degree_tendon_xanthomata" disabled><span class="checkmark"></span></label>
                                    </div>
                                <?php } ?>

                                <?php if ($first_degree_tendon_xanthomata == "unknown") { ?>
                                    <div class="col-4 mb-3">
                                    <label class="but-radio">Don't know<input type="radio" value="unknown" name="first_degree_tendon_xanthomata" id="first_degree_tendon_xanthomata" checked="checked" disabled><span class="checkmark"></span></label>
                                    </div>
                                <?php } else { ?>
                                    <div class="col-4 mb-3">
                                    <label class="but-radio">Don't know<input type="radio" value="unknown" name="first_degree_tendon_xanthomata" id="first_degree_tendon_xanthomata" disabled><span class="checkmark"></span></label>
                                    </div>
                                <?php } ?>
                            </div>
                        <div class="col form-group mb-3 row">
                            <label>Corneal Arcus  (First appearance < 45 years)</label>
                        </div>
                        <div class="col form-group mb-3 row">
                            <?php if ($first_degree_corneal_arcus == "yes") { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="first_degree_corneal_arcus" id="first_degree_corneal_arcus" checked="checked" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="first_degree_corneal_arcus" id="first_degree_corneal_arcus" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } ?>
                            
                            <?php if ($first_degree_corneal_arcus == "no") { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="first_degree_corneal_arcus" id="first_degree_corneal_arcus" checked="checked" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="first_degree_corneal_arcus" id="first_degree_corneal_arcus" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } ?>

                            <?php if ($first_degree_corneal_arcus == "unknown") { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">Don't know<input type="radio" value="unknown" name="first_degree_corneal_arcus" id="first_degree_corneal_arcus" checked="checked" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">Don't know<input type="radio" value="unknown" name="first_degree_corneal_arcus" id="first_degree_corneal_arcus" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    </div>
                    </div>



                     </div>
                </div> 
                <span class="pull-right"><font color="blue" size="4px"><b>Points  : <?php echo $first_question_dlcc; ?></b></font></span>
                <hr class="mb-3">


                <div class="row">
                <div class="col-md-12">
                    <label>2. Personal clinical history</label>
                </div>
                </div>

                <div class="row">
                <div class="col-md-12 mb-3 ">
                <div class="but-radio-group mb-3">
                <div class="col form-group mb-3 row">
                    <div class="col-md mb-3">
                    <label><?php 
                            if (($ageCAD < 55 && $patientgender == 1 && $premature_cad == "yes") || ($ageCAD < 60 && $patientgender == 2 && $premature_cad == "yes")) {
                        ?>
                            <input type="checkbox" value="1" checked="checked" disabled>
                        <?php
                            } else {
                        ?>
                            <input type="checkbox" value="1" disabled>
                        <?php 
                            }
                            ?>

                        Premature CAD (first diagnosed at < 55 for men; < 60 years for women)</label>

                    </div>
                </div>
                <div class="col form-group mb-3 row">
                    <div class="col-md mb-3">
                        <label>Premature CAD</label>
                        <div class="col form-group mb-3 row">
                            <?php if (($premature_cad == "yes" && $ageCAD<55 && $patientgender=="1")|| ($ageCAD < 60 && $patientgender == 2 && $premature_cad == "yes"))  { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="premature_cad" id="premature_cad" checked="checked" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="premature_cad" id="premature_cad" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } ?>
                            
                            <?php if (($premature_cad == "no") || ($premature_cad == "yes" && $ageCAD > 55 && $patientgender=="1")|| ($ageCAD > 60 && $patientgender == 2 && $premature_cad == "yes")) { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="premature_cad" id="premature_cad" checked="checked" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="premature_cad" id="premature_cad" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } ?>

                            
                        </div>
                    </div>
                </div>
                </div>
                </div>
                </div>


                <div class="row">
                <div class="col-md-12 mb-3 ">
                <div class="but-radio-group mb-3">
                <div class="col form-group mb-3 row">
                    <div class="col-md mb-3">
                    <label><?php 
                                if (($ageStroke < 55 && $patientgender == 1 && $premature_cerebral == "yes") || ($ageStroke < 60 && $patientgender == 2 && $premature_cerebral == "yes")) {
                            ?>
                                <input type="checkbox" value="1" checked="checked" disabled>
                            <?php
                                } else {
                            ?>
                                <input type="checkbox" value="1" disabled>
                            <?php 
                                }
                             ?>
                                Premature cerebral vascular disease (first diagnosed at < 55 for men; < 60 years for women)</label>
                    </div>
                </div>
                <div class="col form-group mb-3 row">
                    <div class="col-md mb-3">
                        <label>Premature cerebral vascular disease</label>
                        <div class="col form-group mb-3 row">
                            <?php if (($ageStroke < 55 && $patientgender == 1 && $premature_cerebral == "yes") || ($ageStroke < 60 && $patientgender == 2 && $premature_cerebral == "yes")){ ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="premature_cerebral" id="premature_cerebral" checked="checked" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="premature_cerebral" id="premature_cerebral" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } ?>
                            
                            <?php if (($premature_cerebral == "no") || ($ageStroke > 55 && $patientgender == 1 && $premature_cerebral == "yes") || ($ageStroke > 60 && $patientgender == 2 && $premature_cerebral == "yes")){ ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="premature_cerebral" id="premature_cerebral" checked="checked" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="premature_cerebral" id="premature_cerebral" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } ?>

                            
                        </div>
                    </div>
                </div>
                </div>
                </div>
                </div>

                <div class="row">
                <div class="col-md-12 mb-3 ">
                <div class="but-radio-group mb-3">
                <div class="col form-group mb-3 row">
                    <div class="col-md mb-3">
                    <label><?php 
                                if (($agePVD < 55 && $patientgender == 1 && $pvd == "yes") || ($agePVD < 60 && $patientgender == 2 && $pvd == "yes")) {
                            ?>
                                <input type="checkbox" value="1" checked="checked" disabled>
                            <?php
                                } else {
                            ?>
                                <input type="checkbox" value="1" disabled>
                            <?php 
                                }
                             ?>
                                Premature PVD (first diagnosed at < 55 for men; < 60 years for women)</label>
                    </div>
                </div>
                <div class="col form-group mb-3 row">
                    <div class="col-md mb-3">
                        <label>Premature PVD</label>
                        <div class="col form-group mb-3 row">
                            <?php if (($agePVD < 55 && $patientgender == 1 && $pvd == "yes") || ($agePVD < 60 && $patientgender == 2 && $pvd == "yes")) { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="pvd" id="pvd" checked="checked" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="pvd" id="pvd" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } ?>
                            
                            <?php if (($pvd == "no") || ($agePVD > 55 && $patientgender == 1 && $pvd == "yes") || ($agePVD > 60 && $patientgender == 2 && $pvd == "yes")){ ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="pvd" id="pvd" checked="checked" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="pvd" id="pvd" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } ?>

                            
                        </div>
                    </div>
                </div>
                </div>
                </div>
                </div>
                
                <span class="pull-right"><font color="blue" size="4px"><b>Points  : <?php echo $second_question_dlcc; ?></b></font></span>
                <hr class="mb-3">
                <!-- finish second question -->

                <div class="row">
                <div class="col-md-12">
                    <label>3. Physical Examination</label>
                </div>
                </div>

                <div class="row">
                <div class="col-md-12 mb-3 ">
                <div class="but-radio-group mb-3">
                <div class="col form-group mb-3 row">
                    <div class="col-md mb-3">
                    <label><?php 
                                if ($tendon_xanthomata == "yes" || $nodular_xanthoma == "yes" || $achilles_tendon == "yes") {
                            ?>
                                <input type="checkbox" value="1" checked="checked" disabled>
                            <?php
                                } else {
                            ?>
                                <input type="checkbox" value="1" disabled>
                            <?php 
                                }
                             ?>
                            Tendon xanthomata</label>

                    </div>
                </div>

                <div class="col form-group mb-3 row">
                    <div class="col-md mb-3">
                        <label>Tendon xanthomata on the: </label><br>
                        <label>1) Elbows </label>
                        <div class="col form-group mb-3 row">
                            <?php if ($tendon_xanthomata_elbows == "yes") { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="tendon_xanthomata_elbows" id="tendon_xanthomata_elbows" checked="checked" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="tendon_xanthomata_elbows" id="tendon_xanthomata_elbows" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } ?>
                            
                            <?php if ($tendon_xanthomata_elbows == "no") { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="tendon_xanthomata_elbows" id="tendon_xanthomata_elbows" checked="checked" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="tendon_xanthomata_elbows" id="tendon_xanthomata_elbows" disabled> <span class="checkmark"></span></label>
                                </div>
                            <?php } ?>

                            <?php if ($tendon_xanthomata_elbows == "unknown") { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">Don't know<input type="radio" value="unknown" name="tendon_xanthomata_elbows" id="tendon_xanthomata_elbows" checked="checked" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">Don't know<input type="radio" value="unknown" name="tendon_xanthomata_elbows" id="tendon_xanthomata_elbows" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } ?>
                        </div>

                        
                        <label>2) Heels </label>
                        <div class="col form-group mb-3 row">
                            <?php if ($tendon_xanthomata_heels == "yes") { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="tendon_xanthomata_heels" id="tendon_xanthomata_heels" checked="checked" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="tendon_xanthomata_heels" id="tendon_xanthomata_heels" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } ?>
                            
                            <?php if ($tendon_xanthomata_heels == "no") { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="tendon_xanthomata_heels" id="tendon_xanthomata_heels" checked="checked" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="tendon_xanthomata_heels" id="tendon_xanthomata_heels" disabled> <span class="checkmark"></span></label>
                                </div>
                            <?php } ?>

                            <?php if ($tendon_xanthomata_heels == "unknown") { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">Don't know<input type="radio" value="unknown" name="tendon_xanthomata_heels" id="tendon_xanthomata_heels" checked="checked" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">Don't know<input type="radio" value="unknown" name="tendon_xanthomata_heels" id="tendon_xanthomata_heels" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } ?>
                        </div>

                        
                        <label>3) Fingers </label>
                        <div class="col form-group mb-3 row">
                            <?php if ($tendon_xanthomata_fingers == "yes") { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="tendon_xanthomata_fingers" id="tendon_xanthomata_fingers" checked="checked" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="tendon_xanthomata_fingers" id="tendon_xanthomata_fingers" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } ?>
                            
                            <?php if ($tendon_xanthomata_fingers == "no") { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="tendon_xanthomata_fingers" id="tendon_xanthomata_fingers" checked="checked" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="tendon_xanthomata_fingers" id="tendon_xanthomata_fingers" disabled> <span class="checkmark"></span></label>
                                </div>
                            <?php } ?>

                            <?php if ($tendon_xanthomata_fingers == "unknown") { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">Don't know<input type="radio" value="unknown" name="tendon_xanthomata_fingers" id="tendon_xanthomata_fingers" checked="checked" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">Don't know<input type="radio" value="unknown" name="tendon_xanthomata_fingers" id="tendon_xanthomata_fingers" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } ?>
                        </div>

                        
                        <label>4) Knees </label>
                        <div class="col form-group mb-3 row">
                            <?php if ($tendon_xanthomata_knees == "yes") { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="tendon_xanthomata_knees" id="tendon_xanthomata_knees" checked="checked" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="tendon_xanthomata_knees" id="tendon_xanthomata_knees" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } ?>
                            
                            <?php if ($tendon_xanthomata_knees == "no") { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="tendon_xanthomata_knees" id="tendon_xanthomata_knees" checked="checked" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="tendon_xanthomata_knees" id="tendon_xanthomata_knees" disabled> <span class="checkmark"></span></label>
                                </div>
                            <?php } ?>

                            <?php if ($tendon_xanthomata_knees == "unknown") { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">Don't know<input type="radio" value="unknown" name="tendon_xanthomata_knees" id="tendon_xanthomata_knees" checked="checked" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">Don't know<input type="radio" value="unknown" name="tendon_xanthomata_knees" id="tendon_xanthomata_knees" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } ?>
                        </div>

                        
                        <label>5) Palms </label>
                        <div class="col form-group mb-3 row">
                            <?php if ($tendon_xanthomata_palms == "yes") { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="tendon_xanthomata_palms" id="tendon_xanthomata_palms" checked="checked" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="tendon_xanthomata_palms" id="tendon_xanthomata_palms" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } ?>
                            
                            <?php if ($tendon_xanthomata_palms == "no") { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="tendon_xanthomata_palms" id="tendon_xanthomata_palms" checked="checked" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="tendon_xanthomata_palms" id="tendon_xanthomata_palms" disabled> <span class="checkmark"></span></label>
                                </div>
                            <?php } ?>

                            <?php if ($tendon_xanthomata_palms == "unknown") { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">Don't know<input type="radio" value="unknown" name="tendon_xanthomata_palms" id="tendon_xanthomata_palms" checked="checked" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">Don't know<input type="radio" value="unknown" name="tendon_xanthomata_palms" id="tendon_xanthomata_palms" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="col form-group mb-3 row">
                    <div class="col-md mb-3">
                        <label>Achilles Tendon Thickening</label>
                        <div class="col form-group mb-3 row">
                            <?php if ($achilles_tendon == "yes") { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="achilles_tendon" id="achilles_tendon" checked="checked" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="achilles_tendon" id="achilles_tendon" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } ?>
                            
                            <?php if ($achilles_tendon == "no") { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="achilles_tendon" id="achilles_tendon" checked="checked" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="achilles_tendon" id="achilles_tendon" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } ?>

                            <?php if ($achilles_tendon == "unknown") { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">Don't know<input type="radio" value="unknown" name="achilles_tendon" id="achilles_tendon" checked="checked" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">Don't know<input type="radio" value="unknown" name="achilles_tendon" id="achilles_tendon" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } ?> 
                        </div>
                    </div>
                </div>

                <div class="col form-group mb-3 row">
                    <div class="col-md mb-3">
                        <label>Nodular Xanthoma on the skin</label>
                        <div class="col form-group mb-3 row">
                            <?php if ($nodular_xanthoma == "yes") { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="nodular_xanthoma" id="nodular_xanthoma" checked="checked" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="nodular_xanthoma" id="nodular_xanthoma" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } ?>
                            
                            <?php if ($nodular_xanthoma == "no") { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="nodular_xanthoma" id="nodular_xanthoma" checked="checked" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="nodular_xanthoma" id="nodular_xanthoma" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } ?>

                            <?php if ($nodular_xanthoma == "unknown") { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">Don't know<input type="radio" value="unknown" name="nodular_xanthoma" id="nodular_xanthoma" checked="checked" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">Don't know<input type="radio" value="unknown" name="nodular_xanthoma" id="nodular_xanthoma" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } ?> 
                        </div>
                    </div>
                </div>
                </div>

                <div class="row">
                <div class="col-md-12 mb-3 ">
                <div class="but-radio-group mb-3">
                <div class="col form-group mb-3 row">
                    <div class="col-md mb-3">
                    <label><?php 
                                if ($corneal_arcus == "yes" && $firstseenage < 45) {
                            ?>
                                <input type="checkbox" value="1" checked="checked" disabled>
                            <?php
                                } else {
                            ?>
                                <input type="checkbox" value="1" disabled>
                            <?php 
                                }
                             ?>
                            Corneal arcus (first diagnosed at < 45 years old)</label>
                    </div>
                </div>

                <div class="col form-group mb-3 row">
                    <div class="col-md mb-3">
                        <label>Corneal Arcus (First appearance < 45 years)</label>
                        <div class="col form-group mb-3 row">
                            <?php if ($corneal_arcus == "yes") { ?>
                                <div class="col-2 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="corneal_arcus" id="corneal_arcus" checked="checked" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="corneal_arcus" id="corneal_arcus" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } ?>
                            
                            <?php if ($corneal_arcus == "no") { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="corneal_arcus" id="corneal_arcus" checked="checked" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="corneal_arcus" id="corneal_arcus" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } ?>

                            <?php if ($corneal_arcus == "unknown") { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">Don't know<input type="radio" value="unknown" name="corneal_arcus" id="corneal_arcus" checked="checked" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                <label class="but-radio">Don't know<input type="radio" value="unknown" name="corneal_arcus" id="corneal_arcus" disabled><span class="checkmark"></span></label>
                                </div>
                            <?php } ?> 
                        </div>
                    </div>
                </div> 
                </div>
                </div>
                </div>

                <span class="pull-right"><font color="blue" size="4px"><b>Points  : <?php echo $third_question_dlcc; ?></b></font></span>
                <hr class="mb-3">

                <!-- baru -->
                <!-- <div class="row">
                <div class="col-md-12">
                    <label>4. LDL-C level(mmol/L)<input type="text" value="<?php echo $patientldlclevel; ?>" class="form-control" name="patientldlclevel" id="patientldlclevel" readonly>
                            <div id="test1" style="font-weight: normal; color: red "></div></label>
                </div>
                </div><br>

                
                    <?php 
                        if ($baseline_therapy == 1) {
                    ?>

                    <div class="row">
                    <div class="col-md-12 mb-3 ">
                    <div class="but-radio-group mb-3">
                    <div class="col form-group mb-3 row">
                        <div class="col-md mb-3">
                            <label><input type="checkbox" value="1" disabled>
                            On lipid-lowering therapy?</label>   
                        </div>
                    </div>
                    </div>
                    </div>
                    </div>

                    <div class="row">
                    <div class="col-md-12 mb-3 ">
                    <div class="but-radio-group mb-3">
                    <div class="col form-group mb-3 row">
                        <div class="col-md mb-3">
                            <label id="adjust_ldlclabel">Adjusted LDL-C level(mmol/L) <input type="text" value="" class="form-control" name="adjust_ldlclevel" id="adjust_ldlclevel" readonly>
                            <div id="test1" style="font-weight: normal; color: red "></div></label>   
                        </div>
                    </div>
                    </div>
                    </div>
                    </div>


                    <div id="autoUpdate" class="autoUpdate">
                        <select class="form-control" id="ldlcadjustment" disabled>
                            <?php 

                                $sql = 'SELECT * FROM ldltbl';
                                // $stmt = $conn->prepare($sql);
                                // $stmt->execute();
                                #Prepare stmt or reports errors
                                ($stmt = $conn->prepare($sql)) or trigger_error($conn->error, E_USER_ERROR);

                                #Execute stmt or reports errors
                                $stmt->execute() or trigger_error($stmt->error, E_USER_ERROR);

                                #Save data or reports errors
                                ($stmt_result = $stmt->get_result()) or trigger_error($stmt->error, E_USER_ERROR);
                                if ($stmt_result->num_rows > 0) {
                                    while($row = $stmt_result->fetch_assoc()) {
                                        if ($baseline_therapy_specify == $row['ldlid']) {
                                            echo '<option value="'.$row['ldladjustment'].'" id="'.$row['ldlid'].'" selected="selected">'.$row['ldlname'].'</option>';
                                        } else {
                                            echo '<option value="'.$row['ldladjustment'].'" id="'.$row['ldlid'].'">'.$row['ldlname'].'</option>';    
                                        }
                                    }
                                }
                                ?>
                        </select>
                    </div>
                    <?php
                        }  else {
                    ?>
                    <div class="row">
                    <div class="col-md-12 mb-3 ">
                    <div class="but-radio-group mb-3">
                    <div class="col form-group mb-3 row">
                        <div class="col-md mb-3">
                            <label for="1-4-10"><input type="checkbox" value="1" checked="checked" disabled>
                            On lipid-lowering therapy? </label>   
                        </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    <?php 
                        } 
                    ?>
                    </div>
                    </div> -->

                <!-- <div class="row">
                <div class="col-md-5 mb-3">
                    <p class="txt-title2">3. TC and LDL-C levels (mmol/L)</p>
                </div>
                </div> -->

                <div class="row">
                <div class="col-md-12">
                    <label>4. Lipid Profile</label>
                </div>
                </div>

                <!-- baru3.1 -->
                <div class="row">
                <div class="col-md-12">
                <div class="but-radio-group">
                    <label class="col col-form-label">4.1 Pre-treatment</label>
                    <div class="col form-group mb-3 row">

                        <?php if ($patientpretclevel == 0.00) { ?>
                            <div class="col-md-6 mb-3">                            
                                <label class="col col-form-label" id="patientpretclevel">TC levels (mmol/L)</label>
                                <input class="col-md-6" type="number" step="0.1" value="0.0" class="form-control" name="patientpretclevel" id="patientpretclevel" placeholder="TC levels (mmol/L)" disabled>
                            </div>
                        <?php } else{  ?>
                            <div class="col-md-6 mb-3">                            
                                <label class="col col-form-label" id="patientpretclevel">TC levels (mmol/L)</label>
                                <input class="col-md-6" type="number" step="0.1" value="<?php echo $patientpretclevel; ?>" class="form-control" name="patientpretclevel" id="patientpretclevel" placeholder="TC levels (mmol/L)" disabled>
                            </div>
						<?php } ?>
                        <!-- <br /> -->
                        <?php if ($patientpreldlclevel == 0.00) { ?>
                            <div class="col-md-6 mb-3">
                                <label class="col col-form-label">LDL-C levels (mmol/L) (if available)</label>
                                <input class="col-md-6" type="number" step="0.1" value="0.0" class="form-control" name="patientpreldlclevel" id="patientpreldlclevel" placeholder="LDL-C levels (mmol/L)" disabled>
                            </div>
                        <?php } else{  ?>
                            <div class="col-md-6 mb-3">
                                <label class="col col-form-label">LDL-C levels (mmol/L) (if available)</label>
                                <input class="col-md-6" type="number" step="0.1" value="<?php echo $patientpreldlclevel; ?>" class="form-control" name="patientpreldlclevel" id="patientpreldlclevel" placeholder="LDL-C levels (mmol/L)" disabled>
                            </div>
                        <?php } ?>
                        <!-- <br/> -->

                        <?php if ($patientpretg == 0.00) { ?>
                            <div class="col-md-6 mb-3">
                                <label class="col col-form-label">TG</label>
                                <input class="col-md-6" type="number" step="0.1" value="0.0" class="form-control" name="patientpretg" id="patientpretg" disabled>
                            </div>
                        <?php } else{  ?>
                            <div class="col-md-6 mb-3">
                                <label class="col col-form-label">TG</label>
                                <input class="col-md-6" type="number" step="0.1" value="<?php echo $patientpretg; ?>" class="form-control" name="patientpretg" id="patientpretg" disabled>
                            </div>
                        <?php } ?>

                        <?php if ($patientprehdlc == 0.00) { ?>
                            <div class="col-md-6 mb-3">
                                <label class="col col-form-label">HDL-C</label>
                                <input class="col-md-6" type="number" step="0.1" value="0.0" class="form-control" name="patientprehdlc" id="patientprehdlc" disabled>
                            </div>
                        <?php } else{  ?>
                            <div class="col-md-6 mb-3">
                                <label class="col col-form-label">HDL-C</label>
                                <input class="col-md-6" type="number" step="0.1" value="<?php echo $patientprehdlc; ?>" class="form-control" name="patientprehdlc" id="patientprehdlc" disabled>
                            </div>
                        <?php } ?>
					
                </div>
					
					<div class="but-radio-group"> 
						<label class="col col-form-label">Fasting</label>
					<div class="col form-group mb-3 row">						
                        <?php if ($fasting == "yes") { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="fasting" id="fasting" checked="checked" disabled><span class="checkmark"></span></label>
                            </div>
                        <?php } else { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="fasting" id="fasting" disabled><span class="checkmark"></span></label>
                            </div>
                        <?php } ?>

                        <?php if ($fasting == "no") { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="fasting" id="fasting" checked="checked" disabled><span class="checkmark"></span></label>
                            </div>
                        <?php } else { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="fasting" id="fasting" disabled><span class="checkmark"></span></label>
                            </div>
                        <?php } ?>
					</div>
					</div>
					<div class="but-radio-group"> 
                    <label class="col col-form-label">4.2 On lipid-lowering theraphy?</label>   		  
                    <div class="col form-group mb-3 row">

                        <?php if ($baseline_therapy == 1) { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="1" class="statin_name" name="statin_name" id="statin_name" checked disabled><span class="checkmark"></span></label>
                            </div>
                        <?php } else{ ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="1" class="statin_name" name="statin_name" id="statin_name" disabled><span class="checkmark"></span></label>
                            </div>
                        <?php } ?>

                        <?php if ($baseline_therapy == 0) { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="0" class="statin_name" name="statin_name" id="statin_name" checked disabled><span class="checkmark"></span></label>
                            </div>
                        <?php } else { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="0" class="statin_name" name="statin_name" id="statin_name" disabled><span class="checkmark"></span></label>
                            </div>
                        <?php } ?>
                    </div>
                </div>
				    <div class="but-radio-group"> 
            
                    <label class="col col-form-label" id="adjust_ldlclabel"> 4.3 Post Treatment </label>
                    <div class="col form-group mb-3 row">
                        <div class="col-md-6 mb-3">                            
                            <label class="col col-form-label">TC levels (mmol/L)</label> 
                            <input class="col-md-6" type="number" step="0.1" value="<?php echo $patienttclevel; ?>" class="form-control" name="patienttclevel" id="patienttclevel" disabled>
                        </div>
                        <div class="col-md-6 mb-3">                            
                            <label class="col col-form-label">LDL-C levels (mmol/L)</label> 
                            <input class="col-md-6" type="number" step="0.1" value="<?php echo $patientldlclevel; ?>" class="form-control" name="patientldlclevel" id="patientldlclevel" disabled >
                        </div>
                    </div>
                    </div>	
					<div class="col form-group mb-3 row">
                    <label class="col col-form-label">4.4 Adjusted LDL-C level(mmol/L) </label>
                    <div class="col-md-6 mb-3"> 
                        <input class="col-md-6"  type="number" step="0.1" value="0" class="form-control" name="adjust_ldlclevel" id="adjust_ldlclevel" disabled></label>
                    </div>
                </div>					
                </div>
                </div>
                </div>

                    <span class="pull-right"><font color="blue" size="4px"><b>Points  : <?php echo $fourth_question_dlcc; ?></b></font></span>
                    <hr class="mb-3">

                    <!-- <div class="row">
                    <div class="col-md-12">
                        <label><h4>5. Genetic Mutation?
                                <?php if ($genetic_mutation == 1) { ?> 
                                    <input type="checkbox" value="1" name="genetic_mutation" id="genetic_mutation" disabled="" checked></h4>
                                <?php } else { ?>
                                    <input type="checkbox" value="1" name="genetic_mutation" id="genetic_mutation" disabled=""></h4>
                                <?php } ?></label>
                    </div>
                    </div>

                    <div class="row">
                    <hr class="mb-3">
                    <?php if ($genetic_mutation == 1) { ?>
                    <div class="col-md-12">
                        <label class="well well-sm col-xs-12" style="font-weight: normal;" for="1-5-17">
                            <?php 
                                if ($ldlr == "yes") {
                            ?>
                                <input type="checkbox" value="1" checked="checked" disabled>
                            <?php
                                } else {
                            ?>
                                <input type="checkbox" value="1" disabled>
                            <?php 
                                }
                             ?>
                            <i>LDLR</i>

                            <br /><br />
                            <i>LDLR</i><br />
                                <?php if ($ldlr == "yes") { ?>
                                    <input type="radio" value="yes" name="ldlr" id="ldlr" checked="checked" disabled> Yes  <br />
                                <?php } else { ?>
                                    <input type="radio" value="yes" name="ldlr" id="ldlr" disabled> Yes  <br />
                                <?php } ?>
                                
                                <?php if ($ldlr == "no") { ?>
                                <input type="radio" value="no" name="ldlr" id="ldlr" checked="checked" disabled> No  <br /> 
                                <?php } else { ?>
                                <input type="radio" value="no" name="ldlr" id="ldlr" disabled> No  <br /> 
                                <?php } ?>
                        </label>     
                    </div>
                    <div class="col-md-12">
                        <label class="well well-sm col-xs-12" style="font-weight: normal;" for="1-5-18">
                            <?php 
                                if ($apob == "yes") {
                            ?>
                                <input type="checkbox" value="1" checked="checked" disabled>
                            <?php
                                } else {
                            ?>
                                <input type="checkbox" value="1" disabled>
                            <?php 
                                }
                             ?>
                            <i>APOB</i> 
                            <br /><br />
                            <i>APOB</i><br />
                                <?php if ($apob == "yes") { ?>
                                    <input type="radio" value="yes" name="apob" id="apob" checked="checked" disabled> Yes  <br />
                                <?php } else { ?>
                                    <input type="radio" value="yes" name="apob" id="apob" disabled> Yes  <br />
                                <?php } ?>
                                
                                <?php if ($apob == "no") { ?>
                                <input type="radio" value="no" name="apob" id="apob" checked="checked" disabled> No  <br /> 
                                <?php } else { ?>
                                <input type="radio" value="no" name="apob" id="apob" disabled> No  <br /> 
                                <?php } ?>
                        </label>     
                    </div>
                    <div class="col-md-12">
                        <label class="well well-sm col-xs-12" style="font-weight: normal;" for="1-5-19">
                            <?php 
                                if ($pcsk9 == "yes") {
                            ?>
                                <input type="checkbox" value="1" checked="checked" disabled>
                            <?php
                                } else {
                            ?>
                                <input type="checkbox" value="1" disabled>
                            <?php 
                                }
                             ?>
                            <i>PCSK9</i>
                            <br /><br />
                            <i>PCSK9</i><br />
                                <?php if ($pcsk9 == "yes") { ?>
                                    <input type="radio" value="yes" name="pcsk9" id="pcsk9" checked="checked" disabled> Yes  <br />
                                <?php } else { ?>
                                    <input type="radio" value="yes" name="pcsk9" id="pcsk9" disabled> Yes  <br />
                                <?php } ?>
                                
                                <?php if ($pcsk9 == "no") { ?>
                                <input type="radio" value="no" name="pcsk9" id="pcsk9" checked="checked" disabled> No  <br /> 
                                <?php } else { ?>
                                <input type="radio" value="no" name="pcsk9" id="pcsk9" disabled> No  <br /> 
                                <?php } ?>
                        </label>     
                    </div>
                    <div class="col-md-12">
                        <label class="well well-sm col-xs-12" style="font-weight: normal;" for="1-5-19">
                            <?php 
                                if ($other_fh_mutations == "yes") {
                            ?>
                                <input type="checkbox" value="1" checked="checked" disabled>
                            <?php
                                } else {
                            ?>
                                <input type="checkbox" value="1" disabled>
                            <?php 
                                }
                             ?>
                            <i>Other FH Mutationsp</i>
                            <br /><br />
                            Other FH mutations (eg: <i>LDLRAP1, APOE, LIPA</i>)<br />
                                <?php if ($other_fh_mutations == "yes") { ?>
                                    <input type="radio" value="yes" name="other_fh_mutations" id="other_fh_mutations" checked="checked" disabled> Yes  <br />
                                <?php } else { ?>
                                    <input type="radio" value="yes" name="other_fh_mutations" id="other_fh_mutations" disabled> Yes  <br />
                                <?php } ?>
                                
                                <?php if ($other_fh_mutations == "no") { ?>
                                <input type="radio" value="no" name="other_fh_mutations" id="other_fh_mutations" checked="checked" disabled> No  <br /> 
                                <?php } else { ?>
                                <input type="radio" value="no" name="other_fh_mutations" id="other_fh_mutations" disabled> No  <br /> 
                                <?php } ?> 
                        </label>     
                    </div>
                <?php } ?>
                </div> -->

                <div class="row">
                <div class="col-md-12">
                    <label>5. Genetic mutation analysis</label>
                </div>
                </div>

                <div class="row">
                <div class="col-md-12">
                    <div class="col form-group mb-3 row">
                        <?php if ($genetic_mutation == "yes") { ?>
                            <div class="col-4 mb-3"> 
                                <label class="but-radio">Yes<input type="radio" value="yes" name="genetic_mutation" class="genetic_mutation" id="genetic_mutation" checked disabled><span class="checkmark"></span></label>
                            </div>
                            <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="genetic_mutation" class="genetic_mutation" id="genetic_mutation" disabled><span class="checkmark"></span></label>
                            </div>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Pending<input type="radio" value="pending" name="genetic_mutation" class="genetic_mutation" id="genetic_mutation" disabled><span class="checkmark"></span></label>							
                            </div>
                        <?php } else if ($genetic_mutation=="no") { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="genetic_mutation" class="genetic_mutation" id="genetic_mutation" disabled><span class="checkmark"></span></label>
                            </div>
                            <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="genetic_mutation" class="genetic_mutation" id="genetic_mutation" checked disabled><span class="checkmark"></span></label>
                            </div>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Pending<input type="radio" value="pending" name="genetic_mutation"  class="genetic_mutation" id="genetic_mutation" disabled><span class="checkmark"></span></label>							
                            </div>        
                        <?php } else { ?>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Yes<input type="radio" value="yes" name="genetic_mutation" class="genetic_mutation" id="genetic_mutation" disabled><span class="checkmark"></span></label>
                            </div>
                            <div class="col-4 mb-3">
                                <label class="but-radio">No<input type="radio" value="no" name="genetic_mutation" class="genetic_mutation" id="genetic_mutation" disabled><span class="checkmark"></span></label>
                            </div>
                            <div class="col-4 mb-3">
                                <label class="but-radio">Pending<input type="radio" value="pending" name="genetic_mutation" class="genetic_mutation" id="genetic_mutation" checked disabled><span class="checkmark"></span></label>							
                            </div>
                        <?php } ?>
                    </div>	
					
                <?php if ($genetic_mutation == "yes") { ?>
                    <div id="autoUpdate_gm" class="col-md-12 ">
                       
                        <label class="col col-form-label" > In which FH candidate gene?  
                        <div class="col form-group mb-3 row">
                            <?php if ($ldlr == "yes") { ?>
                                <div class="col-4 mb-3">
                                    <input type="checkbox" value="yes" name="ldlr" id="ldlr" checked="checked" disabled> LDLR   <br />
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                    <input type="checkbox" value="yes" name="ldlr" id="ldlr" disabled> LDLR   <br />
                                </div>
                            <?php } ?>
                            
                            <?php if ($apob == "yes") { ?>
                                <div class="col-4 mb-3">
                                    <input type="checkbox" value="yes" name="apob" id="apob" checked="checked" disabled> APOB <br />
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                    <input type="checkbox" value="yes" name="apob" id="apob" disabled> APOB <br />
                                </div>
                            <?php } ?>
                            
                            <?php if ($pcsk9 == "yes") { ?>
                                <div class="col-4 mb-3">
                                    <input type="checkbox" value="yes" name="pcsk9" id="pcsk9" checked="checked" disabled> PCSK9 <br />
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                    <input type="checkbox" value="yes" name="pcsk9" id="pcsk9" disabled> PCSK9  <br />
                                </div>
                            <?php } ?>
                            
                            <?php if ($dontknow_geneticmutation == "yes") { ?>
                                <div class="col-4 mb-3">
                                    <input type="checkbox" value="yes" name="dontknow_geneticmutation" id="dontknow_geneticmutation" checked="checked" disabled> Don't know  <br />
                                </div>
                            <?php } else { ?>
                                <div class="col-4 mb-3">
                                    <input type="checkbox" value="yes" name="dontknow_geneticmutation" id="dontknow_geneticmutation" disabled> Don't know  <br />
                                </div>
                            <?php } ?>
                            <?php if ($notfoundmutation == "yes") { ?>
                                <div class="col-6 mb-3">
                                    <input type="checkbox" value="yes" name="notfoundmutation" id="notfoundmutation" checked="checked" disabled> Not found   
                                    <br />
                                </div>
                            <?php } else { ?>
                                <div class="col-6 mb-3">
                                    <input type="checkbox" value="yes" name="notfoundmutation" id="notfoundmutation" disabled> Not found 
                                    <br />
                                </div>
                            <?php } ?>
                            <?php if ($other_fh_mutations == "yes") { ?>
                                <div class="col-6 mb-3">
                                    <input type="checkbox" value="yes" name="other_fh_mutations" id="other_fh_mutations" checked="checked" disabled> Other FH mutations (eg: <i>LDLRAP1, APOE</i>) Please state  
                                    <input type="text" name="other_fh_mutations_detail" value="<?php echo $other_fh_mutations_detail; ?>" size="14" disabled>  <br />
                                </div>
                            <?php } else { ?>
                                <div class="col-6 mb-3">
                                    <input type="checkbox" value="yes" name="other_fh_mutations" id="other_fh_mutations" disabled> Other FH mutations (eg: <i>LDLRAP1, APOE</i>)Please state  
                                    <input type="text" name="other_fh_mutations_detail" size="14" disabled>  <br />
                                </div>
                            <?php } ?>
							
                        </div>
                        </label>     
                    </div>
					<?php } else if ($genetic_mutation=="no") { ?>
                    <div id="autoUpdate_gmn" class="col-md-12 autoUpdate_gmn">
                            
                        <label class="col col-form-label" for="autoUpdate_gmn">Reasons
                        <div class="col form-group mb-2 row">
                            <?php if ($reasons == "financial_issues") { ?>
                                <div class="col-6 mb-3">
								    <input type="radio" value="financial_issues" name="reasons" id="financial_issues" checked disabled> Financial  issue<br />
                                </div>
                            <?php } else { ?>
                                <div class="col-6 mb-3">
								    <input type="radio" value="financial_issues" name="reasons" id="financial_issues" disabled> Financial  issue<br />
                                </div>
                            <?php } ?>
							
                            <?php if ($reasons == "patient_refuse") { ?>
                                <div class="col-6 mb-3">
				                    <input type="radio" value="patient_refuse" name="reasons" id="patient_refuse" checked disabled> Patient refuse other than financial issue  <br /> 
                                </div>
                            <?php } else { ?>
                                <div class="col-6 mb-3">
								    <input type="radio" value="patient_refuse" name="reasons" id="patient_refuse" disabled> Patient refuse other than financial issue  <br /> 
                                </div>
                            <?php } ?>
								
                            <?php if ($reasons == "no_facility") { ?>
                                <div class="col-6 mb-3">
								    <input type="radio" value="no_facility" name="reasons" id="no_facility" checked disabled> No facility (not available)<br />
                                </div>
                            <?php } else { ?>
                                <div class="col-6 mb-3">													
							        <input type="radio" value="no_facility" name="reasons" id="no_facility" disabled> No facility (not available)<br />
                                </div>
                            <?php } ?>
								
							<?php if ($reasons == "others") { ?>
								<div class="col-6 mb-3">
							        <input type="radio" value="others" name="reasons" id="others" checked disabled> Others (please specify) <input type="text" name="genetic_mutation_noreason_detail" value="<?php echo $genetic_mutation_noreason_detail; ?>" size="15" disabled><br />
                                </div>
                            <?php } else { ?>
                                <div class="col-6 mb-3">
                                    <input type="radio" value="others" name="reasons" id="others" disabled> Others (please specify) 
                                    <input type="text" name="genetic_mutation_noreason_detail" size="15" disabled><br />
                                </div>
                            <?php } ?>
                        </label>   
</div>				</div>		
						 <?php } else { }?>
                        
					
                
                </div>
                </div>

                <span class="pull-right"><font color="blue" size="4px"><b>Points  : <?php echo $fifth_question_dlcc; ?></b></font></span>
                <hr class="mb-3">

                <div class="row">
                    <div class="col-md-2 col-2">
                        <button type="button" onClick="window.location.href='{{URL::to('/patient-dashboard/')}}/<?php echo $patientid; ?>'"  class="btn btn-dark btn-block but-custom2"><i class="fa fa-long-arrow-left fa-lg"></i></button>
                    </div>
                </div>

                </div>
                </div>
                </div>
                </div>
                </div>

                <!-- baru -->


<script type="text/javascript">
var select = document.getElementById("ldlcadjustment");
var adjust_value = (select.options[select.selectedIndex].value).split('-')[0];
var patientldlclevel = document.getElementById("patientldlclevel").value;

var adjust_ldlclevel = patientldlclevel * adjust_value;
var adjustedldlclevel = document.getElementById("adjust_ldlclevel");
adjustedldlclevel.value = (Math.round(adjust_ldlclevel * 10) / 10).toFixed(1);

</script>
<script type="text/javascript">     
function PrintDiv() {    
   var divToPrint = document.getElementById('divToPrint');
   var popupWin = window.open('');
   popupWin.document.open();
   popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
    popupWin.document.close();
   // window.print();
        }
</script>

<div id="divToPrint" style="display:none;">
  <div style="background-color:white;">
    <div class="container">
        <div class="col-md-12" id="panel1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">DLCC</h3>
                </div>

                <div class="panel-body two-col">
                    <!-- first question -->
                     <b><?php 
                        if (($result_dlcc == 'UNLIKELY')) {
                            ?><font size="5px">Category  :</font><font color="green" size="5px"><?php echo $result_dlcc; ?></font><?php
                        } else {
                            ?><font size="5px">Category  :</font><font color="red" size="5px"><?php echo $result_dlcc; ?></font><?php
                        }
                     ?></b>
                    <span class="pull-right"><b><font color="blue" size="5px">Total Points  : <?php echo $total_dlcc; ?></font></b></span><br/>
                    
                    <hr />
                    <div class="row">
                        <div class="col-md-12">
                            <label>
                                1. Family History (1st degree relative parent, sibling, child)
                            </label>
                        </div>
                        <hr>
                        <div class="col-md-12">
                            <label class="well well-sm col-xs-12" style="font-weight: normal;" for="1-1-1">
                                <?php 
                                    if (($first_degree_gender == 1 && $first_degree_age < 55 && $first_degree_premature_cad == "yes") || ($first_degree_gender == 2 && $first_degree_age < 60 && $first_degree_premature_cad == "yes")) {
                                ?>
                                    <input type="checkbox" value="1" checked="checked" disabled>
                                <?php
                                    } else {
                                ?>
                                    <input type="checkbox" value="1" disabled>
                                <?php 
                                    }
                                 ?>
                                
                                Known premature CAD (< 55 years for men; < 60 years for women)
                                <br />
                                Premature CAD <br />
                                <?php if ($first_degree_premature_cad == "yes") { ?>
                                    <input type="radio" value="yes" name="first_degree_premature_cad_print" id="first_degree_premature_cad_print" checked="checked" disabled> Yes  <br />
                                <?php } else { ?>
                                    <input type="radio" value="yes" name="first_degree_premature_cad_print" id="first_degree_premature_cad_print" disabled> Yes  <br />
                                <?php } ?>
                                
                                <?php if ($first_degree_premature_cad == "no") { ?>
                                <input type="radio" value="no" name="first_degree_premature_cad_print" id="first_degree_premature_cad_print" checked="checked" disabled> No  <br /> 
                                <?php } else { ?>
                                <input type="radio" value="no" name="first_degree_premature_cad_print" id="first_degree_premature_cad_print" disabled> No  <br /> 
                                <?php } ?>

                                <?php if ($first_degree_premature_cad == "unknown") { ?>
                                <input type="radio" value="unknown" name="first_degree_premature_cad_print" id="first_degree_premature_cad_print" checked="checked" disabled> Unknown 
                                <?php } else { ?>
                                <input type="radio" value="unknown" name="first_degree_premature_cad_print" id="first_degree_premature_cad_print" disabled> Unknown 
                                <?php } ?> 
                            </label>
                        </div>
                        <br /><br />
                        <div class="col-md-12">
                            <label class="well well-sm col-xs-12" style="font-weight: normal;" for="1-1-2">
                                <?php 
                                    if ($first_degree_ldlclvl > 4.9 && $first_degree_age >= 18) {
                                ?>
                                    <input type="checkbox" value="1" checked="checked" disabled>
                                <?php
                                    } else {
                                ?>
                                    <input type="checkbox" value="1" disabled>
                                <?php 
                                    }
                                 ?>
                                LDL-C > 4.9 mmol/L (>= 18 years)
                            </label>    
                        </div>
                        <div class="col-md-12">
                            <label class="well well-sm col-xs-12" style="font-weight: normal;" for="1-1-3">
                                <?php 
                                    if ($first_degree_ldlclvl > 4.0 && $first_degree_age < 18) {
                                ?>
                                    <input type="checkbox" value="1" checked="checked" disabled>
                                <?php
                                    } else {
                                ?>
                                    <input type="checkbox" value="1" disabled>
                                <?php 
                                    }
                                 ?>
                                LDL-C > 4.0 mmol/L (< 18 years)
                            </label>
                        </div>
                        <br /><br />
                        <div class="col-md-12">
                            <label class="well well-sm col-xs-12" style="font-weight: normal;" for="1-1-4">
                                <?php 
                                    if ($first_degree_tendon_xanthomata == "yes" || $first_degree_corneal_arcus == "yes") {
                                ?>
                                    <input type="checkbox" value="1" checked="checked" disabled>
                                <?php
                                    } else {
                                ?>
                                    <input type="checkbox" value="1" disabled>
                                <?php 
                                    }
                                 ?>
                                Tendon xanthoma OR Corneal arcus

                                 <br />
                                 Tendon Xantomata <br />
                                    <?php if ($first_degree_tendon_xanthomata == "yes") { ?>
                                        <input type="radio" value="yes" name="first_degree_tendon_xanthomata_print" id="first_degree_tendon_xanthomata_print" checked="checked" disabled> Yes  <br />
                                    <?php } else { ?>
                                        <input type="radio" value="yes" name="first_degree_tendon_xanthomata_print" id="first_degree_tendon_xanthomata_print" disabled> Yes  <br />
                                    <?php } ?>
                                    
                                    <?php if ($first_degree_tendon_xanthomata == "no") { ?>
                                    <input type="radio" value="no" name="first_degree_tendon_xanthomata_print" id="first_degree_tendon_xanthomata_print" checked="checked" disabled> No  <br /> 
                                    <?php } else { ?>
                                    <input type="radio" value="no" name="first_degree_tendon_xanthomata_print" id="first_degree_tendon_xanthomata_print" disabled> No  <br /> 
                                    <?php } ?>

                                    <?php if ($first_degree_tendon_xanthomata == "unknown") { ?>
                                    <input type="radio" value="unknown" name="first_degree_tendon_xanthomata_print" id="first_degree_tendon_xanthomata_print" checked="checked" disabled> Unknown 
                                    <?php } else { ?>
                                    <input type="radio" value="unknown" name="first_degree_tendon_xanthomata_print" id="first_degree_tendon_xanthomata_print" disabled> Unknown 
                                    <?php } ?> 
                                    <br /><br />
                                    Corneal Arcus  (First appearance < 45 years) <br />
                                    <?php if ($first_degree_corneal_arcus == "yes") { ?>
                                        <input type="radio" value="yes" name="first_degree_corneal_arcus_print" id="first_degree_corneal_arcus_print" checked="checked" disabled> Yes  <br />
                                    <?php } else { ?>
                                        <input type="radio" value="yes" name="first_degree_corneal_arcus_print" id="first_degree_corneal_arcus_print" disabled> Yes  <br />
                                    <?php } ?>
                                    
                                    <?php if ($first_degree_corneal_arcus == "no") { ?>
                                    <input type="radio" value="no" name="first_degree_corneal_arcus_print" id="first_degree_corneal_arcus_print" checked="checked" disabled> No  <br /> 
                                    <?php } else { ?>
                                    <input type="radio" value="no" name="first_degree_corneal_arcus_print" id="first_degree_corneal_arcus_print" disabled> No  <br /> 
                                    <?php } ?>

                                    <?php if ($first_degree_corneal_arcus == "unknown") { ?>
                                    <input type="radio" value="unknown" name="first_degree_corneal_arcus_print" id="first_degree_corneal_arcus_print" checked="checked" disabled> Unknown 
                                    <?php } else { ?>
                                    <input type="radio" value="unknown" name="first_degree_corneal_arcus_print" id="first_degree_corneal_arcus_print" disabled> Unknown 
                                    <?php } ?> 
                            </label>
                        </div>
                    </div>
                    <span class="pull-right"><font color="blue" size="4px"><b>Points  : <?php echo $first_question_dlcc; ?></b></font></span>
                    <hr />
                    <!-- finish first question -->


                    <!-- second question -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- <div class="well well-sm"> -->
                                <label>
                                    2. Personal clinical history
                                </label>
                            <!-- </div> -->
                        </div>
                        <hr>
                        <div class="col-md-12">
                            <label class="well well-sm col-xs-12" style="font-weight: normal;" for="1-2-5">
                                <?php 
                                    if (($firstseenage < 55 && $patientgender == 1 && $premature_cad == "yes") || ($firstseenage < 60 && $patientgender == 2 && $premature_cad == "yes")) {
                                ?>
                                    <input type="checkbox" value="1" checked="checked" disabled>
                                <?php
                                    } else {
                                ?>
                                    <input type="checkbox" value="1" disabled>
                                <?php 
                                    }
                                 ?>

                                Premature CAD (first diagnosed at < 55 for man; < 60 years for woman)
                                <br />
                                Premature CAD<br />
                                <?php if ($premature_cad == "yes") { ?>
                                    <input type="radio" value="yes" name="premature_cad_print" id="premature_cad_print" checked="checked" disabled> Yes  <br />
                                <?php } else { ?>
                                    <input type="radio" value="yes" name="premature_cad_print" id="premature_cad_print" disabled> Yes  <br />
                                <?php } ?>
                                
                                <?php if ($premature_cad == "no") { ?>
                                <input type="radio" value="no" name="premature_cad_print" id="premature_cad_print" checked="checked" disabled> No  <br /> 
                                <?php } else { ?>
                                <input type="radio" value="no" name="premature_cad_print" id="premature_cad_print" disabled> No  <br /> 
                                <?php } ?>

                                <?php if ($premature_cad == "unknown") { ?>
                                <input type="radio" value="unknown" name="premature_cad_print" id="premature_cad_print" checked="checked" disabled> Unknown 
                                <?php } else { ?>
                                <input type="radio" value="unknown" name="premature_cad_print" id="premature_cad_print" disabled> Unknown 
                                <?php } ?>
                            </label>
                        </div>
                        <br /><br />
                        <div class="col-md-12">
                            <label class="well well-sm col-xs-12" style="font-weight: normal;" for="1-2-6">
                                <?php 
                                    if (($firstseenage < 55 && $patientgender == 1 && $premature_cerebral == "yes") || ($firstseenage < 60 && $patientgender == 2 && $premature_cerebral == "yes")) {
                                ?>
                                    <input type="checkbox" value="1" checked="checked" disabled>
                                <?php
                                    } else {
                                ?>
                                    <input type="checkbox" value="1" disabled>
                                <?php 
                                    }
                                 ?>
                                    Premature cerebral vascular disease (first diagnosed at < 55 for man; < 60 years for woman)
                                <br />
                                Premature cerebral vascular disease <br />
                                <?php if ($premature_cerebral == "yes") { ?>
                                    <input type="radio" value="yes" name="premature_cerebral_print" id="premature_cerebral_print" checked="checked" disabled> Yes  <br />
                                <?php } else { ?>
                                    <input type="radio" value="yes" name="premature_cerebral_print" id="premature_cerebral_print" disabled> Yes  <br />
                                <?php } ?>
                                
                                <?php if ($premature_cerebral == "no") { ?>
                                <input type="radio" value="no" name="premature_cerebral_print" id="premature_cerebral_print" checked="checked" disabled> No  <br /> 
                                <?php } else { ?>
                                <input type="radio" value="no" name="premature_cerebral_print" id="premature_cerebral_print" disabled> No  <br /> 
                                <?php } ?>

                                <?php if ($premature_cerebral == "unknown") { ?>
                                <input type="radio" value="unknown" name="premature_cerebral_print" id="premature_cerebral_print" checked="checked" disabled> Unknown 
                                <?php } else { ?>
                                <input type="radio" value="unknown" name="premature_cerebral_print" id="premature_cerebral_print" disabled> Unknown 
                                <?php } ?>
                            </label>
                        </div>
                        <br /><br />
                        <div class="col-md-12">
                            <label class="well well-sm col-xs-12" style="font-weight: normal;" for="1-2-7">
                                <?php 
                                    if (($firstseenage < 55 && $patientgender == 1 && $pvd == "yes") || ($firstseenage < 60 && $patientgender == 2 && $pvd == "yes")) {
                                ?>
                                    <input type="checkbox" value="1" checked="checked" disabled>
                                <?php
                                    } else {
                                ?>
                                    <input type="checkbox" value="1" disabled>
                                <?php 
                                    }
                                 ?>
                                    PVD (first diagnosed at < 55 for man; < 60 years for woman)
                                <br />
                                PVD  <br />
                                <?php if ($pvd == "yes") { ?>
                                    <input type="radio" value="yes" name="pvd_print" id="pvd_print" checked="checked" disabled> Yes  <br />
                                <?php } else { ?>
                                    <input type="radio" value="yes" name="pvd_print" id="pvd_print" disabled> Yes  <br />
                                <?php } ?>
                                
                                <?php if ($pvd == "no") { ?>
                                <input type="radio" value="no" name="pvd_print" id="pvd_print" checked="checked" disabled> No  <br /> 
                                <?php } else { ?>
                                <input type="radio" value="no" name="pvd_print" id="pvd_print" disabled> No  <br /> 
                                <?php } ?>

                                <?php if ($pvd == "unknown") { ?>
                                <input type="radio" value="unknown" name="pvd_print" id="pvd_print" checked="checked" disabled> Unknown 
                                <?php } else { ?>
                                <input type="radio" value="unknown" name="pvd_print" id="pvd_print" disabled> Unknown 
                                <?php } ?> 
                            </label>
                        </div>
                    </div>
                    
                    <span class="pull-right"><font color="blue" size="4px"><b>Points  : <?php echo $second_question_dlcc; ?></b></font></span>
                    <hr />
                    <!-- finish second question -->

                    <!-- third question -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- <div class="well well-sm"> -->
                                <label>
                                    3. Physical Examination
                                </label>
                            <!-- </div> -->
                        </div>
                        <hr>
                        <div class="col-md-12">
                            <label class="well well-sm col-xs-12" style="font-weight: normal;" for="1-3-8">
                                <?php 
                                    if ($tendon_xanthomata == "yes" || $nodular_xanthoma == "yes" || $achilles_tendon == "yes") {
                                ?>
                                    <input type="checkbox" value="1" checked="checked" disabled>
                                <?php
                                    } else {
                                ?>
                                    <input type="checkbox" value="1" disabled>
                                <?php 
                                    }
                                 ?>
                                Tendon xanthomata

                                <br />
                                Tendon xanthomata on the dorsal hands, elbows and knees <br />
                                <?php if ($tendon_xanthomata == "yes") { ?>
                                    <input type="radio" value="yes" name="tendon_xanthomata_print" id="tendon_xanthomata_print" checked="checked" disabled> Yes  <br />
                                <?php } else { ?>
                                    <input type="radio" value="yes" name="tendon_xanthomata_print" id="tendon_xanthomata_print" disabled> Yes  <br />
                                <?php } ?>
                                
                                <?php if ($tendon_xanthomata == "no") { ?>
                                <input type="radio" value="no" name="tendon_xanthomata_print" id="tendon_xanthomata_print" checked="checked" disabled> No  <br /> 
                                <?php } else { ?>
                                <input type="radio" value="no" name="tendon_xanthomata_print" id="tendon_xanthomata_print" disabled> No  <br /> 
                                <?php } ?>

                                <?php if ($tendon_xanthomata == "unknown") { ?>
                                <input type="radio" value="unknown" name="tendon_xanthomata_print" id="tendon_xanthomata_print" checked="checked" disabled> Unknown 
                                <?php } else { ?>
                                <input type="radio" value="unknown" name="tendon_xanthomata_print" id="tendon_xanthomata_print" disabled> Unknown 
                                <?php } ?> 
                                <br />

                                Achilles Tendon Thickening <br />
                                <?php if ($achilles_tendon == "yes") { ?>
                                    <input type="radio" value="yes" name="achilles_tendon_print" id="achilles_tendon_print" checked="checked" disabled> Yes  <br />
                                <?php } else { ?>
                                    <input type="radio" value="yes" name="achilles_tendon_print" id="achilles_tendon_print" disabled> Yes  <br />
                                <?php } ?>
                                
                                <?php if ($achilles_tendon == "no") { ?>
                                <input type="radio" value="no" name="achilles_tendon_print" id="achilles_tendon_print" checked="checked" disabled> No  <br /> 
                                <?php } else { ?>
                                <input type="radio" value="no" name="achilles_tendon_print" id="achilles_tendon_print" disabled> No  <br /> 
                                <?php } ?>

                                <?php if ($achilles_tendon == "unknown") { ?>
                                <input type="radio" value="unknown" name="achilles_tendon_print" id="achilles_tendon_print" checked="checked" disabled> Unknown 
                                <?php } else { ?>
                                <input type="radio" value="unknown" name="achilles_tendon_print" id="achilles_tendon_print" disabled> Unknown 
                                <?php } ?> 
                                <br />
                                Nodular Xanthoma on the skin<br />
                                <?php if ($nodular_xanthoma == "yes") { ?>
                                    <input type="radio" value="yes" name="nodular_xanthoma_print" id="nodular_xanthoma_print" checked="checked" disabled> Yes  <br />
                                <?php } else { ?>
                                    <input type="radio" value="yes" name="nodular_xanthoma_print" id="nodular_xanthoma_print" disabled> Yes  <br />
                                <?php } ?>
                                
                                <?php if ($nodular_xanthoma == "no") { ?>
                                <input type="radio" value="no" name="nodular_xanthoma_print" id="nodular_xanthoma_print" checked="checked" disabled> No  <br /> 
                                <?php } else { ?>
                                <input type="radio" value="no" name="nodular_xanthoma_print" id="nodular_xanthoma_print" disabled> No  <br /> 
                                <?php } ?>

                                <?php if ($nodular_xanthoma == "unknown") { ?>
                                <input type="radio" value="unknown" name="nodular_xanthoma_print" id="nodular_xanthoma_print" checked="checked" disabled> Unknown 
                                <?php } else { ?>
                                <input type="radio" value="unknown" name="nodular_xanthoma_print" id="nodular_xanthoma_print" disabled> Unknown 
                                <?php } ?> 
                            </label>
                        </div>
                        <div class="col-md-12">
                            <label class="well well-sm col-xs-12" style="font-weight: normal;" for="1-3-9_print">
                                <?php 
                                    if ($corneal_arcus == "yes" && $firstseenage < 45) {
                                ?>
                                    <input type="checkbox" value="1" checked="checked" disabled>
                                <?php
                                    } else {
                                ?>
                                    <input type="checkbox" value="1" disabled>
                                <?php 
                                    }
                                 ?>
                                Corneal arcus (first diagnosed at < 45 years old)
                                <br />
                                Corneal Arcus (First appearance < 45 years)<br />
                                <?php if ($corneal_arcus == "yes") { ?>
                                    <input type="radio" value="yes" name="corneal_arcus_print" id="corneal_arcus_print" checked="checked" disabled> Yes  <br />
                                <?php } else { ?>
                                    <input type="radio" value="yes" name="corneal_arcus_print" id="corneal_arcus_print" disabled> Yes  <br />
                                <?php } ?>
                                
                                <?php if ($corneal_arcus == "no") { ?>
                                <input type="radio" value="no" name="corneal_arcus_print" id="corneal_arcus_print" checked="checked" disabled> No  <br /> 
                                <?php } else { ?>
                                <input type="radio" value="no" name="corneal_arcus_print" id="corneal_arcus_print" disabled> No  <br /> 
                                <?php } ?>

                                <?php if ($corneal_arcus == "unknown") { ?>
                                <input type="radio" value="unknown" name="corneal_arcus_print" id="corneal_arcus_print" checked="checked" disabled> Unknown 
                                <?php } else { ?>
                                <input type="radio" value="unknown" name="corneal_arcus_print" id="corneal_arcus_print" disabled> Unknown 
                                <?php } ?> 
                            </label>
                        </div>
                    </div>
                    
                    <span class="pull-right"><font color="blue" size="4px"><b>Points  : <?php echo $third_question_dlcc; ?></b></font></span>
                    <hr />
                    <!-- finish third question -->

                    <!-- fourth question -->
                    <div class="row">
                        <div class="col-md-12">
                                <label>
                                    4. LDL-C level(mmol/L) <input type="text" value="<?php echo $patientldlclevel; ?>" class="form-control" name="patientldlclevel" id="patientldlclevel" readonly>
                                    <div id="test1" style="font-weight: normal; color: red "></div><br />
                                </label>
                                <br>
                                
                                <?php 
                                    if ($baseline_therapy == 1) {
                                ?>
                                    <label class="well well-sm col-xs-12" style="font-weight: normal;" for="1-4-10">
                                        <input type="checkbox" value="1" disabled>
                                        On lipid-lowering therapy? <br />
                                    </label>
                                    <br> 
                                    <label id="adjust_ldlclabel">
                                        Adjusted LDL-C level(mmol/L) <input type="text" value="" class="form-control" name="adjust_ldlclevel" id="adjust_ldlclevel" readonly>
                                        <div id="test1" style="font-weight: normal; color: red "></div><br />
                                    </label>
                                    <br>
                                    <div id="autoUpdate" class="autoUpdate">
                                        <select class="form-control" id="ldlcadjustment" disabled>
                                            <?php 

                                                $sql = 'SELECT * FROM ldltbl';
                                                // $stmt = $conn->prepare($sql);
                                                // $stmt->execute();
                                                #Prepare stmt or reports errors
                                                ($stmt = $conn->prepare($sql)) or trigger_error($conn->error, E_USER_ERROR);

                                                #Execute stmt or reports errors
                                                $stmt->execute() or trigger_error($stmt->error, E_USER_ERROR);

                                                #Save data or reports errors
                                                ($stmt_result = $stmt->get_result()) or trigger_error($stmt->error, E_USER_ERROR);
                                                if ($stmt_result->num_rows > 0) {
                                                    while($row = $stmt_result->fetch_assoc()) {
                                                        if ($baseline_therapy_specify == $row['ldlid']) {
                                                            echo '<option value="'.$row['ldladjustment'].'" id="'.$row['ldlid'].'" selected="selected">'.$row['ldlname'].'</option>';
                                                        } else {
                                                            echo '<option value="'.$row['ldladjustment'].'" id="'.$row['ldlid'].'">'.$row['ldlname'].'</option>';    
                                                        }
                                                    }
                                                }
                                                ?>
                                        </select>
                                    </div>
                                <?php
                                    }  else {
                                ?>
                                <label class="well well-sm col-xs-12" style="font-weight: normal;" for="1-4-10">
                                    <input type="checkbox" value="1" checked="checked" disabled>
                                    On lipid-lowering therapy? <br />
                                </label>
                                <br> 
                                <?php 
                                    } 
                                ?>
                                
                                <br>
                            
                        </div>
                            

                    </div>
                    
                    <span class="pull-right"><font color="blue" size="4px"><b>Points  : <?php echo $fourth_question_dlcc; ?></b></font></span>
                    <hr />
                    <!-- finish fourth question -->

                    <!-- fifth question -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- <div class="well well-sm"> -->
                                <label>
                                    <h4>5. Genetic Mutation?
                                    <?php if ($genetic_mutation == 1) { ?> 
                                        <input type="checkbox" value="1" name="genetic_mutation_print" id="genetic_mutation_print" disabled="" checked></h4>
                                    <?php } else { ?>
                                        <input type="checkbox" value="1" name="genetic_mutation_print" id="genetic_mutation_print" disabled=""></h4>
                                    <?php } ?>
                                </label>
                            <!-- </div> -->
                        </div>
                        <hr>
                        <?php if ($genetic_mutation == 1) { ?>
                        <div class="col-md-12">
                            <label class="well well-sm col-xs-12" style="font-weight: normal;" for="1-5-17">
                                <?php 
                                    if ($ldlr == "yes") {
                                ?>
                                    <input type="checkbox" value="1" checked="checked" disabled>
                                <?php
                                    } else {
                                ?>
                                    <input type="checkbox" value="1" disabled>
                                <?php 
                                    }
                                 ?>
                                <i>LDLR</i>

                                <br />
                                <i>LDLR</i><br />
                                    <?php if ($ldlr == "yes") { ?>
                                        <input type="radio" value="yes" name="ldlr_print" id="ldlr_print" checked="checked" disabled> Yes  <br />
                                    <?php } else { ?>
                                        <input type="radio" value="yes" name="ldlr_print" id="ldlr_print" disabled> Yes  <br />
                                    <?php } ?>
                                    
                                    <?php if ($ldlr == "no") { ?>
                                    <input type="radio" value="no" name="ldlr_print" id="ldlr_print" checked="checked" disabled> No  <br /> 
                                    <?php } else { ?>
                                    <input type="radio" value="no" name="ldlr_print" id="ldlr_print" disabled> No  <br /> 
                                    <?php } ?>
                            </label>     
                        </div>
                        <br /><br />
                        <div class="col-md-12">
                            <label class="well well-sm col-xs-12" style="font-weight: normal;" for="1-5-18">
                                <?php 
                                    if ($apob == "yes") {
                                ?>
                                    <input type="checkbox" value="1" checked="checked" disabled>
                                <?php
                                    } else {
                                ?>
                                    <input type="checkbox" value="1" disabled>
                                <?php 
                                    }
                                 ?>
                                <i>APOB</i> 
                                <br />
                                <i>APOB</i><br />
                                    <?php if ($apob == "yes") { ?>
                                        <input type="radio" value="yes" name="apob_print" id="apob_print" checked="checked" disabled> Yes  <br />
                                    <?php } else { ?>
                                        <input type="radio" value="yes" name="apob_print" id="apob_print" disabled> Yes  <br />
                                    <?php } ?>
                                    
                                    <?php if ($apob == "no") { ?>
                                    <input type="radio" value="no" name="apob_print" id="apob_print" checked="checked" disabled> No  <br /> 
                                    <?php } else { ?>
                                    <input type="radio" value="no" name="apob_print" id="apob_print" disabled> No  <br /> 
                                    <?php } ?>
                            </label>     
                        </div>
                        <div class="col-md-12">
                            <label class="well well-sm col-xs-12" style="font-weight: normal;" for="1-5-19_print">
                                <?php 
                                    if ($pcsk9 == "yes") {
                                ?>
                                    <input type="checkbox" value="1" checked="checked" disabled>
                                <?php
                                    } else {
                                ?>
                                    <input type="checkbox" value="1" disabled>
                                <?php 
                                    }
                                 ?>
                                <i>PCSK9</i>
                                <br /><br />
                                <i>PCSK9</i><br />
                                    <?php if ($pcsk9 == "yes") { ?>
                                        <input type="radio" value="yes" name="pcsk9_print" id="pcsk9_print" checked="checked" disabled> Yes  <br />
                                    <?php } else { ?>
                                        <input type="radio" value="yes" name="pcsk9_print" id="pcsk9_print" disabled> Yes  <br />
                                    <?php } ?>
                                    
                                    <?php if ($pcsk9 == "no") { ?>
                                    <input type="radio" value="no" name="pcsk9_print" id="pcsk9_print" checked="checked" disabled> No  <br /> 
                                    <?php } else { ?>
                                    <input type="radio" value="no" name="pcsk9_print" id="pcsk9_print" disabled> No  <br /> 
                                    <?php } ?>
                            </label>     
                        </div>
                        <br /><br />
                        <div class="col-md-12">
                            <label class="well well-sm col-xs-12" style="font-weight: normal;" for="1-5-19_print">
                                <?php 
                                    if ($other_fh_mutations == "yes") {
                                ?>
                                    <input type="checkbox" value="1" checked="checked" disabled>
                                <?php
                                    } else {
                                ?>
                                    <input type="checkbox" value="1" disabled>
                                <?php 
                                    }
                                 ?>
                                <i>Other FH Mutationsp</i>
                                <br />
                                Other FH mutations (eg: <i>LDLRAP1, APOE, LIPA</i>)<br />
                                    <?php if ($other_fh_mutations == "yes") { ?>
                                        <input type="radio" value="yes" name="other_fh_mutations_print" id="other_fh_mutations_print" checked="checked" disabled> Yes  <br />
                                    <?php } else { ?>
                                        <input type="radio" value="yes" name="other_fh_mutations_print" id="other_fh_mutations_print" disabled> Yes  <br />
                                    <?php } ?>
                                    
                                    <?php if ($other_fh_mutations == "no") { ?>
                                    <input type="radio" value="no" name="other_fh_mutations_print" id="other_fh_mutations_print" checked="checked" disabled> No  <br /> 
                                    <?php } else { ?>
                                    <input type="radio" value="no" name="other_fh_mutations_print" id="other_fh_mutations_print" disabled> No  <br /> 
                                    <?php } ?> 
                            </label>     
                        </div>
                    <?php } ?>
                    </div>
                    
                    <span class="pull-right"><font color="blue" size="4px"><b>Points  : <?php echo $fifth_question_dlcc; ?></b></font></span>
                    <hr />
                    <!-- finish fifth question -->
                    

                </div>
            </div>
        </div>
    </div> 
    <script type="text/javascript">
    var select = document.getElementById("ldlcadjustment");
    var adjust_value = (select.options[select.selectedIndex].value).split('-')[0];
    var patientldlclevel = document.getElementById("patientldlclevel").value;

    var adjust_ldlclevel = patientldlclevel * adjust_value;
    var adjustedldlclevel = document.getElementById("adjust_ldlclevel");
    adjustedldlclevel.value = (Math.round(adjust_ldlclevel * 10) / 10).toFixed(1);

    </script>   
  </div>
</div>

<style>
#cnt1 {
    background-color: rgba(215, 212, 212, 0.88);
    margin-bottom: 70px;
}

#panel1 {
    padding:20px;
}

.panel-body:not(.two-col) {
    padding: 0px;
}

.panel-body .radio, .panel-body .checkbox {
    margin-top: 0px;
    margin-bottom: 0px;
}

.panel-body .list-group {
    margin-bottom: 0;
}

.margin-bottom-none {
    margin-bottom: 0;
}

.panel-footer{
    display: flex; 
    justify-content: space-between;
}

.btn-block + .btn-block {
    margin-top: 0px;
}
</style>

<!-- Satisfaction Survey - END -->

</div>
@endsection