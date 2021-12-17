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
        <a class="nav-link" data-toggle="collapse" href="#dashboard" role="button" aria-expanded="false" aria-controls="dashboard">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Dashboard</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="dashboard">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="../dashboard" class="nav-link">CRM Dashboard</a>
            </li>
            <li class="nav-item">
              <a href="../hr/home" class="nav-link">HRM Dashboard</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item nav-category">ADMINISTRATOR</li>
      
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#self-service" role="button" aria-expanded="false" aria-controls="self-service">
          <i class="link-icon" data-feather="users"></i>
          <span class="link-title">Self Service</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="self-service">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="my-dashboard" class="nav-link">Dashboard</a>
            </li>
            <li class="nav-item">
              <a href="../hr/my-profile" class="nav-link">My Profile</a>
            </li>
            
            <li class="nav-item">
              <a href="#" class="nav-link">Leave</a>
              <!-- <a class="nav-link" data-toggle="collapse" href="#self-services" role="button" aria-expanded="false" aria-controls="self-services"> -->
              <!-- <i class="link-icon" data-feather="monitor"></i> -->
                <!-- <span class="link-title">Leave</span> -->
                <!-- <i class="link-arrow" data-feather="chevron-down"></i> -->
              <!-- </a> -->
              <!-- <div class="collapse" id="self-services"> -->
                <!-- <ul class="nav sub-menu"> -->
                <style>
                  ul>li>a{
                    color:#bfc3ce !important;
                  }
                  ul>li>a:hover{
                    color:#727cf5 !important;
                  }
                  ul>li>a:active{
                    color:#727cf5 !important;
                  }
                </style>
                <ul class="nav sub-menu">
                  <li class="">
                    <a href="../hr/apply-leave" class="sub-menu">Apply for Leave</a>
                  </li>
                  <li class="nav-item">
                    <a href="../hr/leave-applications" class="nav-item">Leave Application</a>
                  </li>
                </ul>
              <!-- </div> -->
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Loans</a>
              <ul class="nav sub-menu">
                  <li class="">
                    <a href="../hr/apply-loan" class="sub-menu">Apply for Loan</a>
                  </li>
                  <li class="nav-item">
                    <a href="../hr/loan-applications" class="nav-item">Loan Applications</a>
                  </li>
                  <li class="nav-item">
                    <a href="../hr/loan-history" class="nav-item">Loan History</a>
                  </li>
                </ul>
            </li>
            <!-- <li class="nav-item">
              <a href="#" class="nav-link">Policy</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">My Payroll History</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Tasks</a>
            </li> -->
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#employee" role="button" aria-expanded="false" aria-controls="employee">
          <i class="link-icon" data-feather="monitor"></i>
          <span class="link-title">Employee Manager</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="employee">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="../hr/dashboard" class="nav-link">Employee Dashboard</a>
            </li>
            <li class="nav-item">
              <a href="../hr/all-employee" class="nav-link">All Employee</a>
            </li>
            <li class="nav-item">
              <a href="../hr/registration" class="nav-link">New Registration</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Employee Termination</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Employee Transfer</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Employee Settings</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#leave" role="button" aria-expanded="false" aria-controls="leave">
          <i class="link-icon" data-feather="monitor"></i>
          <span class="link-title">Leave Manager</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="leave">
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
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#setting" role="button" aria-expanded="false" aria-controls="setting">
          <i class="link-icon" data-feather="settings"></i>
          <span class="link-title">General Setting</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="setting">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="#" class="nav-link">Company Settings</a>
              <style>
                  ul>li>a{
                    color:#bfc3ce !important;
                  }
                  ul>li>a:hover{
                    color:#727cf5 !important;
                  }
                  ul>li>a:active{
                    color:#727cf5 !important;
                  }
                </style>
                <ul class="nav sub-menu">
                  <li class="">
                    <a href="../hr/office-location" class="sub-menu">Office Location</a>
                  </li>
                  <li class="nav-item">
                    <a href="../hr/leave-applications" class="nav-item">Office Loc. Type</a>
                  </li>
                  <li class="nav-item">
                    <a href="../hr/leave-applications" class="nav-item">Company</a>
                  </li>
                  <li class="nav-item">
                    <a href="../hr/leave-applications" class="nav-item">Department Group</a>
                  </li>
                  <li class="nav-item">
                    <a href="../hr/leave-applications" class="nav-item">Departments</a>
                  </li>
                  <li class="nav-item">
                    <a href="../hr/leave-applications" class="nav-item">Designations</a>
                  </li>
                  <li class="nav-item">
                    <a href="../hr/leave-applications" class="nav-item">Divisions</a>
                  </li>
                  <li class="nav-item">
                    <a href="../hr/leave-applications" class="nav-item">Supervisor Types</a>
                  </li>
                  <li class="nav-item">
                    <a href="../hr/leave-applications" class="nav-item">Units</a>
                  </li>
                </ul>
              <!-- </div> -->
            </li>
            <!-- </li> -->
            <li class="nav-item">
              <a href="#" class="nav-link">Chart Setting</a>
              <style>
                  ul>li>a{
                    color:#bfc3ce !important;
                  }
                  ul>li>a:hover{
                    color:#727cf5 !important;
                  }
                  ul>li>a:active{
                    color:#727cf5 !important;
                  }
                </style>
                <ul class="nav sub-menu">
                  <li class="">
                    <a href="../hr/apply-leave" class="sub-menu">Dashboard Settings</a>
                  </li>
                </ul>
              <!-- </div> -->
            </li>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">#</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#menu" role="button" aria-expanded="false" aria-controls="menu">
          <i class="link-icon" data-feather="monitor"></i>
          <span class="link-title">Menu Setup</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="menu">
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
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#privilege" role="button" aria-expanded="false" aria-controls="privilege">
          <i class="link-icon" data-feather="monitor"></i>
          <span class="link-title">Privilege Manager</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="privilege">
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
        </div>
      </li>
    </ul>
  </div>
</nav>