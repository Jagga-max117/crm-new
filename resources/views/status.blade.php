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
                            @if(Session::has('Record_updated'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('Record_updated')}}
                            </div>
                            @endif
                            <h6 class="card-title"></h6>
                            <p class="card-description"></p>
                            <div class="table-responsive">
                                <table id="dataTableExample" class="table">
                                    <thead>

                                        <th>S/N</th>
                                        <th>Title</th>
                                        <th>First_name</th>
                                        <th>Surname</th>
                                        <th>Email</th>
                                        <th>Phone_number</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        <th> <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-white m-b-10 p-l-5"><i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a></th>
                                        <!-- <th>Edit</th> -->
                                    </thead>
                                    <tbody>

                                        @foreach ($enquiry as $posts)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            @foreach($title as $item)
                                            @if( $item->title_id === $posts->salutation)
                                            <td>{{$item->title}}</td>
                                            @endif
                                            @endforeach

                                            <td>{{$posts->first_name}}</td>
                                            <td>{{$posts->surname}}</td>
                                            <td>{{$posts->email}}</td>
                                            <td>{{$posts->phone_number}}</td>
                                            @foreach($status as $items)
                                            @if($items->status_id === $posts->status)
                                            <td>{{$items->status}}</td>
                                            @endif
                                            @endforeach






                                            <td>
                                                <form id="form" action="{{ route('statusupdate')}}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{$posts->id}}">


                                                    <select class="custom-select col-sm-6" name="status" id="status">

                                                        <option value="">select status</option>
                                                        @foreach($status as $post)

                                                        {{-- <a class="dropdown-item" href="{{route('statusupdate')}}">{{$posts->status}}</a> --}}
                                                        <option type="hidden" name="status" value="{{$post->status_id}}">{{$post->status}}</option>
                                                        @endforeach
                                                    </select>
                                                    <!-- <a class="" id="" href="javascript:void(0)" onclick="$('#form').submit()"><i data-feather="edit-3"></i></a> -->
                                                    <button type="submit" class="btn btn-primary">UPDATE</button>


                                                    <a href="editenquiry/{{$posts->id}}" class="btn btn-warning">Edit</a>


                                                </form>
                                            </td>



                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
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

</html>