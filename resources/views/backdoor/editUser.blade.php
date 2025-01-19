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
                        <div class="card-header"> <h3> Update Semester </h3> </div>
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
                        <form class="form text-danger font-weight-bold" action="{{ route('updateUser',$editData->id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                <div class="row">
                                    <div class="form-group">
                                        <lable for="name">User Name</lable>
                                        <input type="text" class="form-control" name="adminname" value="{{$editData->adminname}}" required>
                                    </div>
                                    <div class="form-group">
                                        <lable for="email">Email</lable>
                                        <input type="text" value="{{$editData->adminemail}}" class="form-control" name="adminemail">
                                    </div>
                                    <div class="form-group">
                                        <lable for="adminmobile">Mobile Number</lable>
                                        <input type="text" class="form-control" name="adminmobile" value="{{$editData->adminmobile}}" required>
                                    </div>
                                    <div class="form-group">
                                        <lable for="adminspeech">Admin Speech</lable>
                                        <textarea row="10" class="form-control" name="adminspeech">{{$editData->adminspeech}} </textarea>
                                    </div>
                                    <div class="form-group">
                                        <lable for="adminimage">Picture</lable>
                                        <input class="form-control mb-10" id="image" type="file" name="adminimage">
                                    </div>
                                   <img src ="{{(!empty($editData->adminimage))?url('public/backdoor/uploads/user_images/'.$editData->adminimage):url('public/backdoor/upload/no_images.png')}}" 
                                   id="showImage" class="img-fluid" style="width:150px;margin-top:10px; ">
                                    <div class="form-group mt-2">
                                        <input type="submit" value="Submit" class="btn btn-primary">
                                        <a class="btn btn-success" href="{{ route('userview') }}">Admin List</a>
                                    </div>
                                </div>
                            </form>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection