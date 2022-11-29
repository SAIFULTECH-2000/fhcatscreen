@extends('layouts.app')
@section('title','FH CatScreen')

@section('content')
<div id="myHeader">
	<div class="boxCorner boxShadow-top header text-left" >
		<div class="row">
		  <div class="logo-fhcatscreen"><img src="img/logo-small.png" alt=""/></div>
		  <div class="hello-user">
            <label class="hello-seperator"></label>
		  </div>
		</div>
	</div>
	<div class="boxCorner boxShadow-top header-sub text-left" >
	<div class="txt-title"><p>Patient Registration</p></div>
  </div>
  </div>
 <form id="registration-form" enctype="multipart/form-data" >
<div class="content container content-wrapper2">
<div class="row">
<div class="col-custom2 boxShadow-top form-group">
    	<div class="row">
        <div class="col-md-4 mb-3">
          <p class="txt-title2">1. Personal Information</p>
        </div>
        </div>

        <div class="row">
        <div class="col-md-6 mb-3">
            <input type="text" value="" class="form-control" name="patientname" id="patientname"  placeholder="Name"  title="All must be characters" required>
        </div>
        <div class="col-md-6 mb-3">
            <div class="row">
                <div class="col-md-3 col-3 col-form-label">
                    <label>Gender:</label>
                </div>
                    <label class="but-radio">Male<input type="radio" value="1" name="patientgender" id="patientgender" required><span class="checkmark"></span></label>
                    <label class="but-radio">Female<input type="radio" value="2" name="patientgender" id="patientgender" ><span class="checkmark"></span></label>
            </div>
        </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
			<div class="row">
                <div class="col-4 mb-3">
                   
					<input type="text" value="" class="form-control" name="patientnric1" id="patientnric1" pattern="[0-9]{6}" title="First 6 digits"  onkeyup="calculateAge()" autocomplete="off" maxlength="6" placeholder="000000" required>
                </div>
                <div class="col-4 mb-3 ">
                    <input type="text" value="" class="form-control" name="patientnric2" id="patientnric2" pattern="[0-9]{2}" title="2 Digits" autocomplete="off" maxlength="2" placeholder="00" required>
                </div>
                <div class="col-4 mb-3 ">
                    <input type="text" value="" class="form-control" name="patientnric3" id="patientnric3" pattern="[0-9]{4}" title="4 Last Digits" autocomplete="off" maxlength="4" placeholder="0000" required>
                </div>
            </div>
            <small class="text-muted"><strong>Note:</strong> If you don’t know the NRIC, at least put the first two digits of NRIC (year) and types zeros for others. E.g: (930000-00-0000).</small>
            </div>
            <div class="col-md-6 mb-3">
                <input type="text" class="form-control" name="patientcontact" id="patientcontact" placeholder="Mobile number (Optional)" pattern="[0-9]{10}" value="" title="Enter digits mobile number" >
            </div>
        </div>

            <div class="row">
			
            <div class="col-md-6 mb-3">
                <select name="patientrace" id="patientrace" class="form-control" required>
                    <option selected disabled hidden>Race</option>
                <?php 
				
					
                    $array_race = ["MALAY","CHINESE","INDIAN","ORANG ASLI","BIDAYUH","IBAN","OTHERS","DUSUN","BAJAU","KADAZAN","SULUK","BANJAR","BUGIS","NON-MALAYSIAN"];
                    for ($i = 0; $i < sizeof($array_race); $i++) { ?>
                        <option value="<?php echo $array_race[$i]; ?>"><?php echo $array_race[$i]; ?></option>
                        <?php
                    }
                ?>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <!--<input type="text" value="" class="form-control" name="patientage" id="patientage" placeholder="Age based on NRIC" readonly>-->
				<input type="text" value="" class="form-control" name="patientage" id="patientage"  placeholder="Age"  title="Age">
            </div>
            </div>
			<div class="row">
			<div class="col mb-3">
			
            <input type="text" value="" class="form-control" name="patientaddress" id="patientaddress"  placeholder="Current Address"  title="Current address">
        </div>
			</div>
			
			<div class="row">
			<div class="col-md-4 mb-3"">
			
            <input type="text" value="" class="form-control" name="patientheight" id="patientheight"  placeholder="Height (cm)"  title="Height (cm)">
        </div>
		<div class="col-md-4 mb-3"">
			
            <input type="text" value="" class="form-control" name="patientweight" id="patientweight"  placeholder="Weight (kg)"  title="Weight (kg)">
        </div>
		<div class="col-md-4 mb-3"">
			
            <input type="text" value="" class="form-control" name="patientwaist" id="patientwaist"  placeholder="Waist circumference (cm)"  title="Waist circumference (cm)">
        </div>
		
			</div>
			
			
                 <!-- finish first question -->
                <!-- second question -->
			<hr class="mb-3">
            <div class="row">
            <div class="col mb-3">
            <p class="txt-title2">2. Causes of Secondary Hypercholesterolaemia</p>
            </div>
            </div>
			
			<div class="row">
			<div class="col-md-12 mb-3 ">
			<div class="but-radio-group mb-3">
                <label for="premature_cad" class="col col-form-label">2.1 Pregnancy </label>
            <div class="col form-group mb-3 row">
              <div class="col-4 mb-3">
              <label class="but-radio">Yes<input type="radio" onclick="javascript:yesnoCheck0();" value="yes" class ="pregnancy" name="pregnancy" id="pregnancy" ><span class="checkmark"></span></label>
              </div>
              <div class="col-4 mb-3">
              <label class="but-radio">No<input type="radio" onclick="javascript:yesnoCheck0();" value="no" class ="pregnancy" name="pregnancy" id="pregnancy"><span class="checkmark"></span></label>
              </div>
            </div>	</div>
			
        
            <div class="but-radio-group mb-3">
                <label for="premature_cad" class="col col-form-label">2.2 Hypothyroidism</label>
            <div class="col form-group mb-3 row">
              <div class="col-4 mb-3">
              <label class="but-radio">Yes<input type="radio" onclick="javascript:yesnoCheck4();" value="yes" name="hypothyroidism" id="hypothyroidism"> <span class="checkmark"></span></label>
              </div>
              <div class="col-4 mb-3">
              <label class="but-radio">No<input type="radio" onclick="javascript:yesnoCheck4();" value="no" name="hypothyroidism" id="hypothyroidism"><span class="checkmark"></span></label>
              </div>
            </div>	</div>	
			
			<div class="but-radio-group mb-3">
                <label for="premature_cad" class="col col-form-label">2.3 Nephrotic syndrome</label>
            <div class="col form-group mb-3 row">
              <div class="col-4 mb-3">
              <label class="but-radio">Yes<input type="radio"  onclick="javascript:yesnoCheck3();" value="yes" class ="nephrotic" name="nephroticsyndrome" id="nephrotic" ><span class="checkmark"></span></label>
              </div>
              <div class="col-4 mb-3">
              <label class="but-radio">No<input type="radio"  onclick="javascript:yesnoCheck3();" value="no" class ="nephrotic" name="nephroticsyndrome" id="nephrotic"><span class="checkmark"></span></label>
              </div>
            </div>	</div>
			
			<div class="but-radio-group mb-3">
                <label for="premature_cad" class="col col-form-label">2.4 Obstructive liver disease</label>
            <div class="col form-group mb-3 row">
              <div class="col-4 mb-3">
              <label class="but-radio">Yes<input type="radio" onclick="javascript:yesnoCheck2();" value="yes" class ="obstructive" name="obstructive_liverdisease" id="obstructive" ><span class="checkmark"></span></label>
              </div>
              <div class="col-4 mb-3">
              <label class="but-radio">No<input type="radio" onclick="javascript:yesnoCheck2();" value="no" class ="obstructive" name="obstructive_liverdisease" id="obstructive"><span class="checkmark"></span></label>
              </div>
            </div>	</div>
			
			
			<div class="but-radio-group mb-3">
                <label for="premature_cad" class="col col-form-label">2.5 Medications (Diuretics, Cyclosporine, Corticosteroids)</label>
            <div class="col form-group mb-3 row">
              <div class="col-4 mb-3">
              <label class="but-radio">Yes<input type="radio" onclick="javascript:yesnoCheck1();" value="yes" class ="medications" name="medications" id="medications" ><span class="checkmark"></span></label>
              </div>
              <div class="col-4 mb-3">
              <label class="but-radio">No<input type="radio" onclick="javascript:yesnoCheck1();" value="no" class ="medications" name="medications" id="medications"><span class="checkmark"></span></label>
              </div>
            </div>	</div>
			
			
			<div class="but-radio-group mb-3">
                <label for="premature_cad" class="col col-form-label">2.6 Hypogonadism </label>
            <div class="col form-group mb-3 row">
              <div class="col-4 mb-3">
              <label class="but-radio">Yes<input type="radio" onclick="javascript:yesnoCheck();" value="yes" class ="hypogonadism" name="hypogonadism" id="hypogonadism" ><span class="checkmark"></span></label>
              </div>
              <div class="col-4 mb-3">
              <label class="but-radio">No<input type="radio" onclick="javascript:yesnoCheck();" value="no" class ="hypogonadism" name="hypogonadism" id="hypogonadism"><span class="checkmark"></span></label>
              </div>
            </div>	</div>
			
			
			
			
			
			</div>	
			    	
			<!--<div class="col-md-13" id="autoUpdate_secondhc" class="autoUpdate_secondhc">-->
			
			<div class="col-md-13" id="ifYes" style="display:none">

			<div class="col mb-3">
			 
              <label class="col col-form-label"> Requires further clinical evaluation to exclude secondary hypercholesterolaemia
				</label>
									   
			</div>
			
			<div class="row">
			<div class="col-md-1 col-2">
				<button type="button" onClick="window.location.href='dashboard.php'"  class="btn btn-dark btn-block but-custom2"><i class="fa fa-long-arrow-left fa-lg"></i></button>
			</div>
			
			<div class="col-md-5 col-10">
				<button type="submit" class="btn btn-success btn-block but-color-none">Submit<i class="fa fa-paper-plane fa-lg" aria-hidden="true"></i></button>
			</div>

		</div> </form>
			</div>		   
			
			
			</div>	
			
			
			
	<div class="col-md-13" id="ifNo" style="display:none">
			
			<hr class="mb-3">
            <div class="row" >
            <div class="col-md-4 mb-3">
            <p class="txt-title2">3. Personal Clinical History</p>
            </div>
            </div>
      
	  
	   <div class="row">
        <div class="col-md-12 mb-3 ">
            <div class="but-radio-group mb-3">
                <label for="premature_cad" class="col col-form-label">3.1 CAD <i>(Ischaemic Heart Disease (IHD), Angina, Chestpain Exertion, Myocardial Infarction, Angioplasty (coronary stent), CABG, Revascularisation)</i></label>
            <div class="col form-group mb-3 row">
              <div class="col-4 mb-3">
              <label class="but-radio">Yes<input type="radio" value="yes" class ="cad" name="cad" id="cad"><span class="checkmark"></span></label>
              </div>
              <div class="col-4 mb-3">
              <label class="but-radio">No<input type="radio" value="no" class ="cad" name="cad" id="cad"><span class="checkmark"></span></label>
              </div>
            </div>			
			<div class="col-md-13" id="autoUpdate_cad" class="autoUpdate_cad">
			<div class="col form-group mb-3 row">
						   
                           <label class="col col-form-label" id ="patientageatfirstseen" for="patientageatfirstseen">Age at first diagnosed /Symptom presents of CAD:
						   <input type="number" step="1" value="0" class="patientageatfirstseen" name="patientageatfirstseen" id="patientageatfirstseen" placeholder="Age at first diagnosed"></label>
						   </div>
			</div>		   
            <!--<label class="col col-form-label" id ="premature_cad" for="premature_cad">Premature CAD: -->
			<input type="hidden" value="" name="premature_cad" id="premature_cad" ></label>	
			<input type="hidden"  value="" name="patientageoffirstseen_md" id="patientageoffirstseen_md" >
			<input type="hidden"  value=""  name="patientageoffirstseen_mdn" id="patientageoffirstseen_mdn" >
			<input type="hidden"  value=""  name="cadmdfirstseen" id="cadmdfirstseen" >
			<input type="hidden"  value=""  name="cadmdfirstseenno" id="cadmdfirstseenno" >
			
						 
                     
					 
					   <div class="col-md-13" id="autoUpdate_cad_no" class="autoUpdate_cad_no">
                        <!--<label id ="premature_cad_no" for="premature_cad_no">Non-Premature CAD:</label> -->
                        
						
                    </div>
					 
					 </div>
          </div>
		  </div>
		  
		  <div class="row">
          <div class="col-md-12">
            <div class="but-radio-group">
            <label for="Premature CAD" class="col col-form-label">3.2 Stroke <i>(Thrombotic Stroke, Transient Ischaemic Attack (TIA))</i></label>
            <div class="col form-group mb-3 row">
              <div class="col-4 mb-3">
              <label class="but-radio">Yes<input type="radio" value="yes" class ="premature_cerebral" name="premature_cerebral" id="premature_cerebral"><span class="checkmark"></span></label>
              </div>
              <div class="col-4 mb-3">
              <label class="but-radio">No<input type="radio" value="no" class ="premature_cerebral" name="premature_cerebral" id="premature_cerebral"><span class="checkmark"></span></label>
              </div>
            </div> 
			<div class="col form-group mb-3 row">
		  <div class="col-md-12" id="autoUpdate_stroke" class="autoUpdate_stroke">
                        <label class="col col-form-label" id ="patientageoffirstseen_stroke" for="patientageoffirstseen_stroke">Age at first diagnosed:
                        <input class="col-md-6" type="number" step="1" value="0" class="form-control" name="patientageoffirstseen_stroke" id="patientageoffirstseen_stroke"  title="Age of First Seen" ></label>
                          <!-- <input type="text" value="" class="form-control" name="patientageatfirstseen" id="patientageatfirstseen" readonly>-->
                    </div>
					</div>
		</div>
		</div>  
      </div>
	  
	  <div class="row">
	    <div class="col-md-12 ">
            <div class="but-radio-group">
            <label for="Premature CAD" class="col col-form-label">3.3 PVD <i>(Intermittent Claudication, Carotid Stenosis, Aortic Aneurysm, Renal Artery Stenosis (RAS), Ischaemic Bowel Disease )</i></label>
            <div class="col form-group mb-3 row">
              <div class="col-4 mb-3">
              <label class="but-radio">Yes<input type="radio" value="yes" class ="pvd" name="pvd" id="pvd"  > <span class="checkmark"></span></label>
              </div>
              <div class="col-4 mb-3">
              <label class="but-radio">No<input type="radio" value="no" class ="pvd" name="pvd" id="pvd"  > <span class="checkmark"></span></label>
              </div>
            </div>
			<div class="col form-group mb-3 row">
			<div class="col-md-12" id="autoUpdate_pvd" class="autoUpdate_pvd">
                        <label class="col col-form-label" id ="patientageoffirstseen_pvd" for="patientageoffirstseen_pvd">Age at first diagnosed:
                        <input class="col-md-6" type="number" step="1" value="0" class="form-control" name="patientageoffirstseen_pvd" id="patientageoffirstseen_pvd"  title="Age of First Seen" > </label>
                        <!-- <input type="text" value="" class="form-control" name="patientageatfirstseen" id="patientageatfirstseen" readonly>-->
                    </div>
			</div>
            </div>		
          </div>
        </div>

		<div class="row">
		<div class="col-md-12 ">
            <div class="but-radio-group">
            <label for="Premature CAD" class="col col-form-label">3.4 Cornel Arcus <i>(First appearance < 45 years)</i></label>
            <div class="col form-group mb-3 row">
              <div class="col-4 mb-3">
              <label class="but-radio">Yes<input type="radio" value="yes" name="corneal_arcus" id="corneal_arcus" ><span class="checkmark"></span></label>
              </div>
              <div class="col-4 mb-3">
              <label class="but-radio">No<input type="radio" value="no" name="corneal_arcus" id="corneal_arcus" ><span class="checkmark"></span></label>
              </div>
            </div>
            </div>
          </div>
		  </div>
		  
		  		  
	
			
                
        <hr class="mb-3">

        <div class="row">
        <div class="col-md-4 mb-3">
          <p class="txt-title2">4. Coronary risk factor(s)</p>
        </div>
        </div>
		
		<div class="row">
		<div class="col-md-12">
		
							<div class="but-radio-group mb-3">
									<label class="col col-form-label">Current Smoker <i>(Currently actively smoking or stop only within the last 1 month)</i></label> 				
									<div class="col form-group mb-3 row">
										<div class="col-4 mb-3">
											<label class="but-radio">Yes<input type="radio" value="yes" name="cadSmoking" id="cadSmoking"><span class="checkmark"></span></label>
										</div>
										<div class="col-4 mb-3">
											<label class="but-radio">No<input type="radio" value="no" name="cadSmoking" id="cadSmoking"><span class="checkmark"></span></label>
										</div>
									</div>		
									
									<div class="col form-group mb-3 row" id="noSmoking"> 
										<div class="col-4 mb-3">
											<label class="but-radio">Ex Smoker<input type="radio" value="yes" name="cadSmokingNo" id="cadSmokingNo"><span class="checkmark"></span></label>
										</div>
										<div class="col-4 mb-3">
											<label class="but-radio">Never Smoked<input type="radio" value="no" name="cadSmokingNo" id="cadSmokingNo"><span class="checkmark"></span></label>
										</div>
									</div>
									<div id="yesSmoking" >
										<div class="col form-group mb-3 row">
											<label class="col-4 mb-3">Average sticks per day</label>
											<div class="col mb-3">
												<input type="number" step="1" value="" class="form-control" name="averageStick" id="averageStick"  placeholder="Number of sticks per day" min="1">
											</div>
										</div>
										<div class="col form-group mb-3 row">
											<label class="col mb-3">Duration of active smoking</label>
											<div class="col mb-3">
												<input type="number" step="1" value="" class="form-control" name="activeSmokingM" id="activeSmokingM" min="0" placeholder="Month(s)">
											</div>
											<div class="col mb-3">
												<input type="number" step="1" value="" class="form-control" name="activeSmokingY" id="activeSmokingY" min="0" placeholder="Year(s)">
											</div>
										</div>
									</div>
								</div>
		
		
		

										
		    
			
								<div class="but-radio-group mb-3">
									<label for="Premature CAD" class="col col-form-label">Diabetes </label>
									<div class="col form-group mb-3 row">
										<div class="col-4 mb-3">
											<label class="but-radio">Yes<input type="radio" value="yes" name="cadDM" id="cadDM" class="cadDM"><span class="checkmark"></span></label>
										</div>
										<div class="col-4 mb-3">
											<label class="but-radio">No<input type="radio" value="no" name="cadDM" id="cadDM" class="cadDM"><span class="checkmark"></span></label>
										</div>
									</div>
									<div class="col form-group mb-3 row" id="autoUpdate_dm">
										<div class="col-4 mb-3">
											<input type="checkbox" value="yes" class ="DMp" name="DMp" id="DMp" > Proteinura
										</div>						   
										<div class="col-4 mb-3">
											<input type="checkbox" value="yes" class ="DMtod" name="DMtod" id="DMtod" > Target organ damage
										</div>
									</div>
								</div>
			
			
		
		
		<div class="but-radio-group mb-3">
			<label for="Premature CAD" class="col col-form-label">Lp(a) </label>
			<div class="col form-group mb-3 row">
              <div class="col-4 mb-3">
              <label class="but-radio">Yes<input type="radio" value="yes" class="lpa" name="lpa" id="lpa" ><span class="checkmark"></span></label>
              </div>
              <div class="col-4 mb-3">
              <label class="but-radio">No<input type="radio" value="no" class="lpa" name="lpa" id="lpa" ><span class="checkmark"></span></label>
              </div>
            </div>
			
			 <div id="autoUpdate_cs" class="col form-group mb-3 row">
				<div class="col-4 mb-3"><label>Lp(a) nmol/L</label>
				<input class="col-md-6" type="number" step="0.1" value="0.0" name="lpav" id="lpav" placeholder="Value must be between 90-200">
				</div>
				
			</div>		
			
			<!-- input the value Lp(a) if yes. (nmol/L)-->
		</div>
		
		<!-- <div class="but-radio-group mb-3">
				<label  class="col col-form-label">Hypertension </label>
										
										<div class="col form-group mb-3 row">
										  <div class="col-4 mb-3">
										  <label class="but-radio">Yes<input type="radio" value="yes" name="cadHT" id="cadHT" ><span class="checkmark"></span></label>
										  </div>
										  <div class="col-4 mb-3">
										  <label class="but-radio">No<input type="radio" value="no" name="cadHT" id="cadHT" ><span class="checkmark"></span></label>
										  </div>
										
									</div>
									
									<div class="col form-group mb-3 row">
										<div class="col-md-6 mb-3">                            
											Systolic Blood Pressure (mm Hg)
											<input class="col-md-6" type="number" step="0.1" value="0.0" name="systolic" id="systolic" placeholder="Value must be between 90-200">
										</div>
										<div class="col-md-6 mb-3">
											Dystolic Blood Pressure (mm Hg)
											<input class="col-md-6" type="number" step="0.1" value="0.0"  name="dystolic" id="dystolic" placeholder="Value must be between 60-130" >
										</div>
									</div>
									<div class="col form-group mb-3 row"> 
										<div class="col-4 mb-3">
											<label class="but-radio">Treated<input type="radio" value="yes" name="cadHTT" ><span class="checkmark"></span></label>
										</div>
										<div class="col-4 mb-3">
											<label class="but-radio">Untreated<input type="radio" value="no" name="cadHTT"><span class="checkmark"></span></label>
										</div>					   
									</div>
								</div>-->
		
		
				<div class="but-radio-group mb-3">
									<label class="col col-form-label">On Antihypertensive Medication?</label>
									<div class="col form-group mb-3 row">
										<div class="col-4 mb-3">
											<label class="but-radio">Yes<input type="radio" value="yes" name="cadHT" id="cadHT" ><span class="checkmark"></span></label>
										</div>
										<div class="col-4 mb-3">
											<label class="but-radio">No<input type="radio" value="no" name="cadHT" id="cadHT" ><span class="checkmark"></span></label>
										</div>					   
									</div>
									<div class="col form-group mb-3 row">
										<div class="col-md-6 mb-3">                            
											Systolic Blood Pressure (mm Hg) *
											<input class="col-md-6" type="number" step="0.1" value="" class="form-control" name="systolic" id="systolic" min="0.0" >
										</div>
										<div class="col-md-6 mb-3">
											Dystolic Blood Pressure (mm Hg) *
											<input class="col-md-6" type="number" step="0.1" value="" class="form-control" name="dystolic" id="dystolic" min="0.0" >
										</div>
									</div>
								</div>
		
		

                
			</div>
		  </div>
		
		
		
		
		<hr class="mb-3">

        <div class="row">
        <div class="col-md-5 mb-3">
          <p class="txt-title2">5. Lipid Profile</p>
        </div>
        </div>

            <!-- third question -->
            <div class="row">
            <div class="col-md-12">
            <div class="but-radio-group">
                <label class="col col-form-label">5.1 Pre-treatment</label>
                <div class="col form-group mb-3 row">
                    <div class="col-md-6 mb-3">                            
                        <label class="col col-form-label">TC levels (mmol/L)</label>
                        <input class="col-md-6" type="number" step="0.1" value="0.0" class="form-control" name="patientpretclevel" id="patientpretclevel" placeholder="TC levels (mmol/L)">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="col col-form-label">LDL-C levels (mmol/L) (if available)</label>
                        <input class="col-md-6" type="number" step="0.1" value="0.0" class="form-control" name="patientpreldlclevel" id="patientpreldlclevel" placeholder="LDL-C levels (mmol/L)" >
                    </div>
                </div>
                <div class="col form-group mb-3 row">
                    <div class="col-md-6 mb-3">                            
                        <label class="col col-form-label">TG levels (mmol/L)</label>
                        <input class="col-md-6" type="number" step="0.1" value="0.0" class="form-control" name="patientpretg" id="patientpretg">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="col col-form-label">HDL-C levels (mmol/L)</label>
                        <input class="col-md-6" type="number" step="0.1" value="0.0" class="form-control" name="patientprehdlc" id="patientprehdlc">
                    </div>
                </div>

                <div class="but-radio-group"> 
                    <label class="col col-form-label">Fasting</label>   		  
                    <div class="col form-group mb-3 row">
                        <div class="col-4 mb-3">
                            <label class="but-radio">Yes<input type="radio" value="yes" class="fasting" name="fasting" id="fasting" ><span class="checkmark"></span></label>
                        </div>
                        <div class="col-4 mb-3">
                            <label class="but-radio">No<input type="radio" value="no" class="fasting" name="fasting" id="fasting"><span class="checkmark"></span></label>
                        </div>
                    </div>
                </div>
                            					
            </div>
            </div>
            </div>
                        
			<div class="row">		
			<div class="col-md-12">
            <div class="but-radio-group"> 
              <label class="col col-form-label">5.2 On lipid-lowering therapy?</label>   		  
              <div class="col form-group mb-3 row">
              <div class="col-4 mb-3">
              <label class="but-radio">Yes<input type="radio" value="yes" class="statin_name" name="statin_name" id="statin_name" ><span class="checkmark"></span></label>
              </div>
              <div class="col-4 mb-3">
              <label class="but-radio">No<input type="radio" value="no" class="statin_name" name="statin_name" id="statin_name" ><span class="checkmark"></span></label>
              </div>
            </div>
            </div>
          </div></div>
		  
		  <div class="row">
			<div id="autoUpdate" class="col-md-12 autoUpdate">     
            <div class="but-radio-group"> 
            
                        <label class="col col-form-label" id="adjust_ldlclabel"> 5.3 Post Treatment </label>
							<div class="col form-group mb-3 row">
                   <div class="col-md-6 mb-3">                            
							<label class="col col-form-label">TC levels (mmol/L)</label> 
							<input class="col-md-6" type="number" step="0.1" value="0.0" class="form-control" name="patienttclevel" id="patienttclevel" >
                            </div>
                        
                        <div class="col-md-6 mb-3">                            
							<label class="col col-form-label">LDL-C levels (mmol/L)</label> 
							<input class="col-md-6" type="number" step="0.1" value="0.0" class="form-control" name="patientldlclevel" id="patientldlclevel" >
                            </div>
                        
						</div>
				<div class="col form-group mb-3 row">
                    <div class="col-md-6 mb-3">                            
                        <label class="col col-form-label">TG</label>
                        <input class="col-md-6" type="number" step="0.1" value="0.0" class="form-control" name="patientposttg" id="patientposttg">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="col col-form-label">HDL-C</label>
                        <input class="col-md-6" type="number" step="0.1" value="0.0" class="form-control" name="patientposthdlc" id="patientposthdlc">
                    </div>
                </div>

                <div class="but-radio-group"> 
                    <label class="col col-form-label">Fasting</label>   		  
                    <div class="col form-group mb-3 row">
                        <div class="col-4 mb-3">
                            <label class="but-radio">Yes<input type="radio" value="yes" class="postfasting" name="postfasting" id="postfasting" ><span class="checkmark"></span></label>
                        </div>
                        <div class="col-4 mb-3">
                            <label class="but-radio">No<input type="radio" value="no" class="postfasting" name="postfasting" id="postfasting"><span class="checkmark"></span></label>
                        </div>
                    </div>
                </div>
                
                    <div class="col-md-10">
					<div class="col form-group mb-3 row">
					<div class="col-md-10 mb-3"> 
                        <select class="col col-form-label" class="form-control" id="ldlcadjustment" name="ldlcadjustment" onchange="calculateAdjustedLDLC()">
						
						 <option selected disabled hidden>Choose medication here</option>
                            
							   </select>
				</div></div></div>	</div>	
						
						
			<div class="row">		
			<div class="col-md-12">
            <div class="but-radio-group"> 
                 		  
              <div class="col form-group mb-3 row">

			  <label class="col col-form-label">5.4 Adjusted LDL-C level(mmol/L) (predicted pre-treatment) </label>
			  <div class="col-md-6 mb-3"> 
              <input class="col-md-6"  type="number" step="0.1" value="0" class="form-control" name="adjust_ldlclevel" id="adjust_ldlclevel" readonly></label>
              
              
            </div>
            </div></div>
          </div></div>
                    </div>                
                    </div>
               <hr class="mb-3">

        <div class="row">
        <div class="col-md-3 mb-3">
          <p class="txt-title2">6. Xanthomata</p>
        </div>
        </div> 
                <!-- finish third question -->

                <!-- fourth question -->
        <div class="row">
          <div class="col-md-6 ">
            <div class="but-radio-group">
            <label for="Premature CAD" class="col col-form-label">6.1 Tendon Xanthomata on the:</label>
                <label class="col col-form-label">a) Elbows</label>
            <div class="col form-group mb-3 row">
                <div class="col-6 mb-3">
                    <label class="but-radio">Yes<input type="radio" value="yes" name="tendon_xanthomata_elbows" id="tendon_xanthomata_elbows" ><span class="checkmark"></span></label>
                </div>
                <div class="col-6 mb-3">
                    <label class="but-radio">No<input type="radio" value="no" name="tendon_xanthomata_elbows" id="tendon_xanthomata_elbows"><span class="checkmark"></span></label>
                </div>
               
                <!-- <div class="col-4 mb-3">
                    <label class="but-radio">Don't know<input type="radio" value="unknown" name="tendon_xanthomata_elbows" id="tendon_xanthomata_elbows"><span class="checkmark"></span></label>
                </div> -->
            </div>
            <label class="col col-form-label">b) Heels</label>
            <div class="col form-group mb-3 row">
                <div class="col-6 mb-3">
                    <label class="but-radio">Yes<input type="radio" value="yes" name="tendon_xanthomata_heels" id="tendon_xanthomata_heels" ><span class="checkmark"></span></label>
                </div>
                <div class="col-6 mb-3">
                    <label class="but-radio">No<input type="radio" value="no" name="tendon_xanthomata_heels" id="tendon_xanthomata_heels"><span class="checkmark"></span></label>
                </div>
               <!-- <div class="col-4 mb-3">
                    <label class="but-radio">Don't know<input type="radio" value="unknown" name="tendon_xanthomata_heels" id="tendon_xanthomata_heels"><span class="checkmark"></span></label>
                </div> -->            </div>


            <label class="col col-form-label">c) Fingers</label>
            <div class="col form-group mb-3 row">
                <div class="col-6 mb-3">
                    <label class="but-radio">Yes<input type="radio" value="yes" name="tendon_xanthomata_fingers" id="tendon_xanthomata_fingers" ><span class="checkmark"></span></label>
                </div>
                <div class="col-6 mb-3">
                    <label class="but-radio">No<input type="radio" value="no" name="tendon_xanthomata_fingers" id="tendon_xanthomata_fingers"><span class="checkmark"></span></label>
                </div>
               <!-- <div class="col-4 mb-3">
                    <label class="but-radio">Don't know<input type="radio" value="unknown" name="tendon_xanthomata_fingers" id="tendon_xanthomata_fingers"><span class="checkmark"></span></label>
                </div> --> 
            </div>

            <label class="col col-form-label">d) Knees</label>
            <div class="col form-group mb-3 row">
                <div class="col-6 mb-3">
                    <label class="but-radio">Yes<input type="radio" value="yes" name="tendon_xanthomata_knees" id="tendon_xanthomata_knees" ><span class="checkmark"></span></label>
                </div>
                <div class="col-6 mb-3">
                    <label class="but-radio">No<input type="radio" value="no" name="tendon_xanthomata_knees" id="tendon_xanthomata_knees"><span class="checkmark"></span></label>
                </div>
               <!-- <div class="col-4 mb-3">
                    <label class="but-radio">Don't know<input type="radio" value="unknown" name="tendon_xanthomata_knees" id="tendon_xanthomata_knees"><span class="checkmark"></span></label>
                </div> --> 
            </div>

            <label class="col col-form-label">e) Palms</label>
            <div class="col form-group mb-3 row">
                <div class="col-6 mb-3">
                    <label class="but-radio">Yes<input type="radio" value="yes" name="tendon_xanthomata_palms" id="tendon_xanthomata_palms" ><span class="checkmark"></span></label>
                </div>
                <div class="col-6 mb-3">
                    <label class="but-radio">No<input type="radio" value="no" name="tendon_xanthomata_palms" id="tendon_xanthomata_palms"><span class="checkmark"></span></label>
                </div>
                <!--<div class="col-4 mb-3">
                    <label class="but-radio">Don't know<input type="radio" value="unknown" name="tendon_xanthomata_palms" id="tendon_xanthomata_palms"><span class="checkmark"></span></label>
                </div> --> 
            </div>

            </div>
          </div>

          <div class="col-md-6 ">
            <div class="but-radio-group">
                <label for="Premature CAD" class="col col-form-label">6.2 Achilles Tendon Thickening</label>
                <div class="col form-group mb-3 row">
                    <div class="col-6 mb-3">
                        <label class="but-radio">Yes <input type="radio" value="yes" name="achilles_tendon" id="achilles_tendon" ><span class="checkmark"></span></label>
                    </div>
                    <div class="col-6 mb-3">
                        <label class="but-radio">No<input type="radio" value="no" name="achilles_tendon" id="achilles_tendon"><span class="checkmark"></span></label>
                    </div>
                    <!--<div class="col-4 mb-3">
                        <label class="but-radio">Don't know<input type="radio" value="unknown" name="achilles_tendon" id="achilles_tendon"><span class="checkmark"></span></label>
                    </div> --> 
                </div>
            </div>

            <div class="but-radio-group">
            <label for="Premature CAD" class="col col-form-label">6.3 Nodular Xanthoma on the skin</label>
                <div class="col form-group mb-3 row">
                    <div class="col-6 mb-3">
                        <label class="but-radio">Yes<input type="radio" value="yes" name="nodular_xanthoma" id="nodular_xanthoma" ><span class="checkmark"></span></label>
                    </div>
                    <div class="col-6 mb-3">
                        <label class="but-radio">No<input type="radio" value="no" name="nodular_xanthoma" id="nodular_xanthoma"><span class="checkmark"></span></label>
                    </div>
                    <!--<div class="col-4 mb-3">
                        <label class="but-radio">Don't know<input type="radio" value="unknown" name="nodular_xanthoma" id="nodular_xanthoma"><span class="checkmark"></span></label>
                    </div>-->
                </div>
            </div>

            </div>
        </div>
	  
 <hr class="mb-3">

        <div class="row">
        <div class="col-md-12 mb-3">
		      <p class="txt-title2">7. Has genetic mutation analysis been done?</p>
             
			   <div class="col form-group mb-3 row">
              <div class="col-4 mb-3">
              <label class="but-radio">Yes<input type="radio" value="yes" class="genetic_mutation" name="genetic_mutation" id="genetic_mutation" ><span class="checkmark"></span></label>
              </div>
              <div class="col-4 mb-3">
              <label class="but-radio">No<input type="radio" value="no" class="genetic_mutation" name="genetic_mutation" id="genetic_mutation"><span class="checkmark"></span></label>
              </div>
              <div class="col-4 mb-3">
              <label class="but-radio">Pending<input type="radio" value="pending" class="genetic_mutation" name="genetic_mutation" id="genetic_mutation"><span class="checkmark"></span></label>
              </div>
            </div>			              
          
		   <div id="autoUpdate_gm" class="col-md-12 autoUpdate_gm">
                        
                            <label class="col col-form-label" > In which FH gene the pathogenic variant was found?
						<div class="col form-group mb-3 row">	 
						   <div class="col-6 mb-3">
                                <input type="checkbox" value="yes" name="ldlr" id="ldlr" class="ldlr"> LDLR  </div>
								<div class="col-6 mb-3">
                                <input type="checkbox" value="yes" name="apob" id="apob" class="apob"> APOB </div>
								<div class="col-6 mb-3">
								<input type="checkbox" value="yes" name="pcsk9" id="pcsk9" class="pcsk9"> PCSK9</div>
								<div class="col-6 mb-3">
								<input type="checkbox" value="yes" name="dontknow_geneticmutation" id="dontknow_geneticmutation" class="dontknow_geneticmutation"> Don't know </div>
                                <div class="col-6 mb-3">
								<input type="checkbox" value="yes" name="notfoundmutation" id="notfoundmutation" class="notfoundmutation" onclick="onClickHandler(this)"> Not found </div>
                                
								<div class="col-6 mb-3">
								<input type="checkbox" value="yes" name="other_fh_mutations" id="other_fh_mutations" class="other_fh_mutations"> Other FH mutations (eg:<i>APOE, LIPA</i>). Please state  <input type="text" id ="other_fh_mutations_detail" name="other_fh_mutations_detail" size="14" value=""></div>
								
							</div>
							</label>     
                                                                         
                    </div>
					<div id="autoUpdate_gmn" class="col-md-12 autoUpdate_gmn">
					
                            <label class="col col-form-label" for="autoUpdate_gmn">Reasons
							<div class="col form-group mb-2 row">	 
						   <div class="col-6 mb-3">
                                <input type="radio" value="financial_issues" name="reasons" id="financial_issues" > Financial  issue</div>
								<div class="col-6 mb-3">
                                <input type="radio" value="patient_refuse" name="reasons" id="patient_refuse"> Patient refuse other than financial issue  </div>
								<div class="col-6 mb-3">
								<input type="radio" value="no_facility" name="reasons" id="no_facility" > No facility (not available)</div>
								<div class="col-6 mb-3">
								<input type="radio" value="others" name="reasons" id="others" > Others (please specify) <input type="text" name="genetic_mutation_noreason_detail" size="14" value=""></div>
                            </label>     
                        </div>
						
		  </div>
		  </div>
		  </div>
                <!-- finish fourth question -->
                <!-- fifth question -->
         <hr class="mb-3">

        <div class="row">
        <div class="col-md-3 mb-3">
          <p class="txt-title2">8. Family History</p>
        </div>
        </div>
                <!-- finish fifth question -->
                
                <!-- first question -->
        <div class="row col-md-12">           
            <div class="row ">
          <div class="col-md-12 mb-3">
            <div class="col form-group">
              <label class="but-radio">First Degree Relative (Parent, Sibling, Child)<input type="checkbox" value="1" name="first_degree" id="first_degree"><span class="checkmark"></span></label>
            </div>
		<div id = "first_degree_data" >
  
  <!-- stop sini -->
  
   
  
	    <div class="row">
        <div class="col-md-12 mb-6 ">
            <div class="but-radio-group mb-6">
			 <div class="col-md-4 col-form-label">
				<label for="first_degree_cad" >CAD</label>
			</div>
            <div class="col form-group mb-3 row">
              <div class="col-md-4 mb-3">
                <label class="but-radio" >Yes<input type="radio" value="yes" class ="first_degree_cad" name="first_degree_premature_cad" id="first_degree_premature_cad"><span class="checkmark"></span></label>
              </div>
              <div class="col-4 mb-3">
                <label class="but-radio">No<input type="radio" value="no" class ="first_degree_cad" name="first_degree_premature_cad" id="first_degree_premature_cad"><span class="checkmark"></span></label>
              </div>
			  <div class="col-4 mb-3">
                <label class="but-radio">Don't know<input type="radio" value="unknown" class ="first_degree_cad" name="first_degree_premature_cad" id="first_degree_premature_cad"><span class="checkmark"></span></label>
              </div>
            </div>
	           <div class="col-md-12" id="autoUpdate_fdcad" class="autoUpdate_fdcad">
			   
                       <!--<label class="col-form-label" id ="fdpremature_cad" for="fdpremature_cad">Premature CAD:</label>-->
					  
                        <div class="col form-group mb-3 row">
                        
                        <label class="col-md-4 col-form-label" id ="first_degree_age" for="first_degree_age">Age at first diagnosed:</label>
                        <input class="col-md-4" type="number"  step="1" value="0" class="form-control" name="first_degree_age" id="first_degree_age"> 
                        </div>
              <div class="col-md-12 mb-3">
			  
                <div class="row">
                    <div class="col-md-4 col-form-label">
                        <label>Gender:</label>
                    </div>
                        <label class="but-radio">Male <input type="radio" value="1"  name="first_degree_gender" ><span class="checkmark"></span></label>
                        <label class="but-radio">Female<input type="radio" value="2"  name="first_degree_gender" ><span class="checkmark"></span></label>
                </div>
            </div>
			</div>
				    </div>
				    </div>
					</div>
						 <!--<label class="col col-form-label" id ="patientseenmdn" for="patientseenmdn">Have the patient been seen by a Medical Doctor or Health Provider? </label>
                        <div class="col form-group mb-3 row">						  
                        <div class="col-4 mb-3">
                        <label class="but-radio">Yes<input type="radio" value="yes" class ="fdcadmdfirstseen" name="fdcadmdfirstseen" id="fdcadmdfirstseen" ><span class="checkmark"></span></label>
                        </div>
                        <div class="col-4 mb-3">
                        <label class="but-radio">No<input type="radio" value="no" class ="fdcadmdfirstseen" name="fdcadmdfirstseen" id="fdcadmdfirstseen"><span class="checkmark"></span></label>
                        </div>
                        </div>

						<div class="col-md-13" id="autoUpdate_fdcadmdseen" class="autoUpdate_fdcadmdseen">
						<label class="col-md-4 col-form-label" id ="fdpatientageoffirstseen_md" for="fdpatientageoffirstseen_md">Age of first seen:</label>
						
                        <input class="col-md-4" type="number" step="1" value="0" class="form-control" name="fdpatientageoffirstseen_md" id="fdpatientageoffirstseen_md"  title="Age of First Seen by a medical doctor" >
						
						   <label class="col col-form-label"> Select patient coronary risk factor(s). </label>
						  <div class="col form-group mb-3 row">	 
						   <div class="col-4 mb-3">
						   <input type="checkbox" value="yes" class ="fdcadSmoking" name="fdcadSmoking" id="fdcadSmoking" >Smoking</div>
                          <div class="col-4 mb-3">
						<input type="checkbox" value="yes" class ="fdcadDM" name="fdcadDM" id="fdcadDM" > DM  </div>
						
						<div class="col-4 mb-3">                          
						 <input type="checkbox" value="yes" class ="fdcadHC" name="fdcadHC" id="fdcadHC" >Hypercholesterolaemia</div>	
					 
						  <div class="col-4 mb-3">
						<input type="checkbox" value="yes" class ="fdcadHT" name="fdcadHT" id="fdcadHT">Hypertension </div>
						<div class="col-4 mb-3">
                           <input type="checkbox" value="yes" class ="fdcadObesity" name="fdcadObesity" id="fdcadObesity"> Obesity  </div>
						   <div class="col-4 mb-3">
						   <input type="checkbox" value="yes" class ="fdcadFamilyhistoryhc" name="fdcadFamilyhistoryhc" id="fdcadFamilyhistoryhc" > Family history of Hypercholesterolaemia  </div>
							<div class="col-4 mb-3">                          
						  <input type="checkbox" value="yes" class ="fdcadPatientseenmdother" name="fdcadPatientseenmdother" id="fdcadPatientseenmdother"> Other  </div>
						   </div></div>
						   
					</div>


                    <div class="col-md-12" id="autoUpdate_fdcad_no" class="autoUpdate_fdcad_no">
                        <!--<label class="col-form-label" id ="fdnpremature_cad" for="fdnpremature_cad">Non-Premature CAD:</label>-->
                        
						<!--<label class="col col-form-label" id ="fdpatientseenmdn" for="fdpatientseenmdn">Have the patient been seen by a Medical Doctor or Health Provider? </label>
						   <div class="col form-group mb-3 row">						  
						  <div class="col-4 mb-3">									  
						  <label class="but-radio">Yes<input type="radio" value="yes" class ="fdcadmdfirstseenno" name="fdcadmdfirstseenno" id="fdcadmdfirstseenno" > <span class="checkmark"></span></label>
                          </div>
						  <div class="col-4 mb-3">									  
						  
						  <label class="but-radio">No<input type="radio" value="no" class ="fdcadmdfirstseenno" name="fdcadmdfirstseenno" id="fdcadmdfirstseenno"> <span class="checkmark"></span></label>
						  </div>
						  </div>
						
								   
						<div class="col-md-13" id="autoUpdate_fdcadmdseenno" class="autoUpdate_fdcadmdseenno">
						<label class="col-md-4 col-form-label" id ="fdnpatientageoffirstseen_mdn" for="fdnpatientageoffirstseen_mdn">Age of first seen:</label>
                        <input class="col-md-4" type="number" step="1" value="0" class="form-control" name="fdnpatientageoffirstseen_mdn" id="fdnpatientageoffirstseen_mdn"  title="Age of First Seen by a medical doctor" >
						  <label class="col col-form-label">  Select patient coronary risk factor(s). </label>
						   
						   <div class="col form-group mb-3 row">	 
						   <div class="col-4 mb-3">
						   <input type="checkbox" value="yes" class ="fdncadSmoking" name="fdncadSmoking" id="fdncadSmoking" > Smoking  </div>
                           <div class="col-4 mb-3">
						   <input type="checkbox" value="yes" class ="fdncadHC" name="fdncadHC" id="fdncadHC" > Hypercholesterolaemia  </div>
                          <div class="col-4 mb-3">
						  <input type="checkbox" value="yes" class ="fdncadHT" name="fdncadHT" id="fdncadHT"> Hypertension  </div>
						   <div class="col-4 mb-3">
						   <input type="checkbox" value="yes" class ="fdncadDM" name="fdncadDM" id="fdncadDM" > DM  </div>
                          <div class="col-4 mb-3">
						  <input type="checkbox" value="yes" class ="fdncadObesity" name="fdncadObesity" id="fdncadObesity"> Obesity  </div>
						  <div class="col-4 mb-3">
						  <input type="checkbox" value="yes" class ="fdncadFamilyhistoryhc" name="fdncadFamilyhistoryhc" id="fdncadFamilyhistoryhc" > Family history of Hypercholesterolaemia  </div>
                          <div class="col-4 mb-3">
						  <input type="checkbox" value="yes" class ="fdncadPatientseenmdother" name="fdncadPatientseenmdother" id="fdncadPatientseenmdother"> Other  </div>
                           <!-- <input type="text" value="" class="form-control" name="patientageatfirstseen" id="patientageatfirstseen" readonly>
                    </div></div>-->
                    
					
		<div class="row">
                <div class="col-md-12 ">
                <div class="but-radio-group">
            
                <label class="col-md-3 col-3 col-form-label" for="first_degree_hyperlipidaemia"> LDL level:</label>
				
                <div class="col form-group mb-3 row">
				<div class="col-md-12">
                <label class="col col-form-label"> Adult (>=18 years) with LDL>4.9(mmol/L):</label>
				</div>
                    <div class="col-4 mb-3">
                        <label class="but-radio">Yes<input type="radio" value="yes" name="first_degree_hyperlipidaemia" id="first_degree_hyperlipidaemia"><span class="checkmark"></span></label>
                    </div>
                    <div class="col-4 mb-3">
                        <label class="but-radio">No<input type="radio" value="no" name="first_degree_hyperlipidaemia" id="first_degree_hyperlipidaemia"><span class="checkmark"></span></label>
                    </div>
					<div class="col-4 mb-3">
                <label class="but-radio">Don't know<input type="radio" value="unknown" class ="first_degree_hyperlipidaemia" name="first_degree_hyperlipidaemia" id="first_degree_hyperlipidaemia"><span class="checkmark"></span></label>
              </div>
                </div>
				
				<div class="col form-group mb-3 row">
				<div class="col-md-12">
                <label class="col col-form-label"> Children (<18 years) with LDL>3.0(mmol/L):</label>
				</div>
                    <div class="col-4 mb-3">
                        <label class="but-radio">Yes<input type="radio" value="yes" name="first_degree_hyperlipidaemiachild" id="first_degree_hyperlipidaemiachild"><span class="checkmark"></span></label>
                    </div>
                    <div class="col-4 mb-3">
                        <label class="but-radio">No<input type="radio" value="no" name="first_degree_hyperlipidaemiachild" id="first_degree_hyperlipidaemiachild"><span class="checkmark"></span></label>
                    </div>
					<div class="col-4 mb-3">
                <label class="but-radio">Don't know<input type="radio" value="unknown" class ="first_degree_hyperlipidaemiachild" name="first_degree_hyperlipidaemiachild" id="first_degree_hyperlipidaemiachild"><span class="checkmark"></span></label>
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
                    <div class="col-4 mb-3">
                        <label class="but-radio">Yes<input type="radio" value="yes" name="first_degree_tc_level" id="first_degree_tc_level"><span class="checkmark"></span></label>
                    </div>
                    <div class="col-4 mb-3">
                        <label class="but-radio">No<input type="radio" value="no" name="first_degree_tc_level" id="first_degree_tc_level"><span class="checkmark"></span></label>
                    </div>
					<div class="col-4 mb-3">
                <label class="but-radio">Don't know<input type="radio" value="unknown" class ="first_degree_tc_level" name="first_degree_tc_level" id="first_degree_tc_level"><span class="checkmark"></span></label>
              </div>
                </div>
				
				<div class="col form-group mb-3 row">
				<div class="col-md-12">
                <label class="col col-form-label"> Children (<16 years) with TC>6.7(mmol/L):</label>
				</div>
                    <div class="col-4 mb-3">
                        <label class="but-radio">Yes<input type="radio" value="yes" name="first_degree_tc_levelchild" id="first_degree_tc_levelchild"><span class="checkmark"></span></label>
                    </div>
                    <div class="col-4 mb-3">
                        <label class="but-radio">No<input type="radio" value="no" name="first_degree_tc_levelchild" id="first_degree_tc_levelchild"><span class="checkmark"></span></label>
                    </div>
					<div class="col-4 mb-3">
                <label class="but-radio">Don't know<input type="radio" value="unknown" class ="first_degree_tc_levelchild" name="first_degree_tc_levelchild" id="first_degree_tc_levelchild"><span class="checkmark"></span></label>
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
              <div class="col-4 mb-3">
              <label class="but-radio">Yes<input type="radio" value="yes" name="first_degree_tendon_xanthomata" id="first_degree_tendon_xanthomata"><span class="checkmark"></span></label>
              </div>
              <div class="col-4 mb-3">
              <label class="but-radio">No<input type="radio" value="no" name="first_degree_tendon_xanthomata" id="first_degree_tendon_xanthomata"><span class="checkmark"></span></label>
              </div>
              <div class="col-4 mb-3">
              <label class="but-radio">Don't know<input type="radio" value="unknown" name="first_degree_tendon_xanthomata" id="first_degree_tendon_xanthomata"><span class="checkmark"></span></label>
              </div>
            </div>
            </div>
		    </div>
    </div>

    <div class="row">
          <div class="col-md-12 ">
            <div class="but-radio-group">
            <label for="first_degree_corneal_arcus" class="col col-form-label">Corneal Arcus (First appearance < 45 years)</label>
            <div class="col form-group mb-3 row">
              <div class="col-4 mb-3">
              <label class="but-radio">Yes <input type="radio" value="yes" name="first_degree_corneal_arcus" id="first_degree_corneal_arcus"><span class="checkmark"></span></label>
              </div>
              <div class="col-4 mb-3">
              <label class="but-radio">No<input type="radio" value="no" name="first_degree_corneal_arcus" id="first_degree_corneal_arcus"><span class="checkmark"></span></label>
              </div>
              <div class="col-4 mb-3">
              <label class="but-radio">Don't know<input type="radio" value="unknown" name="first_degree_corneal_arcus" id="first_degree_corneal_arcus"><span class="checkmark"></span></label>
              </div>
            </div>
            </div>
          </div>
      </div>
	
        <div class="row">
        <div class="col-md-12 ">
            <div class="but-radio-group">
                <label for="first_degree_fh" class="col col-form-label">Confirmed FH</label>
            <div class="col form-group mb-3 row">
              <div class="col-4 mb-3">
              <label class="but-radio">Yes <input type="radio" value="yes" name="first_degree_fh" id="first_degree_fh"><span class="checkmark"></span></label>
              </div>
              <div class="col-4 mb-3">
              <label class="but-radio">No<input type="radio" value="no" name="first_degree_fh" id="first_degree_fh"><span class="checkmark"></span></label>
              </div>
              <div class="col-4 mb-3">
              <label class="but-radio">Don't know<input type="radio" value="unknown" name="first_degree_fh" id="first_degree_fh"><span class="checkmark"></span></label>
              </div>
            </div>
            </div>
        </div>
        </div>		
        </div>
                
         <div class="row">
          <div class="col-md-12">
            <div class="col form-group">
              <label class="but-radio">Second Degree Relative (Grandparent, Grandchild, Nephew, Niece)
			  <input type="checkbox" value="1" name="second_degree" id="second_degree"><span class="checkmark"></span></label>
            </div>
          
		  
		  <div id = "second_degree_data" class="col-md-12 mb-3">
                 <!---<div class="row">
                    <div class="col-md-4 col-2 col-form-label">
                        <label for="second_degree_gender">Gender:</label>
                    </div>
                        <label class="but-radio">Male <input type="radio" value="1"  name="second_degree_gender" id="second_degree_gender"><span class="checkmark"></span></label>
                        <label class="but-radio">Female<input type="radio" value="2"  name="second_degree_gender" id="second_degree_gender"><span class="checkmark"></span></label>
                </div>-->
            
			
		   <!---<div class="row">
				 <div class="col-md-12 ">
					<div class="but-radio-group">
				
                    <label class="col-md-3 col-3 col-form-label" for="second_degree_hyperlipidaemia"> Hypercholesterolaemia:</label>
                    
					<div class="col form-group mb-2 row">
              <div class="col-6 mb-3">
              <label class="but-radio">Yes<input type="radio" value="yes" name="second_degree_hyperlipidaemia" id="second_degree_hyperlipidaemia"><span class="checkmark"></span></label><label>Specify TC level if known <input class="col-md-4" type="number" step="0.1" value="0.0"  name="first_degree_tc_level" size="4"></label>
              </div>
              <div class="col-6 mb-3">
              <label class="but-radio">No<input type="radio" value="no" name="second_degree_hyperlipidaemia" id="second_degree_hyperlipidaemia"><span class="checkmark"></span></label>
              </div>
					
                         </div></div>
					</div>
				</div> -->
					<div class="row">
        <div class="col-md-12 ">
            <div class="but-radio-group">
				<label for="second_degree_cad" class="col col-form-label">CAD</label>
            <div class="col form-group mb-3 row">
              <div class="col-4 mb-3">
              <label class="but-radio">Yes<input type="radio" value="yes" class ="second_degree_cad" name="second_degree_cad" id="second_degree_cad"><span class="checkmark"></span></label>
              </div>
              <div class="col-4 mb-3">
              <label class="but-radio">No<input type="radio" value="no" class ="second_degree_cad" name="second_degree_cad" id="second_degree_cad"><span class="checkmark"></span></label>
              </div>
			  <div class="col-4 mb-3">
              <label class="but-radio">Don't know<input type="radio" value="unknown" class ="second_degree_cad" name="second_degree_cad" id="second_degree_cad"><span class="checkmark"></span></label>
              </div>
            </div>
		  
		   <div class="col-md-12" id="autoUpdate_sdcad" class="autoUpdate_sdcad">
			   
               <!-- <label class="col-form-label" id ="sdpremature_cad" for="sdpremature_cad">Premature CAD:</label> -->
                <div class="col form-group mb-3 row">
                
                <label class="col-md-4 col-form-label" id ="sdpatientageatfirstseen" for="sdpatientageatfirstseen">Age at first diagnosed:</label>
                <input class="col-md-4" type="number"  step="1" value="0" class="form-control" name="sdpatientageatfirstseen" id="sdpatientageatfirstseen"> 
                </div>
				<div class="col-md-12 mb-3">
				<div class="row">
                    <div class="col-md-4 col-2 col-form-label">
                        <label>Gender:</label>
                    </div>
                        <label class="but-radio">Male <input type="radio" value="1"  name="second_degree_gender" id="second_degree_gender"><span class="checkmark"></span></label>
                        <label class="but-radio">Female<input type="radio" value="2"  name="second_degree_gender" id="second_degree_gender"><span class="checkmark"></span></label>
                </div> </div>
			</div>
			
			
			</div></div>
                    </div>
				
				
				
            <div class="row">
                <div class="col-md-12 ">
                <div class="but-radio-group">
            
                <label class="col-md-3 col-3 col-form-label" for="second_degree_tc_level"> TC level:</label>
				
                <div class="col form-group mb-3 row">
				<div class="col-md-12">
                <label class="col col-form-label"> Adult (>=16 years) with TC>7.5(mmol/L):</label>
				</div>
                    <div class="col-4 mb-3">
                        <label class="but-radio">Yes<input type="radio" value="yes" name="second_degree_tc_level" id="second_degree_tc_level"><span class="checkmark"></span></label>
                    </div>
                    <div class="col-4 mb-3">
                        <label class="but-radio">No<input type="radio" value="no" name="second_degree_tc_level" id="second_degree_tc_level"><span class="checkmark"></span></label>
                    </div>
					<div class="col-4 mb-3">
                <label class="but-radio">Don't know<input type="radio" value="unknown" class ="second_degree_tc_level" name="second_degree_tc_level" id="second_degree_tc_level"><span class="checkmark"></span></label>
              </div>
                </div>
				
				<div class="col form-group mb-3 row">
				<div class="col-md-12">
                <label class="col col-form-label"> Children (<16 years) with TC>6.7(mmol/L):</label>
				</div>
                    <div class="col-4 mb-3">
                        <label class="but-radio">Yes<input type="radio" value="yes" name="second_degree_tc_levelchild" id="second_degree_tc_levelchild"><span class="checkmark"></span></label>
                    </div>
                    <div class="col-4 mb-3">
                        <label class="but-radio">No<input type="radio" value="no" name="second_degree_tc_levelchild" id="second_degree_tc_levelchild"><span class="checkmark"></span></label>
                    </div>
					<div class="col-4 mb-3">
                <label class="but-radio">Don't know<input type="radio" value="unknown" class ="second_degree_tc_levelchild" name="second_degree_tc_levelchild" id="second_degree_tc_levelchild"><span class="checkmark"></span></label>
              </div>
                </div>
				
                </div>
				</div>
			</div>

			
                <!-- <label class="col col-form-label" id ="patientseenmdn" for="patientseenmdn">Have the patient been seen by a Medical Doctor or Health Provider? </label>
                
                <div class="col form-group mb-3 row">						  
                <div class="col-4 mb-3">
                <label class="but-radio">Yes<input type="radio" value="yes" class ="sdcadmdfirstseen" name="sdcadmdfirstseen" id="sdcadmdfirstseen" ><span class="checkmark"></span></label>
                </div>
                <div class="col-4 mb-3">
                <label class="but-radio">No<input type="radio" value="no" class ="sdcadmdfirstseen" name="sdcadmdfirstseen" id="sdcadmdfirstseen"><span class="checkmark"></span></label>
                </div>
                </div>-->

		  
		    <!-- <div class="col-md-14" id="autoUpdate_sdcadmdseen" class="autoUpdate_sdcadmdseen">
                <label class="col-md-4 col-form-label" id ="sdpatientageoffirstseen_md" for="sdpatientageoffirstseen_md">Age of first seen:</label>
                
                <input class="col-md-4" type="number" step="1" value="0" class="form-control" name="sdpatientageoffirstseen_md" id="sdpatientageoffirstseen_md"  title="Age of First Seen by a medical doctor" >
                
                    <label class="col col-form-label"> Select patient coronary risk factor(s). </label>
                    <div class="col form-group mb-3 row">	 
                    <div class="col-4 mb-3">
                    <input type="checkbox" value="yes" class ="sdcadSmoking" name="sdcadSmoking" id="sdcadSmoking" > Smoking  </div>
                    <div class="col-4 mb-3">
                    <input type="checkbox" value="yes" class ="sdcadHC" name="sdcadHC" id="sdcadHC" > Hypercholesterolaemia  </div>
                    <div class="col-4 mb-3">                          
                    <input type="checkbox" value="yes" class ="sdcadHT" name="sdcadHT" id="sdcadHT"> Hypertension  </div>
                    <div class="col-4 mb-3">
                    <input type="checkbox" value="yes" class ="sdcadDM" name="sdcadDM" id="sdcadDM" > DM  </div>
                    <div class="col-4 mb-3">
                    <input type="checkbox" value="yes" class ="sdcadObesity" name="sdcadObesity" id="sdcadObesity"> Obesity  </div>
                    <div class="col-4 mb-3">
                    <input type="checkbox" value="yes" class ="sdcadFamilyhistoryhc" name="sdcadFamilyhistoryhc" id="sdcadFamilyhistoryhc" > Family history of Hypercholesterolaemia  </div>
                    <div class="col-4 mb-3">                          
                    <input type="checkbox" value="yes" class ="sdcadPatientseenmdother" name="sdcadPatientseenmdother" id="sdcadPatientseenmdother"> Other  </div>
                    </div></div> -->
					
					

                       
                       <!--<div class="col-md-14" id="autoUpdate_sdcad_no" class="autoUpdate_sdcad_no">
                        <!--<label class="col-form-label" id ="sdnpremature_cad" for="sdnpremature_cad">Non-Premature CAD:</label>--> <input type="hidden" value="second_degree_non_premature_cad" name="sdnpremature_cad" id="sdnpremature_cad" checked>
                        
						<!--<label class="col col-form-label" id ="sdpatientseenmdn" for="sdpatientseenmdn">Have the patient been seen by a Medical Doctor or Health Provider? </label>
						   <div class="col form-group mb-3 row">						  
						  <div class="col-4 mb-3">									  
						  <label class="but-radio">Yes<input type="radio" value="yes" class ="sdcadmdfirstseenno" name="sdcadmdfirstseenno" id="sdcadmdfirstseenno" > <span class="checkmark"></span></label>
                          </div>
						  <div class="col-4 mb-3">									  
						  
						  <label class="but-radio">No<input type="radio" value="no" class ="sdcadmdfirstseenno" name="sdcadmdfirstseenno" id="sdcadmdfirstseenno"> <span class="checkmark"></span></label>
						  </div>
						  </div>
					
						
						<div class="col-md-14" id="autoUpdate_sdcadmdseenno" class="autoUpdate_sdcadmdseenno">
						<label class="col-md-4 col-form-label" id ="sdpatientageoffirstseen_mdn" for="sdpatientageoffirstseen_mdn">Age of first seen:</label>
                        <input class="col-md-4" type="number" step="1" value="0" class="form-control" name="sdpatientageoffirstseen_mdn" id="sdpatientageoffirstseen_mdn"  title="Age of First Seen by a medical doctor" >
						  <label class="col col-form-label">  Select patient coronary risk factor(s). </label>
						   
						   <div class="col form-group mb-3 row">	 
						   <div class="col-4 mb-3">
						   <input type="checkbox" value="yes" class ="sdncadSmoking" name="sdncadSmoking" id="sdncadSmoking" > Smoking  </div>
                           <div class="col-4 mb-3">
						   <input type="checkbox" value="yes" class ="sdncadHC" name="sdncadHC" id="sdncadHC" > Hypercholesterolaemia  </div>
                          <div class="col-4 mb-3">
						  <input type="checkbox" value="yes" class ="sdncadHT" name="sdncadHT" id="sdncadHT"> Hypertension  </div>
						   <div class="col-4 mb-3">
						   <input type="checkbox" value="yes" class ="sdncadDM" name="sdncadDM" id="sdncadDM" > DM  </div>
                          <div class="col-4 mb-3">
						  <input type="checkbox" value="yes" class ="sdncadObesity" name="sdncadObesity" id="sdncadObesity"> Obesity  </div>
						  <div class="col-4 mb-3">
						  <input type="checkbox" value="yes" class ="sdncadFamilyhistoryhc" name="sdncadFamilyhistoryhc" id="sdncadFamilyhistoryhc" > Family history of Hypercholesterolaemia  </div>
                          <div class="col-4 mb-3">
						  <input type="checkbox" value="yes" class ="sdncadPatientseenmdother" name="sdncadPatientseenmdother" id="sdncadPatientseenmdother"> Other  </div>
                           <!-- <input type="text" value="" class="form-control" name="patientageatfirstseen" id="patientageatfirstseen" readonly>-->
                    <!--</div></div>
                    </div> -->

					

	<div class="row">
          <div class="col-md-12 ">
            <div class="but-radio-group">
            <label for="second_degree_tendon_xanthomata" class="col col-form-label">Tendon Xanthomata</label>
            <div class="col form-group mb-3 row">
              <div class="col-4 mb-3">
              <label class="but-radio">Yes<input type="radio" value="yes" name="second_degree_tendon_xanthomata" id="second_degree_tendon_xanthomata"><span class="checkmark"></span></label>
              </div>
              <div class="col-4 mb-3">
              <label class="but-radio">No<input type="radio" value="no" name="second_degree_tendon_xanthomata" id="second_degree_tendon_xanthomata"><span class="checkmark"></span></label>
              </div>
              <div class="col-4 mb-3">
              <label class="but-radio">Don't know<input type="radio" value="unknown" name="second_degree_tendon_xanthomata" id="second_degree_tendon_xanthomata"><span class="checkmark"></span></label>
              </div>
            </div>
            </div>
		</div>
</div>
 
	
          <div class="row">
          <div class="col-md-12 ">
            <div class="but-radio-group">
            <label for="second_degree_fh" class="col col-form-label">Confirmed FH</label>
            <div class="col form-group mb-3 row">
              <div class="col-4 mb-3">
              <label class="but-radio">Yes <input type="radio" value="yes" name="second_degree_fh" id="second_degree_fh"><span class="checkmark"></span></label>
              </div>
              <div class="col-4 mb-3">
              <label class="but-radio">No<input type="radio" value="no" name="second_degree_fh" id="second_degree_fh"><span class="checkmark"></span></label>
              </div>
              <div class="col-4 mb-3">
              <label class="but-radio">Don't know<input type="radio" value="unknown" name="second_degree_fh" id="second_degree_fh"><span class="checkmark"></span></label>
              </div>
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
              <label class="but-radio">Third Degree Relative (Great-grandparent, Great-grandchild, Uncle, Aunt, Cousin)
			  <input type="checkbox" value="1" name="third_degree" id="third_degree"><span class="checkmark"></span></label>
            </div>
          
		  <div id = "third_degree_data">
		  
		  <div class="row">
          <div class="col-md-12 ">
            <div class="but-radio-group">
            <label for="third_degree_fh" class="col col-form-label">Confirmed FH</label>
            <div class="col form-group mb-3 row">
              <div class="col-4 mb-3">
              <label class="but-radio">Yes <input type="radio" value="yes" name="third_degree_fh" id="third_degree_fh"><span class="checkmark"></span></label>
              </div>
              <div class="col-4 mb-3">
              <label class="but-radio">No<input type="radio" value="no" name="third_degree_fh" id="third_degree_fh"><span class="checkmark"></span></label>
              </div>
              <div class="col-4 mb-3">
              <label class="but-radio">Don't know<input type="radio" value="unknown" name="third_degree_fh" id="third_degree_fh"><span class="checkmark"></span></label>
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
</div>       
                
          <hr class="mb-3">      
                <!-- finish second question -->

		<div class="row">
			<div class="col-md-1 col-2">
				<button type="button" onClick="window.location.href='dashboard.php'"  class="btn btn-dark btn-block but-custom2"><i class="fa fa-long-arrow-left fa-lg"></i></button>
			</div>
			<div class="col-md-5 col-10">
				<button type="submit" class="btn btn-success btn-block but-color-none">Submit<i class="fa fa-paper-plane fa-lg" aria-hidden="true"></i></button>
			</div>

		</div>
		</form>
		</div>
		 
		

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
		document.getElementById("other_fh_mutations_detail").disabled = true;


	} else {
		document.getElementById("ldlr").disabled = false;
		document.getElementById("apob").disabled = false;
		document.getElementById("pcsk9").disabled = false;
		document.getElementById("other_fh_mutations").disabled = false;
		document.getElementById("dontknow_geneticmutation").disabled = false;
		document.getElementById("other_fh_mutations_detail").disabled = false;

	}
    //var chk=parseInt(document.getElementById("patientpretclevel").value);
	//alert(chk);
}

