@include('hr.layouts.header')
<!-- plugin css for this page -->
<link rel="stylesheet" href="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
<!-- end plugin css for this page -->
</head>
<!-- </title> -->

<body class="sidebar-dark">
  <div class="main-wrapper">
    @include('hr.layouts.sidebar')
    <div class="page-wrapper">
      @include('hr.layouts.navbar')
      <div class="page-content">

        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
          <div>
            <h4 class="mb-3 mb-md-0">Welcome to Your Dashboard</h4>
          </div>
          <div class="d-flex align-items-center flex-wrap text-nowrap">
            <div class="input-group date datepicker dashboard-date mr-2 mb-2 mb-md-0 d-md-none d-xl-flex" id="dashboardDate">
              <span class="input-group-addon bg-transparent"><i data-feather="calendar" class=" text-primary"></i></span>
              <input type="text" class="form-control">
            </div>
            <button type="button" class="btn btn-outline-info btn-icon-text mr-2 d-none d-md-block">
              <i class="btn-icon-prepend" data-feather="download"></i>
              Import
            </button>
            <button type="button" class="btn btn-outline-primary btn-icon-text mr-2 mb-2 mb-md-0">
              <i class="btn-icon-prepend" data-feather="printer"></i>
              Print
            </button>
            <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
              <i class="btn-icon-prepend" data-feather="download-cloud"></i>
              Download Report
            </button>
          </div>
        </div>

        <br />
        <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Leave Entitlements</h6>
                <!-- <p class="card-description">Add class <code>.table-bordered</code></p> -->
                <div class="table-responsive pt-3">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>
                          <strong>Leave Type</strong>  
                        </th>
                        <th>
                        <strong>Total Days Entitled</strong>
                        </th>
                        <th>
                        <strong>Days Taken</strong>
                        </th>
                        <th>
                        <strong>Balance</strong>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          Annual
                        </td>
                        <td>
                          30
                        </td>
                        <td>
                          0
                        </td>
                        <td>
                          30
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Casual
                        </td>
                        <td>
                          7
                        </td>
                        <td>
                          0
                        </td>
                        <td>
                          30
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 grid-margin">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Recent Leave Requests</h6>
                <!-- <p class="card-description">Add class <code>.table-bordered</code></p> -->
                <div class="table-responsive pt-3">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>
                          Leave Type
                        </th>
                        <th>
                          Date From
                        </th>
                        <th>
                          Resumption Date
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          Casual
                        </td>
                        <td>
                          2021-05-10
                        </td>
                        <td>
                          2021-05-17
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 grid-margin">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Loan Entitlements</h6>
                <!-- <p class="card-description">Add class <code>.table-bordered</code></p> -->
                <div class="table-responsive pt-3">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>
                          Loan Type
                        </th>
                        <th>
                          Loan Date
                        </th>
                        <th>
                          Loan Amount
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                         Personal Loan
                        </td>
                        <td>
                          2021-04-01
                        </td>
                        <td>
                          ₦500,000
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- row -->
  </div>

  <!-- partial:partials/_footer.html -->
  @include('hr.layouts.footer')
  <!-- partial -->

  </div>
  </div>

  <!-- core:js -->
  <script src="{{ asset('vendors/core/core.js') }}"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="{{ asset('js/chartjs.js') }}"></script>

  <script src="{{ asset('vendors/chartjs/Chart.min.js') }}"></script>
  <script src="{{ asset('vendors/jquery.flot/jquery.flot.js') }}"></script>
  <script src="{{ asset('vendors/jquery.flot/jquery.flot.resize.js') }}"></script>
  <script src="{{ asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('vendors/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('vendors/progressbar.js/progressbar.min.js') }}"></script>
  <!-- end plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('vendors/feather-icons/feather.min.js') }}"></script>
  <script src="{{ asset('js/template.js') }}"></script>
  <!-- endinject -->
  <!-- custom js for this page -->
  <script src="{{ asset('js/dashboard.js') }}"></script>
  <script src="{{ asset('js/datepicker.js') }}"></script>
  <!-- end custom js for this page -->
</body>

</html>