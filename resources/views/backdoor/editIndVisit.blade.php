@extends('backdoor.include')
@section('bsiadmintitle')
Update Industry
@endsection
@section('bsiadmincontent')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid"> <!-- coustom image -->
            <div class="row">
                <div class="col-12 col-md-10 mx-auto">
                    <div class="card card-default">
                        <div class="card-header fw-bold">Update Industry</div>
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
                            <form class="form row" method="POST" action="{{ route('updateIndVisit') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" name="industryId" value="{{ $industry->id }}">
                                <div class="col-12 col-md-6 my-2">
                                    <div class="form-group">
                                        <lable for="companyName">Company Name</lable>
                                        <input type="text" class="form-control" name="companyName" value="{{ $industry->name }}" placeholder="Enter company name" required>
                                    </div>
                                    <div class="form-group my-2">
                                        <lable for="email">Email</lable>
                                        <input type="text" class="form-control" name="email" value="{{ $industry->email }}" placeholder="Enter valid email address" required>
                                    </div>
                                    <div class="form-group my-2">
                                        <lable for="visitDate">Visit Date</lable>
                                        <input type="text" class="form-control" name="visitDate" value="{{ $industry->visitDate }}" placeholder="Example: 10/12/2022" required>
                                    </div>
                                    @if(!empty($industry->remark))
                                    <div class="form-group my-2">
                                        <lable for="avatar">Log File</lable>
                                        @php
                                            $extension = pathinfo(asset('storage/app/public/frontend/uploads/industryVisit').'/'.$industry->remark, PATHINFO_EXTENSION);
                                        @endphp
                                        @if($extension == 'pdf' || $extension == 'PDF')
                                        <iframe class="w-100 mb-4" src="{{ asset('storage/app/public/frontend/uploads/industryVisit').'/'.$industry->remark }}" alt="{!! $industry->name !!}" style="width:100%;height:170px !important"></iframe>
                                        @else
                                        <img class="w-100 mb-4" src="{{ asset('storage/app/public/frontend/uploads/industryVisit').'/'.$industry->remark }}" alt="{!! $industry->name !!}">
                                        @endif
                                        <a href="{{ route('delVisitFile',['id'=>$industry->id]) }}">Delete</a>
                                    </div>
                                    @else
                                        <input class="form-control" type="file" name="avatar">
                                    @endif
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group my-2">
                                        <lable for="location">Location</lable>
                                        <input type="text" class="form-control" name="location" value="{{ $industry->location }}" placeholder="Enter company address" required>
                                    </div>
                                    <div class="form-group my-2">
                                        <lable for="mobile">Phone Number</lable>
                                        <input type="text" class="form-control" name="mobile" value="{{ $industry->mobile }}" placeholder="Enter mobile number" required>
                                    </div>
                                </div>
                                <div class="form-group my-2">
                                    <input type="submit" value="Update" class="btn btn-success btn-sm">
                                    <a class="btn btn-primary btn-sm  m-2" href="{{ route('indVisit') }}">Industry List</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 my-2</div>