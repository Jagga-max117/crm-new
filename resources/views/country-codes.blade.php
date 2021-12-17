@include('layouts.header')
{{--</head>
<!-- plugin css for this page -->
<link rel="stylesheet" href="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
<!-- end plugin css for this page -->
</title>

{{--<body class="sidebar-dark">
    <div class="main-wrapper">
        @include('layouts.sidebar')
        <div class="page-wrapper">
            @include('layouts.navbar')
            <div class="page-content">
                @if(Session::has('Code_created'))
                <div class="alert alert-success">
                    {{Session::get('Code_created')}}
</div>
@endif

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Country Codes</h4>
                <p class="card-description"></p>
                <form class="cmxform" id="signupForm" method="POST" action="{{route('country-codes.submit')}}">
                    @csrf
                    <fieldset>
                        <div class="form-group">
                            @error('country_code')
                            <div class="col-md-12 alert alert-danger">{{ $message }}</div>
                            @enderror
                            <label for="country">Country</label>
                            <select class="btn btn-secondary form-control" name="country" id="country">
                                <option selected disabled></option>
                                @foreach($countries as $country)
                                <option value="{{$country->country}}">{{$country->country}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">

                            <label for="countrycode">Enter Country code</label>
                            <input id="countrycode" class="form-control" name="countrycode" type="text">
                        </div>
                        <input class="btn btn-primary" type="submit" value="Submit">
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title"></h6>
                <p class="card-description"></p>
                <div class="table-responsive">
                    <table id="dataTableExample" class="table">
                        <thead>
                            <th>List of Country codes</th>
                            <!-- <tr> <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr> -->
                        </thead>
                        <tbody>
                            @foreach ($countrycodes as $countrycode)
                            <tr>
                                <td>{{$countrycode->country_code}}</td>
                                <td><a href="delete-country-codes/{{$countrycode->country_code_id}}" class="btn btn-danger">Delete</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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
<!-- endinject -->
<!-- plugin js for this page -->
<!-- end plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('vendors/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('js/template.js') }}"></script>
<!-- endinject -->
<!-- plugin js for this page -->
<script src=".{{ asset('vendors/datatables.net/jquery.dataTables.js') }}"></script>
<script src="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
<!-- end plugin js for this page -->
<!-- custom js for this page -->
<script src="{{ asset('js/data-table.js') }}"></script>
<!-- end custom js for this page -->
</body>--}}

</html>