@extends('layouts.app')
@section('title', 'FH CatScreen')

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
	
</div>

<div class="content container content-wrapper2">
<div class="row">
	<div class="col-custom1 boxShadow form-group">
    <div class="txt-title"><p>Forgot your password?</p></div>
	 <form name="reset-form" id="reset-form">
			<div class="mb-3">
			<small class="text-muted">Enter email address to send password link</small>
			<input type="text" class="form-control" name="adminemail" id="adminemail" title="Please enter your email" placeholder="Email" required>
                  
			</div>
			<br>

			<div class="row">
			<div class="col-2"><button type="button" onClick="window.location.href='index.php'" class="btn btn-dark btn-block but-custom2"><i class="fa fa-long-arrow-left"></i></button></div>
			<div class="col-10"><button type="submit" id="submit" class="btn btn-secondary btn-block but-color-purple">Reset <i class="fa fa-undo" aria-hidden="true"></i></button></div>
			</div>
		 </form>
		</div>
</div>
</div>

@endsection
