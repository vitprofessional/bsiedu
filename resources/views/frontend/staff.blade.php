@extends('frontend.include')
@section('bsititle')
@endsection
@section('bsicontent')
<div class="row">
   <style>
  div#myTable_paginate {
    position: relative;
    top: -24px;
    left: 67%;
    cursor: pointer;
}

a#myTable_previous, a#myTable_next {
    padding: 7px 15px;
    background: #000;
    boder: 4px;
    /* border: 6px; */
    color: #fff;
}

.staff-data .table-responsive {
    /* display: block; */
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
}
  @media only screen and (max-width: 600px) {
              div#myTable_paginate {
                position: relative;
                top: 5px;
                cursor: pointer;
                left: -11px;
            }
            .staff-data .table-responsive {
                 display: block; 
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
     }
a.paginate_button {
    padding: 12px;
}
    </style>
    <!--Video Section-->
    <div class="col-md-12 pt-0 pr-2 pl-2 pb-2">
        <!--Start News Events-->
        <div class="card">
            <div class="card-header bg-green p-2 radius-0">
                <h5 class="card-title mb-0 text-light">
                    <i class="fa fa-user-secret"></i>
                    Teacher & Staffs
                </h5>
            </div>
            <div class="card-body radius-0 staff-data">
               
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Mobile</th>
                                <th>Avatar</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $admin = \App\Models\AdminPanel::first();
                            @endphp
                            @php
                                if(count($staff)>0):
                                    foreach($staff as $stf):
                            @endphp
                            <tr>
                                <td>{{ $stf->name }}</td>
                                <td>{{ $stf->designation }}</td>
                                <td>{{ $stf->phone_number }}</td>
                                <td><img src="@if(!empty($stf->avatar)){{ asset('/') }}public/storage/frontend/uploads/staff/{{ $stf->avatar }} @else{{ asset('/') }}public/storage/frontend/uploads/staff/avatar.jpg @endif" class="img-fluid rounded" style="width:150px;height:150px" alt="{{ $stf->name }}" /></td>
                                <td><a href="{{ route('viewStaff',['id'=>$stf->id]) }}" class="btn btn-primary btn-sm text-white"><i class="fa fa-eye"></i></a>
                                </td>
                            </tr>
                            @php
                                    endforeach;
                                else:
                            @endphp
                            <tr>
                                <td colspan="5"><div class="alert alert-warning">Sorry! No data found</div></td>
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
@endsection