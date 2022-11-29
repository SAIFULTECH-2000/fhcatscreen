      <?php
      
      $patientname = $patient->patientname;
      $patientgender = $patient->patientgender;
      $patientnric = $patient->patientnric;
      $patientyearoffirstseen = $patient->patientyearoffirstseen;
      $premature_cad = $patient->premature_cad;
      $premature_cerebral = $patient->premature_cerebral;
      $pvd = $patient->pvd;
      $corneal_arcus = $patient->corneal_arcus;
      $patienttclevel = $patient->patienttclevel;
      $patientldlclevel = $patient->patientldlclevel;
      $baseline_therapy = $patient->baseline_therapy;
      $baseline_therapy_specify = $patient->baseline_therapy_specify;
      $tendon_xanthomata = $patient->tendon_xanthomata;
      $achilles_tendon = $patient->achilles_tendon;
      $nodular_xanthoma = $patient->nodular_xanthoma;
      $genetic_mutation = $patient->genetic_mutation;
      $ldlr = $patient->ldlr;
      $apob = $patient->apob;
      $pcsk9 = $patient->pcsk9;
      $other_fh_mutations = $patient->other_fh_mutations;
      $first_degree = $patient->first_degree;
      $first_degree_gender = $patient->first_degree_gender;
      $first_degree_age = $patient->first_degree_age;
      $first_degree_tclvl = $patient->first_degree_tclvl;
      $first_degree_ldlclvl = $patient->first_degree_ldlclvl;
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
      
      $nricyear = substr($patientnric, 0, 2);
      if ($nricyear > 25) {
          $firstseenage = $patientyearoffirstseen - (1900 + $nricyear);
          $nricage = date('Y') - (1900 + $nricyear);
      } else {
          $firstseenage = $patientyearoffirstseen - $nricyear;
          $nricage = $nricyear;
      }
      
      $first_question_dlcc = $score->first_question_dlcc;
      $second_question_dlcc = $score->second_question_dlcc;
      $third_question_dlcc = $score->third_question_dlcc;
      $fourth_question_dlcc = $score->fourth_question_dlcc;
      $fifth_question_dlcc = $score->fifth_question_dlcc;
      $total_dlcc = $score->total_dlcc;
      $result_dlcc = $score->result_dlcc;
      $result_us = $score->result_us;
      $result_sb = $score->result_sb;
      $result_jfhmc = $score->jfhmc;
      
      ?>

<div style="background-color:white;">
    <div class="container">
        <div class="col-md-12" id="panel1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">PERSONAL INFO<span class="pull-right"></h3>
                </div>
                <div class="panel-body two-col">
                    <!-- first question -->
                    <div class="row">
                        <div class="col-md-12">
                            <!--  -->
                            <label>
                                Name <input type="text" value="<?php echo $patientname; ?>" id="patientname"
                                    class="form-control" readonly>
                            </label>
                            <!-- </div> -->
                        </div>

                    </div>
                    <hr />
                    <!-- finish first question -->

                    <!-- first question -->
                    <div class="row">
                        <div class="col-md-12">
                            <!--  -->
                            <label>
                                Age (years) <input type="text" value="<?php echo $nricage; ?>" id="patientage"
                                    class="form-control" readonly>
                            </label>
                            <!-- </div> -->
                        </div>

                    </div>
                    <hr />
                    <!-- finish first question -->
                    <!-- second question -->
                    <div class="row">
                        <div class="col-md-12">
                            <!--  -->
                            <label for="patientgender">Gender:</label>
                            {{-- <?php if ($patientgender == 1) { ?>
                                      <br><input type="radio" value="1" name="patientgender"
                                          id="patientgender" checked="checked" disabled=""> Male
                                      <br><input type="radio" value="2" name="patientgender"
                                          id="patientgender" disabled=""> Female
                                      <?php } else if ($patientgender == 2) { ?>
                                      <br><input type="radio" value="1" name="patientgender"
                                          id="patientgender" disabled=""> Male
                                      <br><input type="radio" value="2" name="patientgender"
                                          id="patientgender" checked="checked" disabled=""> Female
                                      <?php } ?> --}}
                            <!-- </div> -->
                        </div>

                    </div>
                    <hr />
                    <!-- second first question -->
                    <div class="row">
                        <div class="col-md-12">
                            <!--  -->
                            <label>
                                Year of first seen: <input type="text" value="<?php echo $patientyearoffirstseen; ?>"
                                    id="patientyearoffirstseen" class="form-control" readonly>
                            </label>
                            <!-- </div> -->
                        </div>

                    </div>
                    <hr />

                    <div class="row">
                        <div class="col-md-12">
                            <!--  -->
                            <label>
                                NRIC: <input type="text" value="<?php echo $patientnric; ?>" id="patientnric"
                                    class="form-control" readonly>
                            </label>
                            <!-- </div> -->
                        </div>

                    </div>
                    <hr />

                    <div class="row">
                        <div class="col-md-12">
                            <!--  -->
                            <label>
                                First Relative Age (years) <input type="text" value="<?php echo $first_degree_age; ?>"
                                    id="first_degree_age" class="form-control" readonly>
                            </label>
                            <!-- </div> -->
                        </div>

                    </div>
                    <hr />
                    <!-- finish first question -->

                    <!-- second question -->
                    <div class="row">
                        <div class="col-md-12">
                            <!--  -->
                            <label for="patientgender">First Relative Gender:</label>
                            <?php if ($first_degree_gender == 1) { ?>
                            <br><input type="radio" value="1" name="first_degree_gender" id="first_degree_gender"
                                checked="checked" disabled=""> Male
                            <br><input type="radio" value="2" name="first_degree_gender" id="first_degree_gender"
                                disabled> Female
                            <?php } else if ($first_degree_gender == 2) { ?>
                            <br><input type="radio" value="1" name="first_degree_gender" id="first_degree_gender"
                                disabled=""> Male
                            <br><input type="radio" value="2" name="first_degree_gender" id="first_degree_gender"
                                checked="checked" disabled=""> Female
                            <?php } ?>
                            <!-- </div> -->
                        </div>

                    </div>
                    <hr />

                    <div class="row">
                        <div class="col-md-12">
                            <!--  -->
                            <label>
                                Second Relative Age (years) <input type="text" value="<?php echo $second_degree_age; ?>"
                                    id="second_degree_age" class="form-control" readonly>
                            </label>
                            <!-- </div> -->
                        </div>

                    </div>
                    <hr />
                    <!-- finish second question -->

                    <!-- second question -->
                    <div class="row">
                        <div class="col-md-12">
                            <!--  -->
                            <label for="patientgender">second Relative Gender:</label>
                            <?php if ($second_degree_gender == 1) { ?>
                            <br><input type="radio" value="1" name="second_degree_gender"
                                id="second_degree_gender" checked="checked" disabled=""> Male
                            <br><input type="radio" value="2" name="second_degree_gender"
                                id="second_degree_gender" disabled=""> Female
                            <?php } else if ($second_degree_gender == 2) { ?>
                            <br><input type="radio" value="1" name="second_degree_gender"
                                id="second_degree_gender" disabled=""> Male
                            <br><input type="radio" value="2" name="second_degree_gender"
                                id="second_degree_gender" checked="checked" disabled=""> Female
                            <?php } ?>
                            <!-- </div> -->
                        </div>

                    </div>
                    <hr />


                </div>
            </div>
            <br />
            <br />
            <div class="col-md-12" id="panel1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">DLCC</h3>
                    </div>

                    <div class="panel-body two-col">
                        <!-- first question -->
                        <b><?php 
                        if (($result_dlcc != 'UNLIKELY') || ($result_dlcc != 'INVALID')) {
                            ?><font size="5px">Category :</font>
                            <font color="green" size="5px"><?php echo $result_dlcc; ?></font>
                            <?php
                        } else {
                            ?>
                            <font size="5px">Category :</font>
                            <font color="red" size="5px"><?php echo $result_dlcc; ?></font>
                            <?php
                        }
                     ?>
                        </b>
                        <span class="pull-right"><b>
                                <font color="blue" size="5px">Total Points : <?php echo $total_dlcc; ?>
                                </font>
                            </b></span><br />

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

                                    Known premature CAD (
                                    < 55 years for men; < 60 years for women) <br />
                                    Premature CAD <br />
                                    <?php if ($first_degree_premature_cad == "yes") { ?>
                                    <input type="radio" value="yes" name="first_degree_premature_cad_print"
                                        id="first_degree_premature_cad_print" checked="checked" disabled>
                                    Yes
                                    <br />
                                    <?php } else { ?>
                                    <input type="radio" value="yes" name="first_degree_premature_cad_print"
                                        id="first_degree_premature_cad_print" disabled> Yes <br />
                                    <?php } ?>

                                    <?php if ($first_degree_premature_cad == "no") { ?>
                                    <input type="radio" value="no" name="first_degree_premature_cad_print"
                                        id="first_degree_premature_cad_print" checked="checked" disabled> No
                                    <br />
                                    <?php } else { ?>
                                    <input type="radio" value="no" name="first_degree_premature_cad_print"
                                        id="first_degree_premature_cad_print" disabled> No <br />
                                    <?php } ?>

                                    <?php if ($first_degree_premature_cad == "unknown") { ?>
                                    <input type="radio" value="unknown" name="first_degree_premature_cad_print"
                                        id="first_degree_premature_cad_print" checked="checked" disabled>
                                    Unknown
                                    <?php } else { ?>
                                    <input type="radio" value="unknown" name="first_degree_premature_cad_print"
                                        id="first_degree_premature_cad_print" disabled> Unknown
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
                                    LDL-C > 4.0 mmol/L (< 18 years) </label>
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
                                    <input type="radio" value="yes" name="first_degree_tendon_xanthomata_print"
                                        id="first_degree_tendon_xanthomata_print" checked="checked" disabled> Yes
                                    <br />
                                    <?php } else { ?>
                                    <input type="radio" value="yes" name="first_degree_tendon_xanthomata_print"
                                        id="first_degree_tendon_xanthomata_print" disabled> Yes <br />
                                    <?php } ?>

                                    <?php if ($first_degree_tendon_xanthomata == "no") { ?>
                                    <input type="radio" value="no" name="first_degree_tendon_xanthomata_print"
                                        id="first_degree_tendon_xanthomata_print" checked="checked" disabled> No
                                    <br />
                                    <?php } else { ?>
                                    <input type="radio" value="no" name="first_degree_tendon_xanthomata_print"
                                        id="first_degree_tendon_xanthomata_print" disabled> No <br />
                                    <?php } ?>

                                    <?php if ($first_degree_tendon_xanthomata == "unknown") { ?>
                                    <input type="radio" value="unknown" name="first_degree_tendon_xanthomata_print"
                                        id="first_degree_tendon_xanthomata_print" checked="checked" disabled>
                                    Unknown
                                    <?php } else { ?>
                                    <input type="radio" value="unknown" name="first_degree_tendon_xanthomata_print"
                                        id="first_degree_tendon_xanthomata_print" disabled> Unknown
                                    <?php } ?>
                                    <br /><br />
                                    Corneal Arcus (First appearance
                                    < 45 years) <br />
                                    <?php if ($first_degree_corneal_arcus == "yes") { ?>
                                    <input type="radio" value="yes" name="first_degree_corneal_arcus_print"
                                        id="first_degree_corneal_arcus_print" checked="checked" disabled>
                                    Yes
                                    <br />
                                    <?php } else { ?>
                                    <input type="radio" value="yes" name="first_degree_corneal_arcus_print"
                                        id="first_degree_corneal_arcus_print" disabled> Yes <br />
                                    <?php } ?>

                                    <?php if ($first_degree_corneal_arcus == "no") { ?>
                                    <input type="radio" value="no" name="first_degree_corneal_arcus_print"
                                        id="first_degree_corneal_arcus_print" checked="checked" disabled> No
                                    <br />
                                    <?php } else { ?>
                                    <input type="radio" value="no" name="first_degree_corneal_arcus_print"
                                        id="first_degree_corneal_arcus_print" disabled> No <br />
                                    <?php } ?>

                                    <?php if ($first_degree_corneal_arcus == "unknown") { ?>
                                    <input type="radio" value="unknown" name="first_degree_corneal_arcus_print"
                                        id="first_degree_corneal_arcus_print" checked="checked" disabled>
                                    Unknown
                                    <?php } else { ?>
                                    <input type="radio" value="unknown" name="first_degree_corneal_arcus_print"
                                        id="first_degree_corneal_arcus_print" disabled> Unknown
                                    <?php } ?>
                                </label>
                            </div>
                        </div>
                        <span class="pull-right">
                            <font color="blue" size="4px"><b>Points : <?php echo $first_question_dlcc; ?></b></font>
                        </span>
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

                                    Premature CAD (first diagnosed at
                                    < 55 for man; < 60 years for woman) <br />
                                    Premature CAD<br />
                                    <?php if ($premature_cad == "yes") { ?>
                                    <input type="radio" value="yes" name="premature_cad_print"
                                        id="premature_cad_print" checked="checked" disabled> Yes <br />
                                    <?php } else { ?>
                                    <input type="radio" value="yes" name="premature_cad_print"
                                        id="premature_cad_print" disabled> Yes <br />
                                    <?php } ?>

                                    <?php if ($premature_cad == "no") { ?>
                                    <input type="radio" value="no" name="premature_cad_print"
                                        id="premature_cad_print" checked="checked" disabled> No <br />
                                    <?php } else { ?>
                                    <input type="radio" value="no" name="premature_cad_print"
                                        id="premature_cad_print" disabled> No <br />
                                    <?php } ?>

                                    <?php if ($premature_cad == "unknown") { ?>
                                    <input type="radio" value="unknown" name="premature_cad_print"
                                        id="premature_cad_print" checked="checked" disabled> Unknown
                                    <?php } else { ?>
                                    <input type="radio" value="unknown" name="premature_cad_print"
                                        id="premature_cad_print" disabled> Unknown
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
                                    Premature cerebral vascular disease (first diagnosed at
                                    < 55 for man; < 60 years for woman) <br />
                                    Premature cerebral vascular disease <br />
                                    <?php if ($premature_cerebral == "yes") { ?>
                                    <input type="radio" value="yes" name="premature_cerebral_print"
                                        id="premature_cerebral_print" checked="checked" disabled> Yes <br />
                                    <?php } else { ?>
                                    <input type="radio" value="yes" name="premature_cerebral_print"
                                        id="premature_cerebral_print" disabled> Yes <br />
                                    <?php } ?>

                                    <?php if ($premature_cerebral == "no") { ?>
                                    <input type="radio" value="no" name="premature_cerebral_print"
                                        id="premature_cerebral_print" checked="checked" disabled> No <br />
                                    <?php } else { ?>
                                    <input type="radio" value="no" name="premature_cerebral_print"
                                        id="premature_cerebral_print" disabled> No <br />
                                    <?php } ?>

                                    <?php if ($premature_cerebral == "unknown") { ?>
                                    <input type="radio" value="unknown" name="premature_cerebral_print"
                                        id="premature_cerebral_print" checked="checked" disabled> Unknown
                                    <?php } else { ?>
                                    <input type="radio" value="unknown" name="premature_cerebral_print"
                                        id="premature_cerebral_print" disabled> Unknown
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
                                    PVD (first diagnosed at
                                    < 55 for man; < 60 years for woman) <br />
                                    PVD <br />
                                    <?php if ($pvd == "yes") { ?>
                                    <input type="radio" value="yes" name="pvd_print" id="pvd_print"
                                        checked="checked" disabled> Yes <br />
                                    <?php } else { ?>
                                    <input type="radio" value="yes" name="pvd_print" id="pvd_print" disabled>
                                    Yes <br />
                                    <?php } ?>

                                    <?php if ($pvd == "no") { ?>
                                    <input type="radio" value="no" name="pvd_print" id="pvd_print"
                                        checked="checked" disabled> No <br />
                                    <?php } else { ?>
                                    <input type="radio" value="no" name="pvd_print" id="pvd_print" disabled>
                                    No <br />
                                    <?php } ?>

                                    <?php if ($pvd == "unknown") { ?>
                                    <input type="radio" value="unknown" name="pvd_print" id="pvd_print"
                                        checked="checked" disabled> Unknown
                                    <?php } else { ?>
                                    <input type="radio" value="unknown" name="pvd_print" id="pvd_print" disabled>
                                    Unknown
                                    <?php } ?>
                                </label>
                            </div>
                        </div>

                        <span class="pull-right">
                            <font color="blue" size="4px"><b>Points : <?php echo $second_question_dlcc; ?></b></font>
                        </span>
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
                                    <input type="radio" value="yes" name="tendon_xanthomata_print"
                                        id="tendon_xanthomata_print" checked="checked" disabled> Yes <br />
                                    <?php } else { ?>
                                    <input type="radio" value="yes" name="tendon_xanthomata_print"
                                        id="tendon_xanthomata_print" disabled> Yes <br />
                                    <?php } ?>

                                    <?php if ($tendon_xanthomata == "no") { ?>
                                    <input type="radio" value="no" name="tendon_xanthomata_print"
                                        id="tendon_xanthomata_print" checked="checked" disabled> No <br />
                                    <?php } else { ?>
                                    <input type="radio" value="no" name="tendon_xanthomata_print"
                                        id="tendon_xanthomata_print" disabled> No <br />
                                    <?php } ?>

                                    <?php if ($tendon_xanthomata == "unknown") { ?>
                                    <input type="radio" value="unknown" name="tendon_xanthomata_print"
                                        id="tendon_xanthomata_print" checked="checked" disabled> Unknown
                                    <?php } else { ?>
                                    <input type="radio" value="unknown" name="tendon_xanthomata_print"
                                        id="tendon_xanthomata_print" disabled> Unknown
                                    <?php } ?>
                                    <br />

                                    Achilles Tendon Thickening <br />
                                    <?php if ($achilles_tendon == "yes") { ?>
                                    <input type="radio" value="yes" name="achilles_tendon_print"
                                        id="achilles_tendon_print" checked="checked" disabled> Yes <br />
                                    <?php } else { ?>
                                    <input type="radio" value="yes" name="achilles_tendon_print"
                                        id="achilles_tendon_print" disabled> Yes <br />
                                    <?php } ?>

                                    <?php if ($achilles_tendon == "no") { ?>
                                    <input type="radio" value="no" name="achilles_tendon_print"
                                        id="achilles_tendon_print" checked="checked" disabled> No <br />
                                    <?php } else { ?>
                                    <input type="radio" value="no" name="achilles_tendon_print"
                                        id="achilles_tendon_print" disabled> No <br />
                                    <?php } ?>

                                    <?php if ($achilles_tendon == "unknown") { ?>
                                    <input type="radio" value="unknown" name="achilles_tendon_print"
                                        id="achilles_tendon_print" checked="checked" disabled> Unknown
                                    <?php } else { ?>
                                    <input type="radio" value="unknown" name="achilles_tendon_print"
                                        id="achilles_tendon_print" disabled> Unknown
                                    <?php } ?>
                                    <br />
                                    Nodular Xanthoma on the skin<br />
                                    <?php if ($nodular_xanthoma == "yes") { ?>
                                    <input type="radio" value="yes" name="nodular_xanthoma_print"
                                        id="nodular_xanthoma_print" checked="checked" disabled> Yes <br />
                                    <?php } else { ?>
                                    <input type="radio" value="yes" name="nodular_xanthoma_print"
                                        id="nodular_xanthoma_print" disabled> Yes <br />
                                    <?php } ?>

                                    <?php if ($nodular_xanthoma == "no") { ?>
                                    <input type="radio" value="no" name="nodular_xanthoma_print"
                                        id="nodular_xanthoma_print" checked="checked" disabled> No <br />
                                    <?php } else { ?>
                                    <input type="radio" value="no" name="nodular_xanthoma_print"
                                        id="nodular_xanthoma_print" disabled> No <br />
                                    <?php } ?>

                                    <?php if ($nodular_xanthoma == "unknown") { ?>
                                    <input type="radio" value="unknown" name="nodular_xanthoma_print"
                                        id="nodular_xanthoma_print" checked="checked" disabled> Unknown
                                    <?php } else { ?>
                                    <input type="radio" value="unknown" name="nodular_xanthoma_print"
                                        id="nodular_xanthoma_print" disabled> Unknown
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
                                    Corneal arcus (first diagnosed at
                                    < 45 years old) <br />
                                    Corneal Arcus (First appearance
                                    < 45 years)<br />
                                    <?php if ($corneal_arcus == "yes") { ?>
                                    <input type="radio" value="yes" name="corneal_arcus_print"
                                        id="corneal_arcus_print" checked="checked" disabled> Yes <br />
                                    <?php } else { ?>
                                    <input type="radio" value="yes" name="corneal_arcus_print"
                                        id="corneal_arcus_print" disabled> Yes <br />
                                    <?php } ?>

                                    <?php if ($corneal_arcus == "no") { ?>
                                    <input type="radio" value="no" name="corneal_arcus_print"
                                        id="corneal_arcus_print" checked="checked" disabled> No <br />
                                    <?php } else { ?>
                                    <input type="radio" value="no" name="corneal_arcus_print"
                                        id="corneal_arcus_print" disabled> No <br />
                                    <?php } ?>

                                    <?php if ($corneal_arcus == "unknown") { ?>
                                    <input type="radio" value="unknown" name="corneal_arcus_print"
                                        id="corneal_arcus_print" checked="checked" disabled> Unknown
                                    <?php } else { ?>
                                    <input type="radio" value="unknown" name="corneal_arcus_print"
                                        id="corneal_arcus_print" disabled> Unknown
                                    <?php } ?>
                                </label>
                            </div>
                        </div>

                        <span class="pull-right">
                            <font color="blue" size="4px"><b>Points : <?php echo $third_question_dlcc; ?></b></font>
                        </span>
                        <hr />
                        <!-- finish third question -->

                        <!-- fourth question -->
                        <div class="row">
                            <div class="col-md-12">
                                <label>
                                    4. LDL-C level(mmol/L) <input type="text" value="<?php echo $patientldlclevel; ?>"
                                        class="form-control" name="patientldlclevel" id="patientldlclevel" readonly>
                                    <div id="test1" style="font-weight: normal; color: red "></div>
                                    <br />
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
                                    Adjusted LDL-C level(mmol/L) <input type="text" value=""
                                        class="form-control" name="adjust_ldlclevel" id="adjust_ldlclevel" readonly>
                                    <div id="test1" style="font-weight: normal; color: red "></div>
                                    <br />
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
                                            while ($row = $stmt_result->fetch_assoc()) {
                                                if ($baseline_therapy_specify == $row['ldlid']) {
                                                    echo '<option value="' . $row['ldladjustment'] . '" id="' . $row['ldlid'] . '" selected="selected">' . $row['ldlname'] . '</option>';
                                                } else {
                                                    echo '<option value="' . $row['ldladjustment'] . '" id="' . $row['ldlid'] . '">' . $row['ldlname'] . '</option>';
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

                        <span class="pull-right">
                            <font color="blue" size="4px"><b>Points : <?php echo $fourth_question_dlcc; ?></b></font>
                        </span>
                        <hr />
                        <!-- finish fourth question -->

                        <!-- fifth question -->
                        <div class="row">
                            <div class="col-md-12">
                                <!-- <div class="well well-sm"> -->
                                <label>
                                    <h4>5. Genetic Mutation?
                                        <?php if ($genetic_mutation == 1) { ?>
                                        <input type="checkbox" value="1" name="genetic_mutation_print"
                                            id="genetic_mutation_print" disabled="" checked>
                                    </h4>
                                    <?php } else { ?>
                                    <input type="checkbox" value="1" name="genetic_mutation_print"
                                        id="genetic_mutation_print" disabled=""></h4>
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
                                    <input type="radio" value="yes" name="ldlr_print" id="ldlr_print"
                                        checked="checked" disabled> Yes <br />
                                    <?php } else { ?>
                                    <input type="radio" value="yes" name="ldlr_print" id="ldlr_print" disabled>
                                    Yes <br />
                                    <?php } ?>

                                    <?php if ($ldlr == "no") { ?>
                                    <input type="radio" value="no" name="ldlr_print" id="ldlr_print"
                                        checked="checked" disabled> No <br />
                                    <?php } else { ?>
                                    <input type="radio" value="no" name="ldlr_print" id="ldlr_print" disabled>
                                    No <br />
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
                                    <input type="radio" value="yes" name="apob_print" id="apob_print"
                                        checked="checked" disabled> Yes <br />
                                    <?php } else { ?>
                                    <input type="radio" value="yes" name="apob_print" id="apob_print" disabled>
                                    Yes <br />
                                    <?php } ?>

                                    <?php if ($apob == "no") { ?>
                                    <input type="radio" value="no" name="apob_print" id="apob_print"
                                        checked="checked" disabled> No <br />
                                    <?php } else { ?>
                                    <input type="radio" value="no" name="apob_print" id="apob_print" disabled>
                                    No <br />
                                    <?php } ?>
                                </label>
                            </div>
                            <div class="col-md-12">
                                <label class="well well-sm col-xs-12" style="font-weight: normal;"
                                    for="1-5-19_print">
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
                                    <input type="radio" value="yes" name="pcsk9_print" id="pcsk9_print"
                                        checked="checked" disabled> Yes <br />
                                    <?php } else { ?>
                                    <input type="radio" value="yes" name="pcsk9_print" id="pcsk9_print"
                                        disabled> Yes <br />
                                    <?php } ?>

                                    <?php if ($pcsk9 == "no") { ?>
                                    <input type="radio" value="no" name="pcsk9_print" id="pcsk9_print"
                                        checked="checked" disabled> No <br />
                                    <?php } else { ?>
                                    <input type="radio" value="no" name="pcsk9_print" id="pcsk9_print"
                                        disabled> No <br />
                                    <?php } ?>
                                </label>
                            </div>
                            <br /><br />
                            <div class="col-md-12">
                                <label class="well well-sm col-xs-12" style="font-weight: normal;"
                                    for="1-5-19_print">
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
                                    <input type="radio" value="yes" name="other_fh_mutations_print"
                                        id="other_fh_mutations_print" checked="checked" disabled> Yes <br />
                                    <?php } else { ?>
                                    <input type="radio" value="yes" name="other_fh_mutations_print"
                                        id="other_fh_mutations_print" disabled> Yes <br />
                                    <?php } ?>

                                    <?php if ($other_fh_mutations == "no") { ?>
                                    <input type="radio" value="no" name="other_fh_mutations_print"
                                        id="other_fh_mutations_print" checked="checked" disabled> No <br />
                                    <?php } else { ?>
                                    <input type="radio" value="no" name="other_fh_mutations_print"
                                        id="other_fh_mutations_print" disabled> No <br />
                                    <?php } ?>
                                </label>
                            </div>
                            <?php } ?>
                        </div>

                        <span class="pull-right">
                            <font color="blue" size="4px"><b>Points : <?php echo $fifth_question_dlcc; ?></b></font>
                        </span>
                        <hr />
                        <!-- finish fifth question -->


                    </div>
                </div>
            </div>
            <?php 
            if ($baseline_therapy == 0) {
        ?>
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <?php } else { ?>
            <br />
            <br />
            <br />
            <?php } ?>
            <?php
            if (!isset($_SESSION['patientid'])) {
                header('Location: index.php');
            } else {
                $patientid = $_SESSION['patientid'];
            
                $sql = 'SELECT * FROM patienttbl WHERE patientid = ?';
                ($stmt = $conn->prepare($sql)) or trigger_error($conn->error, E_USER_ERROR);
                $stmt->bind_param('s', $patientid);
                $stmt->execute() or trigger_error($stmt->error, E_USER_ERROR);
                ($stmt_result = $stmt->get_result()) or trigger_error($stmt->error, E_USER_ERROR);
                if ($stmt_result->num_rows > 0) {
                    while ($row = $stmt_result->fetch_assoc()) {
                        $patientgender = $row['patientgender'];
                        $patientnric = $row['patientnric'];
                        $patientyearoffirstseen = $row['patientyearoffirstseen'];
                        $premature_cad = $row['premature_cad'];
                        $premature_cerebral = $row['premature_cerebral'];
                        $pvd = $row['pvd'];
                        $corneal_arcus = $row['corneal_arcus'];
                        $patienttclevel = $row['patienttclevel'];
                        $patientldlclevel = $row['patientldlclevel'];
                        $baseline_therapy = $row['baseline_therapy'];
                        $baseline_therapy_specify = $row['baseline_therapy_specify'];
                        $tendon_xanthomata = $row['tendon_xanthomata'];
                        $achilles_tendon = $row['achilles_tendon'];
                        $nodular_xanthoma = $row['nodular_xanthoma'];
                        $genetic_mutation = $row['genetic_mutation'];
                        $ldlr = $row['ldlr'];
                        $apob = $row['apob'];
                        $pcsk9 = $row['pcsk9'];
                        $other_fh_mutations = $row['other_fh_mutations'];
                        $first_degree = $row['first_degree'];
                        $first_degree_gender = $row['first_degree_gender'];
                        $first_degree_age = $row['first_degree_age'];
                        $first_degree_tclvl = $row['first_degree_tclvl'];
                        $first_degree_ldlclvl = $row['first_degree_ldlclvl'];
                        $first_degree_premature_cad = $row['first_degree_premature_cad'];
                        $first_degree_tendon_xanthomata = $row['first_degree_tendon_xanthomata'];
                        $first_degree_corneal_arcus = $row['first_degree_corneal_arcus'];
                        $first_degree_fh = $row['first_degree_fh'];
                        $second_degree = $row['second_degree'];
                        $second_degree_gender = $row['second_degree_gender'];
                        $second_degree_age = $row['second_degree_age'];
                        $second_degree_tclvl = $row['second_degree_tclvl'];
                        $second_degree_premature_cad = $row['second_degree_premature_cad'];
                        $second_degree_tendon_xanthomata = $row['second_degree_tendon_xanthomata'];
                        $second_degree_fh = $row['second_degree_fh'];
                        $third_degree = $row['third_degree'];
                        $third_degree_fh = $row['third_degree_fh'];
            
                        // get age from ic and first seen
                        $nricyear = substr($patientnric, 0, 2);
                        if ($nricyear > 25) {
                            $firstseenage = $patientyearoffirstseen - (1900 + $nricyear);
                            $nricage = date('Y') - (1900 + $nricyear);
                        } else {
                            $firstseenage = $patientyearoffirstseen - $nricyear;
                            $nricage = $nricyear;
                        }
                    }
                }
            
                $sql = 'SELECT * FROM patientscoretbl WHERE patientid = ? order by patientscoreid desc';
                ($stmt = $conn->prepare($sql)) or trigger_error($conn->error, E_USER_ERROR);
                $stmt->bind_param('s', $patientid);
                $stmt->execute() or trigger_error($stmt->error, E_USER_ERROR);
                ($stmt_result = $stmt->get_result()) or trigger_error($stmt->error, E_USER_ERROR);
                if ($stmt_result->num_rows > 0) {
                    while ($row = $stmt_result->fetch_assoc()) {
                        $first_question_sb = $row['first_question_sb'];
                        $second_question_sb = $row['second_question_sb'];
                        $third_question_sb = $row['third_question_sb'];
                        $fourth_question_sb = $row['fourth_question_sb'];
                        $fifth_question_sb = $row['fifth_question_sb'];
                        $result_sb = $row['result_sb'];
                    }
                }
            }
            ?>
            <div class="col-md-12" id="panel1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Simon Broome Diagnostic Criteria</h3>
                    </div>

                    <div class="panel-body two-col">
                        <b><?php 
                        if (($result_sb != 'UNLIKELY') || ($result_sb != 'INVALID')) {
                            ?><font size="5px">Category :</font>
                            <font color="green" size="5px"><?php echo $result_sb; ?></font>
                            <?php
                        } else {
                            ?>
                            <font size="5px">Category :</font>
                            <font color="red" size="5px"><?php echo $result_sb; ?></font>
                            <?php
                        }
                     ?>
                        </b>
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
                                    <input type="checkbox" value="" name="2-6-20" id="2-6-20"
                                        checked="checked" disabled>
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
                                    <input type="checkbox" value="" name="2-6-21" id="2-6-21"
                                        checked="checked" disabled>
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
                                    1.2 AGED < 16 YEARS </label>
                                        <!-- </div> -->
                            </div>
                            <div class="col-md-12">
                                <label class="well well-sm col-xs-12" style="font-weight: normal;" for="2-6-22">
                                    <?php
                                    
                                    if ($patienttclevel > 6.7) {
                                ?>
                                    <input type="checkbox" value="" name="2-6-22" id="2-6-22"
                                        checked="checked" disabled>
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
                                    <input type="checkbox" value="" name="2-6-23" id="2-6-23"
                                        checked="checked" disabled>
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
                                    <input type="radio" value="yes" name="tendon_xanthomata_print"
                                        id="tendon_xanthomata_print" checked="checked" disabled> Yes <br />
                                    <?php } else { ?>
                                    <input type="radio" value="yes" name="tendon_xanthomata_print"
                                        id="tendon_xanthomata_print" disabled> Yes <br />
                                    <?php } ?>

                                    <?php if ($tendon_xanthomata == "no") { ?>
                                    <input type="radio" value="no" name="tendon_xanthomata_print"
                                        id="tendon_xanthomata_print" checked="checked" disabled> No <br />
                                    <?php } else { ?>
                                    <input type="radio" value="no" name="tendon_xanthomata_print"
                                        id="tendon_xanthomata_print" disabled> No <br />
                                    <?php } ?>

                                    <?php if ($tendon_xanthomata == "unknown") { ?>
                                    <input type="radio" value="unknown" name="tendon_xanthomata_print"
                                        id="tendon_xanthomata_print" checked="checked" disabled> Unknown
                                    <?php } else { ?>
                                    <input type="radio" value="unknown" name="tendon_xanthomata_print"
                                        id="tendon_xanthomata_print" disabled> Unknown
                                    <?php } ?>
                                    <br /><br />

                                    Achilles Tendon Thickening <br />
                                    <?php if ($achilles_tendon == "yes") { ?>
                                    <input type="radio" value="yes" name="achilles_tendon_print"
                                        id="achilles_tendon_print" checked="checked" disabled> Yes <br />
                                    <?php } else { ?>
                                    <input type="radio" value="yes" name="achilles_tendon_print"
                                        id="achilles_tendon_print" disabled> Yes <br />
                                    <?php } ?>

                                    <?php if ($achilles_tendon == "no") { ?>
                                    <input type="radio" value="no" name="achilles_tendon_print"
                                        id="achilles_tendon_print" checked="checked" disabled> No <br />
                                    <?php } else { ?>
                                    <input type="radio" value="no" name="achilles_tendon_print"
                                        id="achilles_tendon_print" disabled> No <br />
                                    <?php } ?>

                                    <?php if ($achilles_tendon == "unknown") { ?>
                                    <input type="radio" value="unknown" name="achilles_tendon_print"
                                        id="achilles_tendon_print" checked="checked" disabled> Unknown
                                    <?php } else { ?>
                                    <input type="radio" value="unknown" name="achilles_tendon_print"
                                        id="achilles_tendon_print" disabled> Unknown
                                    <?php } ?>
                                    <br /><br />
                                    Nodular Xanthoma on the skin<br />
                                    <?php if ($nodular_xanthoma == "yes") { ?>
                                    <input type="radio" value="yes" name="nodular_xanthoma_print"
                                        id="nodular_xanthoma_print" checked="checked" disabled> Yes <br />
                                    <?php } else { ?>
                                    <input type="radio" value="yes" name="nodular_xanthoma_print"
                                        id="nodular_xanthoma_print" disabled> Yes <br />
                                    <?php } ?>

                                    <?php if ($nodular_xanthoma == "no") { ?>
                                    <input type="radio" value="no" name="nodular_xanthoma_print"
                                        id="nodular_xanthoma_print" checked="checked" disabled> No <br />
                                    <?php } else { ?>
                                    <input type="radio" value="no" name="nodular_xanthoma_print"
                                        id="nodular_xanthoma_print" disabled> No <br />
                                    <?php } ?>

                                    <?php if ($nodular_xanthoma == "unknown") { ?>
                                    <input type="radio" value="unknown" name="nodular_xanthoma_print"
                                        id="nodular_xanthoma_print" checked="checked" disabled> Unknown
                                    <?php } else { ?>
                                    <input type="radio" value="unknown" name="nodular_xanthoma_print"
                                        id="nodular_xanthoma_print" disabled> Unknown
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
                                    <input type="radio" value="yes" name="first_degree_tendon_xanthomata_print"
                                        id="first_degree_tendon_xanthomata_print" checked="checked" disabled> Yes
                                    <br />
                                    <?php } else { ?>
                                    <input type="radio" value="yes" name="first_degree_tendon_xanthomata_print"
                                        id="first_degree_tendon_xanthomata_print" disabled> Yes <br />
                                    <?php } ?>

                                    <?php if ($first_degree_tendon_xanthomata == "no") { ?>
                                    <input type="radio" value="no" name="first_degree_tendon_xanthomata_print"
                                        id="first_degree_tendon_xanthomata_print" checked="checked" disabled> No
                                    <br />
                                    <?php } else { ?>
                                    <input type="radio" value="no" name="first_degree_tendon_xanthomata_print"
                                        id="first_degree_tendon_xanthomata_print" disabled> No <br />
                                    <?php } ?>

                                    <?php if ($first_degree_tendon_xanthomata == "unknown") { ?>
                                    <input type="radio" value="unknown" name="first_degree_tendon_xanthomata_print"
                                        id="first_degree_tendon_xanthomata_print" checked="checked" disabled>
                                    Unknown
                                    <?php } else { ?>
                                    <input type="radio" value="unknown" name="first_degree_tendon_xanthomata_print"
                                        id="first_degree_tendon_xanthomata_print" disabled> Unknown
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
                                    <input type="radio" value="yes" name="first_degree_tendon_xanthomata_print"
                                        id="first_degree_tendon_xanthomata_print" checked="checked" disabled> Yes
                                    <br />
                                    <?php } else { ?>
                                    <input type="radio" value="yes" name="first_degree_tendon_xanthomata_print"
                                        id="first_degree_tendon_xanthomata_print" disabled> Yes <br />
                                    <?php } ?>

                                    <?php if ($second_degree_tendon_xanthomata == "no") { ?>
                                    <input type="radio" value="no" name="first_degree_tendon_xanthomata_print"
                                        id="first_degree_tendon_xanthomata_print" checked="checked" disabled> No
                                    <br />
                                    <?php } else { ?>
                                    <input type="radio" value="no" name="first_degree_tendon_xanthomata_print"
                                        id="first_degree_tendon_xanthomata_print" disabled> No <br />
                                    <?php } ?>

                                    <?php if ($second_degree_tendon_xanthomata == "unknown") { ?>
                                    <input type="radio" value="unknown" name="first_degree_tendon_xanthomata_print"
                                        id="first_degree_tendon_xanthomata_print" checked="checked" disabled>
                                    Unknown
                                    <?php } else { ?>
                                    <input type="radio" value="unknown" name="first_degree_tendon_xanthomata_print"
                                        id="first_degree_tendon_xanthomata_print" disabled> Unknown
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
                                    1st degree relatives (
                                    < 55 years for men; < 60 years for women)<br />
                                    Premature CAD <br />
                                    <?php if ($first_degree_premature_cad == "yes") { ?>
                                    <input type="radio" value="yes" name="first_degree_premature_cad_print"
                                        id="first_degree_premature_cad_print" checked="checked" disabled>
                                    Yes
                                    <br />
                                    <?php } else { ?>
                                    <input type="radio" value="yes" name="first_degree_premature_cad_print"
                                        id="first_degree_premature_cad_print" disabled> Yes <br />
                                    <?php } ?>

                                    <?php if ($first_degree_premature_cad == "no") { ?>
                                    <input type="radio" value="no" name="first_degree_premature_cad_print"
                                        id="first_degree_premature_cad_print" checked="checked" disabled>
                                    No
                                    <br />
                                    <?php } else { ?>
                                    <input type="radio" value="no" name="first_degree_premature_cad_print"
                                        id="first_degree_premature_cad_print" disabled> No <br />
                                    <?php } ?>

                                    <?php if ($first_degree_premature_cad == "unknown") { ?>
                                    <input type="radio" value="unknown" name="first_degree_premature_cad_print"
                                        id="first_degree_premature_cad_print" checked="checked" disabled>
                                    Unknown
                                    <?php } else { ?>
                                    <input type="radio" value="unknown" name="first_degree_premature_cad_print"
                                        id="first_degree_premature_cad_print" disabled> Unknown
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
                                    2nd degree relatives (age
                                    < 50 years) <br />
                                    Premature CAD <br />
                                    <?php if ($second_degree_premature_cad == "yes") { ?>
                                    <input type="radio" value="yes" name="second_degree_premature_cad_print"
                                        id="second_degree_premature_cad_print" checked="checked" disabled>
                                    Yes
                                    <br />
                                    <?php } else { ?>
                                    <input type="radio" value="yes" name="second_degree_premature_cad_print"
                                        id="second_degree_premature_cad_print" disabled=""> Yes <br />
                                    <?php } ?>

                                    <?php if ($second_degree_premature_cad == "no") { ?>
                                    <input type="radio" value="no" name="second_degree_premature_cad_print"
                                        id="second_degree_premature_cad_print" checked="checked" disabled="">
                                    No <br />
                                    <?php } else { ?>
                                    <input type="radio" value="no" name="second_degree_premature_cad_print"
                                        id="second_degree_premature_cad_print" disabled=""> No <br />
                                    <?php } ?>

                                    <?php if ($second_degree_premature_cad == "unknown") { ?>
                                    <input type="radio" value="unknown" name="second_degree_premature_cad_print"
                                        id="second_degree_premature_cad_print" checked="checked" disabled="">
                                    Unknown
                                    <?php } else { ?>
                                    <input type="radio" value="unknown" name="second_degree_premature_cad_print"
                                        id="second_degree_premature_cad_print" disabled=""> Unknown
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
                                    Children or siblings < 16 years: (TC> 6.7 mmol/L)
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
                                    <input type="checkbox" value="1" name="genetic_mutation_print"
                                        id="genetic_mutation_print" disabled="" checked>
                                    <?php } else { ?>
                                    <input type="checkbox" value="1" name="genetic_mutation_print"
                                        id="genetic_mutation_print" disabled="">
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
                                    <input type="radio" value="yes" name="ldlr_print" id="ldlr_print"
                                        checked="checked" disabled> Yes <br />
                                    <?php } else { ?>
                                    <input type="radio" value="yes" name="ldlr_print" id="ldlr_print"
                                        disabled> Yes <br />
                                    <?php } ?>

                                    <?php if ($ldlr == "no") { ?>
                                    <input type="radio" value="no" name="ldlr_print" id="ldlr_print"
                                        checked="checked" disabled> No <br />
                                    <?php } else { ?>
                                    <input type="radio" value="no" name="ldlr_print" id="ldlr_print"
                                        disabled> No <br />
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
                                    <input type="radio" value="yes" name="apob_print" id="apob_print"
                                        checked="checked" disabled> Yes <br />
                                    <?php } else { ?>
                                    <input type="radio" value="yes" name="apob_print" id="apob_print"
                                        disabled> Yes <br />
                                    <?php } ?>

                                    <?php if ($apob == "no") { ?>
                                    <input type="radio" value="no" name="apob_print" id="apob_print"
                                        checked="checked" disabled> No <br />
                                    <?php } else { ?>
                                    <input type="radio" value="no" name="apob_print" id="apob_print"
                                        disabled> No <br />
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
                                    <input type="radio" value="yes" name="pcsk9_print" id="pcsk9_print"
                                        checked="checked" disabled> Yes <br />
                                    <?php } else { ?>
                                    <input type="radio" value="yes" name="pcsk9_print" id="pcsk9_print"
                                        disabled> Yes <br />
                                    <?php } ?>

                                    <?php if ($pcsk9 == "no") { ?>
                                    <input type="radio" value="no" name="pcsk9_print" id="pcsk9_print"
                                        checked="checked" disabled> No <br />
                                    <?php } else { ?>
                                    <input type="radio" value="no" name="pcsk9_print" id="pcsk9_print"
                                        disabled> No <br />
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
                                    <input type="radio" value="yes" name="other_fh_mutations_print"
                                        id="other_fh_mutations_print" checked="checked" disabled> Yes
                                    <br />
                                    <?php } else { ?>
                                    <input type="radio" value="yes" name="other_fh_mutations_print"
                                        id="other_fh_mutations_print" disabled> Yes <br />
                                    <?php } ?>

                                    <?php if ($other_fh_mutations == "no") { ?>
                                    <input type="radio" value="no" name="other_fh_mutations_print"
                                        id="other_fh_mutations_print" checked="checked" disabled> No
                                    <br />
                                    <?php } else { ?>
                                    <input type="radio" value="no" name="other_fh_mutations_print"
                                        id="other_fh_mutations_print" disabled> No <br />
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
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <?php
            if (!isset($_SESSION['patientid'])) {
                header('Location: index.php');
            } else {
                $patientid = $_SESSION['patientid'];
            
                $sql = 'SELECT * FROM patienttbl WHERE patientid = ?';
                ($stmt = $conn->prepare($sql)) or trigger_error($conn->error, E_USER_ERROR);
                $stmt->bind_param('s', $patientid);
                $stmt->execute() or trigger_error($stmt->error, E_USER_ERROR);
                ($stmt_result = $stmt->get_result()) or trigger_error($stmt->error, E_USER_ERROR);
                if ($stmt_result->num_rows > 0) {
                    while ($row = $stmt_result->fetch_assoc()) {
                        $patientgender = $row['patientgender'];
                        $patientnric = $row['patientnric'];
                        $patientyearoffirstseen = $row['patientyearoffirstseen'];
                        $premature_cad = $row['premature_cad'];
                        $premature_cerebral = $row['premature_cerebral'];
                        $pvd = $row['pvd'];
                        $corneal_arcus = $row['corneal_arcus'];
                        $patienttclevel = $row['patienttclevel'];
                        $patientldlclevel = $row['patientldlclevel'];
                        $baseline_therapy = $row['baseline_therapy'];
                        $baseline_therapy_specify = $row['baseline_therapy_specify'];
                        $tendon_xanthomata = $row['tendon_xanthomata'];
                        $achilles_tendon = $row['achilles_tendon'];
                        $nodular_xanthoma = $row['nodular_xanthoma'];
                        $genetic_mutation = $row['genetic_mutation'];
                        $ldlr = $row['ldlr'];
                        $apob = $row['apob'];
                        $pcsk9 = $row['pcsk9'];
                        $other_fh_mutations = $row['other_fh_mutations'];
                        $first_degree = $row['first_degree'];
                        $first_degree_gender = $row['first_degree_gender'];
                        $first_degree_age = $row['first_degree_age'];
                        $first_degree_tclvl = $row['first_degree_tclvl'];
                        $first_degree_ldlclvl = $row['first_degree_ldlclvl'];
                        $first_degree_premature_cad = $row['first_degree_premature_cad'];
                        $first_degree_tendon_xanthomata = $row['first_degree_tendon_xanthomata'];
                        $first_degree_corneal_arcus = $row['first_degree_corneal_arcus'];
                        $first_degree_fh = $row['first_degree_fh'];
                        $second_degree = $row['second_degree'];
                        $second_degree_gender = $row['second_degree_gender'];
                        $second_degree_age = $row['second_degree_age'];
                        $second_degree_tclvl = $row['second_degree_tclvl'];
                        $second_degree_premature_cad = $row['second_degree_premature_cad'];
                        $second_degree_tendon_xanthomata = $row['second_degree_tendon_xanthomata'];
                        $second_degree_fh = $row['second_degree_fh'];
                        $third_degree = $row['third_degree'];
                        $third_degree_fh = $row['third_degree_fh'];
            
                        // get age from ic and first seen
                        $nricyear = substr($patientnric, 0, 2);
                        if ($nricyear > 25) {
                            $firstseenage = $patientyearoffirstseen - (1900 + $nricyear);
                            $nricage = date('Y') - (1900 + $nricyear);
                        } else {
                            $firstseenage = $patientyearoffirstseen - $nricyear;
                            $nricage = $nricyear;
                        }
                    }
                }
            
                $sql = 'SELECT * FROM patientscoretbl WHERE patientid = ? order by patientscoreid desc';
                ($stmt = $conn->prepare($sql)) or trigger_error($conn->error, E_USER_ERROR);
                $stmt->bind_param('s', $patientid);
                $stmt->execute() or trigger_error($stmt->error, E_USER_ERROR);
                ($stmt_result = $stmt->get_result()) or trigger_error($stmt->error, E_USER_ERROR);
                if ($stmt_result->num_rows > 0) {
                    while ($row = $stmt_result->fetch_assoc()) {
                        $first_question_jfhmc = $row['first_question_jfhmc'];
                        $second_question_jfhmc = $row['second_question_jfhmc'];
                        $third_question_jfhmc = $row['third_question_jfhmc'];
                        $total_jfhmc = $row['total_jfhmc'];
                        $result_jfhmc = $row['result_jfhmc'];
                    }
                }
            }
            ?>
            <div class="col-md-12" id="panel1">
                <div class="panel panel-default">
                    <div class="panel-heading">

                        <h3 class="panel-title">JFHMC Heterozygous FH</h3>
                    </div>
                    <div class="panel-body two-col">
                        <!-- first question -->
                        <b><?php 
                        if (($result_jfhmc != 'UNLIKELY') || ($result_jfhmc != 'INVALID')) {
                            ?><font size="5px">Category :</font>
                            <font color="green" size="5px"><?php echo $result_jfhmc; ?></font>
                            <?php
                        } else {
                            ?><font size="5px">Category :</font>
                            <font color="red" size="5px"><?php echo $result_jfhmc; ?></font>
                            <?php
                        }
                     ?>
                        </b>
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
                                    <input type="checkbox" value="" name="3-16-35" id="3-16-35" checked
                                        disabled>
                                    LDL-C >= 4.7 mmol/L
                                    <?php
                                        }
                                        else {
                                    ?>
                                    <input type="checkbox" value="" name="3-16-35" id="3-16-35"
                                        disabled>
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
                                    <input type="radio" value="yes" name="tendon_xanthomata_print"
                                        id="tendon_xanthomata_print" checked="checked" disabled> Yes
                                    <br />
                                    <?php } else { ?>
                                    <input type="radio" value="yes" name="tendon_xanthomata_print"
                                        id="tendon_xanthomata_print" disabled> Yes <br />
                                    <?php } ?>

                                    <?php if ($tendon_xanthomata == "no") { ?>
                                    <input type="radio" value="no" name="tendon_xanthomata_print"
                                        id="tendon_xanthomata_print" checked="checked" disabled> No <br />
                                    <?php } else { ?>
                                    <input type="radio" value="no" name="tendon_xanthomata_print"
                                        id="tendon_xanthomata_print" disabled> No <br />
                                    <?php } ?>

                                    <?php if ($tendon_xanthomata == "unknown") { ?>
                                    <input type="radio" value="unknown" name="tendon_xanthomata_print"
                                        id="tendon_xanthomata_print" checked="checked" disabled> Unknown
                                    <?php } else { ?>
                                    <input type="radio" value="unknown" name="tendon_xanthomata_print"
                                        id="tendon_xanthomata_print" disabled> Unknown
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
                                    <input type="radio" value="yes" name="achilles_tendon_print"
                                        id="achilles_tendon_print" checked="checked" disabled> Yes <br />
                                    <?php } else { ?>
                                    <input type="radio" value="yes" name="achilles_tendon_print"
                                        id="achilles_tendon_print" disabled> Yes <br />
                                    <?php } ?>

                                    <?php if ($achilles_tendon == "no") { ?>
                                    <input type="radio" value="no" name="achilles_tendon_print"
                                        id="achilles_tendon_print" checked="checked" disabled> No <br />
                                    <?php } else { ?>
                                    <input type="radio" value="no" name="achilles_tendon_print"
                                        id="achilles_tendon_print" disabled> No <br />
                                    <?php } ?>

                                    <?php if ($achilles_tendon == "unknown") { ?>
                                    <input type="radio" value="unknown" name="achilles_tendon_print"
                                        id="achilles_tendon_print" checked="checked" disabled> Unknown
                                    <?php } else { ?>
                                    <input type="radio" value="unknown" name="achilles_tendon_print"
                                        id="achilles_tendon_print" disabled> Unknown
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
                                    <input type="radio" value="yes" name="nodular_xanthoma_print"
                                        id="nodular_xanthoma_print" checked="checked" disabled> Yes <br />
                                    <?php } else { ?>
                                    <input type="radio" value="yes" name="nodular_xanthoma_print"
                                        id="nodular_xanthoma_print" disabled> Yes <br />
                                    <?php } ?>

                                    <?php if ($nodular_xanthoma == "no") { ?>
                                    <input type="radio" value="no" name="nodular_xanthoma_print"
                                        id="nodular_xanthoma_print" checked="checked" disabled> No <br />
                                    <?php } else { ?>
                                    <input type="radio" value="no" name="nodular_xanthoma_print"
                                        id="nodular_xanthoma_print" disabled> No <br />
                                    <?php } ?>

                                    <?php if ($nodular_xanthoma == "unknown") { ?>
                                    <input type="radio" value="unknown" name="nodular_xanthoma_print"
                                        id="nodular_xanthoma_print" checked="checked" disabled> Unknown
                                    <?php } else { ?>
                                    <input type="radio" value="unknown" name="nodular_xanthoma_print"
                                        id="nodular_xanthoma_print" disabled> Unknown
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
                                    <input type="radio" value="yes"
                                        name="first_degree_fh_print"id="first_degree_fh_print"checked="checked"
                                        disabled> Yes <br />
                                    <?php } else { ?>
                                    <input type="radio" value="yes"
                                        name="first_degree_fh_print"id="first_degree_fh_print"disabled>
                                    Yes
                                    <br />
                                    <?php } ?>

                                    <?php if ($first_degree_fh == "no") { ?>
                                    <input type="radio" value="no"
                                        name="first_degree_fh_print"id="first_degree_fh_print"checked="checked"
                                        disabled> No <br />
                                    <?php } else { ?>
                                    <input type="radio" value="no"
                                        name="first_degree_fh_print"id="first_degree_fh_print"disabled> No
                                    <br />
                                    <?php } ?>

                                    <?php if ($first_degree_fh == "unknown") { ?>
                                    <input type="radio" value="unknown"
                                        name="first_degree_fh_print"id="first_degree_fh_print"checked="checked"
                                        disabled> Unknown
                                    <?php } else { ?>
                                    <input type="radio" value="unknown"
                                        name="first_degree_fh_print"id="first_degree_fh_print"disabled>
                                    Unknown
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
                                    Premature CAD (
                                    < 55 years for man; < 60 years for woman) <br />
                                    Premature CAD <br />
                                    <?php if ($first_degree_premature_cad == "yes") { ?>
                                    <input type="radio" value="yes" name="first_degree_premature_cad_print"
                                        id="first_degree_premature_cad_print" checked="checked" disabled>
                                    Yes
                                    <br />
                                    <?php } else { ?>
                                    <input type="radio" value="yes" name="first_degree_premature_cad_print"
                                        id="first_degree_premature_cad_print" disabled> Yes <br />
                                    <?php } ?>

                                    <?php if ($first_degree_premature_cad == "no") { ?>
                                    <input type="radio" value="no" name="first_degree_premature_cad_print"
                                        id="first_degree_premature_cad_print" checked="checked" disabled>
                                    No
                                    <br />
                                    <?php } else { ?>
                                    <input type="radio" value="no" name="first_degree_premature_cad_print"
                                        id="first_degree_premature_cad_print" disabled> No <br />
                                    <?php } ?>

                                    <?php if ($first_degree_premature_cad == "unknown") { ?>
                                    <input type="radio" value="unknown" name="first_degree_premature_cad_print"
                                        id="first_degree_premature_cad_print" checked="checked" disabled>
                                    Unknown
                                    <?php } else { ?>
                                    <input type="radio" value="unknown" name="first_degree_premature_cad_print"
                                        id="first_degree_premature_cad_print" disabled> Unknown
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
                                    <input type="radio" value="yes"
                                        name="second_degree_fh_print"id="second_degree_fh_print"checked="checked"
                                        disabled> Yes <br />
                                    <?php } else { ?>
                                    <input type="radio" value="yes"
                                        name="second_degree_fh_print"id="second_degree_fh_print"disabled>
                                    Yes
                                    <br />
                                    <?php } ?>

                                    <?php if ($second_degree_fh == "no") { ?>
                                    <input type="radio" value="no"
                                        name="second_degree_fh_print"id="second_degree_fh_print"checked="checked"
                                        disabled> No <br />
                                    <?php } else { ?>
                                    <input type="radio" value="no"
                                        name="second_degree_fh_print"id="second_degree_fh_print"disabled>
                                    No
                                    <br />
                                    <?php } ?>

                                    <?php if ($second_degree_fh == "unknown") { ?>
                                    <input type="radio" value="unknown"
                                        name="second_degree_fh_print"id="second_degree_fh_print"checked="checked"
                                        disabled> Unknown
                                    <?php } else { ?>
                                    <input type="radio" value="unknown"
                                        name="second_degree_fh_print"id="second_degree_fh_print"disabled>
                                    Unknown
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
                                    Premature CAD (
                                    < 55 years for man; < 60 years for woman) <br />
                                    Premature CAD <br />
                                    <?php if ($second_degree_premature_cad == "yes") { ?>
                                    <input type="radio" value="yes" name="second_degree_premature_cad_print"
                                        id="second_degree_premature_cad_print" checked="checked" disabled>
                                    Yes
                                    <br />
                                    <?php } else { ?>
                                    <input type="radio" value="yes" name="second_degree_premature_cad_print"
                                        id="second_degree_premature_cad_print" disabled> Yes <br />
                                    <?php } ?>

                                    <?php if ($second_degree_premature_cad == "no") { ?>
                                    <input type="radio" value="no" name="second_degree_premature_cad_print"
                                        id="second_degree_premature_cad_print" checked="checked" disabled>
                                    No
                                    <br />
                                    <?php } else { ?>
                                    <input type="radio" value="no" name="second_degree_premature_cad_print"
                                        id="second_degree_premature_cad_print" disabled> No <br />
                                    <?php } ?>

                                    <?php if ($second_degree_premature_cad == "unknown") { ?>
                                    <input type="radio" value="unknown" name="second_degree_premature_cad_print"
                                        id="second_degree_premature_cad_print" checked="checked" disabled>
                                    Unknown
                                    <?php } else { ?>
                                    <input type="radio" value="unknown" name="second_degree_premature_cad_print"
                                        id="second_degree_premature_cad_print" disabled> Unknown
                                    <?php } ?>
                                </label>
                            </div>
                        </div>
                        <hr />
                        <!-- finish third question -->

                    </div>
                </div>
            </div>
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />


            <?php
            if (!isset($_SESSION['patientid'])) {
                header('Location: index.php');
            } else {
                $patientid = $_SESSION['patientid'];
            
                $sql = 'SELECT * FROM patienttbl WHERE patientid = ?';
                ($stmt = $conn->prepare($sql)) or trigger_error($conn->error, E_USER_ERROR);
                $stmt->bind_param('s', $patientid);
                $stmt->execute() or trigger_error($stmt->error, E_USER_ERROR);
                ($stmt_result = $stmt->get_result()) or trigger_error($stmt->error, E_USER_ERROR);
                if ($stmt_result->num_rows > 0) {
                    while ($row = $stmt_result->fetch_assoc()) {
                        $patientgender = $row['patientgender'];
                        $patientnric = $row['patientnric'];
                        $patientyearoffirstseen = $row['patientyearoffirstseen'];
                        $premature_cad = $row['premature_cad'];
                        $premature_cerebral = $row['premature_cerebral'];
                        $pvd = $row['pvd'];
                        $corneal_arcus = $row['corneal_arcus'];
                        $patienttclevel = $row['patienttclevel'];
                        $patientldlclevel = $row['patientldlclevel'];
                        $baseline_therapy = $row['baseline_therapy'];
                        $baseline_therapy_specify = $row['baseline_therapy_specify'];
                        $tendon_xanthomata = $row['tendon_xanthomata'];
                        $achilles_tendon = $row['achilles_tendon'];
                        $nodular_xanthoma = $row['nodular_xanthoma'];
                        $genetic_mutation = $row['genetic_mutation'];
                        $ldlr = $row['ldlr'];
                        $apob = $row['apob'];
                        $pcsk9 = $row['pcsk9'];
                        $other_fh_mutations = $row['other_fh_mutations'];
                        $first_degree = $row['first_degree'];
                        $first_degree_gender = $row['first_degree_gender'];
                        $first_degree_age = $row['first_degree_age'];
                        $first_degree_tclvl = $row['first_degree_tclvl'];
                        $first_degree_ldlclvl = $row['first_degree_ldlclvl'];
                        $first_degree_premature_cad = $row['first_degree_premature_cad'];
                        $first_degree_tendon_xanthomata = $row['first_degree_tendon_xanthomata'];
                        $first_degree_corneal_arcus = $row['first_degree_corneal_arcus'];
                        $first_degree_fh = $row['first_degree_fh'];
                        $second_degree = $row['second_degree'];
                        $second_degree_gender = $row['second_degree_gender'];
                        $second_degree_age = $row['second_degree_age'];
                        $second_degree_tclvl = $row['second_degree_tclvl'];
                        $second_degree_premature_cad = $row['second_degree_premature_cad'];
                        $second_degree_tendon_xanthomata = $row['second_degree_tendon_xanthomata'];
                        $second_degree_fh = $row['second_degree_fh'];
                        $third_degree = $row['third_degree'];
                        $third_degree_fh = $row['third_degree_fh'];
            
                        // get age from ic and first seen
                        $nricyear = substr($patientnric, 0, 2);
                        if ($nricyear > 25) {
                            $firstseenage = $patientyearoffirstseen - (1900 + $nricyear);
                            $nricage = date('Y') - (1900 + $nricyear);
                        } else {
                            $firstseenage = $patientyearoffirstseen - $nricyear;
                            $nricage = $nricyear;
                        }
                    }
                }
            
                $sql = 'SELECT * FROM patientscoretbl WHERE patientid = ? order by patientscoreid desc';
                ($stmt = $conn->prepare($sql)) or trigger_error($conn->error, E_USER_ERROR);
                $stmt->bind_param('s', $patientid);
                $stmt->execute() or trigger_error($stmt->error, E_USER_ERROR);
                ($stmt_result = $stmt->get_result()) or trigger_error($stmt->error, E_USER_ERROR);
                if ($stmt_result->num_rows > 0) {
                    while ($row = $stmt_result->fetch_assoc()) {
                        $result_us = $row['result_us'];
                    }
                }
            }
            ?>
            <div class="col-md-12" id="panel1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">US-MEDPED<span class="pull-right"></h3>
                    </div>
                    <div class="panel-body two-col">
                        <!-- first question -->
                        <b><?php 
                        if (($result_us != 'UNLIKELY') || ($result_us != 'INVALID')) {
                            ?><font size="5px">Category :</font>
                            <font color="green" size="5px"><?php echo $result_us; ?></font>
                            <?php
                        } else {
                            ?><font size="5px">Category :</font>
                            <font color="red" size="5px"><?php echo $result_us; ?></font>
                            <?php
                        }
                     ?>
                        </b>
                        <hr />
                        <div class="row">
                            <div class="col-md-12">
                                <!--  -->
                                <label>
                                    1. Age (years) <input type="text" value="<?php echo $nricage; ?>"
                                        id="patientage" class="form-control" readonly>
                                </label>
                                <!-- </div> -->
                            </div>

                        </div>
                        <hr />
                        <!-- finish first question -->

                        <!-- second question -->
                        <div class="row">
                            <div class="col-md-12">
                                <!--  -->
                                <label>
                                    2. TC (mmol/L) <input type="text" value="<?php echo $patienttclevel; ?>"
                                        id="patienttclevel" class="form-control" readonly>
                                </label>
                                <!-- </div> -->
                            </div>

                        </div>
                        <hr />
                        <!-- second first question -->

                        <!-- third question -->
                        <div class="row">
                            <div class="col-md-12">
                                <!--  -->
                                <label>
                                    2. Hyper Cholestrolaemia in ...
                                </label>
                                <!-- </div> -->
                            </div>
                            <hr>
                            <div class="col-md-12">
                                <label class="well well-sm col-xs-12" style="font-weight: normal;" for="4-19-43">
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
                                    1st Degree Relatives
                                    <br />
                                    Confirmed FH <br />
                                    <?php if ($first_degree_fh == "yes") { ?>
                                    <input type="radio" value="yes" name="first_degree_fh_print"
                                        id="first_degree_fh_print" checked="checked" disabled> Yes <br />
                                    <?php } else { ?>
                                    <input type="radio" value="yes" name="first_degree_fh_print"
                                        id="first_degree_fh_print" disabled> Yes <br />
                                    <?php } ?>

                                    <?php if ($first_degree_fh == "no") { ?>
                                    <input type="radio" value="no" name="first_degree_fh_print"
                                        id="first_degree_fh_print" checked="checked" disabled> No <br />
                                    <?php } else { ?>
                                    <input type="radio" value="no" name="first_degree_fh_print"
                                        id="first_degree_fh_print" disabled> No <br />
                                    <?php } ?>

                                    <?php if ($first_degree_fh == "unknown") { ?>
                                    <input type="radio" value="unknown" name="first_degree_fh_print"
                                        id="first_degree_fh_print" checked="checked" disabled> Unknown
                                    <?php } else { ?>
                                    <input type="radio" value="unknown" name="first_degree_fh_print"
                                        id="first_degree_fh_print" disabled> Unknown
                                    <?php } ?>
                                </label>

                            </div>
                            <br /><br />
                            <div class="col-md-12">
                                <label class="well well-sm col-xs-12" style="font-weight: normal;" for="4-19-44">
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
                                    2nd Degree Relatives
                                    <br />
                                    Confirmed FH <br />
                                    <?php if ($second_degree_fh == "yes") { ?>
                                    <input type="radio" value="yes" name="second_degree_fh_print"
                                        id="second_degree_fh_print" checked="checked" disabled> Yes <br />
                                    <?php } else { ?>
                                    <input type="radio" value="yes" name="second_degree_fh_print"
                                        id="second_degree_fh_print" disabled> Yes <br />
                                    <?php } ?>

                                    <?php if ($second_degree_fh == "no") { ?>
                                    <input type="radio" value="no" name="second_degree_fh_print"
                                        id="second_degree_fh_print" checked="checked" disabled> No <br />
                                    <?php } else { ?>
                                    <input type="radio" value="no" name="second_degree_fh_print"
                                        id="second_degree_fh_print" disabled> No <br />
                                    <?php } ?>

                                    <?php if ($second_degree_fh == "unknown") { ?>
                                    <input type="radio" value="unknown" name="second_degree_fh_print"
                                        id="second_degree_fh_print" checked="checked" disabled> Unknown
                                    <?php } else { ?>
                                    <input type="radio" value="unknown" name="second_degree_fh_print"
                                        id="second_degree_fh_print" disabled> Unknown
                                    <?php } ?>
                                </label>

                            </div>
                            <br /><br />
                            <div class="col-md-12">
                                <label class="well well-sm col-xs-12" style="font-weight: normal;" for="4-19-45">
                                    <?php 
                                        if ($third_degree_fh == "yes") {
                                    ?>
                                    <input type="checkbox" value="1" checked="checked" disabled>
                                    <?php
                                        } else {
                                    ?>
                                    <input type="checkbox" value="1" disabled>
                                    <?php 
                                        }
                                     ?>
                                    3rd Degree Relatives
                                    <br />
                                    Confirmed FH <br />
                                    <?php if ($third_degree_fh == "yes") { ?>
                                    <input type="radio" value="yes" name="third_degree_fh_print"
                                        id="third_degree_fh_print" checked="checked" disabled> Yes <br />
                                    <?php } else { ?>
                                    <input type="radio" value="yes" name="third_degree_fh_print"
                                        id="third_degree_fh_print" disabled> Yes <br />
                                    <?php } ?>

                                    <?php if ($third_degree_fh == "no") { ?>
                                    <input type="radio" value="no" name="third_degree_fh_print"
                                        id="third_degree_fh_print" checked="checked" disabled> No <br />
                                    <?php } else { ?>
                                    <input type="radio" value="no" name="third_degree_fh_print"
                                        id="third_degree_fh_print" disabled> No <br />
                                    <?php } ?>

                                    <?php if ($third_degree_fh == "unknown") { ?>
                                    <input type="radio" value="unknown" name="third_degree_fh_print"
                                        id="third_degree_fh_print" checked="checked" disabled> Unknown
                                    <?php } else { ?>
                                    <input type="radio" value="unknown" name="third_degree_fh_print"
                                        id="third_degree_fh_print" disabled> Unknown
                                    <?php } ?>
                                </label>
                            </div>
                        </div>
                        <hr />
                        <!-- finish third question -->
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
