@extends('backdoor.include')
@section('bsiadmintitle')
@endsection
@section('bsiadmincontent')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid"> <!-- coustom image -->
            <div class="row">
                <div class="col-12 col-md-10 mx-auto">
                    <div class="card card-default">
                        <div class="card-header">Create New Profile</div>
                        <div class="card-body">
                            @if(Session::get('success'))
                              <div class="alert alert-success">
                                <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                                  <i class="material-icons">close</i>
                                </button>
                                <span>{!! Session::get('success') !!}</span>
                              </div>
                            @endif
                            @if(Session::get('error'))
                              <div class="alert alert-warning">
                                <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                                  <i class="material-icons">close</i>
                                </button>
                                <span>{!! Session::get('error') !!}</span>
                              </div>
                            @endif  
                            <form class="form row" method="POST" action="{{ route('createProfile') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" name="profileType" value="{{ $profileType }}">
                                <div class="col-12 col-md-6 my-2">
                                    <div class="form-group">
                                        <lable for="fullName">Full Name</lable>
                                        <input type="text" class="form-control" name="fullName" placeholder="Enter full name" required>
                                    </div>
                                    <div class="form-group my-2">
                                        <lable for="fatherName">Father Name</lable>
                                        <input type="text" class="form-control" name="fatherName" placeholder="Enter father name" required>
                                    </div>
                                    <div class="form-group my-2">
                                        <lable for="motherName">Mother Name</lable>
                                        <input type="text" class="form-control" name="motherName" placeholder="Enter mother name" required>
                                    </div>
                                    <div class="form-group my-2">
                                        <lable for="email">Email</lable>
                                        <input type="text" class="form-control" name="email" placeholder="Enter email" required>
                                    </div>
                                    <div class="form-group my-2">
                                        <lable for="mobile">Contact Number</lable>
                                        <input type="text" class="form-control" name="mobile" placeholder="Enter  mobile number" required>
                                    </div>
                                    <div class="form-group my-2">
                                        <lable for="dob">Date of Birth</lable>
                                        <input type="text" class="form-control" name="dob" placeholder="Example: 26/07/1994" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group my-2">
                                        <lable for="designation">Designation</lable>
                                        <select class="form-control" name="designation">
                                            @if($profileType=="Teacher")
                                            <option value="Principal">Principal</option>
                                            <option value="Vice Principal">Vice Principal</option>
                                            <option value="Chief Instructor(Tech)">Chief Instructor(Tech)</option>
                                            <option value="Chief Instructor(Non-Tech)">Chief Instructor(Non-Tech)</option>
                                            <option value="Instructor(Tech)">Instructor(Tech)</option>
                                            <option value="Instructor(Non-Tech)">Instructor(Non-Tech)</option>
                                            <option value="Junior Instructor(Tech)">Junior Instructor(Tech)</option>
                                            <option value="Junior Instructor(Non-Tech)">Junior Instructor(Non-Tech)</option>
                                            @else
                                            <option value="Head Assistant">Head Assistant</option>
                                            <option value="Craft Instructor(TR)">Craft Instructor(TR)</option>
                                            <option value="Craft Instructor(Shop)">Craft Instructor(Shop)</option>
                                            <option value="Lab Assistant">Lab Assistant</option>
                                            <option value="Office Assistant">Office Assistant</option>
                                            <option value="MLS">MLS</option>
                                            @endif
                                        </select>
                                    </div>
                                    <div class="form-group my-2">
                                        <lable for="rank">Rank/Position</lable>
                                        <select class="form-control" name="rank">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                            <option value="32">32</option>
                                            <option value="33">33</option>
                                            <option value="34">34</option>
                                            <option value="35">35</option>
                                            <option value="36">36</option>
                                            <option value="37">37</option>
                                            <option value="38">38</option>
                                            <option value="39">39</option>
                                            <option value="40">40</option>
                                        </select>
                                    </div>
                                    <div class="form-group my-2">
                                        <lable for="joinDate">Joining Date Here</lable>
                                        <input type="text" class="form-control" name="joinDate" placeholder="Example: 10/12/2022" required>
                                    </div>
                                    <div class="form-group my-2">
                                        <lable for="religion">Religion</lable>
                                        <select class="form-control" name="religion">
                                            <option value="Islam">Islam</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Buddhism">Buddhism</option>
                                            <option value="Khristian">Khristian</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                    <div class="form-group my-2">
                                        <lable for="blGroup">Blood Group</lable>
                                        <select class="form-control" name="blGroup">
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                        </select>
                                    </div>
                                    <div class="form-group my-2">
                                        <lable for="avatar">Photo</lable>
                                        <input class="form-control" type="file" name="avatar">
                                    </div>
                                </div>
                                <div class="form-group my-2">
                                    <input type="submit" value="Save Profile" class="btn btn-success btn-sm">
                                    <a class="btn btn-primary btn-sm  m-2" href="{{ route('teacherPanel') }}">All Teacher</a>
                                    <a class="btn btn-info btn-sm  m-2" href="{{ route('employeePanel') }}">All Employee</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>