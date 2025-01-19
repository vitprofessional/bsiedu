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
                            <div class="row">
                                <div class="col-6 col-md-4">
                                    @php
                                        if(!empty($syllabus->avatar)):
                                    @endphp
                                    <div class="form-group">
                                        <iframe src="{{ asset('/') }}public/storage/frontend/uploads/syllabus/{{ $syllabus->avatar }}" title="{{ $syllabus->title }}">
                                        </iframe>
                                    </div>
                                    <div class="form-group">
                                        <a class="btn btn-danger btn-sm" href="{{ route('delSyllabusObject',['id'=>$syllabus->id]) }}">Delete Media</a>
                                    </div>
                                    @php
                                        else:
                                    @endphp
                                    <form class="form" method="POST" action="{{ route('updatesyllabusobject') }}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="proid" value="{{ $syllabus->id }}">
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
                            <form class="form text-danger font-weight-bold" action="{{ route('updatesyllabus') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}                        
                                <input type="hidden" name="proid" value="{{ $syllabus->id }}">
                                <div class="row">
                                    <div class="form-group">
                                        <lable for="probidhan">Probidhan</lable>
                                        <input class="form-control" type="text" name="probidhan" value="{{ $syllabus->probidhan }}">
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
                                            <option value="{{ $syllabus->semister }}">{{ $syllabus->semister }}</option>
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
                                        <lable for="prostatus">Syllabus Status</lable>
                                        <select class="form-control" name="prostatus">
                                            <option value="{{ $syllabus->status }}">{{ $syllabus->status }}</option>
                                            <option value="Active">Active</option>
                                            <option value="Inactive">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group mt-2">
                                    <input type="submit" value="Submit" class="btn btn-primary">
                                     <a class="btn btn-success" href="{{ route('backsyllabus') }}">Syllabus List</a> 
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