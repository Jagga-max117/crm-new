@include('hr.layouts.header')
</head>

<body class="sidebar-dark">
    <div class="main-wrapper">
        @include('hr.layouts.sidebar')
        <div class="page-wrapper">
            @include('hr.layouts.navbar')
            <div class="page-content">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title"></h6>
                            <p class="card-description">
                            <h4>My Loan Applications</h4>
                            <a href="apply-leave" class="float-right btn btn-primary">Apply for Loan</a href="apply-leave">
                            </p>
                            <div class="table-responsive">
                                <table id="dataTableExample" class="table">
                                    <thead class="text-center">
                                        <th>ID</th>
                                        <th>Leave Type</th>
                                        <th>Start Date</th>
                                        <th>Resumption Date</th>
                                        <th>Day Applied</th>
                                        <th>Pay Leave Grant</th>
                                        <th>Reliever</th>
                                        <th rowspan="2">Actions</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2</td>
                                            <td>Casual</td>
                                            <td>2021-05-10</td>
                                            <td>2021-05-20</td>
                                            <td>10</td>
                                            <td>Yes</td>
                                            <td>Charles</td>
                                            <td>
                                                <div class="dropdown">
                                                    <!-- <a href="#"  class="dropdown-toggle" type="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i data-feather="edit-3"></i> </a> -->
                                                    <a class="dropdown-toggle" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i data-feather="edit-3"></i> </a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                        <a class="dropdown-item" href="#">Approved</a>
                                                        <a class="dropdown-item active" href="#">Pending</a>
                                                        <a class="dropdown-item" href="#">Declined</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <!-- <a href="#"  class="dropdown-toggle" type="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i data-feather="edit-3"></i> </a> -->
                                                    <a href="#" id="" aria-expanded="false"> <i data-feather="more-horizontal"></i> </a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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
    <!-- custom js for this page -->
    <!-- end custom js for this page -->
</body>

</html>