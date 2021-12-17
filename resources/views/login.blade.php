@include('layouts.header')
</head>

<body>
  <div class="main-wrapper">
    <div class="page-wrapper full-page">
      <div class="page-content d-flex align-items-center justify-content-center">

        <div class="row w-100 mx-0 auth-page">
          <div class="col-md-8 col-xl-6 mx-auto">
            <div class="card">
              <div class="row">
                <div class="col-md-4 pr-md-0">
                  <div id="left-wrapper" class="auth-left-wrapper">
                    <style>
                      #left-wrapper {
                        background-image: url("{{asset('images/school.jpg') }}");
                        background-position-x: 55%;
                      }
                    </style>
                  </div>
                </div>
                <div class="col-md-8 pl-md-0">
                  <div class="auth-form-wrapper px-4 py-5">
                    <!-- <a href="#" class="noble-ui-logo d-block mb-2">IE<span>IS</span></a> -->
                    <a href="#" class="noble-ui-logo d-block mb-2"><img src="{{ asset('images/logo.png') }}" alt="" height="50px"></a>
                    <h5 class="text-muted font-weight-normal mb-4">Welcome back! Log in to your account.</h5>
                    @if(isset(Auth::user()->email))
                    <script>
                      alert(2);
                    </script>
                    @endif
                    @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block">
                      <button type="button" class="close" data-dismiss="alert">x</button>
                      <strong>{{message}}</strong>
                    </div>
                    @endif
                    @if(count($errors) > 0)
                      <div class='alert alert-danger'>
                        <ul>
                          @foreach($errors->all() as $error)
                          <li>{{ error }}</li>
                          @endforeach
                        </ul>
                      </div>
                    @endif
                    <form class="forms-sample" method="post" action=" {{ url('dashboard') }}">
                      {{ csrf_field() }}
                      <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label for="pwd">Password</label>
                        <input type="password" class="form-control" id="pwd" autocomplete="current-password" placeholder="Password">
                      </div>
                      <!-- <div class="form-check form-check-flat form-check-primary"> -->
                      <div class="form-check form-check-primary">
                        <!-- <label class="form-check-label"> -->
                        <label class="">
                          <!-- <input type="checkbox" class="form-check-input"> -->
                          <input type="checkbox" class="">
                          Remember me
                        </label>
                      </div>
                      <div class="mt-3">
                        <input type="button" class="btn btn-primary mr-2 mb-2 mb-md-0 text-white" value="Login Now">
                      </div>
                        <!-- <button type="button" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">
                          <i class="btn-icon-prepend" data-feather="twitter"></i>
                          Login with twitter
                        </button> -->
                      <!-- <a href="register.html" class="d-block mt-3 text-muted">Not a user? Sign up</a> -->
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- core:js -->
  <script src="../../../assets/vendors/core/core.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <!-- end plugin js for this page -->
  <!-- inject:js -->
  <script src="../../../assets/vendors/feather-icons/feather.min.js"></script>
  <script src="../../../assets/js/template.js"></script>
  <!-- endinject -->
  <!-- custom js for this page -->
  <!-- end custom js for this page -->
  <!-- plugin js for this page -->
  <script src="../../../assets/vendors/prismjs/prism.js"></script>
  <script src="../../../assets/vendors/clipboard/clipboard.min.js"></script>
  <!-- end plugin js for this page -->
</body>

</html>