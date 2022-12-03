
@extends('layouts.app')
@section('title', 'FH CatScreen')

@section('content')


<div id="myHeader">
	 <div class="boxCorner boxShadow-top header text-left" >
    <div class="row">
      <div class="logo-fhcatscreen"><img src="{{URL::to('img/logo-small.png')}}" alt=""/></div>
      <div class="hello-user">
        <label class="hello-seperator"></label>
        <label></label>
      </div>
    </div>
  </div>
	<div class="boxCorner boxShadow-top header-sub text-left" >
	<div class="txt-title"><p>Register</p></div>
	</div>
</div>


<div class="content container content-wrapper2">
<div class="row">
<div class="col-custom2 boxShadow-top form-group">
            <form name="registration-form" id="registration-form" method="post" action="{{URL::to('registeradmin')}}">
                @csrf   
                <div class="row">
                        <div class="col-md-6 mb-3">
                            <input type="text" value="" class="form-control" name="adminname" id="adminname" pattern="[a-zA-Z ']{1,}" title="All must be characters" placeholder="Name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <input type="text" value="" class="form-control" name="adminstaffid" id="adminstaffid" placeholder="Staff ID" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <select name="adminstate" id="adminstate" class="form-control" required>
                                <option >Current State</option>
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
                        </div>
                        <div class="col-md-6 mb-3">
                          
							<select name="adminlocation" id="adminlocation" class="form-control" required>
									<option >Current Location</option>
                                    <option value="Community">Community</option>
                                    <option value="Hospital">Hospital</option>
                                    </select>
                           
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <input type="text" value="" class="form-control" name="adminaddress" id="adminaddress" placeholder="Current Address" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <input type="email" value="" class="form-control" name="adminemail" id="adminemail" placeholder="Email" required>
							<input type="hidden" value="username" class="form-control" name="adminusername" id="adminusername" pattern="[a-zA-Z ]{1,}"  title="Enter Esername" placeholder="" required>
         
                        </div>
                    </div>
               <div class="row">
                        <div class="col-md-6 mb-3">
                            <input type="password" value="" class="form-control" name="adminpassword" id="adminpassword" placeholder="Password" required>
                        </div>
                    </div>
                
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <small class="text-muted">Confirm password</small>
                            <input type="password" value="" class="form-control" name="adminrepassword" id="adminrepassword" placeholder="Password" required><span id='messagepass'></span>
                        </div>
                    </div>
                <hr class="mb-4">
                    <div class="row">
                        <div class="col-md-1 col-2">
                            <button type="button" onclick="location.href='index.php'" class="btn btn-dark btn-block but-custom2"><i class="fa fa-long-arrow-left fa-lg"></i></button>
                        </div>
                        <div class="col-md-5 col-10">
                            <button type="submit" id="submit" class="btn btn-success btn-block but-color-none">Register <i class="fa fa-user-circle fa-lg" aria-hidden="true"></i></button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>

<!-- Satisfaction Survey - END -->

</div>
<div id="popupMessageSent" style="visibility: hidden">
    Success
</div>
<script>
$('#adminpassword, #adminrepassword').on('keyup', function() {
  if ($('#adminpassword').val() == $('#adminrepassword').val()) {
    $('#messagepass').html('Matching').css('color', 'green');
  } else
    $('#messagepass').html('Not Matching').css('color', 'red');
});
</script>

@endsection