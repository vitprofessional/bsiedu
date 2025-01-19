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
                        <div class="card-header"> <h3>Lab Existing </h3> </div>
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
                            <form class="form text-danger font-weight-bold" action="{{ route('labStoreData') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}                        
                                <div class="form-group">
                                    <lable for="title">Lab Title</lable>
                                    <input class="form-control" type="text" name="title" placeholder="Enter gallery title">
                                </div>
                                <div class="form-group">
                                    <lable for="details">Details</lable>
                                    <textarea name="details" class="form-control" placeholder="Details"></textarea>
                                </div>
                                <div class="form-group">
                                    <lable for="avatar">Media</lable>
                                    <input class="form-control" type="file" name="image">
                                </div>
                                <div class="form-group mt-2">
                                    <input type="submit" value="Submit" class="btn btn-primary">
                                    <a class="btn btn-success" href="{{ route('lab') }}">Go to lab </a>
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