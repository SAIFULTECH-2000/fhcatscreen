@extends('layouts.app')
@section('title','FH CatScreen')

@section('content')

<div id="myHeader">
<div class="boxCorner boxShadow header text-left" ><img src="img/logo-small.png" width="83" height="52" alt=""/></div>
</div>

<div class="content container content-wrapper1">
<div class="row">
	<div class="col-custom1 boxShadow form-group">
    <div class="txt-title"><p>Login</p></div>
            <!-- start form -->
            <form action="{{URL::to('/login')}}" id="registration-form" method="post">
                @csrf
			 <input type="email" value="" class="form-control" name="adminemail" id="adminemail" title="Please enter your email" placeholder="Email address" required>
			
			<br>
			<select name="adminstate" id="adminstate" class="form-control"  required>
									<option>State</option>
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
			
			<br>
			<select name="adminlocation" id="adminlocation" class="form-control"  placeholder="Location" required>
									<option>Location</option>
                                    <option value="Community">Community</option>
                                    <option value="Hospital">Hospital</option>
                                    </select>
			<br>
	<div class="mb-3">
	
    
        <input type="password" name="adminpassword" class="form-control">
    
	<div class="row">
		<div class="col mb-3"><button type="button" class="btn btn-success btn-block but-color-none" onClick="window.location.href='{{URL::to('auth/admin-register')}}'">Register <i class="fa fa-address-card-o"></i></button></a></div>
		<div class="col mb-3"><button type="submit" class="btn btn-dark btn-block but-color-navy-blue" id ="submit">Login <i class="fa fa-sign-in"></i></button></div>
	</div>
	<div class="row">
	    	<a href="{{ url('auth/google') }}" style="margin-top: 20px;" class="btn btn-lg btn-success btn-block">
                                  <strong>Login With Google</strong>
                                </a> 
	</div>
	</div>
	  <!--<div class="row">
		<div class="col mb-3"><button type="button" class="btn btn-success btn-block but-color-none" onClick="window.location.href='user-index.php'">User Login <i class="fa fa-user-circle-o"></i></button></a></div>
	</div> -->

	</form>
	</div>
	 
	</div>
</div>


@section('javascript')
<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

</script>
@if(session()->has('fails'))
    <script>
    Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: "{{session()->get('fails')}}",
})
</script>
@endif
@if(session()->has('logout'))
    <script>
    Swal.fire({
  icon: 'Success',
  title: 'Success',
  text: "{{session()->get('logout')}}",
})
</script>
@endif
@endsection
@endsection