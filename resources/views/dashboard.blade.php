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
</div>
 
<div class="content container content-wrapper1 ">
<div class="row">
	<div class="col-custom1 boxShadow-top form-group">
            @if(Session::get('adminlevel')=='admin')
            <x-navbutton icon="fa fa-book fa-lg" url="{{URL::to('/admin-report/all')}}" title="Report"/>
            @endif
            <x-navbutton icon="fa fa-user-circle fa-lg" url="{{URL::to('/edit-detail')}}" title="Edit Detail"/>
			<x-navbutton icon="fa fa-lock fa-lg" url="{{URL::to('/change-password')}}" title="Change Password"/>
			<x-navbutton icon="fa fa-user-plus fa-lg" url="{{URL::to('/patient-registration')}}" title="Patient Registration"/>
            <x-navbutton icon="fa fa-users fa-lgs" url="{{URL::to('/list-patient')}}" title="List of Patient"/>
             @if(Session::get('adminlevel')=='admin')
            <x-navbutton icon="fa fa-user-md fa-lg" url="{{URL::to('/list-staff')}}" title="List of Staffs"/>
             @endif
            <x-navbuttonpurple icon="fa fa-sign-out fa-lg" url="{{URL::to('/logout')}}" title="Logout"/>
             
	</div>
</div>
</div>

@section('javascript')

@if(session()->has('message'))
    <script>
    Swal.fire({
  icon: 'Success',
  title: 'Success',
  text: "{{session()->get('message')}}",
})
</script>
@endif
@endsection
@endsection