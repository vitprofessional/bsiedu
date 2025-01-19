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
                        <div class="card-header"> <h3> Update Probdhan </h3> </div>
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
                                        if(!empty($probidhan->avatar)):
                                    @endphp
                                    <div class="form-group">
                                        <iframe src="{{ asset('/') }}public/storage/frontend/uploads/probidhan/{{ $probidhan->avatar }}" title="{{ $probidhan->title }}">
                                        </iframe>
                                    </div>
                                    <div class="form-group">
                                        <a class="btn btn-danger btn-sm" href="{{ route('delProbidhanObject',['id'=>$probidhan->id]) }}">Delete Media</a>
                                    </div>
                                    @php
                                        else:
                                    @endphp
                                    <form class="form" method="POST" action="{{ route('updateprobidhanobject') }}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="proid" value="{{ $probidhan->id }}">
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
                            <form class="form text-danger font-weight-bold" action="{{ route('updateprobidhan') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}                        
                               
                            <div class="row">
                                <div class="form-group">
                                    <lable for="probidhan">Probidhan Name</lable>
                                    <input class="form-control" type="text" name="probidhan" value="{{ $probidhan->probidhan }}">
                                </div>
                                <div class="form-group">
                                    <lable for="department">Department</lable>
                                    <select class="form-control" name="department">
                                        <option value="Diploma In Survey">Diploma In Survey</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <lable for="prostatus">Probidhan Status</lable>
                                    <select class="form-control" name="prostatus">
                                        <option value="{{ $probidhan->status }}">{{ $probidhan->status }}</option>
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                    </select>
                                </div>
                                <div class="form-group mt-2">
                                    <input type="submit" value="Submit" class="btn btn-primary">
                                    <a class="btn btn-success" href="{{ route('backprobidhan') }}">Probidhan List</a> 
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