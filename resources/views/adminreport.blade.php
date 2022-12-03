@extends('layouts.app')
@section('title', 'FH CatScreen')

@section('content')
    <div id="myHeader">
        <div class="boxCorner boxShadow-top header text-left">
            <div class="row">
                <div class="logo-fhcatscreen"><img src="{{ asset('img/logo-small.png') }}" alt="" /></div>
            </div>
        </div>
        <div class="boxCorner boxShadow-top header-sub text-left">
            <div class="txt-title">
                <p>Report</p>
            </div>
        </div>
    </div>
    <table>
        <tr>
            <td>
                <div class="content container content-wrapper2">
                    <div class="row" style="margin-right:-120px;margin-left:-120px">
                        <div class="col-custom1 boxShadow form-group" style="width: 3000px;">
                            <div class="txt-title">

                                <select id="category_list" style="display: block;margin: 0 auto;" onchange="plsRefresh()">
                                    <option value="all" <?php if ($display == 'all') {
                                        print 'selected';
                                    } ?>>All</option>
                                    <option value="Community" <?php if ($display == 'Community') {
                                        print 'selected';
                                    } ?>>Community</option>
                                    <option value="Hospital" <?php if ($display == 'Hospital') {
                                        print 'selected';
                                    } ?>>Hospital</option>
                                </select>
                                <br>
                                <table>
                                    <tr>
                                        <td style="vertical-align: top;width: 20%">
                                            <p>Dutch Lipid Clinic Criteria (DLCC)</p>
                                            <table>
                                              
                                                @foreach ($DLCC as $s)
                                                    <tr>
                                                        <td>
                                                            <p style="color:black;font-weight: normal;">
                                                                {{ $s->result_dlcc }}:</p>
                                                        </td>
                                                        <td>
                                                            <p style="color:black;">&nbsp;&nbsp;{{ $s->Total }} Patients
                                                                {{ $s->Percentage }} </strong></p>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </table>
                                        </td>
                                        <td style="vertical-align: top;width: 20%">
                                            <p>Simon-Broome (SB) Diagnostic Criteria</p>
                                            <table>
                                              
                                              
                                                @foreach ($SB as $s)
                                                    <tr>
                                                        <td>
                                                            <p style="color:black;font-weight: normal;"> {{ $s->result_sb }}
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <p style="color:black;">&nbsp;&nbsp;{{ $s->Total }} Patients
                                                                ({{ $s->Percentage }})
                                                                </strong></p>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </table>
                                        </td>
                                        <td style="vertical-align: top;width: 20%">
                                            <p>Japanese FH Management Criteria (JFHMC)</p>
                                            <table>
                                              
                                            
                                            

                                                @foreach ($JFHMC as $s)
                                                    <tr>
                                                        <td>
                                                            <p style="color:black;font-weight: normal;">{{ $s->result_jfhmc }}:
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <p style="color:black;">&nbsp;&nbsp; {{ $s->Total }}
                                                                Patients
                                                                ({{ $s->Percentage }})
                                                                </strong></p>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </table>
                                        </td>
                                        <td style="vertical-align: top;width: 20%">
                                            <p>US Make Early Diagnosis to Prevent Early Deaths (US-MEDPED)</p>
                                            <table>
                                             
                                               
                                                @foreach ($US as $s)
                                                    <tr>
                                                        <td>
                                                            <p style="color:black;font-weight: normal;">{{$s->result_us}}
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <p style="color:black;">&nbsp;&nbsp;{{$s->Total}}Patients
                                                                ({{$s->Percentage}})
                                                                </strong></p>
                                                        </td>
                                                    </tr>
                                                @endforeach


                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan=4>
                <div class="content container content-wrapper1" style="margin-top: 0px;">
                    <div class="row">
                        <div class="col-custom1 boxShadow form-group" style="width: 3000px;">
                            <table class="table mb-3">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Patients</th>
                                        <th scope="col">DLCC</th>
                                        <th scope="col">SB</th>
                                        <th scope="col">JFHMC</th>
                                        <th scope="col">US-MEDPED</th>
                                        <th scope="col">Profiles</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php
                                    $count =1;
                                @endphp

                                @foreach ($patients as $key => $patient)
                               
								
								
							
								
                                    <tr>
                                        <td>{{ $patients->firstItem()+$key}}</td>
                                        <td>{{ $patient->patientname;}}</td>
                                        <td>{{ $patient->result_dlcc; }}</td>
                                        <td>{{$patient->result_sb; }}</td>
                                        <td>{{ $patient->result_jfhmc; }}</td>
                                        <td>{{$patient->result_us; }}</td>
                                        <td>
                                            <button type="button"
                                                onclick="location.href='{{URL::to('/patient-dashboards')}}/{{$patient->patientid}}'"
                                                class="btn-sm btn-success btn-block but-color-purple-small">View</button>
                                        </td>
                                    </tr>
                                @endforeach
					          
                                    
                        
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-md-1 col-2">
                                    <button type="button" onclick="location.href='{{URL::to('/dashboard')}}'"
                                        class="btn btn-dark btn-block but-custom2"><i
                                            class="fa fa-long-arrow-left fa-lg"></i></button>
                                </div>
                                <div class="user-details col-md-10 col-9" style="text-align: center;">
                                        {{$patients->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    </table>

@section('javascript')
<script>
    function plsRefresh() {
  var x = document.getElementById("category_list").value;
 var base_url = "{{URL::to('')}}";
 var url = base_url+'/admin-report/'+x;
  window.location.replace(x);
  console.log(x);
}
</script>
@endsection
@endsection
