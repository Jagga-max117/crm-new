@include('hr.layouts.header')
</head>
<body class="sidebar-dark">
    <div class="main-wrapper">
        @include('hr.layouts.sidebar')
        <div class="page-wrapper">                
            <div class="page-content home">
                <style>
                    .home{
                        background-image: url("{{ asset('images/01.png') }}");
                        background-size: contain;
                        background-repeat: no-repeat;
                        background-position: center;
                    }
                </style>
            </div>
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