function validateForm(radio) {

  var x = document.forms["registration-form"]["patientpretclevel"].value;
  if (x == "") {
    alert("TC must be filled out");
    return false;
  }
}
/*$(document).ready(function(){
  $("button").click(function(){
    $("div").text($("form").serialize());
  });
});*/
  
	
var $contactForm = $('#registration-form');

$contactForm.on('submit', function(ev){
	//var pregnancy = document.getElementById("pregnancy");
	var pregnancy = document.forms["registration-form"]["pregnancy"].value;
	var hypothyroidism = document.forms["registration-form"]["hypothyroidism"].value;
	var nephroticsyndrome = document.forms["registration-form"]["nephroticsyndrome"].value;
	var obstructive_liverdisease = document.forms["registration-form"]["obstructive_liverdisease"].value;
	var medications = document.forms["registration-form"]["medications"].value;
	var hypogonadism = document.forms["registration-form"]["hypogonadism"].value;
	
	    ev.preventDefault();
	
    $.ajax({
        url: "save-registration.php",
        type:   'POST',
        data: $contactForm.serialize(),
        success: function(data){
			
			if (pregnancy=="yes" || hypothyroidism =="yes" || nephroticsyndrome =="yes" || obstructive_liverdisease =="yes" || medications =="yes" || hypogonadism =="yes") {
				window.location.href = "dashboard.php";
				alert(data);
			}
			else {
				window.location.href = "patient-dashboard.php";
			    alert(data);
			}
        },
        error: function(xhr, status, error) {
          alert(xhr.responseText);
        }
    });
});

