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
                    <div class="row">
                        <div class="col-6 col-md-4">
                            @php
                                if(!empty($semisterplan->avatar)):
                            @endphp
                            <div class="form-group">
                                <iframe src="{{ asset('/') }}public/storage/frontend/uploads/semisterplan/{{ $semisterplan->avatar }}" title="{{ $semisterplan->subject }}">
                                </iframe>
                            </div>
                            <div class="form-group">
                                <a class="btn btn-danger btn-sm" href="{{ route('delSemisterPlanObject',['id'=>$semisterplan->id]) }}">Delete Media</a>
                            </div>
                            @php
                                else:
                            @endphp
                            <form class="form" method="POST" action="{{ route('updatesemisterplanobject') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" name="proid" value="{{ $semisterplan->id }}">
                                <div class="form-group">
                                    <input class="form-control" type="file" name="avatar">
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Upload Media" class="btn btn-success btn-sm">
                                </div>
                            </form>
                            @php
                                endif;
                            @endphp
                        </div>
                    </div>                          
                            <form class="form text-danger font-weight-bold" action="{{ route('updatesemisterplan') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}                        
                            <input type="hidden" name="proid" value="{{ $semisterplan->id }}">
                        <div class="row">
                                <div class="form-group">
                                    <lable for="subject">Subject</lable>
                                    <input class="form-control" type="text" name="subject" value="{{ $semisterplan->subject }}">
                                </div>

                                <div class="form-group">
                                    <lable for="department">Department</lable>
                                    <select class="form-control" name="department">
                                        <option value="Diploma In Survey">Diploma In Survey</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <lable for="semister">Semister</lable>
                                    <select class="form-control" name="semister">
                                        <option value="{{ $semisterplan->semister }}">{{ $semisterplan->semister }}</option>
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
                                    <lable for="prostatus">Status</lable>
                                    <select class="form-control" name="prostatus">
                                        <option value="{{ $semisterplan->status }}">{{ $semisterplan->status }}</option>
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                    </select>
                                </div>
                            </div>
                                <div class="form-group mt-2">
                                    <input type="submit" value="Submit" class="btn btn-primary">
                                    <a class="btn btn-success" href="{{ route('backsemisterplan')}}">Semister Plan List</a>
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