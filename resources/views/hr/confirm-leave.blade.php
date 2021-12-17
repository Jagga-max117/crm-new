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
                                <h3 class=" align-items-center text-center justify-content-between mb-2">Confirm Leave Application</h3>
                                <p class="card-description"></p>
                                
                                <div class="row profile-body">
                                    <!-- ========================= -->
                                    <div class="col-md-2 left-wrapper">

                                    </div>
                                    <!-- left wrapper start -->
                                    <div class="d-none d-md-block col-md-8 col-xl-8 middle-wrapper">
                                        <div class="card rounded">
                                            <div class="card-body">
                                                <div>
                                                    <div class="mt-3">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label class="tx-11 font-weight-bold mb-0 text-uppercase">Leave Type</label>
                                                                <p class="text-muted">------</p>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label class="tx-11 font-weight-bold mb-0 text-uppercase">Pay Leave Grant</label>
                                                                <p class="text-muted">------</p>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label class="tx-11 font-weight-bold mb-0 text-uppercase">Date From</label>
                                                                <p class="text-muted">------</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-3">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label class="tx-11 font-weight-bold mb-0 text-uppercase">Resumption Date</label>
                                                                <p class="text-muted">------</p>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label class="tx-11 font-weight-bold mb-0 text-uppercase">Contact Address</label>
                                                                <p class="text-muted">Address</p>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label class="tx-11 font-weight-bold mb-0 text-uppercase">Relieving Officer</label>
                                                                <p class="text-muted">Mr. P</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-3">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label class="tx-11 font-weight-bold mb-0 text-uppercase">Approving Officer</label>
                                                                <p class="text-muted">------</p>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label class="tx-11 font-weight-bold mb-0 text-uppercase">Handover Remark</label>
                                                                <p class="text-muted">------</p>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label class="tx-11 font-weight-bold mb-0 text-uppercase">Reason for Leave</label>
                                                                <p class="text-muted">------</p>
                                                            </div>
                                                        </div>
                                                        <div class="mt-3">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="margin-auto">
                                                                        <a href="#" class="btn btn-primary">Submit</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- left wrapper end -->
                                    <div class="col-md-2 right-wrapper">

                                    </div>
                                </div>
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