function calculateAgePCAD(){
	 var age = document.getElementById("patientageatfirstseen");
	 var gender = $("input[name=patientgender]:checked").val();
	 var pcad = document.getElementsByName("premature_cad");
	 
	 if (age.value >= 55 && gender == 1) {
        
		pcad.checked= true;
		
	 }
}


function calculateAge(){
    var dt = new Date();
    //var year = document.getElementById("patientyearoffirstseen");
    var year = dt.getFullYear();
    var age = document.getElementById("patientageatfirstseen");
    var nricyear = parseInt((document.getElementById("patientnric1").value).substring(0,2));
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

     /*if (age.value < 55 && gender == 1) {
        var checkbox = document.getElementsByName("premature_cad").checked=true;
    }
    else if (age.value < 60 && gender == 2) {
        var checkbox = document.getElementsByName("premature_cad").checked=true;
    }*/

function calculateAdjustedLDLC() {
    var select = document.getElementById("ldlcadjustment");
    var adjust_value = (select.options[select.selectedIndex].value).split('-')[0];
    var patientldlclevel = document.getElementById("patientldlclevel").value;

    var adjust_ldlclevel = patientldlclevel * adjust_value;
    var adjustedldlclevel = document.getElementById("adjust_ldlclevel");
    adjustedldlclevel.value = (Math.round(adjust_ldlclevel * 10) / 10).toFixed(1);
    //var patientpreldlclevel = document.getElementById("patientpreldlclevel"); //new
    //patientpreldlclevel.value = (Math.round(adjust_ldlclevel * 10) / 10).toFixed(1);                            //new
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

function yesnoCheck() {
    if ((document.getElementById('pregnancy').checked) || (document.getElementById('hypothyroidism').checked) || (document.getElementById('nephrotic').checked)|| (document.getElementById('obstructive').checked) || (document.getElementById('medications').checked) || (document.getElementById('hypogonadism').checked) ) {
	
        document.getElementById('ifYes').style.display = 'block';	
		document.getElementById('ifNo').style.display = 'none';
    }
	else{ 
		document.getElementById('ifYes').style.display = 'none';
		document.getElementById('ifNo').style.display = 'block';
	}
		
}

function yesnoCheck0() {
    if ((document.getElementById('pregnancy').checked) || (document.getElementById('hypothyroidism').checked) || (document.getElementById('nephrotic').checked)|| (document.getElementById('obstructive').checked) || (document.getElementById('medications').checked) || (document.getElementById('hypogonadism').checked) ) {
	
        document.getElementById('ifYes').style.display = 'block';	
		document.getElementById('ifNo').style.display = 'none';
    }
	else{ 
		document.getElementById('ifYes').style.display = 'none';
		document.getElementById('ifNo').style.display = 'block';
	}
		
}

function yesnoCheck1() {
    if ((document.getElementById('pregnancy').checked) || (document.getElementById('hypothyroidism').checked) || (document.getElementById('nephrotic').checked)|| (document.getElementById('obstructive').checked) || (document.getElementById('medications').checked) || (document.getElementById('hypogonadism').checked) ) {
			
         document.getElementById('ifYes').style.display = 'block';	
		document.getElementById('ifNo').style.display = 'none';
    }
	else{ 
		document.getElementById('ifYes').style.display = 'none';
		document.getElementById('ifNo').style.display = 'block';
	}
		
}

function yesnoCheck2() {
    if ((document.getElementById('pregnancy').checked) || (document.getElementById('hypothyroidism').checked) || (document.getElementById('nephrotic').checked)|| (document.getElementById('obstructive').checked) || (document.getElementById('medications').checked) || (document.getElementById('hypogonadism').checked) ) {
			
        document.getElementById('ifYes').style.display = 'block';	
		document.getElementById('ifNo').style.display = 'none';
    }
	else{ 
		document.getElementById('ifYes').style.display = 'none';
		document.getElementById('ifNo').style.display = 'block';
	}
		
}

function yesnoCheck3() {
    if ((document.getElementById('pregnancy').checked) || (document.getElementById('hypothyroidism').checked) || (document.getElementById('nephrotic').checked)|| (document.getElementById('obstructive').checked) || (document.getElementById('medications').checked) || (document.getElementById('hypogonadism').checked) ) {
			
         document.getElementById('ifYes').style.display = 'block';	
		document.getElementById('ifNo').style.display = 'none';
    }
	else{ 
		document.getElementById('ifYes').style.display = 'none';
		document.getElementById('ifNo').style.display = 'block';
	}
		
}

function yesnoCheck4() {
    if ((document.getElementById('pregnancy').checked) || (document.getElementById('hypothyroidism').checked) || (document.getElementById('nephrotic').checked)|| (document.getElementById('obstructive').checked) || (document.getElementById('medications').checked) || (document.getElementById('hypogonadism').checked) ) {
			
         document.getElementById('ifYes').style.display = 'block';	
		document.getElementById('ifNo').style.display = 'none';
    }
	else{ 
		document.getElementById('ifYes').style.display = 'none';
		document.getElementById('ifNo').style.display = 'block';
	}
	
}



    $('.cad').on('click', function(){
        //alert ($(this).val());
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

	     $('.lpa').on('click', function(){
        //alert ($(this).val());
        if($(this).val() == 'yes') {
            $('#autoUpdate_cs').fadeIn('fast');
            
        }else {
            $('#autoUpdate_cs').fadeOut('fast');
           
        }
    });
		
	$('.cadDM').on('click', function(){
       // alert ($(this).val());
        if($(this).val() == 'yes') {
            $('#autoUpdate_dm').fadeIn('fast');
            
        }else {
            $('#autoUpdate_dm').fadeOut('fast');
           
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
				
	
	//
	/*$('.cadmdfirstseen').on('click', function(){
        //alert ($(this).val());
        if($(this).val() == 'yes') {
            $('#autoUpdate_cadmdseen').fadeIn('fast');
        }else if($(this).val() == 'no') {
            $('#autoUpdate_cadmdseen').fadeOut('fast');
        }else {
            $('#autoUpdate_cadmdseen').fadeOut('fast');
            
        }
    });*/
	
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
	/*$('.cadmdfirstseenno').on('click', function(){
        //alert ($(this).val());
        if($(this).val() == 'yes') {
            $('#autoUpdate_cadmdseenno').fadeIn('fast');
        }else if($(this).val() == 'no') {
            $('#autoUpdate_cadmdseenno').fadeOut('fast');
        }else {
            $('#autoUpdate_cadmdseenno').fadeOut('fast');
            
        }
    });*/
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
        if($(this).val() == 'yes') {
            $('#autoUpdate').fadeIn('fast');

           // $('#adjust_ldlclabel').fadeIn('fast');
           // $('#preldlc_label').fadeIn('fast');

        }else if($(this).val() == 'no'){
            $('#autoUpdate').fadeOut('fast');
			//var patientpretclevel = document.getElementById("patientpretclevel").value; //new
			//if (patientpretclevel=='0')
				//alert("Please enter TC level");
					//return false;
			//alert(patientpretclevel);
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

    $(document).ready(function(){
        //var select = document.getElementById("ldlcadjustment");
        //var adjust_value = (select.options[select.selectedIndex].value).split('-')[0];
       // var patientldlclevel = document.getElementById("patientldlclevel").value;

        //var adjust_ldlclevel = patientldlclevel * adjust_value;
        //var adjustedldlclevel = document.getElementById("adjust_ldlclevel");
        //adjustedldlclevel.value = (Math.round(adjust_ldlclevel * 10) / 10).toFixed(1);
       // var patientpreldlclevel = document.getElementById("patientpreldlclevel"); //new
       // patientpreldlclevel.value = (Math.round(adjust_ldlclevel * 10) / 10).toFixed(1); //new

        if (document.getElementById("statin_name").checked) {
		
            $('#autoUpdate').fadeIn('fast');
		
           // $('#adjust_ldlclabel').fadeIn('fast');
           // $('#preldlc_label').fadeIn('fast');
   	      } else {
            $('#autoUpdate').fadeOut('fast');
           // $('#adjust_ldlclabel').fadeOut('fast');
            //$('#preldlc_label').fadeOut('fast');
        }


        if (document.getElementById("genetic_mutation").checked) {
			
            $('#autoUpdate_gm').fadeIn('fast');
			$('#autoUpdate_gmn').fadeOut('fast');
           
        } else {
			$('#autoUpdate_gmn').fadeOut('fast');
            $('#autoUpdate_gm').fadeOut('fast');
           }
		   
		/*if (document.getElementById("cadmdfirstseen").checked) {
			 $('#autoUpdate_cadmdseen').fadeIn('fast');
			}else{
			  $('#autoUpdate_cadmdseen').fadeOut('fast');
				
			}

       /* $('#ldlcadjustment').change(function() {
           // var select = document.getElementById("ldlcadjustment");
            //var adjust_value = (select.options[select.selectedIndex].value).split('-')[0];
            //var patientldlclevel = document.getElementById("patientldlclevel").value;
            //var adjust_ldlclevel = patientldlclevel * adjust_value;
            //var adjustedldlclevel = document.getElementById("adjust_ldlclevel");
            //adjustedldlclevel.value = (Math.round(adjust_ldlclevel * 10) / 10).toFixed(1);
           // var patientpreldlclevel = document.getElementById("patientpreldlclevel"); //new
           // patientpreldlclevel.value = (Math.round(adjust_ldlclevel * 10) / 10).toFixed(1);
        });
*/
        $('#statin_name').change(function() {

            if (this.checked) {
				$('#autoUpdate').fadeIn('fast');
               // $('#adjust_ldlclabel').fadeIn('fast');
               // $('#preldlc_label').fadeIn('fast');
             //   var adjust_value = (select.options[select.selectedIndex].value).split('-')[0];
               // var patientldlclevel = document.getElementById("patientldlclevel").value;
                //var adjust_ldlclevel = patientldlclevel * adjust_value;
                //var adjustedldlclevel = document.getElementById("adjust_ldlclevel");
                //adjustedldlclevel.value = (Math.round(adjust_ldlclevel * 10) / 10).toFixed(1);
             //  var patientpreldlclevel = document.getElementById("patientpreldlclevel"); //new
             //   patientpreldlclevel.value = (Math.round(adjust_ldlclevel * 10) / 10).toFixed(1);

            }
            else {
                $('#autoUpdate').fadeOut('fast');
              //  $('#adjust_ldlclabel').fadeOut('fast');
              //  $('#preldlc_label').fadeOut('fast');
            }
        });

      /*  $('#genetic_mutation').change(function() {

            if (this.checked) {
                $('#autoUpdate_gm').fadeIn('fast');
				$('#autoUpdate_gmn').fadeOut('fast');
				//$("#pcsk9").prop('required',true);
               // $("#apob").prop('required',true);
               // $("#ldlr").prop('required',true);
               // $("#other_fh_mutations").prop('required',true);
            }
            else {
                $('#autoUpdate_gm').fadeOut('fast');
				$('#autoUpdate_gmn').fadeIn('fast');
				//$("#pcsk9").removeAttr('required');
               // $("#apob").removeAttr('required');
               // $("#ldlr").removeAttr('required');
              // $("#other_fh_mutations").removeAttr('required');
            }
        });*/
		
		 
		
		
		

        if (document.getElementById("first_degree").checked) {
            $('#first_degree_data').fadeIn('fast');
			$("#first_degree_gender").prop('required',true);
            $("#first_degree_hyperlipidaemia").prop('required',true);
            $("#first_degree_premature_cad").prop('required',true);
			$("#fdpatientageatfirstseen").prop('required',true);
			$("#fdcadmdfirstseenno").prop('required',true);
			$("#first_degree_tendon_xanthomata").prop('required',true);
            $("#first_degree_corneal_arcus").prop('required',true);
            $("#first_degree_fh").prop('required',true);
        }else {
            $('#first_degree_data').fadeOut('fast');
            $("#first_degree_gender").removeAttr('required');
            $("#first_degree_hyperlipidaemia").removeAttr('required');
            $("#first_degree_premature_cad").removeAttr('required');
			$("#fdpatientageatfirstseen").removeAttr('required',true);
			$("#fdcadmdfirstseenno").removeAttr('required',true);
			$("#first_degree_tendon_xanthomata").removeAttr('required');
            $("#first_degree_corneal_arcus").removeAttr('required');
            $("#first_degree_fh").removeAttr('required');
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
                $("#first_degree_gender").removeAttr('required');
                $("#first_degree_hyperlipidaemia").removeAttr('required');
                $("#first_degree_premature_cad").removeAttr('required');
                $("#first_degree_tendon_xanthomata").removeAttr('required');
                $("#first_degree_corneal_arcus").removeAttr('required');
                $("#first_degree_fh").removeAttr('required');
                
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
            $("#second_degree_gender").removeAttr('required');
            $("#second_degree_hyperlipidaemia").removeAttr('required');
            $("#second_degree_premature_cad").removeAttr('required');
            $("#second_degree_tendon_xanthomata").removeAttr('required');
            $("#second_degree_fh").removeAttr('required');
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
                $("#second_degree_gender").removeAttr('required');
                $("#second_degree_hyperlipidaemia").removeAttr('required');
                $("#second_degree_premature_cad").removeAttr('required');
                $("#second_degree_tendon_xanthomata").removeAttr('required');
                $("#second_degree_fh").removeAttr('required');
                
            }
        });

        if (document.getElementById("third_degree").checked) {
            $('#third_degree_data').fadeIn('fast');
            $("#third_degree_fh").prop('required',true);
        }else {
            $('#third_degree_data').fadeOut('fast');
            $("#third_degree_fh").removeAttr('required');
        }


        $('#third_degree').change(function() {
            if (this.checked) {
                $('#third_degree_data').fadeIn('fast');
                $("#third_degree_fh").prop('required',true);       
            }
            else {
                $('#third_degree_data').fadeOut('fast');
                $("#third_degree_fh").removeAttr('required');            
            }
        });
    });

</script>
@endsection
@endsection