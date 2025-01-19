@extends('backdoor.include')
@section('bsiadmintitle')
New Industry Linkage
@endsection
@section('bsiadmincontent')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid"> <!-- coustom image -->
            <div class="row">
                <div class="col-12 col-md-10 mx-auto">
                    <div class="card card-default">
                        <div class="card-header fw-bold">Create New Industry</div>
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
                            <form class="form row" method="POST" action="{{ route('saveLinkageIndustry') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="col-12 col-md-6 my-2">
                                    <div class="form-group">
                                        <lable for="companyName">Company Name</lable>
                                        <input type="text" class="form-control" name="companyName" placeholder="Enter company name" required>
                                    </div>
                                    <div class="form-group my-2">
                                        <lable for="email">Email</lable>
                                        <input type="text" class="form-control" name="email" placeholder="Enter valid email address" required>
                                    </div>
                                    <div class="form-group my-2">
                                        <lable for="mobile">Phone Number</lable>
                                        <input type="text" class="form-control" name="mobile" placeholder="Enter mobile number" required>
                                    </div>
                                    <div class="form-group my-2">
                                        <lable for="avatar">Company Picture</lable>
                                        <input class="form-control" type="file" name="avatar">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group my-2">
                                        <lable for="contactPerson">Contact Person</lable>
                                        <input type="text" class="form-control" name="contactPerson" placeholder="Enter contact person name" required>
                                    </div>
                                    <div class="form-group my-2">
                                        <lable for="location">Location</lable>
                                        <input type="text" class="form-control" name="location" placeholder="Enter company address" required>
                                    </div>
                                    <div class="form-group my-2">
                                        <lable for="joinDate">MOU Date</lable>
                                        <input type="text" class="form-control" name="mouDate" placeholder="Example: 10/12/2022" required>
                                    </div>
                                    <div class="form-group my-2">
                                        <lable for="mouSign">MOU Sign</lable>
                                        <input class="form-control" type="file" name="mouSign">
                                    </div>
                                </div>
                                <div class="form-group my-2">
                                    <input type="submit" value="Save" class="btn btn-success btn-sm">
                                    <a class="btn btn-primary btn-sm  m-2" href="{{ route('linkageIndustry') }}">Linkage Industry</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 my-2</div>