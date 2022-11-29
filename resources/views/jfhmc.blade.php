@extends('layouts.app')
@section('title', 'FH CatScreen')

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
                $first_question_jfhmc = $patientscoretbl->first_question_jfhmc;
                $second_question_jfhmc = $patientscoretbl->second_question_jfhmc;
                $third_question_jfhmc = $patientscoretbl->third_question_jfhmc;
                $total_jfhmc = $patientscoretbl->total_jfhmc;
                $result_jfhmc = $patientscoretbl->result_jfhmc;
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
                <p class="txt-title2">JFHMC Heterozygous FH</p>
            </div>
            <div class="col-md mb-3">
                <a onclick="PrintDiv();" href=""><span class="glyphicon glyphicon-print"></span> Print</a></span>
            </div>
        </div>

        <b><?php 
            if (($result_jfhmc == 'UNLIKELY') || ($result_jfhmc == 'NO')) {
                ?><font size="5px">Category  :</font><font color="green" size="5px"><?php echo $result_jfhmc; ?></font><?php
            } else {
                ?><font size="5px">Category  :</font><font color="red" size="5px"><?php echo $result_jfhmc; ?></font><?php
            }
            ?></b>
        <hr class="mb-3">

        <div class="row">
        <div class="col-md-12">
            <label>
            1. Hyperlipidaemia (before treatment)
            </label>
        </div>
        </div>

        <div class="row">
        <div class="col-md-12 mb-3 ">
        <div class="but-radio-group mb-3">
        <div class="col form-group mb-3 row">
            <div class="col-md mb-3">
                <label>
                <?php
                    if ($patientldlclevel >= 4.7) {
                ?>
                <input type="checkbox" value="" name="3-16-35" id="3-16-35" checked disabled>
                LDL-C >= 4.7 mmol/L 
                <?php
                    }
                    else {
                ?>
                <input type="checkbox" value="" name="3-16-35" id="3-16-35" disabled>
                LDL-C >= 4.7 mmol/L
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
            <label>
            2. Xanthomata
            </label>
        </div>
        </div>

        <div class="row">
        <div class="col-md-12 mb-3 ">
        <div class="but-radio-group mb-3">
        <div class="col form-group mb-3 row">
            <div class="col-md mb-3">
                <label>
                <?php 
                    if ($tendon_xanthomata == "yes" || $tendon_xanthomata_elbows == "yes" || $tendon_xanthomata_palms == "yes" || $tendon_xanthomata_knees == "yes" || $tendon_xanthomata_heels == "yes" || $tendon_xanthomata_fingers == "yes") {
                ?>
                    <input type="checkbox" value="1" checked="checked" disabled>
                <?php
                    } else {
                ?>
                    <input type="checkbox" value="1" disabled>
                <?php 
                    }
                    ?>
                Tendon xanthomata on the dorsal hands, elbows and knees
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
                    if ($achilles_tendon == "yes") {
                ?>
                    <input type="checkbox" value="1" checked="checked" disabled>
                <?php
                    } else {
                ?>
                    <input type="checkbox" value="1" disabled>
                <?php 
                    }
                    ?>
                Achilles tendon thickening
            </div>
        </div>
        <div class="col form-group mb-3 row">
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
                    if ($nodular_xanthoma == "yes") {
                ?>
                    <input type="checkbox" value="1" checked="checked" disabled>
                <?php
                    } else {
                ?>
                    <input type="checkbox" value="1" disabled>
                <?php 
                    }
                    ?>
                Nodular xanthoma on the skin
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
        </div>

        <hr class="mb-3">

        <div class="row">
        <div class="col-md-12">
            <label>
            3a. Family history within the 1st degree relatives:
            </label>
        </div>
        </div>

        <div class="row">
        <div class="col-md-12 mb-3 ">
        <div class="but-radio-group mb-3">
        <div class="col form-group mb-3 row">
            <div class="col-md mb-3">
                <label>
                <?php 
                    if ($first_degree_fh == "yes") {
                ?>
                    <input type="checkbox" value="1" checked="checked" disabled>
                <?php
                    } else {
                ?>
                    <input type="checkbox" value="1" disabled>
                <?php 
                    }
                    ?>
                FH</label>
            </div>
        </div>
        <div class="col form-group mb-3 row">
            <div class="col-md mb-3">
                <label>Confirmed FH</label>
                <div class="col form-group mb-3 row">
                    <?php if ($first_degree_fh == "yes") { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">Yes<input type="radio" value="yes" name="first_degree_fh" id="first_degree_fh" checked="checked" disabled><span class="checkmark"></span></label>
                        </div>
                    <?php } else { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">Yes<input type="radio" value="yes" name="first_degree_fh" id="first_degree_fh" disabled><span class="checkmark"></span></label>
                        </div>
                    <?php } ?>
                    
                    <?php if ($first_degree_fh == "no") { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">No<input type="radio" value="no" name="first_degree_fh" id="first_degree_fh" checked="checked" disabled><span class="checkmark"></span></label>
                        </div>
                    <?php } else { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">No<input type="radio" value="no" name="first_degree_fh" id="first_degree_fh" disabled><span class="checkmark"></span></label>
                        </div>
                    <?php } ?>

                    <?php if ($first_degree_fh == "unknown") { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">Unknown<input type="radio" value="unknown" name="first_degree_fh" id="first_degree_fh" checked="checked" disabled><span class="checkmark"></span></label>
                        </div>
                    <?php } else { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">Unknown<input type="radio" value="unknown" name="first_degree_fh" id="first_degree_fh" disabled><span class="checkmark"></span></label>
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
                    if (($first_degree_age < 55 && $first_degree_gender == 1 && $first_degree_premature_cad == "yes") || ($first_degree_age < 60 && $first_degree_gender == 2 && $first_degree_premature_cad == "yes")) {
                ?>
                    <input type="checkbox" value="1" checked="checked" disabled>
                <?php
                    } else {
                ?>
                    <input type="checkbox" value="1" disabled>
                <?php 
                    }
                    ?>
                Premature CAD ( < 55 years for man; < 60 years for woman)</label>
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

        <hr class="mb-3">

        <div class="row">
        <div class="col-md-12">
            <label>
            3b. Family history within the 2nd degree relatives:
            </label>
        </div>
        </div>

        <div class="row">
        <div class="col-md-12 mb-3 ">
        <div class="but-radio-group mb-3">
        <div class="col form-group mb-3 row">
            <div class="col-md mb-3">
                <label>
                <?php 
                    if ($second_degree_fh == "yes") {
                ?>
                    <input type="checkbox" value="1" checked="checked" disabled>
                <?php
                    } else {
                ?>
                    <input type="checkbox" value="1" disabled>
                <?php 
                    }
                    ?>
                FH</label>
            </div>
        </div>
        <div class="col form-group mb-3 row">
            <div class="col-md mb-3">
                <label>Confirmed FH</label>
                <div class="col form-group mb-3 row">
                    <?php if ($second_degree_fh == "yes") { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">Yes<input type="radio" value="yes" name="second_degree_fh" id="second_degree_fh" checked="checked" disabled><span class="checkmark"></span></label>
                        </div>
                    <?php } else { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">Yes<input type="radio" value="yes" name="second_degree_fh" id="second_degree_fh" disabled><span class="checkmark"></span></label>
                        </div>
                    <?php } ?>
                    
                    <?php if ($second_degree_fh == "no") { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">No<input type="radio" value="no" name="second_degree_fh" id="second_degree_fh" checked="checked" disabled><span class="checkmark"></span></label>
                        </div>
                    <?php } else { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">No<input type="radio" value="no" name="second_degree_fh" id="second_degree_fh" disabled><span class="checkmark"></span></label>
                        </div>
                    <?php } ?>

                    <?php if ($second_degree_fh == "unknown") { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">Unknown<input type="radio" value="unknown" name="second_degree_fh" id="second_degree_fh" checked="checked" disabled><span class="checkmark"></span></label>
                        </div>
                    <?php } else { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">Unknown<input type="radio" value="unknown" name="second_degree_fh" id="second_degree_fh" disabled><span class="checkmark"></span></label>
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
                    if (($second_degree_age < 55 && $second_degree_gender == 1 && $second_degree_premature_cad == "yes") || ($second_degree_age < 60 && $second_degree_gender == 2 && $second_degree_premature_cad == "yes")) {
                ?>
                    <input type="checkbox" value="1" checked="checked" disabled>
                <?php
                    } else {
                ?>
                    <input type="checkbox" value="1" disabled>
                <?php 
                    }
                    ?>
                Premature CAD ( < 55 years for man; < 60 years for woman)</label>
            </div>
        </div>
        <div class="col form-group mb-3 row">
            <div class="col-md mb-3">
                <label>Premature CAD</label>
                <div class="col form-group mb-3 row">
                    <?php if ($second_degree_premature_cad == "yes") { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">Yes<input type="radio" value="yes" name="second_degree_premature_cad" id="second_degree_premature_cad" checked="checked" disabled><span class="checkmark"></span></label>
                        </div>
                    <?php } else { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">Yes<input type="radio" value="yes" name="second_degree_premature_cad" id="second_degree_premature_cad" disabled><span class="checkmark"></span></label>
                        </div>
                    <?php } ?>
                    
                    <?php if ($second_degree_premature_cad == "no") { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">No<input type="radio" value="no" name="second_degree_premature_cad" id="second_degree_premature_cad" checked="checked" disabled><span class="checkmark"></span></label>
                        </div>
                    <?php } else { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">No<input type="radio" value="no" name="second_degree_premature_cad" id="second_degree_premature_cad" disabled><span class="checkmark"></span></label>
                        </div>
                    <?php } ?>

                    <?php if ($second_degree_premature_cad == "unknown") { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">Unknown<input type="radio" value="unknown" name="second_degree_premature_cad" id="second_degree_premature_cad" checked="checked" disabled><span class="checkmark"></span></label>
                        </div>
                    <?php } else { ?>
                        <div class="col-2 mb-3">
                        <label class="but-radio">Unknown<input type="radio" value="unknown" name="second_degree_premature_cad" id="second_degree_premature_cad" disabled><span class="checkmark"></span></label>
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

                    <h3 class="panel-title">JFHMC Heterozygous FH</h3>
                </div>
                <div class="panel-body two-col">
                    <!-- first question -->
                    <b><?php 
                        if (($result_jfhmc != 'UNLIKELY') || ($result_jfhmc != 'INVALID')) {
                            ?><font size="5px">Category  :</font><font color="green" size="5px"><?php echo $result_jfhmc; ?></font><?php
                        } else {
                            ?><font size="5px">Category  :</font><font color="red" size="5px"><?php echo $result_jfhmc; ?></font><?php
                        }
                     ?></b>
                    <hr />
                    <div class="row">
                        <div class="col-md-12">
                            <!--  -->
                                <label>
                                    1. Hyperlipidaemia (before treatment)
                                </label>
                            <!-- </div> -->
                        </div>
                        <div class="col-md-12">
                            <label class="well well-sm col-xs-12" style="font-weight: normal;" for="3-16-35">
                                    <?php
                                        if ($patientldlclevel >= 4.7) {
                                    ?>
                                    <input type="checkbox" value="" name="3-16-35" id="3-16-35" checked disabled>
                                    LDL-C >= 4.7 mmol/L 
                                    <?php
                                        }
                                        else {
                                    ?>
                                    <input type="checkbox" value="" name="3-16-35" id="3-16-35" disabled>
                                    LDL-C >= 4.7 mmol/L
                                    <?php
                                        }
                                    ?>
                            </label>    
                        </div>
                    </div>
                    <hr />
                    <!-- finish first question -->

                    <!-- second question -->
                    <div class="row">
                        <div class="col-md-12">
                            <!--  -->
                                <label>
                                    2. Xanthomata
                                </label>
                            <!-- </div> -->
                        </div>
                        <hr>
                        <div class="col-md-12">
                            <label class="well well-sm col-xs-12" style="font-weight: normal;" for="3-17-36">
                                    <?php 
                                        if ($tendon_xanthomata == "yes") {
                                    ?>
                                        <input type="checkbox" value="1" checked="checked" disabled>
                                    <?php
                                        } else {
                                    ?>
                                        <input type="checkbox" value="1" disabled>
                                    <?php 
                                        }
                                     ?>
                                    Tendon xanthomata on the dorsal hands, elbows and knees
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
                                
                            </label>
                                
                        </div><br /><br />
                        <div class="col-md-12">
                            <label class="well well-sm col-xs-12" style="font-weight: normal;" for="3-17-37">
                                    <?php 
                                        if ($achilles_tendon == "yes") {
                                    ?>
                                        <input type="checkbox" value="1" checked="checked" disabled>
                                    <?php
                                        } else {
                                    ?>
                                        <input type="checkbox" value="1" disabled>
                                    <?php 
                                        }
                                     ?>
                                    Achilles tendon thickening
                                   
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
                            </label>
                                
                        </div> <br /><br />
                        <div class="col-md-12">
                            <label class="well well-sm col-xs-12" style="font-weight: normal;" for="3-17-38">
                                    <?php 
                                        if ($nodular_xanthoma == "yes") {
                                    ?>
                                        <input type="checkbox" value="1" checked="checked" disabled>
                                    <?php
                                        } else {
                                    ?>
                                        <input type="checkbox" value="1" disabled>
                                    <?php 
                                        }
                                     ?>
                                    Nodular xanthoma on the skin
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
                    </div><br /><br />
                    <hr />
                    <!-- finish second question -->

                    <!-- third question -->
                    <div class="row">
                        <div class="col-md-12">
                            <!--  -->
                                <label>
                                    3a. Family history within the 1st degree relatives:
                                </label>
                            <!-- </div> -->
                        </div>
                        <hr>
                        <div class="col-md-12">
                            <label class="well well-sm col-xs-12" style="font-weight: normal;" for="3-18-39">
                                    <?php 
                                        if ($first_degree_fh == "yes") {
                                    ?>
                                        <input type="checkbox" value="1" checked="checked" disabled>
                                    <?php
                                        } else {
                                    ?>
                                        <input type="checkbox" value="1" disabled>
                                    <?php 
                                        }
                                     ?>
                                    FH
                                    <br />
                                    Confirmed FH <br />
                                <?php if ($first_degree_fh == "yes") { ?>
                                    <input type="radio" value="yes" name="first_degree_fh_print"id="first_degree_fh_print"checked="checked" disabled> Yes  <br />
                                <?php } else { ?>
                                    <input type="radio" value="yes" name="first_degree_fh_print"id="first_degree_fh_print"disabled> Yes  <br />
                                <?php } ?>
                                
                                <?php if ($first_degree_fh == "no") { ?>
                                <input type="radio" value="no" name="first_degree_fh_print"id="first_degree_fh_print"checked="checked" disabled> No  <br /> 
                                <?php } else { ?>
                                <input type="radio" value="no" name="first_degree_fh_print"id="first_degree_fh_print"disabled> No  <br /> 
                                <?php } ?>

                                <?php if ($first_degree_fh == "unknown") { ?>
                                <input type="radio" value="unknown" name="first_degree_fh_print"id="first_degree_fh_print"checked="checked" disabled> Unknown 
                                <?php } else { ?>
                                <input type="radio" value="unknown" name="first_degree_fh_print"id="first_degree_fh_print"disabled> Unknown 
                                <?php } ?> 
                            </label>
                        </div><br /><br />
                        <div class="col-md-12">
                            <label class="well well-sm col-xs-12" style="font-weight: normal;" for="3-18-40">
                                    <?php 
                                        if (($first_degree_age < 55 && $first_degree_gender == 1 && $first_degree_premature_cad == "yes") || ($first_degree_age < 60 && $first_degree_gender == 2 && $first_degree_premature_cad == "yes")) {
                                    ?>
                                        <input type="checkbox" value="1" checked="checked" disabled>
                                    <?php
                                        } else {
                                    ?>
                                        <input type="checkbox" value="1" disabled>
                                    <?php 
                                        }
                                     ?>
                                    Premature CAD ( < 55 years for man; < 60 years for woman)
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
                    </div><br /><br />
                    <hr />
                    <div class="row">
                        <div class="col-md-12">
                            <!--  -->
                                <label>
                                    3b. Family history within the 2nd degree relatives:
                                </label>
                            <!-- </div> -->
                        </div>
                        <hr>
                        <div class="col-md-12">
                            <label class="well well-sm col-xs-12" style="font-weight: normal;" for="3-18-41">
                                    <?php 
                                        if ($second_degree_fh == "yes") {
                                    ?>
                                        <input type="checkbox" value="1" checked="checked" disabled>
                                    <?php
                                        } else {
                                    ?>
                                        <input type="checkbox" value="1" disabled>
                                    <?php 
                                        }
                                     ?>
                                    FH
                                    <br />
                                    Confirmed FH <br />
                                    <?php if ($second_degree_fh == "yes") { ?>
                                        <input type="radio" value="yes" name="second_degree_fh_print"id="second_degree_fh_print"checked="checked" disabled> Yes  <br />
                                    <?php } else { ?>
                                        <input type="radio" value="yes" name="second_degree_fh_print"id="second_degree_fh_print"disabled> Yes  <br />
                                    <?php } ?>
                                    
                                    <?php if ($second_degree_fh == "no") { ?>
                                    <input type="radio" value="no" name="second_degree_fh_print"id="second_degree_fh_print"checked="checked" disabled> No  <br /> 
                                    <?php } else { ?>
                                    <input type="radio" value="no" name="second_degree_fh_print"id="second_degree_fh_print"disabled> No  <br /> 
                                    <?php } ?>

                                    <?php if ($second_degree_fh == "unknown") { ?>
                                    <input type="radio" value="unknown" name="second_degree_fh_print"id="second_degree_fh_print"checked="checked" disabled> Unknown 
                                    <?php } else { ?>
                                    <input type="radio" value="unknown" name="second_degree_fh_print"id="second_degree_fh_print"disabled> Unknown 
                                    <?php } ?> 
                            </label>
                        </div><br /><br />
                        <div class="col-md-12">
                            <label class="well well-sm col-xs-12" style="font-weight: normal;" for="3-18-42">
                                    <?php 
                                        if (($second_degree_age < 55 && $second_degree_gender == 1 && $second_degree_premature_cad == "yes") || ($second_degree_age < 60 && $second_degree_gender == 2 && $second_degree_premature_cad == "yes")) {
                                    ?>
                                        <input type="checkbox" value="1" checked="checked" disabled>
                                    <?php
                                        } else {
                                    ?>
                                        <input type="checkbox" value="1" disabled>
                                    <?php 
                                        }
                                     ?>
                                    Premature CAD ( < 55 years for man; < 60 years for woman)
                                    <br />
                                    Premature CAD <br />
                                    <?php if ($second_degree_premature_cad == "yes") { ?>
                                        <input type="radio" value="yes" name="second_degree_premature_cad_print" id="second_degree_premature_cad_print" checked="checked" disabled> Yes  <br />
                                    <?php } else { ?>
                                        <input type="radio" value="yes" name="second_degree_premature_cad_print" id="second_degree_premature_cad_print" disabled> Yes  <br />
                                    <?php } ?>
                                    
                                    <?php if ($second_degree_premature_cad == "no") { ?>
                                    <input type="radio" value="no" name="second_degree_premature_cad_print" id="second_degree_premature_cad_print" checked="checked" disabled> No  <br /> 
                                    <?php } else { ?>
                                    <input type="radio" value="no" name="second_degree_premature_cad_print" id="second_degree_premature_cad_print" disabled> No  <br /> 
                                    <?php } ?>

                                    <?php if ($second_degree_premature_cad == "unknown") { ?>
                                    <input type="radio" value="unknown" name="second_degree_premature_cad_print" id="second_degree_premature_cad_print" checked="checked" disabled> Unknown 
                                    <?php } else { ?>
                                    <input type="radio" value="unknown" name="second_degree_premature_cad_print" id="second_degree_premature_cad_print" disabled> Unknown 
                                    <?php } ?> 
                            </label>
                        </div>
                    </div>
                    <hr />
                    <!-- finish third question -->

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

</div>
@endsection