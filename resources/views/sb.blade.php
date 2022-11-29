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
               $first_question_sb = $patientscoretbl->first_question_sb;
                $second_question_sb = $patientscoretbl->second_question_sb;
                $third_question_sb = $patientscoretbl->third_question_sb;
                $fourth_question_sb = $patientscoretbl->fourth_question_sb;
                $fifth_question_sb = $patientscoretbl->fifth_question_sb;
                $result_sb = $patientscoretbl->result_sb;
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

<!-- baru -->
<div class="content container content-wrapper1">
<div class="row">
    <div class="col-custom2 boxShadow-top form-group">
        <div class="row">
            <div class="col-md-10 mb-3">
                <p class="txt-title2">Simon Broome Diagnostic Criteria</p>
            </div>
            <div class="col-md mb-3">
                <a onclick="PrintDiv();" href=""><span class="glyphicon glyphicon-print"></span> Print</a></span>
            </div>
        </div>

        <b><?php 
            if (($result_sb == 'UNLIKELY')) {
                ?><font size="5px">Category  :</font><font color="green" size="5px"><?php echo $result_sb; ?></font><?php
            } else {
                ?><font size="5px">Category  :</font><font color="red" size="5px"><?php echo $result_sb; ?></font><?php
            }
            ?></b>
        
        <hr class="mb-3">

        <div class="row">
        <div class="col-md-12">
            <?php      
            if ($nricage >= 16) {
            ?>
            <label>1. ADULT</label>
        </div>
        </div>

        <div class="row">
        <div class="col-md-12 mb-3 ">
        <div class="but-radio-group mb-3">
        <div class="col form-group mb-3 row">
            <div class="col-md mb-3">
                <label>
                <?php   
                    if ($patienttclevel > 7.5) {
                ?>
                    <input type="checkbox" value="" name="2-6-20" id="2-6-20" checked="checked" disabled>
                    Total cholesterol > 7.5 mmol/L 
                <?php
                    }
                    else {
                ?>
                    <input type="checkbox" value="" name="2-6-20" id="2-6-20" disabled>
                    Total cholesterol > 7.5 mmol/L 
                <?php
                    }
                ?>
                </label>   
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
                    if ($patientldlclevel > 4.9) {
                ?>    
                    <input type="checkbox" value="" name="2-6-21" id="2-6-21" checked="checked" disabled>
                    LDL cholesterol > 4.9 mmol/L
                <?php
                    }
                    else {
                ?>
                    <input type="checkbox" value="" name="2-6-21" id="2-6-21" disabled>
                    LDL cholesterol > 4.9 mmol/L
                <?php
                    }
                ?>
                </label>   
            </div>
        </div>
        </div>
        </div>
        </div>

        <div class="row">
        <div class="col-md-12">
            <?php
            }
            else {
            ?>
            <label>1. AGED < 16 YEARS</label>
        </div>
        </div>

        <div class="row">
        <div class="col-md-12 mb-3 ">
        <div class="but-radio-group mb-3">
        <div class="col form-group mb-3 row">
            <div class="col-md mb-3">
                <label>
                <?php         
                    if ($patienttclevel > 6.7) {
                ?>    
                    <input type="checkbox" value="" name="2-6-22" id="2-6-22" checked="checked" disabled>
                    Total cholesterol > 6.7 mmol/L
                <?php
                    } else {
                ?>
                    <input type="checkbox" value="" name="2-6-22" id="2-6-22" disabled>
                    Total cholesterol > 6.7 mmol/L
                <?php
                    }
                ?>
                </label>   
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
                    if ($patientldlclevel > 4.0) {
                ?>     
                    <input type="checkbox" value="" name="2-6-23" id="2-6-23" checked="checked" disabled>
                    LDL cholesterol > 4.0 mmol/L 
                <?php
                    } else {
                ?>
                    <input type="checkbox" value="" name="2-6-23" id="2-6-23" disabled>
                    LDL cholesterol > 4.0 mmol/L 
                <?php
                    }
                ?>
                </label>   
            </div>
        </div>
        </div>
        </div>
        </div>

        <?php
        }
        ?>
        <hr class="mb-3">
        </div>
        </div>

        <div class="row">
        <div class="col-md-12">
            <label>2. Tendon Xanthomata</label>
        </div>
        </div>

        <div class="row">
        <div class="col-md-12 mb-3 ">
        <div class="but-radio-group mb-3">
        <div class="col form-group mb-3 row">
            <div class="col-md mb-3">
                <label>
                <?php 
                    if ($tendon_xanthomata_elbows == "yes" || $tendon_xanthomata_palms == "yes" || $tendon_xanthomata_knees == "yes" || $tendon_xanthomata_heels == "yes" || $tendon_xanthomata_fingers == "yes") {
                ?>
                    <input type="checkbox" value="1" checked="checked" disabled>
                <?php
                    } else {
                ?>
                    <input type="checkbox" value="1" disabled>
                <?php 
                    }
                    ?>
                Patient
                </label>   
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
        <!--<div class="col form-group mb-3 row">
            <div class="col-md mb-3">
                <label>Achilles Tendon Thickening</label>
                <div class="col form-group mb-3 row">
                    <?php if ($achilles_tendon == "yes") { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">Yes<input type="radio" value="yes" name="achilles_tendon" id="achilles_tendon" checked="checked" disabled><span class="checkmark"></span></label>
                        </div>
                    <?php } else { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">Yes<input type="radio" value="yes" name="achilles_tendon" id="achilles_tendon" disabled><span class="checkmark"></span></label>
                        </div>
                    <?php } ?>
                    
                    <?php if ($achilles_tendon == "no") { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">No<input type="radio" value="no" name="achilles_tendon" id="achilles_tendon" checked="checked" disabled><span class="checkmark"></span></label>
                        </div>
                    <?php } else { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">No<input type="radio" value="no" name="achilles_tendon" id="achilles_tendon" disabled><span class="checkmark"></span></label>
                        </div>
                    <?php } ?>

                    <?php if ($achilles_tendon == "unknown") { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">Unknown<input type="radio" value="unknown" name="achilles_tendon" id="achilles_tendon" checked="checked" disabled><span class="checkmark"></span></label>
                        </div>
                    <?php } else { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">Unknown<input type="radio" value="unknown" name="achilles_tendon" id="achilles_tendon" disabled><span class="checkmark"></span></label>
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
                        <div class="col-2 mb-3">
                        <label class="but-radio">Yes<input type="radio" value="yes" name="nodular_xanthoma" id="nodular_xanthoma" checked="checked" disabled><span class="checkmark"></span></label>
                        </div>
                    <?php } else { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">Yes<input type="radio" value="yes" name="nodular_xanthoma" id="nodular_xanthoma" disabled><span class="checkmark"></span></label>
                        </div>
                    <?php } ?>
                    
                    <?php if ($nodular_xanthoma == "no") { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">No<input type="radio" value="no" name="nodular_xanthoma" id="nodular_xanthoma" checked="checked" disabled><span class="checkmark"></span></label>
                        </div>
                    <?php } else { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">No<input type="radio" value="no" name="nodular_xanthoma" id="nodular_xanthoma" disabled><span class="checkmark"></span></label>
                        </div>
                    <?php } ?>

                    <?php if ($nodular_xanthoma == "unknown") { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">Unknown<input type="radio" value="unknown" name="nodular_xanthoma" id="nodular_xanthoma" checked="checked" disabled><span class="checkmark"></span></label>
                        </div>
                    <?php } else { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">Unknown<input type="radio" value="unknown" name="nodular_xanthoma" id="nodular_xanthoma" disabled><span class="checkmark"></span></label>
                        </div>
                    <?php } ?>      
            </div>
            </div>
        </div>
        </div>
        </div>
        </div>-->

       <div class="row">
        <div class="col-md-12 mb-3 ">
        <div class="but-radio-group mb-3">
        <div class="col form-group mb-3 row">
            <div class="col-md mb-3">
                <label>
                    <?php 
                        if ($first_degree == 1)  { 
                    ?>
                        <input type="checkbox" value="1" checked="checked" disabled>
                        1st Degree Relative
                </label>   
            </div>
        </div>

        <div class="col form-group mb-3 row">
            <div class="col-md mb-3">
                <label>Tendon Xantomata</label>
                <div class="col form-group mb-3 row">
                    <?php if ($first_degree_tendon_xanthomata == "yes") { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">Yes<input type="radio" value="yes" name="first_degree_tendon_xanthomata" id="first_degree_tendon_xanthomata" checked="checked" disabled><span class="checkmark"></span></label>
                        </div>
                    <?php } else { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">Yes<input type="radio" value="yes" name="first_degree_tendon_xanthomata" id="first_degree_tendon_xanthomata" disabled><span class="checkmark"></span></label>
                        </div>
                    <?php } ?>
                    
                    <?php if ($first_degree_tendon_xanthomata == "no") { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">No<input type="radio" value="no" name="first_degree_tendon_xanthomata" id="first_degree_tendon_xanthomata" checked="checked" disabled><span class="checkmark"></span></label>
                        </div>
                    <?php } else { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">No<input type="radio" value="no" name="first_degree_tendon_xanthomata" id="first_degree_tendon_xanthomata" disabled><span class="checkmark"></span></label>
                        </div>
                    <?php } ?>

                    <?php if ($first_degree_tendon_xanthomata == "unknown") { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">Unknown <input type="radio" value="unknown" name="first_degree_tendon_xanthomata" id="first_degree_tendon_xanthomata" checked="checked" disabled><span class="checkmark"></span></label>
                        </div>
                    <?php } else { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">Unknown<input type="radio" value="unknown" name="first_degree_tendon_xanthomata" id="first_degree_tendon_xanthomata" disabled><span class="checkmark"></span></label>
                        </div>
                    <?php } ?>
            </div>
            </div>
        </div>

        </div>
        </div>
        </div>
        
        <div class="col form-group mb-3 row">
            <div class="col-md mb-3">
                <?php
                } else { 
                ?>
                <label>
                     No information for 1st Degree Relative </label>   
            </div>
        </div>
        <?php 
        }
        ?>
        <!--</div>
        </div>
        </div>

        <div class="row">
        <div class="col-md-12 mb-3 ">
        <div class="but-radio-group mb-3">-->
        <div class="col form-group mb-3 row">
            <div class="col-md mb-3">
                
                    <?php 
                        if ($second_degree == 1) {
                    ?>
                    <label><input type="checkbox" value="1" checked="checked" disabled>2nd Degree Relative
                </label>   
            </div>
        </div>

        <div class="col form-group mb-3 row">
            <div class="col-md mb-3">
                <label>Tendon Xantomata</label>
                <div class="col form-group mb-3 row">
                    <?php if ($second_degree_tendon_xanthomata == "yes") { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">Yes<input type="radio" value="yes" name="first_degree_tendon_xanthomata" id="first_degree_tendon_xanthomata" checked="checked" disabled><span class="checkmark"></span></label>
                        </div>
                    <?php } else { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">Yes<input type="radio" value="yes" name="first_degree_tendon_xanthomata" id="first_degree_tendon_xanthomata" disabled><span class="checkmark"></span></label>
                        </div>
                    <?php } ?>
                    
                    <?php if ($second_degree_tendon_xanthomata == "no") { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">No<input type="radio" value="no" name="first_degree_tendon_xanthomata" id="first_degree_tendon_xanthomata" checked="checked" disabled><span class="checkmark"></span></label>
                        </div>
                    <?php } else { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">No<input type="radio" value="no" name="first_degree_tendon_xanthomata" id="first_degree_tendon_xanthomata" disabled><span class="checkmark"></span></label>
                        </div>
                    <?php } ?>

                    <?php if ($second_degree_tendon_xanthomata == "unknown") { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">Unknown<input type="radio" value="unknown" name="first_degree_tendon_xanthomata" id="first_degree_tendon_xanthomata" checked="checked" disabled><span class="checkmark"></span></label>
                        </div>
                    <?php } else { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">Unknown<input type="radio" value="unknown" name="first_degree_tendon_xanthomata" id="first_degree_tendon_xanthomata" disabled><span class="checkmark"></span></label>
                        </div>
                    <?php } ?>
            </div>
            </div>
        </div>

        <div class="col form-group mb-3 row">
            <div class="col-md mb-3">
                <?php
                } else {
                ?>
                <label>No information for 2nd Degree Relative</label>   
            
        <?php 
        }
        ?>
		</div>
        </div>
        </div>
        </div>
        </div>

        <hr class="mb-3">

        <div class="row">
        <div class="col-md-12">
            <label>3. Family history of premature CAD in:</label>
        </div>
        </div>

        <div class="row">
        <div class="col-md-12 mb-3 ">
        <div class="but-radio-group mb-3">
        <div class="col form-group mb-3 row">
            <div class="col-md mb-3">
                <label>
                <?php 
                    if ($first_degree_premature_cad == "yes" && $first_degree_age < 60) {
                ?>
                    <input type="checkbox" value="1" checked="checked" disabled>
                        
                        
                <?php
                    } else {
                ?>
                    <input type="checkbox" value="1" disabled>
                <?php 
                    }
                    ?>
                1st Degree Relatives (< 55 years for men; < 60 years for women) 
                </label>   
            </div>
        </div>

        <div class="col form-group mb-3 row">
            <div class="col-md mb-3">
                <label>Premature CAD</label>
                <div class="col form-group mb-3 row">
                    <?php if ($first_degree_premature_cad == "yes") { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">Yes<input type="radio" value="yes" name="first_degree_premature_cad" id="first_degree_premature_cad" checked="checked" disabled><span class="checkmark"></span></label>
                        </div>
                    <?php } else { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">Yes<input type="radio" value="yes" name="first_degree_premature_cad" id="first_degree_premature_cad" disabled><span class="checkmark"></span></label>
                        </div>
                    <?php } ?>
                    
                    <?php if ($first_degree_premature_cad == "no") { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">No<input type="radio" value="no" name="first_degree_premature_cad" id="first_degree_premature_cad" checked="checked" disabled><span class="checkmark"></span></label>
                        </div>
                    <?php } else { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">No<input type="radio" value="no" name="first_degree_premature_cad" id="first_degree_premature_cad" disabled><span class="checkmark"></span></label>
                        </div>
                    <?php } ?>

                    <?php if ($first_degree_premature_cad == "unknown") { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">Unknown<input type="radio" value="unknown" name="first_degree_premature_cad" id="first_degree_premature_cad" checked="checked" disabled><span class="checkmark"></span></label>
                        </div>
                    <?php } else { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">Unknown<input type="radio" value="unknown" name="first_degree_premature_cad" id="first_degree_premature_cad" disabled><span class="checkmark"></span></label>
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
                    if ($second_degree_premature_cad == "yes" && $second_degree_age < 50) {
                ?>
                    <input type="checkbox" value="1" checked="checked" disabled>
                <?php
                    } else {
                ?>
                    <input type="checkbox" value="1" disabled>
                <?php 
                    }
                    ?>
                2nd degree relatives (age < 50 years) 
                </label>   
            </div>
        </div>

        <div class="col form-group mb-3 row">
            <div class="col-md mb-3">
                <label>Premature CAD</label>
                <div class="col form-group mb-3 row">
                    <?php if ($second_degree_premature_cad == "yes") { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">Yes<input type="radio" value="yes" name="second_degree_premature_cad" id="second_degree_premature_cad" checked="checked" disabled=""><span class="checkmark"></span></label>
                        </div>
                    <?php } else { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">Yes<input type="radio" value="yes" name="second_degree_premature_cad" id="second_degree_premature_cad" disabled=""><span class="checkmark"></span></label>
                        </div>
                    <?php } ?>
                    
                    <?php if ($second_degree_premature_cad == "no") { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">No<input type="radio" value="no" name="second_degree_premature_cad" id="second_degree_premature_cad" checked="checked" disabled=""><span class="checkmark"></span></label>
                        </div>
                    <?php } else { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">No<input type="radio" value="no" name="second_degree_premature_cad" id="second_degree_premature_cad" disabled=""><span class="checkmark"></span></label>
                        </div>
                    <?php } ?>

                    <?php if ($second_degree_premature_cad == "unknown") { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">Unknown<input type="radio" value="unknown" name="second_degree_premature_cad" id="second_degree_premature_cad" checked="checked" disabled=""><span class="checkmark"></span></label>
                        </div>
                    <?php } else { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">Unknown<input type="radio" value="unknown" name="second_degree_premature_cad" id="second_degree_premature_cad" disabled=""><span class="checkmark"></span></label>
                        </div>
                    <?php } ?>                     
            </div>
            </div>
        </div>
        </div>
        </div>
        </div>

        <hr class="mb-3">

        <div class="row">
        <div class="col-md-12">
            <label>4. Family history of hypercholesterolaemia in:</label>
        </div>
        </div>

        <div class="row">
        <div class="col-md-12 mb-3 ">
        <div class="but-radio-group mb-3">
        <div class="col form-group mb-3 row">
            <div class="col-md mb-3">
                <label>
                <?php 
                    if ($first_degree_age >= 16 && $first_degree_hyperlipidaemia =="yes" ) {
                ?>
                    <input type="checkbox" value="1" checked="checked" disabled>
                <?php
                    } else {
                ?>
                    <input type="checkbox" value="1" disabled>
                <?php 
                    }
                    ?>
                Adult 1st degree relative: (TC > 7.5mmol/L)
                </label>   
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
                    if ($second_degree_age >= 16 &&  $second_degree_hyperlipidaemia =="yes") {
                ?>
                    <input type="checkbox" value="1" checked="checked" disabled>
                <?php
                    } else {
                ?>
                    <input type="checkbox" value="1" disabled>
                <?php 
                    }
                    ?>
                Adult 2nd degree relative: (TC > 7.5mmol/L)
                </label>   
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
                    if ($first_degree_age < 16 && $first_degree_hyperlipidaemia =="yes") {
                ?>
                    <input type="checkbox" value="1" checked="checked" disabled>
                <?php
                    } else {
                ?>
                    <input type="checkbox" value="1" disabled>
                <?php 
                    }
                    ?>
                Children or siblings < 16 years: (TC > 6.7 mmol/L)
                </label>   
            </div>
        </div>
        </div>
        </div>
        </div>

        <hr class="mb-3">

        <!--<div class="row">
                <div class="col-md-12">
                    <label>5. Has genetic mutation analysis been done?</label>
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
                
                    <div id="autoUpdate_gm" class="col-md-12 autoUpdate_gm">
                                
                        <label class="col col-form-label" > In which FH candidate gene?  Select patient coronary risk factor(s). 
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
                            
                            <?php if ($other_fh_mutations == "yes") { ?>
                                <div class="col-6 mb-3">
                                    <input type="checkbox" value="yes" name="other_fh_mutations" id="other_fh_mutations" checked="checked" disabled> Other FH mutations (eg: <i>LDLRAP1, APOE, LIPA</i>) Please state  
                                    <input type="text" name="other_fh_mutations_detail" value="<?php echo $other_fh_mutations_detail; ?>" size="14" disabled>  <br />
                                </div>
                            <?php } else { ?>
                                <div class="col-6 mb-3">
                                    <input type="checkbox" value="yes" name="other_fh_mutations" id="other_fh_mutations" disabled> Other FH mutations (eg: <i>LDLRAP1, APOE, LIPA</i>)Please state  
                                    <input type="text" name="other_fh_mutations_detail" size="14" disabled>  <br />
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
                    </div>        
                </div>
                </div>
                </div> -->
        
        <hr class="mb-3">

        <div class="row">
            <div class="col-md-2 col-2">
                <button type="button" onClick="window.location.href='{{URL::to('patient-dashboard')}}/<?php echo $patientid; ?>'"  class="btn btn-dark btn-block but-custom2"><i class="fa fa-long-arrow-left fa-lg"></i></button>
            </div>
        </div>
        </div>
        </div>
        </div>
        
<!-- baru -->



<script type="text/javascript">     
function PrintDiv() {    
   var divToPrint = document.getElementById('divToPrint');
   var popupWin = window.open('');
   popupWin.document.open();
   popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
    popupWin.document.close();
        }
</script>

<div id="divToPrint" style="display:none;">
  <div style="background-color:white;">
<div class="container">
    
    <div class="col-md-12" id="panel1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Simon Broome Diagnostic Criteria</h3>
            </div>

            <div class="panel-body two-col">
                <b><?php 
                    if (($result_sb != 'UNLIKELY') || ($result_sb != 'INVALID')) {
                        ?><font size="5px">Category  :</font><font color="green" size="5px"><?php echo $result_sb; ?></font><?php
                    } else {
                        ?><font size="5px">Category  :</font><font color="red" size="5px"><?php echo $result_sb; ?></font><?php
                    }
                 ?></b>
                <hr />
                <!-- first question -->
                <div class="row">
                    <?php
                    
                    if ($nricage >= 16) {
                    ?>
                    <div class="col-md-12">
                        <!--  -->
                            <label>
                                1.1 ADULT
                            </label>
                        <!-- </div> -->
                    </div>
                    <div class="col-md-12">
                        <label class="well well-sm col-xs-12" style="font-weight: normal;" for="2-6-20">
                            <?php
                                
                                if ($patienttclevel > 7.5) {
                            ?>
                                <input type="checkbox" value="" name="2-6-20" id="2-6-20" checked="checked" disabled>
                                Total cholesterol > 7.5 mmol/L 
                            <?php
                                }
                                else {
                            ?>
                                <input type="checkbox" value="" name="2-6-20" id="2-6-20" disabled>
                                Total cholesterol > 7.5 mmol/L 
                            <?php
                                }
                            ?>
                        </label>    
                    </div>
                    <div class="col-md-12">
                        <label class="well well-sm col-xs-12" style="font-weight: normal;" for="2-6-21">
                            <?php
                                
                                if ($patientldlclevel > 4.9) {
                            ?>    
                                <input type="checkbox" value="" name="2-6-21" id="2-6-21" checked="checked" disabled>
                                LDL cholesterol > 4.9 mmol/L
                            <?php
                                }
                                else {
                            ?>
                                <input type="checkbox" value="" name="2-6-21" id="2-6-21" disabled>
                                LDL cholesterol > 4.9 mmol/L
                            <?php
                                }
                            ?>
                        </label>    
                    </div>
                    <?php
                    }
                    else {
                    ?>
                    <div class="col-md-12">
                        <!--  -->
                            <label>
                                1.2 AGED < 16 YEARS
                            </label>
                        <!-- </div> -->
                    </div>
                    <div class="col-md-12">
                        <label class="well well-sm col-xs-12" style="font-weight: normal;" for="2-6-22">
                            <?php
                                
                                if ($patienttclevel > 6.7) {
                            ?>    
                                <input type="checkbox" value="" name="2-6-22" id="2-6-22" checked="checked" disabled>
                                Total cholesterol > 6.7 mmol/L
                            <?php
                                } else {
                            ?>
                                <input type="checkbox" value="" name="2-6-22" id="2-6-22" disabled>
                            Total cholesterol > 6.7 mmol/L
                            <?php
                                }
                            ?>
                        </label>
                    </div>
                    <div class="col-md-12">
                        <label class="well well-sm col-xs-12" style="font-weight: normal;" for="2-6-23">
                            <?php
                                if ($patientldlclevel > 4.0) {
                            ?>     
                                <input type="checkbox" value="" name="2-6-23" id="2-6-23" checked="checked" disabled>
                                LDL cholesterol > 4.0 mmol/L 
                            <?php
                                } else {
                            ?>
                                <input type="checkbox" value="" name="2-6-23" id="2-6-23" disabled>
                                LDL cholesterol > 4.0 mmol/L 
                            <?php
                                }
                            ?>
                        </label>
                    </div>
                    <?php
                    }
                    ?>
                </div>
                <hr />
                <!-- finish first question -->

                <!-- second question -->
                <div class="row">
                    <div class="col-md-12">
                        <!--  -->
                            <label>
                                2. Tendon Xanthomata
                            </label>
                        <!-- </div> -->
                    </div>
                    <hr>
                    <div class="col-md-12">
                        <label class="well well-sm col-xs-12" style="font-weight: normal;" for="2-7-24">
                                <?php 
                                    if ($tendon_xanthomata == "yes" || $achilles_tendon == "yes" || $nodular_xanthoma == "yes") {
                                ?>
                                    <input type="checkbox" value="1" checked="checked" disabled>
                                <?php
                                    } else {
                                ?>
                                    <input type="checkbox" value="1" disabled>
                                <?php 
                                    }
                                 ?>
                                Patient
                             <br /><br />
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
                            <br /><br />

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
                            <br /><br />
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
                    <br /><br />
                    <div class="col-md-12">
                        <label class="well well-sm col-xs-12" style="font-weight: normal;" for="2-7-25">
                                <?php 
                                    if ($first_degree_tendon_xanthomata == "yes") {
                                ?>
                                    <input type="checkbox" value="1" checked="checked" disabled>
                                    1st Degree Relative
                                    <br /><br />
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
                                <?php
                                    } else {
                                ?>
                                    <input type="checkbox" value="1" disabled>
                                    1st Degree Relative
                                <?php 
                                    }
                                 ?>
                        </label>
                            
                    </div>
                    <br /><br />
                    <div class="col-md-12">
                        <label class="well well-sm col-xs-12" style="font-weight: normal;" for="2-7-26">
                                <?php 
                                    if ($second_degree_tendon_xanthomata == "yes") {
                                ?>
                                    <input type="checkbox" value="1" checked="checked" disabled>
                                    2nd Degree Relative
                                    <br /><br />
                                 Tendon Xantomata <br />
                                    <?php if ($second_degree_tendon_xanthomata == "yes") { ?>
                                        <input type="radio" value="yes" name="first_degree_tendon_xanthomata_print" id="first_degree_tendon_xanthomata_print" checked="checked" disabled> Yes  <br />
                                    <?php } else { ?>
                                        <input type="radio" value="yes" name="first_degree_tendon_xanthomata_print" id="first_degree_tendon_xanthomata_print" disabled> Yes  <br />
                                    <?php } ?>
                                    
                                    <?php if ($second_degree_tendon_xanthomata == "no") { ?>
                                    <input type="radio" value="no" name="first_degree_tendon_xanthomata_print" id="first_degree_tendon_xanthomata_print" checked="checked" disabled> No  <br /> 
                                    <?php } else { ?>
                                    <input type="radio" value="no" name="first_degree_tendon_xanthomata_print" id="first_degree_tendon_xanthomata_print" disabled> No  <br /> 
                                    <?php } ?>

                                    <?php if ($second_degree_tendon_xanthomata == "unknown") { ?>
                                    <input type="radio" value="unknown" name="first_degree_tendon_xanthomata_print" id="first_degree_tendon_xanthomata_print" checked="checked" disabled> Unknown 
                                    <?php } else { ?>
                                    <input type="radio" value="unknown" name="first_degree_tendon_xanthomata_print" id="first_degree_tendon_xanthomata_print" disabled> Unknown 
                                    <?php } ?>
                                <?php
                                    } else {
                                ?>
                                    <input type="checkbox" value="1" disabled>
                                    2nd Degree Relative
                                <?php 
                                    }
                                 ?>
                                 
                        </label>
                    </div>
                </div>
                <hr />
                <!-- finish second question -->

                <!-- third question -->
                <div class="row">
                    <div class="col-md-12">
                        <!--  -->
                            <label>
                                3. Family history of premature CAD in:
                            </label>
                        <!-- </div> -->
                    </div>
                    <hr>
                    <div class="col-md-12">
                        <label class="well well-sm col-xs-12" style="font-weight: normal;" for="2-8-27">
                                <?php 
                                    if ($first_degree_premature_cad == "yes" && $first_degree_age < 60) {
                                ?>
                                    <input type="checkbox" value="1" checked="checked" disabled>
                                <?php
                                    } else {
                                ?>
                                    <input type="checkbox" value="1" disabled>
                                <?php 
                                    }
                                 ?>
                                1st degree relatives (< 55 years for men; < 60 years for women)<br />
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
                        <label class="well well-sm col-xs-12" style="font-weight: normal;" for="2-8-28">
                                <?php 
                                    if ($second_degree_premature_cad == "yes" && $second_degree_age < 50) {
                                ?>
                                    <input type="checkbox" value="1" checked="checked" disabled>
                                <?php
                                    } else {
                                ?>
                                    <input type="checkbox" value="1" disabled>
                                <?php 
                                    }
                                 ?>
                                2nd degree relatives (age < 50 years)
                                <br />
                                Premature CAD <br />
                                <?php if ($second_degree_premature_cad == "yes") { ?>
                                    <input type="radio" value="yes" name="second_degree_premature_cad_print" id="second_degree_premature_cad_print" checked="checked" disabled> Yes  <br />
                                <?php } else { ?>
                                    <input type="radio" value="yes" name="second_degree_premature_cad_print" id="second_degree_premature_cad_print" disabled=""> Yes  <br />
                                <?php } ?>
                                
                                <?php if ($second_degree_premature_cad == "no") { ?>
                                <input type="radio" value="no" name="second_degree_premature_cad_print" id="second_degree_premature_cad_print" checked="checked" disabled=""> No  <br /> 
                                <?php } else { ?>
                                <input type="radio" value="no" name="second_degree_premature_cad_print" id="second_degree_premature_cad_print" disabled=""> No  <br /> 
                                <?php } ?>

                                <?php if ($second_degree_premature_cad == "unknown") { ?>
                                <input type="radio" value="unknown" name="second_degree_premature_cad_print" id="second_degree_premature_cad_print" checked="checked" disabled=""> Unknown 
                                <?php } else { ?>
                                <input type="radio" value="unknown" name="second_degree_premature_cad_print" id="second_degree_premature_cad_print" disabled=""> Unknown 
                                <?php } ?> 
                        </label>
                    </div>
                </div>
                <hr />
                <!-- finish third question -->

                <!-- fourth question -->
                <div class="row">
                    <div class="col-md-12">
                        <!--  -->
                            <label>
                                4. Family history of hypercholesterolaemia in:
                            </label>
                        <!-- </div> -->
                    </div>
                    <hr>
                    <div class="col-md-12">
                            <label class="well well-sm col-xs-12" style="font-weight: normal;" for="2-9-29">
                                    <?php 
                                        if ($first_degree_age >= 16 && $first_degree_tclvl > 7.5) {
                                    ?>
                                        <input type="checkbox" value="1" checked="checked" disabled>
                                    <?php
                                        } else {
                                    ?>
                                        <input type="checkbox" value="1" disabled>
                                    <?php 
                                        }
                                     ?>
                                    Adult 1st degree relative: (TC > 7.5mmol/L)
                            </label>
                            
                    </div>
                    <div class="col-md-12">
                            <label class="well well-sm col-xs-12" style="font-weight: normal;" for="2-9-30">
                                    <?php 
                                        if ($second_degree_age >= 16 && $second_degree_tclvl > 7.5) {
                                    ?>
                                        <input type="checkbox" value="1" checked="checked" disabled>
                                    <?php
                                        } else {
                                    ?>
                                        <input type="checkbox" value="1" disabled>
                                    <?php 
                                        }
                                     ?>
                                    Adult 2nd degree relative: (TC > 7.5mmol/L)
                            </label>
                            
                    </div>
                    <div class="col-md-12">
                            <label class="well well-sm col-xs-12" style="font-weight: normal;" for="2-9-31">
                                    <?php 
                                        if ($first_degree_age < 16 && $first_degree_tclvl > 6.7) {
                                    ?>
                                        <input type="checkbox" value="1" checked="checked" disabled>
                                    <?php
                                        } else {
                                    ?>
                                        <input type="checkbox" value="1" disabled>
                                    <?php 
                                        }
                                     ?>
                                    Children or siblings < 16 years: (TC > 6.7 mmol/L)
                            </label>
                            
                    </div>
                </div>
                <hr />
                <!-- finish fourth question -->

                <!-- fifth question -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- <div class="well well-sm"> -->
                            <label>
                                5. Genetic Mutation?
                                <?php if ($genetic_mutation == 1) { ?> 
                                    <input type="checkbox" value="1" name="genetic_mutation_print" id="genetic_mutation_print" disabled="" checked>
                                <?php } else { ?>
                                    <input type="checkbox" value="1" name="genetic_mutation_print" id="genetic_mutation_print" disabled="">
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
                    <br /><br />
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
                            <br />
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
                            <i>Other FH Mutations</i>
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
                <hr />
                <!-- finish fifth question -->


            </div>
        </div>
    </div>
</div>
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
@endsection