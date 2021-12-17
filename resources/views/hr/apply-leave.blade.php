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
                                <h4 class="card-title">Gender</h4>
                                <p class="card-description"></p>
                                @if(Session::has('Record_deleted'))
                                <div class="alert alert-success" role="alert">
                                    {{Session::get('Record_deleted')}}
                                </div>
                                @endif
                                <form class="cmxform" id="signupForm" method="post" action="">
                                    @csrf
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="firstname">Leave Type</label>
                                                    <select class="btn btn-secondary form-control" id="category" name="category">
                                                        <option selected disabled></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="category">Pay Leave Grant</label>
                                                    <select class="btn btn-secondary form-control" id="category" name="category">
                                                        <option selected disabled></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="firstname">Date From</label>
                                                    <input type="date" class="form-control" name="dob" id="dob">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="firstname">Resumption Date</label>
                                                    <input type="date" class="form-control" name="dob" id="dob">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="firstname">Contact Address</label>
                                                    <input id="firstname" class="form-control" name="firstname" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="firstname">Relieving Officer</label>
                                                    <select class="btn btn-secondary form-control" id="category" name="category">
                                                        <option selected disabled></option>
                                                    </select>
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
                                                    <label for="firstname">Handover Remark</label>
                                                    <textarea name="handover" id="handover" rows="3" class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="firstname">Reason for Leave</label>
                                                    <textarea name="handover" id="handover" rows="3" class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                            </div>
                                            <div class="col-md-6">
                                                <a href="confirm-leave" class="btn btn-primary mx-2 float-right">Next</a>
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