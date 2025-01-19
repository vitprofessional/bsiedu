@extends('backdoor.include')
@section('bsiadmintitle')
@endsection
@section('bsiadmincontent')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid"> <!-- coustom image -->
            <div class="row">
                <div class="col-md-6 m-auto">
                    <div class="card">
                        <div class="card-header"> <h3>Update Student </h3> </div>
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
                    @php
                        if(!empty($profile)>0):
                    @endphp
                    <div class="row">
                        <div class="col-6 col-md-4">
                            @php
                                if(!empty($profile->avatar)):
                            @endphp
                            <div class="form-group">
                                <iframe src="{{ asset('/') }}{{ $profile->avatar }}" alt="{{ $profile->name }}"></iframe>
                            </div>
                            <div class="form-group">
                                <a class="btn btn-danger btn-sm" href="{{ route('delStudentPic',['id'=>$profile->id]) }}">Delete Picture</a>
                            </div>
                            @php
                                else:
                            @endphp
                            <!--<form class="form" method="POST" action="{{ route('updatestudentpic') }}" enctype="multipart/form-data">-->
                            <!--    {{ csrf_field() }}-->
                            <!--    <input type="text" name="proid" value="{{ $profile->id }}">-->
                            <!--    <div class="form-group">-->
                            <!--        <input class="form-control" type="file" name="avatar">-->
                            <!--    </div>-->
                            <!--    <div class="form-group">-->
                            <!--        <input type="submit" value="Upload Picture" class="btn btn-success btn-sm">-->
                            <!--    </div>-->
                            <!--</form>-->
                            @php
                                endif;
                            @endphp
                        </div>
                    </div>
                           
                    <form class="form text-danger font-weight-bold" action="{{ route('updateStudent') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="proid" value="{{ $profile->id }}">
                        <div class="row">
                                <div class="form-group">
                                    <lable for="studentname">Student Name</lable>
                                    <input type="text" class="form-control" name="studentname" value="{{ $profile->name }}" placeholder="Enter full name" required>
                                </div>

                                <!--<div class="form-group">-->
                                <!--    <lable for="fname">Father Name</lable>-->
                                <!--    <input type="text" class="form-control" name="fname" value="{{ $profile->father_name }}" placeholder="Enter father name" required>-->
                                <!--</div>-->
                                <!--<div class="form-group">-->
                                <!--    <lable for="mname">Mother Name</lable>-->
                                <!--    <input type="text" value="{{ $profile->mother_name }}" class="form-control" name="mname" placeholder="Enter mother name" required>-->
                                <!--</div>-->
                                <!--<div class="form-group">-->
                                <!--    <lable for="session">Session</lable>-->
                                <!--    <input type="text" value="{{ $profile->session }}" placeholder="Enter student admit session" class="form-control" name="session">-->
                                <!--</div>-->
                                <!--<div class="form-group">-->
                                <!--    <lable for="semister">Semister</lable>-->
                                <!--    <select class="form-control" name="semister">-->
                                <!--        <option value="{{ $profile->semister }}">{{ $profile->semister }}</option>-->
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
                                <!--    <lable for="roll_number">Roll No</lable>-->
                                <!--    <input type="text" class="form-control" name="roll_number" value="{{ $profile->roll_number }}" placeholder="Enter board roll number" required>-->
                                <!--</div>-->
                                <!--<div class="form-group">-->
                                <!--    <lable for="regi_number">Regi. No</lable>-->
                                <!--    <input type="text" class="form-control" name="regi_number" value="{{ $profile->regi_no }}" placeholder="Enter board registration number" required>-->
                                <!--</div>-->
                                <!--<div class="form-group">-->
                                <!--    <lable for="mobile">Mobile Number</lable>-->
                                <!--    <input type="text" class="form-control" name="mobile" value="{{ $profile->phone_number }}" placeholder="Enter a valid mobile number" required>-->
                                <!--</div>-->
                                <!--<div class="form-group">-->
                                <!--    <lable for="email">Email</lable>-->
                                <!--    <input type="text" class="form-control" name="email" value="{{ $profile->email }}" placeholder="Enter a vaild email address" required>-->
                                <!--</div>-->
                                <!--<div class="form-group">-->
                                <!--    <lable for="pre_address">Present Address</lable>-->
                                <!--    <textarea class="form-control" name="pre_address" placeholder="Enter present address here">{{ $profile->pre_address }}</textarea>-->
                                <!--</div>-->
                                <!--<div class="form-group">-->
                                <!--    <lable for="per_address">Permanent Address</lable>-->
                                <!--    <textarea class="form-control" name="per_address" placeholder="Enter permanent address here">{{ $profile->per_address }}</textarea>-->
                                <!--</div>-->
                                <!--<div class="form-group">-->
                                <!--    <lable for="gender">Gender</lable>-->
                                <!--    <select class="form-control" name="gender">-->
                                <!--        <option value="{{ $profile->gender }}">{{ $profile->gender }}</option>-->
                                <!--        <option value="Male">Male</option>-->
                                <!--        <option value="Female">Female</option>-->
                                <!--    </select>-->
                                <!--</div>-->
                                <!--<div class="form-group">-->
                                <!--    <lable for="dateob">Birth Date</lable>-->
                                <!--    <input type="date" value="{{ $profile->birth_date }}" class="form-control" name="dateob">-->
                                <!--</div>-->
                                <!--<div class="form-group">-->
                                <!--    <lable for="blgroup">Blood Group</lable>-->
                                <!--    <select class="form-control" name="blgroup">-->
                                <!--        <option value="{{ $profile->bl_group }}">{{ $profile->bl_group }}</option>-->
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
                                <!--        <option value="{{ $profile->religion }}">{{ $profile->religion }}</option>-->
                                <!--        <option value="Islam">Islam</option>-->
                                <!--        <option value="Hindu">Hindu</option>-->
                                <!--        <option value="Buddhism">Buddhism</option>-->
                                <!--        <option value="Khristan">Khristan</option>-->
                                <!--        <option value="Other">Other</option>-->
                                <!--    </select>-->
                                <!--</div>-->
                                <!--<div class="form-group">-->
                                <!--    <lable for="prostatus">Profile Status</lable>-->
                                <!--    <select class="form-control" name="prostatus">-->
                                <!--        <option value="{{ $profile->status }}">{{ $profile->status }}</option>-->
                                <!--        <option value="Active">Active</option>-->
                                <!--        <option value="Retire">Retire</option>-->
                                <!--        <option value="Terminate">Terminate</option>-->
                                <!--        <option value="Inactive">Inactive</option>-->
                                <!--    </select>-->
                                <!--</div>-->
                                <div class="form-group">
                                    <input class="form-control" type="file" name="avatar">
                                </div>
                                <div class="form-group mt-2">
                                    <input type="submit" value="Submit" class="btn btn-primary">
                                    <a class="btn btn-success" href="{{ route('backstudent') }}">Student List</a>
                                </div>
                            </form>
                    @php
                        else:
                            echo "<div class='alert alert-warning'>Sorry! No Data Found</div>";
                        endif;
                    @endphp
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection