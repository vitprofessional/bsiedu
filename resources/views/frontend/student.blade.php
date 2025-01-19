@extends('frontend.include')
@section('bsititle')
@endsection
@section('bsicontent')
<div class="row">

    <!--Video Section-->
    <div class="col-md-12 pt-0 pr-2 pl-2 pb-2">
        <!--Start News Events-->
        <div class="card">
            <div class="card-header bg-green p-2 radius-0">
                <h5 class="card-title mb-0 text-light">
                    <i class="fa fa-users"></i>
                    BSI Student
                </h5>
            </div>
            <div class="card-body radius-0" style="background-color: #fff;">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Session</th>
                                <th>Roll</th>
                                <th>Reg. Number</th>
                                <th>Avatar</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                if(count($student)>0):
                                    foreach($student as $std):
                            @endphp
                            <tr>
                                <td>{{ $std->name }}</td>
                                <td>{{ $std->session }}</td>
                                <td>{{ $std->roll_number }}</td>
                                <td>{{ $std->regi_no }}</td>
                                <td><img src="{{ asset('/') }}public/storage/frontend/uploads/student/{{ $std->avatar }}" class="img-fluid rounded" alt="{{ $std->name }}" /></td>
                                <td><a href="{{ route('viewStudent',['id'=>$std->id]) }}" class="btn btn-primary btn-sm text-white"><i class="fa fa-eye"></i></a>
                                </td>
                            </tr>
                            @php
                                    endforeach;
                                else:
                            @endphp
                            <tr>
                                <td colspan="6"><div class="alert alert-warning">Sorry! No data found</div></td>
                            </tr>
                            @php
                                endif;
                            @endphp
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection