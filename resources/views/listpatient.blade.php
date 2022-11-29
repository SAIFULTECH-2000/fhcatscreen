@extends('layouts.app')
@section('title', 'FH CatScreen')

@section('content')
    <div id="myHeader">
        <div class="boxCorner boxShadow-top header text-left">
            <div class="row">
                <div class="logo-fhcatscreen"><img src="img/logo-small.png" alt="" /></div>
                <div class="hello-user">
                    <label class="hello-seperator"></label>
                </div>
            </div>
        </div>
        <div class="boxCorner boxShadow-top header-sub text-left">
            <div class="txt-title">
                <p>List of Patients</p>
            </div>
        </div>
    </div>
    </div>

    <div class="content container content-wrapper2">
        <div class="row">
            <div class="col-custom2 boxShadow-top form-group">
                @if(Session::get('adminlevel')=='admin')
                <div class="container">
                    <div class="bd-example">
                        <h3>Download CSV Files</h3>
                        <form action="{{URL::to('/admin-export')}}" method="post">
                            @csrf
                            <!-- start staff id -->
                            <label>Staff :</label>
                            <select name="staffid" id="staffid" class="form-control" required>
                                <option value="all">All</option>
                                @foreach ($admin as $a) 
                                    <option value="{{$a->adminstaffid}}">{{$a->adminstaffid}}-{{$a->adminname}}</option>
                                @endforeach
                            </select>
                            <!-- end staff id -->
                            <br />
                            <!-- start date -->
                            
                            <div class="form-inline">
                                From <div class="input-group date form_date col-md-5" data-date=""
                                    data-date-format="dd MM yyyy" data-link-field="dtp_input2"
                                    data-link-format="yyyy-mm-dd">
                                    <input class="form-control" size="16" type="date" name="dtp_input2"value=""
                                        required='required'>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                    <span class="input-group-addon"><span
                                            class="glyphicon glyphicon-calendar"></span></span>
                                </div> To <div class="input-group date form_date col-md-5" data-date=""
                                    data-date-format="dd MM yyyy" data-link-field="dtp_input3"
                                    data-link-format="yyyy-mm-dd">
                                    <input class="form-control" name="dtp_input3" size="16" type="date" value=""
                                        required='required'>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                    <span class="input-group-addon"><span
                                            class="glyphicon glyphicon-calendar"></span></span>
                                </div>
                            </div>
                           
                            <!-- end date -->
                            <br />
                            <!-- location category -->
                            <label>Location:</label>
                            <select name="adminlocation" id="adminlocation" class="form-control" required>
                                <option value="all">All</option>
                                <option value="Community">Community</option>
                                <option value="Hospital">Hospital</option>
                            </select>
                            <!-- end location category -->
                            <br />
                            <!-- start states -->
                            <label>State:</label>
                            <select name="adminstate" id="adminstate" class="form-control" required>
                                <option value="all">All</option>
                                <option value="Johor">Johor</option>
                                <option value="Kedah">Kedah</option>
                                <option value="Kelantan">Kelantan</option>
                                <option value="Kuala Lumpur">Kuala Lumpur</option>
                                <option value="Labuan">Labuan</option>
                                <option value="Malacca">Malacca</option>
                                <option value="Negeri Sembilan">Negeri Sembilan</option>
                                <option value="Pahang">Pahang</option>
                                <option value="Perak">Perak</option>
                                <option value="Perlis">Perlis</option>
                                <option value="Penang">Penang</option>
                                <option value="Penang">Putrajaya</option>
                                <option value="Sabah">Sabah</option>
                                <option value="Sarawak">Sarawak</option>
                                <option value="Selangor">Selangor</option>
                                <option value="Terengganu">Terengganu</option>
                            </select>
                            <br />
                            <!-- end states -->

                            <input type="submit" class="btn btn-primary btn-large btn-block" value="Export CSV">
                        </form>
                    </div>
                </div>
                @endif

                @foreach ($patients as $key => $patient)
@php
     $user= DB::table('admintbl')->where('adminid',$patient->adminid)->get()->first();
@endphp
              
                    <div class="row">
                        <div class="user-picture col-sm-2 col-md-1 d-none d-sm-block">
                            <img src="img/user-picture.png">
                        </div>
                        <div class="col-sm-10 col-md-11">

                            <div class="row">
                                <div class="user-details col-md-10 col-9">
                                    <div class="col">
                                        <small class="text-muted">{{$user->adminname}}</small>
                                        <small class="text-muted"> | </small>
                                        <small class="text-muted">{{ $user->adminaddress }}</small>
                                        <small class="text-muted"> | </small>
                                        <small class="text-muted">{{$user->adminlocation}}</small>
                                    </div>
                                    <div class="col">
                                        <label>{{$patients->firstItem()+$key}}.{{$patient->patientname}}</label>
                                    </div>
                                    <div class="col">

                                        @php
                                            $nricyear = substr($patient->patientnric, 0, 2);
                                            if ($nricyear > 19) {
                                                $age = date('Y') - (1900 + $nricyear);
                                            } else {
                                                $age = date('Y') - 2000 - $nricyear;
                                            }

                                            if($patient->patientgender==1){
                                                $gender="male";
                                            }else{
                                                $gender="female";
                                            }
                                        @endphp
                                        <small class="text-muted">{{ $gender }}</small>
                                        <small class="text-muted"> | </small>
                                        <small class="text-muted">{{ $patient->patientrace }}</small>
                                        <small class="text-muted"> | </small>
                                        <small class="text-muted">{{$age }} year</small>
                                        <small class="text-muted"> | </small>
                                        <small class="text-muted">{{$patient->patientnric}}</small>
                                        <small class="text-muted"> | </small>
                                        <small class="text-muted">{{$patient->registerdate}}</small>
                                    </div>
                                </div>
                                <div class="col-md-2 col-3">
                                    @php
                                        $url = "/patient-dashboard/$patient->patientid";
                                    @endphp
                                    <a type="button" href="{{URL::to($url)}}"
                                        class="btn-sm btn-success btn-block but-color-purple-small">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="mb-3">
                @endforeach


                <div class="row">
                    <div class="col-md-1 col-2">
                        <button type="button" onclick="location.href='/dashboard'"
                            class="btn btn-dark btn-block but-custom2"><i
                                class="fa fa-long-arrow-left fa-lg"></i></button>
                    </div>
                    <div class="user-details col-md-10 col-9" style="text-align: center;">
                        <div>
                            {{$patients->currentPage()	}}
                        </div>
                        {{ $patients->links() }}
                    </div>
                </div>
                <!-- <a href="dashboard.php" class="btn btn-success btn-lg btn-block">Back</a> -->
                <!-- Satisfaction Survey - END -->
            </div>
        </div>

    </div>

    <script type="text/javascript" src="bootstrap/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script type="text/javascript" src="bootstrap/js/locales/bootstrap-datetimepicker.ms.js" charset="UTF-8"></script>
    {{-- <script type="text/javascript">
        $('.form_datetime').datetimepicker({
            //language:  'fr',
            weekStart: 1,
            todayBtn: 1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            forceParse: 0,
            showMeridian: 1
        });
        $('.form_date').datetimepicker({
            language: 'fr',
            weekStart: 1,
            todayBtn: 1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            minView: 2,
            forceParse: 0
        });
        $('.form_time').datetimepicker({
            language: 'fr',
            weekStart: 1,
            todayBtn: 1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 1,
            minView: 0,
            maxView: 1,
            forceParse: 0
        });
    </script> --}}

    <hr class="mb-3">

    </div>
    </div>
    </div>



@section('javascript')
@endsection
@endsection
