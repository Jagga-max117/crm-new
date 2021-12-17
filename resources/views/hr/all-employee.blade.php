@include('hr.layouts.header')
</head>
<body class="sidebar-dark">
    <div class="main-wrapper">
        @include('hr.layouts.sidebar')
        <div class="page-wrapper">                
            @include('hr.layouts.navbar')
            <div class="page-content">
                <h3 class="text-center">ALL EMPLOYEES</h3>
            <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title"></h6>
                                <p class="card-description"></p>
                                <div class="table-responsive">
                                <table id="dataTableExample" class="table text-center">
                                    <thead>
                                        <th>Employee Number</th>
                                        <th>Profile Photo</th>
                                        <th>Full Name</th>
                                        <th>Employee status</th>
                                        <th>Edit</th>
                                        <th>View</th>
                                    </thead>
                                    <tbody>
                                       <tr>
                                            <td>1803</td>
                                            <td class="text-center"><img src="{{ asset('images/hoodie.png') }}" alt=""></td>
                                            <!-- <td id="profile-pic">
                                                <style>
                                                     #profile-pic{
                                                         background-image: url("{{asset('images/hoodie.png')}}");
                                                         background-size: contain;
                                                         background-repeat: no-repeat;
                                                         background-position: center;
                                                     }
                                                </style>
                                            </td> -->
                                            <td>Ade M. Ola</td>
                                            <td>Active</td>
                                            <td><a class="" id="" href="#"> <i data-feather="edit-3"></i> </a></td>
                                            <td><a href="#" class=""><i data-feather="more-horizontal"></i></a></td>
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