@include('hr.layouts.header')
</head>
<body class="sidebar-dark">
    <div class="main-wrapper">
        @include('hr.layouts.sidebar')
        <div class="page-wrapper">                
            @include('hr.layouts.navbar')
            <div class="page-content">
                <h3 class="text-center">LOAN HISTORY</h3>
            <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title"></h6>
                                <p class="card-description"></p>
                                <div class="table-responsive">
                                <table id="dataTableExample" class="table text-center">
                                    <thead>
                                        <th>Loan Date</th>
                                        <th>Loan Type</th>
                                        <th>Amount</th>
                                        <th>Tenor</th>
                                        <th>Repayment Amount</th>
                                        <th>File</th>
                                    </thead>
                                    <tbody>
                                       <tr>
                                            <td>18-03-2020</td>
                                            <td>---</td>
                                            <td>₦---</td>
                                            <td>---</td>
                                            <td>---</td>
                                            <td>---</td>
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