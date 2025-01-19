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
                        <div class="card-header"> <h3> Update Page </h3> </div>
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
                                if(!empty($photogallery)>0):
                            @endphp
                            <div class="row">
                                <div class="col-6 col-md-4">
                                    @php
                                        if(!empty($photogallery->location)):
                                    @endphp
                                    <div class="form-group">
                                        <img class="img-fluid" src="{{ asset('/') }}public/storage/frontend/uploads/photogallery/{{ $photogallery->location }}" alt="{{ $photogallery->title }}">
                                    </div>
                                    <div class="form-group">
                                        <a class="btn btn-danger btn-sm" href="{{ route('delPhotoGalleryObject',['id'=>$photogallery->id]) }}">Delete Picture</a>
                                    </div>
                                    @php
                                        else:
                                    @endphp
                                    <form class="form" method="POST" action="{{ route('updatephotogalleryobject') }}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="proid" value="{{ $photogallery->id }}">
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
                                </div>
                            </div>
                        <form class="form text-danger font-weight-bold" action="{{ route('updatephotogallery') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="proid" value="{{ $photogallery->id }}">
                        <div class="row">

                                <div class="form-group">
                                    <lable for="title">Gallery Title</lable>
                                    <input class="form-control" type="text" name="title" value="{{ $photogallery->title }}" placeholder="Enter gallery title">
                                </div>
                                <div class="form-group">
                                    <lable for="details">Details</lable>
                                    <textarea name="details" class="form-control" placeholder="Details">{{ $photogallery->details }}</textarea>
                                </div>
                            </div>
                                <div class="form-group mt-2">
                                    <input type="submit" value="Submit" class="btn btn-primary">
                                    <a class="btn btn-success" href="{{ route('photogallery') }}">Photo Gallery</a>
                                </div>
                            </form>
                    @else
                        <div class="alert alert-warning">Sorry! No data found with your query</div>
                        <a class="btn btn-success" href="{{ route('pagelist') }}">Page List</a>
                    @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection