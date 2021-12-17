@include('layouts.header')
</head>

<body class="sidebar-dark">
    <div class="main-wrapper">
        @include('layouts.sidebar')
        <div class="page-wrapper">
            @include('layouts.navbar')
            <div class="page-content">
                <div class="row">
                    <div class="card-deck col-12 col-xl-12 stretch-card">
                        <!-- ============================================ -->
                        @foreach($application as $item)
                        <div class="col-12 col-md-2 col-xl-2">
                            <a href="get-profile/{{$item->id}}">
                                <div class="card text-center">
                                    <img src="{{ asset('applicant_images/'.$item->passport) }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>{{$item->firstname}} {{$item->surname}}</strong></h5>
                                        <small>{{$item->date_app_created}}</small>
                                        {{--<p>University of York</p>--}}
                                        {{--<p class="card-text"><small class="text-muted">Accepted</small></p>--}}
                                        <a href="editapplication/{{$item->id}}" class="btn btn-primary">Edit</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                        <!-- ============================================ -->
                    </div>
                </div>
                <!-- <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title"></h6>
                                <p class="card-description"></p>
                                <div class="table-responsive">
                                <table id="dataTableExample" class="table">
                                    <thead>
                                        <th>Title</th>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>Email</th>
                                        <th>Nationality</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                       <tr>
                                            <td>Mr</td>
                                            <td>Ade Ola</td>
                                            <td>Male</td>
                                            <td>ade100@amail.com</td>
                                            <td>Nigeria</td>
                                            <td><a href="#" class="btn btn-primary">View</a></td>
                                        </tr>
                                       <tr>
                                            <td>Mr</td>
                                            <td>Ade Ola</td>
                                            <td>Male</td>
                                            <td>ade100@amail.com</td>
                                            <td>Nigeria</td>
                                            <td><a href="#" class="btn btn-primary">View</a></td>
                                        </tr>
                                       <tr>
                                            <td>Mr</td>
                                            <td>Ade Ola</td>
                                            <td>Male</td>
                                            <td>ade100@amail.com</td>
                                            <td>Nigeria</td>
                                            <td><a href="#" class="btn btn-primary">View</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
					</div>-->
            </div>
            @include('layouts.footer')
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