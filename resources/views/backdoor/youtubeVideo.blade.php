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
                        <div class="card-header"> 
                            <h3> Youtube Video Existing </h3>
                            <hr>
                            <h4><a href="{{route('videoIfo')}}"> Youtube video Upload Information </a></h4>
                        </div>
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
                            <form class="form text-danger font-weight-bold" action="{{ route('createvideogallery') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}                        
                                <div class="form-group">
                                    <lable for="title">Gallery Title</lable>
                                    <input class="form-control" type="text" name="title">
                                </div>
                                <div class="form-group">
                                    <lable for="details">Text Content</lable>
                                    <textarea name="details" class="form-control" placeholder="Details"></textarea>
                                </div>
                                <div class="form-group">
                                    <lable for="avatar">Media</lable>
                                    <input class="form-control" type="text" name="avatar">
                                </div>
                                <div class="form-group mt-2">
                                    <input type="submit" value="Submit" class="btn btn-primary">
                                    <a class="btn btn-success" href="{{ route('videogallery') }}">Video Gallery</a>
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