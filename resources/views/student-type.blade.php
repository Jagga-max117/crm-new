@include('layouts.header')
<!-- plugin css for this page -->
<link rel="stylesheet" href="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
<!-- end plugin css for this page -->
</head>

<body class="sidebar-dark">
    <div class="main-wrapper">
        @include('layouts.sidebar')
        <div class="page-wrapper">
            @include('layouts.navbar')
            <div class="page-content">

                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Student Type</h4>

                                <p class="card-description"></p>
                                @if(Session::has('Record_deleted'))
                                <div class="alert alert-success" role="alert">
                                    {{Session::get('Record_deleted')}}
                                </div>
                                @endif
                                <form class="cmxform" id="signupForm" method="post" action="{{route('student-type.submit')}}">
                                    @csrf
                                    <fieldset>
                                        <div class="form-group">
                                            @error('student_type')
                                            <div class="col-md-12 alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <label for="studenttype">Enter Student Type</label>
                                            <input id="name" class="form-control" name="student_type" type="text">
                                        </div>
                                        <input class="btn btn-primary" type="submit" value="Submit">
                                    </fieldset>
                                </form>
                                <script>
                                    $("#signupForm").validate();
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title"></h6>
                                <p class="card-description"></p>
                                <div class="table-responsive">
                                    <table id="dataTableExample" class="table">
                                        <thead>
                                            <th>List of Student Type</th>
                                        </thead>
                                        <tbody>
                                            @foreach($studenttypes as $studenttype)
                                            <tr>
                                                <td>{{$studenttype->student_type}}</td>
                                                <td><a href="/delete-student-type/{{$studenttype->student_type_id}}" class="btn btn-danger">Delete</a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts.footer')
        </div>
    </div>
    <script src="{{asset('vendors/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js/form-validation.js')}}"></script>
    <script src="{{ asset('vendors/core/core.js') }}"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <!-- end plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('vendors/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('js/template.js') }}"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="../../../assets/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="../../../assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <!-- end plugin js for this page -->
    <!-- custom js for this page -->
    <script src="../../../assets/js/data-table.js"></script>
    <!-- end custom js for this page -->
</body>

</html>