<?php
    session_start();
    session_unset();
    session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>FH CatScreen</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{asset('css/main.css')}}">
 
    <script type="text/javascript" src="{{asset('js/jquery-1.10.2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
  

</head>


<body>
<div id="myHeader">
<div class="boxCorner boxShadow header text-left" ><img src="img/logo-small.png" width="83" height="52" alt=""/></div>
</div>

<div class="content container content-wrapper1">
<div class="row">
	<div class="col-custom1 boxShadow form-group">
    <div class="txt-title"><p>Login</p></div>
            <!-- start form -->
            <form name="registration-form" id="registration-form">
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
	
	<input type="password" value="" class="form-control" name="adminpassword" id="adminpassword" title="Enter Password"  placeholder="Password" required>
	<small class="text-muted"><a href="reset-password.php">Forgot your password?</a></small>
	</div>
	<div class="row">
		<div class="col mb-3"><button type="button" class="btn btn-success btn-block but-color-none" onClick="window.location.href='admin-registration.php'">Register <i class="fa fa-address-card-o"></i></button></a></div>
		<div class="col mb-3"><button type="submit" class="btn btn-dark btn-block but-color-navy-blue" id ="submit">Login <i class="fa fa-sign-in"></i></button></div>
	</div>
	  <!--<div class="row">
		<div class="col mb-3"><button type="button" class="btn btn-success btn-block but-color-none" onClick="window.location.href='user-index.php'">User Login <i class="fa fa-user-circle-o"></i></button></a></div>
	</div> -->

	</form>
	</div>
	 
	</div>
</div>
<div id="popupMessageSent" style="visibility: hidden">
    Success
</div>

<div id="myFooter" class="d-none d-md-block justify-content-center align-content-center">
    <div><small>Developed by IPPerform and FSKM</small></div>
    <div class="p-1">
        <img src="img/logo-90x90-i-pperform.png" height="90" alt=""/>
        <img src="img/logo-90x360-uitm.png" height="90" alt=""/>
    </div>
</div>
<script type="text/javascript">

    var $contactForm = $('#registration-form');

    $contactForm.on('submit', function(ev){
        ev.preventDefault();

        $.ajax({
            url: "login.php",
            type:   'POST',
            data: $contactForm.serialize(),
            success: function(data){
				//alert(data);
                if(data == 0) {
                    alert("Wrong email / state / location. You need to create new one with same email for other states and locations.");
                }
                else if (data == 1) {
                    alert("Wrong password.");
                }else if (data == 2) {
                    window.location.href = "dashboard.php";
                }
                
            },
            error: function() {
                alert("Bad submit");
            }
        });
    });

</script>
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
</body>
</html>