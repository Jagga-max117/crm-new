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
                <!-- <div class="col-md-4 pr-md-0" style="background-image: url('{{asset(`images/hoodie.png`) }}');"> -->
                <div class="col-md-4 pr-md-0">
                  <div id="left-wrapper" class="auth-left-wrapper">
                    <style>
                      #left-wrapper {
                        background-image: url("{{asset('images/school.jpg') }}");
                        background-position-x: 55%;
                      }
                    </style>
                    <!-- <img src="{{ asset('images/school.jpg') }}" alt="placeholder"> -->
                  </div>
                </div>
                <div class="col-md-8 pl-md-0">
                  <div class="auth-form-wrapper px-4 py-5">
                    <a href="#" class="noble-ui-logo d-block mb-2">IE<span>IS</span></a>
                    <h5 class="text-muted font-weight-normal mb-4">Create a free account.</h5>
                    <form class="forms-sample">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                      </div>
                      <!-- <div class="form-group"> -->
                      <!-- <label for="exampleInputPassword1">User role</label> --> -->
                      <!-- <input type="text" class="form-control" id="exampleInputPassword1" autocomplete="current-password" placeholder="Password at least 8char">
                      </div> -->
                      <!-- <div class="dropdown">
                          <button class="btn btn-secondary dropdown-toggle form-control text-left" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Select User role &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">User role</label>
                        <select class="btn btn-secondary form-control" id="exampleFormControlSelect1">
                          <option selected disabled>Select User role</option>
                          <option value="staff">Staff</option>
                          <option value="student">Student</option>
                        </select>
                      </div>
                      <!-- <div class="form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input">
                          Remember me
                        </label>
                      </div> -->
                      <div class="mt-3">
                        <a href="/dashboard" class="btn btn-primary text-white mr-2 mb-2 mb-md-0">Sign up</a>
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
</body>

</html>