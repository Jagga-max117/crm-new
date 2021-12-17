@include('layouts.header')

<body class="sidebar-dark">
  <div class="main-wrapper">
    @include('layouts.sidebar')
    <div class="page-wrapper">
      @include('layouts.navbar')
      <div class="page-content">
        @if(Session::has('Record_updated'))
        <div class="alert alert-success">
          {{Session::get('Record_updated')}}
        </div>
        @endif
        <div class="row">
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h3 class="card-title">Enquiry</h3>
                <form class="cmxform" id="signupform" method="POST" action="{{route('updateenquiry')}}" enctype="multipart/form-data">
                  {{csrf_field()}}
                  <input type="hidden" name="main_id" value="{{$enquiry[0]->main_id}}">
                  <div class="row">
                    <div class="col-md-6">

                      <fieldset>
                        <div class="form-group">
                          <label for="name">Salutation</label>
                          <select name="salutation" class="btn btn-secondary form-control" id="salutation">

                            <option value="">Title</option>
                            @foreach($title as $item)
                            <option value="{{ $item->title_id }}" {{$item->title_id == $enquiry[0]->salutation ? 'selected' : ''}}>{{$item->title}}</option>
                            @endforeach

                          </select>
                        </div>
                        <div class="form-group">
                          <label for="fname">Firstname</label>
                          <input id="first_name" class="form-control" name="first_name" type="text" value="{{ $enquiry[0]->first_name }}">
                        </div>
                        <div class="form-group">
                          <label for="email">Email Address</label>
                          <input id="email" class="form-control" name="email" type="email" value="{{ $enquiry[0]->email }}">
                        </div>
                        <div class="form-group">
                          <label for="gender">Gender</label>
                          <select class="btn btn-secondary form-control" id="gender" name="gender">
                            <option value""></option>
                            @foreach($genders as $item)
                            <option value="{{$item->gender_id}}" {{$item->gender_id == $enquiry[0]->gender_id ? 'selected' : ''}}>{{$item->gender}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="name">Proposed Level of Study</label>
                          <select name="study_level" id="study_level" class="btn btn-secondary form-control">
                            <option value="">Level</option>
                            @foreach($program_type as $item)
                            <option value="{{ $item->program_type_id }}" {{$item->program_type_id == $enquiry[0]->study_level ? 'selected' : ''}}>{{ $item->program_type }}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="name">Proposed Course of Study</label>
                          <select class="btn btn-secondary form-control" name="course_of_study" id="course_of_study">
                            <option value="">Course</option>
                            @foreach($course as $item)
                            <option value="{{ $item->course_id }}" {{$item->course_id == $enquiry[0]->course_of_study ? 'selected' : ''}}>{{$item->course}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="name">How did you hear about IEIS?</label>
                          <select class="btn btn-secondary form-control" name="how_did_you_hear_about_ieis" id="how_did_you_hear_about_ieis">
                            @foreach($information as $item)
                            <option value="">About</option>
                            <option value="{{ $item->information_id }}" {{$item->information_id == $enquiry[0]->how_did_you_hear_about_ieis ? 'selected' : ''}}>{{$item->information}}</option>
                            @endforeach
                            <!-- <option value="student">Miss</option> -->
                          </select>
                        </div>
                      </fieldset>
                    </div>
                    <div class="col-md-6">
                      <fieldset>
                        <div class="form-group">
                          <label for="name">Surname</label>
                          <input id="surname" class="form-control" name="surname" type="text" value="{{ $enquiry[0]->surname }}">
                        </div>
                        <div class="form-group">
                          <label for="fname">Middle name</label>
                          <input id="middle_name" class="form-control" name="middle_name" type="text" value="{{ $enquiry[0]->middle_name }}">
                        </div>
                        <div class="form-group">
                          <label for="phone">Phone Number</label>
                          <input id="phone_number" class="form-control" name="phone_number" type="numeric" value="{{ $enquiry[0]->phone_number }}">
                        </div>
                        <div class="form-group">
                          <label for="name">Area of Subject Interest</label>
                          <select class="btn btn-secondary form-control" name="subject_area" id="subject_area">
                            @foreach($subject_area as $item)
                            <option value="">Subject</option>
                            <option value="{{ $item->subject_area_id }}" {{$item->subject_area_id == $enquiry[0]->subject_area_id ? 'selected' : ''}}>{{$item->subject_area}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="name">Preferred School</label>
                          <select class="btn btn-secondary form-control" name="preferred_school" id="preferred_school">
                            <option value=""></option>
                            @foreach($school as $item)
                            <option value="{{ $item->school_id }}" {{$item->school_id == $enquiry[0]->preferred_school ? 'selected' : ''}}>{{$item->school}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="name">How did you hear about the preferred School?</label>
                          <select class="btn btn-secondary form-control" name="how_did_you_hear_about_school" id="how_did_you_hear_about_school">
                            <option value="">About School</option>
                            @foreach($information as $item)
                            <option value="{{ $item->information_id }}" {{$item->information_id == $enquiry[0]->how_did_you_hear_about_school ? 'selected' : ''}}>{{$item->information}}</option>
                            <!-- <option value="student">Miss</option> -->
                            @endforeach
                          </select>
                        </div>
                      </fieldset>
                    </div>

                  </div>
                  <input class="btn btn-primary float-right" type="submit" value="Update">
                </form>
                {{--@dd($enquiry[0]->gender)--}}
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