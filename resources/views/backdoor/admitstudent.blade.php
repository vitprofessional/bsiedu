@extends('backdoor.include')
@section('bsiadmintitle')
@endsection
@section('bsiadmincontent')
 <style>
    .require
    {
        color:red;
    }
</style>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid"> <!-- coustom image -->
            <div class="row">
                <div class="col-md-6 col-12 m-auto h-100">
                    <div class="card">
                        <div class="card-header"> <h3>Student Existing </h3> </div>
                        <div class="card-body">
                            @if(Session::get('success'))
                              <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <i class="material-icons">close</i>
                                </button>
                                <span>{!! Session::get('success') !!}</span>
                              </div>
                            @endif
                            @if(Session::get('error'))
                              <div class="alert alert-warning">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <i class="material-icons">close</i>
                                </button>
                                <span>{!! Session::get('error') !!}</span>
                              </div>
                            @endif  
                            <!--<form class="form text-danger font-weight-bold" action="{{ route('admitstudent') }}" method="post" enctype="multipart/form-data">-->
                            <!--    {{ csrf_field() }} -->
                            <!--    <div class="form-group">-->
                            <!--        <lable for="studentname">Student Name <span class="require">*</span></lable>-->
                            <!--        <input type="text" class="form-control" name="studentname" placeholder="Enter full name" required>-->
                            <!--    </div>-->
                                <!--<div class="form-group">-->
                                <!--    <lable for="fname">Father Name <span class="require">*</span></lable>-->
                                <!--    <input type="text" class="form-control" name="fname" placeholder="Enter father name" required>-->
                                <!--</div>-->
                                <!--<div class="form-group">-->
                                <!--    <lable for="mname">Mother Name <span class="require">*</span></lable>-->
                                <!--    <input type="text" class="form-control" name="mname" placeholder="Enter mother name" required>-->
                                <!--</div>-->
                                <!--<div class="form-group">-->
                                <!--    <lable for="session">Session <span class="require">*</span></lable>-->
                                <!--    <input type="text" placeholder="Enter student admit session" class="form-control" name="session" required>-->
                                <!--</div>-->
                                <!--<div class="form-group">-->
                                <!--    <lable for="semister">Semister <span class="require">*</span></lable>-->
                                <!--    <select class="form-control" name="semister" required>-->
                                <!--        <option value="1st Semister">1st Semister</option>-->
                                <!--        <option value="2nd Semister">2nd Semister</option>-->
                                <!--        <option value="3rd Semister">3rd Semister</option>-->
                                <!--        <option value="4th Semister">4th Semister</option>-->
                                <!--        <option value="5th Semister">5th Semister</option>-->
                                <!--        <option value="6th Semister">6th Semister</option>-->
                                <!--        <option value="7th Semister">7th Semister</option>-->
                                <!--        <option value="8th Semister">8th Semister</option>-->
                                <!--    </select>-->
                                <!--</div>-->
                                <!--<div class="form-group">-->
                                <!--    <lable for="roll_number">Roll No <span class="require">*</span></lable>-->
                                <!--    <input type="text" class="form-control" name="roll_number" placeholder="Enter board roll number" required>-->
                                <!--</div>-->
                                <!--<div class="form-group">-->
                                <!--    <lable for="regi_number">Regi. No <span class="require">*</span></lable>-->
                                <!--    <input type="text" class="form-control" name="regi_number" placeholder="Enter board registration number" required>-->
                                <!--</div>-->
                                <!--<div class="form-group">-->
                                <!--    <lable for="mobile">Mobile Number <span class="require">*</span></lable>-->
                                <!--    <input type="text" class="form-control" name="mobile" placeholder="Enter a valid mobile number" required>-->
                                <!--</div>-->
                                <!--<div class="form-group">-->
                                <!--    <lable for="email">Email <span class="require">*</span></lable>-->
                                <!--    <input type="text" class="form-control" name="email" placeholder="Enter a vaild email address" required>-->
                                <!--</div>-->
                                <!--<div class="form-group">-->
                                <!--    <lable for="pre_address">Present Address</lable>-->
                                <!--    <textarea class="form-control" name="pre_address" placeholder="Enter present address here"></textarea>-->
                                <!--</div>-->
                                <!--<div class="form-group">-->
                                <!--    <lable for="per_address">Permanent Address</lable>-->
                                <!--    <textarea class="form-control" name="per_address" placeholder="Enter permanent address here"></textarea>-->
                                <!--</div>-->
                                <!--<div class="form-group">-->
                                <!--    <lable for="gender">Gender <span class="require">*</span></lable>-->
                                <!--    <select class="form-control" name="gender" reqiired>-->
                                <!--        <option value="Male">Male</option>-->
                                <!--        <option value="Female">Female</option>-->
                                <!--    </select>-->
                                <!--</div>-->
                                <!--<div class="form-group">-->
                                <!--    <lable for="dateob">Birth Date <span class="require">*</span></lable>-->
                                <!--    <input type="date" class="form-control" name="dateob" required>-->
                                <!--</div>-->
                                <!--<div class="form-group">-->
                                <!--    <lable for="blgroup">Blood Group</lable>-->
                                <!--    <select class="form-control" name="blgroup">-->
                                <!--        <option value="A+">A+</option>-->
                                <!--        <option value="B+">B+</option>-->
                                <!--        <option value="AB+">AB+</option>-->
                                <!--        <option value="O+">O+</option>-->
                                <!--        <option value="A-">A-</option>-->
                                <!--        <option value="B-">B-</option>-->
                                <!--        <option value="AB-">AB-</option>-->
                                <!--        <option value="O-">O-</option>-->
                                <!--    </select>-->
                                <!--</div>-->
                                <!--<div class="form-group">-->
                                <!--    <lable for="religion">Religion</lable>-->
                                <!--    <select class="form-control" name="religion">-->
                                <!--        <option value="Islam">Islam</option>-->
                                <!--        <option value="Hindu">Hindu</option>-->
                                <!--        <option value="Buddhism">Buddhism</option>-->
                                <!--        <option value="Khristan">Khristan</option>-->
                                <!--        <option value="Other">Other</option>-->
                                <!--    </select>-->
                                <!--</div>-->
                                <!--<div class="form-group">-->
                                <!--    <lable for="prostatus">Profile Status <span class="require">*</span></lable>-->
                                <!--    <select class="form-control" name="prostatus" requird>-->
                                <!--        <option value="Active">Active</option>-->
                                <!--        <option value="Retire">Retire</option>-->
                                <!--        <option value="Terminate">Terminate</option>-->
                                <!--        <option value="Inactive">Inactive</option>-->
                                <!--    </select>-->
                                <!--</div>-->
                            <!--    <div class="form-group">-->
                            <!--        <lable for="avatar">Profile Picture <span class="require">*</span></lable>-->
                            <!--        <input class="form-control" type="file" name="avatar" required>-->
                            <!--    </div>-->
                            <!--    <div class="form-group mt-2">-->
                            <!--        <input type="submit" value="Submit" class="btn btn-primary mt-2">-->
                            <!--        <a class="btn btn-success" href="{{ route('backstudent') }}">Student List</a>-->
                            <!--    </div>-->
                            <!--</form>-->
                            <div class="alert alert-info">Sorry! This page is under construction</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div
@endsection