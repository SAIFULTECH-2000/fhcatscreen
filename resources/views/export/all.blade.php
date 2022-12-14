<table>
    <thead>
        <tr>
            <td>No</td>
            <td>patientid</td>
            <td>patientname</td>
            <td>patientgender</td>
            <td>patientrace</td>
            <td>patientcontact</td>
            <td>patientyearoffirstseen</td>
            <td>patientnric</td>
            <td>patientcontact</td>
            <td>patientyearoffirstseen</td>
            <td>patient_registerdate</td>
            <td>premature_cad</td>
            <td>premature_cerebral</td>
            <td>pvd</td>
            <td>corneal_arcus</td>
            <td>patienttclevel</td>
            <td>patientldlclevel</td>
            <td>baseline_therapy</td>
            <td>baseline_therapy_specify</td>
            <td>tendon_xanthomata</td>
            <td>achilles_tendon<td>nodular_xanthoma</td>
            <td>genetic_mutation</td>
            <td>ldlr</td>
            <td>apob</td>
            <td>pcsk9</td>
            <td>other_fh_mutations</td>
            <td>first_degree</td>
            <td>first_degree_gender<td>first_degree_age</td>
            <td>first_degree_tclvl</td>
            <td>first_degree_premature_cad</td>
            <td>first_degree_tendon_xanthomata</td>
            <td>first_degree_corneal_arcus</td>
            <td>first_degree_fh</td>
            <td>second_degree</td>
            <td>second_degree_gender</td>
            <td>second_degree_age</td>
            <td>second_degree_tclvl</td>
            <td>second_degree_premature_cad</td>
            <td>second_degree_tendon_xanthomata</td>
            <td>second_degree_fh</td>
            <td>third_degree</td>
            <td>third_degree_fh</td>
            <td>adminid</td>
            <td>adminname</td>
            <td>adminstaffid</td>
            <td>adminstate</td>
            <td>adminlocation</td>
            <td>adminaddress</td>
            <td>adminemail</td>
            <td>adminusername</td>
            <td>adminlevel</td>
            <td>admin_registerdate</td>
            <td>patientscoreid</td>
            <td>first_question_dlcc</td>
            <td>second_question_dlcc</td>
            <td>third_question_dlcc</td>
            <td>fourth_question_dlcc</td>
            <td>fifth_question_dlcc</td>
            <td>total_dlcc</td>
            <td>result_dlcc</td>
            <td>first_question_sb</td>
            <td>second_question_sb</td>
            <td>third_question_sb</td>
            <td>fourth_question_sb</td>
            <td>fifth_question_sb</td>
            <td>result_sb</td>
            <td>first_question_jfhmc</td>
            <td>second_question_jfhmc</td>
            <td>third_question_jfhmc</td>
            <td>total_jfhmc</td>
            <td>result_jfhmc</td>
            <td>result_us</td>
        </tr>

        @foreach ($patients as $key => $patient )
               <tr>
                <td>{{$key}}</td>
            <td>{{$patient->patientid}}</td>
            <td>{{$patient->patientname}}</td>
            <td>{{$patient->patientgender}}</td>
            <td>{{$patient->patientrace}}</td>
            <td>{{$patient->patientcontact}}</td>
            <td>{{$patient->patientyearoffirstseen}}</td>
            <td>{{$patient->patientnric}}</td>
            <td>{{$patient->patientcontact}}</td>
            <td>{{$patient->patientyearoffirstseen}}</td>
            <td>{{$patient->patient_registerdate}}</td>
            <td>{{$patient->premature_cad}}</td>
            <td>{{$patient->premature_cerebral}}</td>
            <td>{{$patient->pvd}}</td>
            <td>{{$patient->corneal_arcus}}</td>
            <td>{{$patient->patienttclevel}}</td>
            <td>{{$patient->patientldlclevel}}</td>
            <td>{{$patient->baseline_therapy}}</td>
            <td>{{$patient->baseline_therapy_specify}}</td>
            <td>{{$patient->tendon_xanthomata}}</td>
            <td>{{$patient->achilles_tendon}}</td>
            <td>{{$patient->nodular_xanthoma}}</td>
            <td>{{$patient->genetic_mutation}}</td>
            <td>{{$patient->ldlr}}</td>
            <td>{{$patient->apob}}</td>
            <td>{{$patient->pcsk9}}</td>
            <td>{{$patient->other_fh_mutations}}</td>
            <td>{{$patient->first_degree}}</td>
            <td>{{$patient->first_degree_gender}}</td>
            <td>{{$patient->first_degree_age}}</td>
            <td>{{$patient->first_degree_tclvl}}</td>
            <td>{{$patient->first_degree_premature_cad}}</td>
            <td>{{$patient->first_degree_tendon_xanthomata}}</td>
            <td>{{$patient->first_degree_corneal_arcus}}</td>
            <td>{{$patient->first_degree_fh}}</td>
            <td>{{$patient->second_degree}}</td>
            <td>{{$patient->second_degree_gender}}</td>
            <td>{{$patient->second_degree_age}}</td>
            <td>{{$patient->second_degree_tclvl}}</td>
            <td>{{$patient->second_degree_premature_cad}}</td>
            <td>{{$patient->second_degree_tendon_xanthomata}}</td>
            <td>{{$patient->second_degree_fh}}</td>
            <td>{{$patient->third_degree}}</td>
            <td>{{$patient->third_degree_fh}}</td>
            <td>{{$patient->adminid}}</td>
            <td>{{$patient->adminname}}</td>
            <td>{{$patient->adminstaffid}}</td>
            <td>{{$patient->adminstate}}</td>
            <td>{{$patient->adminlocation}}</td>
            <td>{{$patient->adminaddress}}</td>
            <td>{{$patient->adminemail}}</td>
            <td>{{$patient->adminusername}}</td>
            <td>{{$patient->adminlevel}}</td>
            <td>{{$patient->admin_registerdate}}</td>
            <td>{{$patient->patientscoreid}}</td>
            <td>{{$patient->first_question_dlcc}}</td>
            <td>{{$patient->second_question_dlcc}}</td>
            <td>{{$patient->third_question_dlcc}}</td>
            <td>{{$patient->fourth_question_dlcc}}</td>
            <td>{{$patient->fifth_question_dlcc}}</td>
            <td>{{$patient->total_dlcc}}</td>
            <td>{{$patient->result_dlcc}}</td>
            <td>{{$patient->first_question_sb}}</td>
            <td>{{$patient->second_question_sb}}</td>
            <td>{{$patient->third_question_sb}}</td>
            <td>{{$patient->fourth_question_sb}}</td>
            <td>{{$patient->fifth_question_sb}}</td>
            <td>{{$patient->result_sb}}</td>
            <td>{{$patient->first_question_jfhmc}}</td>
            <td>{{$patient->second_question_jfhmc}}</td>
            <td>{{$patient->third_question_jfhmc}}</td>
            <td>{{$patient->total_jfhmc}}</td>
            <td>{{$patient->result_jfhmc}}</td>
            <td>{{$patient->result_us}}</td>
        </tr>
        @endforeach
    </thead>
</table>