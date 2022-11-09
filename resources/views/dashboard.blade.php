<?php
    session_start();
    include "conn.php";

$_SESSION["adminusername"]="shima";
$_SESSION["adminid"]="14";

	$time = $_SERVER['REQUEST_TIME'];
	$timeout_duration = 360;

	if (isset($_SESSION['LAST_ACTIVITY']) && 
	   ($time - $_SESSION['LAST_ACTIVITY']) > $timeout_duration) {
		header('Location: index.php');
	}

	$_SESSION['LAST_ACTIVITY'] = $time;
	
    if (!isset($_SESSION["adminusername"])){
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
	<meta http-equiv="refresh" content="361" >
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="js/sticky.js"></script>
    <script src="js/multisteps.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="main.css">
    <!-- <style>
        #cnt1 {
            background-color: rgba(215, 212, 212, 0.88);
            margin-bottom: 70px;
        }

        #panel1 {
            padding:20px;
        }

        .panel-body:not(.two-col) {
            padding: 0px;
        }

        .panel-body .radio, .panel-body .checkbox {
            margin-top: 0px;
            margin-bottom: 0px;
        }

        .panel-body .list-group {
            margin-bottom: 0;
        }

        .margin-bottom-none {
            margin-bottom: 0;
        }

        .dashboard-stat {
            font-size: xx-large;
            position: relative;
            display: block;
            padding: 74px 0 99px;
            -webkit-border-radius: 5px;
            border-radius: 20px;
            -webkit-box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.1);
            box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.1);
        }

        .dashboard-color {
            background-color: #D3D3D3;
            color: #000;
        }

        a.dashboard-color:hover {
            color: #fff;
        }

        .linebreak {
            height: 350px;
        }
        .bd-example {
            position: relative;
            padding: 1rem;
            margin: 1rem -15px 0;
            border: solid #f7f7f9;
            /* border-width: .2rem 0 0; */
        }
        /*.bd-example {
            padding: 1.5rem;
            margin-right: 0;
            margin-left: 0;
            border-width: .2rem;
        /* } */
        .isDisabled {
            cursor: not-allowed;
            opacity: 0.5;
        }
        .isDisabled > a {
            color: currentColor;
            display: inline-block;  /* For IE11/ MS Edge bug */
            pointer-events: none;
            text-decoration: none;
        }
    </style> -->

</head>
<body>

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
</div>


<!-- <div class="container"> -->
    <?php if (isset($_GET['msg'])) {
            if ($_GET['msg'] == 'successupdate') {
    ?>
    <div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> Update the patient's details.
    </div>
    <?php
        }
        else if($_GET['msg'] == 'successanswer') {
            ?>
        <div class="alert alert-success alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> You can check the results on the table below.
        </div>
            <?php
        }
    }
    ?>
    <!-- <div class="masthead">
        <h3 class="text-muted">FH CatScreen Diagnosis Application</h3>
    </div> -->
    

    <!-- <br><br> -->
<div class="content container content-wrapper1 ">
<div class="row">
	<div class="col-custom1 boxShadow-top form-group">
            <!-- <div class="bd-example">
                    <h3>Welcome <?php echo $_SESSION['adminusername']; ?>!</h3>
            </div> -->
			<?php
            if (isset($_SESSION["adminusername"])){
                if ($_SESSION["adminusername"] == 'admin') {
            ?>
                <div class="row">
					<div class="col-12 mb-3">
					<button type="button" onclick="location.href='admin-report.php?start=0&display_category=all'" class="btn btn-secondary btn-block but-color-white">Report<i class="fa fa-book fa-lg" aria-hidden="true"></i></button>
					</div>
                </div>
            <?php
                }
            }
            ?>
			<div class="row">
				<div class="col-12 mb-3">
					<button type="button" onclick="location.href='admin-edit-registration.php'" class="btn btn-secondary btn-block but-color-white">Edit Detail<i class="fa fa-user-circle fa-lg" aria-hidden="true"></i></button></div>
			</div>
			<div class="row">
				<div class="col-12 mb-3">
					<button type="button" onclick="location.href='change-password.php'" class="btn btn-secondary btn-block but-color-white">Change Password<i class="fa fa-lock fa-lg" aria-hidden="true"></i></button></div>
			</div>
			<div class="row">
				<div class="col-12 mb-3">
					<button type="button" onclick="location.href='patient-registration.php'" class="btn btn-secondary btn-block but-color-white">Patient Registration<i class="fa fa-user-plus fa-lg" aria-hidden="true"></i></button></div>
			</div>
			<div class="row">
				<div class="col-12 mb-3">
					<button type="button" onclick="location.href='list-patient.php?start=0'" class="btn btn-secondary btn-block but-color-white">List of Patients<i class="fa fa-users fa-lg" aria-hidden="true"></i></button></div>
            </div>
            <?php
            if (isset($_SESSION["adminusername"])){
                if ($_SESSION["adminusername"] == 'admin') {
            ?>
                <div class="row">
				<div class="col-12 mb-3">
					<button type="button" onclick="location.href='list-staff.php'" class="btn btn-secondary btn-block but-color-white">List of Staffs<i class="fa fa-user-md fa-lg" aria-hidden="true"></i></button></div>
                </div>
                <!-- <a href="list-staff.php" class="btn btn-warning btn-lg btn-block">List of Staffs</a>    -->
            <?php
                }
            }
            ?>
			<div class="row">
				<div class="col-12 mb-3">
					<button type="button" onclick="location.href='index.php'" class="btn btn-secondary btn-block but-color-purple">Logout<i class="fa fa-sign-out fa-lg" aria-hidden="true"></i></button></div>
			</div>
	</div>
</div>
</div>

<div id="myFooter" class="d-none d-md-block justify-content-center align-content-center">
    <div><small>Developed by IPPerform and FSKM</small></div>
    <div class="p-1">
        <img src="img/logo-90x90-i-pperform.png" height="90" alt=""/>
        <img src="img/logo-90x360-uitm.png" height="90" alt=""/>
    </div>
</div>

<script type="text/javascript">

    var $contactForm = $('#update-form');

    $contactForm.on('submit', function(ev){
        ev.preventDefault();

        $.ajax({
            url: "update.php",
            type:   'POST',
            data: $contactForm.serialize(),
            success: function(data){
                window.location.href = "patient-dashboard.php?msg=successupdate";
            },
            error: function() {
                alert("Bad submit");
            }
        });
    });

    
</script>

</body>
</html>