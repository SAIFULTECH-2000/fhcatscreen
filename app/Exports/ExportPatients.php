<?php

namespace App\Exports;

use App\Models\Patients;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\FromView;
use Nette\Utils\Strings;
use Illuminate\Support\Facades\DB;
class ExportPatients implements FromView
{

    
    use Exportable;
    protected  $adminid;
    protected  $adminstaffid;
    protected  $date_from;
    protected  $date_to;
    protected  $adminlocation ;
    protected  $adminstate ;
    public function __construct($adminid, $adminstaffid, $date_from,$date_to,$adminlocation,$adminstate) 
    {
    $this->adminid = $adminid;
    $this->adminstaffid = $adminstaffid;
    $this->date_from = $date_from;
    $this->date_to = $date_to;
    $this->adminlocation = $adminlocation;
    $this->adminstate =$adminstate;
  }
  
    public function view(): View
    {
      	$rows = [];

   
	if($this->adminstaffid == 'all') {
		if($this->adminlocation == 'all') {
			if($this->adminstate == 'all') {
				$sql = DB::table('admintbl')->select('adminid')->get();
			}
			else if ($this->adminstate != 'all') {
			  $sql = DB::table('admintbl')->select('adminid')->where('adminstate',$this->adminstate)->get();
			}
		}
		else if($this->adminlocation != 'all') {
			if($this->adminstate == 'all') {
        $sql =DB::table('admintbl')->select('adminid')->where('adminlocation',$this->adminlocation)->get();
			}
			else if ($this->adminstate != 'all') {
        $sql = DB::table('admintbl')->select('adminid')->where('adminstate',$this->adminstate)->where('adminlocation',$this->adminlocation)->get();
				
			}
		}
	} if ($this->adminstaffid != 'all') {
		if($this->adminlocation == 'all') {
			if($this->adminstate == 'all') {
			  $sql = DB::table('admintbl')->select('adminid')->where('adminstaffid',$this->adminstaffid)->get();
			}
			else if ($this->adminstate != 'all') {
        $sql = DB::table('admintbl')->select('adminid')->where('adminstaffid',$this->adminstaffid)->where('adminstate',$this->adminstate)->get();
			}
		}
		else if($this->adminlocation != 'all') {		
			if($this->adminstate == 'all') {
			    $sql = DB::table('admintbl')->select('adminid')->where('adminstaffid',$this->adminstaffid)->where('adminlocation',$this->adminlocation)->get();
			}
			else if ($this->adminstate != 'all') {
				
			   $sql = DB::table('admintbl')->select('adminid')->where('adminstate',$this->adminstate)->where('adminstaffid',$this->adminstaffid)->where('adminlocation',$this->adminlocation)->get();
			}
		}
	}
$patients = DB::table('patienttbl')->join('patientscoretbl','patienttbl.patientid','=',
'patientscoretbl.patientid')->join('parametertbl','patienttbl.patientgender','=','parametertbl.parameterid')
->join('admintbl','patienttbl.adminid','=','admintbl.adminid')
->select('patienttbl.patientid', 'patienttbl.patientname', 'parametertbl.parametername as patientgender', 'patienttbl.patientrace', 'patienttbl.patientcontact', 'patienttbl.patientyearoffirstseen', 'patientnric', 'patientcontact', 'patientyearoffirstseen', 'patienttbl.registerdate as patient_registerdate', 'premature_cad', 'premature_cerebral', 'pvd', 'corneal_arcus', 'patienttclevel', 'patientldlclevel', 'baseline_therapy', 'baseline_therapy_specify', 'tendon_xanthomata', 'achilles_tendon', 'nodular_xanthoma', 'genetic_mutation', 'ldlr', 'apob', 'pcsk9', 'other_fh_mutations', 'first_degree', 'first_degree_gender', 'first_degree_age', 'first_degree_tclvl', 'first_degree_ldlclvl', 'first_degree_premature_cad', 'first_degree_tendon_xanthomata', 'first_degree_corneal_arcus', 'first_degree_fh', 'second_degree', 'second_degree_gender', 'second_degree_age', 'second_degree_tclvl', 'second_degree_premature_cad', 'second_degree_tendon_xanthomata', 'second_degree_fh', 'third_degree', 'third_degree_fh', 'patienttbl.adminid', 'adminname', 'adminstaffid', 'adminstate', 'adminlocation', 'adminaddress', 'adminemail', 'adminusername', 'adminlevel', 'admintbl.registerdate as admin_registerdate', 'patientscoreid', 'first_question_dlcc', 'second_question_dlcc', 'third_question_dlcc', 'fourth_question_dlcc', 'fifth_question_dlcc', 'total_dlcc', 'result_dlcc', 'first_question_sb', 'second_question_sb', 'third_question_sb', 'fourth_question_sb', 'fifth_question_sb', 'result_sb', 'first_question_jfhmc', 'second_question_jfhmc', 'third_question_jfhmc', 'total_jfhmc', 'result_jfhmc', 'result_us')
->where('patienttbl.registerdate','>=',"$this->date_from")
->where('patienttbl.registerdate', '<=',"$this->date_to")
->get();
return view('export.all',['patients'=>$patients]);
    }

}