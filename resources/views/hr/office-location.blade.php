@include('hr.layouts.header')
</head>
<body class="sidebar-dark">
    <div class="main-wrapper">
        @include('hr.layouts.sidebar')
        <div class="page-wrapper">                
            @include('hr.layouts.navbar')
            <div class="page-content">
                <h3 class="text-center">OFFICE LOCATION</h3>
            <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title"></h6>
                <h4 class="text-right"><a href="#" class="text-right btn btn-primary">Add New</a></h4>
                                <p class="card-description"></p>
                                <div class="table-responsive">
                                    <table id="dataTableExample" class="table text-center">
                                        <thead>
                                            <th>Branch Name</th>
                                            <th>Location</th>
                                            <th>Company</th>
                                            <th>Branch Type</th>
                                            <th>State</th>
                                            <th></th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>---</td>
                                                <td>---</td>
                                                <td>---</td>
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