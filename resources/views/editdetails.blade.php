@extends('layouts.app')
@section('title','FH CatScreen')

@section('content')

<div id="myHeader">
	<div class="boxCorner boxShadow-top header text-left" >
        <div class="row">
            <div class="logo-fhcatscreen"><img src="img/logo-small.png" alt=""/></div>
            <div class="hello-user">
                <label class="hello-seperator"></label>
                <label></label>
            </div>
        </div>
     </div>
    <div class="boxCorner boxShadow-top header-sub text-left" >
	    <div class="txt-title"><p>Edit Details</p></div>
	</div>
</div>

<div class="content container content-wrapper2">
<div class="row">
<div class="col-custom2 boxShadow-top form-group">
    <form name="registration-form" id="registration-form" method="post" action="/changedetails">
    	@csrf
        <div class="row">
          <div class="col-md-6 mb-3">
            <label><b>Username</b></label>
            <input type="text" value="{{$user->adminname}}" class="form-control" name="adminname" id="adminname" pattern="[a-zA-Z ']{1,}" title="All must be characters" placeholder="Name" required>
          </div>
          <div class="col-md-6 mb-3">
            <label><b>Staff id</b></label>
            <input type="text" value="{{$user->adminstaffid}}" class="form-control" name="adminstaffid" id="adminstaffid" placeholder="123456" required>
          </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label><b>State</b></label>
                <select name="adminstate" id="adminstate" class="form-control" required>
                <?php 
                    $array_states = ["Johor", "Kedah", "Kelantan", "Kuala Lumpur", "Labuan", "Malacca", "Negeri Sembilan", "Pahang", "Perak", "Perlis", "Penang", "Putrajaya", "Sabah", "Sarawak", "Selangor", "Terengganu"];
                    for ($i = 0; $i < sizeof($array_states); $i++) {
                      
                           ?>
                            <option value="<?php echo $array_states[$i]; ?>"@php if($array_states[$i]==$user->adminstate)echo "selected"@endphp><?php echo $array_states[$i]; ?></option>
                           <?php
                        
                    }
                ?>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label><b>Type</b></label>
                <select name="adminlocation" id="adminlocation" class="form-control" required>
                    <?php 
                        $array_location = ["Community", "Hospital"];
                        for ($i = 0; $i < sizeof($array_location); $i++) {
                          
                                ?>
                               
                                <option value="<?php echo $array_location[$i]; ?>" @php if($array_location[$i]==$user->adminlocation) echo "selected" @endphp><?php echo $array_location[$i]; ?></option>
                                <?php
                            
                        }
                    ?>
                </select>
            </div>
        </div>

        <div class="row">
          <div class="col mb-3">
            <label><b>Address</b></label>
            <input type="text" value="{{$user->adminaddress}}" class="form-control" name="adminaddress" id="adminaddress" placeholder="No. 15, Jln Buah, Tmn Buah, Selangor">
          </div>
        </div>

        <div class="row">
            <div class="col mb-3">
                <label><b>Email</b></label>
                <input type="email" value="{{$user->adminemail}}" class="form-control" name="adminemail" id="adminemail" title="Enter Email" placeholder="user@uitm.edu.my">
            </div>
        </div>

		<div class="row">
          <div class="col-md-6 mb-3">
            <input type="hidden" class="form-control" id="Username" placeholder="Username" name="adminusername" value="{{$user->adminusername}}" required>
          </div>
        </div>


        <hr class="mb-4">
        <div class="row">
            <div class="col-md-1 col-2">
            <button type="button" onclick="location.href='{{ URL::to('/dashboard') }}'" class="btn btn-dark btn-block but-custom2"><i class="fa fa-long-arrow-left fa-lg"></i></button>
           
            </div>
            <div class="col-md-5 col-10">
                <button type="submit" id="submit" class="btn btn-success btn-block but-color-none">Confirm</button>
                
            </div>
        </div>
	
    </form>
</div>
</div>
</div>

<div id="popupMessageSent" style="visibility: hidden">
    Success
</div>




@section('javascript')

@endsection
@endsection