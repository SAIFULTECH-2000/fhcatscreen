@extends('layouts.app')
@section('title', 'FH CatScreen')

@section('content')
    <div id="myHeader">
        <div class="boxCorner boxShadow header text-left"><img src="img/logo-small.png" width="83" height="52"
                alt="" /></div>
    </div>

    <div class="content container content-wrapper1">
        <div class="row">
            <div class="col boxShadow form-group" style="background-color: white">
                <div class="txt-title">
                    <h2>List staff</h2>
                </div>
                <table class="table">
                    <thead>
                        @php
                            $i = 1;
                        @endphp
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Level Register Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $key => $user)
                            <tr>
                                <th scope="row">{{ $users->firstItem()+$key }}</th>
                                <td>{{ $user->adminid }}</td>
                                <td>{{ $user->adminname }}</td>
                                <td>{{ $user->adminusername }}</td>
                                <td>{{ $user->adminemail }}</td>
                                <td>{{ $user->registerdate }}</td>
                            </tr>
                        @endforeach
                      
                    </tbody>
                </table>
                  {{($users->links())}}

                <a href="{{ URL::to('/dashboard')}}">Back</a>
            </div>

        </div>
    </div>

@section('javascript')
    <script>
        window.onscroll = function() {
            myFunction()
        };

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
@endsection
@endsection
