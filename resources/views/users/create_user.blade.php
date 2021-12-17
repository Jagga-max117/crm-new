@include('layouts.header')
<!-- plugin css for this page -->
<link rel="stylesheet" href="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
<!-- end plugin css for this page -->
</head>

<body class="sidebar-dark">
    <div class="main-wrapper">
        @include('layouts.sidebar')
        <div class="page-wrapper">
            @include('layouts.navbar')
            <div class="page-content">

                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            @if(Session::has('user_created'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('user_created')}}
                            </div>
                            @endif
                            <div class="row">
                                <!-- <div class="col-md-4 pr-md-0" style="background-image: url('{{asset(`images/hoodie.png`) }}');"> -->
                                <!-- <div class="col-md-4 pr-md-0">
                                </div> -->
                                <div class="col-md-12 pl-md-0">
                                    <div class="auth-form-wrapper px-4 py-5">
                                        <a href="{{route('createuser')}}" class="noble-ui-logo d-block mb-2">IE<span>IS</span></a>
                                        <h5 class="text-muted font-weight-normal mb-4">Create a free account.</h5>
                                        <form class="forms-sample" method="POST" action="{{route('userstore')}}" enctype="multipart/form-data">
                                            {{ csrf_field() }}

                                            <div class="form-group">
                                                <label for="name">Name</label>

                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Jane Doe">

                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="useremail">Email address</label>
                                                <input type="email" class="form-control" id="useremail" placeholder="Email" name="email">
                                            </div>
                                            <div class="form-group">
                                                <label for="userpassword">Password</label>
                                                <input type="text" class="form-control" id="userpassword" autocomplete="current-password" placeholder="Password" name="password">
                                                <!-- <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle form-control text-left" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Select User role &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </div>
                                                </div> -->
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">User role</label>
                                                <select class="btn btn-secondary form-control" id="exampleFormControlSelect1" name="roles">
                                                    <option value="">Select User role</option>
                                                    @foreach($roles as $role)
                                                    <option value="{{$role->role_id}}">{{$role->role}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <!-- <div class="form-check form-check-flat form-check-primary">
                                                    <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input">
                                                    Remember me
                                                    </label>
                                                </div> -->
                                            <div class="mt-3">

                                                <button type="submit" class="btn btn-primary">Create user</button>
                                            </div>
                                            <!-- <a href="/dashboard" class="btn btn-primary text-white mr-2 mb-2 mb-md-0">Sign up</a> -->

                                            <!-- <button type="button" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">
                                                <i class="btn-icon-prepend" data-feather="twitter"></i>
                                                Sign up with twitter
                                                </button>
                                            </div>
                                            <a href="/login" class="d-block mt-3 text-muted">Already a user? Sign in</a> -->
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            @include('layouts.footer')
        </div>
    </div>
    <script src="{{ asset('vendors/core/core.js') }}"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <!-- end plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('vendors/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('js/template.js') }}"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="{{ asset('vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    <!-- end plugin js for this page -->
    <!-- custom js for this page -->
    <script src="{{ asset('js/data-table.js') }}"></script>
    <!-- end custom js for this page -->
</body>

</html>