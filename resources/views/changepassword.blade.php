@extends('layouts.app')
@section('title', 'FH CatScreen')

@section('content')


    <div id="myHeader">
        <div class="boxCorner boxShadow-top header text-left">
            <div class="row">
                <div class="logo-fhcatscreen"><img src="img/logo-small.png" alt="" /></div>
                <div class="hello-user">
                    <label class="hello-seperator"></label>
                    <label></label>
                </div>
            </div>
        </div>
        <div class="boxCorner boxShadow-top header-sub text-left">
            <div class="txt-title">
                <p>Change Password</p>
            </div>
        </div>
    </div>

    <div class="content container content-wrapper2">
        <div class="row">
            <div class="col-custom1 boxShadow-top form-group">
                <form name="registration-form" id="registration-form" method="post"
                    action="{{ URL::to('/changepassword') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md mb-3">
                            <small class="text-muted">Old Password</small>

                            <input type="password" value="" class="form-control" name="adminpassword"
                                id="adminpassword" placeholder="Current Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md mb-3">
                            <small class="text-muted">New Password</small>

                            <input type="password" value="" class="form-control" name="newadminpassword"
                                id="newadminpassword" placeholder="New Password" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md mb-3">
                            <small class="text-muted">Confirm New Password</small>
                            <input type="password" value="" class="form-control" name="newadminrepassword"
                                id="newadminrepassword" placeholder="Confirm New Password" required>
                            <span id='messagepass'></span>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <div class="row">
                        <div class="col-md-2">
                            <button type="button" onclick="location.href='/dashboard'"
                                class="btn btn-dark btn-block but-custom2"><i
                                    class="fa fa-long-arrow-left fa-lg"></i></button>
                            <!-- <button type="button" onClick="window.location.href='dashboard.php'" class="btn btn-dark btn-block but-color-none2">Back Home</button> -->
                        </div>
                        <div class="col-md-10">
                            <button type="submit" id="submit"
                                class="btn btn-success btn-block but-color-none">Confirm</button>
                            <!-- <button type="submit" id="submit" class="btn btn-success btn-block but-color-none2">Confirm</button> -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



@section('javascript')
    @if (session()->has('fails'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: "{{ session()->get('fails') }}",
            })
        </script>
    @endif

@endsection
@endsection
