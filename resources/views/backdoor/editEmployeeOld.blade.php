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
                        <div class="card-header fw-bold">Update Employee Profile</div>
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
                            @if(!empty($employee))
                            <form class="form row" method="POST" action="{{ route('updateEmployeePic') }}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="staffId" value="{{ $employee->id }}">
                                @if(!empty($employee->avatar))
                                <div class="col-4 col-md-2 my-2 mx-auto">
                                    <div class="form-group my-2">
                                        <img class="w-100" src="{{ asset('/public/storage/frontend/uploads/staff/'.$employee->avatar) }}" alt="{{ $employee->name }}">
                                        <div class="mt-1">
                                            <a href="{{ route('delEmployeePic',['id'=>$employee->id]) }}" class="btn btn-danger btn-sm w-100">Delete</a>
                                        </div>
                                    </div>
                                @else
                                <div class="col-4 col-md-4 my-2 mx-auto">
                                    <div class="form-group my-2">
                                        <lable for="avatar">Photo</lable>
                                        <input class="form-control" type="file" name="avatar">
                                    </div>
                                    <div class="mt-1">
                                        <input type="submit" class="btn btn-success btn-sm w-100" value="Update Photo">
                                    </div>
                                @endif
                                </div>
                            </form>
                            <form class="form row" method="POST" action="{{ route('updateEmployee') }}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="staffId" value="{{ $employee->id }}">
                                <div class="col-12 col-md-6 my-2">
                                    <div class="form-group">
                                        <lable for="fullName">Employee Name</lable>
                                        <input type="text" class="form-control" name="fullName" placeholder="Enter full name" value="{{ $employee->name }}" required>
                                    </div>
                                    <div class="form-group my-2">
                                        <lable for="fatherName">Father Name</lable>
                                        <input type="text" class="form-control" name="fatherName" placeholder="Enter father name" value="{{ $employee->father_name }}" required>
                                    </div>
                                    <div class="form-group my-2">
                                        <lable for="motherName">Mother Name</lable>
                                        <input type="text" class="form-control" name="motherName" placeholder="Enter mother name" value="{{ $employee->mother_name }}" required>
                                    </div>
                                    <div class="form-group my-2">
                                        <lable for="email">Email</lable>
                                        <input type="text" class="form-control" name="email" value="{{ $employee->email }}" placeholder="Enter email" required>
                                    </div>
                                    <div class="form-group my-2">
                                        <lable for="mobile">Contact Number</lable>
                                        <input type="text" class="form-control" name="mobile" placeholder="Enter  mobile number" value="{{ $employee->phone_number }}" required>
                                    </div>
                                    <div class="form-group my-2">
                                        <lable for="dob">Date of Birth</lable>
                                        <input type="text" class="form-control" name="dob" placeholder="Example: 26/07/1994" value="{{ $employee->birth_date }}" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group my-2">
                                        <lable for="designation">Designation</lable>
                                        <select class="form-control" name="designation">
                                            <option value="{{ $employee->designation }}">{{ $employee->designation }}</option>Staff
                                        </select>
                                    </div>
                                    <div class="form-group my-2">
                                        <lable for="rank">Rank/Position</lable>
                                        <select class="form-control" name="rank">
                                            <option value="{{ $employee->rank }}">{{ $employee->rank }}</option>
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
                                        </select>
                                    </div>
                                    <div class="form-group my-2">
                                        <lable for="joinDate">Joining Date Here</lable>
                                        <input type="text" class="form-control" name="joinDate" placeholder="Example: 10/12/2022" value="{{ $employee->joining_date }}" required>
                                    </div>
                                    <div class="form-group my-2">
                                        <lable for="religion">Religion</lable>
                                        <select class="form-control" name="religion">
                                            <option value="{{ $employee->religion }}">{{ $employee->religion }}</option>
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
                                            <option value="{{ $employee->bl_group }}">{{ $employee->bl_group }}</option>
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
                                </div>
                                <div class="form-group my-2">
                                    <input type="submit" value="Update Profile" class="btn btn-success btn-sm">
                                    <a class="btn btn-primary btn-sm  m-2" href="{{ route('employeePanel') }}">All Staff</a>
                                    <a class="btn btn-info btn-sm  m-2" href="{{ route('newEmployeeProfile') }}">Create New Profile</a>
                                </div>
                            </form>
                            @else
                            <div class="alert alert-info">Sorry! No profile found for update</div>
                            <a class="btn btn-success btn-sm  m-2" href="{{ route('employeePanel') }}">All Staff</a>
                            <a class="btn btn-info btn-sm  m-2" href="{{ route('newEmployeeProfile') }}">Create New Profile</a>
                            @endif 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 my-2</div>