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
                            <h3 class="text-center">APPLICANT STATUS</h3>
                            <p class="card-description"></p>
                            <table id="dataTableExample" class="table mt-4 table-responsive">
                                <thead>
                                    <tr>
                                        <!-- <th>TITLE</th> -->
                                        <!-- <th scope="col"></th> -->
                                        <th scope="col">FULL NAME</th>
                                        <th scope="col">SCHOOL</th>
                                        <th scope="col">PROGRAM</th>
                                        <th scope="col">COURSE</th>
                                        <th scope="col">GENDER</th>
                                        
                                        <th scope="col">STUDENT NUMBER</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">VISA</th>
                                        <th scope="col">OFFER</th>

                                        <!-- <th>ACTION</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(isset($application))
                                    @foreach ($application as $posts)
                                    <tr>
                                        <!-- <th scope="row"></th> -->
                                        {{-- @foreach($title as $item)
                                        @if( $item->title_id === $posts->salutation)
                                        <td >{{$item->title}}</td>
                                        @endif
                                        @endforeach--}}


                                        <td>{{$posts->firstname}} {{$posts->surname}}</td>
                                        <td>
                                            University of York
                                        </td>
                                        @if(isset($posts->program_type))
                                        @foreach($program_type as $item)
                                        @if($item->program_type_id === $posts->program_type)
                                        <td>{{$item->program_type}}</td>
                                        @endif
                                        @endforeach
                                        @else
                                        <td>NIL</td>
                                        @endif
                                        <td>
                                            Computer Science
                                        </td>
                                        @if(isset($posts->gender))
                                        @foreach($genders as $item)
                                        @if( $item->gender_id === $posts->gender)
                                        <td>{{$item->gender}}</td>
                                        @endif
                                        @endforeach
                                        @else
                                        <td>NIL</td>
                                        @endif

                                        <td>
                                            NIL
                                        </td>
                                         @if(isset($posts->date_app_created))
                                        @foreach($application as $item)
                                        @if( $item->date_app_created === $posts->date_app_created)
                                        <td>{{$item->date_app_created}}</td>
                                        @endif
                                        @endforeach
                                        @else
                                        <td>NIL</td>
                                        @endif
                                        
                                        <td>
                                            NIL
                                        </td>

                                       


                                        @if(isset($posts->visa))
                                        @foreach($visa as $item)
                                        @if( $item->visa_id === $posts->visa)
                                        <td>{{$item->visa}}</td>
                                        @endif
                                        @endforeach
                                        @else
                                        <td>NIL</td>
                                        @endif

                                        @if(isset($posts->offer))
                                        @foreach($offer as $item)
                                        @if( $item->offer_id === $posts->offer)
                                        <td>{{$item->offer}}</td>
                                        @endif
                                        @endforeach
                                        @else
                                        <td>NIL</td>
                                        @endif
                                        {{--<form id="form" action="{{ route('statusupdate')}}" method="post">
                                        <input type="hidden" name="application_id" value="{{$application[0]->main_id}}">
                                        @csrf
                                        <td>


                                            <select class="custom-select col-lg" name="offer" id="offer" placeholder="Select">
                                                <option value="">SELECT OFFER</option>
                                                @foreach($offer as $item)
                                                <option value="{{ $item->offer_id }}" {{$item->offer_id == $application[0]->offer ? 'selected' : ''}}>{{$item->offer}}</option>
                                                @endforeach

                                            </select>
                                        </td>

                                        <!-- <td>
                                                <a href="/delete-course/" class="btn btn-warning">Update</a>
                                            </td> -->
                                        </form>--}}

                                    </tr>
                                    @endforeach
                                    @endif

                                </tbody>
                            </table>
                            <div class="row justify-content-center">
                                {!! $application->links('pagination::bootstrap-4') !!}
                            </div>
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