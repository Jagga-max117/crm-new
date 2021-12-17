<!-- <link rel="stylesheet" href="{{ asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="jquery.steps.min.js"></script>

@include('layouts.header')
</head>

<body class="sidebar-dark">
  <div class="main-wrapper">
    @include('layouts.sidebar')
    <div class="page-wrapper">
      @include('layouts.navbar')
      <div class="page-content">
        <div class="container">

          <div class="row">
            <div class="col-md-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  @if(Session::has('Record_updated'))
                  <div class="alert alert-success" role="alert">
                    {{Session::get('Record_updated')}}
                  </div>
                  @endif

                  <form class="cmxform" id="signupform" method="POST" action="{{route('updateapplication')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="application_id" value="{{$application[0]->main_id}}">
                    <!-- {{--@csrf--}} -->
                    <h4 class="card-title">Application Form</h4>

                    <section>
                                            <legend>Application Details</legend>
                                            <fieldset>
                                                <div class="form-group">
                                                    <label for="salutation">Salutation</label>
                                                    <select class="btn btn-secondary form-control" id="salutation" name="salutation">
                                                         <option value="">Select Title</option>
                                                            @if(isset($title))
                                                            @foreach($title as $item)
                                                            <option value="{{ $item->title_id}}" {{ $item->title_id == $application[0]->title ? 'selected' : '' }}>{{$item->title}}>{{$item->title}}</option>
                                                            @endforeach
                                                            @endif
                                                        <!-- <option value="student">Student</option> -->

                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="surname">Surname</label>
                                                    <input id="surname" class="form-control" name="surname" type="text" value ="{{ $application[0]->surname }}">
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="firstname">First name</label>
                                                            <input id="firstname" class="form-control" name="firstname" type="text" value="{{ $application[0]->firstname }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="middlename">Middle name</label>
                                                            <input id="middlename" class="form-control" name="middlename" type="text" value="{{ $application[0]->middlename }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="dob">Date of birth</label>
                                                            <input type="date" class="form-control" name="dob" id="dob" value="{{ $application[0]->date }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="email">Email</label>
                                                            <input id="email" class="form-control" name="email" type="email" value="{{ $application[0]->email }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="gender">Gender</label>
                                                    <select class="btn btn-secondary form-control" id="gender" name="gender">
                                                        <option selected disabled></option>
                                                        @foreach($genders as $gender)
                                                         <option value="{{$item->gender_id}}" {{ $item->gender_id == $application[0]->gender ? 'selected' : '' }}>{{$item->gender}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <!-- <label for="confirm_password">Confirm password</label> -->
                                                    <label>Mobile Phone:</label>
                                                    <div class="row">
                                                        {{--<div class="col-md-4">
                                                                <!-- <input class="form-control mb-4 mb-md-0" data-inputmask-alias="(+999) 9999-9999"/> -->
                                                                <select class="btn btn-secondary form-control" id="mobileshor" name="mobileshortcode">
                                                                    <option selected disabled></option>
                                                                    @foreach ($countrycodes as $item)
                                                                    <option value="{{$item->country_code_id}}">{{$item->country_code}}</option>
                                                        @endforeach
                                                        </select>
                                                    </div>
                                                </div>--}}
                                                <div class="col-md-8">
                                                    <input id="mobilephone" class="form-control" name="mobilephone" type="number" value="{{ $application[0]->mobile_phone }}">
                                                </div>

                                                <!-- </div> -->
                                                <!-- </div> -->
                                                <div class="form-group">
                                                    <!-- <label for="confirm_password">Confirm password</label> -->
                                                    <label>Home Phone:</label>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <input id="homephone" class="form-control" name="homephone" type="number" value="{{ $application[0]->home_phone }}">
                                                        </div>
                                                    </div>
                                                    <!-- </div> -->
                                                    <!-- </div> -->
                                                    <div class="form-group">
                                                        <label>Applicant Photogragh(optional)</label>
                                                        <div class="col-md-12">
                                                            <div class="text-center">
                                                            <label for="" class="custom-file-label">UPLOAD A LEVEL (PDF only*)</label>
                                                            <input type="file" name="passport"  class="custom-file-input" id="passport"  accept="image/*" onchange = "previewFile(this,'previewPassport', 'passport')">
                                                            <embed id="previewPassport" style="width: 240px;margin-top:20px" @if(isset($application[0]->passport)) src="{{asset('applicant_images/'.$application[0]->passport)}}" @endif/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </section>

                                        <!-- <h2>Applicant Address</h2> -->
                                        <section>
                                            <legend>Application Address</legend>
                                            <fieldset>
                                                <div class="form-group">
                                                    <label for="birthplace">Birth Place</label>
                                                    <input id="birthplace" class="form-control" name="birth_place" type="text" value="{{ $application[0]->birth_place }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="countryofbirth">Country of Birth / Nationality</label>
                                                    <select class="btn btn-secondary form-control" id="country_id" name="countryofbirth">
                                                         <option selected disabled></option>
                                                        @foreach($countries as $country)
                                                         <option value="{{$item->country_id}}" {{ $item->country_id == $application[0]->country_of_birth ? 'selected' : '' }}>{{$item->country}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="citizenof">Citizen of</label>
                                                    <select class="btn btn-secondary form-control" id="country_id" name="citizenof">
                                                        <option selected disabled></option>
                                                        @foreach($countries as $country)
                                                       <option value="{{$item->country_id}}" {{ $item->country_id == $application[0]->citizenof ? 'selected' : '' }}>{{$item->country}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="homestreetaddress">Home Street Address</label>
                                                    <input id="homestreetaddress" class="form-control" name="homestreetaddress" type="text" value="{{ $application[0]->home_street_address }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="city">City</label>
                                                    <input id="city" class="form-control" name="city" type="text" value="{{ $application[0]->home_street_address }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="postalcode">Postal code</label>
                                                    <input id="postalcode" class="form-control" name="postalcode" type="text" value="{{ $application[0]->postal_code }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="countryofresidence">Country of Residence</label>
                                                    <select class="btn btn-secondary form-control" id="country_id" name="countryofresidence">
                                                        <option selected disabled></option>
                                                        @foreach($countries as $country)
                                                        <option value="{{$country->country_id}}" {{ $item->country_id == $application[0]->country_of_residence ? 'selected' : '' }}>{{$country->country}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </fieldset>
                                        </section>

                                        <!-- <h2>Requirements</h2> -->
                                        <section>
                                            <legend>Requirements</legend>
                                            <fieldset>
                                                <div class="form-group row">
                                                    <div class="col-md-6">
                                                        <label>Foundation / A Level</label>
                                                        <div class="col-md-12">
                                                            <div class="text-center">
                                                            <label for="" class="custom-file-label">UPLOAD A LEVEL (PDF only*)</label>
                                                            <input type="file" name="alevel"  class="custom-file-input" id="alevel"  accept="doc/*" onchange = "previewFile(this,'previewAlevel', 'alevel')">
                                                            <embed id="previewAlevel" style="width: 240px;margin-top:20px" @if(isset($application[0]->alevel)) src="{{asset('documents/'.$application[0]->alevel)}}" @endif/>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Academic Qualification (SSCE)</label>
                                                        <div class="col-md-12">
                                                            <div class="text-center">
                                                            <label for="" class="custom-file-label">UPLOAD SSCE (PDF only*)</label>
                                                            <input type="file" name="ssce"  class="custom-file-input" id="ssce"  accept="doc/*" onchange = "previewFile(this,'previewSsce', 'ssce')">
                                                            <embed id="previewSsce" style="width: 240px;margin-top:20px" @if(isset($application[0]->ssce)) src="{{asset('documents/'.$application[0]->ssce)}}" @endif/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-6">
                                                        <label>Letter of Sponsor</label>
                                                       <div class="col-md-12">
                                                            <div class="text-center">
                                                            <label for="" class="custom-file-label">UPLOAD SPONSOR LETTER (PDF only*)</label>
                                                            <input type="file" name="letterofsponsor"  class="custom-file-input" id="letterofsponsor"  accept="doc/*" onchange = "previewFile(this,'previewletterofsponsor', 'letterofsponsor')">
                                                            <embed id="previewletterofsponsor" style="width: 240px;margin-top:20px" @if(isset($application[0]->letterofsponsor)) src="{{asset('documents/'.$application[0]->letterofsponsor)}}" @endif/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Reference Letter (Academic)</label>
                                                        <div class="col-md-12">
                                                            <div class="text-center">
                                                            <label for="" class="custom-file-label">UPLOAD Reference Letter (PDF only*)</label>
                                                            <input type="file" name="refletter"  class="custom-file-input" id="refletter"  accept="doc/*" onchange = "previewFile(this,'previewRefletter', 'refletter')">
                                                            <embed id="previewRefletter" style="width: 240px;margin-top:20px" @if(isset($application[0]->refletter)) src="{{asset('documents/'.$application[0]->refletter)}}" @endif/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-6">
                                                        <label>Reference Letter (Work)</label>
                                                        <div class="col-md-12">
                                                            <div class="text-center">
                                                            <label for="" class="custom-file-label">UPLOAD Ref letter work (PDF only*)</label>
                                                            <input type="file" name="refletterwork"  class="custom-file-input" id="refletterwork"  accept="doc/*" onchange = "previewFile(this,'previewRefletterwork', 'refletterwork')">
                                                            <embed id="previewRefletterwork" style="width: 240px;margin-top:20px" @if(isset($application[0]->refletterwork)) src="{{asset('documents/'.$application[0]->refletterwork)}}" @endif/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Copy of Testimonial</label>
                                                       <div class="col-md-12">
                                                            <div class="text-center">
                                                            <label for="" class="custom-file-label">UPLOAD Testimonial (PDF only*)</label>
                                                            <input type="file" name="testimonial"  class="custom-file-input" id="testimonial"  accept="doc/*" onchange = "previewFile(this,'previewTestimonial', 'testimonial')">
                                                            <embed id="previewTestimonial" style="width: 240px;margin-top:20px" @if(isset($application[0]->testimonial)) src="{{asset('documents/'.$application[0]->testimonial)}}" @endif/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>English Proficiency Test Results (IELTS, TOEFL, PTE and otheres if applicable)</label>
                                                   <div class="col-md-12">
                                                            <div class="text-center">
                                                            <label for="" class="custom-file-label">UPLOAD English test (PDF only*)</label>
                                                            <input type="file" name="proficiency"  class="custom-file-input" id="proficiency"  accept="doc/*" onchange = "previewFile(this,'previewProficiency', 'proficiency')">
                                                            <embed id="previewProficiency" style="width: 240px;margin-top:20px" @if(isset($application[0]->proficiency)) src="{{asset('documents/'.$application[0]->proficiency)}}" @endif/>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="personalstatement">Personal Statement or Letter of Intent</label>
                                                    <textarea class="form-control" id="personalstatement" rows="5" type="text" value="{{ $application[0]->personal_statement }}"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Data Page of International Passport </label>
                                                        <div class="col-md-12">
                                                            <div class="text-center">
                                                            <label for="" class="custom-file-label">UPLOAD Data page (PDF only*)</label>
                                                            <input type="file" name="datapage"  class="custom-file-input" id="datapage"  accept="doc/*" onchange = "previewFile(this,'previewDatapage', 'datapage')">
                                                            <embed id="previewDatapage" style="width: 240px;margin-top:20px" @if(isset($application[0]->datapage)) src="{{asset('documents/'.$application[0]->datapage)}}" @endif/>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="appfee">Application Fee (if available)</label>
                                                            <input id="appfee" class="form-control" name="appfee" type="text" value="{{ $application[0]->app_fee }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="servicefee">Service Fee</label>
                                                            <input id="servicefee" class="form-control" name="servicefee" type="text" value="{{ $application[0]->service_fee }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="form-group row">
                                                    <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="appfee">Passport Number</label>
                                                        <input id="passNum" class="form-control" name="passNum" type="text" value="{{ $application[0]->passport_number }}">
                                                    </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </section>
                                        <!-- <h2>Program Type</h2> -->
                                        <section>
                                            <legend>Program Type</legend>
                                            <div class="form-group">
                                                <label for="progtype">Select Program Type</label>
                                                <select class="btn btn-secondary form-control" name="progtype" id="progtype">
                                                <option selected disabled></option>
                                                        @foreach($programs as $item)
                                                            <option value="{{$item->program_type_id}}" {{ $item->program_type_id == $application[0]->program_type ? 'selected' : '' }}>{{$item->program_type}}</option>
                                                        @endforeach
                                                </select>
                                            </div>

                                             <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="school">Select School</label>
                                                            <select class="btn btn-secondary form-control" name="school" id="school">
                                                                <option selected disabled></option>
                                                        @foreach($school as $item)
                                                        <option value="{{$item->school_id}}" {{ $item->school_id == $application[0]->school ? 'selected' : '' }}>{{$item->school}}</option>
                                                        @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="course">Select Course</label>
                                                            <select class="btn btn-secondary form-control" name="course" id="course">
                                                                <option selected disabled></option>
                                                        @foreach($course as $item)
                                                        <option value="{{$item->course_id}}" {{ $item->course_id == $application[0]->course ? 'selected' : '' }}>{{$item->course}}</option>
                                                        @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                            <div class="form-group">
                                                <label for="postalcodenok">Student Identification</label>
                                                <input id="student_id" class="form-control" name="student_number" type="text" value="{{ $application[0]->student_number }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="progtype">Offer type</label>
                                                <select class="btn btn-secondary form-control" name="offer" id="offer">
                                                     <option selected disabled></option>
                                                        @foreach($offer as $item)
                                                       <option value="{{$item->offer_id}}" {{ $item->offer_id == $application[0]->offer ? 'selected' : '' }}>{{$item->offer}}</option>
                                                        @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="progtype">Visa Approval</label>
                                                <select class="btn btn-secondary form-control" name="visa" id="visa">
                                                    <option selected disabled></option>
                                                        @foreach($visa as $item)
                                                       <option value="{{$item->visa_id}}" {{ $item->visa_id == $application[0]->visa ? 'selected' : '' }}>{{$item->visa}}</option>
                                                        @endforeach
                                                </select>
                                            </div>

                                            <!-- <div class="two"> -->
                                                <div class="form-group">
                                                <div class="col-md-12">
                                                    <label>Degree Certificate or Statement of Result</label>
                                                    <div class="col-md-12">
                                                            <div class="text-center">
                                                            <label for="" class="custom-file-label">UPLOAD Degree certs (PDF only*)</label>
                                                            <input type="file" name="degreecert"  class="custom-file-input" id="degreecert"  accept="doc/*" onchange = "previewFile(this,'previewDegreecert', 'degreecert')">
                                                            <embed id="previewDegreecert" style="width: 240px;margin-top:20px" @if(isset($application[0]->degreecert)) src="{{asset('documents/'.$application[0]->degreecert)}}" @endif/>
                                                            </div>
                                                        </div>
                                                </div>
                                                </div>

                                                <div class="form-group">
                                                <div class="col-md-12">
                                                    <label>Updated CV</label>
                                                   <div class="col-md-12">
                                                            <div class="text-center">
                                                            <label for="" class="custom-file-label">UPLOAD A LEVEL (PDF only*)</label>
                                                            <input type="file" name="cv"  class="custom-file-input" id="cv"  accept="doc/*" onchange = "previewFile(this,'previewcv', 'cv')">
                                                            <embed id="previewCv" style="width: 240px;margin-top:20px" @if(isset($application[0]->cv)) src="{{asset('documents/'.$application[0]->cv)}}" @endif/>
                                                            </div>
                                                        </div>
                                                </div>
                                                </div>
                                                <!-- <input type="submit" name="submit" class="submit action-button" value="Submit" /> -->
                                            <!-- </div> -->
                                            </fieldset>
                                        </section>
                                        <!-- </div> -->
                                        <!-- others -->
                                        <section>
                                            <legend>Other Requirements</legend>
                                            <fieldset>
                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <label>Diploma Transcript</label>
                                                       <div class="col-md-12">
                                                            <div class="text-center">
                                                            <label for="" class="custom-file-label">UPLOAD Transcript (PDF only*)</label>
                                                            <input type="file" name="diplomatranscript"  class="custom-file-input" id="diplomatranscript"  accept="doc/*" onchange = "previewFile(this,'previewDiplomaTranscript', 'diplomatranscript')">
                                                            <embed id="previewDiplomaTranscript" style="width: 240px;margin-top:20px" @if(isset($application[0]->diplomatranscript)) src="{{asset('documents/'.$application[0]->diplomatranscript)}}" @endif/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-6">
                                                        <label>Undergrad Transcript</label>
                                                       <div class="col-md-12">
                                                            <div class="text-center">
                                                            <label for="" class="custom-file-label">UPLOAD Transcript (PDF only*)</label>
                                                            <input type="file" name="undergradtranscript"  class="custom-file-input" id="undergradtranscript"  accept="doc/*" onchange = "previewFile(this,'previewUndergradTranscript', 'undergradtranscript')">
                                                            <embed id="previewUndergradTranscript" style="width: 240px;margin-top:20px" @if(isset($application[0]->undergradtranscript)) src="{{asset('documents/'.$application[0]->undergradtranscript)}}" @endif/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Offer Letter</label>
                                                        <div class="col-md-12">
                                                            <div class="text-center">
                                                            <label for="" class="custom-file-label">UPLOAD A LEVEL (PDF only*)</label>
                                                            <input type="file" name="offerletter"  class="custom-file-input" id="offerletter"  accept="doc/*" onchange = "previewFile(this,'previewOfferletter', 'offerletter')">
                                                            <embed id="previewOfferletter" style="width: 240px;margin-top:20px" @if(isset($application[0]->offerletter)) src="{{asset('documents/'.$application[0]->offerletter)}}" @endif/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-6">
                                                        <label>Tuition</label>
                                                       <div class="col-md-12">
                                                            <div class="text-center">
                                                            <label for="" class="custom-file-label">UPLOAD Tuition (PDF only*)</label>
                                                            <input type="file" name="tuition"  class="custom-file-input" id="tuition"  accept="doc/*" onchange = "previewFile(this,'previewTuition', 'tuition')">
                                                            <embed id="previewTuition" style="width: 240px;margin-top:20px" @if(isset($application[0]->tuition)) src="{{asset('documents/'.$application[0]->tuition)}}" @endif/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Tubercolosis Report</label>
                                                        <div class="col-md-12">
                                                            <div class="text-center">
                                                            <label for="" class="custom-file-label">UPLOAD Tubercolosis report (PDF only*)</label>
                                                            <input type="file" name="tuberculosis"  class="custom-file-input" id="tuberculosis"  accept="doc/*" onchange = "previewFile(this,'previewTuberculosis', 'tuberculosis')">
                                                            <embed id="previewTuberculosis" style="width: 240px;margin-top:20px" @if(isset($application[0]->tuberculosis)) src="{{asset('documents/'.$application[0]->tuberculosis)}}" @endif/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <div class="col-md-6">
                                                        <label>Enrollment</label>
                                                        <div class="col-md-12">
                                                            <div class="text-center">
                                                            <label for="" class="custom-file-label">UPLOAD Enrollment (PDF only*)</label>
                                                            <input type="file" name="enrollment"  class="custom-file-input" id="enrollment"  accept="doc/*" onchange = "previewFile(this,'previewEnrollment', 'enrollment')">
                                                            <embed id="previewEnrollment" style="width: 240px;margin-top:20px" @if(isset($application[0]->enrollment)) src="{{asset('documents/'.$application[0]->enrollment)}}" @endif/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="dob">Date Created</label>
                                                            <input type="date" class="form-control" name="date_app_created" id="datecreated" value="{{ $application[0]->date_app_created }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="progtype">Confirmation & Acceptance of Study</label>
                                                    <select class="btn btn-secondary form-control" name="cas" id="cas">
                                                        <option selected disabled></option>
                                                       <option selected disabled></option>
                                                        @foreach($cas as $item)
                                                       <option value="{{$item->cas_id}}" {{ $item->cas_id == $application[0]->cas ? 'selected' : '' }}>{{$item->cas}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <button class="col-xs-12 btn btn-primary" type="submit">Update</button>
                                            </fieldset>
                                        </section>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts.footer')
        </div>
    </div>
    <script src="{{ asset('vendors/core/core.js') }}"></script>
    <!-- <script src="{{ asset('vendors/jquery-validation/jquery.validate.min.js') }}"></script> -->

    <!-- <script src="{{ asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
	<script src="{{ asset('js/datepicker.js') }}"></script> -->
    <!-- ------- -->
    <!-- <script src="{{ asset('js/inputmask.js') }}"></script>
    <script src="{{ asset('vendors/inputmask/jquery.inputmask.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery-tags-input/jquery.tagsinput.min.js') }}"></script>
    <script src="{{ asset('js/tags-input.js') }}"></script> -->

    <!-- --------- -->
    <!-- endinject -->
    <!-- plugin js for this page -->
    <!-- end plugin js for this page -->
    <!-- inject:js -->
    <!-- <script src="{{ asset('vendors/feather-icons/feather.min.js') }}"></script> -->
    <!-- <script src="{{ asset('js/template.js') }}"></script> -->
    <!-- endinject -->
    <!-- custom js for this page -->
    <!-- <script src="{{ asset('js/wizard.js') }}"></script> -->
    <!-- custom js for this page -->
    <!-- end custom js for this page -->
    <!-- plugin js for this page -->
    <!-- <script src="{{ asset('vendors/jquery-steps/jquery.steps.min.js') }}"></script> -->
    <!-- end plugin js for this page -->
    <!-- inject:js -->
    <!-- <script src="../../../assets/vendors/feather-icons/feather.min.js"></script> -->
    <!-- <script src="../../../assets/js/template.js"></script> -->
    <!-- endinject -->
    <!-- <script src="{{ asset('js/file-upload.js') }}"></script> -->
    <!-- custom js for this page -->
    <!-- <script src="../../../assets/js/wizard.js"></script> -->
    <!-- <script src="{{ asset('js/form-validation.js') }}"></script> -->

    <!-- end custom js for this page -->

    <!-- preview passport usin javascript -->
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
    <script>
        function previewFile(input, name, collect) {
            var file = $("#" + collect).get(0).files[0];
            var name = name;
            if (file) {
                var reader = new FileReader();
                reader.onload = function() {
                    $('#' + name).attr("src", reader.result);
                    $('#' + name).addClass("img-thumbnail text-center");
                }
                reader.readAsDataURL(file)
            } else {
                $('#' + name).removeAttr("src");
                $('#' + name).removeClass("img-thumbnail text-center");
            }
        }
    </script>


</body>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
<script src="{{ asset('js/app.js') }}"></script>
<script>
    jQuery(document).ready(function() {
        jQuery('select[name="countrynok"]').on('change', function() {
            var country_id = jQuery(this).val();
            if (country_id) {
                jQuery.ajax({
                    url: '/getstate/' + country_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        jQuery('select[name="provincenok"]').empty();
                        jQuery.each(data, function(key, value) {
                            $('select[name="provincenok"]').append('<option value="' +
                                key + '">' + value + '</option>');
                        });
                    }
                });
            } else {
                $('select[name="provincenok"]').empty();
            }
        });
    });
</script>

</html>