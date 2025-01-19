@extends('frontend.include')
@section('bsititle')
@endsection
@section('bsicontent')
<div class="row align-items-center">

    <!--Video Section-->
    <div class="col-md-12 pt-0 pr-2 pl-2 pb-2">
        <!--Start News Events-->
        <div class="card">
            <div class="card-header bg-green p-2 radius-0">
                <h5 class="card-title mb-0 text-light">
                    <i class="fa fa-user-secret"></i>
                    Profile
                </h5>
            </div>
            <div class="card-body radius-0" style="background-color: #fff;">
                <div class="table-responsive">
                    @php
                        if(count(array($staff))>0):
                    @endphp
                    <table class="table table-bordered">
                        <tr>
                            <td colspan="2" class="d-block d-md-none">
                                <img src="@if(!empty($staff->avatar)){{ asset('/') }}public/storage/frontend/uploads/staff/{{ $staff->avatar }} @else {{ asset('/') }}public/storage/frontend/uploads/staff/avatar.jpg @endif" style="width:150px;height:150px" class="img-fluid rounded" alt="{{ $staff->name }}" />
                            </td>
                        </tr>
                        <tr>
                            <td class="d-none d-md-block">
                                <img src="@if(!empty($staff->avatar)){{ asset('/') }}public/storage/frontend/uploads/staff/{{ $staff->avatar }} @else {{ asset('/') }}public/storage/frontend/uploads/staff/avatar.jpg @endif" style="width:150px;height:150px" class="img-fluid rounded" alt="{{ $staff->name }}" />
                            </td>
                            <td>
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Name</th>
                                        <td>{{ $staff->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Designation</th>
                                        <td>{{ $staff->designation }}</td>
                                    </tr>
                                    <tr>
                                        <th>Mobile</th>
                                        <td>{{ $staff->phone_number }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{ $staff->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Educational Background</th>
                                        <td>{{ $staff->edu_quality }}</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <table class="table table-bordered table-left">
                        <tr>
                            <th>Father Name</th>
                            <td>{{ $staff->father_name }}</td>
                        </tr>
                        <tr>
                            <th>Mother Name</th>
                            <td>{{ $staff->mother_name }}</td>
                        </tr>
                        <tr>
                            <th>Blood Group</th>
                            <td>{{ $staff->bl_group }}</td>
                        </tr>
                        <tr>
                            <th>Gender</th>
                            <td>{{ $staff->gender }}</td>
                        </tr>
                        <tr>
                            <th>Date of Birth</th>
                            <td>{{ $staff->birth_date }}</td>
                        </tr>
                        <tr>
                            <th>Joining Date</th>
                            <td>{{ $staff->join_date }}</td>
                        </tr>
                        <tr>
                            <th>Merital Status</th>
                            <td>{{ $staff->merital_status }}</td>
                        </tr>
                        <tr>
                            <th>Religion</th>
                            <td>{{ $staff->religion }}</td>
                        </tr>
                        <tr>
                            <th>Present Address</th>
                            <td>{{ $staff->pre_address }}</td>
                        </tr>
                        <tr>
                            <th>Permanent Address</th>
                            <td>{{ $staff->per_address }}</td>
                        </tr>
                    </table>
                    @php
                        elseif(count(array($student))>0):
                    @endphp
                    <table class="table table-bordered">
                        <tr>
                            <td>
                                <img src="{{ asset('/') }}public/storage/frontend/uploads/student/{{ $student->avatar }}" class="img-fluid rounded" alt="{{ $stf->name }}" />
                            </td>
                            <td>
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Name</th>
                                        <td>{{ $student->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Roll Number</th>
                                        <td>{{ $student->roll_number }}</td>
                                    </tr>
                                    <tr>
                                        <th>Registration No</th>
                                        <td>{{ $student->regi_no }}</td>
                                    </tr>
                                    <tr>
                                        <th>Session</th>
                                        <td>{{ $student->session }}</td>
                                    </tr>
                                    <tr>
                                        <th>Semister</th>
                                        <td>{{ $student->semister }}</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <table class="table table-bordered table-left">
                        <tr>
                            <th>Date of Birth</th>
                            <td>{{ $student->birth_date }}</td>
                        </tr>
                        <tr>
                            <th>Father Name</th>
                            <td>{{ $student->father_name }}</td>
                        </tr>
                        <tr>
                            <th>Mother Name</th>
                            <td>{{ $student->mother_name }}</td>
                        </tr>
                        <tr>
                            <th>Blood Group</th>
                            <td>{{ $student->bl_group }}</td>
                        </tr>
                        <tr>
                            <th>Gender</th>
                            <td>{{ $student->gender }}</td>
                        </tr>
                        <tr>
                            <th>Mobile</th>
                            <td>{{ $student->phone_number }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $student->email }}</td>
                        </tr>
                        <tr>
                            <th>Religion</th>
                            <td>{{ $student->religion }}</td>
                        </tr>
                        <tr>
                            <th>Present Address</th>
                            <td>{{ $student->pre_address }}</td>
                        </tr>
                        <tr>
                            <th>Permanent Address</th>
                            <td>{{ $student->per_address }}</td>
                        </tr>
                    </table>
                    @php
                        else:
                            echo "<div class='alert alert-warning'>Sorry! No data found with your query</div>";
                        endif;
                    @endphp
                </div>
            </div>
        </div>
    </div>
</div>
@endsection