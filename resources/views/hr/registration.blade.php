<!-- <link rel="stylesheet" href="{{ asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="jquery.steps.min.js"></script>

@include('hr.layouts.header')
</head>

<body class="sidebar-dark">
    <div class="main-wrapper">
        @include('hr.layouts.sidebar')
        <div class="page-wrapper">
            @include('hr.layouts.navbar')
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

                                    <form class="cmxform" id="signupForm" method="post" action="{{route('application.submit')}}" enctype="multipart/form-data">
                                        @csrf
                                        <h4 class="card-title">New Registration</h4>
                                        <div id="wizardVertical">
                                            <h2>Basic Information</h2>
                                            <section style="overflow-y:auto; overflow-x:hidden;">
                                                <h4>Basic Information</h4>
                                                <fieldset>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="firstname">First name</label>
                                                                <input id="firstname" class="form-control" name="firstname" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="middlename">Middle name</label>
                                                                <input id="middlename" class="form-control" name="middlename" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="lastname">Last name</label>
                                                                <input id="lastname" class="form-control" name="lastname" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="email">Email</label>
                                                                <input id="email" class="form-control" name="email" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="residency">Residency</label>
                                                                <select class="btn btn-secondary form-control" id="residency" name="residency">
                                                                    <option selected disabled></option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="moi">Means of Identification</label>
                                                                <select class="btn btn-secondary form-control" id="moi" name="moi">
                                                                    <option selected disabled></option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="idnum">Identification Number</label>
                                                                <input id="idnum" class="form-control" name="idnum" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="idstartdate">Identification Start Date</label>
                                                                <input type="date" class="form-control" name="idstartdate" id="idstartdate">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="idexpdate">Identification Expiry Date</label>
                                                                <input type="date" class="form-control" name="idexpdate" id="idexpdate">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="dob">Date of Birth</label>
                                                                <input type="date" class="form-control" name="dob" id="dob">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="gender">Gender</label>
                                                                <select class="btn btn-secondary form-control" id="gender" name="gender">
                                                                    <option selected disabled></option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="mstatus">Marital Status</label>
                                                                <select class="btn btn-secondary form-control" id="mstatus" name="mstatus">
                                                                    <option selected disabled></option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="caddress">Current Address</label>
                                                                <input id="caddress" class="form-control" name="caddress" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="paddress">Permanent Address</label>
                                                                <input id="paddress" class="form-control" name="paddress" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="homenum">Home Number</label>
                                                                <input id="homenum" class="form-control" name="homenum" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="mobilenum">Mobile Number</label>
                                                                <input id="mobilenum" class="form-control" name="mobilenum" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="religion">Religion</label>
                                                                <select class="btn btn-secondary form-control" id="religion" name="religion">
                                                                    <option selected disabled></option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="hobbies">Hobbies</label>
                                                                <input id="hobbies" class="form-control" name="hobbies" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="nationality">Nationality</label>
                                                                <select class="btn btn-secondary form-control" id="nationality" name="nationality">
                                                                    <option selected disabled></option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="astatus">Attendance Status</label>
                                                                <select class="btn btn-secondary form-control" id="astatus" name="astatus">
                                                                    <option selected disabled></option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Upload ID</label>
                                                                <input type="file" name="uploadid" id="uploadid" class="file-upload-default">
                                                                <div class="input-group col-xs-12">
                                                                    <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                                                                    <span class="input-group-append">
                                                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </section>
                                            <h2>Employment Information</h2>
                                            <section style="overflow-y:auto; overflow-x:auto;">
                                                <h4>Employment Information</h4>
                                                <fieldset>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="category">Staff Category</label>
                                                                <select class="btn btn-secondary form-control" id="category" name="category">
                                                                    <option selected disabled></option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="project">Project</label>
                                                                <select class="btn btn-secondary form-control" id="project" name="project">
                                                                    <option selected disabled></option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="type">Employee Type</label>
                                                                <select class="btn btn-secondary form-control" id="type" name="type">
                                                                    <option selected disabled></option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="empnum">Employee Number</label>
                                                                <input id="empnum" class="form-control" name="empnum" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="officialemail">Official Email</label>
                                                                <input id="officialemail" class="form-control" name="officialemail" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="company">Company</label>
                                                                <select class="btn btn-secondary form-control" id="company" name="company">
                                                                    <option selected disabled></option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="division">Division</label>
                                                                <select class="btn btn-secondary form-control" id="division" name="division">
                                                                    <option selected disabled></option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="deptgroup">Department Group</label>
                                                                <select class="btn btn-secondary form-control" id="deptgroup" name="deptgroup">
                                                                    <option selected disabled></option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="dept">Department</label>
                                                                <select class="btn btn-secondary form-control" id="dept" name="dept">
                                                                    <option selected disabled></option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="unit">Unit</label>
                                                                <select class="btn btn-secondary form-control" id="unit" name="unit">
                                                                    <option selected disabled></option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="designation">Designation</label>
                                                                <select class="btn btn-secondary form-control" id="designation" name="designation">
                                                                    <option selected disabled></option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="grade">Grade</label>
                                                                <select class="btn btn-secondary form-control" id="grade" name="grade">
                                                                    <option selected disabled></option>
                                                                </select>
                                                            </div>
                                                        </div>


                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="gradelevel">Grade Level</label>
                                                                <select class="btn btn-secondary form-control" id="gradelevel" name="gradelevel">
                                                                    <option selected disabled></option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="officeloc">Office Location</label>
                                                                <select class="btn btn-secondary form-control" id="officeloc" name="officeloc">
                                                                    <option selected disabled></option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="annualsalary">Annual Salary</label>
                                                                <input id="annualsalary" class="form-control" name="annualsalary" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Upload Contract Letter</label>
                                                                <input type="file" name="uploadletter" id="uploadletter" class="file-upload-default">
                                                                <div class="input-group col-xs-12">
                                                                    <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                                                                    <span class="input-group-append">
                                                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Upload Profile Photo</label>
                                                                <input type="file" name="uploadphoto" id="uploadphoto" class="file-upload-default">
                                                                <div class="input-group col-xs-12">
                                                                    <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                                                                    <span class="input-group-append">
                                                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </section>

                                            <h2>Employment History</h2>
                                            <section style="overflow-y:auto;overflow-x:hidden;">
                                                <h4>Employment History</h4>
                                                <fieldset>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="firstname">First name</label>
                                                                <input id="firstname" class="form-control" name="firstname" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="middlename">Middle name</label>
                                                                <input id="middlename" class="form-control" name="middlename" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="lastname">Last name</label>
                                                                <input id="lastname" class="form-control" name="lastname" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="firstname">First name</label>
                                                                <input id="firstname" class="form-control" name="firstname" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="middlename">Middle name</label>
                                                                <input id="middlename" class="form-control" name="middlename" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="lastname">Last name</label>
                                                                <input id="lastname" class="form-control" name="lastname" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="idstartdate">Identification Start Date</label>
                                                                <input type="date" class="form-control" name="idstartdate" id="idstartdate">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="idexpdate">Identification Expiry Date</label>
                                                                <input type="date" class="form-control" name="idexpdate" id="idexpdate">
                                                            </div>
                                                        </div>
                                                        <!-- <style>
                                                            /* Style the close button */
                                                            .close {
                                                                position: absolute;
                                                                right: 0;
                                                                top: 0;
                                                                padding: 12px 16px 12px 16px;
                                                            }

                                                            .close:hover {
                                                                background-color: #f44336;
                                                                color: white;
                                                            }

                                                            /* Style the header */
                                                            .header {
                                                                background-color: #f44336;
                                                                padding: 30px 40px;
                                                                color: white;
                                                                text-align: center;
                                                            }

                                                            /* Clear floats after the header */
                                                            .header:after {
                                                                content: "";
                                                                display: table;
                                                                clear: both;
                                                            }

                                                            /* Style the input */
                                                            input {
                                                                margin: 0;
                                                                border: none;
                                                                border-radius: 0;
                                                                width: 75%;
                                                                padding: 10px;
                                                                float: left;
                                                                font-size: 16px;
                                                            }

                                                            /* Style the "Add" button */
                                                            .addBtn {
                                                                padding: 10px;
                                                                width: 25%;
                                                                background: #d9d9d9;
                                                                color: #555;
                                                                float: left;
                                                                text-align: center;
                                                                font-size: 16px;
                                                                cursor: pointer;
                                                                transition: 0.3s;
                                                                border-radius: 0;
                                                            }
                                                        </style>
                                                        </head>

                                                        <body>

                                                            <div id="myDIV" class="header">
                                                                <h2 style="margin:5px">My To Do List</h2>
                                                                <input type="text" id="myInput" placeholder="Title...">
                                                                <span onclick="newElement()" class="addBtn">Add</span>
                                                            </div>

                                                            <ul id="myUL">
                                                                <li>Hit the gym</li>
                                                            </ul>

                                                            <script>
                                                                // Create a "close" button and append it to each list item
                                                                var myNodelist = document.getElementsByTagName("LI");
                                                                var i;
                                                                for (i = 0; i < myNodelist.length; i++) {
                                                                    var span = document.createElement("SPAN");
                                                                    var txt = document.createTextNode("\u00D7");
                                                                    span.className = "close";
                                                                    span.appendChild(txt);
                                                                    myNodelist[i].appendChild(span);
                                                                }

                                                                // Click on a close button to hide the current list item
                                                                var close = document.getElementsByClassName("close");
                                                                var i;
                                                                for (i = 0; i < close.length; i++) {
                                                                    close[i].onclick = function() {
                                                                        var div = this.parentElement;
                                                                        div.style.display = "none";
                                                                    }
                                                                }

                                                                // Add a "checked" symbol when clicking on a list item
                                                                var list = document.querySelector('ul');
                                                                list.addEventListener('click', function(ev) {
                                                                    if (ev.target.tagName === 'LI') {
                                                                        ev.target.classList.toggle('checked');
                                                                    }
                                                                }, false);

                                                                // Create a new list item when clicking on the "Add" button
                                                                function newElement() {
                                                                    var li = document.createElement("li");
                                                                    var inputValue = document.getElementById("myInput").value;
                                                                    var t = document.createTextNode(inputValue);
                                                                    li.appendChild(t);
                                                                    if (inputValue === '') {
                                                                        alert("You must write something!");
                                                                    } else {
                                                                        document.getElementById("myUL").appendChild(li);
                                                                    }
                                                                    document.getElementById("myInput").value = "";

                                                                    var span = document.createElement("SPAN");
                                                                    var txt = document.createTextNode("\u00D7");
                                                                    span.className = "close";
                                                                    span.appendChild(txt);
                                                                    li.appendChild(span);

                                                                    for (i = 0; i < close.length; i++) {
                                                                        close[i].onclick = function() {
                                                                            var div = this.parentElement;
                                                                            div.style.display = "none";
                                                                        }
                                                                    }
                                                                }
                                                            </script> -->
                                                    </div>
                                                </fieldset>
                                            </section>

                                            <h2>Employee Education</h2>
                                            <section style="overflow-y:auto; overflow-x:hidden;">
                                                <h4>Employee Education</h4>
                                                <fieldset>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="firstname">School Name</label>
                                                                <input id="firstname" class="form-control" name="firstname" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="form-group">
                                                                <label for="middlename">Description</label>
                                                                <textarea id="middlename" name="middlename" class="form-control" rows="3"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="idstartdate">Identification Start Date</label>
                                                                <input type="date" class="form-control" name="idstartdate" id="idstartdate">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="idexpdate">Identification Expiry Date</label>
                                                                <input type="date" class="form-control" name="idexpdate" id="idexpdate">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="category">Staff Category</label>
                                                                <select class="btn btn-secondary form-control" id="category" name="category">
                                                                    <option selected disabled></option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="category">Staff Category</label>
                                                                <select class="btn btn-secondary form-control" id="category" name="category">
                                                                    <option selected disabled></option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="category">Staff Category</label>
                                                                <select class="btn btn-secondary form-control" id="category" name="category">
                                                                    <option selected disabled></option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="category">Staff Category</label>
                                                                <select class="btn btn-secondary form-control" id="category" name="category">
                                                                    <option selected disabled></option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- <style>
                                                            /* Style the close button */
                                                            .close {
                                                                position: absolute;
                                                                right: 0;
                                                                top: 0;
                                                                padding: 12px 16px 12px 16px;
                                                            }

                                                            .close:hover {
                                                                background-color: #f44336;
                                                                color: white;
                                                            }

                                                            /* Style the header */
                                                            .header {
                                                                background-color: #f44336;
                                                                padding: 30px 40px;
                                                                color: white;
                                                                text-align: center;
                                                            }

                                                            /* Clear floats after the header */
                                                            .header:after {
                                                                content: "";
                                                                display: table;
                                                                clear: both;
                                                            }

                                                            /* Style the input */
                                                            input {
                                                                margin: 0;
                                                                border: none;
                                                                border-radius: 0;
                                                                width: 75%;
                                                                padding: 10px;
                                                                float: left;
                                                                font-size: 16px;
                                                            }

                                                            /* Style the "Add" button */
                                                            .addBtn {
                                                                padding: 10px;
                                                                width: 25%;
                                                                background: #d9d9d9;
                                                                color: #555;
                                                                float: left;
                                                                text-align: center;
                                                                font-size: 16px;
                                                                cursor: pointer;
                                                                transition: 0.3s;
                                                                border-radius: 0;
                                                            }
                                                        </style>
                                                        </head>

                                                        <body>

                                                            <div id="myDIV" class="header">
                                                                <h2 style="margin:5px">My To Do List</h2>
                                                                <input type="text" id="myInput" placeholder="Title...">
                                                                <span onclick="newElement()" class="addBtn">Add</span>
                                                            </div>

                                                            <ul id="myUL">
                                                                <li>Hit the gym</li>
                                                            </ul>

                                                            <script>
                                                                // Create a "close" button and append it to each list item
                                                                var myNodelist = document.getElementsByTagName("LI");
                                                                var i;
                                                                for (i = 0; i < myNodelist.length; i++) {
                                                                    var span = document.createElement("SPAN");
                                                                    var txt = document.createTextNode("\u00D7");
                                                                    span.className = "close";
                                                                    span.appendChild(txt);
                                                                    myNodelist[i].appendChild(span);
                                                                }

                                                                // Click on a close button to hide the current list item
                                                                var close = document.getElementsByClassName("close");
                                                                var i;
                                                                for (i = 0; i < close.length; i++) {
                                                                    close[i].onclick = function() {
                                                                        var div = this.parentElement;
                                                                        div.style.display = "none";
                                                                    }
                                                                }

                                                                // Add a "checked" symbol when clicking on a list item
                                                                var list = document.querySelector('ul');
                                                                list.addEventListener('click', function(ev) {
                                                                    if (ev.target.tagName === 'LI') {
                                                                        ev.target.classList.toggle('checked');
                                                                    }
                                                                }, false);

                                                                // Create a new list item when clicking on the "Add" button
                                                                function newElement() {
                                                                    var li = document.createElement("li");
                                                                    var inputValue = document.getElementById("myInput").value;
                                                                    var t = document.createTextNode(inputValue);
                                                                    li.appendChild(t);
                                                                    if (inputValue === '') {
                                                                        alert("You must write something!");
                                                                    } else {
                                                                        document.getElementById("myUL").appendChild(li);
                                                                    }
                                                                    document.getElementById("myInput").value = "";

                                                                    var span = document.createElement("SPAN");
                                                                    var txt = document.createTextNode("\u00D7");
                                                                    span.className = "close";
                                                                    span.appendChild(txt);
                                                                    li.appendChild(span);

                                                                    for (i = 0; i < close.length; i++) {
                                                                        close[i].onclick = function() {
                                                                            var div = this.parentElement;
                                                                            div.style.display = "none";
                                                                        }
                                                                    }
                                                                }
                                                            </script> -->
                                                    </div>
                                                </fieldset>
                                            </section>
                                            <h2>Family (Next of Kin)</h2>
                                            <section style="overflow-y:auto;">
                                            <h4>Family (Next of Kin)</h4>
                                                <fieldset>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="firstname">Full Name</label>
                                                                <input id="firstname" class="form-control" name="firstname" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="category">Relationship</label>
                                                                <select class="btn btn-secondary form-control" id="category" name="category">
                                                                    <option selected disabled></option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="firstname">Email</label>
                                                                <input id="firstname" class="form-control" name="firstname" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="firstname">Phone</label>
                                                                <input id="firstname" class="form-control" name="firstname" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="firstname">Address</label>
                                                                <input id="firstname" class="form-control" name="firstname" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="firstname">Occupation</label>
                                                                <input id="firstname" class="form-control" name="firstname" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>

                                            </section>
                                            <h2>Dependents</h2>
                                            <section style="overflow-y:auto;">
                                            <h4>Dependents</h4>
                                                <fieldset>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="category">Surname</label>
                                                                <input id="firstname" class="form-control" name="firstname" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="category">First Name</label>
                                                                <input id="firstname" class="form-control" name="firstname" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="dob">Date of Birth</label>
                                                                <input type="date" class="form-control" name="dob" id="dob">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="category">Address</label>
                                                                <input id="firstname" class="form-control" name="firstname" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </section>
                                            <h2>Health Insurance</h2>
                                            <section style="overflow-y:auto;">
                                            <h4>Health Insurance</h4>
                                                <fieldset>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="category">Health Insurance Provider</label>
                                                                <input id="firstname" class="form-control" name="firstname" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="category">Hospital</label>
                                                                <input id="firstname" class="form-control" name="firstname" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="category">Address</label>
                                                                <input id="firstname" class="form-control" name="firstname" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="category">Contact Number</label>
                                                                <input id="firstname" class="form-control" name="firstname" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="dob">Start Date</label>
                                                                <input type="date" class="form-control" name="dob" id="dob">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="dob">End Date</label>
                                                                <input type="date" class="form-control" name="dob" id="dob">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </section>
                                            <h2>Account Information</h2>
                                            <section style="overflow-y:auto;">
                                            <h4>Account Information</h4>
                                                <fieldset>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="deptgroup">Bank</label>
                                                                <select class="btn btn-secondary form-control" id="deptgroup" name="deptgroup">
                                                                    <option selected disabled></option>
                                                                </select>
                                                            </div>
                                                        </div> 
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="category">Bank Account Number</label>
                                                                <input id="firstname" class="form-control" name="firstname" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </section>
                                            <h2>Pension Information</h2>
                                            <section style="overflow-y:auto;">
                                            <h4>Pension Information</h4>
                                                <fieldset>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="deptgroup">Pension Fund Administrator</label>
                                                                <select class="btn btn-secondary form-control" id="deptgroup" name="deptgroup">
                                                                    <option selected disabled></option>
                                                                </select>
                                                            </div>
                                                        </div>  
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="category">Pension Number</label>
                                                                <input id="firstname" class="form-control" name="firstname" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </section>
                                            <h2>Other Information</h2>
                                            <section style="overflow-y:auto;">
                                            <h4>Other Information</h4>
                                                <fieldset>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="category">NHF Number</label>
                                                                <input id="firstname" class="form-control" name="firstname" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </section>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('hr.layouts.footer')
        </div>
    </div>
    <script src="{{ asset('vendors/core/core.js') }}"></script>
    <script src="{{ asset('vendors/jquery-validation/jquery.validate.min.js') }}"></script>

    <!-- <script src="{{ asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
	<script src="{{ asset('js/datepicker.js') }}"></script> -->
    <!-- ------- -->
    <script src="{{ asset('js/inputmask.js') }}"></script>
    <script src="{{ asset('vendors/inputmask/jquery.inputmask.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery-tags-input/jquery.tagsinput.min.js') }}"></script>
    <script src="{{ asset('js/tags-input.js') }}"></script>

    <!-- --------- -->
    <!-- endinject -->
    <!-- plugin js for this page -->
    <!-- end plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('vendors/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('js/template.js') }}"></script>
    <!-- endinject -->
    <!-- custom js for this page -->
    <script src="{{ asset('js/wizard.js') }}"></script>
    <!-- custom js for this page -->
    <!-- end custom js for this page -->
    <!-- plugin js for this page -->
    <script src="{{ asset('vendors/jquery-steps/jquery.steps.min.js') }}"></script>
    <!-- end plugin js for this page -->
    <!-- inject:js -->
    <!-- <script src="../../../assets/vendors/feather-icons/feather.min.js"></script> -->
    <!-- <script src="../../../assets/js/template.js"></script> -->
    <!-- endinject -->
    <script src="{{ asset('js/file-upload.js') }}"></script>
    <!-- custom js for this page -->
    <!-- <script src="../../../assets/js/wizard.js"></script> -->
    <script src="{{ asset('js/form-validation.js') }}"></script>
    <!-- end custom js for this page -->
</body>

</html>