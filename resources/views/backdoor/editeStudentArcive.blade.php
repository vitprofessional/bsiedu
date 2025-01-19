
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
                        <div class="card-header"> <h3>Update Student Arcive </h3> </div>
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
                            <form class="form text-danger font-weight-bold" action="{{ route('updateStudentArcive') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}  
                                  <input type="hidden" name="id" value="{{ $Datakey->id }}">
                                <div class="form-group">
                                    <lable for="title"> Title</lable>
                                    <input class="form-control" type="text" name="title" value="{{ $Datakey->title }}">
                                </div>
                                <div class="form-group">
                                    <lable for="avatar">File</lable>
                                    <input class="form-control" type="file" name="file">
                                </div>
                                <iframe src="{{ asset('/') }}/{{ $Datakey->file }}" style="margin:5px; width:100%">
                                            </iframe>
                                <div class="form-group mt-2">
                                    <input type="submit" value="Submit" class="btn btn-primary">
                                    <a class="btn btn-success" href="{{ route('studentArcive') }}">Go Back  </a>
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