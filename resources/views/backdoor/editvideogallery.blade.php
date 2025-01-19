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
                        <div class="card-header"> <h3>Video Existing</h3> </div>
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
                            @php
                                if(!empty($videogallery->location)):
                            @endphp
                            <label>How to add media</label>
                            <label class="my-2">Video Preview</label>
                            <div class="form-group">
                                <iframe width="100%" height="auto" src="{{ $videogallery->location }}" title="{{ $videogallery->title }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            @php
                                else:
                            @endphp
                            <form class="form" method="POST" action="{{ route('updatevideogalleryobject') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" name="proid" value="{{ $videogallery->id }}">
                                <div class="form-group">
                                    <input class="form-control" type="file" name="avatar">
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Upload Picture" class="btn btn-success btn-sm mt-2 mb-2">
                                </div>
                            </form>
                            @php
                                endif;
                            @endphp
                            <form class="form text-danger font-weight-bold" action="{{ route('updatevideogallery') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}  
                                <input type="hidden" name="proid" value="{{ $videogallery->id }}">
                                <div class="form-group">
                                    <lable for="title">Gallery Title</lable>
                                    <input class="form-control" type="text" name="title" value="{{ $videogallery->title }}" placeholder="Enter gallery title">
                                </div>
                                <div class="form-group">
                                    <lable for="details">Details</lable>
                                    <textarea name="details" class="form-control" placeholder="Details">{{ $videogallery->details }}</textarea>
                                </div>
                                <div class="form-group">
                                    <lable for="avatar">Media</lable>
                                    <input class="form-control" type="file" name="avatar" value="{{ $videogallery->location }}" placeholder="Enter media link">
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