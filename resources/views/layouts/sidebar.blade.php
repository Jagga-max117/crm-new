@if (!isset(Auth::user()->email))
<script>
  window.location = "/"
</script>
@else
<nav class="sidebar">
  <div class="sidebar-header" style="background-color:#a9aff6">
    <a href="#" class="sidebar-brand">
      <!-- IE<span>IS</span> -->
      <img src="{{ asset('images/logo.png') }}" height="55" alt="IEIS">
    </a>
    <div class="sidebar-toggler not-active">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div class="sidebar-body">
    <ul class="nav">
      <li class="nav-item nav-category">Main</li>
      <li class="nav-item">
        <a href="{{url('dashboard')}}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Dashboard</span>
        </a>
      </li>


      <li class="nav-item nav-category">ADMINISTRATOR</li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#my-students" role="button" aria-expanded="false" aria-controls="my-students">
          <i class="link-icon" data-feather="chevrons-right"></i>
          <span class="link-title">Applicants</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="my-students">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{route('application')}}" class="nav-link">Register Applicant</a>
            </li>
            <li class="nav-item">
              <a href="{{route('mystudents')}}" class="nav-link">Manage Applicant</a>
            </li>
            <li class="nav-item">
              <a href="{{route('applicant-status')}}" class="nav-link">Applicant Status</a>
            </li>
            <li class="nav-item">
              <a href="{{route('track-payment')}}" class="nav-link">Track Payment</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#lead" role="button" aria-expanded="false" aria-controls="lead">
          <i class="link-icon" data-feather="chevrons-right"></i>
          <span class="link-title">Lead</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="lead">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{route('enquiry')}}" class="nav-link">Enquiry</a>
            </li>
            <li class="nav-item">
              <a href="{{route('status')}}" class="nav-link">Leads' Status</a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="hr/home">
          <i class="link-icon" data-feather="monitor"></i>
          <span class="link-title">HR</span>
          <!-- <i class="link-arrow" data-feather="chevron-down"></i> -->
        </a>
        <!-- <div class="collapse" id="hr">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="#" class="nav-link">#</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">#</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">#</a>
                </li>
              </ul>
            </div> -->
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#settings" role="button" aria-expanded="false" aria-controls="settings">
          <i class="link-icon" data-feather="settings"></i>
          <span class="link-title">CRM Settings</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="settings">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="/course" class="nav-link">Course</a>
            </li>
            <li class="nav-item">
              <a href="/entrance-term" class="nav-link">Entrance Term</a>
            </li>
            <li class="nav-item">
              <a href="/gender" class="nav-link">Gender</a>
            </li>
            <li class="nav-item">
              <a href="/country-codes" class="nav-link">Country code</a>
            </li>
            <li class="nav-item">
              <a href="/countries" class="nav-link">Country</a>
            </li>
            <li class="nav-item">
              <a href="/state" class="nav-link">State</a>
            </li>
            <li class="nav-item">
              <a href="/relationship" class="nav-link">Relationship</a>
            </li>
            <li class="nav-item">
              <a href="student-type" class="nav-link">Student Type</a>
            </li>
            <li class="nav-item">
              <a href="/program-type" class="nav-link">Program Type</a>
            </li>
            <li class="nav-item">
              <a href="/title" class="nav-link">Title</a>
            </li>
            <li class="nav-item">
              <a href="/subject-area" class="nav-link">Subject Area</a>
            </li>
            <li class="nav-item">
              <a href="/school" class="nav-link">School</a>
            </li>
            <li class="nav-item">
              <a href="/information" class="nav-link">Information</a>
            </li>
          </ul>
        </div>
      </li>
      @if ((Auth::user()->role_id == 1))
      <li class="nav-item">
        <a href="{{route('createuser')}}" class="nav-link">
          <i class="link-icon" data-feather="user-plus"></i>
          <span class="link-title">Create User</span>
        </a>
      </li>
      @endif
      <li class="nav-item">
        <a href="/report" class="nav-link">
          <i class="link-icon" data-feather="calendar"></i>
          <span class="link-title">Reports</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="/appreport" class="nav-link">
          <i class="link-icon" data-feather="calendar"></i>
          <span class="link-title">Applicant reports</span>
        </a>
      </li>
    </ul>
  </div>
</nav>

@endif