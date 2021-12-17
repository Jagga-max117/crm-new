@include('layouts.header')
</head>

<body class="sidebar-dark">
    <div class="main-wrapper">
        @include('layouts.sidebar')
        <div class="page-wrapper">
            @include('layouts.navbar')
            <div class="page-content">

                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('report') }}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <h6 class="card-title"></h6>
                                <p class="card-description"></p>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="fromdate">From</label>
                                            <input type="date" class="form-control" name="start_date" id="fromdate">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="todate">To</label> date-picker
                                            <input type="date" class="form-control" name="end_date" id="todate">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Filter</label>
                                            <select class="btn btn-secondary form-control" id="opt" name="">
                                                <option>No filter</option>
                                                <option value="gender" id="">Gender</option>
                                                <option value="course" id="">Course</option>
                                                <option value="school" id="">School</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="gender">Queries</label>
                                            <select class="btn btn-secondary form-control" id="gender" name="gender" hidden>
                                                <!-- <option class="rcv" value=""></option> -->
                                                @foreach($genders as $gender)
                                                <option value="{{$gender->gender_id}}" id="gender">{{$gender->gender}}</option>
                                                @endforeach
                                            </select>
                                            <select class="btn btn-secondary form-control" id="course" name="course" hidden>
                                                @foreach($course as $crs)
                                                <option value="{{$crs->course_id}}">{{$crs->course}}</option>
                                                @endforeach
                                            </select>
                                            <select class="btn btn-secondary form-control" id="school" name="school" hidden>
                                                @foreach($school as $sch)
                                                <option value="{{$sch->school_id}}">{{$sch->school}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        <button class="btn btn-primary col-md-12" type="submit">View</button>
                                    </div>
                                    <div class="col-md-4"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title"></h6>
                            <p class="card-description"></p>
                            <div class="row">
                                <div class="col-md-4">
                                    <a href="{{ URL::to('/customers/pdf') }}" class="btn btn-primary col-md-12" type="button">Export to PDF</a>
                                </div>
                                <div class="col-md-4">
                                    <button class="btn btn-primary col-md-12" type="button">Export to Excel</button>
                                </div>
                                <div class="col-md-4">
                                    <button class="btn btn-primary col-md-12" type="button">Export to Word</button>
                                </div>
                            </div>
                            <table id="dataTableExample" class="table mt-4">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Full name</th>
                                        <th>Email Address</th>
                                        <th>Phone number</th>
                                        <th>Program</th>
                                        <th>course</th>
                                        <th>Subject Area</th>
                                        <th>School</th>
                                        <th>Gender</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @if(isset($enquiry))
                                    @foreach ($enquiry as $posts)
                                    <tr>
                                        <!-- <td>{{ $loop->iteration }}</td> -->

                                        @foreach($title as $item)
                                        @if( $item->title_id === $posts->salutation)
                                        <td>{{$item->title}}</td>
                                        @endif
                                        @endforeach

                                        <td>{{$posts->first_name}} {{$posts->surname}}</td>
                                        <!-- <td>{{$posts->surname}}</td> -->
                                        <td>{{$posts->email}}</td>
                                        <td>{{$posts->phone_number}}</td>
                                        <td>{{$posts->program_type}}</td>
                                        <td>{{$posts->course}}</td>
                                        <td>{{$posts->subject_area}}</td>

                                        <td>{{$posts->school}}</td>
                                        <td>{{$posts->gender}}</td>
                                    </tr>
                                    @endforeach
                                    @endif

                                    @if(isset($enquiryy))
                                    @foreach ($enquiryy as $posts)
                                    <tr>
                                        <!-- <td>{{ $loop->iteration }}</td> -->

                                        @foreach($title as $item)
                                        @if( $item->title_id === $posts->salutation)
                                        <td>{{$item->title}}</td>
                                        @endif
                                        @endforeach

                                        <td>{{$posts->first_name}} {{$posts->surname}}</td>
                                        <!-- <td>{{$posts->surname}}</td> -->
                                        <td>{{$posts->email}}</td>
                                        <td>{{$posts->phone_number}}</td>
                                        <td>{{$posts->program_type}}</td>
                                        <td>{{$posts->course}}</td>
                                        <td>{{$posts->subject_area}}</td>

                                        <td>{{$posts->school}}</td>
                                        <td>{{$posts->gender}}</td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

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
<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script>
    $(document).ready(function() {
        $('#opt').change(function(event) {
            // $(".rcv").text($(this).val());
            op = document.getElementById($(this).val());
            op.removeAttribute("hidden");
        });
    });
</script>