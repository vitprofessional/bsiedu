@extends('backdoor.include')
@section('bsiadmintitle')
@endsection
@section('bsiadmincontent')
<div class="row">
    <div class="col-md-12 pt-0 pr-2 pl-2 pb-2">
        <div class="row align-items-center">
            <div class="col-md-12 mt-1 mb-1">
                <div id="box-1" class="card card-body">
                    <h5>Create User Profile</h5>
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
                    <form class="form text-danger font-weight-bold" action="{{ route('userStore') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-6 col-md-4">
                                <div class="form-group">
                                    <lable for="name">User Name</lable>
                                    <input type="text" class="form-control" name="adminname" placeholder="Enter full name" required>
                                </div>
                            </div>
                          
                            <div class="col-6 col-md-4">
                                <div class="form-group">
                                    <lable for="email">Email</lable>
                                    <input type="text" placeholder="Enter Email " class="form-control" name="adminemail">
                                </div>
                            </div>
                         
                           
                            <div class="col-6 col-md-4">
                                <div class="form-group">
                                    <lable for="adminmobile">Mobile Number</lable>
                                    <input type="text" class="form-control" name="adminmobile" placeholder="Enter a valid mobile number" required>
                                </div>
                            </div>
                            
                           
                            <div class="col-6 col-md-4">
                                <div class="form-group">
                                    <lable for="adminspeech">Admin Speech</lable>
                                    <textarea class="form-control" name="adminspeech" placeholder=""></textarea>
                                </div>
                            </div>
                            <div class="col-6 col-md-4">
                                <div class="form-group">
                                    <lable for="adminpassword">Password</lable>
                                    <input type="password" class="form-control" name="adminpassword" id="password" placeholder="Enter Password" required>
                                </div>
                            </div>
                            <div class="col-6 col-md-4">
                                <div class="form-group">
                                    <lable for="adminpassword">Confirm Password</lable>
                                    <input type="password" class="form-control" name="adminpassword2" placeholder="Enter Password" required>
                                </div>
                            </div>
                          
                            <div class="col-6 col-md-4">
                                <div class="form-group">
                                    <lable for="adminimage">Picture</lable>
                                    <input class="form-control" id="image" type="file" name="adminimage">
                                </div>
                            </div>
                             <div class ="form-group col-md-4">
                            <img id = "showImage" src ="{{url('public/backdoor/uploads/no_images.png')}}" style="width:150px; height:160px; border:1px solid #ddd"/>
                        </div>
                            <div class="col-12 text-center">
                                <div class="form-group text-left">
                                    <input type="submit" value="Submit" class="btn btn-primary">
                                </div>
                                <a class="btn btn-success" href="{{ route('userview') }}">Admin List</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection