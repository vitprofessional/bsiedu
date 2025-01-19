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
                        <div class="card-header"> <h3>class Existing </h3> </div>
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
                            <form class="form text-danger font-weight-bold" action="{{ route('updateclassroutine') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}  
                                <input type="hidden" name="proid" value="{{$classroutine->id}}">
                                <div class="form-group">
                                    <lable for="department">Department</lable>
                                    <select class="form-control" name="department">
                                        <option value="Diploma In Survey">{{$classroutine->department}}</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <lable for="semister">Semister</lable>
                                    <select class="form-control" name="semister">
                                        <option>{{$classroutine->semister}}</option>
                                        <option value="1st Semister">1st Semister</option>
                                        <option value="2nd Semister">2nd Semister</option>
                                        <option value="3rd Semister">3rd Semister</option>
                                        <option value="4th Semister">4th Semister</option>
                                        <option value="5th Semister">5th Semister</option>
                                        <option value="6th Semister">6th Semister</option>
                                        <option value="7th Semister">7th Semister</option>
                                        <option value="8th Semister">8th Semister</option>
                                        <option value="All Semister">All Semister</option>
                                    </select>
                                </div>  
                                <div class="form-group">
                                    <lable for="semister">Shift</lable>
                                    <select class="form-control" name="shift">
                                         <option>{{$classroutine->shift}}</option>
                                        <option value="1st Shift">1st Shift</option>
                                        <option value="2nd Shift">2nd Shift</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <lable for="prostatus"> Status</lable>
                                    <select class="form-control" name="prostatus">
                                         <option>{{$classroutine->status}}</option>
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <lable for="avatar">Media</lable>
                                    <input class="form-control" type="file" name="avatar">
                                </div>
                                <div class="form-group text-center">
                                    <img src="{{ asset('/') }}{{$classroutine->avatar}}" style="width:150px; margin-top:5px;"/>
                                </div>
                                
                                <div class="form-group mt-2">
                                    <input type="submit" value="Submit" class="btn btn-primary">
                                    <a href="{{route('backclassroutine')}}" class="btn btn-success"> class list</a>
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