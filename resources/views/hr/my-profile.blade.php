employment @include('hr.layouts.header')
</head>

<body class="sidebar-dark">
	<div class="main-wrapper">
		@include('hr.layouts.sidebar')
		<div class="page-wrapper">
			@include('hr.layouts.navbar')
			<div class="page-content">
				<div class="profile-page tx-13">
					<div class="row">
						<div class="col-12 grid-margin">
							<div class="profile-header">
								<div class="cover">
									<div class="gray-shade"></div>
									<figure>
										<img src="{{ asset('images/cover.jpg') }}" class="img-fluid" alt="profile cover">
									</figure>
									<div class="cover-body d-flex justify-content-between align-items-center">
										<div>
											<img class="profile-pic" src="{{ asset('images/hoodie.png') }}" alt="profile">
											<span class="profile-name">Ade M. Ola</span>
										</div>
										<div class="d-none d-md-block">
											<!--<button class="btn btn-primary btn-icon-text btn-edit-profile">
												 <i data-feather="edit" class="btn-icon-prepend"></i> Edit profile
											</button> -->
										</div>
									</div>
								</div>
								<div class="header-links">
									<ul class="links d-flex align-items-center mt-3 mt-md-0">
										<li class="header-link-item d-flex align-items-center">
											<i class="mr-1 icon-md" data-feather="image"></i>
											<a class="pt-1px d-none d-md-block" href="#">Change Profile Picture</a>
										</li>
										<li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
											<i class="mr-1 icon-md" data-feather="file"></i>
											<a class="pt-1px d-none d-md-block" href="#">View Contract Letter</a>
										</li>
										<li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
											<i class="mr-1 icon-md" data-feather="users"></i>
											<a class="pt-1px d-none d-md-block" href="#">Change Password<span class="text-muted tx-12"></span></a>
										</li>
										<li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
											<i class="mr-1 icon-md" data-feather="archive"></i>
											<a class="pt-1px d-none d-md-block" href="#">Print</a>
										</li>
										<!-- <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
											<i class="mr-1 icon-md" data-feather="video"></i>
											<a class="pt-1px d-none d-md-block" href="#">Videos</a>
										</li> -->
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="row profile-body">
						<!-- ========================= -->
						<div class="col-md-2 left-wrapper">

						</div>

						<!-- left wrapper start -->
						<div class="d-none d-md-block col-md-8 col-xl-8 middle-wrapper">
							<div class="card rounded">
								<div class="card-body">
									<div class="d-flex align-items-center justify-content-between mb-2">
										<h6 class="card-title mb-0">Job Description</h6>
										<div class="dropdown">
											<!-- <button class="btn p-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
											</button>
											<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
												<a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>
												<a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="git-branch" class="icon-sm mr-2"></i> <span class="">Update</span></a>
												<a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View all</span></a>
											</div> -->
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus ad sed, aliquid rem voluptatum nisi ratione modi illum iure, est, assumenda officia rerum? Consequatur provident ipsam odit libero molestiae quibusdam!</p>
									<div>
										<h6 class="card-title mb-0">Basic Information</h6>
										<div class="mt-3">
											<div class="row">
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Surname</label>
													<p class="text-muted">Ola</p>
												</div>
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">First name</label>
													<p class="text-muted">Ade</p>
												</div>
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Middle name</label>
													<p class="text-muted">M.</p>
												</div>
											</div>
										</div>
										<div class="mt-3">
											<div class="row">
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Personal Email</label>
													<p class="text-muted">me4u@xyz.com</p>
												</div>
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Residency</label>
													<p class="text-muted">Address</p>
												</div>
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Means of Identification</label>
													<p class="text-muted">M.</p>
												</div>
											</div>
										</div>
										<div class="mt-3">
											<div class="row">
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Identification Number</label>
													<p class="text-muted">000-000-0000</p>
												</div>
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Identification Start Date</label>
													<p class="text-muted">21-2-2009</p>
												</div>
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Marital Status</label>
													<p class="text-muted">Single</p>
												</div>
											</div>
										</div>
										<div class="mt-3">
											<div class="row">
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Date of Birth</label>
													<p class="text-muted">21-2-1999</p>
												</div>
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Gender</label>
													<p class="text-muted">Male</p>
												</div>
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Identification Expiry Date</label>
													<p class="text-muted">21-2-2029</p>
												</div>
											</div>
										</div>
										<div class="mt-3">
											<div class="row">
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Current Address</label>
													<p class="text-muted">Home Address</p>
												</div>
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Permanent Address</label>
													<p class="text-muted">My Address</p>
												</div>
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Home Phone</label>
													<p class="text-muted">+2348 012 345 6789</p>
												</div>
											</div>
										</div>
										<div class="mt-3">
											<div class="row">
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Mobile Number</label>
													<p class="text-muted">+2348 012 345 6789</p>
												</div>
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Religion</label>
													<p class="text-muted">Christianity</p>
												</div>
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Hobbies</label>
													<p class="text-muted">Leisure reading</p>
												</div>
											</div>
										</div>
										<div class="mt-3">
											<label class="tx-11 font-weight-bold mb-0 text-uppercase">Nationality</label>
											<p class="text-muted">Nigerian</p>
										</div>
									</div>
									<div>
										<h6 class="card-title mb-0">Program Type</h6>
										<div class="mt-3">
											<div class="row">
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">School Name</label>
													<p class="text-muted">-----</p>
												</div>
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Program</label>
													<p class="text-muted">------</p>
												</div>
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Qualification</label>
													<p class="text-muted">------</p>
												</div>
											</div>
										</div>
										<div class="mt-3">
											<div class="row">
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Qualification Grade</label>
													<p class="text-muted">------</p>
												</div>
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Start Date</label>
													<p class="text-muted">------</p>
												</div>
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">End Date</label>
													<p class="text-muted">------</p>
												</div>
											</div>
										</div>
									</div>
									<div>
										<h6 class="card-title mb-0">Account Information</h6>
										<div class="mt-3">
											<div class="row">
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Bank Name</label>
													<p class="text-muted">-----</p>
												</div>
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Bank Account Number</label>
													<p class="text-muted">------</p>
												</div>
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Bank Account Type</label>
													<p class="text-muted">------</p>
												</div>
											</div>
										</div>
									</div>
									<div>
										<h6 class="card-title mb-0">Personal Information</h6>
										<div class="mt-3">
											<div class="row">
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Pension Provider</label>
													<p class="text-muted">-----</p>
												</div>
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Pension Number</label>
													<p class="text-muted">------</p>
												</div>
											</div>
										</div>
									</div>
									<div class="mt-3 d-flex social-links">
										<a href="javascript:;" class="btn d-flex align-items-center justify-content-center border mr-2 btn-icon facebook">
											<i data-feather="facebook" data-toggle="tooltip" title="facebook.com/#"></i>
										</a>
										<a href="javascript:;" class="btn d-flex align-items-center justify-content-center border mr-2 btn-icon twitter">
											<i data-feather="twitter" data-toggle="tooltip" title="twitter.com/#"></i>
										</a>
										<a href="javascript:;" class="btn d-flex align-items-center justify-content-center border mr-2 btn-icon instagram">
											<i data-feather="instagram" data-toggle="tooltip" title="instagram.com/#"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- left wrapper end -->
						<div class="col-md-2 right-wrapper">

						</div>
					</div>
				</div>
			</div>
			@include('hr.layouts.footer')
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