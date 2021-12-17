@include('layouts.header')
</head>
<body class="sidebar-dark">
    <div class="main-wrapper">
        @include('layouts.sidebar')
        <div class="page-wrapper">                
            @include('layouts.navbar')
            <div class="page-content">
                <h1>Hello Test</h1>
                <table  style="border-collapse:collapse;border: 1px solid black;">
                man
                 @foreach ($userroles as $userrole)
                    <tr>
                        <td>{{$userrole->user_role_id}}</td>
                    </tr>
                    
                    <tr>
                         <td>{{$userrole->user_role}}</td>
                    </tr>
                @endforeach
                </table>
            Hello
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