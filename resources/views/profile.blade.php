@include('layouts.header')
</head>

<body class="sidebar-dark">
	<div class="main-wrapper">
		@include('layouts.sidebar')
		<div class="page-wrapper">
			@include('layouts.navbar')
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
											@foreach($application as $item)
											<img class="profile-pic" src="{{ asset('applicant_images/'.$item->passport) }}" alt="profile">
											@endforeach
											<span class="profile-name">{{ $application[0]->firstname }} {{ $application[0]->surname }}</span>
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
										<!-- <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
											<i class="mr-1 icon-md" data-feather="file"></i>
											<a class="pt-1px d-none d-md-block" href="#">View Contract Letter</a>
										</li>
										<li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
											<i class="mr-1 icon-md" data-feather="users"></i>
											<a class="pt-1px d-none d-md-block" href="#">Change Password<span class="text-muted tx-12"></span></a>
										</li> -->
										<li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
											<i class="mr-1 icon-md" data-feather="archive"></i>
											<a class="pt-1px d-none d-md-block" href="javascript:;" onclick="window.print()"">Print</a><br><br>

										</li>
										<li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
											<i class="mr-1 icon-md" data-feather="file-plus"></i>
											@foreach($application as $item)
											@if(isset($item->id))
											<a class="pt-1px d-none d-md-block" href="{{url('view-documents/'.$item->id)}}" onclick="">View Documents</a><br><br>
											@endif
											@endforeach

										</li>
										<li class=" header-link-item ml-3 pl-3 border-left d-flex align-items-center">
												<!-- <i class="mr-1 icon-md" data-feather="archive"></i> -->
												@foreach($application as $item)
												<a class="pt-1px d-none d-md-block" href="{{url('editapplication/'.$item->id)}}">Edit</a>
												@endforeach</li>
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
										<!-- <h6 class="card-title mb-0">Job Description</h6> -->
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
									<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus ad sed, aliquid rem voluptatum nisi ratione modi illum iure, est, assumenda officia rerum? Consequatur provident ipsam odit libero molestiae quibusdam!</p> -->
									<div>
										<h6 class="card-title mb-0">Basic Information</h6>

										<div class="mt-3">
											<div class="row">
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Surname</label>
													<p class="text-muted">{{ $application[0]->surname }}</p>
												</div>
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">First name</label>
													<p class="text-muted">{{ $application[0]->firstname }}</p>
												</div>
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Middle name</label>
													<p class="text-muted">{{ $application[0]->middlename }}</p>
												</div>
											</div>
										</div>
										<div class="mt-3">
											<div class="row">
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Personal Email</label>
													<p class="text-muted">{{ $application[0]->email }}</p>
												</div>
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Residency</label>
													<p class="text-muted">Address</p>
												</div>
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Passport Number</label>
													<p class="text-muted">{{ $application[0]->passport_number }}</p>
												</div>
											</div>
										</div>
										<div class="mt-3">
											<div class="row">
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase"> Student Number</label>
													<p class="text-muted">{{ $application[0]->student_number }}</p>
												</div>
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Visa Application(approval)</label>

													<p class="text-muted">{{$application[0]->visa}}</p>

												</div>
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">School</label>
													<p class="text-muted">{{$application[0]->school }}</p>
												</div>
											</div>
										</div>
										<div class="mt-3">
											<div class="row">
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Date of Birth</label>
													<p class="text-muted">{{ $application[0]->date }}</p>
												</div>
												<br>
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Gender</label>
													<p class="text-muted">{{ $application[0]->gender }}</p>
												</div>

												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Course</label>
													<p class="text-muted">{{ $application[0]->course }}</p>
												</div>
												<br>
												{{--<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Address Of Kin</label>
													<p class="text-muted">{{ $application[0]->street_address_of_nok }}</p>
												</div>--}}

												{{--<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">City Of Kin</label>
													<p class="text-muted">{{ $application[0]->city_of_nok }}</p>
												</div>--}}

												{{--<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Province Of Kin</label>
													@foreach($countries as $item)
													@if($item->country_id == $application[0]->province_of_nok)
													<p class="text-muted">{{$item->country}}</p>
													@endif
													@endforeach
												</div>--}}

												{{--<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Country Of Kin</label>
													@foreach($countries as $item)
													@if($item->country_id == $application[0]->country_of_nok)
													<p class="text-muted">{{$item->country}}</p>
													@endif
													@endforeach
												</div>--}}
												{{--<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">PhoneNumber Of Kin</label>
													<p class="text-muted">{{ $application[0]->phone_of_nok }}</p>
												</div>--}}
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Cas</label>
													<p class="text-muted">{{$application[0]->cas}}</p>

												</div>
											</div>
										</div>
										<div class="mt-3">
											<div class="row">
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Country of Residence </label>
													@foreach($countries as $item)
													@if($item->country_id == $application[0]->country_of_residence)
													<p class="text-muted">{{$item->country}}</p>
													@endif
													@endforeach
												</div>
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Permanent Address</label>
													<p class="text-muted">{{ $application[0]->home_street_address }}</p>
												</div>

												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Email of Kin</label>
													<p class="text-muted">{{ $application[0]->email_of_nok }}</p>
												</div>
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">City</label>
													<p class="text-muted">{{ $application[0]->city }}</p>
												</div>
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Home Phone</label>
													<p class="text-muted">{{ $application[0]->home_phone }}</p>
												</div>
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Sponor letter</label>
													<p class="text-muted">{{ $application[0]->letterofsponsor }}</p>
												</div>

											</div>
										</div>
										<div class="mt-3">
											<div class="row">
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Mobile Number</label>
													<p class="text-muted">{{ $application[0]->mobile_phone}}</p>
												</div>
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Home Phone</label>
													<p class="text-muted">{{ $application[0]->home_phone}}</p>
												</div>
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Service Fee</label>
													<p class="text-muted">{{ $application[0]->service_fee}}</p>
												</div>
											</div>
										</div>
										<div class="mt-3">
											<label class="tx-11 font-weight-bold mb-0 text-uppercase">Nationality</label>
											<p class="text-muted">{{ $application[0]->country}}</p>
										</div>
									</div>
									<div>
										<h6 class="card-title mb-0">Employment Information</h6>
										<div class="mt-3">
											<div class="row">
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Postal Code</label>
													<p class="text-muted">{{ $application[0]->postal_code}}</p>
												</div>
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Program</label>
													<p class="text-muted">------</p>
												</div>
												<div class="col-md-4">
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Citizen of</label>
													<p class="text-muted">{{ $application[0]->country}}</p>
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
													<label class="tx-11 font-weight-bold mb-0 text-uppercase">Offer Type</label>
													<p class="text-muted">{{$application[0]->offer}}</p>
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
									<!-- <div>
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
									</div> -->
									<div class="mt-3 d-flex social-links">
										<a href="javascript:;" class="btn d-flex align-items-center justify-content-center border mr-2 btn-icon facebook">
											<i data-feather="facebook" data-toggle="tooltip" title="github.com/#"></i>
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
						<!-- ========================= -->
						<!-- middle wrapper start -->
						<!-- <div class="col-md-8 col-xl-6 middle-wrapper">
							<div class="row">
								<div class="col-md-12 grid-margin">
									<div class="card rounded">
										<div class="card-header">
											<div class="d-flex align-items-center justify-content-between">
												<div class="d-flex align-items-center">
													<img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37" alt="">													
													<div class="ml-2">
														<p>Mike Popescu</p>
														<p class="tx-11 text-muted">1 min ago</p>
													</div>
												</div>
												<div class="dropdown">
													<button class="btn p-0" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														<i class="icon-lg pb-3px" data-feather="more-horizontal"></i>
													</button>
													<div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
														<a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="meh" class="icon-sm mr-2"></i> <span class="">Unfollow</span></a>
														<a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="corner-right-up" class="icon-sm mr-2"></i> <span class="">Go to post</span></a>
														<a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="share-2" class="icon-sm mr-2"></i> <span class="">Share</span></a>
														<a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="copy" class="icon-sm mr-2"></i> <span class="">Copy link</span></a>
													</div>
												</div>
											</div>
										</div>
										<div class="card-body">
											<p class="mb-3 tx-14">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus minima delectus nemo unde quae recusandae assumenda.</p>
											<img class="img-fluid" src="https://via.placeholder.com/513x342" alt="">
										</div>
										<div class="card-footer">
											<div class="d-flex post-actions">
												<a href="javascript:;" class="d-flex align-items-center text-muted mr-4">
													<i class="icon-md" data-feather="heart"></i>
													<p class="d-none d-md-block ml-2">Like</p>
												</a>
												<a href="javascript:;" class="d-flex align-items-center text-muted mr-4">
													<i class="icon-md" data-feather="message-square"></i>
													<p class="d-none d-md-block ml-2">Comment</p>
												</a>
												<a href="javascript:;" class="d-flex align-items-center text-muted">
													<i class="icon-md" data-feather="share"></i>
													<p class="d-none d-md-block ml-2">Share</p>
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="card rounded">
										<div class="card-header">
											<div class="d-flex align-items-center justify-content-between">
												<div class="d-flex align-items-center">
													<img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37" alt="">													
													<div class="ml-2">
														<p>Mike Popescu</p>
														<p class="tx-11 text-muted">5 min ago</p>
													</div>
												</div>
												<div class="dropdown">
													<button class="btn p-0" type="button" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														<i class="icon-lg pb-3px" data-feather="more-horizontal"></i>
													</button>
													<div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
														<a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="meh" class="icon-sm mr-2"></i> <span class="">Unfollow</span></a>
														<a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="corner-right-up" class="icon-sm mr-2"></i> <span class="">Go to post</span></a>
														<a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="share-2" class="icon-sm mr-2"></i> <span class="">Share</span></a>
														<a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="copy" class="icon-sm mr-2"></i> <span class="">Copy link</span></a>
													</div>
												</div>
											</div>
										</div>
										<div class="card-body">
											<p class="mb-3 tx-14">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
											<img class="img-fluid" src="https://via.placeholder.com/513x342" alt="">
										</div>
										<div class="card-footer">
											<div class="d-flex post-actions">
												<a href="javascript:;" class="d-flex align-items-center text-muted mr-4">
													<i class="icon-md" data-feather="heart"></i>
													<p class="d-none d-md-block ml-2">Like</p>
												</a>
												<a href="javascript:;" class="d-flex align-items-center text-muted mr-4">
													<i class="icon-md" data-feather="message-square"></i>
													<p class="d-none d-md-block ml-2">Comment</p>
												</a>
												<a href="javascript:;" class="d-flex align-items-center text-muted">
													<i class="icon-md" data-feather="share"></i>
													<p class="d-none d-md-block ml-2">Share</p>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div> -->
						<!-- middle wrapper end -->
						<!-- right wrapper start -->
						<!-- <div class="d-none d-xl-block col-xl-3 right-wrapper">
							<div class="row">
								<div class="col-md-12 grid-margin">
									<div class="card rounded">
										<div class="card-body">
											<h6 class="card-title">latest photos</h6>
											<div class="latest-photos">
												<div class="row">
													<div class="col-md-4">
														<figure>
															<img class="img-fluid" src="https://via.placeholder.com/67x67" alt="">
														</figure>
													</div>
													<div class="col-md-4">
														<figure>
															<img class="img-fluid" src="https://via.placeholder.com/67x67" alt="">
														</figure>
													</div>
													<div class="col-md-4">
														<figure>
															<img class="img-fluid" src="https://via.placeholder.com/67x67" alt="">
														</figure>
													</div>
													<div class="col-md-4">
														<figure>
															<img class="img-fluid" src="https://via.placeholder.com/67x67" alt="">
														</figure>
													</div>
													<div class="col-md-4">
														<figure>
															<img class="img-fluid" src="https://via.placeholder.com/67x67" alt="">
														</figure>
													</div>
													<div class="col-md-4">
														<figure>
															<img class="img-fluid" src="https://via.placeholder.com/67x67" alt="">
														</figure>
													</div>
													<div class="col-md-4">
														<figure class="mb-0">
															<img class="img-fluid" src="https://via.placeholder.com/67x67" alt="">
														</figure>
													</div>
													<div class="col-md-4">
														<figure class="mb-0">
															<img class="img-fluid" src="https://via.placeholder.com/67x67" alt="">
														</figure>
													</div>
													<div class="col-md-4">
														<figure class="mb-0">
															<img class="img-fluid" src="https://via.placeholder.com/67x67" alt="">
														</figure>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12 grid-margin">
									<div class="card rounded">
										<div class="card-body">
											<h6 class="card-title">suggestions for you</h6>
											<div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
												<div class="d-flex align-items-center hover-pointer">
													<img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37" alt="">													
													<div class="ml-2">
														<p>Mike Popescu</p>
														<p class="tx-11 text-muted">12 Mutual Friends</p>
													</div>
												</div>
												<button class="btn btn-icon"><i data-feather="user-plus" data-toggle="tooltip" title="Connect"></i></button>
											</div>
											<div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
												<div class="d-flex align-items-center hover-pointer">
													<img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37" alt="">													
													<div class="ml-2">
														<p>Mike Popescu</p>
														<p class="tx-11 text-muted">12 Mutual Friends</p>
													</div>
												</div>
												<button class="btn btn-icon"><i data-feather="user-plus" data-toggle="tooltip" title="Connect"></i></button>
											</div>
											<div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
												<div class="d-flex align-items-center hover-pointer">
													<img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37" alt="">													
													<div class="ml-2">
														<p>Mike Popescu</p>
														<p class="tx-11 text-muted">12 Mutual Friends</p>
													</div>
												</div>
												<button class="btn btn-icon"><i data-feather="user-plus" data-toggle="tooltip" title="Connect"></i></button>
											</div>
											<div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
												<div class="d-flex align-items-center hover-pointer">
													<img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37" alt="">													
													<div class="ml-2">
														<p>Mike Popescu</p>
														<p class="tx-11 text-muted">12 Mutual Friends</p>
													</div>
												</div>
												<button class="btn btn-icon"><i data-feather="user-plus" data-toggle="tooltip" title="Connect"></i></button>
											</div>
											<div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
												<div class="d-flex align-items-center hover-pointer">
													<img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37" alt="">													
													<div class="ml-2">
														<p>Mike Popescu</p>
														<p class="tx-11 text-muted">12 Mutual Friends</p>
													</div>
												</div>
												<button class="btn btn-icon"><i data-feather="user-plus" data-toggle="tooltip" title="Connect"></i></button>
											</div>
											<div class="d-flex justify-content-between">
												<div class="d-flex align-items-center hover-pointer">
													<img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37" alt="">													
													<div class="ml-2">
														<p>Mike Popescu</p>
														<p class="tx-11 text-muted">12 Mutual Friends</p>
													</div>
												</div>
												<button class="btn btn-icon"><i data-feather="user-plus" data-toggle="tooltip" title="Connect"></i></button>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div> -->
						<!-- right wrapper end -->
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