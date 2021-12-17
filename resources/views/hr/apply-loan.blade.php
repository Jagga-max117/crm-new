@include('hr.layouts.header')
</head>
<!-- plugin css for this page -->
<link rel="stylesheet" href="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
<!-- end plugin css for this page -->
</title>

<body class="sidebar-dark">
    <div class="main-wrapper">
        @include('hr.layouts.sidebar')
        <div class="page-wrapper">
            @include('hr.layouts.navbar')
            <div class="page-content">

                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title text-center">Apply for Loan</h3>
                                <p class="card-description"></p>
                                <form class="cmxform" id="signupForm" method="post" action="#">
                                    @csrf
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="firstname">Loan Date</label>
                                                    <input type="date" class="form-control" name="dob" id="dob">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="firstname">Loan Type</label>
                                                    <select class="btn btn-secondary form-control" id="category" name="category">
                                                        <option selected disabled></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="category">Loan Amount</label>
                                                    <input id="firstname" class="form-control" name="firstname" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="category">Tenor Period (In months)</label>
                                                    <input id="firstname" class="form-control" name="firstname" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="category">Repayment Amount</label>
                                                    <input id="firstname" class="form-control" name="firstname" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="firstname">Repayment Start Period</label>
                                                    <input type="date" class="form-control" name="dob" id="dob">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="category">Monthly Repayment</label>
                                                    <input id="firstname" class="form-control" name="firstname" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="firstname">Approving Officer</label>
                                                    <select class="btn btn-secondary form-control" id="category" name="category">
                                                        <option selected disabled></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="firstname">Guarantor Name</label>
                                                    <input id="firstname" class="form-control" name="firstname" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="firstname">Address</label>
                                                    <input id="firstname" class="form-control" name="firstname" type="text">

                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="firstname">Phone Number</label>
                                                    <input id="firstname" class="form-control" name="firstname" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="firstname">Job Title</label>
                                                    <input id="firstname" class="form-control" name="firstname" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="firstname">Email</label>
                                                    <input id="firstname" class="form-control" name="firstname" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <!-- <input type="file" name="updoc" id="updoc" class="file-upload-default"> -->
                                                <label for="firstname">Upload Document</label>
                                                <div class="input-group col-xs-12">
                                                    <input type="text" class="form-control file-upload-info" disabled="" placeholder="Select Document">
                                                    <span class="input-group-append">
                                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                            </div>
                                            <div class="col-md-6">
                                                <a href="confirm-loan" class="btn btn-primary mx-2 float-right">Next</a>
                                                <a href="#" class="btn btn-primary mx-2 float-right">Cancel</a>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('hr.layouts.footer')
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