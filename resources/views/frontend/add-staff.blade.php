@extends('frontend.include')
@section('bsititle')
@endsection
@section('bsicontent')
<div class="row">
    <style>
        .require{
            color:red;
        }
    </style>
    <div class="col-md-12 pt-0 pr-2 pl-2 pb-2">
        <div class="row align-items-center">
            <div class="col-md-12 mt-1 mb-1">
                <div id="box-1" class="card card-body">
                    <h5>Teacher & Staff</h5>
                  <span class="require"> * Required field</span>
                    <hr class="mt-0" />
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
                    <form class="form text-danger font-weight-bold" action="{{ route('createstaff') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <lable for="staffname">Full Name <span class="require">*</span></lable>
                                    <input type="text" class="form-control" name="staffname" placeholder="Enter full name" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <lable for="fname">Father <span class="require">*</span></lable>
                                    <input type="text" class="form-control" name="fname" placeholder="Enter father name" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <lable for="mname">Mother <span class="require">*</span></lable>
                                    <input type="text" class="form-control" name="mname" placeholder="Enter mother name" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <lable for="designation">Designation <span class="require">*</span></lable>
                                    <select class="form-control" name="designation" required>
                                        <option value="">1) Principal</option>
                                        <option value="1Principal">1) Principal</option>
                                        <option value="2Chief Instructor">2) Chief Instructor</option>
                                        <option value="3Instructor">3) Instructor</option>
                                        <option value="4Junior Instructor">4) Junior Instructor</option>
                                        <option value="5Craft Instructor(TR)">5) Craft Instructor(TR)</option>
                                        <option value="6Craft Instructor(Shop)">6) Craft Instructor(Shop)</option>
                                        <option value="7Staff">7) Staff</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <lable for="mobile">Mobile Number <span class="require">*</span></lable>
                                    <input type="text" class="form-control" name="mobile" placeholder="Enter a valid mobile number" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <lable for="email">Email <span class="require">*</span></lable>
                                    <input type="text" class="form-control" name="email" placeholder="Enter a vaild email address" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <lable for="pre_address">Present Address</lable>
                                    <textarea class="form-control" name="pre_address" placeholder="Enter present address here"></textarea>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <lable for="per_address">Permanent Address</lable>
                                    <textarea class="form-control" name="per_address" placeholder="Enter permanent address here"></textarea>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <lable for="gender">Gender</lable>
                                    <select class="form-control" name="gender">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <lable for="dateob">Birth Date <span class="require">*</span></lable>
                                    <input type="date" class="form-control" name="dateob" >
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <lable for="joindate">Join Date <span class="require">*</span></lable>
                                    <input type="date" class="form-control" name="joindate" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <lable for="mstatus">Merital Status</lable>
                                    <select class="form-control" name="mstatus">
                                        <option value="Marrid">Marrid</option>
                                        <option value="Unmarrid">Unmarrid</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <lable for="eduquality">Qualification <span class="require">*</span></lable>
                                    <input type="text" class="form-control" name="eduquality" placeholder="Educational qualification details" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <lable for="blgroup">BL Group</lable>
                                    <select class="form-control" name="blgroup">
                                        <option value="A+">A+</option>
                                        <option value="B+">B+</option>
                                        <option value="AB+">AB+</option>
                                        <option value="O+">O+</option>
                                        <option value="A-">A-</option>
                                        <option value="B-">B-</option>
                                        <option value="AB-">AB-</option>
                                        <option value="O-">O-</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <lable for="religion">Religion</lable>
                                    <select class="form-control" name="religion">
                                        <option value="Islam">Islam</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddhism">Buddhism</option>
                                        <option value="Khristan">Khristan</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <lable for="avatar">Photo <span class="require">*</span></lable>
                                    <input class="form-control" type="file" name="avatar" required>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <div class="form-group text-left">
                                    <input type="submit" value="Submit" class="btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection