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
                        <div class="card-header"> <h3> Update Syllabus </h3> </div>
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
                          
                            <form class="form text-danger font-weight-bold" action="{{ route('juniorStaffUpdate') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}                        
                                <input type="hidden" name="id" value="{{ $Datakey->id }}">
                                <div class="form-group">
                                        <lable for="probidhan">Name</lable>
                                        <input class="form-control" type="text" name="name" value="{{ $Datakey->name }}">
                                    </div>
                                    <div class="form-group">
                                        <lable for="probidhan">Phone</lable>
                                        <input class="form-control" type="text" name="phone" value="{{ $Datakey->phone }}">
                                    </div>     
                                    <div class="form-group">
                                        <lable for="probidhan">Degination</lable>
                                        <input class="form-control" type="text" name="degination" value="{{ $Datakey->degination }}">
                                    </div> 
                                    <div class="form-group">
                                        <lable for="probidhan">Image</lable>
                                        <input class="form-control" type="file" name="image" >
                                    </div> 
                                    <img src="{{asset('/')}}public/backdoor/uploads/user_images/{{$Datakey->image}}" style="width:200px; height:180px; margin:auto; text-align:center;"/>
                                    <div class="form-group mt-2">
                                        <input type="submit" value="Submit" class="btn btn-primary">
                                         <a class="btn btn-success" href="{{ route('juniorStaffview') }}">Staff List</a> 
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