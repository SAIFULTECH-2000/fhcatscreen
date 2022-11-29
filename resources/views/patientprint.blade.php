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

      <div style="page-break-after:always">
          <table style="border: 1px solid black;
 border-collapse: collapse;padding: 5px;">
              <tbody>
                  <tr>
                      <th colspan="2">
                          <div style="margin-top: 5px">
                              <img src="{{ asset('img/logo-90x90-i-pperform.png') }}" height="90" alt="" />
                          </div>
                      </th>
                      <th colspan="4" style="text-align: left">
                          <h2>Institute of Pathology, Laboratory and Forensic Medicine</h2>
                          Level 4, Academic Building, <br>Faculty of Medicine,<br> Universiti Teknologi
                          MARA,<br>Sungai Buloh, Malaysia.<br> +60 3-6126 7463 | ipperform@gmail.com.

                      </th>
                  </tr>
                  <tr>
                      <th colspan="6"
                          style="border: 1px solid black;font-size: 12px;text-align: center;border-collapse: collapse;background-color: #ccccff;">
                          PERSONAL INFO
                      </th>
                  </tr>

                  <tr>
                      <th colspan="2" style="width: 20%;font-size: 10px;border: 1px solid black;text-align:center">
                          <div>
                              <b>Name</b>
                          </div>
                      </th>
                      <td colspan="4" style="width: 40%;border: 1px solid black;">
                          <?php echo $patientname; ?>
                      </td>
                  </tr>
                  <tr>
                      <th colspan="2" style="width: 20%;font-size: 12px;border: 1px solid black;text-align:center">
                          Age (years)

                      </th>
                      <td colspan="4" style="width: 80%;font-size: 12px;border: 1px solid black;">
                          <?php echo $nricage; ?>
                      </td>
                  </tr>
                  <tr>

                      <th colspan="2" style="width: 20%;font-size: 12px;border: 1px solid black;text-align:center">
                          <div>
                              <b>Gender</b> <br>

                          </div>
                      </th>
                      <td colspan="4" style="width: 40%;font-size: 12px;border: 1px solid black;">
                          <div>
                              <?php if ($patientgender == 1) { ?>
                              <br><input type="radio" value="1" name="patientgender" id="patientgender"
                                  checked="checked"> Male
                              <br><input type="radio" value="2" name="patientgender" id="patientgender"> Female
                              <?php } else if ($patientgender == 2) { ?>
                              <br><input type="radio" value="1" name="patientgender" id="patientgender"> Male
                              <br><input type="radio" value="2" name="patientgender" id="patientgender"
                                  checked="checked"> Female
                              <?php } ?>

                          </div>
                      </td>
                  </tr>
                  <tr>
                      <th colspan="2" style="width: 20%;font-size: 12px;border: 1px solid black;text-align:center">
                          Year of first seen
                      </th>
                      <td colspan="4" style="width: 80%;font-size: 12px;border: 1px solid black;">
                          <?php echo $patientyearoffirstseen; ?>
                      </td>
                  </tr>
                  <tr>
                      <th colspan="2" style="width: 20%;font-size: 12px;border: 1px solid black;text-align:center">
                          NRIC
                      </th>
                      <td colspan="4" style="width: 80%;font-size: 12px;border: 1px solid black;">
                          <?php echo $patientnric; ?>
                      </td>
                  </tr>
                  <tr>
                      <th colspan="2" style="width: 20%;font-size: 12px;border: 1px solid black;text-align:center">
                          <label for="patientgender">First Relative Gender:</label>

                      </th>
                      <td colspan="4" style="width: 80%;font-size: 12px;border: 1px solid black;">
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
                      </td>
                  </tr>
                  <tr>
                      <th colspan="2" style="width: 20%;font-size: 12px;border: 1px solid black;text-align:center">
                          <b>TEMPAT AKTIVITI</b>
                      </th>
                      <td colspan="4" style="width: 80%;font-size: 12px;border: 1px solid black;">

                      </td>
                  </tr>
                  <tr>
                      <th colspan="2" style="width: 20%;font-size: 12px;border: 1px solid black;text-align:center">
                          <label>
                              Second Relative Age (years)
                          </label>
                      </th>
                      <td colspan="4" style="width: 80%;font-size: 12px;border: 1px solid black;">
                         <?php echo $second_degree_age; ?>
                      </td>
                  </tr>
                  <tr>
                      <th colspan="2" style="width: 20%;font-size: 12px;border: 1px solid black;text-align:center">
                          <label for="patientgender">second Relative Gender:</label>

                      </th>
                      <td colspan="4" style="width: 80%;font-size: 12px;border: 1px solid black;">
                          <?php if ($second_degree_gender == 1) { ?>
                          <br><input type="radio" value="1" name="second_degree_gender" id="second_degree_gender"
                              checked="checked" disabled=""> Male
                          <br><input type="radio" value="2" name="second_degree_gender"
                              id="second_degree_gender" disabled=""> Female
                          <?php } else if ($second_degree_gender == 2) { ?>
                          <br><input type="radio" value="1" name="second_degree_gender"
                              id="second_degree_gender" disabled=""> Male
                          <br><input type="radio" value="2" name="second_degree_gender"
                              id="second_degree_gender" checked="checked" disabled=""> Female
                          <?php } ?>
                      </td>
                  </tr>
              </tbody>
          </table>
      </div>

      {{-- DLCC --}}
     <div style="page-break-after:always">
          <table style="border: 1px solid black;
 border-collapse: collapse;padding: 5px;">
              <tbody>
                     <tr>
                      <th colspan="6"
                          style="border: 1px solid black;font-size: 12px;text-align: center;border-collapse: collapse;background-color: #ccccff;">
                         DLCC
                      </th>
                  </tr>
                  
              </tbody>
          </table>
     </div>