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
              <form action="{{ route('appreport') }}" method="post" enctype="multipart/form-data">
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
                        <option value="country" id="">Country</option>
                        <option value="program_type" id="">Program Type</option>

                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="gender">Queries</label>
                      <select class="btn btn-secondary form-control" id="gender" name="gender" hidden>
                        <!-- <option class="rcv" value=""></option> -->
                        <option value=""></option>
                        @foreach($genders as $gender)
                        <option value="{{$gender->gender_id}}">{{$gender->gender}}</option>
                        @endforeach
                      </select>
                      <select class="btn btn-secondary form-control" id="country" name="country_of_birth" hidden>
                        <option value=""></option>
                        @foreach($countries as $country)
                        <option value="{{$country->country_id}}">{{$country->country}}</option>
                        @endforeach
                      </select>
                      <select class="btn btn-secondary form-control" id="program_type" name="program_type" hidden>
                        <option value=""></option>
                        @foreach($program_type as $pro)
                        <option value="{{$pro->program_type_id}}">{{$pro->program_type}}</option>
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
                <div class="table-responsive">
              <table id="dataTableExample" class="table mt-4">
                <thead>
                  <tr>
                    <th>Title</th>
                    <th>Full name</th>
                    <th>Email Address</th>
                    <th>Phone no</th>
                    <th>Gender</th>
                    <th>Country</th>
                    <th>Visa</th>
                    <th>Offer</th>
                    <th>Program Type</th>
                    <th>School</th>
                    <th>Course</th>
                    <th>Enrollment</th>
                    <th>Cas</th>
                    <th>T/test</th>
                    
                  </tr>
                </thead>
                <tbody>

                  @if(isset($application))
                  @foreach ($application as $posts)
                  <tr>
                    <!-- <td>{{ $loop->iteration }}</td> -->

                    @foreach($title as $item)
                    @if( $item->title_id === $posts->salutation)
                    <td>{{$item->title}}</td>
                    @endif
                    @endforeach
                    <td>{{$posts->firstname}} {{$posts->surname}}</td>
                    <!-- <td>{{$posts->surname}}</td> -->
                    if(isset($posts->email)){
                        <td>{{$posts->email}}</td>
                    }else{
                      <td>Null</td>
                    }
                  
                    <td>{{$posts->mobile_phone}}</td>
                    <td>{{$posts->gender}}</td>
                    <td>{{$posts->country}}</td>
                    @foreach($visa as $item)
                    @if($item->visa_id === $posts->visa)
                      <td>{{$item->visa}}</td>
                    @endif
                    @endforeach
                    
                  @foreach($offer as $item)
                    @if($item->offer_id === $posts->offer)
                      <td>{{$item->offer}}</td>
                    @endif
                    @endforeach

                    <td>{{$posts->program_type}}</td>

                   @foreach($school as $item)
                    @if($item->school_id === $posts->school)
                      <td>{{$item->school}}</td>
                    @endif
                    @endforeach
                    @foreach($course as $item)
                    @if($item->course_id === $posts->course)
                      <td>{{$item->course}}</td>
                    @endif
                    @endforeach

                    <td>{{$posts->enrollment}}</td>

                    @foreach($cas as $item)
                    @if($item->cas_id === $posts->cas)
                      <td>{{$item->cas}}</td>
                    @endif
                    @endforeach

                    <td>{{$posts->tuberculosis}}</td>


                  </tr>
                  @endforeach
                  @endif

                  @if(isset($application))
                  @foreach ($application as $posts)
                  <tr>
                    <!-- <td>{{ $loop->iteration }}</td> -->

                    @foreach($title as $item)
                    @if( $item->title_id === $posts->salutation)
                    <td>{{$item->title}}</td>
                    @endif
                    @endforeach

                    <td>{{$posts->firstname}} {{$posts->surname}}</td>
                    <!-- <td>{{$posts->surname}}</td> -->
                    <td>{{$posts->email}}</td>
                    <td>{{$posts->mobile_phone}}</td>
                    <td>{{$posts->gender}}</td>
                    <td>{{$posts->country}}</td>
                    @foreach($visa as $item)
                    @if($item->visa_id === $posts->visa)
                      <td>{{$item->visa}}</td>
                    @endif
                    @endforeach

                   @foreach($offer as $item)
                    @if($item->offer_id === $posts->offer)
                      <td>{{$item->offer}}</td>
                    @endif
                    @endforeach
                    <td>{{$posts->program_type}}</td>

                   @foreach($school as $item)
                    @if($item->school_id === $posts->school)
                      <td>{{$item->school}}</td>
                    @endif
                    @endforeach

                    @foreach($course as $item)
                    @if($item->course_id === $posts->course)
                      <td>{{$item->course}}</td>
                    @endif
                    @endforeach

                    <td>{{$posts->enrollment}}</td>
                   @foreach($cas as $item)
                    @if($item->cas_id === $posts->cas)
                      <td>{{$item->cas}}</td>
                    @endif
                    @endforeach
                    <td>{{$posts->tuberculosis}}</td>



                  </tr>
                  @endforeach
                  @endif
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