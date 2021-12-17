@include('layouts.header')
</head>

<body class="sidebar-dark">
	<div class="main-wrapper">
		@include('layouts.sidebar')
		<div class="page-wrapper">
			@include('layouts.navbar')
            <div class="page-content">

                <div class="row">
                    <div class="col-md-3">
                        <iframe src="{{ asset('documents/'.$application[0]->alevel) }}" frameBorder="1" height="300px" width="100%"></iframe>
                        <span>A Level</span>
                    </div>
                    <div class="col-md-3">
                        <iframe src="{{ asset('documents/'.$application[0]->ssce) }}" frameBorder="1" height="300px" width="100%"></iframe>
                        <span>SSCE</span>
                    </div>
                    <div class="col-md-3">
                        <iframe src="{{ asset('documents/'.$application[0]->letterofsponsor) }}" frameBorder="1" height="300px" width="100%"></iframe>
                        <span>Sponsor letter</span>
                    </div>
                    <div class="col-md-3">
                        <iframe src="{{ asset('documents/'.$application[0]->refletter) }}" frameBorder="1" height="300px" width="100%"></iframe>
                        <span>Reference Letter </span>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-3">
                        <iframe src="{{ asset('documents/'.$application[0]->refletterwork) }}" frameBorder="1" height="300px" width="100%"></iframe>
                        <span>Work Reference Letter</span>
                    </div>
                    <div class="col-md-3">
                        <iframe src="{{ asset('documents/'.$application[0]->testimonial) }}" frameBorder="1" height="300px" width="100%"></iframe>
                        <span>Testimonial</span>
                    </div>
                    <div class="col-md-3">
                        <iframe src="{{ asset('documents/'.$application[0]->proficiency) }}" frameBorder="1" height="300px" width="100%"></iframe>
                        <span>Proficiency</span>
                    </div>
                    <div class="col-md-3">
                        <iframe src="{{ asset('documents/'.$application[0]->datapage) }}" frameBorder="1" height="300px" width="100%"></iframe>
                        <span>Data Page </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <iframe src="{{ asset('documents/'.$application[0]->degreecert) }}" frameBorder="1" height="300px" width="100%"></iframe>
                        <span>Degree Certificate</span>
                    </div>
                    <div class="col-md-3">
                        <iframe src="{{ asset('documents/'.$application[0]->cv) }}" frameBorder="1" height="300px" width="100%"></iframe>
                        <span>CV</span>
                    </div>
                    <div class="col-md-3">
                        <iframe src="{{ asset('documents/'.$application[0]->diplomatranscript) }}" frameBorder="1" height="300px" width="100%"></iframe>
                        <span>Diploma Transcript</span>
                    </div>
                    <div class="col-md-3">
                        <iframe src="{{ asset('documents/'.$application[0]->undergradtranscript) }}" frameBorder="1" height="300px" width="100%"></iframe>
                        <span>undergradtranscript</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <iframe src="{{ asset('documents/'.$application[0]->offerletter) }}" frameBorder="1" height="300px" width="100%"></iframe>
                        <span>Offer Letter</span>
                    </div>
                    <div class="col-md-3">
                        <iframe src="{{ asset('documents/'.$application[0]->tuition) }}" frameBorder="1" height="300px" width="100%"></iframe>
                        <span>Tuition</span>
                    </div>
                    <div class="col-md-3">
                        <iframe src="{{ asset('documents/'.$application[0]->tuberculosis) }}" frameBorder="1" height="300px" width="100%"></iframe>
                        <span>Tubercolosis</span>
                    </div>
                    <div class="col-md-3">
                        <iframe src="{{ asset('documents/'.$application[0]->enrollment) }}" frameBorder="1" height="300px" width="100%"></iframe>
                        <span>Enrollment</span>
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